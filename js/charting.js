/**
 *
 */
score.chartingv2 = {};

score.chartingv2.Base = function() {};

score.chartingv2.getSelection = function(drilldownUrl, selection, addOnUrl) {
    console.log(drilldownUrl + '?drilldown='+selection+'&'+addOnUrl);
    $('#dashboard-selection').html('');
    $('#dashboard-selection').addClass('loading');
    score.window.Notify('<img src="/bio/img/ajax-loader.gif" width="14" height="14" />&nbsp;&nbsp;Your report is loading...', 'info');
    $.get( drilldownUrl + '?drilldown=' + selection + '&' + addOnUrl, function(data) {
        $('#dashboard-selection').removeClass('loading');
        $('#dashboard-selection').html(data);
        $(".alert-info").css('display', 'none');

        var element = null;
        if ($('#main-pane-content').length) {
            element = $('#main-pane-content');
        } else if ($('#pop-content').length) {
            element = $('#pop-content');
        }
        if (element) {
            setTimeout(function(){ element.animate({
                scrollTop: $('#dashboard-selection').position().top - 5
            }, 1000)}, 150);
        }
    });
};

/* Display chart and optionally legend */
score.chartingv2.Base.prototype.render = function(width, height) {
    var width = (undefined == width) ? 460 : width;
    var height = (undefined == height) ? 230 : height;
    var fixedSize = (undefined == this._allowAutosize || this._allowAutosize == false);

    if ( this._type == 'Bar') {
        var len = this._options.series[0].data.length;

        if(len <= 2) 		height = 150;
        else if (len <= 4) 	height = 190;
        else if (len <= 8) 	height = 240;
        else if (len <= 20) height = 440;
        else if (len <= 30) height = 520;
        else if (len <= 40) height = 600;
        else if (len <= 50) height = 720;
        else				height = 1024;

        console.log('for ' + len + ' columns, chart height is ' + height);
    }

    // If autosize is disabled use preset values for a column chart.
    // The chart will adjust to be proportionate with the size of the column.
    if ( this._type == 'Column' && fixedSize) {

        //Height will be set to 500
        height = 500;

        //Accomodate two series or single series graphs
        var seriesLen = this._options.series.length;
        var len = this._options.series[0].data.length;

        //If a single series adjust the width of the graph to be proportional
        if (seriesLen == 1) {
            width = 85 + len * 81;
        }

        //If a double series adjust the width of the graph to be proportional
        else if (seriesLen == 2) {
            if (this._options.series[1].data.length > len) {
                len =  this._options.series[1].data.length;
            }
            width = 85 + len * 115;
        }

        //Otherwise enable auto resizing.  (Only handling one or two series)
        else {
            this._allowAutosize = true;
        }

        //If width of chart is too large, allow auto resizing.
        if (width > 800) this._allowAutosize = true;

        console.log('(seriesLeng) ' + seriesLen + ' (columns) ' + len + ' (width) ' + width);
    }

    if (this._type == 'Line') {
        height = 300;
    }

    if (this._type == 'Pie' && height > width) {
        this._options.legend.floating = true;
        this._options.legend.verticalAlign = 'bottom';
        this._options.legend.y = 10;
    }

    if (undefined == this._allowAutosize || this._allowAutosize == false) {
        $("#"+this._container).width(width);
        $("#"+this._container).height(height);
    } else {
        $("#"+this._container).width($(window).width() * .65);
        $("#"+this._container).height($(window).height() * .65);
        $(window).resize(function(){
            $("#"+this._container).width($(window).width() * .65);
            $("#"+this._container).height($(window).height() * .65);
        });
    }

    this.chart = new Highcharts.Chart(this._options);

    if( this._type == 'Bar' && this._drilldownUrl ) {
        score.chartingv2.Bar.prototype.enableAxisClick.call(this);
    }
    if( this._type == 'Column' && this._drilldownUrl ) {
        score.chartingv2.Column.prototype.enableAxisClick.call(this);
    }
};

