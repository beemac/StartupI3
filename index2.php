<html class="dj_gecko dj_contentbox"><head>
<title>ICG - StartUps and ScaleUps</title>
<meta http-equiv="X-UA-Compatible" content="chrome=1">
<link rel="shortcut icon" type="image/x-icon" href="/img/favicon.ico">

<link rel="stylesheet" type="text/css" href="/css/claro.css">
<link rel="stylesheet" type="text/css" href="/css/score.min.css">
<link rel="stylesheet" type="text/css" href="/css/chosen.css">

<script type="text/javascript" src="/js/dojo.js" djconfig="parseOnLoad:true"></script>
</head>
<body>

<?php
    if( getenv( "VCAP_SERVICES" ) )
    {
        # Get database details from the VCAP_SERVICES environment variable
        #
        # *This can only work if you have used the Bluemix dashboard to
        # create a connection from your dashDB service to your PHP App.
        #
        $details  = json_decode( getenv( "VCAP_SERVICES" ), true );
        $dsn      = $details [ "dashDB For Transactions" ][0][ "credentials" ][ "dsn" ];
        $ssl_dsn  = $details [ "dashDB For Transactions" ][0][ "credentials" ][ "ssldsn" ];
        
        # Build the connection string
        #
        $driver = "DRIVER={IBM DB2 ODBC DRIVER};";
        $conn_string = $driver . $dsn;     # Non-SSL
        $conn_string = $driver . $ssl_dsn; # SSL
        
        $conn = db2_connect( $conn_string, "", "" );
        if( $conn )
        {
            echo "<p>Connection succeeded.</p>";
            db2_close( $conn );
        }
        else
        {
            echo "<p>Connection failed.</p>";
        }
    }
    else
    {
        echo "<p>No credentials.</p>";
    }
    ?>

<textarea id="dijit._editor.RichText.value" style="display:none;position:absolute;top:-100px;left:-100px;height:3px;width:3px;overflow:hidden;"></textarea>

<script type="text/javascript" src="/js/score.min.js"></script>
<script type="text/javascript" src="/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/js/validator.js"></script>
<script type="text/javascript" src="/js/jquery.tablesorter.js"></script>
<script type="text/javascript" src="/js/jquery.fastLiveFilter.js"></script>
<script type="text/javascript" src="/js/form2js.js"></script>
<script type="text/javascript" src="/js/typeahead.js"></script>
<script type="text/javascript" src="/js/facestypeahead-0.4.4.min.js"></script>
<script type="text/javascript" src="/js/chosen.jquery.js"></script>

<style>
.nav-link {
    letter-spacing: 0.5px;
}

.profilePic {
display: inline-block;
overflow: hidden;
    line-height: 1;
    vertical-align: middle;
    border-radius: 30px;
}

.dijitContentPaneLoading {
display: table;
margin: 0 auto;
    margin-top: 100px;
}

.alert-fixed {
position: fixed;
top: 60px;
left: 50%;
transform: translate(-50%, 0);
    z-index: 9999;
    border-radius: 0px;
width: 80%;
}
.alert-msgbox {
left: 50%;
transform: translate(-50%, 0);
    z-index: 9999;
    border-radius: 0px;
}
#loadhome {
margin-right: 1em;
}
#loadhome :hover {
cursor: pointer;
}

.btn-nav {
    background-color: transparent;
color: black;
}

.export-img {
width: 30px;
height: 30px;
padding: 7px;
}
.dropdown-toggle::after {
    margin-left: 0;
    margin-right: 0;
}
</style>

    <div class="alert alert-info alert-fixed" role="alert" id="messageBox" style="display:none;">
    <a class="close closealert" onclick="$('.alert').hide()" aria-label="Close">
    <span aria-hidden="true">×</span>
    </a>
    <div id="siteMessage"></div>
    </div>
    <div id="content" data-dojo-type="dojox.layout.ContentPane" style="padding-top: 40px; overflow: visible !important" class="dijitContentPane" title="" role="group" widgetid="content"><main role="main" class="container" style="padding-left: 0; margin-left:0px; max-width:100%; padding-right:0;">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <style>
    table {
        font-size: 15px;
    }
    
    table th{
        font-weight: 500;
    }
    
    table td{
        font-weight: 400;
    }
    
    svg {
        padding-bottom: 1px;
    cursor: pointer;
    }
    
    svg :hover {
        padding-bottom: 1px;
    fill: #17a2b8;
    }
    
    .media{
    margin-top: 10px;
    padding: 5px;
        background-color: #f5f7fa;
    }
    
    .tool-tip{
    margin-top: 10px;
    margin-bottom: 10px;
    padding: 5px;
        background-color: #f5f7fa;
    }
    
    .container {
        max-width: 1024px;
    }
    
    h4 {
        margin-bottom: 0.2em;
    }
    
    h5 {
        margin-bottom: 0.2em;
        font-size: 1.15em;
    }
    
    h6.filter-cat {
        margin-bottom: 0;
    }
    .label {
        font-weight: bolder;
        white-space: pre-wrap;
        float: left;
    }
    
    .multi-line {
    display: -webkit-box;
        white-space: pre-wrap;
    }
    
    .links {
        margin-top: 10px;
    }
    
    .links img {
    width: 24px;
    height: 24px;
    margin: 2.5px;
    }
    
    hr {
        margin-top: 0.5rem;
        margin-bottom: 0.5rem;
    }
    
    #filter-banner {
