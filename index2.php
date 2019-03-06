<html class="dj_gecko dj_contentbox"><head>
<title>ICG - StartUps and ScaleUps</title>
<meta http-equiv="X-UA-Compatible" content="chrome=1">
<link rel="shortcut icon" type="image/x-icon" href="https://ccca.a14.can.ibm.com/canlab/img/favicon.ico">

<link rel="stylesheet" type="text/css" href="https://ccca.a14.can.ibm.com/canlab/css/claro.css">
<link rel="stylesheet" type="text/css" href="https://ccca.a14.can.ibm.com/canlab/css/score.min.css">
<link rel="stylesheet" type="text/css" href="https://ccca.a14.can.ibm.com/canlab/css/chosen.css">

<script type="text/javascript" src="https://ccca.a14.can.ibm.com/canlab/js/dojo.js" djconfig="parseOnLoad:true"></script>
</head>
<body>

<?php
    $servername = "sql303.epizy.com";
    $username = "epiz_23317245";
    $password = "aHjxEeldtkYIFG";
    $dbName = "epiz_23317245_startup";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbName);
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>

<textarea id="dijit._editor.RichText.value" style="display:none;position:absolute;top:-100px;left:-100px;height:3px;width:3px;overflow:hidden;"></textarea>

<script type="text/javascript" src="https://ccca.a14.can.ibm.com/canlab/js/score.min.js"></script>
<script type="text/javascript" src="https://ccca.a14.can.ibm.com/canlab/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="https://ccca.a14.can.ibm.com/canlab/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://ccca.a14.can.ibm.com/canlab/js/validator.js"></script>
<script type="text/javascript" src="https://ccca.a14.can.ibm.com/canlab/js/jquery.tablesorter.js"></script>
<script type="text/javascript" src="https://ccca.a14.can.ibm.com/canlab/js/jquery.fastLiveFilter.js"></script>
<script type="text/javascript" src="https://ccca.a14.can.ibm.com/canlab/js/form2js.js"></script>
<script type="text/javascript" src="https://ccca.a14.can.ibm.com/canlab/js/typeahead.js"></script>
<script type="text/javascript" src="https://ccca.a14.can.ibm.com/canlab/js/facestypeahead-0.4.4.min.js"></script>
<script type="text/javascript" src="https://ccca.a14.can.ibm.com/canlab/js/chosen.jquery.js"></script>

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
    <link rel="stylesheet" href="https://ccca.a14.can.ibm.com/canlab/css/font-awesome.min.css">
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

<h4><center><b>Leverage Start-ups For Your Deals and With Your Clients.</b></center> </h4>
<p class="ds-align-text-center">Find start-up company solutions, built on IBM technology, operating in your client's industry. Each start-up has been vetted by our Innovation Team to be non-competitive to IBM offerings and IBM partners. Contact the IBM Canada representative listed to start your client’s journey with the IBM Canada Innovation Ecosystem.</p>

<div class="tool-tip" width="100%" style="font-size: 1.2em;font-weight: 500;padding-left: 15px;">
Note: Please contact Bon McLean at brmclean@ca.ibm.com for general questions about this database.
</div>

<div class="tool-tip" width="100%" style="font-size: 1.2em;font-weight: 500;padding-left: 15px;">
Tip: Press Ctrl+F (command+F on mac) to search.
</div>

<div id="filter-banner" class="form-control">
<div class="col-md-4">
<label for="bu-filter" class="filter-cat">Technology</label>
<select id="bu-filter" name="bu-filter" class="form-control filter ind" data-placeholder=" " multiple="" style="display: none;">
<?php
    $sql = "SELECT DISTINCT `Technology` FROM `Sheet1` WHERE `Technology` IS NOT NULL AND `Include`<> 0 ORDER BY `Technology`";
    $result = $conn->query($sql);
    
    while ($row = $result->fetch_assoc()) {
        echo '<option value="'.$row['Technology'].'">'.$row['Technology'].'</option>';
    }
    ?>
</select>
</div>

<div class="col-md-4">
<label for="ind-exp-filter" class="filter-cat">Industry</label>
<select id="ind-exp-filter" name="ind-exp-filter" class="form-control filter ind" data-placeholder=" " multiple="" style="display: none;">
<?php
    $sql = "SELECT DISTINCT `Industry.Type` FROM `Sheet1` WHERE `Industry.Type` IS NOT NULL AND `Include`<> 0 ORDER BY `Industry.Type`";
    $result = $conn->query($sql);
    
    while ($row = $result->fetch_assoc()) {
        echo '<option value="'.$row['Industry.Type'].'">'.$row['Industry.Type'].'</option>';
    }
    ?>
</select>
</div>

<div class="col-md-4">
<label for="loc-filter" class="filter-cat">Location</label>
<select id="loc-filter" name="loc-filter" class="form-control filter ind" data-placeholder=" " multiple="" style="display: none;">
<?php
    $sql = "SELECT DISTINCT `Billing.Province` FROM `Sheet1` WHERE `Billing.Province` IS NOT NULL AND `Include`<> 0 ORDER BY `Billing.Province`";
    $result = $conn->query($sql);
    
    while ($row = $result->fetch_assoc()) {
        echo '<option value="'.$row['Billing.Province'].'">'.$row['Billing.Province'].'</option>';
    }
    ?>
</select>
</div>
</div>

<?php
    $sql = "SELECT * FROM `Sheet1` WHERE `Include` <> 0 ORDER BY `Include`, `Account.Name`";
    $result = $conn->query($sql);
    
    while ($row = $result->fetch_assoc()) {
        echo '<div class="media '.$row['Billing.Province'].' '.$row['Technology'].' '.$row['Industry.Type'].' '.$row['Billing.Province'].'">';
        echo '  <div class="align-self-start mr-3">';
        echo '      <img alt="'.$row['Account.Name'].'" src=https://ccca.a14.can.ibm.com/canlab'.$row['logo.URL'].' onerror="this.onerror=null; this.src="'.$row['domain.URL'].'";" width="125">';
        
        echo '  </div>';
        echo '  <div class="media-body mt-0">';
        echo '      <h4 class="name">';
        echo '          <a target="_blank" href="'.$row['domain.URL'].'">';
        echo '              <b>'.$row['Account.Name'].'</b>';
        echo '          </a>';
        echo '      </h4>';
        echo '      <h5 class="title">'.$row['Industry.Type'].'</h5>';
        echo '      <div class="bus-loc">';
        echo '          <span class="bu-loc">';
        echo '              '.$row['Billing.City'].', '.$row['Billing.Province'];
        echo '          </span>';
        echo '      </div>';
        echo '      <hr>';
        echo '      <div class="focus">';
        echo '          <div class="label">Description: </div>';
        echo '          <div class="multi-line">'.$row['Company.Description'].'</div>';
        echo '      </div>';
        echo '      <div class="ibmtech">';
        echo '          <div class="label">IBM Technology: </div>';
        echo '          <div class="multi-line">'.$row['Technology'].'</div>';
        echo '      </div>';
        echo '      <div class="techexpertise">';
        echo '          <div class="label">IBM Contact: </div>';
        echo '          <div class="multi-line">'.$row['IBM.Contact'].', '.$row['IBM.email'].', '.$row['IBM.phone'].'</div>';
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