/*
 * By default, the exporting feature is disabled.  Use this to enable the feature,
 * which will add an icon next to the chart for the download.  Pass in the report
 * Title, which will become the filename and title for the exported chart.
 *
 */
score.chartingv2.Base.prototype.enableExporting = function(fileName) {
    this._options.exporting = {
        enabled: true,
        filename: fileName,
        chartOptions: {
            title : {
                text: fileName,
                style: { "fontWeight":"bold" }
            }
        }
    };
}

score.chartingv2.Base.prototype.reset = function() {};

score.chartingv2.Bar = function(title, drilldownUrl, containerId,allowAutosize) {
    this._container = (undefined==containerId) ? "chartNode" : containerId;
    if (true==allowAutosize) {
        this._allowAutosize = true;
    }
    this._type = "Bar";
    this._showLegend = false;
    this._chartData = null;
    this._title = (undefined==title) ? '' : title;
    this._options = {
        title : {
            text: this._title,
            style: { "fontWeight":"bold" }
        },
        chart: {
            renderTo: this._container,
            type: 'bar',
            marginRight: 20,
            style: {
                fontFamily:  '"Segoe UI", Futura, Helvetica, Arial, sans-serif'
            },
        },
        xAxis: {
            type: 'category',
            labels: {
                step: 1,
                style: { "lineHeight" : "9px"}
            }
        },
        yAxis: {
            title: {
                enabled: false
            }
        },
        tooltip: {
            hideDelay: 0,
            enabled: false,
            formatter: function () {
                var key = this.key.replace(/&/g, "&amp;").replace(/>/g, "&gt;").replace(/</g, "&lt;").replace(/"/g, "&quot;");
                return '<b>' + key + ' </b>: ' + this.y;
            }
        },
        series: [],
        plotOptions: {
            bar: {
                dataLabels: {
                    enabled: true,
                    crop: false,
                    overflow: 'none'
                },
            },
            series: {
                point: {
                    events: {
                        mouseOver: function () {
                            $('#' + containerId + ' .highcharts-axis-labels text').eq(this.x).css('font-weight', 'bold');
                        },
                        mouseOut: function () {
                            $('#' + containerId + ' .highcharts-axis-labels text').eq(this.x).css('font-weight', 'normal');
                        }
                    }
                }
            }
        },
        legend: {
            enabled: false
        },
        exporting: { enabled: false }
    };

    $("#"+this._container).html('');

    this._drilldownUrl = (undefined==drilldownUrl) ? false : drilldownUrl;
    if (this._drilldownUrl) {
        var addOnUrl = '';
        if( !$('#dashboard-select').hasClass('dijitReset') ) {
            addOnUrl = $('#dashboard-select').length ? 'id=' + $('#dashboard-select').val() : '';
        } else {
            addOnUrl = $('#dashboard-select').length ? 'id=' + $('input[name=dashboard-select]').val() : '';
        }
        console.log('Charting - addOnUrl', addOnUrl);
        if (addOnUrl == null || addOnUrl == '') {
            if ($('#additionalChartParams').length) {
                addOnUrl = $('#additionalChartParams').val();
                console.log("Charting - AdditionalParams", addOnUrl);
            }
        }

        this._addOnUrl = addOnUrl;
        var drilldownUrl = this._drilldownUrl;

        this._options.plotOptions.series.cursor = "pointer";
        this._options.plotOptions.series.point = {
            events: {
                click: function(event) {
                    var selection = this.name;
                    score.chartingv2.getSelection(drilldownUrl, selection, addOnUrl);
                },
                mouseOver: function () {
                    $('#' + containerId + ' .highcharts-axis-labels text').eq(this.x).css('font-weight', 'bold');
                },
                mouseOut: function () {
                    $('#' + containerId + ' .highcharts-axis-labels text').eq(this.x).css('font-weight', 'normal');
                }
            }
        }
    }
};

score.chartingv2.Bar.prototype = new score.chartingv2.Base();

score.chartingv2.Bar.prototype.addData = function(data) {
    this._chartData = data;
    var series = {
        data: []
    };
    var labelMargin = undefined;
    $.each(this._chartData, function(itemNo, item) {
        series.data.push([item.text, item._value]);
        if (item.text.length >= 20) {
            labelMargin = 210 + (item.text.length-20) * 4;
        }
    });
    if ( labelMargin != undefined ) {
        this._options.chart.marginLeft = labelMargin;
        console.log('labelMargin is updated to:' + labelMargin);
    }
    series.data.reverse();
    this._options.series.push(series);
};

/*
 * This enables click on the tooltip for the chart.
 * Example of setting from prototype.render:
 * score.chartingv2.Bar.prototype.enableTooltipClick.call(this);
 */
score.chartingv2.Bar.prototype.enableTooltipClick = function(data) {
    if (this._drilldownUrl) {
        var containerId = this._container;
        var drilldownUrl = this._drilldownUrl;
        var addOnUrl = this._addOnUrl;
        $('#' + containerId + ' .highcharts-tooltip text').css('cursor', 'pointer');
        $('#' + containerId + ' .highcharts-tooltip text').click(function () {
            var selection = this.textContent.split(" : ")[0];
            score.chartingv2.getSelection(drilldownUrl, selection, addOnUrl);
        });
    }
};

score.chartingv2.Bar.prototype.enableAxisClick = function(data) {
    if (this._drilldownUrl) {
        var containerId = this._container;
        var drilldownUrl = this._drilldownUrl;
        var addOnUrl = this._addOnUrl;
        var xaxisElementString = '#' + containerId + ' .highcharts-xaxis-labels text, #' + containerId + ' .highcharts-xaxis-labels span';
        $(xaxisElementString).css('cursor', 'pointer');
        $(xaxisElementString).mouseover(function (event) {
            $(this).css('font-weight', 'bold');
        });
        $(xaxisElementString).mouseout(function (event) {
            $(this).css('font-weight', 'normal');
        });
        $(xaxisElementString).click(function (event) {
            var selection = '';
            if ($(this).children('tspan').length == 0) {
                selection = this.textContent;
            } else {
                $(this).children('tspan').each(function() {
                    selection += this.textContent +' '
                });
                selection = selection.trim();
            }
            score.chartingv2.getSelection(drilldownUrl, selection, addOnUrl);
        });
    }
};

score.chartingv2.Pie = function(title, drilldownUrl, containerId, showLegend) {
    this._container = (undefined==containerId) ? "chartNode" : containerId;
    this._type = "Pie";
    this._chartData = null;
    this._showLegend = (undefined==showLegend) ? false : showLegend;
    this._title = (undefined==title) ? '' : title;
    this._options = {
        title : {
            text: this._title,
            style: { "fontWeight":"bold" }
        },
        chart: {
            type: 'pie',
            marginTop: 0,
            renderTo: this._container,
            style: {
                fontFamily:  '"Segoe UI", Futura, Helvetica, Arial, sans-serif',
                fontSize: '14px'
            },
            events: {}
        },
        tooltip:{
            enabled: true,
            hideDelay: 0,
            formatter: function () {
                var key = this.key.replace(/&/g, "&amp;").replace(/>/g, "&gt;").replace(/</g, "&lt;").replace(/"/g, "&quot;");
                return '<b>' + key + '</b> - ' + this.y + ' (' + this.percentage.toFixed(1) + '%)';
            }
        },
        series: [],
        plotOptions: {
            pie: {
                cursor: 'pointer',
                showInLegend: true,
                spacingBottom: 25,
                dataLabels: {
                    enabled: false
                },
                point: {
                    events: {
                        mouseOver: function () {
                            $('#' + containerId + ' div.highcharts-legend-item').eq(this.x).find('span').css('font-weight', 'bold');
                        },
                        mouseOut: function () {
                            $('#' + containerId + ' div.highcharts-legend-item').eq(this.x).find('span').css('font-weight', '');
                        },
                        click: function () {
                            return false;
                        },
                        legendItemClick: function () {
                            return false;
                        }
                    }
                }
            },
        },
        legend: {
            enabled: this._showLegend,
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'top',
            itemStyle: { fontWeight: "normal" },
            itemHoverStyle: { fontWeight: "bold" },
            useHTML: true,
            labelFormatter: function() {
                return '<div style="width:200px"><span style="float:left">' + this.name +
                '</span><span style="float:right">' + this.y + ' (' + this.percentage.toFixed(1) + '%)</span></div>';
            }
        },
        exporting: { enabled: false }
    };

    this._drilldownUrl = (undefined==drilldownUrl) ? false : drilldownUrl;
    if (this._drilldownUrl) {
        var addOnUrl = '';
        if( !$('#dashboard-select').hasClass('dijitReset') ) {
            addOnUrl = $('#dashboard-select').length ? 'id=' + $('#dashboard-select').val() : '';
        } else {
            addOnUrl = $('#dashboard-select').length ? 'id=' + $('input[name=dashboard-select]').val() : '';
        }
        console.log('Charting - addOnUrl', addOnUrl);
        if (addOnUrl == null || addOnUrl == '') {
            if ($('#additionalChartParams').length) {
                addOnUrl = $('#additionalChartParams').val();
                console.log("Charting - AdditionalParams", addOnUrl);
            }
        }

        this._addOnUrl = addOnUrl;
        var drilldownUrl = this._drilldownUrl;

        this._options.plotOptions.pie.point.events.click = function(event) {
            var selection = this.name;
            score.chartingv2.getSelection(drilldownUrl, selection, addOnUrl);
            // return false to prevent defeault highchart behavior on pie click
            return false;
        }
        this._options.plotOptions.pie.point.events.legendItemClick = function(event) {
            var selection = this.name;
            score.chartingv2.getSelection(drilldownUrl, selection, addOnUrl);
            // return false to prevent defeault highchart behavior on legend item click
            return false;
        }
    }
};

score.chartingv2.Pie.prototype = new score.chartingv2.Base();

score.chartingv2.Pie.prototype.getSelection = function(drilldownUrl, selection, addOnUrl) {
    console.log(drilldownUrl + '?drilldown='+selection+'&'+addOnUrl);
    $('#dashboard-selection').html('');
    $('#dashboard-selection').addClass('loading');
    score.window.Notify('<img src="/bio/img/ajax-loader.gif" width="14" height="14" />&nbsp;&nbsp;Your report is loading...', 'info');
    $.get( drilldownUrl + '?drilldown=' + selection + '&' + addOnUrl, function(data) {
        $('#dashboard-selection').removeClass('loading');
        $('#dashboard-selection').html(data);
        $(".alert-info").css('display', 'none');
        $('#main-pane-content').animate({
            scrollTop: $('#dashboard-selection').position().top
        }, 1000);
    });
};

score.chartingv2.Pie.prototype.addData = function(data) {
    var colorMap = {
            'red'    : '#f15c80',
            'yellow' : '#FFDE00',
            'orange' : '#f7a35c',
            'blue'   : '#7cb5ec',
            'green'  : '#55BF3B'
        };

    this._chartData = data;
    var series = {
        type: 'pie',
        data: []
    };
    $.each(this._chartData, function(itemNo, item) {
        if ("color" in item) {
            if (item.color in colorMap)
                series.data.push({ name:item.key, y: item.y, color: colorMap[item.color]});
            else
                series.data.push({ name:item.key, y: item.y, color: item.color});
        } else {
            series.data.push([item.key, item.y]);
        }
    });
    this._options.series.push(series);
};

score.chartingv2.Line = function(title, drilldownUrl, containerId) {
    this._container = (undefined==containerId) ? "chartNode" : containerId;
    this._type = "Line";
    this._chartData = null;
    this._showLegend = false;
    this._title = (undefined==title) ? '' : title;
    this._options = {
        title : {
            text: this._title,
            style: { "fontWeight":"bold" }
        },
        chart: {
            renderTo: this._container,
            style: {
                fontFamily:  '"Segoe UI", Futura, Helvetica, Arial, sans-serif',
                fontSize: '14px'
            },
            exporting: { enabled: false }
        },
        xAxis: {
            labels: {
                rotation: -45
            },
            categories: []
        },
        legend: {
            enabled: false
        },
        tooltip: {
            hideDelay: 0,
            formatter: function () {
                var key = this.key.replace(/&/g, "&amp;").replace(/>/g, "&gt;").replace(/</g, "&lt;").replace(/"/g, "&quot;");
                return '<b>' + key + ' </b>: ' + this.y;
            }
        },
        series: [],
        exporting: { enabled: false }
    };

    $("#"+this._container).html('');
};

score.chartingv2.Line.prototype = new score.chartingv2.Base();

/* Add data to chart */
score.chartingv2.Line.prototype.addData = function(data) {
    this._chartData = data;
    var series = {
        data: []
    };
    var categories = [];
    $.each(this._chartData, function(itemNo, item) {
        series.data.push(item._value);
        categories.push(item.text);
    });
    this._options.series.push(series);
    this._options.xAxis.categories = categories;
};


score.chartingv2.Column = function(title, drilldownUrl, containerId, showLegend, allowAutosize) {
    this._container = (undefined==containerId) ? "chartNode" : containerId;
    this._showLegend = (undefined==showLegend) ? false : showLegend;
    if (true==allowAutosize) {
        this._allowAutosize = true;
    }
    this._type = "Column";
    this._chartData = null;
    this._title = (undefined==title) ? '' : title;
    this._options = {
        title : {
            text: this._title,
            style: { "fontWeight":"bold" }
        },
        chart: {
            renderTo: this._container,
            type: 'column',
            marginRight: 20,
            style: {
                fontFamily:  '"Segoe UI", Futura, Helvetica, Arial, sans-serif'
            }
        },
        xAxis: {
            type: 'category',
            labels: {
                step: 1,
                style: { "lineHeight" : "9px"}
            }
        },
        yAxis: {
            title: {
                enabled: true,
                align:   'middle'
            },
            labels: {
                overflow:  'justify'
            }
        },
        tooltip: {
            hideDelay: 0,
            enabled: true,
            formatter: function () {
                return '<b>' + this.key + ': ' + this.y + ' </b>';
            }
        },
        series: [],
        plotOptions: {
            column: {
                dataLabels: {
                    enabled: true,
                    minPointLength: 3,
                    rotation: -450,
                    y: -22,
                    x: 5,
                    style: {"fontSize": "12px", "fontWeight": "bold" }
                }
            },
            series: {
                point: {
                    events: {
                        mouseOver: function () {
                            $('#' + containerId + ' .highcharts-axis-labels text').eq(this.x).css('font-weight', 'bold');
                        },
                        mouseOut: function () {
                            $('#' + containerId + ' .highcharts-axis-labels text').eq(this.x).css('font-weight', 'normal');
                        }
                    }
                }
            }
        },
        legend: {
            enabled: this._showLegend
        },
        exporting: { enabled: false }
    };

    $("#"+this._container).html('');

    this._drilldownUrl = (undefined==drilldownUrl) ? false : drilldownUrl;
    if (this._drilldownUrl) {
        this._addOnUrl = $('#dashboard-select').length ? 'id=' + $('#dashboard-select').val() : '';
        console.log('Charting - addOnUrl', this._addOnUrl);
        if (this._addOnUrl == null || this._addOnUrl == '') {
            if ($('#additionalChartParams').length) {
                this._addOnUrl = $('#additionalChartParams').val();
                console.log("Charting - AdditionalParams", this._addOnUrl);
            }
        }

        this._options.plotOptions.series.cursor = "pointer";
        this._options.plotOptions.series.point = {
            events: {
                click: function(event) {
                    var selection = event.currentTarget.series.name[0];
                    this._addOnUrl = 'category=' + event.currentTarget.category;
                    score.chartingv2.getSelection(drilldownUrl, selection, this._addOnUrl);
                },
                mouseOver: function () {
                    $('#' + containerId + ' .highcharts-axis-labels text').eq(this.x).css('font-weight', 'bold');
                },
                mouseOut: function () {
                    $('#' + containerId + ' .highcharts-axis-labels text').eq(this.x).css('font-weight', 'normal');
                }
            }
        }
    }
};

score.chartingv2.Column.prototype = new score.chartingv2.Base();


/* Add data to chart */
score.chartingv2.Column.prototype.addData = function(data) {
    this._chartData = data;
    var series = {
        data: []
    };
    var labelMargin = undefined;
    $.each(this._chartData, function(itemNo, item) {
        series.data.push([item.text, item._value]);
        if (item.text.length >= 20) {
            labelMargin = 210 + (item.text.length-20) * 4;
        }
    });
    if ( labelMargin != undefined ) {
        this._options.chart.marginLeft = labelMargin;
        console.log('Charting - labelMargin is updated to:' + labelMargin);
    }
    series.data.reverse();
    this._options.series.push(series);
};

/* Add series data to chart for one series.
 * This expects the value of data to be as set in Report getChartJsonData().
 *
 */
score.chartingv2.Column.prototype.addSeriesData = function(data, seriesName) {
    var series = {
        name: [],
        data: []
    };
    var categories = [];
    series.name.push(seriesName);
    $.each(data, function(itemNo, item) {
        series.data.push(item._value);
        categories.push(item.text);
    });
    this._options.series.push(series);

    if (this._options.xAxis.categories === undefined) {
        this._options.xAxis.categories = categories;
    }
};

/*
 * When months in the charts are numeric, use this function to set the lables
 * to the month names.
 *
 */

score.chartingv2.Column.prototype.formatMonthLabels = function() {

    this._options.xAxis.labels = {
        style: {
                fontWeight: 'bold',
                fontSize: '16px'
        },
        formatter: function() {
            var returnMonth = "Not Assigned";
            switch (this.value) {
                case 1:  { returnMonth = "January"; break; }
                case 2:  { returnMonth = "February"; break; }
                case 3:  { returnMonth = "March"; break; }
                case 4:  { returnMonth = "April"; break; }
                case 5:  { returnMonth = "May"; break; }
                case 6:  { returnMonth = "June"; break; }
                case 7:  { returnMonth = "July"; break; }
                case 8:  { returnMonth = "August"; break; }
                case 9:  { returnMonth = "September"; break; }
                case 10: { returnMonth = "October"; break; }
                case 11: { returnMonth = "November"; break; }
                case 12: { returnMonth = "December"; break; }
                default: { returnMonth = "Not Assigned"; break; }
            }
            return returnMonth;
        }
    }
};

/*
 * Set categories for multi-series reports or other hard coded categories.
 *
 * @param {String} JSON array of categories
 */
score.chartingv2.Column.prototype.addCategoryData = function(categories) {
    var categories = $.parseJSON(categories);
    this._options.xAxis.categories = categories;
    this._options.xAxis.max = categories.length - 1;
};

score.chartingv2.Column.prototype.disableSeriesBarClick = function(containerId) {
    this._options.plotOptions.series.point = {
        events: {
            click: function(event) {
                return false;
            },
            mouseOver: function () {
                $('#' + containerId + ' .highcharts-axis-labels text').eq(this.x).css('font-weight', 'bold');
            },
            mouseOut: function () {
                $('#' + containerId + ' .highcharts-axis-labels text').eq(this.x).css('font-weight', 'normal');
            }
        }
    }
};

/*
 * Add the line with the data points to the chart
 * This receives a Json array in the same format as the
 * chart data.
 *
 * Format of data expected:
 *
     Build list of arrays as follows:

     $jsonArr[] = array(
        'value'   => <index>,
        'text'    => "title",
        'tooltip' => "title " . " - " . <data value>,
        '_value'  => <data value>
     );

     pass in as json_encode($jsonArr) to data.
 *
 */
score.chartingv2.Column.prototype.addSplineData = function(data,splineTitle) {
    this._chartData = data;
    this._splineData = data;
    var series = {
        type: 'spline',
        name: [],
        data: [],
        marker: {
            lineWidth: 2,
            lineColor: Highcharts.getOptions().colors[3],
            fillColor:  'white'
        }
    };
    var categories = [];
    series.name.push(splineTitle);
    this.name = splineTitle;
    $.each(this._chartData, function(itemNo, item) {
        series.data.push(item._value);
    });
    this._options.series.push(series);
};

/*
 * This enables click on the tooltip for the chart.
 * Example of setting from prototype.render:
 * score.chartingv2.Column.prototype.enableTooltipClick.call(this);
 */
score.chartingv2.Column.prototype.enableTooltipClick = function(data) {
    if (this._drilldownUrl) {
        $('#' + this._container + ' .highcharts-tooltip text').css('cursor', 'pointer');
        $('#' + this._container + ' .highcharts-tooltip text').click(function () {
            var selection = this.textContent.split(" : ")[0];
            console.log('Charting - enableTooltipClick selection:' + selection);
            score.chartingv2.getSelection(this._drilldownUrl, selection, this._addOnUrl);
        });
    }
};

/*
 * If a chart series and categories are defined, this will retrieve the information to pass
 * to the controller through addOnUrl, otherwise undefined will be set for these two parameters.
 *
 */

score.chartingv2.Column.prototype.enableAxisClick = function(data) {
    var seriesJson = '{ "series" : [';
    var categoriesJson = '{ "categories" : [';

    // build the series json data to pass to the controller:
    if (undefined == this.chart.series) {
        console.log("Charting - enableAxisClick this.chart.series is not defined - unable to retrieve series data...");
    } else {
        var row = 0;
        for (var k in this.chart.series){
            if (this.chart.series.hasOwnProperty(k)) {
                seriesJson += '{';
                seriesJson += '"name":"' + this.chart.series[k]['name'] + '",';
                seriesJson += '"selected":"' + this.chart.series[k]['selected'] + '",';
                seriesJson += '"data":[' + this.chart.series[k]['yData'] + ']';

                if (row < (this.chart.series.length - 1)) {
                    seriesJson += '},';
                }
                else {
                    seriesJson += '} ';
                }
                ++row;
           }
        }
    }

    seriesJson += ']}';

    row = 0;
    if (this._options.xAxis['categories'] === undefined) {
        console.log("Charting - enableAxisClick this._options.xAxis categories is not defined");
    } else {
        for (i = 0; i < this._options.xAxis['categories'].length; i++) {
            if (row < (this._options.xAxis['categories'].length - 1)) {
                categoriesJson += '"' + this._options.xAxis['categories'][i] + '",';
            }
            else {
                categoriesJson += '"' + this._options.xAxis['categories'][i] + '"';
            }
            ++row;
        }
    }

    categoriesJson += ']}';
    console.log("categories json: " + categoriesJson);

    if (this._drilldownUrl) {
        console.log('Charting - enableAxisClick xaxis container: ' + this._container);
        var drilldownUrl = this._drilldownUrl;
        var addOnUrl = this._addOnUrl;
        var xaxisElementString = '#' + this._container + ' .highcharts-xaxis-labels text, #' + this._container + ' .highcharts-xaxis-labels span';
        $(xaxisElementString).css('cursor', 'pointer');
        $(xaxisElementString).mouseover(function (event) {
            $(this).css('font-weight', 'bold');
        });
        $(xaxisElementString).mouseout(function (event) {
            $(this).css('font-weight', 'normal');
        });
        $(xaxisElementString).click(function (event) {
            var selection = '';
            if ($(this).children('tspan').length == 0) {
                selection = this.textContent;
            } else {
                $(this).children('tspan').each(function() {
                    selection += this.textContent +' '
                });
                selection = selection.trim();
            }

            addOnUrl = addOnUrl + "&series=" +  seriesJson + "&categories=" + categoriesJson;
            console.log('Charting - enableAxisClick xaxis selection: ' + selection);
            console.log("Charting - enableAxisClick drilldownUrl: " + drilldownUrl);
            console.log("Charting - enableAxisClick addOnUrl: " + addOnUrl);
            score.chartingv2.getSelection(drilldownUrl, selection, addOnUrl);
        });
    }
};