position: -webkit-sticky;
top: 50px;
display: flex;
    max-width: 1024px;
}

</style>

<div class="container">

<div class="tool-tip" width="100%" style="font-size: 1.2em;font-weight: 500;padding-left: 15px;">
Tip: Press Ctrl+F (command+F on mac) to search.
</div>

<div id="filter-banner" class="form-control">
<div class="col-md-4">
<label for="bu-filter" class="filter-cat">Technology</label>
<select id="bu-filter" name="bu-filter" class="form-control filter ind" data-placeholder=" " multiple="" style="display: none;">
<?php
    $sql = "SELECT DISTINCT 'TECHNOLOGY' FROM PJW17276.STARTUPDB WHERE 'INCLUDE' <> 0;";
    $result = db2_execute($conn, $sql);
    
    while ($row = db2_fetch_assoc($result)) {
        echo '<option value="'.$row['TECHNOLOGY'].'">'.$row['TECHNOLOGY'].'</option>';
    }
    ?>
</select>
</div>

<div class="col-md-4">
<label for="ind-exp-filter" class="filter-cat">Industry</label>
<select id="ind-exp-filter" name="ind-exp-filter" class="form-control filter ind" data-placeholder=" " multiple="" style="display: none;">
<?php
    $sql = "SELECT DISTINCT 'INDUSTRY_TYPE' FROM PJW17276.STARTUPDB WHERE 'INCLUDE' <> 0;";
    $result = db2_execute($conn, $sql);
    
    while ($row = db2_fetch_assoc($result)) {
        echo '<option value="'.$row['INDUSTRY_TYPE'].'">'.$row['INDUSTRY_TYPE'].'</option>';
    }
    ?>
</select>
</div>

<div class="col-md-4">
<label for="loc-filter" class="filter-cat">Location</label>
<select id="loc-filter" name="loc-filter" class="form-control filter ind" data-placeholder=" " multiple="" style="display: none;">
<?php
    $sql = "SELECT DISTINCT 'BILLING_PROVINCE' FROM PJW17276.STARTUPDB WHERE 'INCLUDE' <> 0;";
    $result = db2_execute($conn, $sql);
    
    while ($row = db2_fetch_assoc($result)) {
        echo '<option value="'.$row['BILLING_PROVINCE'].'">'.$row['BILLING_PROVINCE'].'</option>';
    }
    ?>
</select>
</div>
</div>

<?php
    $sql = "SELECT * FROM PJW17276.STARTUPDB WHERE 'INCLUDE' <> 0;";
    $result = db2_execute($conn, $sql);
    
    while ($row = db2_fetch_assoc($result)) {
        echo '<div class="media '.$row['BILLING_PROVINCE'].' '.$row['TECHNOLOGY'].' '.$row['INDUSTRY_TYPE'].' '.$row['BILLING_PROVINCE'].'">';
        echo '  <div class="align-self-start mr-3">';
        echo '      <img alt="'.$row['ACCOUNT_NAME'].'" src="'.$row['LOGO_URL'].'" onerror="this.onerror=null; this.src="'.$row['DOMAIN_URL'].'";" width="125">';
        
        echo '  </div>';
        echo '  <div class="media-body mt-0">';
        echo '      <h4 class="name">';
        echo '          <a target="_blank" href="'.$row['DOMAIN_URL'].'">';
        echo '              <b>'.$row['ACCOUNT_NAME'].'</b>';
        echo '          </a>';
        echo '      </h4>';
        echo '      <h5 class="title">'.$row['INDUSTRY_TYPE'].'</h5>';
        echo '      <div class="bus-loc">';
        echo '          <span class="bu-loc">';
        echo '              '.$row['BILLING_CITY'].', '.$row['BILLING_PROVINCE'];
        echo '          </span>';
        echo '      </div>';
        echo '      <hr>';
        echo '      <div class="focus">';
        echo '          <div class="label">Description: </div>';
        echo '          <div class="multi-line">'.$row['COMPANY_DESCRIPTION'].'</div>';
        echo '      </div>';
        echo '      <div class="techexpertise">';
        echo '          <div class="label">IBM Contact: </div>';
        echo '          <div class="multi-line">'.$row['IBM_CONTACT'].', '.$row['IBM_EMAIL'].', '.$row['IBM_PHONE'].'</div>';
        echo '      </div>';
        echo '  </div>';
        echo '</div>';
    }
    ?>
</div>

</main>
<script type="text/javascript">
$('.edit-profile').click(function(e) {
                         e.preventDefault();
                         score.window.Modal.create(
                                                   'Edit Profile', '/bio/bio/home/editprofile?cnum='+$(this).data('cnum'), '', 'Submit', '', {backdrop: 'static', keyboard: false}
                                                   );
                         });

$('.create-profile').click(function() {
                           score.window.Modal.create(
                                                     'Create Profile', '/bio/bio/home/editprofile?cnum='+$(this).data('cnum'), '', 'Submit', '', {backdrop: 'static', keyboard: false}
                                                     );
                           });

$('.remove-profile').click(function(e) {
                           e.preventDefault();
                           if (confirm('Are you sure you want to remove ' + $(this).data('name') + ' from the DE+Fellow Database?')) {
                           $.ajax({
                                  url: "/bio/bio/home/removeprofile",
                                  type: "POST",
                                  data: JSON.stringify({'cnum': $(this).data('cnum')}),
                                  success: function(data) {
                                  window.location = '/bio/';
                                  setTimeout(function() {score.window.AlertMsg('Profile removed!', true);}, 1000);
                                  },
                                  error: function(data) {
                                  console.log(data.responseText);
                                  var res = $(data.responseText);
                                  score.window.ErrorMsg(res.filter('h2').text());
                                  }
                                  });
                           }
                           });

$('.remove-btn').click(function (e){
                       $($(this).data('id')).collapse('toggle');
                       })

$('#bu-filter').chosen({search_contains: true, width: "100%"});

$('#loc-filter').chosen({search_contains: true, width: "100%"});

$('#ind-exp-filter').chosen({search_contains: true, width: "100%"});


$('.filter').change(function() {
                    var bu = $('#bu-filter').val();
                    var loc = $('#loc-filter').val();
                    var ind = $('#ind-exp-filter').val();
                    
                    $(".media").each(function () {
                                     currentBio = $(this);
                                     currentBio.hide();
                                     buflag = 0;
                                     if (bu.length > 0) {
                                     bu.forEach(function (element) {
                                                if (currentBio.hasClass(element)) {
                                                buflag=1;
                                                }
                                                });
                                     } else {
                                     buflag= 1;
                                     }
                                     
                                     locflag = 0;
                                     if (loc.length > 0) {
                                     loc.forEach(function (element) {
                                                 if (currentBio.hasClass(element)) {
                                                 locflag = 1;
                                                 }
                                                 })
                                     } else {
                                     locflag = 1;
                                     }
                                     
                                     indflag = 0;
                                     if (ind.length > 0) {
                                     ind.forEach(function (element) {
                                                 if (currentBio.hasClass(element)) {
                                                 indflag = 1;
                                                 }
                                                 })
                                     } else {
                                     indflag = 1;
                                     }
                                     
                                     if (buflag && locflag && indflag) {
                                     currentBio.show();
                                     }
                                     });
                    });

</script></div>

<script type="text/javascript" src="/js/datatables.min.js"></script>
<script type="text/javascript" src="/js/dataTables.bootstrap4.js"></script>
<script>
dojo.ready(function(){
           
           $(".nav-item").on("click", function(){
                             $(".navbar").find(".active").removeClass("active");
                             $(this).addClass("active");
                             });
           
           $('a[href$="#bio-home"]').on("click", function(){
                                        $(".navbar").find(".active").removeClass("active");
                                        $('a[href$="#bio-home"].nav-link').parent().addClass("active");
                                        });
           
           // Bootstrap the client
           score.controller.bootstrap();
           
           // Listens for changes to url hash
           dojo.subscribe(score.constants.EVENT_HASH_CHANGE, this, function(hash){
                          score.controller.route(hash);
                          });
           
           
           // Reload dashboards on profile change
           dojo.subscribe(score.constants.EVENT_PROFILE_CHANGE, this, function(message) {
                          if (dijit.byId('dashboard-content')) {
                          var href = dijit.byId('dashboard-content').attr('href');
                          
                          if (href != '') {
                          dijit.byId('dashboard-content').attr('href', href);
                          }
                          }
                          });
           });

$('#loadhome').click(function() {
                     window.location = '/bio/';
                     });

</script>

</body></html>
