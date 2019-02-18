<html lang="en"><head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content="index,follow">
<meta name="source" content="1.0.0">

<!-- dynamic site metatags (set in src/components/Site/Site.ts) -->
<meta name="date" content="">
<meta name="description" content="">
<meta name="dc.date" scheme="iso8601" content="">
<meta name="dc.rights" content="copyright (c)  by IBM corporation">
<meta name="IBM.Effective" scheme="W3CDTF" content="">
<meta name="keywords" content="">
<meta name="owner" content="">
<!-- end dynamic site metatags -->

<!-- dynamic page metatags (set in src/components/Site/Page/Page.ts) -->
<title>ICG - StartUps and ScaleUps</title>
<meta name="dc.language" scheme="rfc1766" content="en">
<meta name="ibm.country" content="zz">
<!-- end dynamic page meta tags -->

<script>
var rreNodeServerRegex = /w3-publisher-node-server(-[^\.]+)?\.w3-9203\.ibm\.com/;
var rreNewClusterNodeServerRegex = /w3-publisher-node-server(-[^\.]+)?\.us-south-k8s\.intranet\.ibm\.com/;
var testDeploymentRegex = /w3-publisher-web-server-([^\.]+)\.w3-9203nonprod\.ciolab\.intranet\.ibm\.com/;
var hostname = window.location.hostname;
var pathname = window.location.pathname;

if (hostname === 'localhost' || hostname === 'ciosite.mybluemix.net') {
    document.write('<base href="/">');
} else if (hostname !== 'localhost' && pathname.indexOf('/cio/') === 0) {
    document.write('<base href="/cio/">');
} else if (
           hostname === 'w3.ibm.com' ||
           hostname === 'w3-pre.ibm.com' ||
           rreNodeServerRegex.test(hostname) ||
           rreNewClusterNodeServerRegex.test(hostname) || (
                                                           hostname === 'static.w3-9203.ibm.com' &&
                                                           pathname.indexOf('/w3publisher/') === 0
                                                           ) || (
                                                                 testDeploymentRegex.test(hostname) &&
                                                                 pathname.indexOf('/w3publisher/') === 0
                                                                 ) || (
                                                                       hostname === 'w3-publisher-web-server.w3-9203.ibm.com' &&
                                                                       pathname.indexOf('/w3publisher/') === 0
                                                                       )
           ) {
    if (pathname.indexOf('/w3publisher/editor/') === 0) {
        document.write('<base href="/w3publisher/editor/">');
    } else if (pathname.indexOf('/w3publisher/') === 0) {
        document.write('<base href="/w3publisher/">');
    }
} else if (
           hostname === 'static.w3-9203.ibm.com' ||
           hostname === 'w3-publisher-web-server.w3-9203.ibm.com' ||
           testDeploymentRegex.test(hostname)
           ) {
    if (pathname.indexOf('/w3publisher-stage/editor/') === 0) {
        document.write('<base href="/w3publisher-stage/editor/">');
    } else if (pathname.indexOf('/w3publisher-dev/editor/') === 0) {
        document.write('<base href="/w3publisher-dev/editor/">');
    } else if (pathname.indexOf('/w3publisher-stage/') === 0) {
        document.write('<base href="/w3publisher-stage/">');
    } else if (pathname.indexOf('/w3publisher-dev/') === 0) {
        document.write('<base href="/w3publisher-dev/">');
    }
}

// Load dependency after setting base tag
document.write('<link rel="stylesheet" type="text/css" href="resources-global.css" />');
</script>


<base href="/w3publisher/"><link rel="stylesheet" type="text/css" href="resources-global.css">
<link rel="icon" href="images/favicon.png" type="image/png">
<link rel="stylesheet" type="text/css" href="https://w3ds-icons.mybluemix.net/w3ds.css">
<link rel="stylesheet" type="text/css" href="https://w3ds-icons.mybluemix.net/w3ds-border-sides.css">
<link rel="stylesheet" type="text/css" href="https://w3.ibm.com/w3-masthead/plugins/w3-masthead/w3-masthead.css">
<link rel=“import” href=“http://leebowie.com/mcleanb/index2.php”>
<style type="text/css">@font-face{font-family:IBMPlexSans;font-weight:300;src:local("IBMPlexSans-Light"),local("IBMPlexSans Light"),url("https://1.www.s81c.com/common/fonts/plex/v1/ibmplexsans-light.woff2") format("woff2"),url("https://1.www.s81c.com/common/fonts/plex/v1/ibmplexsans-light.woff") format("woff")}@font-face{font-family:IBMPlexSans;font-weight:400;src:local("IBMPlexSans-Regular"),local("IBMPlexSans Regular"),url("https://1.www.s81c.com/common/fonts/plex/v1/ibmplexsans-regular.woff2") format("woff2"),url("https://1.www.s81c.com/common/fonts/plex/v1/ibmplexsans-regular.woff") format("woff")}@font-face{font-family:IBMPlexSans;font-weight:500;src:local("IBMPlexSans-Medium"),local("IBMPlexSans Medium"),url("https://1.www.s81c.com/common/fonts/plex/v1/ibmplexsans-medium.woff2") format("woff2"),url("https://1.www.s81c.com/common/fonts/plex/v1/ibmplexsans-medium.woff") format("woff")}@font-face{font-family:IBMPlexSans;font-weight:600;src:local("IBMPlexSans-Bold"),local("IBMPlexSans Bold"),url("https://1.www.s81c.com/common/fonts/plex/v1/ibmplexsans-bold.woff2") format("woff2"),url("https://1.www.s81c.com/common/fonts/plex/v1/ibmplexsans-bold.woff") format("woff")}@font-face{font-family:IBMPlexSans;font-style:italic;font-weight:300;src:local("IBMPlexSans-LightItalic"),local("IBMPlexSans LightItalic"),url("https://1.www.s81c.com/common/fonts/plex/v1/ibmplexsans-lightitalic.woff2") format("woff2"),url("https://1.www.s81c.com/common/fonts/plex/v1/ibmplexsans-lightitalic.woff") format("woff")}@font-face{font-family:IBMPlexSans;font-style:italic;font-weight:400;src:local("IBMPlexSans-Italic"),local("IBMPlexSans Italic"),url("https://1.www.s81c.com/common/fonts/plex/v1/ibmplexsans-italic.woff2") format("woff2"),url("https://1.www.s81c.com/common/fonts/plex/v1/ibmplexsans-italic.woff") format("woff")}@font-face{font-family:IBMPlexSans;font-style:italic;font-weight:500;src:local("IBMPlexSans-MediumItalic"),local("IBMPlexSans MediumItalic"),url("https://1.www.s81c.com/common/fonts/plex/v1/ibmplexsans-mediumitalic.woff2") format("woff2"),url("https://1.www.s81c.com/common/fonts/plex/v1/ibmplexsans-mediumitalic.woff") format("woff")}@font-face{font-family:IBMPlexSans;font-style:italic;font-weight:600;src:local("IBMPlexSans-BoldItalic"),local("IBMPlexSans BoldItalic"),url("https://1.www.s81c.com/common/fonts/plex/v1/ibmplexsans-bolditalic.woff2") format("woff2"),url("https://1.www.s81c.com/common/fonts/plex/v1/ibmplexsans-bolditalic.woff") format("woff")}@font-face{font-family:IBMPlexMono;font-weight:300;src:local("IBMPlexMono-Regular"),local("IBMPlexMomo Regular"),url("https://1.www.s81c.com/common/fonts/plex/v1/ibmplexmono-regular.woff2") format("woff2"),url("https://1.www.s81c.com/common/fonts/plex/v1/ibmplexmono-regular.woff") format("woff")}.mast-grid{padding-left:9px;padding-right:10px}.mast-row{font-size:0;letter-spacing:0;margin-left:-9px;margin-right:-10px}.mast-row:after{content:"";display:inline-block;width:100%}.mast-row>*{font-size:19px;font-size:1rem;letter-spacing:.01579rem}.mast-col-0,.mast-col-1,.mast-col-2,.mast-col-3,.mast-col-4,.mast-col-5,.mast-col-6,.mast-col-7,.mast-col-8,.mast-col-9,.mast-col-10,.mast-col-11,.mast-col-12,.mast-col-lg-0,.mast-col-lg-1,.mast-col-lg-2,.mast-col-lg-3,.mast-col-lg-4,.mast-col-lg-5,.mast-col-lg-6,.mast-col-lg-7,.mast-col-lg-8,.mast-col-lg-9,.mast-col-lg-10,.mast-col-lg-11,.mast-col-lg-12,.mast-col-md-0,.mast-col-md-1,.mast-col-md-2,.mast-col-md-3,.mast-col-md-4,.mast-col-md-5,.mast-col-md-6,.mast-col-md-7,.mast-col-md-8,.mast-col-md-9,.mast-col-md-10,.mast-col-md-11,.mast-col-md-12,.mast-col-sm-0,.mast-col-sm-1,.mast-col-sm-2,.mast-col-sm-3,.mast-col-sm-4,.mast-col-sm-5,.mast-col-sm-6,.mast-col-sm-7,.mast-col-sm-8,.mast-col-sm-9,.mast-col-sm-10,.mast-col-sm-11,.mast-col-sm-12,.mast-col-xl-0,.mast-col-xl-1,.mast-col-xl-2,.mast-col-xl-3,.mast-col-xl-4,.mast-col-xl-5,.mast-col-xl-6,.mast-col-xl-7,.mast-col-xl-8,.mast-col-xl-9,.mast-col-xl-10,.mast-col-xl-11,.mast-col-xl-12,.mast-col-xs-0,.mast-col-xs-1,.mast-col-xs-2,.mast-col-xs-3,.mast-col-xs-4,.mast-col-xs-5,.mast-col-xs-6,.mast-col-xs-7,.mast-col-xs-8,.mast-col-xs-9,.mast-col-xs-10,.mast-col-xs-11,.mast-col-xs-12{display:inline-block;position:relative;vertical-align:top;width:100%;padding-left:9px;padding-right:10px}@media (min-width:48.6875em){.mast-no-gutter{padding-left:0;padding-right:0}.mast-no-gutter>.mast-row{margin-left:0;margin-right:0}.mast-col-0{width:0}.mast-offset-0{margin-left:0}.mast-push-0{left:0;right:auto}.mast-pull-0{left:auto;right:0}.mast-col-1{width:8.33333%}.mast-offset-1{margin-left:8.33333%}.mast-push-1{left:8.33333%;right:auto}.mast-pull-1{left:auto;right:8.33333%}.mast-col-2{width:16.66667%}.mast-offset-2{margin-left:16.66667%}.mast-push-2{left:16.66667%;right:auto}.mast-pull-2{left:auto;right:16.66667%}.mast-col-3{width:25%}.mast-offset-3{margin-left:25%}.mast-push-3{left:25%;right:auto}.mast-pull-3{left:auto;right:25%}.mast-col-4{width:33.33333%}.mast-offset-4{margin-left:33.33333%}.mast-push-4{left:33.33333%;right:auto}.mast-pull-4{left:auto;right:33.33333%}.mast-col-5{width:41.66667%}.mast-offset-5{margin-left:41.66667%}.mast-push-5{left:41.66667%;right:auto}.mast-pull-5{left:auto;right:41.66667%}.mast-col-6{width:50%}.mast-offset-6{margin-left:50%}.mast-push-6{left:50%;right:auto}.mast-pull-6{left:auto;right:50%}.mast-col-7{width:58.33333%}.mast-offset-7{margin-left:58.33333%}.mast-push-7{left:58.33333%;right:auto}.mast-pull-7{left:auto;right:58.33333%}.mast-col-8{width:66.66667%}.mast-offset-8{margin-left:66.66667%}.mast-push-8{left:66.66667%;right:auto}.mast-pull-8{left:auto;right:66.66667%}.mast-col-9{width:75%}.mast-offset-9{margin-left:75%}.mast-push-9{left:75%;right:auto}.mast-pull-9{left:auto;right:75%}.mast-col-10{width:83.33333%}.mast-offset-10{margin-left:83.33333%}.mast-push-10{left:83.33333%;right:auto}.mast-pull-10{left:auto;right:83.33333%}.mast-col-11{width:91.66667%}.mast-offset-11{margin-left:91.66667%}.mast-push-11{left:91.66667%;right:auto}.mast-pull-11{left:auto;right:91.66667%}.mast-col-12{width:100%}.mast-offset-12{margin-left:100%}.mast-push-12{left:100%;right:auto}.mast-pull-12{left:auto;right:100%}}@media (min-width:0){.mast-no-gutter-xs{padding-left:0;padding-right:0}.mast-no-gutter-xs>.mast-row{margin-left:0;margin-right:0}.mast-col-xs-0{width:0}.mast-offset-xs-0{margin-left:0}.mast-push-xs-0{left:0;right:auto}.mast-pull-xs-0{left:auto;right:0}.mast-col-xs-1{width:8.33333%}.mast-offset-xs-1{margin-left:8.33333%}.mast-push-xs-1{left:8.33333%;right:auto}.mast-pull-xs-1{left:auto;right:8.33333%}.mast-col-xs-2{width:16.66667%}.mast-offset-xs-2{margin-left:16.66667%}.mast-push-xs-2{left:16.66667%;right:auto}.mast-pull-xs-2{left:auto;right:16.66667%}.mast-col-xs-3{width:25%}.mast-offset-xs-3{margin-left:25%}.mast-push-xs-3{left:25%;right:auto}.mast-pull-xs-3{left:auto;right:25%}.mast-col-xs-4{width:33.33333%}.mast-offset-xs-4{margin-left:33.33333%}.mast-push-xs-4{left:33.33333%;right:auto}.mast-pull-xs-4{left:auto;right:33.33333%}.mast-col-xs-5{width:41.66667%}.mast-offset-xs-5{margin-left:41.66667%}.mast-push-xs-5{left:41.66667%;right:auto}.mast-pull-xs-5{left:auto;right:41.66667%}.mast-col-xs-6{width:50%}.mast-offset-xs-6{margin-left:50%}.mast-push-xs-6{left:50%;right:auto}.mast-pull-xs-6{left:auto;right:50%}.mast-col-xs-7{width:58.33333%}.mast-offset-xs-7{margin-left:58.33333%}.mast-push-xs-7{left:58.33333%;right:auto}.mast-pull-xs-7{left:auto;right:58.33333%}.mast-col-xs-8{width:66.66667%}.mast-offset-xs-8{margin-left:66.66667%}.mast-push-xs-8{left:66.66667%;right:auto}.mast-pull-xs-8{left:auto;right:66.66667%}.mast-col-xs-9{width:75%}.mast-offset-xs-9{margin-left:75%}.mast-push-xs-9{left:75%;right:auto}.mast-pull-xs-9{left:auto;right:75%}.mast-col-xs-10{width:83.33333%}.mast-offset-xs-10{margin-left:83.33333%}.mast-push-xs-10{left:83.33333%;right:auto}.mast-pull-xs-10{left:auto;right:83.33333%}.mast-col-xs-11{width:91.66667%}.mast-offset-xs-11{margin-left:91.66667%}.mast-push-xs-11{left:91.66667%;right:auto}.mast-pull-xs-11{left:auto;right:91.66667%}.mast-col-xs-12{width:100%}.mast-offset-xs-12{margin-left:100%}.mast-push-xs-12{left:100%;right:auto}.mast-pull-xs-12{left:auto;right:100%}}@media (min-width:29.6875em){.mast-no-gutter-sm{padding-left:0;padding-right:0}.mast-no-gutter-sm>.mast-row{margin-left:0;margin-right:0}.mast-col-sm-0{width:0}.mast-offset-sm-0{margin-left:0}.mast-push-sm-0{left:0;right:auto}.mast-pull-sm-0{left:auto;right:0}.mast-col-sm-1{width:8.33333%}.mast-offset-sm-1{margin-left:8.33333%}.mast-push-sm-1{left:8.33333%;right:auto}.mast-pull-sm-1{left:auto;right:8.33333%}.mast-col-sm-2{width:16.66667%}.mast-offset-sm-2{margin-left:16.66667%}.mast-push-sm-2{left:16.66667%;right:auto}.mast-pull-sm-2{left:auto;right:16.66667%}.mast-col-sm-3{width:25%}.mast-offset-sm-3{margin-left:25%}.mast-push-sm-3{left:25%;right:auto}.mast-pull-sm-3{left:auto;right:25%}.mast-col-sm-4{width:33.33333%}.mast-offset-sm-4{margin-left:33.33333%}.mast-push-sm-4{left:33.33333%;right:auto}.mast-pull-sm-4{left:auto;right:33.33333%}.mast-col-sm-5{width:41.66667%}.mast-offset-sm-5{margin-left:41.66667%}.mast-push-sm-5{left:41.66667%;right:auto}.mast-pull-sm-5{left:auto;right:41.66667%}.mast-col-sm-6{width:50%}.mast-offset-sm-6{margin-left:50%}.mast-push-sm-6{left:50%;right:auto}.mast-pull-sm-6{left:auto;right:50%}.mast-col-sm-7{width:58.33333%}.mast-offset-sm-7{margin-left:58.33333%}.mast-push-sm-7{left:58.33333%;right:auto}.mast-pull-sm-7{left:auto;right:58.33333%}.mast-col-sm-8{width:66.66667%}.mast-offset-sm-8{margin-left:66.66667%}.mast-push-sm-8{left:66.66667%;right:auto}.mast-pull-sm-8{left:auto;right:66.66667%}.mast-col-sm-9{width:75%}.mast-offset-sm-9{margin-left:75%}.mast-push-sm-9{left:75%;right:auto}.mast-pull-sm-9{left:auto;right:75%}.mast-col-sm-10{width:83.33333%}.mast-offset-sm-10{margin-left:83.33333%}.mast-push-sm-10{left:83.33333%;right:auto}.mast-pull-sm-10{left:auto;right:83.33333%}.mast-col-sm-11{width:91.66667%}.mast-offset-sm-11{margin-left:91.66667%}.mast-push-sm-11{left:91.66667%;right:auto}.mast-pull-sm-11{left:auto;right:91.66667%}.mast-col-sm-12{width:100%}.mast-offset-sm-12{margin-left:100%}.mast-push-sm-12{left:100%;right:auto}.mast-pull-sm-12{left:auto;right:100%}}@media (min-width:48.6875em){.mast-no-gutter-md{padding-left:0;padding-right:0}.mast-no-gutter-md>.mast-row{margin-left:0;margin-right:0}.mast-col-md-0{width:0}.mast-offset-md-0{margin-left:0}.mast-push-md-0{left:0;right:auto}.mast-pull-md-0{left:auto;right:0}.mast-col-md-1{width:8.33333%}.mast-offset-md-1{margin-left:8.33333%}.mast-push-md-1{left:8.33333%;right:auto}.mast-pull-md-1{left:auto;right:8.33333%}.mast-col-md-2{width:16.66667%}.mast-offset-md-2{margin-left:16.66667%}.mast-push-md-2{left:16.66667%;right:auto}.mast-pull-md-2{left:auto;right:16.66667%}.mast-col-md-3{width:25%}.mast-offset-md-3{margin-left:25%}.mast-push-md-3{left:25%;right:auto}.mast-pull-md-3{left:auto;right:25%}.mast-col-md-4{width:33.33333%}.mast-offset-md-4{margin-left:33.33333%}.mast-push-md-4{left:33.33333%;right:auto}.mast-pull-md-4{left:auto;right:33.33333%}.mast-col-md-5{width:41.66667%}.mast-offset-md-5{margin-left:41.66667%}.mast-push-md-5{left:41.66667%;right:auto}.mast-pull-md-5{left:auto;right:41.66667%}.mast-col-md-6{width:50%}.mast-offset-md-6{margin-left:50%}.mast-push-md-6{left:50%;right:auto}.mast-pull-md-6{left:auto;right:50%}.mast-col-md-7{width:58.33333%}.mast-offset-md-7{margin-left:58.33333%}.mast-push-md-7{left:58.33333%;right:auto}.mast-pull-md-7{left:auto;right:58.33333%}.mast-col-md-8{width:66.66667%}.mast-offset-md-8{margin-left:66.66667%}.mast-push-md-8{left:66.66667%;right:auto}.mast-pull-md-8{left:auto;right:66.66667%}.mast-col-md-9{width:75%}.mast-offset-md-9{margin-left:75%}.mast-push-md-9{left:75%;right:auto}.mast-pull-md-9{left:auto;right:75%}.mast-col-md-10{width:83.33333%}.mast-offset-md-10{margin-left:83.33333%}.mast-push-md-10{left:83.33333%;right:auto}.mast-pull-md-10{left:auto;right:83.33333%}.mast-col-md-11{width:91.66667%}.mast-offset-md-11{margin-left:91.66667%}.mast-push-md-11{left:91.66667%;right:auto}.mast-pull-md-11{left:auto;right:91.66667%}.mast-col-md-12{width:100%}.mast-offset-md-12{margin-left:100%}.mast-push-md-12{left:100%;right:auto}.mast-pull-md-12{left:auto;right:100%}}@media (min-width:72.4375em){.mast-no-gutter-lg{padding-left:0;padding-right:0}.mast-no-gutter-lg>.mast-row{margin-left:0;margin-right:0}.mast-col-lg-0{width:0}.mast-offset-lg-0{margin-left:0}.mast-push-lg-0{left:0;right:auto}.mast-pull-lg-0{left:auto;right:0}.mast-col-lg-1{width:8.33333%}.mast-offset-lg-1{margin-left:8.33333%}.mast-push-lg-1{left:8.33333%;right:auto}.mast-pull-lg-1{left:auto;right:8.33333%}.mast-col-lg-2{width:16.66667%}.mast-offset-lg-2{margin-left:16.66667%}.mast-push-lg-2{left:16.66667%;right:auto}.mast-pull-lg-2{left:auto;right:16.66667%}.mast-col-lg-3{width:25%}.mast-offset-lg-3{margin-left:25%}.mast-push-lg-3{left:25%;right:auto}.mast-pull-lg-3{left:auto;right:25%}.mast-col-lg-4{width:33.33333%}.mast-offset-lg-4{margin-left:33.33333%}.mast-push-lg-4{left:33.33333%;right:auto}.mast-pull-lg-4{left:auto;right:33.33333%}.mast-col-lg-5{width:41.66667%}.mast-offset-lg-5{margin-left:41.66667%}.mast-push-lg-5{left:41.66667%;right:auto}.mast-pull-lg-5{left:auto;right:41.66667%}.mast-col-lg-6{width:50%}.mast-offset-lg-6{margin-left:50%}.mast-push-lg-6{left:50%;right:auto}.mast-pull-lg-6{left:auto;right:50%}.mast-col-lg-7{width:58.33333%}.mast-offset-lg-7{margin-left:58.33333%}.mast-push-lg-7{left:58.33333%;right:auto}.mast-pull-lg-7{left:auto;right:58.33333%}.mast-col-lg-8{width:66.66667%}.mast-offset-lg-8{margin-left:66.66667%}.mast-push-lg-8{left:66.66667%;right:auto}.mast-pull-lg-8{left:auto;right:66.66667%}.mast-col-lg-9{width:75%}.mast-offset-lg-9{margin-left:75%}.mast-push-lg-9{left:75%;right:auto}.mast-pull-lg-9{left:auto;right:75%}.mast-col-lg-10{width:83.33333%}.mast-offset-lg-10{margin-left:83.33333%}.mast-push-lg-10{left:83.33333%;right:auto}.mast-pull-lg-10{left:auto;right:83.33333%}.mast-col-lg-11{width:91.66667%}.mast-offset-lg-11{margin-left:91.66667%}.mast-push-lg-11{left:91.66667%;right:auto}.mast-pull-lg-11{left:auto;right:91.66667%}.mast-col-lg-12{width:100%}.mast-offset-lg-12{margin-left:100%}.mast-push-lg-12{left:100%;right:auto}.mast-pull-lg-12{left:auto;right:100%}}@media (min-width:96.1875em){.mast-no-gutter-xl{padding-left:0;padding-right:0}.mast-no-gutter-xl>.mast-row{margin-left:0;margin-right:0}.mast-col-xl-0{width:0}.mast-offset-xl-0{margin-left:0}.mast-push-xl-0{left:0;right:auto}.mast-pull-xl-0{left:auto;right:0}.mast-col-xl-1{width:8.33333%}.mast-offset-xl-1{margin-left:8.33333%}.mast-push-xl-1{left:8.33333%;right:auto}.mast-pull-xl-1{left:auto;right:8.33333%}.mast-col-xl-2{width:16.66667%}.mast-offset-xl-2{margin-left:16.66667%}.mast-push-xl-2{left:16.66667%;right:auto}.mast-pull-xl-2{left:auto;right:16.66667%}.mast-col-xl-3{width:25%}.mast-offset-xl-3{margin-left:25%}.mast-push-xl-3{left:25%;right:auto}.mast-pull-xl-3{left:auto;right:25%}.mast-col-xl-4{width:33.33333%}.mast-offset-xl-4{margin-left:33.33333%}.mast-push-xl-4{left:33.33333%;right:auto}.mast-pull-xl-4{left:auto;right:33.33333%}.mast-col-xl-5{width:41.66667%}.mast-offset-xl-5{margin-left:41.66667%}.mast-push-xl-5{left:41.66667%;right:auto}.mast-pull-xl-5{left:auto;right:41.66667%}.mast-col-xl-6{width:50%}.mast-offset-xl-6{margin-left:50%}.mast-push-xl-6{left:50%;right:auto}.mast-pull-xl-6{left:auto;right:50%}.mast-col-xl-7{width:58.33333%}.mast-offset-xl-7{margin-left:58.33333%}.mast-push-xl-7{left:58.33333%;right:auto}.mast-pull-xl-7{left:auto;right:58.33333%}.mast-col-xl-8{width:66.66667%}.mast-offset-xl-8{margin-left:66.66667%}.mast-push-xl-8{left:66.66667%;right:auto}.mast-pull-xl-8{left:auto;right:66.66667%}.mast-col-xl-9{width:75%}.mast-offset-xl-9{margin-left:75%}.mast-push-xl-9{left:75%;right:auto}.mast-pull-xl-9{left:auto;right:75%}.mast-col-xl-10{width:83.33333%}.mast-offset-xl-10{margin-left:83.33333%}.mast-push-xl-10{left:83.33333%;right:auto}.mast-pull-xl-10{left:auto;right:83.33333%}.mast-col-xl-11{width:91.66667%}.mast-offset-xl-11{margin-left:91.66667%}.mast-push-xl-11{left:91.66667%;right:auto}.mast-pull-xl-11{left:auto;right:91.66667%}.mast-col-xl-12{width:100%}.mast-offset-xl-12{margin-left:100%}.mast-push-xl-12{left:100%;right:auto}.mast-pull-xl-12{left:auto;right:100%}}.mast-border-blue-1,.mast-border-blue-2,.mast-border-blue-3,.mast-border-blue-4,.mast-border-blue-5,.mast-border-blue-6,.mast-border-blue-7,.mast-border-blue-8,.mast-border-contextual-blue-1,.mast-border-contextual-blue-2,.mast-border-contextual-blue-3,.mast-border-contextual-blue-4,.mast-border-contextual-blue-5,.mast-border-contextual-blue-6,.mast-border-contextual-green-1,.mast-border-contextual-green-2,.mast-border-contextual-green-3,.mast-border-contextual-green-4,.mast-border-contextual-green-5,.mast-border-contextual-green-6,.mast-border-contextual-purple-1,.mast-border-contextual-purple-2,.mast-border-contextual-purple-3,.mast-border-contextual-purple-4,.mast-border-contextual-purple-5,.mast-border-contextual-purple-6,.mast-border-contextual-red-1,.mast-border-contextual-red-2,.mast-border-contextual-red-3,.mast-border-contextual-red-4,.mast-border-contextual-red-5,.mast-border-contextual-red-6,.mast-border-contextual-yellow-1,.mast-border-contextual-yellow-2,.mast-border-contextual-yellow-3,.mast-border-contextual-yellow-4,.mast-border-contextual-yellow-5,.mast-border-contextual-yellow-6,.mast-border-neutral-1,.mast-border-neutral-2,.mast-border-neutral-3,.mast-border-neutral-4,.mast-border-neutral-5,.mast-border-neutral-6,.mast-border-neutral-7,.mast-border-neutral-8,.mast-border-neutral-cool-1,.mast-border-neutral-cool-2,.mast-border-neutral-cool-3,.mast-border-neutral-cool-4,.mast-border-neutral-cool-5,.mast-border-neutral-cool-6,.mast-border-neutral-cool-7,.mast-border-neutral-cool-8,.mast-border-neutral-warm-1,.mast-border-neutral-warm-2,.mast-border-neutral-warm-3,.mast-border-neutral-warm-4,.mast-border-neutral-warm-5,.mast-border-neutral-warm-6,.mast-border-neutral-warm-7,.mast-border-neutral-warm-8,.mast-border-transparent-1{border-style:solid;border-width:0}.mast-text-blue-1{color:#edf3f7!important}.mast-text-blue-2{color:#c9dce6!important}.mast-text-blue-3{color:#9cbdd1!important}.mast-text-blue-4{color:#6399b8!important}.mast-text-blue-5{color:#367aa3!important}.mast-text-blue-6{color:#00598a!important}.mast-text-blue-7{color:#004065!important}.mast-text-blue-8{color:#002236!important}.mast-text-neutral-1{color:#fdfdfd!important}.mast-text-neutral-2{color:#f3f3f3!important}.mast-text-neutral-3{color:#e2e2e2!important}.mast-text-neutral-4{color:#d1d1d1!important}.mast-text-neutral-5{color:#ababab!important}.mast-text-neutral-6{color:#757575!important}.mast-text-neutral-7{color:#555!important}.mast-text-neutral-8{color:#232323!important}.mast-text-neutral-warm-1{color:#fcfcfa!important}.mast-text-neutral-warm-2{color:#f1f0ee!important}.mast-text-neutral-warm-3{color:#e4e3e1!important}.mast-text-neutral-warm-4{color:#d4d3d0!important}.mast-text-neutral-warm-5{color:#b0ada8!important}.mast-text-neutral-warm-6{color:#7d7971!important}.mast-text-neutral-warm-7{color:#5b5852!important}.mast-text-neutral-warm-8{color:#242321!important}.mast-text-neutral-cool-1{color:#fcfcfe!important}.mast-text-neutral-cool-2{color:#eff1f1!important}.mast-text-neutral-cool-3{color:#e1e3e5!important}.mast-text-neutral-cool-4{color:#d0d4d6!important}.mast-text-neutral-cool-5{color:#a9afb4!important}.mast-text-neutral-cool-6{color:#727c84!important}.mast-text-neutral-cool-7{color:#535b60!important}.mast-text-neutral-cool-8{color:#1f2325!important}.mast-text-transparent-1{color:transparent!important}.mast-bg-blue-1{background-color:#edf3f7!important}.mast-bg-blue-2{background-color:#c9dce6!important}.mast-bg-blue-3{background-color:#9cbdd1!important}.mast-bg-blue-4{background-color:#6399b8!important}.mast-bg-blue-5{background-color:#367aa3!important}.mast-bg-blue-6{background-color:#00598a!important}.mast-bg-blue-7{background-color:#004065!important}.mast-bg-blue-8{background-color:#002236!important}.mast-bg-neutral-1{background-color:#fdfdfd!important}.mast-bg-neutral-2{background-color:#f3f3f3!important}.mast-bg-neutral-3{background-color:#e2e2e2!important}.mast-bg-neutral-4{background-color:#d1d1d1!important}.mast-bg-neutral-5{background-color:#ababab!important}.mast-bg-neutral-6{background-color:#757575!important}.mast-bg-neutral-7{background-color:#555!important}.mast-bg-neutral-8{background-color:#232323!important}.mast-bg-neutral-warm-1{background-color:#fcfcfa!important}.mast-bg-neutral-warm-2{background-color:#f1f0ee!important}.mast-bg-neutral-warm-3{background-color:#e4e3e1!important}.mast-bg-neutral-warm-4{background-color:#d4d3d0!important}.mast-bg-neutral-warm-5{background-color:#b0ada8!important}.mast-bg-neutral-warm-6{background-color:#7d7971!important}.mast-bg-neutral-warm-7{background-color:#5b5852!important}.mast-bg-neutral-warm-8{background-color:#242321!important}.mast-bg-neutral-cool-1{background-color:#fcfcfe!important}.mast-bg-neutral-cool-2{background-color:#eff1f1!important}.mast-bg-neutral-cool-3{background-color:#e1e3e5!important}.mast-bg-neutral-cool-4{background-color:#d0d4d6!important}.mast-bg-neutral-cool-5{background-color:#a9afb4!important}.mast-bg-neutral-cool-6{background-color:#727c84!important}.mast-bg-neutral-cool-7{background-color:#535b60!important}.mast-bg-neutral-cool-8{background-color:#1f2325!important}.mast-bg-transparent-1{background-color:transparent!important}.mast-border-blue-1{border-color:#edf3f7!important;border-width:1px}.mast-border-blue-2{border-color:#c9dce6!important;border-width:1px}.mast-border-blue-3{border-color:#9cbdd1!important;border-width:1px}.mast-border-blue-4{border-color:#6399b8!important;border-width:1px}.mast-border-blue-5{border-color:#367aa3!important;border-width:1px}.mast-border-blue-6{border-color:#00598a!important;border-width:1px}.mast-border-blue-7{border-color:#004065!important;border-width:1px}.mast-border-blue-8{border-color:#002236!important;border-width:1px}.mast-border-neutral-1{border-color:#fdfdfd!important;border-width:1px}.mast-border-neutral-2{border-color:#f3f3f3!important;border-width:1px}.mast-border-neutral-3{border-color:#e2e2e2!important;border-width:1px}.mast-border-neutral-4{border-color:#d1d1d1!important;border-width:1px}.mast-border-neutral-5{border-color:#ababab!important;border-width:1px}.mast-border-neutral-6{border-color:#757575!important;border-width:1px}.mast-border-neutral-7{border-color:#555!important;border-width:1px}.mast-border-neutral-8{border-color:#232323!important;border-width:1px}.mast-border-neutral-warm-1{border-color:#fcfcfa!important;border-width:1px}.mast-border-neutral-warm-2{border-color:#f1f0ee!important;border-width:1px}.mast-border-neutral-warm-3{border-color:#e4e3e1!important;border-width:1px}.mast-border-neutral-warm-4{border-color:#d4d3d0!important;border-width:1px}.mast-border-neutral-warm-5{border-color:#b0ada8!important;border-width:1px}.mast-border-neutral-warm-6{border-color:#7d7971!important;border-width:1px}.mast-border-neutral-warm-7{border-color:#5b5852!important;border-width:1px}.mast-border-neutral-warm-8{border-color:#242321!important;border-width:1px}.mast-border-neutral-cool-1{border-color:#fcfcfe!important;border-width:1px}.mast-border-neutral-cool-2{border-color:#eff1f1!important;border-width:1px}.mast-border-neutral-cool-3{border-color:#e1e3e5!important;border-width:1px}.mast-border-neutral-cool-4{border-color:#d0d4d6!important;border-width:1px}.mast-border-neutral-cool-5{border-color:#a9afb4!important;border-width:1px}.mast-border-neutral-cool-6{border-color:#727c84!important;border-width:1px}.mast-border-neutral-cool-7{border-color:#535b60!important;border-width:1px}.mast-border-neutral-cool-8{border-color:#1f2325!important;border-width:1px}.mast-border-transparent-1{border-color:transparent!important;border-width:1px}@media (min-width:0){.mast-text-xs-blue-1{color:#edf3f7!important}.mast-text-xs-blue-2{color:#c9dce6!important}.mast-text-xs-blue-3{color:#9cbdd1!important}.mast-text-xs-blue-4{color:#6399b8!important}.mast-text-xs-blue-5{color:#367aa3!important}.mast-text-xs-blue-6{color:#00598a!important}.mast-text-xs-blue-7{color:#004065!important}.mast-text-xs-blue-8{color:#002236!important}.mast-text-xs-neutral-1{color:#fdfdfd!important}.mast-text-xs-neutral-2{color:#f3f3f3!important}.mast-text-xs-neutral-3{color:#e2e2e2!important}.mast-text-xs-neutral-4{color:#d1d1d1!important}.mast-text-xs-neutral-5{color:#ababab!important}.mast-text-xs-neutral-6{color:#757575!important}.mast-text-xs-neutral-7{color:#555!important}.mast-text-xs-neutral-8{color:#232323!important}.mast-text-xs-neutral-warm-1{color:#fcfcfa!important}.mast-text-xs-neutral-warm-2{color:#f1f0ee!important}.mast-text-xs-neutral-warm-3{color:#e4e3e1!important}.mast-text-xs-neutral-warm-4{color:#d4d3d0!important}.mast-text-xs-neutral-warm-5{color:#b0ada8!important}.mast-text-xs-neutral-warm-6{color:#7d7971!important}.mast-text-xs-neutral-warm-7{color:#5b5852!important}.mast-text-xs-neutral-warm-8{color:#242321!important}.mast-text-xs-neutral-cool-1{color:#fcfcfe!important}.mast-text-xs-neutral-cool-2{color:#eff1f1!important}.mast-text-xs-neutral-cool-3{color:#e1e3e5!important}.mast-text-xs-neutral-cool-4{color:#d0d4d6!important}.mast-text-xs-neutral-cool-5{color:#a9afb4!important}.mast-text-xs-neutral-cool-6{color:#727c84!important}.mast-text-xs-neutral-cool-7{color:#535b60!important}.mast-text-xs-neutral-cool-8{color:#1f2325!important}.mast-text-xs-transparent-1{color:transparent!important}.mast-bg-xs-blue-1{background-color:#edf3f7!important}.mast-bg-xs-blue-2{background-color:#c9dce6!important}.mast-bg-xs-blue-3{background-color:#9cbdd1!important}.mast-bg-xs-blue-4{background-color:#6399b8!important}.mast-bg-xs-blue-5{background-color:#367aa3!important}.mast-bg-xs-blue-6{background-color:#00598a!important}.mast-bg-xs-blue-7{background-color:#004065!important}.mast-bg-xs-blue-8{background-color:#002236!important}.mast-bg-xs-neutral-1{background-color:#fdfdfd!important}.mast-bg-xs-neutral-2{background-color:#f3f3f3!important}.mast-bg-xs-neutral-3{background-color:#e2e2e2!important}.mast-bg-xs-neutral-4{background-color:#d1d1d1!important}.mast-bg-xs-neutral-5{background-color:#ababab!important}.mast-bg-xs-neutral-6{background-color:#757575!important}.mast-bg-xs-neutral-7{background-color:#555!important}.mast-bg-xs-neutral-8{background-color:#232323!important}.mast-bg-xs-neutral-warm-1{background-color:#fcfcfa!important}.mast-bg-xs-neutral-warm-2{background-color:#f1f0ee!important}.mast-bg-xs-neutral-warm-3{background-color:#e4e3e1!important}.mast-bg-xs-neutral-warm-4{background-color:#d4d3d0!important}.mast-bg-xs-neutral-warm-5{background-color:#b0ada8!important}.mast-bg-xs-neutral-warm-6{background-color:#7d7971!important}.mast-bg-xs-neutral-warm-7{background-color:#5b5852!important}.mast-bg-xs-neutral-warm-8{background-color:#242321!important}.mast-bg-xs-neutral-cool-1{background-color:#fcfcfe!important}.mast-bg-xs-neutral-cool-2{background-color:#eff1f1!important}.mast-bg-xs-neutral-cool-3{background-color:#e1e3e5!important}.mast-bg-xs-neutral-cool-4{background-color:#d0d4d6!important}.mast-bg-xs-neutral-cool-5{background-color:#a9afb4!important}.mast-bg-xs-neutral-cool-6{background-color:#727c84!important}.mast-bg-xs-neutral-cool-7{background-color:#535b60!important}.mast-bg-xs-neutral-cool-8{background-color:#1f2325!important}.mast-bg-xs-transparent-1{background-color:transparent!important}}@media (min-width:29.6875em){.mast-text-sm-blue-1{color:#edf3f7!important}.mast-text-sm-blue-2{color:#c9dce6!important}.mast-text-sm-blue-3{color:#9cbdd1!important}.mast-text-sm-blue-4{color:#6399b8!important}.mast-text-sm-blue-5{color:#367aa3!important}.mast-text-sm-blue-6{color:#00598a!important}.mast-text-sm-blue-7{color:#004065!important}.mast-text-sm-blue-8{color:#002236!important}.mast-text-sm-neutral-1{color:#fdfdfd!important}.mast-text-sm-neutral-2{color:#f3f3f3!important}.mast-text-sm-neutral-3{color:#e2e2e2!important}.mast-text-sm-neutral-4{color:#d1d1d1!important}.mast-text-sm-neutral-5{color:#ababab!important}.mast-text-sm-neutral-6{color:#757575!important}.mast-text-sm-neutral-7{color:#555!important}.mast-text-sm-neutral-8{color:#232323!important}.mast-text-sm-neutral-warm-1{color:#fcfcfa!important}.mast-text-sm-neutral-warm-2{color:#f1f0ee!important}.mast-text-sm-neutral-warm-3{color:#e4e3e1!important}.mast-text-sm-neutral-warm-4{color:#d4d3d0!important}.mast-text-sm-neutral-warm-5{color:#b0ada8!important}.mast-text-sm-neutral-warm-6{color:#7d7971!important}.mast-text-sm-neutral-warm-7{color:#5b5852!important}.mast-text-sm-neutral-warm-8{color:#242321!important}.mast-text-sm-neutral-cool-1{color:#fcfcfe!important}.mast-text-sm-neutral-cool-2{color:#eff1f1!important}.mast-text-sm-neutral-cool-3{color:#e1e3e5!important}.mast-text-sm-neutral-cool-4{color:#d0d4d6!important}.mast-text-sm-neutral-cool-5{color:#a9afb4!important}.mast-text-sm-neutral-cool-6{color:#727c84!important}.mast-text-sm-neutral-cool-7{color:#535b60!important}.mast-text-sm-neutral-cool-8{color:#1f2325!important}.mast-text-sm-transparent-1{color:transparent!important}.mast-bg-sm-blue-1{background-color:#edf3f7!important}.mast-bg-sm-blue-2{background-color:#c9dce6!important}.mast-bg-sm-blue-3{background-color:#9cbdd1!important}.mast-bg-sm-blue-4{background-color:#6399b8!important}.mast-bg-sm-blue-5{background-color:#367aa3!important}.mast-bg-sm-blue-6{background-color:#00598a!important}.mast-bg-sm-blue-7{background-color:#004065!important}.mast-bg-sm-blue-8{background-color:#002236!important}.mast-bg-sm-neutral-1{background-color:#fdfdfd!important}.mast-bg-sm-neutral-2{background-color:#f3f3f3!important}.mast-bg-sm-neutral-3{background-color:#e2e2e2!important}.mast-bg-sm-neutral-4{background-color:#d1d1d1!important}.mast-bg-sm-neutral-5{background-color:#ababab!important}.mast-bg-sm-neutral-6{background-color:#757575!important}.mast-bg-sm-neutral-7{background-color:#555!important}.mast-bg-sm-neutral-8{background-color:#232323!important}.mast-bg-sm-neutral-warm-1{background-color:#fcfcfa!important}.mast-bg-sm-neutral-warm-2{background-color:#f1f0ee!important}.mast-bg-sm-neutral-warm-3{background-color:#e4e3e1!important}.mast-bg-sm-neutral-warm-4{background-color:#d4d3d0!important}.mast-bg-sm-neutral-warm-5{background-color:#b0ada8!important}.mast-bg-sm-neutral-warm-6{background-color:#7d7971!important}.mast-bg-sm-neutral-warm-7{background-color:#5b5852!important}.mast-bg-sm-neutral-warm-8{background-color:#242321!important}.mast-bg-sm-neutral-cool-1{background-color:#fcfcfe!important}.mast-bg-sm-neutral-cool-2{background-color:#eff1f1!important}.mast-bg-sm-neutral-cool-3{background-color:#e1e3e5!important}.mast-bg-sm-neutral-cool-4{background-color:#d0d4d6!important}.mast-bg-sm-neutral-cool-5{background-color:#a9afb4!important}.mast-bg-sm-neutral-cool-6{background-color:#727c84!important}.mast-bg-sm-neutral-cool-7{background-color:#535b60!important}.mast-bg-sm-neutral-cool-8{background-color:#1f2325!important}.mast-bg-sm-transparent-1{background-color:transparent!important}}@media (min-width:48.6875em){.mast-text-md-blue-1{color:#edf3f7!important}.mast-text-md-blue-2{color:#c9dce6!important}.mast-text-md-blue-3{color:#9cbdd1!important}.mast-text-md-blue-4{color:#6399b8!important}.mast-text-md-blue-5{color:#367aa3!important}.mast-text-md-blue-6{color:#00598a!important}.mast-text-md-blue-7{color:#004065!important}.mast-text-md-blue-8{color:#002236!important}.mast-text-md-neutral-1{color:#fdfdfd!important}.mast-text-md-neutral-2{color:#f3f3f3!important}.mast-text-md-neutral-3{color:#e2e2e2!important}.mast-text-md-neutral-4{color:#d1d1d1!important}.mast-text-md-neutral-5{color:#ababab!important}.mast-text-md-neutral-6{color:#757575!important}.mast-text-md-neutral-7{color:#555!important}.mast-text-md-neutral-8{color:#232323!important}.mast-text-md-neutral-warm-1{color:#fcfcfa!important}.mast-text-md-neutral-warm-2{color:#f1f0ee!important}.mast-text-md-neutral-warm-3{color:#e4e3e1!important}.mast-text-md-neutral-warm-4{color:#d4d3d0!important}.mast-text-md-neutral-warm-5{color:#b0ada8!important}.mast-text-md-neutral-warm-6{color:#7d7971!important}.mast-text-md-neutral-warm-7{color:#5b5852!important}.mast-text-md-neutral-warm-8{color:#242321!important}.mast-text-md-neutral-cool-1{color:#fcfcfe!important}.mast-text-md-neutral-cool-2{color:#eff1f1!important}.mast-text-md-neutral-cool-3{color:#e1e3e5!important}.mast-text-md-neutral-cool-4{color:#d0d4d6!important}.mast-text-md-neutral-cool-5{color:#a9afb4!important}.mast-text-md-neutral-cool-6{color:#727c84!important}.mast-text-md-neutral-cool-7{color:#535b60!important}.mast-text-md-neutral-cool-8{color:#1f2325!important}.mast-text-md-transparent-1{color:transparent!important}.mast-bg-md-blue-1{background-color:#edf3f7!important}.mast-bg-md-blue-2{background-color:#c9dce6!important}.mast-bg-md-blue-3{background-color:#9cbdd1!important}.mast-bg-md-blue-4{background-color:#6399b8!important}.mast-bg-md-blue-5{background-color:#367aa3!important}.mast-bg-md-blue-6{background-color:#00598a!important}.mast-bg-md-blue-7{background-color:#004065!important}.mast-bg-md-blue-8{background-color:#002236!important}.mast-bg-md-neutral-1{background-color:#fdfdfd!important}.mast-bg-md-neutral-2{background-color:#f3f3f3!important}.mast-bg-md-neutral-3{background-color:#e2e2e2!important}.mast-bg-md-neutral-4{background-color:#d1d1d1!important}.mast-bg-md-neutral-5{background-color:#ababab!important}.mast-bg-md-neutral-6{background-color:#757575!important}.mast-bg-md-neutral-7{background-color:#555!important}.mast-bg-md-neutral-8{background-color:#232323!important}.mast-bg-md-neutral-warm-1{background-color:#fcfcfa!important}.mast-bg-md-neutral-warm-2{background-color:#f1f0ee!important}.mast-bg-md-neutral-warm-3{background-color:#e4e3e1!important}.mast-bg-md-neutral-warm-4{background-color:#d4d3d0!important}.mast-bg-md-neutral-warm-5{background-color:#b0ada8!important}.mast-bg-md-neutral-warm-6{background-color:#7d7971!important}.mast-bg-md-neutral-warm-7{background-color:#5b5852!important}.mast-bg-md-neutral-warm-8{background-color:#242321!important}.mast-bg-md-neutral-cool-1{background-color:#fcfcfe!important}.mast-bg-md-neutral-cool-2{background-color:#eff1f1!important}.mast-bg-md-neutral-cool-3{background-color:#e1e3e5!important}.mast-bg-md-neutral-cool-4{background-color:#d0d4d6!important}.mast-bg-md-neutral-cool-5{background-color:#a9afb4!important}.mast-bg-md-neutral-cool-6{background-color:#727c84!important}.mast-bg-md-neutral-cool-7{background-color:#535b60!important}.mast-bg-md-neutral-cool-8{background-color:#1f2325!important}.mast-bg-md-transparent-1{background-color:transparent!important}}@media (min-width:72.4375em){.mast-text-lg-blue-1{color:#edf3f7!important}.mast-text-lg-blue-2{color:#c9dce6!important}.mast-text-lg-blue-3{color:#9cbdd1!important}.mast-text-lg-blue-4{color:#6399b8!important}.mast-text-lg-blue-5{color:#367aa3!important}.mast-text-lg-blue-6{color:#00598a!important}.mast-text-lg-blue-7{color:#004065!important}.mast-text-lg-blue-8{color:#002236!important}.mast-text-lg-neutral-1{color:#fdfdfd!important}.mast-text-lg-neutral-2{color:#f3f3f3!important}.mast-text-lg-neutral-3{color:#e2e2e2!important}.mast-text-lg-neutral-4{color:#d1d1d1!important}.mast-text-lg-neutral-5{color:#ababab!important}.mast-text-lg-neutral-6{color:#757575!important}.mast-text-lg-neutral-7{color:#555!important}.mast-text-lg-neutral-8{color:#232323!important}.mast-text-lg-neutral-warm-1{color:#fcfcfa!important}.mast-text-lg-neutral-warm-2{color:#f1f0ee!important}.mast-text-lg-neutral-warm-3{color:#e4e3e1!important}.mast-text-lg-neutral-warm-4{color:#d4d3d0!important}.mast-text-lg-neutral-warm-5{color:#b0ada8!important}.mast-text-lg-neutral-warm-6{color:#7d7971!important}.mast-text-lg-neutral-warm-7{color:#5b5852!important}.mast-text-lg-neutral-warm-8{color:#242321!important}.mast-text-lg-neutral-cool-1{color:#fcfcfe!important}.mast-text-lg-neutral-cool-2{color:#eff1f1!important}.mast-text-lg-neutral-cool-3{color:#e1e3e5!important}.mast-text-lg-neutral-cool-4{color:#d0d4d6!important}.mast-text-lg-neutral-cool-5{color:#a9afb4!important}.mast-text-lg-neutral-cool-6{color:#727c84!important}.mast-text-lg-neutral-cool-7{color:#535b60!important}.mast-text-lg-neutral-cool-8{color:#1f2325!important}.mast-text-lg-transparent-1{color:transparent!important}.mast-bg-lg-blue-1{background-color:#edf3f7!important}.mast-bg-lg-blue-2{background-color:#c9dce6!important}.mast-bg-lg-blue-3{background-color:#9cbdd1!important}.mast-bg-lg-blue-4{background-color:#6399b8!important}.mast-bg-lg-blue-5{background-color:#367aa3!important}.mast-bg-lg-blue-6{background-color:#00598a!important}.mast-bg-lg-blue-7{background-color:#004065!important}.mast-bg-lg-blue-8{background-color:#002236!important}.mast-bg-lg-neutral-1{background-color:#fdfdfd!important}.mast-bg-lg-neutral-2{background-color:#f3f3f3!important}.mast-bg-lg-neutral-3{background-color:#e2e2e2!important}.mast-bg-lg-neutral-4{background-color:#d1d1d1!important}.mast-bg-lg-neutral-5{background-color:#ababab!important}.mast-bg-lg-neutral-6{background-color:#757575!important}.mast-bg-lg-neutral-7{background-color:#555!important}.mast-bg-lg-neutral-8{background-color:#232323!important}.mast-bg-lg-neutral-warm-1{background-color:#fcfcfa!important}.mast-bg-lg-neutral-warm-2{background-color:#f1f0ee!important}.mast-bg-lg-neutral-warm-3{background-color:#e4e3e1!important}.mast-bg-lg-neutral-warm-4{background-color:#d4d3d0!important}.mast-bg-lg-neutral-warm-5{background-color:#b0ada8!important}.mast-bg-lg-neutral-warm-6{background-color:#7d7971!important}.mast-bg-lg-neutral-warm-7{background-color:#5b5852!important}.mast-bg-lg-neutral-warm-8{background-color:#242321!important}.mast-bg-lg-neutral-cool-1{background-color:#fcfcfe!important}.mast-bg-lg-neutral-cool-2{background-color:#eff1f1!important}.mast-bg-lg-neutral-cool-3{background-color:#e1e3e5!important}.mast-bg-lg-neutral-cool-4{background-color:#d0d4d6!important}.mast-bg-lg-neutral-cool-5{background-color:#a9afb4!important}.mast-bg-lg-neutral-cool-6{background-color:#727c84!important}.mast-bg-lg-neutral-cool-7{background-color:#535b60!important}.mast-bg-lg-neutral-cool-8{background-color:#1f2325!important}.mast-bg-lg-transparent-1{background-color:transparent!important}}@media (min-width:96.1875em){.mast-text-xl-blue-1{color:#edf3f7!important}.mast-text-xl-blue-2{color:#c9dce6!important}.mast-text-xl-blue-3{color:#9cbdd1!important}.mast-text-xl-blue-4{color:#6399b8!important}.mast-text-xl-blue-5{color:#367aa3!important}.mast-text-xl-blue-6{color:#00598a!important}.mast-text-xl-blue-7{color:#004065!important}.mast-text-xl-blue-8{color:#002236!important}.mast-text-xl-neutral-1{color:#fdfdfd!important}.mast-text-xl-neutral-2{color:#f3f3f3!important}.mast-text-xl-neutral-3{color:#e2e2e2!important}.mast-text-xl-neutral-4{color:#d1d1d1!important}.mast-text-xl-neutral-5{color:#ababab!important}.mast-text-xl-neutral-6{color:#757575!important}.mast-text-xl-neutral-7{color:#555!important}.mast-text-xl-neutral-8{color:#232323!important}.mast-text-xl-neutral-warm-1{color:#fcfcfa!important}.mast-text-xl-neutral-warm-2{color:#f1f0ee!important}.mast-text-xl-neutral-warm-3{color:#e4e3e1!important}.mast-text-xl-neutral-warm-4{color:#d4d3d0!important}.mast-text-xl-neutral-warm-5{color:#b0ada8!important}.mast-text-xl-neutral-warm-6{color:#7d7971!important}.mast-text-xl-neutral-warm-7{color:#5b5852!important}.mast-text-xl-neutral-warm-8{color:#242321!important}.mast-text-xl-neutral-cool-1{color:#fcfcfe!important}.mast-text-xl-neutral-cool-2{color:#eff1f1!important}.mast-text-xl-neutral-cool-3{color:#e1e3e5!important}.mast-text-xl-neutral-cool-4{color:#d0d4d6!important}.mast-text-xl-neutral-cool-5{color:#a9afb4!important}.mast-text-xl-neutral-cool-6{color:#727c84!important}.mast-text-xl-neutral-cool-7{color:#535b60!important}.mast-text-xl-neutral-cool-8{color:#1f2325!important}.mast-text-xl-transparent-1{color:transparent!important}.mast-bg-xl-blue-1{background-color:#edf3f7!important}.mast-bg-xl-blue-2{background-color:#c9dce6!important}.mast-bg-xl-blue-3{background-color:#9cbdd1!important}.mast-bg-xl-blue-4{background-color:#6399b8!important}.mast-bg-xl-blue-5{background-color:#367aa3!important}.mast-bg-xl-blue-6{background-color:#00598a!important}.mast-bg-xl-blue-7{background-color:#004065!important}.mast-bg-xl-blue-8{background-color:#002236!important}.mast-bg-xl-neutral-1{background-color:#fdfdfd!important}.mast-bg-xl-neutral-2{background-color:#f3f3f3!important}.mast-bg-xl-neutral-3{background-color:#e2e2e2!important}.mast-bg-xl-neutral-4{background-color:#d1d1d1!important}.mast-bg-xl-neutral-5{background-color:#ababab!important}.mast-bg-xl-neutral-6{background-color:#757575!important}.mast-bg-xl-neutral-7{background-color:#555!important}.mast-bg-xl-neutral-8{background-color:#232323!important}.mast-bg-xl-neutral-warm-1{background-color:#fcfcfa!important}.mast-bg-xl-neutral-warm-2{background-color:#f1f0ee!important}.mast-bg-xl-neutral-warm-3{background-color:#e4e3e1!important}.mast-bg-xl-neutral-warm-4{background-color:#d4d3d0!important}.mast-bg-xl-neutral-warm-5{background-color:#b0ada8!important}.mast-bg-xl-neutral-warm-6{background-color:#7d7971!important}.mast-bg-xl-neutral-warm-7{background-color:#5b5852!important}.mast-bg-xl-neutral-warm-8{background-color:#242321!important}.mast-bg-xl-neutral-cool-1{background-color:#fcfcfe!important}.mast-bg-xl-neutral-cool-2{background-color:#eff1f1!important}.mast-bg-xl-neutral-cool-3{background-color:#e1e3e5!important}.mast-bg-xl-neutral-cool-4{background-color:#d0d4d6!important}.mast-bg-xl-neutral-cool-5{background-color:#a9afb4!important}.mast-bg-xl-neutral-cool-6{background-color:#727c84!important}.mast-bg-xl-neutral-cool-7{background-color:#535b60!important}.mast-bg-xl-neutral-cool-8{background-color:#1f2325!important}.mast-bg-xl-transparent-1{background-color:transparent!important}}.mast-bg-contextual-blue-1{background-color:#eaf4fa!important}.mast-text-contextual-blue-1{color:#eaf4fa!important}.mast-border-contextual-blue-1{border-color:#eaf4fa!important;border-width:1px}.mast-bg-contextual-blue-2{background-color:#b7e2fb!important}.mast-text-contextual-blue-2{color:#b7e2fb!important}.mast-border-contextual-blue-2{border-color:#b7e2fb!important;border-width:1px}.mast-bg-contextual-blue-3{background-color:#24afff!important}.mast-text-contextual-blue-3{color:#24afff!important}.mast-border-contextual-blue-3{border-color:#24afff!important;border-width:1px}.mast-bg-contextual-blue-4{background-color:#038ad8!important}.mast-text-contextual-blue-4{color:#038ad8!important}.mast-border-contextual-blue-4{border-color:#038ad8!important;border-width:1px}.mast-bg-contextual-blue-5{background-color:#0370b0!important}.mast-text-contextual-blue-5{color:#0370b0!important}.mast-border-contextual-blue-5{border-color:#0370b0!important;border-width:1px}.mast-bg-contextual-blue-6{background-color:#012a41!important}.mast-text-contextual-blue-6{color:#012a41!important}.mast-border-contextual-blue-6{border-color:#012a41!important;border-width:1px}.mast-bg-contextual-green-1{background-color:#ceede3!important}.mast-text-contextual-green-1{color:#ceede3!important}.mast-border-contextual-green-1{border-color:#ceede3!important;border-width:1px}.mast-bg-contextual-green-2{background-color:#59c9a2!important}.mast-text-contextual-green-2{color:#59c9a2!important}.mast-border-contextual-green-2{border-color:#59c9a2!important;border-width:1px}.mast-bg-contextual-green-3{background-color:#27aa7c!important}.mast-text-contextual-green-3{color:#27aa7c!important}.mast-border-contextual-green-3{border-color:#27aa7c!important;border-width:1px}.mast-bg-contextual-green-4{background-color:#098b5d!important}.mast-text-contextual-green-4{color:#098b5d!important}.mast-border-contextual-green-4{border-color:#098b5d!important;border-width:1px}.mast-bg-contextual-green-5{background-color:#066544!important}.mast-text-contextual-green-5{color:#066544!important}.mast-border-contextual-green-5{border-color:#066544!important;border-width:1px}.mast-bg-contextual-green-6{background-color:#054830!important}.mast-text-contextual-green-6{color:#054830!important}.mast-border-contextual-green-6{border-color:#054830!important;border-width:1px}.mast-bg-contextual-yellow-1{background-color:#fdf0bf!important}.mast-text-contextual-yellow-1{color:#fdf0bf!important}.mast-border-contextual-yellow-1{border-color:#fdf0bf!important;border-width:1px}.mast-bg-contextual-yellow-2{background-color:#fbe798!important}.mast-text-contextual-yellow-2{color:#fbe798!important}.mast-border-contextual-yellow-2{border-color:#fbe798!important;border-width:1px}.mast-bg-contextual-yellow-3{background-color:#f9dc66!important}.mast-text-contextual-yellow-3{color:#f9dc66!important}.mast-border-contextual-yellow-3{border-color:#f9dc66!important;border-width:1px}.mast-bg-contextual-yellow-4{background-color:#f7cf2b!important}.mast-text-contextual-yellow-4{color:#f7cf2b!important}.mast-border-contextual-yellow-4{border-color:#f7cf2b!important;border-width:1px}.mast-bg-contextual-yellow-5{background-color:#e3b602!important}.mast-text-contextual-yellow-5{color:#e3b602!important}.mast-border-contextual-yellow-5{border-color:#e3b602!important;border-width:1px}.mast-bg-contextual-yellow-6{background-color:#cc9e05!important}.mast-text-contextual-yellow-6{color:#cc9e05!important}.mast-border-contextual-yellow-6{border-color:#cc9e05!important;border-width:1px}.mast-bg-contextual-red-1{background-color:#fcd6d4!important}.mast-text-contextual-red-1{color:#fcd6d4!important}.mast-border-contextual-red-1{border-color:#fcd6d4!important;border-width:1px}.mast-bg-contextual-red-2{background-color:#f7685e!important}.mast-text-contextual-red-2{color:#f7685e!important}.mast-border-contextual-red-2{border-color:#f7685e!important;border-width:1px}.mast-bg-contextual-red-3{background-color:#dd2113!important}.mast-text-contextual-red-3{color:#dd2113!important}.mast-border-contextual-red-3{border-color:#dd2113!important;border-width:1px}.mast-bg-contextual-red-4{background-color:#af1a0f!important}.mast-text-contextual-red-4{color:#af1a0f!important}.mast-border-contextual-red-4{border-color:#af1a0f!important;border-width:1px}.mast-bg-contextual-red-5{background-color:#940a00!important}.mast-text-contextual-red-5{color:#940a00!important}.mast-border-contextual-red-5{border-color:#940a00!important;border-width:1px}.mast-bg-contextual-red-6{background-color:#590d08!important}.mast-text-contextual-red-6{color:#590d08!important}.mast-border-contextual-red-6{border-color:#590d08!important;border-width:1px}.mast-bg-contextual-purple-1{background-color:#f0e0fa!important}.mast-text-contextual-purple-1{color:#f0e0fa!important}.mast-border-contextual-purple-1{border-color:#f0e0fa!important;border-width:1px}.mast-bg-contextual-purple-2{background-color:#debcf5!important}.mast-text-contextual-purple-2{color:#debcf5!important}.mast-border-contextual-purple-2{border-color:#debcf5!important;border-width:1px}.mast-bg-contextual-purple-3{background-color:#b76de9!important}.mast-text-contextual-purple-3{color:#b76de9!important}.mast-border-contextual-purple-3{border-color:#b76de9!important;border-width:1px}.mast-bg-contextual-purple-4{background-color:#9d37e1!important}.mast-text-contextual-purple-4{color:#9d37e1!important}.mast-border-contextual-purple-4{border-color:#9d37e1!important;border-width:1px}.mast-bg-contextual-purple-5{background-color:#781bb6!important}.mast-text-contextual-purple-5{color:#781bb6!important}.mast-border-contextual-purple-5{border-color:#781bb6!important;border-width:1px}.mast-bg-contextual-purple-6{background-color:#4f1278!important}.mast-text-contextual-purple-6{color:#4f1278!important}.mast-border-contextual-purple-6{border-color:#4f1278!important;border-width:1px}.mast-text-transparent{color:transparent!important}.mast-bg-transparent{background-color:transparent!important}.mast-border-transparent{border-color:transparent!important;border-style:solid;border-width:1px!important}.mast-border-top-transparent{border-style:solid;border-top-color:transparent!important;border-top-width:1px!important}.mast-border-right-transparent{border-right-color:transparent!important;border-right-width:1px!important;border-style:solid}.mast-border-bottom-transparent{border-bottom-color:transparent!important;border-bottom-width:1px!important;border-style:solid}.mast-border-left-transparent{border-left-color:transparent!important;border-left-width:1px!important;border-style:solid}*,:after,:before{text-rendering:optimizeLegibility}body{font-weight:400;color:#232323;font-family:IBMPlexSans,Helvetica Neue,Helvetica,Arial,sans-serif;line-height:1.4;-moz-osx-font-smoothing:grayscale;-webkit-font-smoothing:antialiased}.mast-bg-dark{color:#fdfdfd}.mast-heading-1{font-size:3.21053rem}.mast-heading-1,.mast-heading-2{margin-top:0;margin-bottom:.83rem;line-height:1.15;font-weight:300}.mast-heading-2{letter-spacing:.01579rem;font-size:1.94737rem}.mast-heading-3{font-weight:400;font-size:1.42105rem}.mast-heading-3,.mast-heading-4{margin-top:0;margin-bottom:.83rem;line-height:1.15;letter-spacing:.01579rem}.mast-heading-4{font-weight:500;font-size:1.21053rem}.mast-heading-5{margin-top:0;margin-bottom:.83rem;line-height:1.6;letter-spacing:.02632rem;font-weight:300;font-size:.89474rem}@media (min-width:0){.mast-heading-xs-1{font-size:3.21053rem}}@media (min-width:0){.mast-heading-xs-1,.mast-heading-xs-2{margin-top:0;margin-bottom:.83rem;line-height:1.15;font-weight:300}.mast-heading-xs-2{letter-spacing:.01579rem;font-size:1.94737rem}}@media (min-width:0){.mast-heading-xs-3{font-weight:400;font-size:1.42105rem}}@media (min-width:0){.mast-heading-xs-3,.mast-heading-xs-4{margin-top:0;margin-bottom:.83rem;line-height:1.15;letter-spacing:.01579rem}.mast-heading-xs-4{font-weight:500;font-size:1.21053rem}}@media (min-width:0){.mast-heading-xs-5{margin-top:0;margin-bottom:.83rem;line-height:1.6;letter-spacing:.02632rem;font-weight:300;font-size:.89474rem}}@media (min-width:29.6875em){.mast-heading-sm-1{font-size:3.21053rem}}@media (min-width:29.6875em){.mast-heading-sm-1,.mast-heading-sm-2{margin-top:0;margin-bottom:.83rem;line-height:1.15;font-weight:300}.mast-heading-sm-2{letter-spacing:.01579rem;font-size:1.94737rem}}@media (min-width:29.6875em){.mast-heading-sm-3{font-weight:400;font-size:1.42105rem}}@media (min-width:29.6875em){.mast-heading-sm-3,.mast-heading-sm-4{margin-top:0;margin-bottom:.83rem;line-height:1.15;letter-spacing:.01579rem}.mast-heading-sm-4{font-weight:500;font-size:1.21053rem}}@media (min-width:29.6875em){.mast-heading-sm-5{margin-top:0;margin-bottom:.83rem;line-height:1.6;letter-spacing:.02632rem;font-weight:300;font-size:.89474rem}}@media (min-width:48.6875em){.mast-heading-md-1{font-size:3.21053rem}}@media (min-width:48.6875em){.mast-heading-md-1,.mast-heading-md-2{margin-top:0;margin-bottom:.83rem;line-height:1.15;font-weight:300}.mast-heading-md-2{letter-spacing:.01579rem;font-size:1.94737rem}}@media (min-width:48.6875em){.mast-heading-md-3{font-weight:400;font-size:1.42105rem}}@media (min-width:48.6875em){.mast-heading-md-3,.mast-heading-md-4{margin-top:0;margin-bottom:.83rem;line-height:1.15;letter-spacing:.01579rem}.mast-heading-md-4{font-weight:500;font-size:1.21053rem}}@media (min-width:48.6875em){.mast-heading-md-5{margin-top:0;margin-bottom:.83rem;line-height:1.6;letter-spacing:.02632rem;font-weight:300;font-size:.89474rem}}@media (min-width:72.4375em){.mast-heading-lg-1{font-size:3.21053rem}}@media (min-width:72.4375em){.mast-heading-lg-1,.mast-heading-lg-2{margin-top:0;margin-bottom:.83rem;line-height:1.15;font-weight:300}.mast-heading-lg-2{letter-spacing:.01579rem;font-size:1.94737rem}}@media (min-width:72.4375em){.mast-heading-lg-3{font-weight:400;font-size:1.42105rem}}@media (min-width:72.4375em){.mast-heading-lg-3,.mast-heading-lg-4{margin-top:0;margin-bottom:.83rem;line-height:1.15;letter-spacing:.01579rem}.mast-heading-lg-4{font-weight:500;font-size:1.21053rem}}@media (min-width:72.4375em){.mast-heading-lg-5{margin-top:0;margin-bottom:.83rem;line-height:1.6;letter-spacing:.02632rem;font-weight:300;font-size:.89474rem}}@media (min-width:96.1875em){.mast-heading-xl-1{font-size:3.21053rem}}@media (min-width:96.1875em){.mast-heading-xl-1,.mast-heading-xl-2{margin-top:0;margin-bottom:.83rem;line-height:1.15;font-weight:300}.mast-heading-xl-2{letter-spacing:.01579rem;font-size:1.94737rem}}@media (min-width:96.1875em){.mast-heading-xl-3{font-weight:400;font-size:1.42105rem}}@media (min-width:96.1875em){.mast-heading-xl-3,.mast-heading-xl-4{margin-top:0;margin-bottom:.83rem;line-height:1.15;letter-spacing:.01579rem}.mast-heading-xl-4{font-weight:500;font-size:1.21053rem}}@media (min-width:96.1875em){.mast-heading-xl-5{margin-top:0;margin-bottom:.83rem;line-height:1.6;letter-spacing:.02632rem;font-weight:300;font-size:.89474rem}}#w3-masthead-overlay p{margin-bottom:.83rem;margin-top:0}#w3-masthead-overlay a{font-weight:500;color:#00598a;text-decoration:none}#w3-masthead-overlay a:active,#w3-masthead-overlay a:hover{text-decoration:underline}#w3-masthead-overlay a:hover{color:#0370b0}#w3-masthead-overlay a:focus{outline:2px dotted #757575;outline-offset:2px}#w3-masthead-overlay a:active{color:#dd2113}#w3-masthead-overlay a:visited{color:#781bb6}.mast-link-unstyled{color:inherit}.mast-link-unstyled:active,.mast-link-unstyled:hover,.mast-link-unstyled:visited{color:inherit;text-decoration:none}.mast-label{margin-bottom:.83rem;font-family:IBMPlexSans,Helvetica Neue,Helvetica,Arial,sans-serif;letter-spacing:.02632rem;text-transform:uppercase;font-weight:500;font-size:.89474rem}.mast-caption{font-size:.68421rem;letter-spacing:.01579rem;line-height:1.47}.mast-caption,.mast-caption.mast-label{font-weight:400}.mast-caption-small{font-weight:400;font-size:.68421rem;letter-spacing:.01579rem;line-height:1.47;font-size:.57895rem}.mast-caption-small.mast-label{font-weight:400}.mast-align-text-left{text-align:left!important}.mast-align-text-center{text-align:center!important}.mast-align-text-right{text-align:right!important}.mast-align-text-justify{text-align:justify!important}@media (min-width:0){.mast-align-text-xs-left{text-align:left!important}.mast-align-text-xs-center{text-align:center!important}.mast-align-text-xs-right{text-align:right!important}.mast-align-text-xs-justify{text-align:justify!important}}@media (min-width:29.6875em){.mast-align-text-sm-left{text-align:left!important}.mast-align-text-sm-center{text-align:center!important}.mast-align-text-sm-right{text-align:right!important}.mast-align-text-sm-justify{text-align:justify!important}}@media (min-width:48.6875em){.mast-align-text-md-left{text-align:left!important}.mast-align-text-md-center{text-align:center!important}.mast-align-text-md-right{text-align:right!important}.mast-align-text-md-justify{text-align:justify!important}}@media (min-width:72.4375em){.mast-align-text-lg-left{text-align:left!important}.mast-align-text-lg-center{text-align:center!important}.mast-align-text-lg-right{text-align:right!important}.mast-align-text-lg-justify{text-align:justify!important}}@media (min-width:96.1875em){.mast-align-text-xl-left{text-align:left!important}.mast-align-text-xl-center{text-align:center!important}.mast-align-text-xl-right{text-align:right!important}.mast-align-text-xl-justify{text-align:justify!important}}.mast-text-uppercase{text-transform:uppercase}.mast-text-lowercase{text-transform:lowercase}.mast-text-capitalize{text-transform:capitalize}.mast-text-underline{text-decoration:underline}.mast-text-strikethrough{text-decoration:line-through}.mast-text-italic{font-weight:500;font-family:IBMPlexSans,sans-serif;font-style:italic}.mast-text-sub{vertical-align:sub}.mast-text-sub,.mast-text-super{font-size:.77em;line-height:0;position:relative;top:0}.mast-text-super{vertical-align:super}.mast-font-weight-light{font-weight:300!important}.mast-font-weight-regular{font-weight:400!important}.mast-font-weight-medium{font-weight:500!important}.mast-font-weight-bold{font-weight:600!important}.mast-text-kbd{font-weight:500;border:1px solid #757575;border-radius:2px;font-family:IBMPlexMono,Consolas,Andale Mono WT,Andale Mono,Lucida Console,Lucida Sans Typewriter,DejaVu Sans Mono,Bitstream Vera Sans Mono,Liberation Mono,Nimbus Mono L,Monaco,Courier New,Courier,monospace;padding:.05rem .6rem}.mast-text-small{font-size:.81579rem;letter-spacing:.02632rem}.mast-text-small.mast-label{font-weight:400}.mast-text-highlight{background-color:#b7e2fb;padding:.1rem .25rem .2rem;position:relative}.mast-text-abbr[title]{border-bottom:1px dashed #d1d1d1;text-decoration:none}.mast-code-inline{font-size:.81579rem;letter-spacing:.02632rem;background-color:#f3f3f3;color:#af1a0f;padding:.1rem .25rem .2rem}.mast-code-inline,.mast-text-monospace{font-weight:500;font-family:IBMPlexMono,Consolas,Andale Mono WT,Andale Mono,Lucida Console,Lucida Sans Typewriter,DejaVu Sans Mono,Bitstream Vera Sans Mono,Liberation Mono,Nimbus Mono L,Monaco,Courier New,Courier,monospace}.mast-text-citation{font-size:.81579rem;letter-spacing:.02632rem;font-weight:500;font-family:IBMPlexSans,sans-serif;font-style:italic}.mast-blockquote{margin-bottom:.83rem}.mast-blockquote .mast-quote{line-height:1.32;font-size:1.42105rem;letter-spacing:.05em;padding-bottom:1.5rem}.mast-blockquote .mast-quote:after,.mast-blockquote .mast-quote:before{display:block;font-size:1.94737rem;line-height:.5;position:relative}.mast-blockquote .mast-quote:before{content:"\201C"}.mast-blockquote .mast-quote:after{content:"\201D";top:.5em}.mast-blockquote .mast-long-form{line-height:1.55;font-size:1.21053rem}.mast-blockquote .mast-citation{font-size:.81579rem;letter-spacing:.02632rem;font-weight:500;font-family:IBMPlexSans,sans-serif;font-style:italic}.mast-text-light-color{color:#fdfdfd}.mast-text-grey-color{color:#555}.mast-align-block-center{margin-left:auto;margin-right:auto}.mast-float-left{float:left!important}.mast-float-right{float:right!important}.mast-float-none{float:none!important}.mast-cf:after,.mast-cf:before{content:" ";display:table}.mast-cf:after{clear:both}.mast-display-inline{display:inline!important}.mast-display-inline-block{display:inline-block!important}.mast-display-block{display:block!important}.mast-visibility-hidden{visibility:hidden!important}.mast-visibility-visible{visibility:visible!important}.mast-hide{display:none!important}@media (min-width:0){.mast-float-xs-left{float:left!important}.mast-float-xs-right{float:right!important}.mast-float-xs-none{float:none!important}.mast-align-xs-block-center{margin-left:auto;margin-right:auto}.mast-cf-xs:after,.mast-cf-xs:before{content:" ";display:table}.mast-cf-xs:after{clear:both}.mast-display-xs-inline{display:inline!important}.mast-display-xs-inline-block{display:inline-block!important}.mast-display-xs-block{display:block!important}.mast-visibility-xs-hidden{visibility:hidden!important}.mast-visibility-xs-visible{visibility:visible!important}.mast-hide-xs{display:none!important}}@media (min-width:29.6875em){.mast-float-sm-left{float:left!important}.mast-float-sm-right{float:right!important}.mast-float-sm-none{float:none!important}.mast-align-sm-block-center{margin-left:auto;margin-right:auto}.mast-cf-sm:after,.mast-cf-sm:before{content:" ";display:table}.mast-cf-sm:after{clear:both}.mast-display-sm-inline{display:inline!important}.mast-display-sm-inline-block{display:inline-block!important}.mast-display-sm-block{display:block!important}.mast-visibility-sm-hidden{visibility:hidden!important}.mast-visibility-sm-visible{visibility:visible!important}.mast-hide-sm{display:none!important}}@media (min-width:48.6875em){.mast-float-md-left{float:left!important}.mast-float-md-right{float:right!important}.mast-float-md-none{float:none!important}.mast-align-md-block-center{margin-left:auto;margin-right:auto}.mast-cf-md:after,.mast-cf-md:before{content:" ";display:table}.mast-cf-md:after{clear:both}.mast-display-md-inline{display:inline!important}.mast-display-md-inline-block{display:inline-block!important}.mast-display-md-block{display:block!important}.mast-visibility-md-hidden{visibility:hidden!important}.mast-visibility-md-visible{visibility:visible!important}.mast-hide-md{display:none!important}}@media (min-width:72.4375em){.mast-float-lg-left{float:left!important}.mast-float-lg-right{float:right!important}.mast-float-lg-none{float:none!important}.mast-align-lg-block-center{margin-left:auto;margin-right:auto}.mast-cf-lg:after,.mast-cf-lg:before{content:" ";display:table}.mast-cf-lg:after{clear:both}.mast-display-lg-inline{display:inline!important}.mast-display-lg-inline-block{display:inline-block!important}.mast-display-lg-block{display:block!important}.mast-visibility-lg-hidden{visibility:hidden!important}.mast-visibility-lg-visible{visibility:visible!important}.mast-hide-lg{display:none!important}}@media (min-width:96.1875em){.mast-float-xl-left{float:left!important}.mast-float-xl-right{float:right!important}.mast-float-xl-none{float:none!important}.mast-align-xl-block-center{margin-left:auto;margin-right:auto}.mast-cf-xl:after,.mast-cf-xl:before{content:" ";display:table}.mast-cf-xl:after{clear:both}.mast-display-xl-inline{display:inline!important}.mast-display-xl-inline-block{display:inline-block!important}.mast-display-xl-block{display:block!important}.mast-visibility-xl-hidden{visibility:hidden!important}.mast-visibility-xl-visible{visibility:visible!important}.mast-hide-xl{display:none!important}}.mast-affix{position:fixed!important;box-shadow:0 1px 3px rgba(83,91,96,.23)}.mast-affix.mast-full-width{width:100%}.mast-affix.mast-full-height{height:100%}.mast-affix.mast-bottom{bottom:0}.mast-affix.mast-right{right:0}.mast-affix.mast-left{left:0}.mast-hr{border-color:#d1d1d1;border-style:solid;border-width:0 0 1px;width:100%}.mast-shadow-raised{box-shadow:0 1px 3px rgba(83,91,96,.23)!important}.mast-shadow-floating{box-shadow:0 3px 6px rgba(83,91,96,.23)!important}.mast-shadow-text{text-shadow:0 1px 3px rgba(83,91,96,.23)!important}.mast-margin-0{margin:0!important}.mast-margin-top-0{margin-top:0!important}.mast-margin-right-0{margin-right:0!important}.mast-margin-bottom-0{margin-bottom:0!important}.mast-margin-left-0{margin-left:0!important}.mast-margin-0_5{margin:.5rem!important}.mast-margin-top-0_5{margin-top:.5rem!important}.mast-margin-right-0_5{margin-right:.5rem!important}.mast-margin-bottom-0_5{margin-bottom:.5rem!important}.mast-margin-left-0_5{margin-left:.5rem!important}.mast-margin-1{margin:1rem!important}.mast-margin-top-1{margin-top:1rem!important}.mast-margin-right-1{margin-right:1rem!important}.mast-margin-bottom-1{margin-bottom:1rem!important}.mast-margin-left-1{margin-left:1rem!important}.mast-margin-1_5{margin:1.5rem!important}.mast-margin-top-1_5{margin-top:1.5rem!important}.mast-margin-right-1_5{margin-right:1.5rem!important}.mast-margin-bottom-1_5{margin-bottom:1.5rem!important}.mast-margin-left-1_5{margin-left:1.5rem!important}.mast-margin-2{margin:2rem!important}.mast-margin-top-2{margin-top:2rem!important}.mast-margin-right-2{margin-right:2rem!important}.mast-margin-bottom-2{margin-bottom:2rem!important}.mast-margin-left-2{margin-left:2rem!important}.mast-margin-2_5{margin:2.5rem!important}.mast-margin-top-2_5{margin-top:2.5rem!important}.mast-margin-right-2_5{margin-right:2.5rem!important}.mast-margin-bottom-2_5{margin-bottom:2.5rem!important}.mast-margin-left-2_5{margin-left:2.5rem!important}.mast-margin-3{margin:3rem!important}.mast-margin-top-3{margin-top:3rem!important}.mast-margin-right-3{margin-right:3rem!important}.mast-margin-bottom-3{margin-bottom:3rem!important}.mast-margin-left-3{margin-left:3rem!important}.mast-margin-3_5{margin:3.5rem!important}.mast-margin-top-3_5{margin-top:3.5rem!important}.mast-margin-right-3_5{margin-right:3.5rem!important}.mast-margin-bottom-3_5{margin-bottom:3.5rem!important}.mast-margin-left-3_5{margin-left:3.5rem!important}.mast-margin-4{margin:4rem!important}.mast-margin-top-4{margin-top:4rem!important}.mast-margin-right-4{margin-right:4rem!important}.mast-margin-bottom-4{margin-bottom:4rem!important}.mast-margin-left-4{margin-left:4rem!important}.mast-margin-4_5{margin:4.5rem!important}.mast-margin-top-4_5{margin-top:4.5rem!important}.mast-margin-right-4_5{margin-right:4.5rem!important}.mast-margin-bottom-4_5{margin-bottom:4.5rem!important}.mast-margin-left-4_5{margin-left:4.5rem!important}.mast-margin-5{margin:5rem!important}.mast-margin-top-5{margin-top:5rem!important}.mast-margin-right-5{margin-right:5rem!important}.mast-margin-bottom-5{margin-bottom:5rem!important}.mast-margin-left-5{margin-left:5rem!important}.mast-margin-5_5{margin:5.5rem!important}.mast-margin-top-5_5{margin-top:5.5rem!important}.mast-margin-right-5_5{margin-right:5.5rem!important}.mast-margin-bottom-5_5{margin-bottom:5.5rem!important}.mast-margin-left-5_5{margin-left:5.5rem!important}.mast-margin-6{margin:6rem!important}.mast-margin-top-6{margin-top:6rem!important}.mast-margin-right-6{margin-right:6rem!important}.mast-margin-bottom-6{margin-bottom:6rem!important}.mast-margin-left-6{margin-left:6rem!important}.mast-margin-6_5{margin:6.5rem!important}.mast-margin-top-6_5{margin-top:6.5rem!important}.mast-margin-right-6_5{margin-right:6.5rem!important}.mast-margin-bottom-6_5{margin-bottom:6.5rem!important}.mast-margin-left-6_5{margin-left:6.5rem!important}.mast-margin-7{margin:7rem!important}.mast-margin-top-7{margin-top:7rem!important}.mast-margin-right-7{margin-right:7rem!important}.mast-margin-bottom-7{margin-bottom:7rem!important}.mast-margin-left-7{margin-left:7rem!important}.mast-margin-7_5{margin:7.5rem!important}.mast-margin-top-7_5{margin-top:7.5rem!important}.mast-margin-right-7_5{margin-right:7.5rem!important}.mast-margin-bottom-7_5{margin-bottom:7.5rem!important}.mast-margin-left-7_5{margin-left:7.5rem!important}.mast-margin-8{margin:8rem!important}.mast-margin-top-8{margin-top:8rem!important}.mast-margin-right-8{margin-right:8rem!important}.mast-margin-bottom-8{margin-bottom:8rem!important}.mast-margin-left-8{margin-left:8rem!important}.mast-margin-8_5{margin:8.5rem!important}.mast-margin-top-8_5{margin-top:8.5rem!important}.mast-margin-right-8_5{margin-right:8.5rem!important}.mast-margin-bottom-8_5{margin-bottom:8.5rem!important}.mast-margin-left-8_5{margin-left:8.5rem!important}.mast-margin-9{margin:9rem!important}.mast-margin-top-9{margin-top:9rem!important}.mast-margin-right-9{margin-right:9rem!important}.mast-margin-bottom-9{margin-bottom:9rem!important}.mast-margin-left-9{margin-left:9rem!important}.mast-margin-9_5{margin:9.5rem!important}.mast-margin-top-9_5{margin-top:9.5rem!important}.mast-margin-right-9_5{margin-right:9.5rem!important}.mast-margin-bottom-9_5{margin-bottom:9.5rem!important}.mast-margin-left-9_5{margin-left:9.5rem!important}.mast-margin-10{margin:10rem!important}.mast-margin-top-10{margin-top:10rem!important}.mast-margin-right-10{margin-right:10rem!important}.mast-margin-bottom-10{margin-bottom:10rem!important}.mast-margin-left-10{margin-left:10rem!important}.mast-padding-0{padding:0!important}.mast-padding-top-0{padding-top:0!important}.mast-padding-right-0{padding-right:0!important}.mast-padding-bottom-0{padding-bottom:0!important}.mast-padding-left-0{padding-left:0!important}.mast-padding-0_5{padding:.5rem!important}.mast-padding-top-0_5{padding-top:.5rem!important}.mast-padding-right-0_5{padding-right:.5rem!important}.mast-padding-bottom-0_5{padding-bottom:.5rem!important}.mast-padding-left-0_5{padding-left:.5rem!important}.mast-padding-1{padding:1rem!important}.mast-padding-top-1{padding-top:1rem!important}.mast-padding-right-1{padding-right:1rem!important}.mast-padding-bottom-1{padding-bottom:1rem!important}.mast-padding-left-1{padding-left:1rem!important}.mast-padding-1_5{padding:1.5rem!important}.mast-padding-top-1_5{padding-top:1.5rem!important}.mast-padding-right-1_5{padding-right:1.5rem!important}.mast-padding-bottom-1_5{padding-bottom:1.5rem!important}.mast-padding-left-1_5{padding-left:1.5rem!important}.mast-padding-2{padding:2rem!important}.mast-padding-top-2{padding-top:2rem!important}.mast-padding-right-2{padding-right:2rem!important}.mast-padding-bottom-2{padding-bottom:2rem!important}.mast-padding-left-2{padding-left:2rem!important}.mast-padding-2_5{padding:2.5rem!important}.mast-padding-top-2_5{padding-top:2.5rem!important}.mast-padding-right-2_5{padding-right:2.5rem!important}.mast-padding-bottom-2_5{padding-bottom:2.5rem!important}.mast-padding-left-2_5{padding-left:2.5rem!important}.mast-padding-3{padding:3rem!important}.mast-padding-top-3{padding-top:3rem!important}.mast-padding-right-3{padding-right:3rem!important}.mast-padding-bottom-3{padding-bottom:3rem!important}.mast-padding-left-3{padding-left:3rem!important}.mast-padding-3_5{padding:3.5rem!important}.mast-padding-top-3_5{padding-top:3.5rem!important}.mast-padding-right-3_5{padding-right:3.5rem!important}.mast-padding-bottom-3_5{padding-bottom:3.5rem!important}.mast-padding-left-3_5{padding-left:3.5rem!important}.mast-padding-4{padding:4rem!important}.mast-padding-top-4{padding-top:4rem!important}.mast-padding-right-4{padding-right:4rem!important}.mast-padding-bottom-4{padding-bottom:4rem!important}.mast-padding-left-4{padding-left:4rem!important}.mast-padding-4_5{padding:4.5rem!important}.mast-padding-top-4_5{padding-top:4.5rem!important}.mast-padding-right-4_5{padding-right:4.5rem!important}.mast-padding-bottom-4_5{padding-bottom:4.5rem!important}.mast-padding-left-4_5{padding-left:4.5rem!important}.mast-padding-5{padding:5rem!important}.mast-padding-top-5{padding-top:5rem!important}.mast-padding-right-5{padding-right:5rem!important}.mast-padding-bottom-5{padding-bottom:5rem!important}.mast-padding-left-5{padding-left:5rem!important}.mast-padding-5_5{padding:5.5rem!important}.mast-padding-top-5_5{padding-top:5.5rem!important}.mast-padding-right-5_5{padding-right:5.5rem!important}.mast-padding-bottom-5_5{padding-bottom:5.5rem!important}.mast-padding-left-5_5{padding-left:5.5rem!important}.mast-padding-6{padding:6rem!important}.mast-padding-top-6{padding-top:6rem!important}.mast-padding-right-6{padding-right:6rem!important}.mast-padding-bottom-6{padding-bottom:6rem!important}.mast-padding-left-6{padding-left:6rem!important}.mast-padding-6_5{padding:6.5rem!important}.mast-padding-top-6_5{padding-top:6.5rem!important}.mast-padding-right-6_5{padding-right:6.5rem!important}.mast-padding-bottom-6_5{padding-bottom:6.5rem!important}.mast-padding-left-6_5{padding-left:6.5rem!important}.mast-padding-7{padding:7rem!important}.mast-padding-top-7{padding-top:7rem!important}.mast-padding-right-7{padding-right:7rem!important}.mast-padding-bottom-7{padding-bottom:7rem!important}.mast-padding-left-7{padding-left:7rem!important}.mast-padding-7_5{padding:7.5rem!important}.mast-padding-top-7_5{padding-top:7.5rem!important}.mast-padding-right-7_5{padding-right:7.5rem!important}.mast-padding-bottom-7_5{padding-bottom:7.5rem!important}.mast-padding-left-7_5{padding-left:7.5rem!important}.mast-padding-8{padding:8rem!important}.mast-padding-top-8{padding-top:8rem!important}.mast-padding-right-8{padding-right:8rem!important}.mast-padding-bottom-8{padding-bottom:8rem!important}.mast-padding-left-8{padding-left:8rem!important}.mast-padding-8_5{padding:8.5rem!important}.mast-padding-top-8_5{padding-top:8.5rem!important}.mast-padding-right-8_5{padding-right:8.5rem!important}.mast-padding-bottom-8_5{padding-bottom:8.5rem!important}.mast-padding-left-8_5{padding-left:8.5rem!important}.mast-padding-9{padding:9rem!important}.mast-padding-top-9{padding-top:9rem!important}.mast-padding-right-9{padding-right:9rem!important}.mast-padding-bottom-9{padding-bottom:9rem!important}.mast-padding-left-9{padding-left:9rem!important}.mast-padding-9_5{padding:9.5rem!important}.mast-padding-top-9_5{padding-top:9.5rem!important}.mast-padding-right-9_5{padding-right:9.5rem!important}.mast-padding-bottom-9_5{padding-bottom:9.5rem!important}.mast-padding-left-9_5{padding-left:9.5rem!important}.mast-padding-10{padding:10rem!important}.mast-padding-top-10{padding-top:10rem!important}.mast-padding-right-10{padding-right:10rem!important}.mast-padding-bottom-10{padding-bottom:10rem!important}.mast-padding-left-10{padding-left:10rem!important}@media (min-width:0){.mast-margin-xs-0{margin:0!important}.mast-margin-top-xs-0{margin-top:0!important}.mast-margin-right-xs-0{margin-right:0!important}.mast-margin-bottom-xs-0{margin-bottom:0!important}.mast-margin-left-xs-0{margin-left:0!important}.mast-margin-xs-0_5{margin:.5rem!important}.mast-margin-top-xs-0_5{margin-top:.5rem!important}.mast-margin-right-xs-0_5{margin-right:.5rem!important}.mast-margin-bottom-xs-0_5{margin-bottom:.5rem!important}.mast-margin-left-xs-0_5{margin-left:.5rem!important}.mast-margin-xs-1{margin:1rem!important}.mast-margin-top-xs-1{margin-top:1rem!important}.mast-margin-right-xs-1{margin-right:1rem!important}.mast-margin-bottom-xs-1{margin-bottom:1rem!important}.mast-margin-left-xs-1{margin-left:1rem!important}.mast-margin-xs-1_5{margin:1.5rem!important}.mast-margin-top-xs-1_5{margin-top:1.5rem!important}.mast-margin-right-xs-1_5{margin-right:1.5rem!important}.mast-margin-bottom-xs-1_5{margin-bottom:1.5rem!important}.mast-margin-left-xs-1_5{margin-left:1.5rem!important}.mast-margin-xs-2{margin:2rem!important}.mast-margin-top-xs-2{margin-top:2rem!important}.mast-margin-right-xs-2{margin-right:2rem!important}.mast-margin-bottom-xs-2{margin-bottom:2rem!important}.mast-margin-left-xs-2{margin-left:2rem!important}.mast-margin-xs-2_5{margin:2.5rem!important}.mast-margin-top-xs-2_5{margin-top:2.5rem!important}.mast-margin-right-xs-2_5{margin-right:2.5rem!important}.mast-margin-bottom-xs-2_5{margin-bottom:2.5rem!important}.mast-margin-left-xs-2_5{margin-left:2.5rem!important}.mast-margin-xs-3{margin:3rem!important}.mast-margin-top-xs-3{margin-top:3rem!important}.mast-margin-right-xs-3{margin-right:3rem!important}.mast-margin-bottom-xs-3{margin-bottom:3rem!important}.mast-margin-left-xs-3{margin-left:3rem!important}.mast-margin-xs-3_5{margin:3.5rem!important}.mast-margin-top-xs-3_5{margin-top:3.5rem!important}.mast-margin-right-xs-3_5{margin-right:3.5rem!important}.mast-margin-bottom-xs-3_5{margin-bottom:3.5rem!important}.mast-margin-left-xs-3_5{margin-left:3.5rem!important}.mast-margin-xs-4{margin:4rem!important}.mast-margin-top-xs-4{margin-top:4rem!important}.mast-margin-right-xs-4{margin-right:4rem!important}.mast-margin-bottom-xs-4{margin-bottom:4rem!important}.mast-margin-left-xs-4{margin-left:4rem!important}.mast-margin-xs-4_5{margin:4.5rem!important}.mast-margin-top-xs-4_5{margin-top:4.5rem!important}.mast-margin-right-xs-4_5{margin-right:4.5rem!important}.mast-margin-bottom-xs-4_5{margin-bottom:4.5rem!important}.mast-margin-left-xs-4_5{margin-left:4.5rem!important}.mast-margin-xs-5{margin:5rem!important}.mast-margin-top-xs-5{margin-top:5rem!important}.mast-margin-right-xs-5{margin-right:5rem!important}.mast-margin-bottom-xs-5{margin-bottom:5rem!important}.mast-margin-left-xs-5{margin-left:5rem!important}.mast-margin-xs-5_5{margin:5.5rem!important}.mast-margin-top-xs-5_5{margin-top:5.5rem!important}.mast-margin-right-xs-5_5{margin-right:5.5rem!important}.mast-margin-bottom-xs-5_5{margin-bottom:5.5rem!important}.mast-margin-left-xs-5_5{margin-left:5.5rem!important}.mast-margin-xs-6{margin:6rem!important}.mast-margin-top-xs-6{margin-top:6rem!important}.mast-margin-right-xs-6{margin-right:6rem!important}.mast-margin-bottom-xs-6{margin-bottom:6rem!important}.mast-margin-left-xs-6{margin-left:6rem!important}.mast-margin-xs-6_5{margin:6.5rem!important}.mast-margin-top-xs-6_5{margin-top:6.5rem!important}.mast-margin-right-xs-6_5{margin-right:6.5rem!important}.mast-margin-bottom-xs-6_5{margin-bottom:6.5rem!important}.mast-margin-left-xs-6_5{margin-left:6.5rem!important}.mast-margin-xs-7{margin:7rem!important}.mast-margin-top-xs-7{margin-top:7rem!important}.mast-margin-right-xs-7{margin-right:7rem!important}.mast-margin-bottom-xs-7{margin-bottom:7rem!important}.mast-margin-left-xs-7{margin-left:7rem!important}.mast-margin-xs-7_5{margin:7.5rem!important}.mast-margin-top-xs-7_5{margin-top:7.5rem!important}.mast-margin-right-xs-7_5{margin-right:7.5rem!important}.mast-margin-bottom-xs-7_5{margin-bottom:7.5rem!important}.mast-margin-left-xs-7_5{margin-left:7.5rem!important}.mast-margin-xs-8{margin:8rem!important}.mast-margin-top-xs-8{margin-top:8rem!important}.mast-margin-right-xs-8{margin-right:8rem!important}.mast-margin-bottom-xs-8{margin-bottom:8rem!important}.mast-margin-left-xs-8{margin-left:8rem!important}.mast-margin-xs-8_5{margin:8.5rem!important}.mast-margin-top-xs-8_5{margin-top:8.5rem!important}.mast-margin-right-xs-8_5{margin-right:8.5rem!important}.mast-margin-bottom-xs-8_5{margin-bottom:8.5rem!important}.mast-margin-left-xs-8_5{margin-left:8.5rem!important}.mast-margin-xs-9{margin:9rem!important}.mast-margin-top-xs-9{margin-top:9rem!important}.mast-margin-right-xs-9{margin-right:9rem!important}.mast-margin-bottom-xs-9{margin-bottom:9rem!important}.mast-margin-left-xs-9{margin-left:9rem!important}.mast-margin-xs-9_5{margin:9.5rem!important}.mast-margin-top-xs-9_5{margin-top:9.5rem!important}.mast-margin-right-xs-9_5{margin-right:9.5rem!important}.mast-margin-bottom-xs-9_5{margin-bottom:9.5rem!important}.mast-margin-left-xs-9_5{margin-left:9.5rem!important}.mast-margin-xs-10{margin:10rem!important}.mast-margin-top-xs-10{margin-top:10rem!important}.mast-margin-right-xs-10{margin-right:10rem!important}.mast-margin-bottom-xs-10{margin-bottom:10rem!important}.mast-margin-left-xs-10{margin-left:10rem!important}.mast-padding-xs-0{padding:0!important}.mast-padding-top-xs-0{padding-top:0!important}.mast-padding-right-xs-0{padding-right:0!important}.mast-padding-bottom-xs-0{padding-bottom:0!important}.mast-padding-left-xs-0{padding-left:0!important}.mast-padding-xs-0_5{padding:.5rem!important}.mast-padding-top-xs-0_5{padding-top:.5rem!important}.mast-padding-right-xs-0_5{padding-right:.5rem!important}.mast-padding-bottom-xs-0_5{padding-bottom:.5rem!important}.mast-padding-left-xs-0_5{padding-left:.5rem!important}.mast-padding-xs-1{padding:1rem!important}.mast-padding-top-xs-1{padding-top:1rem!important}.mast-padding-right-xs-1{padding-right:1rem!important}.mast-padding-bottom-xs-1{padding-bottom:1rem!important}.mast-padding-left-xs-1{padding-left:1rem!important}.mast-padding-xs-1_5{padding:1.5rem!important}.mast-padding-top-xs-1_5{padding-top:1.5rem!important}.mast-padding-right-xs-1_5{padding-right:1.5rem!important}.mast-padding-bottom-xs-1_5{padding-bottom:1.5rem!important}.mast-padding-left-xs-1_5{padding-left:1.5rem!important}.mast-padding-xs-2{padding:2rem!important}.mast-padding-top-xs-2{padding-top:2rem!important}.mast-padding-right-xs-2{padding-right:2rem!important}.mast-padding-bottom-xs-2{padding-bottom:2rem!important}.mast-padding-left-xs-2{padding-left:2rem!important}.mast-padding-xs-2_5{padding:2.5rem!important}.mast-padding-top-xs-2_5{padding-top:2.5rem!important}.mast-padding-right-xs-2_5{padding-right:2.5rem!important}.mast-padding-bottom-xs-2_5{padding-bottom:2.5rem!important}.mast-padding-left-xs-2_5{padding-left:2.5rem!important}.mast-padding-xs-3{padding:3rem!important}.mast-padding-top-xs-3{padding-top:3rem!important}.mast-padding-right-xs-3{padding-right:3rem!important}.mast-padding-bottom-xs-3{padding-bottom:3rem!important}.mast-padding-left-xs-3{padding-left:3rem!important}.mast-padding-xs-3_5{padding:3.5rem!important}.mast-padding-top-xs-3_5{padding-top:3.5rem!important}.mast-padding-right-xs-3_5{padding-right:3.5rem!important}.mast-padding-bottom-xs-3_5{padding-bottom:3.5rem!important}.mast-padding-left-xs-3_5{padding-left:3.5rem!important}.mast-padding-xs-4{padding:4rem!important}.mast-padding-top-xs-4{padding-top:4rem!important}.mast-padding-right-xs-4{padding-right:4rem!important}.mast-padding-bottom-xs-4{padding-bottom:4rem!important}.mast-padding-left-xs-4{padding-left:4rem!important}.mast-padding-xs-4_5{padding:4.5rem!important}.mast-padding-top-xs-4_5{padding-top:4.5rem!important}.mast-padding-right-xs-4_5{padding-right:4.5rem!important}.mast-padding-bottom-xs-4_5{padding-bottom:4.5rem!important}.mast-padding-left-xs-4_5{padding-left:4.5rem!important}.mast-padding-xs-5{padding:5rem!important}.mast-padding-top-xs-5{padding-top:5rem!important}.mast-padding-right-xs-5{padding-right:5rem!important}.mast-padding-bottom-xs-5{padding-bottom:5rem!important}.mast-padding-left-xs-5{padding-left:5rem!important}.mast-padding-xs-5_5{padding:5.5rem!important}.mast-padding-top-xs-5_5{padding-top:5.5rem!important}.mast-padding-right-xs-5_5{padding-right:5.5rem!important}.mast-padding-bottom-xs-5_5{padding-bottom:5.5rem!important}.mast-padding-left-xs-5_5{padding-left:5.5rem!important}.mast-padding-xs-6{padding:6rem!important}.mast-padding-top-xs-6{padding-top:6rem!important}.mast-padding-right-xs-6{padding-right:6rem!important}.mast-padding-bottom-xs-6{padding-bottom:6rem!important}.mast-padding-left-xs-6{padding-left:6rem!important}.mast-padding-xs-6_5{padding:6.5rem!important}.mast-padding-top-xs-6_5{padding-top:6.5rem!important}.mast-padding-right-xs-6_5{padding-right:6.5rem!important}.mast-padding-bottom-xs-6_5{padding-bottom:6.5rem!important}.mast-padding-left-xs-6_5{padding-left:6.5rem!important}.mast-padding-xs-7{padding:7rem!important}.mast-padding-top-xs-7{padding-top:7rem!important}.mast-padding-right-xs-7{padding-right:7rem!important}.mast-padding-bottom-xs-7{padding-bottom:7rem!important}.mast-padding-left-xs-7{padding-left:7rem!important}.mast-padding-xs-7_5{padding:7.5rem!important}.mast-padding-top-xs-7_5{padding-top:7.5rem!important}.mast-padding-right-xs-7_5{padding-right:7.5rem!important}.mast-padding-bottom-xs-7_5{padding-bottom:7.5rem!important}.mast-padding-left-xs-7_5{padding-left:7.5rem!important}.mast-padding-xs-8{padding:8rem!important}.mast-padding-top-xs-8{padding-top:8rem!important}.mast-padding-right-xs-8{padding-right:8rem!important}.mast-padding-bottom-xs-8{padding-bottom:8rem!important}.mast-padding-left-xs-8{padding-left:8rem!important}.mast-padding-xs-8_5{padding:8.5rem!important}.mast-padding-top-xs-8_5{padding-top:8.5rem!important}.mast-padding-right-xs-8_5{padding-right:8.5rem!important}.mast-padding-bottom-xs-8_5{padding-bottom:8.5rem!important}.mast-padding-left-xs-8_5{padding-left:8.5rem!important}.mast-padding-xs-9{padding:9rem!important}.mast-padding-top-xs-9{padding-top:9rem!important}.mast-padding-right-xs-9{padding-right:9rem!important}.mast-padding-bottom-xs-9{padding-bottom:9rem!important}.mast-padding-left-xs-9{padding-left:9rem!important}.mast-padding-xs-9_5{padding:9.5rem!important}.mast-padding-top-xs-9_5{padding-top:9.5rem!important}.mast-padding-right-xs-9_5{padding-right:9.5rem!important}.mast-padding-bottom-xs-9_5{padding-bottom:9.5rem!important}.mast-padding-left-xs-9_5{padding-left:9.5rem!important}.mast-padding-xs-10{padding:10rem!important}.mast-padding-top-xs-10{padding-top:10rem!important}.mast-padding-right-xs-10{padding-right:10rem!important}.mast-padding-bottom-xs-10{padding-bottom:10rem!important}.mast-padding-left-xs-10{padding-left:10rem!important}}@media (min-width:29.6875em){.mast-margin-sm-0{margin:0!important}.mast-margin-top-sm-0{margin-top:0!important}.mast-margin-right-sm-0{margin-right:0!important}.mast-margin-bottom-sm-0{margin-bottom:0!important}.mast-margin-left-sm-0{margin-left:0!important}.mast-margin-sm-0_5{margin:.5rem!important}.mast-margin-top-sm-0_5{margin-top:.5rem!important}.mast-margin-right-sm-0_5{margin-right:.5rem!important}.mast-margin-bottom-sm-0_5{margin-bottom:.5rem!important}.mast-margin-left-sm-0_5{margin-left:.5rem!important}.mast-margin-sm-1{margin:1rem!important}.mast-margin-top-sm-1{margin-top:1rem!important}.mast-margin-right-sm-1{margin-right:1rem!important}.mast-margin-bottom-sm-1{margin-bottom:1rem!important}.mast-margin-left-sm-1{margin-left:1rem!important}.mast-margin-sm-1_5{margin:1.5rem!important}.mast-margin-top-sm-1_5{margin-top:1.5rem!important}.mast-margin-right-sm-1_5{margin-right:1.5rem!important}.mast-margin-bottom-sm-1_5{margin-bottom:1.5rem!important}.mast-margin-left-sm-1_5{margin-left:1.5rem!important}.mast-margin-sm-2{margin:2rem!important}.mast-margin-top-sm-2{margin-top:2rem!important}.mast-margin-right-sm-2{margin-right:2rem!important}.mast-margin-bottom-sm-2{margin-bottom:2rem!important}.mast-margin-left-sm-2{margin-left:2rem!important}.mast-margin-sm-2_5{margin:2.5rem!important}.mast-margin-top-sm-2_5{margin-top:2.5rem!important}.mast-margin-right-sm-2_5{margin-right:2.5rem!important}.mast-margin-bottom-sm-2_5{margin-bottom:2.5rem!important}.mast-margin-left-sm-2_5{margin-left:2.5rem!important}.mast-margin-sm-3{margin:3rem!important}.mast-margin-top-sm-3{margin-top:3rem!important}.mast-margin-right-sm-3{margin-right:3rem!important}.mast-margin-bottom-sm-3{margin-bottom:3rem!important}.mast-margin-left-sm-3{margin-left:3rem!important}.mast-margin-sm-3_5{margin:3.5rem!important}.mast-margin-top-sm-3_5{margin-top:3.5rem!important}.mast-margin-right-sm-3_5{margin-right:3.5rem!important}.mast-margin-bottom-sm-3_5{margin-bottom:3.5rem!important}.mast-margin-left-sm-3_5{margin-left:3.5rem!important}.mast-margin-sm-4{margin:4rem!important}.mast-margin-top-sm-4{margin-top:4rem!important}.mast-margin-right-sm-4{margin-right:4rem!important}.mast-margin-bottom-sm-4{margin-bottom:4rem!important}.mast-margin-left-sm-4{margin-left:4rem!important}.mast-margin-sm-4_5{margin:4.5rem!important}.mast-margin-top-sm-4_5{margin-top:4.5rem!important}.mast-margin-right-sm-4_5{margin-right:4.5rem!important}.mast-margin-bottom-sm-4_5{margin-bottom:4.5rem!important}.mast-margin-left-sm-4_5{margin-left:4.5rem!important}.mast-margin-sm-5{margin:5rem!important}.mast-margin-top-sm-5{margin-top:5rem!important}.mast-margin-right-sm-5{margin-right:5rem!important}.mast-margin-bottom-sm-5{margin-bottom:5rem!important}.mast-margin-left-sm-5{margin-left:5rem!important}.mast-margin-sm-5_5{margin:5.5rem!important}.mast-margin-top-sm-5_5{margin-top:5.5rem!important}.mast-margin-right-sm-5_5{margin-right:5.5rem!important}.mast-margin-bottom-sm-5_5{margin-bottom:5.5rem!important}.mast-margin-left-sm-5_5{margin-left:5.5rem!important}.mast-margin-sm-6{margin:6rem!important}.mast-margin-top-sm-6{margin-top:6rem!important}.mast-margin-right-sm-6{margin-right:6rem!important}.mast-margin-bottom-sm-6{margin-bottom:6rem!important}.mast-margin-left-sm-6{margin-left:6rem!important}.mast-margin-sm-6_5{margin:6.5rem!important}.mast-margin-top-sm-6_5{margin-top:6.5rem!important}.mast-margin-right-sm-6_5{margin-right:6.5rem!important}.mast-margin-bottom-sm-6_5{margin-bottom:6.5rem!important}.mast-margin-left-sm-6_5{margin-left:6.5rem!important}.mast-margin-sm-7{margin:7rem!important}.mast-margin-top-sm-7{margin-top:7rem!important}.mast-margin-right-sm-7{margin-right:7rem!important}.mast-margin-bottom-sm-7{margin-bottom:7rem!important}.mast-margin-left-sm-7{margin-left:7rem!important}.mast-margin-sm-7_5{margin:7.5rem!important}.mast-margin-top-sm-7_5{margin-top:7.5rem!important}.mast-margin-right-sm-7_5{margin-right:7.5rem!important}.mast-margin-bottom-sm-7_5{margin-bottom:7.5rem!important}.mast-margin-left-sm-7_5{margin-left:7.5rem!important}.mast-margin-sm-8{margin:8rem!important}.mast-margin-top-sm-8{margin-top:8rem!important}.mast-margin-right-sm-8{margin-right:8rem!important}.mast-margin-bottom-sm-8{margin-bottom:8rem!important}.mast-margin-left-sm-8{margin-left:8rem!important}.mast-margin-sm-8_5{margin:8.5rem!important}.mast-margin-top-sm-8_5{margin-top:8.5rem!important}.mast-margin-right-sm-8_5{margin-right:8.5rem!important}.mast-margin-bottom-sm-8_5{margin-bottom:8.5rem!important}.mast-margin-left-sm-8_5{margin-left:8.5rem!important}.mast-margin-sm-9{margin:9rem!important}.mast-margin-top-sm-9{margin-top:9rem!important}.mast-margin-right-sm-9{margin-right:9rem!important}.mast-margin-bottom-sm-9{margin-bottom:9rem!important}.mast-margin-left-sm-9{margin-left:9rem!important}.mast-margin-sm-9_5{margin:9.5rem!important}.mast-margin-top-sm-9_5{margin-top:9.5rem!important}.mast-margin-right-sm-9_5{margin-right:9.5rem!important}.mast-margin-bottom-sm-9_5{margin-bottom:9.5rem!important}.mast-margin-left-sm-9_5{margin-left:9.5rem!important}.mast-margin-sm-10{margin:10rem!important}.mast-margin-top-sm-10{margin-top:10rem!important}.mast-margin-right-sm-10{margin-right:10rem!important}.mast-margin-bottom-sm-10{margin-bottom:10rem!important}.mast-margin-left-sm-10{margin-left:10rem!important}.mast-padding-sm-0{padding:0!important}.mast-padding-top-sm-0{padding-top:0!important}.mast-padding-right-sm-0{padding-right:0!important}.mast-padding-bottom-sm-0{padding-bottom:0!important}.mast-padding-left-sm-0{padding-left:0!important}.mast-padding-sm-0_5{padding:.5rem!important}.mast-padding-top-sm-0_5{padding-top:.5rem!important}.mast-padding-right-sm-0_5{padding-right:.5rem!important}.mast-padding-bottom-sm-0_5{padding-bottom:.5rem!important}.mast-padding-left-sm-0_5{padding-left:.5rem!important}.mast-padding-sm-1{padding:1rem!important}.mast-padding-top-sm-1{padding-top:1rem!important}.mast-padding-right-sm-1{padding-right:1rem!important}.mast-padding-bottom-sm-1{padding-bottom:1rem!important}.mast-padding-left-sm-1{padding-left:1rem!important}.mast-padding-sm-1_5{padding:1.5rem!important}.mast-padding-top-sm-1_5{padding-top:1.5rem!important}.mast-padding-right-sm-1_5{padding-right:1.5rem!important}.mast-padding-bottom-sm-1_5{padding-bottom:1.5rem!important}.mast-padding-left-sm-1_5{padding-left:1.5rem!important}.mast-padding-sm-2{padding:2rem!important}.mast-padding-top-sm-2{padding-top:2rem!important}.mast-padding-right-sm-2{padding-right:2rem!important}.mast-padding-bottom-sm-2{padding-bottom:2rem!important}.mast-padding-left-sm-2{padding-left:2rem!important}.mast-padding-sm-2_5{padding:2.5rem!important}.mast-padding-top-sm-2_5{padding-top:2.5rem!important}.mast-padding-right-sm-2_5{padding-right:2.5rem!important}.mast-padding-bottom-sm-2_5{padding-bottom:2.5rem!important}.mast-padding-left-sm-2_5{padding-left:2.5rem!important}.mast-padding-sm-3{padding:3rem!important}.mast-padding-top-sm-3{padding-top:3rem!important}.mast-padding-right-sm-3{padding-right:3rem!important}.mast-padding-bottom-sm-3{padding-bottom:3rem!important}.mast-padding-left-sm-3{padding-left:3rem!important}.mast-padding-sm-3_5{padding:3.5rem!important}.mast-padding-top-sm-3_5{padding-top:3.5rem!important}.mast-padding-right-sm-3_5{padding-right:3.5rem!important}.mast-padding-bottom-sm-3_5{padding-bottom:3.5rem!important}.mast-padding-left-sm-3_5{padding-left:3.5rem!important}.mast-padding-sm-4{padding:4rem!important}.mast-padding-top-sm-4{padding-top:4rem!important}.mast-padding-right-sm-4{padding-right:4rem!important}.mast-padding-bottom-sm-4{padding-bottom:4rem!important}.mast-padding-left-sm-4{padding-left:4rem!important}.mast-padding-sm-4_5{padding:4.5rem!important}.mast-padding-top-sm-4_5{padding-top:4.5rem!important}.mast-padding-right-sm-4_5{padding-right:4.5rem!important}.mast-padding-bottom-sm-4_5{padding-bottom:4.5rem!important}.mast-padding-left-sm-4_5{padding-left:4.5rem!important}.mast-padding-sm-5{padding:5rem!important}.mast-padding-top-sm-5{padding-top:5rem!important}.mast-padding-right-sm-5{padding-right:5rem!important}.mast-padding-bottom-sm-5{padding-bottom:5rem!important}.mast-padding-left-sm-5{padding-left:5rem!important}.mast-padding-sm-5_5{padding:5.5rem!important}.mast-padding-top-sm-5_5{padding-top:5.5rem!important}.mast-padding-right-sm-5_5{padding-right:5.5rem!important}.mast-padding-bottom-sm-5_5{padding-bottom:5.5rem!important}.mast-padding-left-sm-5_5{padding-left:5.5rem!important}.mast-padding-sm-6{padding:6rem!important}.mast-padding-top-sm-6{padding-top:6rem!important}.mast-padding-right-sm-6{padding-right:6rem!important}.mast-padding-bottom-sm-6{padding-bottom:6rem!important}.mast-padding-left-sm-6{padding-left:6rem!important}.mast-padding-sm-6_5{padding:6.5rem!important}.mast-padding-top-sm-6_5{padding-top:6.5rem!important}.mast-padding-right-sm-6_5{padding-right:6.5rem!important}.mast-padding-bottom-sm-6_5{padding-bottom:6.5rem!important}.mast-padding-left-sm-6_5{padding-left:6.5rem!important}.mast-padding-sm-7{padding:7rem!important}.mast-padding-top-sm-7{padding-top:7rem!important}.mast-padding-right-sm-7{padding-right:7rem!important}.mast-padding-bottom-sm-7{padding-bottom:7rem!important}.mast-padding-left-sm-7{padding-left:7rem!important}.mast-padding-sm-7_5{padding:7.5rem!important}.mast-padding-top-sm-7_5{padding-top:7.5rem!important}.mast-padding-right-sm-7_5{padding-right:7.5rem!important}.mast-padding-bottom-sm-7_5{padding-bottom:7.5rem!important}.mast-padding-left-sm-7_5{padding-left:7.5rem!important}.mast-padding-sm-8{padding:8rem!important}.mast-padding-top-sm-8{padding-top:8rem!important}.mast-padding-right-sm-8{padding-right:8rem!important}.mast-padding-bottom-sm-8{padding-bottom:8rem!important}.mast-padding-left-sm-8{padding-left:8rem!important}.mast-padding-sm-8_5{padding:8.5rem!important}.mast-padding-top-sm-8_5{padding-top:8.5rem!important}.mast-padding-right-sm-8_5{padding-right:8.5rem!important}.mast-padding-bottom-sm-8_5{padding-bottom:8.5rem!important}.mast-padding-left-sm-8_5{padding-left:8.5rem!important}.mast-padding-sm-9{padding:9rem!important}.mast-padding-top-sm-9{padding-top:9rem!important}.mast-padding-right-sm-9{padding-right:9rem!important}.mast-padding-bottom-sm-9{padding-bottom:9rem!important}.mast-padding-left-sm-9{padding-left:9rem!important}.mast-padding-sm-9_5{padding:9.5rem!important}.mast-padding-top-sm-9_5{padding-top:9.5rem!important}.mast-padding-right-sm-9_5{padding-right:9.5rem!important}.mast-padding-bottom-sm-9_5{padding-bottom:9.5rem!important}.mast-padding-left-sm-9_5{padding-left:9.5rem!important}.mast-padding-sm-10{padding:10rem!important}.mast-padding-top-sm-10{padding-top:10rem!important}.mast-padding-right-sm-10{padding-right:10rem!important}.mast-padding-bottom-sm-10{padding-bottom:10rem!important}.mast-padding-left-sm-10{padding-left:10rem!important}}@media (min-width:48.6875em){.mast-margin-md-0{margin:0!important}.mast-margin-top-md-0{margin-top:0!important}.mast-margin-right-md-0{margin-right:0!important}.mast-margin-bottom-md-0{margin-bottom:0!important}.mast-margin-left-md-0{margin-left:0!important}.mast-margin-md-0_5{margin:.5rem!important}.mast-margin-top-md-0_5{margin-top:.5rem!important}.mast-margin-right-md-0_5{margin-right:.5rem!important}.mast-margin-bottom-md-0_5{margin-bottom:.5rem!important}.mast-margin-left-md-0_5{margin-left:.5rem!important}.mast-margin-md-1{margin:1rem!important}.mast-margin-top-md-1{margin-top:1rem!important}.mast-margin-right-md-1{margin-right:1rem!important}.mast-margin-bottom-md-1{margin-bottom:1rem!important}.mast-margin-left-md-1{margin-left:1rem!important}.mast-margin-md-1_5{margin:1.5rem!important}.mast-margin-top-md-1_5{margin-top:1.5rem!important}.mast-margin-right-md-1_5{margin-right:1.5rem!important}.mast-margin-bottom-md-1_5{margin-bottom:1.5rem!important}.mast-margin-left-md-1_5{margin-left:1.5rem!important}.mast-margin-md-2{margin:2rem!important}.mast-margin-top-md-2{margin-top:2rem!important}.mast-margin-right-md-2{margin-right:2rem!important}.mast-margin-bottom-md-2{margin-bottom:2rem!important}.mast-margin-left-md-2{margin-left:2rem!important}.mast-margin-md-2_5{margin:2.5rem!important}.mast-margin-top-md-2_5{margin-top:2.5rem!important}.mast-margin-right-md-2_5{margin-right:2.5rem!important}.mast-margin-bottom-md-2_5{margin-bottom:2.5rem!important}.mast-margin-left-md-2_5{margin-left:2.5rem!important}.mast-margin-md-3{margin:3rem!important}.mast-margin-top-md-3{margin-top:3rem!important}.mast-margin-right-md-3{margin-right:3rem!important}.mast-margin-bottom-md-3{margin-bottom:3rem!important}.mast-margin-left-md-3{margin-left:3rem!important}.mast-margin-md-3_5{margin:3.5rem!important}.mast-margin-top-md-3_5{margin-top:3.5rem!important}.mast-margin-right-md-3_5{margin-right:3.5rem!important}.mast-margin-bottom-md-3_5{margin-bottom:3.5rem!important}.mast-margin-left-md-3_5{margin-left:3.5rem!important}.mast-margin-md-4{margin:4rem!important}.mast-margin-top-md-4{margin-top:4rem!important}.mast-margin-right-md-4{margin-right:4rem!important}.mast-margin-bottom-md-4{margin-bottom:4rem!important}.mast-margin-left-md-4{margin-left:4rem!important}.mast-margin-md-4_5{margin:4.5rem!important}.mast-margin-top-md-4_5{margin-top:4.5rem!important}.mast-margin-right-md-4_5{margin-right:4.5rem!important}.mast-margin-bottom-md-4_5{margin-bottom:4.5rem!important}.mast-margin-left-md-4_5{margin-left:4.5rem!important}.mast-margin-md-5{margin:5rem!important}.mast-margin-top-md-5{margin-top:5rem!important}.mast-margin-right-md-5{margin-right:5rem!important}.mast-margin-bottom-md-5{margin-bottom:5rem!important}.mast-margin-left-md-5{margin-left:5rem!important}.mast-margin-md-5_5{margin:5.5rem!important}.mast-margin-top-md-5_5{margin-top:5.5rem!important}.mast-margin-right-md-5_5{margin-right:5.5rem!important}.mast-margin-bottom-md-5_5{margin-bottom:5.5rem!important}.mast-margin-left-md-5_5{margin-left:5.5rem!important}.mast-margin-md-6{margin:6rem!important}.mast-margin-top-md-6{margin-top:6rem!important}.mast-margin-right-md-6{margin-right:6rem!important}.mast-margin-bottom-md-6{margin-bottom:6rem!important}.mast-margin-left-md-6{margin-left:6rem!important}.mast-margin-md-6_5{margin:6.5rem!important}.mast-margin-top-md-6_5{margin-top:6.5rem!important}.mast-margin-right-md-6_5{margin-right:6.5rem!important}.mast-margin-bottom-md-6_5{margin-bottom:6.5rem!important}.mast-margin-left-md-6_5{margin-left:6.5rem!important}.mast-margin-md-7{margin:7rem!important}.mast-margin-top-md-7{margin-top:7rem!important}.mast-margin-right-md-7{margin-right:7rem!important}.mast-margin-bottom-md-7{margin-bottom:7rem!important}.mast-margin-left-md-7{margin-left:7rem!important}.mast-margin-md-7_5{margin:7.5rem!important}.mast-margin-top-md-7_5{margin-top:7.5rem!important}.mast-margin-right-md-7_5{margin-right:7.5rem!important}.mast-margin-bottom-md-7_5{margin-bottom:7.5rem!important}.mast-margin-left-md-7_5{margin-left:7.5rem!important}.mast-margin-md-8{margin:8rem!important}.mast-margin-top-md-8{margin-top:8rem!important}.mast-margin-right-md-8{margin-right:8rem!important}.mast-margin-bottom-md-8{margin-bottom:8rem!important}.mast-margin-left-md-8{margin-left:8rem!important}.mast-margin-md-8_5{margin:8.5rem!important}.mast-margin-top-md-8_5{margin-top:8.5rem!important}.mast-margin-right-md-8_5{margin-right:8.5rem!important}.mast-margin-bottom-md-8_5{margin-bottom:8.5rem!important}.mast-margin-left-md-8_5{margin-left:8.5rem!important}.mast-margin-md-9{margin:9rem!important}.mast-margin-top-md-9{margin-top:9rem!important}.mast-margin-right-md-9{margin-right:9rem!important}.mast-margin-bottom-md-9{margin-bottom:9rem!important}.mast-margin-left-md-9{margin-left:9rem!important}.mast-margin-md-9_5{margin:9.5rem!important}.mast-margin-top-md-9_5{margin-top:9.5rem!important}.mast-margin-right-md-9_5{margin-right:9.5rem!important}.mast-margin-bottom-md-9_5{margin-bottom:9.5rem!important}.mast-margin-left-md-9_5{margin-left:9.5rem!important}.mast-margin-md-10{margin:10rem!important}.mast-margin-top-md-10{margin-top:10rem!important}.mast-margin-right-md-10{margin-right:10rem!important}.mast-margin-bottom-md-10{margin-bottom:10rem!important}.mast-margin-left-md-10{margin-left:10rem!important}.mast-padding-md-0{padding:0!important}.mast-padding-top-md-0{padding-top:0!important}.mast-padding-right-md-0{padding-right:0!important}.mast-padding-bottom-md-0{padding-bottom:0!important}.mast-padding-left-md-0{padding-left:0!important}.mast-padding-md-0_5{padding:.5rem!important}.mast-padding-top-md-0_5{padding-top:.5rem!important}.mast-padding-right-md-0_5{padding-right:.5rem!important}.mast-padding-bottom-md-0_5{padding-bottom:.5rem!important}.mast-padding-left-md-0_5{padding-left:.5rem!important}.mast-padding-md-1{padding:1rem!important}.mast-padding-top-md-1{padding-top:1rem!important}.mast-padding-right-md-1{padding-right:1rem!important}.mast-padding-bottom-md-1{padding-bottom:1rem!important}.mast-padding-left-md-1{padding-left:1rem!important}.mast-padding-md-1_5{padding:1.5rem!important}.mast-padding-top-md-1_5{padding-top:1.5rem!important}.mast-padding-right-md-1_5{padding-right:1.5rem!important}.mast-padding-bottom-md-1_5{padding-bottom:1.5rem!important}.mast-padding-left-md-1_5{padding-left:1.5rem!important}.mast-padding-md-2{padding:2rem!important}.mast-padding-top-md-2{padding-top:2rem!important}.mast-padding-right-md-2{padding-right:2rem!important}.mast-padding-bottom-md-2{padding-bottom:2rem!important}.mast-padding-left-md-2{padding-left:2rem!important}.mast-padding-md-2_5{padding:2.5rem!important}.mast-padding-top-md-2_5{padding-top:2.5rem!important}.mast-padding-right-md-2_5{padding-right:2.5rem!important}.mast-padding-bottom-md-2_5{padding-bottom:2.5rem!important}.mast-padding-left-md-2_5{padding-left:2.5rem!important}.mast-padding-md-3{padding:3rem!important}.mast-padding-top-md-3{padding-top:3rem!important}.mast-padding-right-md-3{padding-right:3rem!important}.mast-padding-bottom-md-3{padding-bottom:3rem!important}.mast-padding-left-md-3{padding-left:3rem!important}.mast-padding-md-3_5{padding:3.5rem!important}.mast-padding-top-md-3_5{padding-top:3.5rem!important}.mast-padding-right-md-3_5{padding-right:3.5rem!important}.mast-padding-bottom-md-3_5{padding-bottom:3.5rem!important}.mast-padding-left-md-3_5{padding-left:3.5rem!important}.mast-padding-md-4{padding:4rem!important}.mast-padding-top-md-4{padding-top:4rem!important}.mast-padding-right-md-4{padding-right:4rem!important}.mast-padding-bottom-md-4{padding-bottom:4rem!important}.mast-padding-left-md-4{padding-left:4rem!important}.mast-padding-md-4_5{padding:4.5rem!important}.mast-padding-top-md-4_5{padding-top:4.5rem!important}.mast-padding-right-md-4_5{padding-right:4.5rem!important}.mast-padding-bottom-md-4_5{padding-bottom:4.5rem!important}.mast-padding-left-md-4_5{padding-left:4.5rem!important}.mast-padding-md-5{padding:5rem!important}.mast-padding-top-md-5{padding-top:5rem!important}.mast-padding-right-md-5{padding-right:5rem!important}.mast-padding-bottom-md-5{padding-bottom:5rem!important}.mast-padding-left-md-5{padding-left:5rem!important}.mast-padding-md-5_5{padding:5.5rem!important}.mast-padding-top-md-5_5{padding-top:5.5rem!important}.mast-padding-right-md-5_5{padding-right:5.5rem!important}.mast-padding-bottom-md-5_5{padding-bottom:5.5rem!important}.mast-padding-left-md-5_5{padding-left:5.5rem!important}.mast-padding-md-6{padding:6rem!important}.mast-padding-top-md-6{padding-top:6rem!important}.mast-padding-right-md-6{padding-right:6rem!important}.mast-padding-bottom-md-6{padding-bottom:6rem!important}.mast-padding-left-md-6{padding-left:6rem!important}.mast-padding-md-6_5{padding:6.5rem!important}.mast-padding-top-md-6_5{padding-top:6.5rem!important}.mast-padding-right-md-6_5{padding-right:6.5rem!important}.mast-padding-bottom-md-6_5{padding-bottom:6.5rem!important}.mast-padding-left-md-6_5{padding-left:6.5rem!important}.mast-padding-md-7{padding:7rem!important}.mast-padding-top-md-7{padding-top:7rem!important}.mast-padding-right-md-7{padding-right:7rem!important}.mast-padding-bottom-md-7{padding-bottom:7rem!important}.mast-padding-left-md-7{padding-left:7rem!important}.mast-padding-md-7_5{padding:7.5rem!important}.mast-padding-top-md-7_5{padding-top:7.5rem!important}.mast-padding-right-md-7_5{padding-right:7.5rem!important}.mast-padding-bottom-md-7_5{padding-bottom:7.5rem!important}.mast-padding-left-md-7_5{padding-left:7.5rem!important}.mast-padding-md-8{padding:8rem!important}.mast-padding-top-md-8{padding-top:8rem!important}.mast-padding-right-md-8{padding-right:8rem!important}.mast-padding-bottom-md-8{padding-bottom:8rem!important}.mast-padding-left-md-8{padding-left:8rem!important}.mast-padding-md-8_5{padding:8.5rem!important}.mast-padding-top-md-8_5{padding-top:8.5rem!important}.mast-padding-right-md-8_5{padding-right:8.5rem!important}.mast-padding-bottom-md-8_5{padding-bottom:8.5rem!important}.mast-padding-left-md-8_5{padding-left:8.5rem!important}.mast-padding-md-9{padding:9rem!important}.mast-padding-top-md-9{padding-top:9rem!important}.mast-padding-right-md-9{padding-right:9rem!important}.mast-padding-bottom-md-9{padding-bottom:9rem!important}.mast-padding-left-md-9{padding-left:9rem!important}.mast-padding-md-9_5{padding:9.5rem!important}.mast-padding-top-md-9_5{padding-top:9.5rem!important}.mast-padding-right-md-9_5{padding-right:9.5rem!important}.mast-padding-bottom-md-9_5{padding-bottom:9.5rem!important}.mast-padding-left-md-9_5{padding-left:9.5rem!important}.mast-padding-md-10{padding:10rem!important}.mast-padding-top-md-10{padding-top:10rem!important}.mast-padding-right-md-10{padding-right:10rem!important}.mast-padding-bottom-md-10{padding-bottom:10rem!important}.mast-padding-left-md-10{padding-left:10rem!important}}@media (min-width:72.4375em){.mast-margin-lg-0{margin:0!important}.mast-margin-top-lg-0{margin-top:0!important}.mast-margin-right-lg-0{margin-right:0!important}.mast-margin-bottom-lg-0{margin-bottom:0!important}.mast-margin-left-lg-0{margin-left:0!important}.mast-margin-lg-0_5{margin:.5rem!important}.mast-margin-top-lg-0_5{margin-top:.5rem!important}.mast-margin-right-lg-0_5{margin-right:.5rem!important}.mast-margin-bottom-lg-0_5{margin-bottom:.5rem!important}.mast-margin-left-lg-0_5{margin-left:.5rem!important}.mast-margin-lg-1{margin:1rem!important}.mast-margin-top-lg-1{margin-top:1rem!important}.mast-margin-right-lg-1{margin-right:1rem!important}.mast-margin-bottom-lg-1{margin-bottom:1rem!important}.mast-margin-left-lg-1{margin-left:1rem!important}.mast-margin-lg-1_5{margin:1.5rem!important}.mast-margin-top-lg-1_5{margin-top:1.5rem!important}.mast-margin-right-lg-1_5{margin-right:1.5rem!important}.mast-margin-bottom-lg-1_5{margin-bottom:1.5rem!important}.mast-margin-left-lg-1_5{margin-left:1.5rem!important}.mast-margin-lg-2{margin:2rem!important}.mast-margin-top-lg-2{margin-top:2rem!important}.mast-margin-right-lg-2{margin-right:2rem!important}.mast-margin-bottom-lg-2{margin-bottom:2rem!important}.mast-margin-left-lg-2{margin-left:2rem!important}.mast-margin-lg-2_5{margin:2.5rem!important}.mast-margin-top-lg-2_5{margin-top:2.5rem!important}.mast-margin-right-lg-2_5{margin-right:2.5rem!important}.mast-margin-bottom-lg-2_5{margin-bottom:2.5rem!important}.mast-margin-left-lg-2_5{margin-left:2.5rem!important}.mast-margin-lg-3{margin:3rem!important}.mast-margin-top-lg-3{margin-top:3rem!important}.mast-margin-right-lg-3{margin-right:3rem!important}.mast-margin-bottom-lg-3{margin-bottom:3rem!important}.mast-margin-left-lg-3{margin-left:3rem!important}.mast-margin-lg-3_5{margin:3.5rem!important}.mast-margin-top-lg-3_5{margin-top:3.5rem!important}.mast-margin-right-lg-3_5{margin-right:3.5rem!important}.mast-margin-bottom-lg-3_5{margin-bottom:3.5rem!important}.mast-margin-left-lg-3_5{margin-left:3.5rem!important}.mast-margin-lg-4{margin:4rem!important}.mast-margin-top-lg-4{margin-top:4rem!important}.mast-margin-right-lg-4{margin-right:4rem!important}.mast-margin-bottom-lg-4{margin-bottom:4rem!important}.mast-margin-left-lg-4{margin-left:4rem!important}.mast-margin-lg-4_5{margin:4.5rem!important}.mast-margin-top-lg-4_5{margin-top:4.5rem!important}.mast-margin-right-lg-4_5{margin-right:4.5rem!important}.mast-margin-bottom-lg-4_5{margin-bottom:4.5rem!important}.mast-margin-left-lg-4_5{margin-left:4.5rem!important}.mast-margin-lg-5{margin:5rem!important}.mast-margin-top-lg-5{margin-top:5rem!important}.mast-margin-right-lg-5{margin-right:5rem!important}.mast-margin-bottom-lg-5{margin-bottom:5rem!important}.mast-margin-left-lg-5{margin-left:5rem!important}.mast-margin-lg-5_5{margin:5.5rem!important}.mast-margin-top-lg-5_5{margin-top:5.5rem!important}.mast-margin-right-lg-5_5{margin-right:5.5rem!important}.mast-margin-bottom-lg-5_5{margin-bottom:5.5rem!important}.mast-margin-left-lg-5_5{margin-left:5.5rem!important}.mast-margin-lg-6{margin:6rem!important}.mast-margin-top-lg-6{margin-top:6rem!important}.mast-margin-right-lg-6{margin-right:6rem!important}.mast-margin-bottom-lg-6{margin-bottom:6rem!important}.mast-margin-left-lg-6{margin-left:6rem!important}.mast-margin-lg-6_5{margin:6.5rem!important}.mast-margin-top-lg-6_5{margin-top:6.5rem!important}.mast-margin-right-lg-6_5{margin-right:6.5rem!important}.mast-margin-bottom-lg-6_5{margin-bottom:6.5rem!important}.mast-margin-left-lg-6_5{margin-left:6.5rem!important}.mast-margin-lg-7{margin:7rem!important}.mast-margin-top-lg-7{margin-top:7rem!important}.mast-margin-right-lg-7{margin-right:7rem!important}.mast-margin-bottom-lg-7{margin-bottom:7rem!important}.mast-margin-left-lg-7{margin-left:7rem!important}.mast-margin-lg-7_5{margin:7.5rem!important}.mast-margin-top-lg-7_5{margin-top:7.5rem!important}.mast-margin-right-lg-7_5{margin-right:7.5rem!important}.mast-margin-bottom-lg-7_5{margin-bottom:7.5rem!important}.mast-margin-left-lg-7_5{margin-left:7.5rem!important}.mast-margin-lg-8{margin:8rem!important}.mast-margin-top-lg-8{margin-top:8rem!important}.mast-margin-right-lg-8{margin-right:8rem!important}.mast-margin-bottom-lg-8{margin-bottom:8rem!important}.mast-margin-left-lg-8{margin-left:8rem!important}.mast-margin-lg-8_5{margin:8.5rem!important}.mast-margin-top-lg-8_5{margin-top:8.5rem!important}.mast-margin-right-lg-8_5{margin-right:8.5rem!important}.mast-margin-bottom-lg-8_5{margin-bottom:8.5rem!important}.mast-margin-left-lg-8_5{margin-left:8.5rem!important}.mast-margin-lg-9{margin:9rem!important}.mast-margin-top-lg-9{margin-top:9rem!important}.mast-margin-right-lg-9{margin-right:9rem!important}.mast-margin-bottom-lg-9{margin-bottom:9rem!important}.mast-margin-left-lg-9{margin-left:9rem!important}.mast-margin-lg-9_5{margin:9.5rem!important}.mast-margin-top-lg-9_5{margin-top:9.5rem!important}.mast-margin-right-lg-9_5{margin-right:9.5rem!important}.mast-margin-bottom-lg-9_5{margin-bottom:9.5rem!important}.mast-margin-left-lg-9_5{margin-left:9.5rem!important}.mast-margin-lg-10{margin:10rem!important}.mast-margin-top-lg-10{margin-top:10rem!important}.mast-margin-right-lg-10{margin-right:10rem!important}.mast-margin-bottom-lg-10{margin-bottom:10rem!important}.mast-margin-left-lg-10{margin-left:10rem!important}.mast-padding-lg-0{padding:0!important}.mast-padding-top-lg-0{padding-top:0!important}.mast-padding-right-lg-0{padding-right:0!important}.mast-padding-bottom-lg-0{padding-bottom:0!important}.mast-padding-left-lg-0{padding-left:0!important}.mast-padding-lg-0_5{padding:.5rem!important}.mast-padding-top-lg-0_5{padding-top:.5rem!important}.mast-padding-right-lg-0_5{padding-right:.5rem!important}.mast-padding-bottom-lg-0_5{padding-bottom:.5rem!important}.mast-padding-left-lg-0_5{padding-left:.5rem!important}.mast-padding-lg-1{padding:1rem!important}.mast-padding-top-lg-1{padding-top:1rem!important}.mast-padding-right-lg-1{padding-right:1rem!important}.mast-padding-bottom-lg-1{padding-bottom:1rem!important}.mast-padding-left-lg-1{padding-left:1rem!important}.mast-padding-lg-1_5{padding:1.5rem!important}.mast-padding-top-lg-1_5{padding-top:1.5rem!important}.mast-padding-right-lg-1_5{padding-right:1.5rem!important}.mast-padding-bottom-lg-1_5{padding-bottom:1.5rem!important}.mast-padding-left-lg-1_5{padding-left:1.5rem!important}.mast-padding-lg-2{padding:2rem!important}.mast-padding-top-lg-2{padding-top:2rem!important}.mast-padding-right-lg-2{padding-right:2rem!important}.mast-padding-bottom-lg-2{padding-bottom:2rem!important}.mast-padding-left-lg-2{padding-left:2rem!important}.mast-padding-lg-2_5{padding:2.5rem!important}.mast-padding-top-lg-2_5{padding-top:2.5rem!important}.mast-padding-right-lg-2_5{padding-right:2.5rem!important}.mast-padding-bottom-lg-2_5{padding-bottom:2.5rem!important}.mast-padding-left-lg-2_5{padding-left:2.5rem!important}.mast-padding-lg-3{padding:3rem!important}.mast-padding-top-lg-3{padding-top:3rem!important}.mast-padding-right-lg-3{padding-right:3rem!important}.mast-padding-bottom-lg-3{padding-bottom:3rem!important}.mast-padding-left-lg-3{padding-left:3rem!important}.mast-padding-lg-3_5{padding:3.5rem!important}.mast-padding-top-lg-3_5{padding-top:3.5rem!important}.mast-padding-right-lg-3_5{padding-right:3.5rem!important}.mast-padding-bottom-lg-3_5{padding-bottom:3.5rem!important}.mast-padding-left-lg-3_5{padding-left:3.5rem!important}.mast-padding-lg-4{padding:4rem!important}.mast-padding-top-lg-4{padding-top:4rem!important}.mast-padding-right-lg-4{padding-right:4rem!important}.mast-padding-bottom-lg-4{padding-bottom:4rem!important}.mast-padding-left-lg-4{padding-left:4rem!important}.mast-padding-lg-4_5{padding:4.5rem!important}.mast-padding-top-lg-4_5{padding-top:4.5rem!important}.mast-padding-right-lg-4_5{padding-right:4.5rem!important}.mast-padding-bottom-lg-4_5{padding-bottom:4.5rem!important}.mast-padding-left-lg-4_5{padding-left:4.5rem!important}.mast-padding-lg-5{padding:5rem!important}.mast-padding-top-lg-5{padding-top:5rem!important}.mast-padding-right-lg-5{padding-right:5rem!important}.mast-padding-bottom-lg-5{padding-bottom:5rem!important}.mast-padding-left-lg-5{padding-left:5rem!important}.mast-padding-lg-5_5{padding:5.5rem!important}.mast-padding-top-lg-5_5{padding-top:5.5rem!important}.mast-padding-right-lg-5_5{padding-right:5.5rem!important}.mast-padding-bottom-lg-5_5{padding-bottom:5.5rem!important}.mast-padding-left-lg-5_5{padding-left:5.5rem!important}.mast-padding-lg-6{padding:6rem!important}.mast-padding-top-lg-6{padding-top:6rem!important}.mast-padding-right-lg-6{padding-right:6rem!important}.mast-padding-bottom-lg-6{padding-bottom:6rem!important}.mast-padding-left-lg-6{padding-left:6rem!important}.mast-padding-lg-6_5{padding:6.5rem!important}.mast-padding-top-lg-6_5{padding-top:6.5rem!important}.mast-padding-right-lg-6_5{padding-right:6.5rem!important}.mast-padding-bottom-lg-6_5{padding-bottom:6.5rem!important}.mast-padding-left-lg-6_5{padding-left:6.5rem!important}.mast-padding-lg-7{padding:7rem!important}.mast-padding-top-lg-7{padding-top:7rem!important}.mast-padding-right-lg-7{padding-right:7rem!important}.mast-padding-bottom-lg-7{padding-bottom:7rem!important}.mast-padding-left-lg-7{padding-left:7rem!important}.mast-padding-lg-7_5{padding:7.5rem!important}.mast-padding-top-lg-7_5{padding-top:7.5rem!important}.mast-padding-right-lg-7_5{padding-right:7.5rem!important}.mast-padding-bottom-lg-7_5{padding-bottom:7.5rem!important}.mast-padding-left-lg-7_5{padding-left:7.5rem!important}.mast-padding-lg-8{padding:8rem!important}.mast-padding-top-lg-8{padding-top:8rem!important}.mast-padding-right-lg-8{padding-right:8rem!important}.mast-padding-bottom-lg-8{padding-bottom:8rem!important}.mast-padding-left-lg-8{padding-left:8rem!important}.mast-padding-lg-8_5{padding:8.5rem!important}.mast-padding-top-lg-8_5{padding-top:8.5rem!important}.mast-padding-right-lg-8_5{padding-right:8.5rem!important}.mast-padding-bottom-lg-8_5{padding-bottom:8.5rem!important}.mast-padding-left-lg-8_5{padding-left:8.5rem!important}.mast-padding-lg-9{padding:9rem!important}.mast-padding-top-lg-9{padding-top:9rem!important}.mast-padding-right-lg-9{padding-right:9rem!important}.mast-padding-bottom-lg-9{padding-bottom:9rem!important}.mast-padding-left-lg-9{padding-left:9rem!important}.mast-padding-lg-9_5{padding:9.5rem!important}.mast-padding-top-lg-9_5{padding-top:9.5rem!important}.mast-padding-right-lg-9_5{padding-right:9.5rem!important}.mast-padding-bottom-lg-9_5{padding-bottom:9.5rem!important}.mast-padding-left-lg-9_5{padding-left:9.5rem!important}.mast-padding-lg-10{padding:10rem!important}.mast-padding-top-lg-10{padding-top:10rem!important}.mast-padding-right-lg-10{padding-right:10rem!important}.mast-padding-bottom-lg-10{padding-bottom:10rem!important}.mast-padding-left-lg-10{padding-left:10rem!important}}@media (min-width:96.1875em){.mast-margin-xl-0{margin:0!important}.mast-margin-top-xl-0{margin-top:0!important}.mast-margin-right-xl-0{margin-right:0!important}.mast-margin-bottom-xl-0{margin-bottom:0!important}.mast-margin-left-xl-0{margin-left:0!important}.mast-margin-xl-0_5{margin:.5rem!important}.mast-margin-top-xl-0_5{margin-top:.5rem!important}.mast-margin-right-xl-0_5{margin-right:.5rem!important}.mast-margin-bottom-xl-0_5{margin-bottom:.5rem!important}.mast-margin-left-xl-0_5{margin-left:.5rem!important}.mast-margin-xl-1{margin:1rem!important}.mast-margin-top-xl-1{margin-top:1rem!important}.mast-margin-right-xl-1{margin-right:1rem!important}.mast-margin-bottom-xl-1{margin-bottom:1rem!important}.mast-margin-left-xl-1{margin-left:1rem!important}.mast-margin-xl-1_5{margin:1.5rem!important}.mast-margin-top-xl-1_5{margin-top:1.5rem!important}.mast-margin-right-xl-1_5{margin-right:1.5rem!important}.mast-margin-bottom-xl-1_5{margin-bottom:1.5rem!important}.mast-margin-left-xl-1_5{margin-left:1.5rem!important}.mast-margin-xl-2{margin:2rem!important}.mast-margin-top-xl-2{margin-top:2rem!important}.mast-margin-right-xl-2{margin-right:2rem!important}.mast-margin-bottom-xl-2{margin-bottom:2rem!important}.mast-margin-left-xl-2{margin-left:2rem!important}.mast-margin-xl-2_5{margin:2.5rem!important}.mast-margin-top-xl-2_5{margin-top:2.5rem!important}.mast-margin-right-xl-2_5{margin-right:2.5rem!important}.mast-margin-bottom-xl-2_5{margin-bottom:2.5rem!important}.mast-margin-left-xl-2_5{margin-left:2.5rem!important}.mast-margin-xl-3{margin:3rem!important}.mast-margin-top-xl-3{margin-top:3rem!important}.mast-margin-right-xl-3{margin-right:3rem!important}.mast-margin-bottom-xl-3{margin-bottom:3rem!important}.mast-margin-left-xl-3{margin-left:3rem!important}.mast-margin-xl-3_5{margin:3.5rem!important}.mast-margin-top-xl-3_5{margin-top:3.5rem!important}.mast-margin-right-xl-3_5{margin-right:3.5rem!important}.mast-margin-bottom-xl-3_5{margin-bottom:3.5rem!important}.mast-margin-left-xl-3_5{margin-left:3.5rem!important}.mast-margin-xl-4{margin:4rem!important}.mast-margin-top-xl-4{margin-top:4rem!important}.mast-margin-right-xl-4{margin-right:4rem!important}.mast-margin-bottom-xl-4{margin-bottom:4rem!important}.mast-margin-left-xl-4{margin-left:4rem!important}.mast-margin-xl-4_5{margin:4.5rem!important}.mast-margin-top-xl-4_5{margin-top:4.5rem!important}.mast-margin-right-xl-4_5{margin-right:4.5rem!important}.mast-margin-bottom-xl-4_5{margin-bottom:4.5rem!important}.mast-margin-left-xl-4_5{margin-left:4.5rem!important}.mast-margin-xl-5{margin:5rem!important}.mast-margin-top-xl-5{margin-top:5rem!important}.mast-margin-right-xl-5{margin-right:5rem!important}.mast-margin-bottom-xl-5{margin-bottom:5rem!important}.mast-margin-left-xl-5{margin-left:5rem!important}.mast-margin-xl-5_5{margin:5.5rem!important}.mast-margin-top-xl-5_5{margin-top:5.5rem!important}.mast-margin-right-xl-5_5{margin-right:5.5rem!important}.mast-margin-bottom-xl-5_5{margin-bottom:5.5rem!important}.mast-margin-left-xl-5_5{margin-left:5.5rem!important}.mast-margin-xl-6{margin:6rem!important}.mast-margin-top-xl-6{margin-top:6rem!important}.mast-margin-right-xl-6{margin-right:6rem!important}.mast-margin-bottom-xl-6{margin-bottom:6rem!important}.mast-margin-left-xl-6{margin-left:6rem!important}.mast-margin-xl-6_5{margin:6.5rem!important}.mast-margin-top-xl-6_5{margin-top:6.5rem!important}.mast-margin-right-xl-6_5{margin-right:6.5rem!important}.mast-margin-bottom-xl-6_5{margin-bottom:6.5rem!important}.mast-margin-left-xl-6_5{margin-left:6.5rem!important}.mast-margin-xl-7{margin:7rem!important}.mast-margin-top-xl-7{margin-top:7rem!important}.mast-margin-right-xl-7{margin-right:7rem!important}.mast-margin-bottom-xl-7{margin-bottom:7rem!important}.mast-margin-left-xl-7{margin-left:7rem!important}.mast-margin-xl-7_5{margin:7.5rem!important}.mast-margin-top-xl-7_5{margin-top:7.5rem!important}.mast-margin-right-xl-7_5{margin-right:7.5rem!important}.mast-margin-bottom-xl-7_5{margin-bottom:7.5rem!important}.mast-margin-left-xl-7_5{margin-left:7.5rem!important}.mast-margin-xl-8{margin:8rem!important}.mast-margin-top-xl-8{margin-top:8rem!important}.mast-margin-right-xl-8{margin-right:8rem!important}.mast-margin-bottom-xl-8{margin-bottom:8rem!important}.mast-margin-left-xl-8{margin-left:8rem!important}.mast-margin-xl-8_5{margin:8.5rem!important}.mast-margin-top-xl-8_5{margin-top:8.5rem!important}.mast-margin-right-xl-8_5{margin-right:8.5rem!important}.mast-margin-bottom-xl-8_5{margin-bottom:8.5rem!important}.mast-margin-left-xl-8_5{margin-left:8.5rem!important}.mast-margin-xl-9{margin:9rem!important}.mast-margin-top-xl-9{margin-top:9rem!important}.mast-margin-right-xl-9{margin-right:9rem!important}.mast-margin-bottom-xl-9{margin-bottom:9rem!important}.mast-margin-left-xl-9{margin-left:9rem!important}.mast-margin-xl-9_5{margin:9.5rem!important}.mast-margin-top-xl-9_5{margin-top:9.5rem!important}.mast-margin-right-xl-9_5{margin-right:9.5rem!important}.mast-margin-bottom-xl-9_5{margin-bottom:9.5rem!important}.mast-margin-left-xl-9_5{margin-left:9.5rem!important}.mast-margin-xl-10{margin:10rem!important}.mast-margin-top-xl-10{margin-top:10rem!important}.mast-margin-right-xl-10{margin-right:10rem!important}.mast-margin-bottom-xl-10{margin-bottom:10rem!important}.mast-margin-left-xl-10{margin-left:10rem!important}.mast-padding-xl-0{padding:0!important}.mast-padding-top-xl-0{padding-top:0!important}.mast-padding-right-xl-0{padding-right:0!important}.mast-padding-bottom-xl-0{padding-bottom:0!important}.mast-padding-left-xl-0{padding-left:0!important}.mast-padding-xl-0_5{padding:.5rem!important}.mast-padding-top-xl-0_5{padding-top:.5rem!important}.mast-padding-right-xl-0_5{padding-right:.5rem!important}.mast-padding-bottom-xl-0_5{padding-bottom:.5rem!important}.mast-padding-left-xl-0_5{padding-left:.5rem!important}.mast-padding-xl-1{padding:1rem!important}.mast-padding-top-xl-1{padding-top:1rem!important}.mast-padding-right-xl-1{padding-right:1rem!important}.mast-padding-bottom-xl-1{padding-bottom:1rem!important}.mast-padding-left-xl-1{padding-left:1rem!important}.mast-padding-xl-1_5{padding:1.5rem!important}.mast-padding-top-xl-1_5{padding-top:1.5rem!important}.mast-padding-right-xl-1_5{padding-right:1.5rem!important}.mast-padding-bottom-xl-1_5{padding-bottom:1.5rem!important}.mast-padding-left-xl-1_5{padding-left:1.5rem!important}.mast-padding-xl-2{padding:2rem!important}.mast-padding-top-xl-2{padding-top:2rem!important}.mast-padding-right-xl-2{padding-right:2rem!important}.mast-padding-bottom-xl-2{padding-bottom:2rem!important}.mast-padding-left-xl-2{padding-left:2rem!important}.mast-padding-xl-2_5{padding:2.5rem!important}.mast-padding-top-xl-2_5{padding-top:2.5rem!important}.mast-padding-right-xl-2_5{padding-right:2.5rem!important}.mast-padding-bottom-xl-2_5{padding-bottom:2.5rem!important}.mast-padding-left-xl-2_5{padding-left:2.5rem!important}.mast-padding-xl-3{padding:3rem!important}.mast-padding-top-xl-3{padding-top:3rem!important}.mast-padding-right-xl-3{padding-right:3rem!important}.mast-padding-bottom-xl-3{padding-bottom:3rem!important}.mast-padding-left-xl-3{padding-left:3rem!important}.mast-padding-xl-3_5{padding:3.5rem!important}.mast-padding-top-xl-3_5{padding-top:3.5rem!important}.mast-padding-right-xl-3_5{padding-right:3.5rem!important}.mast-padding-bottom-xl-3_5{padding-bottom:3.5rem!important}.mast-padding-left-xl-3_5{padding-left:3.5rem!important}.mast-padding-xl-4{padding:4rem!important}.mast-padding-top-xl-4{padding-top:4rem!important}.mast-padding-right-xl-4{padding-right:4rem!important}.mast-padding-bottom-xl-4{padding-bottom:4rem!important}.mast-padding-left-xl-4{padding-left:4rem!important}.mast-padding-xl-4_5{padding:4.5rem!important}.mast-padding-top-xl-4_5{padding-top:4.5rem!important}.mast-padding-right-xl-4_5{padding-right:4.5rem!important}.mast-padding-bottom-xl-4_5{padding-bottom:4.5rem!important}.mast-padding-left-xl-4_5{padding-left:4.5rem!important}.mast-padding-xl-5{padding:5rem!important}.mast-padding-top-xl-5{padding-top:5rem!important}.mast-padding-right-xl-5{padding-right:5rem!important}.mast-padding-bottom-xl-5{padding-bottom:5rem!important}.mast-padding-left-xl-5{padding-left:5rem!important}.mast-padding-xl-5_5{padding:5.5rem!important}.mast-padding-top-xl-5_5{padding-top:5.5rem!important}.mast-padding-right-xl-5_5{padding-right:5.5rem!important}.mast-padding-bottom-xl-5_5{padding-bottom:5.5rem!important}.mast-padding-left-xl-5_5{padding-left:5.5rem!important}.mast-padding-xl-6{padding:6rem!important}.mast-padding-top-xl-6{padding-top:6rem!important}.mast-padding-right-xl-6{padding-right:6rem!important}.mast-padding-bottom-xl-6{padding-bottom:6rem!important}.mast-padding-left-xl-6{padding-left:6rem!important}.mast-padding-xl-6_5{padding:6.5rem!important}.mast-padding-top-xl-6_5{padding-top:6.5rem!important}.mast-padding-right-xl-6_5{padding-right:6.5rem!important}.mast-padding-bottom-xl-6_5{padding-bottom:6.5rem!important}.mast-padding-left-xl-6_5{padding-left:6.5rem!important}.mast-padding-xl-7{padding:7rem!important}.mast-padding-top-xl-7{padding-top:7rem!important}.mast-padding-right-xl-7{padding-right:7rem!important}.mast-padding-bottom-xl-7{padding-bottom:7rem!important}.mast-padding-left-xl-7{padding-left:7rem!important}.mast-padding-xl-7_5{padding:7.5rem!important}.mast-padding-top-xl-7_5{padding-top:7.5rem!important}.mast-padding-right-xl-7_5{padding-right:7.5rem!important}.mast-padding-bottom-xl-7_5{padding-bottom:7.5rem!important}.mast-padding-left-xl-7_5{padding-left:7.5rem!important}.mast-padding-xl-8{padding:8rem!important}.mast-padding-top-xl-8{padding-top:8rem!important}.mast-padding-right-xl-8{padding-right:8rem!important}.mast-padding-bottom-xl-8{padding-bottom:8rem!important}.mast-padding-left-xl-8{padding-left:8rem!important}.mast-padding-xl-8_5{padding:8.5rem!important}.mast-padding-top-xl-8_5{padding-top:8.5rem!important}.mast-padding-right-xl-8_5{padding-right:8.5rem!important}.mast-padding-bottom-xl-8_5{padding-bottom:8.5rem!important}.mast-padding-left-xl-8_5{padding-left:8.5rem!important}.mast-padding-xl-9{padding:9rem!important}.mast-padding-top-xl-9{padding-top:9rem!important}.mast-padding-right-xl-9{padding-right:9rem!important}.mast-padding-bottom-xl-9{padding-bottom:9rem!important}.mast-padding-left-xl-9{padding-left:9rem!important}.mast-padding-xl-9_5{padding:9.5rem!important}.mast-padding-top-xl-9_5{padding-top:9.5rem!important}.mast-padding-right-xl-9_5{padding-right:9.5rem!important}.mast-padding-bottom-xl-9_5{padding-bottom:9.5rem!important}.mast-padding-left-xl-9_5{padding-left:9.5rem!important}.mast-padding-xl-10{padding:10rem!important}.mast-padding-top-xl-10{padding-top:10rem!important}.mast-padding-right-xl-10{padding-right:10rem!important}.mast-padding-bottom-xl-10{padding-bottom:10rem!important}.mast-padding-left-xl-10{padding-left:10rem!important}}.mast-z-negative{z-index:-1}.mast-z-base{z-index:1}.mast-z-low{z-index:10}.mast-z-mid{z-index:100}.mast-z-high{z-index:500}.mast-z-extreme{z-index:9999}.mast-icon-button-brand,.mast-icon-button-dark,.mast-icon-button-inverse,.mast-icon-button-neutral{cursor:pointer}.mast-icon-button-brand:focus,.mast-icon-button-dark:focus,.mast-icon-button-inverse:focus,.mast-icon-button-neutral:focus{outline:2px dotted #757575;outline-offset:2px}.mast-icon-button-brand.mast-disabled,.mast-icon-button-dark.mast-disabled,.mast-icon-button-neutral.mast-disabled{color:#d1d1d1;cursor:not-allowed}.mast-icon-button-brand.mast-disabled:hover,.mast-icon-button-dark.mast-disabled:hover,.mast-icon-button-neutral.mast-disabled:hover{color:#d1d1d1}.mast-button{margin-bottom:.83rem;font-family:IBMPlexSans,Helvetica Neue,Helvetica,Arial,sans-serif;letter-spacing:.02632rem;text-transform:uppercase;font-weight:500;font-size:.89474rem;padding-bottom:.80132rem;padding-top:.80132rem;border-radius:2px;border-style:solid;border-width:0;cursor:pointer;display:block;line-height:1.15;position:relative;text-align:center;transition:background-color .3s cubic-bezier(.23,1,.32,1),border-color .3s cubic-bezier(.23,1,.32,1),color .3s cubic-bezier(.23,1,.32,1);z-index:0;background-color:#00598a;border:0;color:#fdfdfd}.mast-button:hover{text-decoration:none}.mast-button:focus{outline:2px dotted #757575;outline-offset:2px}.mast-button:visited{color:#fdfdfd}.mast-button:hover{background-color:#0370b0;color:#fdfdfd}.mast-button:active{background-color:#002236;color:#fdfdfd}.mast-button:not([class*=mast-col]){width:100%}.mast-button.mast-small{padding-bottom:.48553rem;padding-top:.48553rem}.mast-button.mast-large{padding-bottom:1.45921rem;padding-top:1.45921rem}.mast-button.mast-disabled{background-color:#f3f3f3;color:#d1d1d1;cursor:not-allowed}.mast-button.mast-secondary{padding-bottom:.69605rem;padding-top:.69605rem;background-color:#fdfdfd;border:2px solid #00598a;color:#00598a}.mast-button.mast-secondary:visited{color:#00598a}.mast-button.mast-secondary:hover{background-color:#0370b0;border-color:#0370b0;color:#fdfdfd}.mast-button.mast-secondary:active{background-color:#002236;border-color:#002236;color:#fdfdfd}.mast-button.mast-secondary.mast-disabled{background-color:#fdfdfd;border-color:#d1d1d1;color:#d1d1d1;cursor:not-allowed}.mast-button.mast-secondary.mast-large,.mast-button.mast-secondary.mast-small{padding-bottom:.69605rem;padding-top:.69605rem}.mast-button.mast-flat{background-color:#fdfdfd;border:0;border-radius:2px;color:#232323}.mast-button.mast-flat:visited{color:#232323}.mast-button.mast-flat:hover{background-color:#d1d1d1;color:#232323}.mast-button.mast-flat:active{background-color:#fdfdfd;color:#dd2113}.mast-button.mast-flat.mast-disabled{color:#ababab;cursor:not-allowed}.mast-button.mast-flat.mast-disabled:active,.mast-button.mast-flat.mast-disabled:hover{background-color:#fdfdfd;color:#ababab}.mast-button.mast-flat.mast-current{position:relative}.mast-button.mast-flat.mast-current:before{background-color:#232323;bottom:0;content:"";height:.2rem;left:0;position:absolute;width:100%}.mast-button.mast-basic{border:2px solid #d1d1d1;padding-bottom:.69605rem;padding-top:.69605rem;background-color:#fdfdfd;color:#232323}.mast-button.mast-basic:visited{color:#232323}.mast-button.mast-basic:hover{background-color:#d1d1d1}.mast-button.mast-basic:active{background-color:#fdfdfd;color:#dd2113}.mast-button.mast-basic.mast-disabled{border-color:#d1d1d1;color:#ababab;cursor:not-allowed}.mast-button.mast-basic.mast-disabled:active,.mast-button.mast-basic.mast-disabled:hover{background-color:transparent;color:#ababab;text-decoration:none}.mast-button.mast-basic.mast-large,.mast-button.mast-basic.mast-small{padding-bottom:.69605rem;padding-top:.69605rem}.mast-button.mast-basic.mast-current{position:relative;z-index:101}.mast-button.mast-basic.mast-current:before{content:"";height:100%;left:0;outline:2px solid #232323;position:absolute;top:0;width:100%}.mast-button.mast-danger{background-color:#af1a0f;border:0;color:#fdfdfd}.mast-button.mast-danger:visited{color:#fdfdfd}.mast-button.mast-danger:hover{background-color:#dd2113;color:#fdfdfd}.mast-button.mast-danger:active{background-color:#940a00;color:#fdfdfd}.mast-button.mast-danger.mast-disabled{background-color:#f3f3f3;color:#d1d1d1;cursor:not-allowed}.mast-button.mast-danger.mast-disabled:active,.mast-button.mast-danger.mast-disabled:hover{background-color:#f3f3f3;color:#d1d1d1;text-decoration:none}.mast-button.mast-full-border.mast-basic,.mast-button.mast-full-border.mast-secondary{border-width:2px!important}.mast-button.mast-width-auto{padding-left:3.04211rem;padding-right:3.04211rem;width:auto}.mast-button.mast-width-auto.mast-small{padding-left:1.734rem;padding-right:1.734rem;width:auto}.mast-button.mast-width-auto.mast-large{padding-left:5.01947rem;padding-right:5.01947rem;width:auto}.mast-button.mast-truncate{overflow:hidden;text-overflow:ellipsis;white-space:nowrap}.mast-button+.mast-button-msg{margin-top:-.83rem}.mast-button.mast-close-button{transform:scale(1);transition:color .3s cubic-bezier(.23,1,.32,1),background-color .3s cubic-bezier(.23,1,.32,1),opacity .3s cubic-bezier(.23,1,.32,1),transform .3s cubic-bezier(.77,0,.175,1),border-color .3s cubic-bezier(.23,1,.32,1)}.mast-button.mast-close-button:focus,.mast-button.mast-close-button:hover{background:transparent!important;transform:scale(1.3)}.mast-button-msg{padding:0 .5rem;text-align:center}.mast-button-msg.mast-error{color:#af1a0f}.mast-button-msg.mast-warning{color:#232323}.mast-button-msg.mast-success{color:#054830}.mast-icon-button-dark{color:#002236}.mast-icon-button-dark:hover{color:#555}.mast-icon-button-dark:active{color:#dd2113}.mast-icon-button-neutral{color:#7d7971}.mast-icon-button-neutral:hover{color:#5b5852}.mast-icon-button-neutral:active{color:#232323}.mast-icon-button-brand{color:#00598a}.mast-icon-button-brand:hover{color:#0370b0}.mast-icon-button-brand:active{color:#002236}.mast-icon-button-inverse{color:#fdfdfd}.mast-icon-button-inverse:hover{color:#d0d4d6}.mast-icon-button-inverse:active{color:#fdfdfd}.mast-icon-button-inverse.mast-disabled{color:#727c84;cursor:not-allowed}@keyframes animation-radio-and-checkbox{0%{bottom:0;left:0;right:0;top:0}to{bottom:.15789rem;left:.15789rem;right:.15789rem;top:.15789rem}}#w3-masthead-overlay .mast-input-container{margin-bottom:.83rem;padding-bottom:1rem}#w3-masthead-overlay .mast-input-container .mast-input-msg{padding:0 .5rem;font-size:.81579rem;letter-spacing:.02632rem;margin-bottom:-.83rem;padding-top:.5rem}#w3-masthead-overlay .mast-input-container .mast-input-msg+.mast-input-msg{margin-top:.67rem}#w3-masthead-overlay .mast-file-upload-container .mast-file-name{font-size:.81579rem;letter-spacing:.02632rem;padding-bottom:.5rem;padding-left:.5rem}#w3-masthead-overlay .mast-file-upload-container .mast-file-name :before{color:#0370b0;position:relative;top:6px}#w3-masthead-overlay .mast-file-upload-container input.mast-file-upload{height:.1px;opacity:0;overflow:hidden;position:absolute;width:.1px;z-index:-1}#w3-masthead-overlay .mast-file-upload-container input+label{display:inline-block}#w3-masthead-overlay .mast-file-upload-container .mast-file-upload-msg.mast-error{color:#dd2113}#w3-masthead-overlay .mast-file-upload-container .mast-file-upload-msg.mast-uploading{color:#0370b0}#w3-masthead-overlay .mast-input-msg.mast-error{color:#dd2113}#w3-masthead-overlay .mast-input-msg.mast-warning{color:#232323}#w3-masthead-overlay .mast-input-msg.mast-success{color:#066544}#w3-masthead-overlay .mast-input-label{padding:0 .5rem;margin-bottom:.83rem;text-transform:uppercase;font-weight:500;font-size:.89474rem;font-size:.81579rem;letter-spacing:.02632rem;margin-bottom:.55333rem}#w3-masthead-overlay .mast-input,#w3-masthead-overlay .mast-input-label{font-family:IBMPlexSans,Helvetica Neue,Helvetica,Arial,sans-serif;display:block}#w3-masthead-overlay .mast-input{font-weight:400;background-color:#fdfdfd;color:#232323;font-size:1rem;letter-spacing:.03rem;line-height:1.4;padding:.5rem;position:relative;width:100%;border:2px solid #d1d1d1;border-radius:2px;transition:background-color .3s cubic-bezier(.23,1,.32,1),border-color .3s cubic-bezier(.23,1,.32,1)}#w3-masthead-overlay .mast-input:not(textarea){height:2.63158rem;padding-bottom:unset;padding-top:unset}#w3-masthead-overlay .mast-input:focus{outline:2px dotted #757575;outline-offset:2px;background-color:#f3f3f3;border-color:#757575}#w3-masthead-overlay .mast-input.mast-disabled{background-color:#f3f3f3;border-color:#d1d1d1;cursor:not-allowed}#w3-masthead-overlay .mast-input.mast-disabled .mast-input-checkbox .mast-disabled+.mast-input-control,#w3-masthead-overlay .mast-input.mast-disabled .mast-input-radio .mast-disabled+.mast-input-control{border-color:#d1d1d1;border-width:2px;cursor:not-allowed}#w3-masthead-overlay .mast-input.mast-disabled .mast-input-checkbox .mast-disabled~span,#w3-masthead-overlay .mast-input.mast-disabled .mast-input-radio .mast-disabled~span{color:#d1d1d1;cursor:not-allowed}#w3-masthead-overlay .mast-input.mast-small{height:2rem}#w3-masthead-overlay .mast-input.mast-large{height:3.94737rem}#w3-masthead-overlay .mast-input.mast-error{background:#fcd6d4;background:linear-gradient(90deg,#f7685e 8px,#fcd6d4 0,#fcd6d4);box-shadow:none;padding-left:.83rem}#w3-masthead-overlay .mast-input.mast-warning{background:#fdf0bf;background:linear-gradient(90deg,#f7cf2b 8px,#fdf0bf 0,#fdf0bf);padding-left:.83rem}#w3-masthead-overlay .mast-input.mast-success{background:#fdfdfd;background:linear-gradient(90deg,#27aa7c 8px,#fdfdfd 0,#fdfdfd);padding-left:.83rem}#w3-masthead-overlay .mast-select{border:2px solid #d1d1d1;border-radius:2px;transition:background-color .3s cubic-bezier(.23,1,.32,1),border-color .3s cubic-bezier(.23,1,.32,1);background-color:inherit;padding:.48rem .25rem;position:relative}#w3-masthead-overlay .mast-select:focus{outline:2px dotted #757575;outline-offset:2px;background-color:#f3f3f3;border-color:#757575}#w3-masthead-overlay .mast-select select{margin-bottom:.83rem;font-family:IBMPlexSans,Helvetica Neue,Helvetica,Arial,sans-serif;letter-spacing:.02632rem;text-transform:uppercase;font-weight:500;font-size:.89474rem;background-color:inherit;border:0;margin-bottom:0!important;padding:.25rem .5rem;position:relative;width:100%;z-index:1}#w3-masthead-overlay .mast-select select:focus{outline:2px dotted #757575;outline-offset:2px}#w3-masthead-overlay .mast-select.mast-disabled{background-color:#f3f3f3;border-color:#d1d1d1;cursor:not-allowed}#w3-masthead-overlay .mast-select.mast-disabled select{color:#d1d1d1!important}#w3-masthead-overlay .mast-select.mast-error{padding-left:.83rem;background:#fcd6d4;background:linear-gradient(90deg,#f7685e 8px,#fcd6d4 0,#fcd6d4)}#w3-masthead-overlay .mast-select.mast-warning{padding-left:.83rem;background:#fdf0bf;background:linear-gradient(90deg,#f7cf2b 8px,#fdf0bf 0,#fdf0bf)}#w3-masthead-overlay .mast-select.mast-success{padding-left:.83rem;background:#fdfdfd;background:linear-gradient(90deg,#27aa7c 8px,#fdfdfd 0,#fdfdfd)}#w3-masthead-overlay .mast-select.mast-small{padding:.15rem .25rem}#w3-masthead-overlay .mast-select.mast-large{padding:1.14rem .25rem}#w3-masthead-overlay .mast-input-checkbox,#w3-masthead-overlay .mast-input-radio{padding:0 .5rem;margin-bottom:.83rem;text-transform:uppercase;font-weight:500;font-size:.89474rem;font-size:.81579rem;letter-spacing:.02632rem;display:block;margin-bottom:.55333rem;font-weight:400;font-family:IBMPlexSans,Helvetica Neue,Helvetica,Arial,sans-serif;padding:0}#w3-masthead-overlay .mast-input-checkbox input,#w3-masthead-overlay .mast-input-radio input{height:0;opacity:0;position:absolute;width:0}#w3-masthead-overlay .mast-input-checkbox .mast-input-control,#w3-masthead-overlay .mast-input-radio .mast-input-control{border:2px solid #7d7971;border-radius:2px;display:inline-block;height:1.51rem;padding-right:.5rem;position:relative;top:.1rem;transition:border-color .3s cubic-bezier(.23,1,.32,1),border-width .3s cubic-bezier(.23,1,.32,1),background-color .3s cubic-bezier(.23,1,.32,1);vertical-align:bottom;width:1.51rem}#w3-masthead-overlay .mast-input-checkbox .mast-input-control:hover,#w3-masthead-overlay .mast-input-radio .mast-input-control:hover{border-color:#00598a}#w3-masthead-overlay .mast-input-checkbox .mast-input-control:after,#w3-masthead-overlay .mast-input-radio .mast-input-control:after{bottom:0;content:"";left:0;position:absolute;right:0;top:0;transition:background-color .3s cubic-bezier(.23,1,.32,1)}#w3-masthead-overlay .mast-input-checkbox input:focus+.mast-input-control,#w3-masthead-overlay .mast-input-radio input:focus+.mast-input-control{outline:2px dotted #757575;outline-offset:2px}#w3-masthead-overlay .mast-input-checkbox .mast-disabled+.mast-input-control,#w3-masthead-overlay .mast-input-radio .mast-disabled+.mast-input-control{border-color:#d1d1d1;border-width:2px;cursor:not-allowed}#w3-masthead-overlay .mast-input-checkbox .mast-disabled~span,#w3-masthead-overlay .mast-input-radio .mast-disabled~span{color:#d1d1d1;cursor:not-allowed}#w3-masthead-overlay .mast-input-radio .mast-input-control{border-radius:100%;height:1.57rem;width:1.57rem}#w3-masthead-overlay .mast-input-radio .mast-input-control:after{border-radius:100%}#w3-masthead-overlay .mast-input-radio input:checked+.mast-input-control{border-color:#00598a}#w3-masthead-overlay .mast-input-radio input:checked+.mast-input-control:after{background-color:#00598a;bottom:.15789rem;left:.15789rem;right:.15789rem;top:.15789rem}#w3-masthead-overlay .mast-input-radio input:checked+.mast-input-control:hover{border-color:#0370b0}#w3-masthead-overlay .mast-input-radio input:checked+.mast-input-control:hover:after{background-color:#0370b0}#w3-masthead-overlay .mast-input-checkbox input:checked+.mast-input-control,#w3-masthead-overlay .mast-input-checkbox input:indeterminate+.mast-input-control{border-color:#00598a}#w3-masthead-overlay .mast-input-checkbox input:checked+.mast-input-control:after,#w3-masthead-overlay .mast-input-checkbox input:indeterminate+.mast-input-control:after{background-color:#00598a}#w3-masthead-overlay .mast-input-checkbox input:checked+.mast-input-control:before,#w3-masthead-overlay .mast-input-checkbox input:indeterminate+.mast-input-control:before{border-color:#fdfdfd;border-style:solid;border-width:0 3px 3px 0;content:"";display:block;height:.77rem;left:35%;position:absolute;top:19%;transform:rotate(42deg);width:.41rem;z-index:10}#w3-masthead-overlay .mast-input-checkbox input:checked+.mast-input-control:hover,#w3-masthead-overlay .mast-input-checkbox input:indeterminate+.mast-input-control:hover{border-color:#0370b0}#w3-masthead-overlay .mast-input-checkbox input:checked+.mast-input-control:hover:after,#w3-masthead-overlay .mast-input-checkbox input:indeterminate+.mast-input-control:hover:after{background-color:#0370b0}#w3-masthead-overlay .mast-input-checkbox input:indeterminate+.mast-input-control:before{border-width:3px 0 0;left:50%;top:42%;transform:translateX(-50%);width:.77rem}#w3-masthead-overlay .mast-input-toggle .mast-input-control{background:#f3f3f3;border:2px solid #7d7971;border-radius:1.5em;display:inline-block;height:1.5rem;position:relative;transition:background-color .3s cubic-bezier(.23,1,.32,1),border-color .3s cubic-bezier(.23,1,.32,1);width:62.7px}#w3-masthead-overlay .mast-input-toggle .mast-input-control:after{background-color:#fdfdfd;border:2px solid #7d7971;border-radius:100%;content:"";height:1.5rem;left:-2px;position:absolute;top:-2px;transition:background-color .3s cubic-bezier(.23,1,.32,1),border-color .3s cubic-bezier(.23,1,.32,1),left .3s cubic-bezier(.77,0,.175,1);width:1.5rem}#w3-masthead-overlay .mast-input-toggle .mast-input-control:hover{background-color:#c9dce6}#w3-masthead-overlay .mast-input-toggle input{height:0;opacity:0;position:absolute;width:0}#w3-masthead-overlay .mast-input-toggle input:focus+.mast-input-control{outline:2px dotted #757575;outline-offset:2px}#w3-masthead-overlay .mast-input-toggle input:checked+.mast-input-control{background-color:#00598a;border-color:#00598a}#w3-masthead-overlay .mast-input-toggle input:checked+.mast-input-control:after{border-color:#00598a;left:32.2px}#w3-masthead-overlay .mast-input-toggle input:checked+.mast-input-control:hover{background-color:#0370b0;border-color:#0370b0}#w3-masthead-overlay .mast-input-toggle input:checked+.mast-input-control:hover:after{border-color:#0370b0}#w3-masthead-overlay .mast-input-toggle.mast-disabled .mast-input-control{border-color:#d1d1d1;cursor:not-allowed}#w3-masthead-overlay .mast-input-toggle.mast-disabled .mast-input-control:after{border-color:#d1d1d1}#w3-masthead-overlay .mast-input-toggle.mast-disabled .mast-input-control:hover{background-color:#f3f3f3}#w3-masthead-overlay .mast-input-toggle.mast-disabled input:checked+.mast-input-control{background-color:#d1d1d1;border-color:#d1d1d1}#w3-masthead-overlay .mast-input-toggle.mast-disabled input:checked+.mast-input-control:after{border-color:#d1d1d1;left:32.2px}.mast-overlay,.mast-overlay-focus,.mast-overlay-fullscreen{height:0;left:0;opacity:0;overflow:hidden;position:fixed;top:0;transition:background-color .3s cubic-bezier(.23,1,.32,1),height 0s linear .66667s,opacity .3s cubic-bezier(.23,1,.32,1);width:100%;z-index:100}.mast-overlay-focus .mast-overlay-box,.mast-overlay-fullscreen .mast-overlay-box,.mast-overlay .mast-overlay-box{transform:scale(.95);transition:transform .3s cubic-bezier(.77,0,.175,1)}.mast-overlay-focus .mast-close,.mast-overlay-fullscreen .mast-close,.mast-overlay .mast-close{display:none}.mast-open.mast-overlay,.mast-open.mast-overlay-focus,.mast-open.mast-overlay-fullscreen{background-color:rgba(35,35,35,.73);height:100%;opacity:1;transition:background-color .3s cubic-bezier(.23,1,.32,1),height 0ms linear 0ms,opacity 0ms linear 0ms}.mast-open.mast-overlay-focus .mast-overlay-box,.mast-open.mast-overlay-fullscreen .mast-overlay-box,.mast-open.mast-overlay .mast-overlay-box{position:absolute;transform:scale(1);transition:transform .3s cubic-bezier(.77,0,.175,1)}.mast-open.mast-overlay-focus .mast-close,.mast-open.mast-overlay-fullscreen .mast-close,.mast-open.mast-overlay .mast-close{display:block;margin:1rem;padding:1rem;position:absolute!important;right:0;top:0;width:auto;z-index:100!important}.mast-overlay{overflow-y:scroll}.mast-overlay .mast-overlay-box{margin-bottom:2em;top:10%}.mast-overlay .mast-overlay-box .mast-overlay-content{background-color:#fdfdfd;margin-bottom:30px}.mast-overlay .mast-overlay-content{padding-bottom:2rem;padding-top:2rem}.mast-overlay-focus .mast-overlay-box{background-color:#fdfdfd;bottom:2em;overflow-y:scroll;position:absolute;top:10%}.mast-overlay-focus .mast-overlay-content{padding-bottom:2rem;padding-top:2rem}.mast-overlay-fullscreen{top:0;z-index:9999}.mast-overlay-fullscreen .mast-overlay-box{background-color:#fdfdfd;opacity:0;transform:scale(1);transition:opacity .3s cubic-bezier(.23,1,.32,1)}.mast-overlay-fullscreen.mast-open .mast-overlay-box{background-color:#fdfdfd;height:100%;opacity:1;overflow-y:scroll;top:0;transform:scale(1);transition:opacity .3s cubic-bezier(.23,1,.32,1);width:100%}.mast-overlay-fullscreen .mast-close{position:fixed!important}.mast-overlay-fullscreen .mast-close.mast-button{top:.71rem;width:auto}.mast-overlay-fullscreen .mast-close.mast-close-button-left{left:.71rem}.mast-overlay-fullscreen .mast-close.mast-close-button-right{right:.71rem}.mast-panel{background-color:#fdfdfd;border:1px solid #d1d1d1}.mast-panel.mast-no-border{border:0}.mast-panel.mast-panel-bent{border-radius:2px}.mast-panel.mast-panel-rounded{border-radius:.31579rem}.mast-panel.mast-panel-raised{box-shadow:0 1px 3px rgba(83,91,96,.23)}.mast-panel.mast-panel-floating{box-shadow:0 3px 6px rgba(83,91,96,.23)}.mast-panel.mast-fullwidth{border-left:0;border-radius:0;border-right:0}.mast-panel.mast-panel-nester{padding:.3rem}.mast-panel .mast-panel-header{border-bottom:1px solid #d1d1d1;padding:1.25rem}.mast-panel .mast-panel-container{padding:1.25rem}.mast-panel .mast-panel-footer{border-top:1px solid #d1d1d1;padding:1.25rem}.mast-panel .mast-list-lined,.mast-panel .mast-list-unstyled{margin-bottom:0}.mast-panel .mast-list-lined .mast-panel-segment,.mast-panel .mast-list-unstyled .mast-panel-segment{border-left:0;border-right:0;padding:.67rem}.mast-panel .mast-list-lined .mast-panel-segment:first-child,.mast-panel .mast-list-unstyled .mast-panel-segment:first-child{border-top:0}.mast-panel .mast-list-lined .mast-panel-segment:last-child,.mast-panel .mast-list-unstyled .mast-panel-segment:last-child{border-bottom:0}a.mast-panel-link:hover{text-decoration:none}a.mast-panel-link .mast-panel:after{border-bottom:3px solid #0370b0;content:"";display:block;opacity:0;position:relative;text-decoration:none;top:0;transition-duration:.2s;transition-property:opacity;transition-timing-function:cubic-bezier(.86,0,.07,1)}a.mast-panel-link .mast-panel:hover{box-shadow:0 3px 6px rgba(83,91,96,.23);transition-duration:.2s;transition-property:box-shadow;transition-timing-function:cubic-bezier(.86,0,.07,1)}a.mast-panel-link .mast-panel:hover:after{opacity:1;transition-duration:.2s;transition-property:opacity;transition-timing-function:cubic-bezier(.86,0,.07,1)}.mast-loader-header{color:#757575;margin-bottom:1rem;text-align:center}.mast-loader{animation:spin 1s cubic-bezier(.86,0,.07,1) infinite;border:4px solid #f3f3f3;border-radius:50%;border-top-color:#757575;border-top-style:solid;border-top-width:4px;height:2.63158rem;margin:0 auto;width:2.63158rem}.mast-loader-sm{height:1.36842rem;width:1.36842rem}.mast-loader-blue .mast-loader-header{color:#00598a}.mast-loader-blue .mast-loader{border-color:#eff1f1;border-top-color:#00598a}@keyframes spin{0%{transform:rotate(0deg)}to{transform:rotate(1turn)}}#w3-masthead-overlay *{box-sizing:border-box}#w3-masthead-overlay a{display:inline-block}</style><style type="text/css">body.w3-masthead-open{overflow:hidden!important}body.w3-masthead-open .usabilla_live_button_container{display:none}#w3-masthead-overlay .w3-masthead-background{background:#fff;height:100%;left:0;opacity:.95;position:absolute;top:0;width:100%}#w3-masthead-overlay.mast-overlay-fullscreen,#w3-masthead-overlay.mast-overlay-fullscreen .mast-overlay-box{background:none;height:100%;opacity:1;overflow-y:scroll}#w3-masthead-overlay.mast-overlay-fullscreen .mast-overlay-box .w3-masthead-close,#w3-masthead-overlay.mast-overlay-fullscreen .w3-masthead-close{background:none}</style><style type="text/css">.w3-masthead-results p{color:orange}</style><style type="text/css">.w3-masthead-card__person .mast-panel,.w3-masthead-card__place .mast-panel{-webkit-transition:box-shadow .3s ease;-moz-transition:box-shadow .3s ease;-ms-transition:box-shadow .3s ease;-o-transition:box-shadow .3s ease;transition:box-shadow .3s ease}.w3-masthead-card__person .mast-panel:hover,.w3-masthead-card__place .mast-panel:hover{box-shadow:0 6px 12px rgba(52,83,95,.23)}.w3-masthead-card__person .mast-panel:focus,.w3-masthead-card__place .mast-panel:focus{outline:2px dotted #757575;outline-offset:2px}.w3-masthead-card__person:hover,.w3-masthead-card__place:hover{text-decoration:none}.w3-masthead-card__person p,.w3-masthead-card__place p{word-wrap:break-word}.w3-masthead-card__person img,.w3-masthead-card__place img{display:block;height:61px;margin:auto;width:61px}.w3-masthead-card__person img{border-radius:50%}</style><style type="text/css">#w3-masthead-search #w3-masthead-search-input::-webkit-search-cancel-button{display:none}#w3-masthead-search #w3-masthead-clearsearch,#w3-masthead-search #w3-masthead-gotow3search{cursor:pointer;position:absolute;right:2rem;top:1.8rem;z-index:5}</style><style type="text/css">#ds-w3-injectable-nav{display:block;position:absolute;z-index:400;left:0;top:0;text-decoration:none}#ds-w3-injectable-nav #w3-masthead-badge{-webkit-filter:drop-shadow(0 0 5px rgba(0,0,0,.5));filter:drop-shadow(0 0 5px rgba(0,0,0,.5))}#ds-w3-injectable-nav #w3-masthead-text{cursor:pointer;left:0;position:absolute;top:0}#ds-w3-injectable-nav #w3-masthead-text-fill{text-decoration:none}#ds-w3-injectable-nav #w3-masthead-badge-background-fill{-webkit-transition:transform .2s ease-in-out;-moz-transition:transform .2s ease-in-out;transition:transform .2s ease-in-out;text-decoration:none}#ds-w3-injectable-nav.light #w3-masthead-badge-background-fill-clor{fill:#fff}#ds-w3-injectable-nav.light #w3-masthead-badge-background-fill #w3-masthead-text-fill{fill:#232323}#ds-w3-injectable-nav.dark #w3-masthead-badge-background-fill-color{fill:#00598a}#ds-w3-injectable-nav.dark #w3-masthead-badge-background-fill #w3-masthead-text-fill{fill:#fff}#ds-w3-injectable-nav:hover #w3-masthead-badge-background-fill{transform:scaleY(1.1);-webkit-transform:scaleY(1.1)}@media only screen and (max-width:475px){#ds-w3-injectable-nav.xs{position:fixed;top:auto;left:auto;transform:rotate(90.1deg) translate(0);-webkit-transform:rotate(90.1deg) translate(0);right:-6px;bottom:40px}#ds-w3-injectable-nav.xs #w3-masthead-text{transform:rotate(-90.1deg) translate(16px,15px);-webkit-transform:rotate(-90.1deg) translate(16px,15px)}}@media only screen and (max-width:778px){#ds-w3-injectable-nav.sm{position:fixed;top:auto;left:auto;transform:rotate(90.1deg) translate(0);-webkit-transform:rotate(90.1deg) translate(0);right:-6px;bottom:40px}#ds-w3-injectable-nav.sm #w3-masthead-text{transform:rotate(-90.1deg) translate(16px,15px);-webkit-transform:rotate(-90.1deg) translate(16px,15px)}}@media only screen and (max-width:1158px){#ds-w3-injectable-nav.md{position:fixed;top:auto;left:auto;transform:rotate(90.1deg) translate(0);-webkit-transform:rotate(90.1deg) translate(0);right:-6px;bottom:40px}#ds-w3-injectable-nav.md #w3-masthead-text{transform:rotate(-90.1deg) translate(16px,15px);-webkit-transform:rotate(-90.1deg) translate(16px,15px)}}</style><script type="text/javascript" src="https://www.ibm.com/common/stats/w3_nondojo_eluminate.js"></script><script type="text/javascript">/*{literal}<![CDATA[*/window.lightningjs||function(c){function g(b,d){d&&(d+=(/\?/.test(d)?"&":"?")+"lv=1");c[b]||function(){var i=window,h=document,j=b,g=h.location.protocol,l="load",k=0;(function(){function b(){a.P(l);a.w=1;c[j]("_load")}c[j]=function(){function m(){m.id=e;return c[j].apply(m,arguments)}var b,e=++k;b=this&&this!=i?this.id||0:0;(a.s=a.s||[]).push([e,b,arguments]);m.then=function(b,c,h){var d=a.fh[e]=a.fh[e]||[],j=a.eh[e]=a.eh[e]||[],f=a.ph[e]=a.ph[e]||[];b&&d.push(b);c&&j.push(c);h&&f.push(h);return m};return m};var a=c[j]._={};a.fh={};a.eh={};a.ph={};a.l=d?d.replace(/^\/\//,(g=="https:"?g:"http:")+"//"):d;a.p={0:+new Date};a.P=function(b){a.p[b]=new Date-a.p[0]};a.w&&b();i.addEventListener?i.addEventListener(l,b,!1):i.attachEvent("on"+l,b);var q=function(){function b(){return["<head></head><",c,' onload="var d=',n,";d.getElementsByTagName('head')[0].",d,"(d.",g,"('script')).",i,"='",a.l,"'\"></",c,">"].join("")}var c="body",e=h[c];if(!e)return setTimeout(q,100);a.P(1);var d="appendChild",g="createElement",i="src",k=h[g]("div"),l=k[d](h[g]("div")),f=h[g]("iframe"),n="document",p;k.style.display="none";e.insertBefore(k,e.firstChild).id=o+"-"+j;f.frameBorder="0";f.id=o+"-frame-"+j;/MSIE[ ]+6/.test(navigator.userAgent)&&(f[i]="javascript:false");f.allowTransparency="true";l[d](f);try{f.contentWindow[n].open()}catch(s){a.domain=h.domain,p="javascript:var d="+n+".open();d.domain='"+h.domain+"';",f[i]=p+"void(0);"}try{var r=f.contentWindow[n];r.write(b());r.close()}catch(t){f[i]=p+'d.write("'+b().replace(/"/g,String.fromCharCode(92)+'"')+'");d.close();'}a.P(2)};a.l&&setTimeout(q,0)})()}();c[b].lv="1";return c[b]}var o="lightningjs",k=window[o]=g(o);k.require=g;k.modules=c}({}); window.usabilla_live2 = lightningjs.require("usabilla_live2", "//w.usabilla.com/d3f383ab2f5a.js?api_name=usabilla_live2"); /*]]>{/literal}*/</script><script type="text/javascript">window.usabilla_live2("hide");document.getElementById("usbl-integrated-button").addEventListener("click",function(){window.usabilla_live2("click");});</script><script type="text/javascript" src="//libs.coremetrics.com/eluminate.js"></script><style type="text/css">
    @-webkit-keyframes spin-data-v-df0426d0 {
        0% {
            -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
        }
        100% {
            -webkit-transform: rotate(360deg);
        transform: rotate(360deg);
        }
    }
    @keyframes spin-data-v-df0426d0 {
        0% {
            -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
        }
        100% {
            -webkit-transform: rotate(360deg);
        transform: rotate(360deg);
        }
    }
    .loader[data-v-df0426d0] {
        -webkit-animation: spin-data-v-df0426d0 1s cubic-bezier(0.86, 0, 0.07, 1) infinite;
    animation: spin-data-v-df0426d0 1s cubic-bezier(0.86, 0, 0.07, 1) infinite;
        border-color: #f3f3f3;
        border-radius: 50%;
        border-style: solid;
        border-top-color: #757575;
        border-top-style: solid;
        border-top-width: 4px;
        border-width: 4px;
    height: 2.63158rem;
    margin: 8rem auto;
    width: 2.63158rem;
    }
    .loader--blue[data-v-df0426d0] {
        border-color: #eff1f1;
        border-top-color: #00598a;
    }
    .loader--small[data-v-df0426d0] {
    height: 1.36842rem;
    width: 1.36842rem;
    }
    </style><style type="text/css"></style><style type="text/css">
    .login-text[data-v-f63bbaf6] {
    cursor: pointer;
        text-decoration: underline;
    }
    </style><style type="text/css">
    .comment-wrapper--level-3 .comment-avatar {
        padding-left: 0;
    }
    .comment-avatar {
        margin-right: 20px;
    }
    .comment-avatar.ds-open .comment-avatar__tooltip {
        z-index: auto;
    }
    .comment-avatar__img {
    width: 50px;
    }
    @media (max-width: 778px) {
        .comment-avatar__img {
            float: none;
        }
    }
    .comment-avatar__tooltip {
        margin-top: 15px;
    width: auto;
        z-index: -1;
    }
    .comment-avatar__job-title {
        margin-bottom: 2px;
    }
    .comment-avatar__name {
    color: #fff;
    display: block;
        font-weight: 400;
        text-decoration: underline;
    }
    </style><style type="text/css">
    .expiration-tooltip {
    opacity: 1;
        white-space: initial;
    width: 215px;
    }
    </style><style type="text/css">
    .delete-confirmation {
    background: #fdf0bf;
    padding: 10px;
    position: absolute;
    right: 0;
        text-align: left;
    top: 60px;
    width: 270px;
        z-index: 1;
    }
    .delete-confirmation p {
        font-size: 14px;
    }
    .delete-confirmation__actions {
        text-align: right;
    }
    .delete-confirmation__action {
    background: transparent;
    border: 0;
    cursor: pointer;
        font-size: 14px;
        font-weight: 500;
    }
    </style><style type="text/css">
    .comment {
        font-size: 16px;
        font-weight: 300;
        white-space: pre-line;
    }
    .comment--user-author {
    border: 1px solid #c5c5c5;
    padding: 20px 20px 80px;
    }
    .comment__error-msg {
    position: absolute;
    }
    .comment__textarea {
    border: 0;
        font-size: 16px;
        font-weight: 300;
    height: 115px;
        line-height: 1.5;
    outline: none;
    padding: 20px;
    resize: vertical;
    width: 100%;
    }
    .comment__textarea-wrapper {
    background: #fff;
    border: solid 1px #d1d1d1;
        border-radius: 2px;
        padding-bottom: 35px;
    }
    .comment__textarea-wrapper:focus-within {
    border: 0;
    outline: 2px dotted #757575;
    }
    .reply__actions,
    .comment__actions {
    bottom: 70px;
    display: flex;
    height: 0;
        justify-content: flex-end;
    right: 0;
    }
    .reply__actions .loader,
    .comment__actions .loader {
    margin: 0 18px 10px 0;
    }
    .reply__actions--editing,
    .comment__actions--editing {
    bottom: 30px;
    }
    .reply__action.ds-button,
    .comment__action.ds-button {
        margin-right: 5px;
    width: 40px;
    }
    .reply__action-divider,
    .comment__action-divider {
    color: #d1d1d1;
    height: 30px;
    left: -4px;
    position: relative;
    top: -6px;
    }
    .reply__action--edit, .reply__action--delete,
    .comment__action--edit,
    .comment__action--delete {
    height: 45px;
    position: relative;
    }
    .reply__action--post.ds-button, .reply__action--cancel.ds-button,
    .comment__action--post.ds-button,
    .comment__action--cancel.ds-button {
    background: #fff;
        font-size: 16px;
        font-weight: 400;
    height: 18px;
    padding: 0 5px;
        text-transform: none;
    width: 68px;
    }
    .reply__action--post.ds-button:hover, .reply__action--cancel.ds-button:hover,
    .comment__action--post.ds-button:hover,
    .comment__action--cancel.ds-button:hover {
    background: #fff;
    }
    .reply__action--post.ds-button,
    .comment__action--post.ds-button {
    color: #00598a;
    }
    .reply__action--post.ds-button:hover,
    .comment__action--post.ds-button:hover {
    color: #00598a;
    }
    .reply__action--disabled.ds-button,
    .comment__action--disabled.ds-button {
    color: #d0d4d6;
        pointer-events: none;
    }
    .reply__actions {
    bottom: 30px;
    }
    </style><style type="text/css">
    .likes-wrapper {
    height: 33px;
        text-align: right;
    }
    @media (max-width: 778px) {
        .likes-wrapper {
            text-align: center;
        }
    }
    .likes-count {
    padding: 5px 10px;
        vertical-align: sub;
    }
    @media (max-width: 778px) {
        .likes-count {
        position: relative;
        top: -8px;
        }
    }
    .like-button {
    background: transparent;
    border: 0;
        float: right;
    padding: 0;
        pointer-events: none;
        text-align: center;
    }
    @media (max-width: 778px) {
        .like-button {
            float: none;
        }
    }
    .like-button__icon--unliked {
    top: 3px;
    transition: -webkit-transform .2s ease-in-out;
    transition: transform .2s ease-in-out;
    transition: transform .2s ease-in-out, -webkit-transform .2s ease-in-out;
    }
    .like-button__icon--unliked:hover {
        -webkit-transform: scale(1.5);
    transform: scale(1.5);
    }
    .like-button path {
    fill: #fff;
    stroke: #d1d1d1;
    }
    .like-button__loader.loader {
        float: right;
    margin: 3px 0 0 10px;
    }
    .comments--authenticated .like-button {
    cursor: pointer;
        pointer-events: auto;
    }
    .comments--authenticated .like-button__icon path {
    fill: #00598a;
    opacity: 1;
    stroke: #00598a;
    }
    .comments--authenticated .like-button__icon--unliked path {
    fill: #fff;
    }
    .comments--authenticated .fade-enter-active {
        -webkit-animation: fade-in 1.5s infinite;
    animation: fade-in 1.5s infinite;
    opacity: 1;
    }
    .comments--authenticated .fade-enter,
    .comments--authenticated .fade-leave-to,
    .comments--authenticated .fade-leave-active {
    display: none;
    opacity: 1;
    }
    @-webkit-keyframes fade-in {
        0% {
        fill: #fff;
        opacity: 1;
        stroke: #00598a;
        }
        50% {
        fill: #00598a;
        opacity: 1;
        stroke: #00598a;
            -webkit-transform: scale(1.5);
        transform: scale(1.5);
        }
        100% {
        fill: #00598a;
        stroke: #00598a;
            -webkit-transform: scale(1);
        transform: scale(1);
        }
    }
    @keyframes fade-in {
        0% {
        fill: #fff;
        opacity: 1;
        stroke: #00598a;
        }
        50% {
        fill: #00598a;
        opacity: 1;
        stroke: #00598a;
            -webkit-transform: scale(1.5);
        transform: scale(1.5);
        }
        100% {
        fill: #00598a;
        stroke: #00598a;
            -webkit-transform: scale(1);
        transform: scale(1);
        }
    }
    </style><style type="text/css">
    .new-reply {
    background: #fff;
    border: solid 1px #d1d1d1;
        border-radius: 2px;
    height: 65px;
    transition: height .2s ease-in-out;
    }
    .new-reply--expanded {
    height: 130px;
    resize: vertical;
    }
    .new-reply--expanded .new-reply__textarea {
    height: 90px;
    }
    .new-reply:focus-within {
    border: 0;
    outline: 2px dotted #757575;
    }
    .new-reply__textarea {
    border: 0;
        font-size: 16px;
        font-weight: 300;
    height: 60px;
    outline: 0;
    padding: 20px 20px 0;
    resize: none;
    width: 100%;
    }
    .new-reply-error-msg {
    position: absolute;
    }
    </style><style type="text/css">
    .reply {
    clear: both;
    display: block;
    }
    .replies-toggle {
    background: none;
    border: 0;
    color: #00598a;
    cursor: pointer;
        float: right;
        font-size: 16px;
        font-weight: 300;
    padding: 0 0 3px;
    }
    .replies-toggle__icon {
    position: relative;
    top: 3px;
    }
    </style><style type="text/css">
    .comment__wrapper {
    display: flex;
    }
    @media (max-width: 778px) {
        .comment__wrapper {
        display: block;
            text-align: center;
        }
    }
    @media (max-width: 778px) {
        .comment__wrapper--level-2 {
            padding-left: 1.5rem;
        }
    }
    .comment__container {
    width: 100%;
    }
    .comment__details {
    display: flex;
        font-size: 14px;
    }
    @media (max-width: 778px) {
        .comment__details {
        display: block;
            text-align: center;
        }
    }
    .comment__author {
        font-weight: 500;
    }
    .comment__content {
        padding-top: .5rem;
        text-align: left;
    }
    .comment__info {
        align-self: center;
    display: flex;
        flex-grow: 1;
        font-weight: 500;
    }
    @media (max-width: 778px) {
        .comment__info {
        display: block;
        }
    }
    .comment__date {
        font-weight: 300;
    }
    @media (max-width: 778px) {
        .comment__date {
        display: block;
        }
    }
    .comment__divider {
    padding: 0 .5rem;
    }
    @media (max-width: 778px) {
        .comment__divider {
        display: none;
        }
    }
    @media (max-width: 778px) {
        .comment {
            margin-bottom: 3px;
        }
    }
    </style><style type="text/css">
    .new-comment {
    display: flex;
    }
    @media (max-width: 778px) {
        .new-comment {
        display: block;
        }
    }
    .new-comment__avatar {
        text-align: center;
    }
    .new-comment__textarea {
        flex-grow: 7;
    height: 50px;
        margin-bottom: 10px;
        margin-right: 1rem;
    resize: none;
    transition: height .2s ease-in-out;
    }
    @media (max-width: 778px) {
        .new-comment__textarea {
            margin-right: 0;
        }
    }
    .new-comment__textarea--expanded {
    height: 110px;
    resize: vertical;
    }
    .new-comment__container {
    display: flex;
    width: 100%;
    }
    @media (max-width: 778px) {
        .new-comment__container {
        display: block;
        }
    }
    .new-comment__post-button {
        flex-grow: 2;
    }
    </style><style type="text/css">
    .comments-section {
        padding-top: 1rem;
    }
    .comments-login,
    .comments__see-more-button {
        background-color: #367aa3;
    color: #fff;
    cursor: pointer;
    display: block;
        margin-bottom: 2rem;
    padding: 18px;
        text-align: center;
    width: 100%;
    }
    .comments-login .login-text {
    color: #fff;
    cursor: pointer;
    }
    .comments__see-more-button {
        font-size: 14px;
        font-weight: 300;
    }
    .comments-list {
        margin-top: 1rem;
    }
    .comments-list .comments-list-item {
    clear: both;
    display: block;
    padding: 0 0 1rem;
    }
    .top-comment-textarea {
    padding: 20px;
    }
    .preview-comments {
        background-color: #f3f3f3;
    padding: 50px;
    }
    .preview-comments .preview-comments__text {
    color: #232323;
        font-size: 15px;
        font-weight: 400;
        line-height: 22.5px;
    margin: 0;
        text-align: center;
    }
    .comments__wrapper {
    width: 100%;
    }
    .comments__container {
        margin-left: 170px;
        max-width: 744px;
    padding: 10px;
    }
    @media (max-width: 1158px) {
        .comments__container {
        margin: 0;
        padding: 0;
        }
    }
    .comments__count {
        font-size: 16px;
        font-style: italic;
        font-weight: 500;
    }
    </style><style type="text/css">
    .footer {
        align-items: center;
        border-top: 1px solid #ababab;
    display: flex;
        justify-content: space-between;
    margin: 0 auto;
        max-width: 800px;
    padding: 10px 0 15px;
    width: 80%;
    }
    @media (max-width: 778px) {
        .footer {
            align-items: flex-start;
            flex-direction: column;
        }
    }
    .footer__copyright {
    display: none;
    }
    .footer__links {
        align-items: center;
    display: flex;
    }
    @media (max-width: 778px) {
        .footer__links {
            align-items: flex-start;
            flex-direction: column;
        }
    }
    .footer__links__link {
    color: #232323;
        font-size: 12px;
    margin: .25rem .625rem;
    }
.footer__links__link:visited, .footer__links__link:hover, .footer__links__link:focus {
color: #232323;
}
    .footer__powered-by {
    color: #757575;
        font-size: 12px;
    margin: 0;
    padding: .2rem .625rem;
    }
    .footer__powered-by__link {
    color: #367aa3;
    }
    .footer__powered-by__link:visited, .footer__powered-by__link:hover, .footer__powered-by__link:focus {
    color: #367aa3;
    }
    .footer--cio {
    background: #414141;
        margin-top: -11px;
        max-width: none;
    padding: 15px 20px 20px;
    width: 100%;
    }
    @media (max-width: 778px) {
        .footer--cio {
            align-items: center;
            flex-direction: row;
        }
    }
    @media (max-width: 474px) {
        .footer--cio {
            align-items: flex-start;
            flex-direction: column;
        }
    }
    .footer--cio .footer__powered-by {
    color: #fff;
    }
    .footer--cio .footer__powered-by__link {
    color: #b7e2fb;
    }
    .footer--cio .footer__copyright {
    display: none;
    }
    @media (max-width: 778px) {
        .footer--cio .footer__links {
            align-items: center;
            flex-direction: row;
        }
    }
    @media (max-width: 474px) {
        .footer--cio .footer__links {
            align-items: flex-start;
            flex-direction: column;
        }
    }
    .footer--cio .footer__links__link {
    color: #fdfdfd;
        font-size: 15px;
    margin: 0 50px 0 0;
    }
    @media (max-width: 778px) {
        .footer--cio .footer__links__link {
            font-size: 12px;
            margin-right: 30px;
        }
    }
    @media (max-width: 474px) {
        .footer--cio .footer__links__link {
            font-size: 15px;
            margin-bottom: 10px;
        }
    }
    .footer--cio .footer__links__link:visited {
    color: #fdfdfd;
    }
    .footer--cio .footer__links__link:hover, .footer--cio .footer__links__link:focus {
    color: #d1d1d1;
        text-decoration: none;
    }
    </style><style type="text/css">
    .navbar {
        align-items: center;
    background: #fff;
        box-shadow: 0 1px 3px 0 rgba(83, 91, 96, 0.23);
    display: flex;
        flex-direction: row;
        flex-wrap: nowrap;
        min-height: 64px;
    position: fixed;
    top: 0;
    width: 100%;
        z-index: 100;
    }
    @media (max-width: 778px) {
        .navbar {
            justify-content: space-between;
        }
    }
    .no-scroll {
    overflow: hidden;
    }
    .site-title {
    color: #000;
        font-size: 20px;
        font-weight: 500;
    }
    .site-title:visited, .site-title:hover, .site-title:focus {
    color: #000;
        text-decoration: none;
    }
    .site-title__wrapper {
        flex-grow: 0;
        flex-shrink: 0;
        margin-left: 100px;
        max-width: 500px;
    padding: 0 15px;
        -webkit-transform: translateY(-3px);
    transform: translateY(-3px);
    }
    @media (max-width: 1158px) {
        .site-title__wrapper {
            margin-left: 0;
        }
    }
    .site-nav {
    display: flex;
        flex-wrap: wrap;
        margin-left: 24px;
    padding: 8px 0;
    }
    @media (max-width: 778px) {
        .site-nav {
        display: none;
        }
    }
    .site-nav__item {
        border-radius: 2px;
    color: #232323;
    display: block;
        font-size: 13px;
        letter-spacing: .025rem;
        line-height: 1.15;
        margin-bottom: 6px;
        max-width: 240px;
    padding: 8px;
        text-align: center;
        text-transform: uppercase;
    width: auto;
    }
    .site-nav__item:visited, .site-nav__item:hover, .site-nav__item:focus {
    color: #232323;
    outline: none;
        text-decoration: none;
    }
    .site-nav__item:hover, .site-nav__item:focus {
    background: #d1d1d1;
    }
    .site-nav__item--active {
        border-bottom: 2px solid #24afff;
        margin-bottom: 4px;
    }
    .site-nav__item-wrapper {
        margin-right: 18px;
    position: relative;
    }
    .site-nav__item-wrapper:focus .site-nav__sub-items, .site-nav__item-wrapper:focus-within .site-nav__sub-items, .site-nav__item-wrapper:hover .site-nav__sub-items {
    display: block;
    }
    .site-nav__placeholder {
    display: block;
    }
    .site-nav__sub-items {
    background: #fff;
    display: none;
        max-width: 240px;
        min-width: 100%;
    position: absolute;
        text-overflow: ellipsis;
        -webkit-transform: translateY(-4px);
    transform: translateY(-4px);
        z-index: 900;
    }
    .site-nav__sub-item {
    color: #232323;
    display: block;
        font-size: 13px;
        letter-spacing: .025rem;
        line-height: 1.15;
        min-width: 100%;
    padding: 8px;
        text-align: left;
        text-transform: uppercase;
    width: auto;
    }
    .site-nav__sub-item:visited, .site-nav__sub-item:hover, .site-nav__sub-item:focus {
    color: #232323;
    outline: none;
        text-decoration: none;
    }
    .site-nav__sub-item:hover, .site-nav__sub-item:focus {
    background: #d1d1d1;
    }
    .mobile-nav {
        margin-top: 40px;
    }
    .mobile-nav__close-btn {
    background: none;
    border: 0;
    cursor: pointer;
    padding: 18px;
    position: absolute;
    right: 15px;
    top: 15px;
    }
    .mobile-nav__close-btn:focus {
    outline: 2px dotted #757575;
    }
    .mobile-nav__item {
        border-bottom: 2px solid #f3f3f3;
    color: #757575;
    display: block;
    padding: 18px 0 18px 20%;
    }
    .mobile-nav__item:visited, .mobile-nav__item:hover, .mobile-nav__item:focus {
    color: #757575;
    outline: none;
    }
    .mobile-nav__item:focus {
        text-decoration: underline;
    }
    .mobile-nav__item--active {
    background: #edf3f7;
        border-left: 6px solid #00598a;
    }
    .mobile-nav__item--child {
        padding-left: 25%;
    }
    .mobile-nav__overlay {
    background: #fdfdfd;
    bottom: 0;
    height: 100%;
    left: 0;
        overflow-y: scroll;
    position: fixed;
    right: 0;
    top: 0;
    width: 100%;
        z-index: 9999;
    }
    .mobile-nav__site-title {
    color: #00598a;
    display: inline-block;
        font-size: 1.25rem;
        margin-top: 10px;
    padding: 18px;
    width: auto;
    }
    .mobile-nav__site-title:visited, .mobile-nav__site-title:hover, .mobile-nav__site-title:focus {
    color: #00598a;
        text-decoration: none;
    }
    .mobile-nav__site-title__wrapper {
        text-align: center;
    }
    .mobile-nav__toggle {
    background: none;
    border: 0;
        border-radius: 2px;
    color: #232323;
    cursor: pointer;
    flex: 0 0 auto;
        font-size: 1rem;
        margin-right: 10px;
    padding: 18px;
    }
    @media (min-width: 779px) {
        .mobile-nav__toggle {
        display: none;
        }
    }
    .mobile-nav__toggle:hover, .mobile-nav__toggle:focus {
    background: #d1d1d1;
    outline: none;
    }
    </style><style type="text/css">
    .hero {
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    height: 294px;
        margin-bottom: 1rem;
    padding: 3.5rem 0 4.5rem;
    position: relative;
    }
    @media (max-width: 1158px) {
        .hero {
            padding-bottom: 7rem;
        }
    }
    .hero--small {
    height: 220px;
    }
    .hero__contrast-layer {
        background-color: #232323;
    height: 100%;
    position: absolute;
    top: 0;
    width: 100%;
        z-index: 0;
    }
    .hero__title,
    .hero__subtitle {
    color: #fdfdfd;
    display: table;
        font-weight: 300;
    margin: 0 auto;
    position: relative;
        text-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);
        z-index: 1;
    }
    .hero__content {
    width: 100%;
    }
    .hero__breadcrumb {
    height: 53px;
    margin: 0 0 .5rem;
    position: relative;
    }
    .hero__breadcrumb-link {
        background-color: rgba(0, 0, 0, 0.4);
    border: 0;
        border-radius: 27px;
    color: #fdfdfd;
    cursor: pointer;
        font-size: 1rem;
    padding: 12px 30px;
    position: absolute;
        z-index: 1;
    }
    .hero__breadcrumb-link:visited, .hero__breadcrumb-link:hover, .hero__breadcrumb-link:focus {
    color: #fdfdfd;
    }
    .hero__title {
        font-size: 51px;
        font-weight: 400;
        line-height: 1.16;
    }
    @media (min-width: 0) and (max-width: 778px) {
        .hero__title {
            font-size: 42px;
            line-height: 1.2;
        }
    }
    @media (max-width: 474px) {
        .hero__title {
            font-size: 30px;
            line-height: 1.23;
        }
    }
    .hero__subtitle {
        font-size: 22px;
        font-weight: 400;
        line-height: 1.3;
    }
    @media (min-width: 0) and (max-width: 778px) {
        .hero__subtitle {
            font-size: 20px;
            font-weight: 400;
            line-height: 1.32;
        }
    }
    @media (max-width: 474px) {
        .hero__subtitle {
            font-size: 18px;
            font-weight: 400;
            line-height: 1.29;
        }
    }
    </style><style type="text/css">
    .button {
        box-sizing: border-box;
    cursor: pointer;
    display: inline-block;
        font-size: 14px;
        line-height: 1.15;
        max-width: 372px;
        min-width: 140px;
    padding: .8rem 4rem;
        text-align: center;
    width: auto;
    }
.button:focus, .button:hover {
    text-decoration: none;
}
.button:focus {
outline: 2px dotted #757575;
    outline-offset: 2px;
}
    .button--icon {
    background: none;
    border: 0;
        box-sizing: border-box;
    cursor: pointer;
    display: inline-block;
        min-height: auto;
        min-width: auto;
    padding: 0;
    }
    .button--primary {
    background: #00598a;
    border: 2px solid #00598a;
    color: #fff;
    }
    .button--primary:visited {
    color: #fff;
    }
    .button--primary:focus, .button--primary:hover {
    background: #0370b0;
        border-color: #0370b0;
    }
    .button--secondary {
    background: #fff;
    border: 2px solid #00598a;
    color: #00598a;
    }
    .button--secondary:visited {
    color: #00598a;
    }
    .button--secondary:focus, .button--secondary:hover {
    background: #0370b0;
        border-color: #0370b0;
    color: #fff;
    }
    .blog-feed__post {
    border: 1px solid #d1d1d1;
    display: flex;
    margin: 60px auto;
        max-width: 1080px;
    position: relative;
    width: 80%;
    }
    @media (max-width: 778px) {
        .blog-feed__post {
        width: 90%;
        }
    }
    @media (max-width: 474px) {
        .blog-feed__post {
            flex-direction: column;
            text-align: center;
        width: 300px;
        }
    }
    .post__info {
    padding: 20px;
    }
    .post__read-button.button {
    width: 200px;
    }
    @media (max-width: 778px) {
        .post__read-button.button {
        width: 125px;
        }
    }
    @media (max-width: 474px) {
        .post__read-button.button {
        display: block;
            margin-left: auto;
            margin-right: auto;
        width: 90%;
        }
    }
    .post__thumbnail {
    flex: 0 0 auto;
        min-height: 250px;
    width: 250px;
    }
    @media (max-width: 474px) {
        .post__thumbnail {
            min-height: 200px;
        width: 300px;
        }
    }
    .post__timestamp {
    bottom: -55px;
        font-size: 12px;
    left: 0;
    position: absolute;
    }
    .post__title {
        font-size: 23px;
        font-weight: 500;
        letter-spacing: .3px;
        line-height: 1.15;
    margin: 0 0 16px;
    }
    </style><style type="text/css">
    .blog-feed {
        /* ul automatically added by paginator */
    }
    .blog-feed > ul {
    padding: 0;
    }
    .paginate__wrapper {
    display: flex;
    margin: 0 auto;
        max-width: 1080px;
    padding: 0 20px 20px;
    width: 80%;
    }
    .paginate__count {
        margin-right: 20px;
    }
    .paginate__links {
    display: flex;
        list-style: none;
    margin: 2px 0 0;
    padding: 0;
    }
    .paginate__links .prev,
    .paginate__links .next {
    cursor: pointer;
    }
    .paginate__links .prev.disabled,
    .paginate__links .next.disabled {
    cursor: default;
    }
    .paginate__links .prev.disabled a,
    .paginate__links .next.disabled a {
    color: #757575;
        text-decoration: none;
    }
    .paginate__links .prev {
        border-right: 1px solid #d1d1d1;
        margin-right: 10px;
        padding-right: 10px;
    }
    </style><style type="text/css">
    div[class^='ds-col-'] {
    padding: 0;
    }
    </style><style type="text/css">
    .ds-row {
    margin: 0 auto;
        max-width: 1260px;
        padding-bottom: .5rem;
        padding-left: 1.5rem;
        padding-right: 1.5rem;
        padding-top: .5rem;
    }
    .row--full-width {
        max-width: 100%;
        padding-left: 0;
        padding-right: 0;
    }
    .row--full-width .widget-wrapper {
    padding: 0;
    }
    .row--full-width .hero-widget {
        margin-left: 0;
        margin-right: 0;
    }
    .row--full-width .hero-widget__content--center {
    padding: 2rem 3rem 3rem;
    }
    .row--full-width .ds-col-12 {
        padding-left: 0;
        padding-right: 0;
    }
    </style><style type="text/css">
    .author__avatar {
        border-radius: 50%;
        box-shadow: 0 2px 5px 0 rgba(52, 52, 52, 0.5);
    height: 90px;
    margin: 0 auto;
    width: 90px;
    }
    @media (max-width: 1158px) {
        .author__avatar {
        height: 30px;
        margin: 0;
            margin-right: 10px;
        width: 30px;
        }
    }
    .author__link {
    display: block;
    }
    @media (max-width: 1158px) {
        .author__link {
        display: flex;
        }
    }
    .author__name {
    color: #232323;
        font-size: 14px;
        font-style: italic;
        font-weight: 500;
        padding-top: 8px;
        text-align: center;
        text-decoration: none;
        white-space: nowrap;
    }
    </style><style type="text/css">
    .post-likes .ds-tooltip {
    display: flex;
    }
    .post-likes__tooltip {
    left: 15px;
        white-space: normal;
    width: 260px;
        z-index: 0;
    }
    .post-likes__tooltip--active {
    opacity: 1;
        z-index: 10;
    }
    .post-likes__tooltip::after, .post-likes__tooltip::before {
    left: 78%;
    }
    .post-likes__login {
    color: #fff;
    }
    .post-likes__button {
    background: transparent;
    border: 0;
    cursor: pointer;
        float: right;
        font-size: 20px;
    height: 28px;
    padding: 0;
        text-align: center;
    }
    .post-likes__button__icon path {
    fill: #00598a;
    opacity: 1;
    stroke: #00598a;
    }
    .post-likes__button__icon--unliked {
    top: 3px;
    transition: -webkit-transform .2s ease-in-out;
    transition: transform .2s ease-in-out;
    transition: transform .2s ease-in-out, -webkit-transform .2s ease-in-out;
    }
    .post-likes__button__icon--unliked path {
    fill: #fff;
    stroke: #367aa3;
    }
    .post-likes__button__icon--unliked:hover {
        -webkit-transform: scale(1.5);
    transform: scale(1.5);
    }
    .post-likes__count {
        border-left: 1px solid #e2e2e2;
    color: #367aa3;
    display: block;
        font-size: 14px;
        font-weight: 500;
        margin-right: 7px;
        padding-left: 15px;
    position: relative;
        text-align: center;
    top: 2px;
    }
    </style><style type="text/css">
    .button {
        box-sizing: border-box;
    cursor: pointer;
    display: inline-block;
        font-size: 14px;
        line-height: 1.15;
        max-width: 372px;
        min-width: 140px;
    padding: .8rem 4rem;
        text-align: center;
    width: auto;
    }
.button:focus, .button:hover {
    text-decoration: none;
}
.button:focus {
outline: 2px dotted #757575;
    outline-offset: 2px;
}
    .button--icon {
    background: none;
    border: 0;
        box-sizing: border-box;
    cursor: pointer;
    display: inline-block;
        min-height: auto;
        min-width: auto;
    padding: 0;
    }
    .button--primary {
    background: #00598a;
    border: 2px solid #00598a;
    color: #fff;
    }
    .button--primary:visited {
    color: #fff;
    }
    .button--primary:focus, .button--primary:hover {
    background: #0370b0;
        border-color: #0370b0;
    }
    .button--secondary {
    background: #fff;
    border: 2px solid #00598a;
    color: #00598a;
    }
    .button--secondary:visited {
    color: #00598a;
    }
    .button--secondary:focus, .button--secondary:hover {
    background: #0370b0;
        border-color: #0370b0;
    color: #fff;
    }
    .post__hero {
        margin-bottom: 0;
        padding-top: 2rem;
    }
    .post__hero .hero__content {
    margin: 0 auto;
    width: 80%;
    }
    .post__hero .hero__title {
    margin: auto 0;
    }
    .post__content {
        max-width: 737px;
    }
    @media (max-width: 778px) {
        .post__content {
            max-width: 707px;
        }
    }
    .post__container {
    display: flex;
    margin: auto;
        max-width: 1260px;
        padding-top: 2rem;
    }
    @media (max-width: 1158px) {
        .post__container {
        display: block;
        }
    }
    .post__author {
    padding: .5rem 2rem;
    }
    @media (max-width: 778px) {
        .post__author {
        padding: 0 2rem;
        }
    }
    .post__date {
    color: #ababab;
        font-size: 14px;
        font-weight: 500;
    padding: 4px 15px 0 0;
    }
    .post__details {
    display: flex;
        padding-left: 2rem;
    }
    </style><style type="text/css"></style><style type="text/css">.accordion-entry{background-color:#fdfdfd;border-bottom:2px solid #f3f3f3;color:#232323;cursor:pointer;display:block;font-size:0;letter-spacing:0;margin-bottom:0;margin-left:0;margin-right:0;outline:0;padding:0;position:relative}.accordion-entry:focus .accordion-entry__heading{outline:2px dotted #757575;outline-offset:2px}.accordion-entry__panel{background-color:#f3f3f3;font-size:1rem;height:0;letter-spacing:.01579rem;overflow:hidden;padding:0 2rem;transition:height .2s cubic-bezier(.165,.84,.44,1);visibility:hidden;z-index:-1}.accordion-entry__panel__content-wrapper{font-size:16px;font-weight:400;line-height:1.5;margin-bottom:0;padding:2rem 1rem 1.5rem 2rem}.accordion-entry__panel>*{opacity:0;transform:translateY(-75%);transition:transform .3s cubic-bezier(.895,.03,.685,.22)}.accordion-entry__panel--open{color:#757575;cursor:auto;height:100%;opacity:1;padding:0 0 0 1rem;visibility:visible;z-index:1}.accordion-entry__panel--open>*{opacity:1;transform:translateY(0);transition:transform .3s cubic-bezier(.165,.84,.44,1)}.accordion-entry__heading{align-items:center;display:flex;font-size:1rem;letter-spacing:.01579rem;line-height:1;padding:.7rem 2rem .7rem 3rem;position:relative;transition:color .3s cubic-bezier(.23,1,.32,1);z-index:1}.accordion-entry__heading:after,.accordion-entry__heading:before{font-size:1.3rem;font-weight:300;height:auto;left:1rem;line-height:.9;margin-top:-2px;position:absolute;top:50%;transform:translateY(-50%);transform-origin:50% 0;transition:transform .3s cubic-bezier(.77,0,.175,1)}.accordion-entry__heading:before{content:"+";transform:scale(1) translateY(-50%)}.accordion-entry__heading:after{content:"\2013";top:50%;transform:scaleX(0) translateY(-50%)}.accordion-entry__heading:hover:before{transform:scale(1.3) translateY(-50%)}.accordion-entry__heading--open{color:#757575}.accordion-entry__heading--open:before{transform:scale(0)}.accordion-entry__heading--open:after{transform:scaleX(1) translateY(-50%)}.accordion-entry__heading--open:hover:before{transform:scale(0)}.accordion-entry__heading--open:hover:after{transform:scale(1.3) translateY(-50%)}.accordion-widget{list-style-type:none;padding-left:0}.accordion-widget,.blockquote{font-family:IBMPlexSans,Helvetica Neue,Helvetica,Arial,sans-serif}.blockquote__quote{box-sizing:border-box;font-size:27px;letter-spacing:1.35px;line-height:1.32;margin-bottom:16px;padding-bottom:10px}.blockquote__quote:after,.blockquote__quote:before{display:block;font-size:37px;line-height:.5}.blockquote__quote:after{content:"\201D";padding-top:18.5px}.blockquote__quote:before{content:"\201C"}.blockquote__author{box-sizing:border-box;font-size:15px;font-style:italic;letter-spacing:.5px;margin-bottom:16px;margin-top:0}.blockquote--center{text-align:center}.bluepages-widget{background-color:#fdfdfd;border:1px solid #d1d1d1;box-shadow:0 1px 3px rgba(83,91,96,.23);color:#232323;font-family:IBMPlexSans,Helvetica Neue,Helvetica,Arial,sans-serif;font-size:14px;font-weight:300;padding:1.25rem;text-align:center}.bluepages-widget .bp-text{color:#232323;font-size:14px;font-weight:300;letter-spacing:.3px;margin-bottom:2px;margin-top:0}.bluepages-widget__info{line-height:1.5;padding-bottom:.83em;padding-top:10px;word-wrap:break-word}.bluepages-widget__name{color:#025880;font-size:17px;font-weight:500;text-decoration:none}.bluepages-widget__email{color:#00598a;font-size:14px;font-weight:500;text-decoration:none}.bluepages-widget__error{height:160px;padding-top:40px}.bluepages-widget__loader{height:160px;padding-top:60px}.bluepages-widget__avatar{max-height:115px;max-width:115px;-o-object-fit:cover;object-fit:cover;width:100%}.bluepages-widget__avatar--circle{border-radius:50%}.bluepages-widget__heading p{color:#232323;font-size:18px;font-weight:500;letter-spacing:normal;line-height:normal}.bluepages-widget--horizontal .bluepages-widget__heading{text-align:left}.bluepages-widget--horizontal .bluepages-widget__body{align-items:center;display:flex}.bluepages-widget--horizontal .bluepages-widget__avatar{max-width:155px;width:33%}@media (max-width:778px){.bluepages-widget--horizontal .bluepages-widget__avatar{width:15%}}@media (max-width:474px){.bluepages-widget--horizontal .bluepages-widget__avatar{width:25%}}.bluepages-widget--horizontal .bluepages-widget__info{padding-left:15px;padding-right:0;text-align:left;width:66%}.ds-col-7 .bluepages-widget--horizontal .bluepages-widget__heading,.ds-col-8 .bluepages-widget--horizontal .bluepages-widget__heading,.ds-col-9 .bluepages-widget--horizontal .bluepages-widget__heading,.ds-col-10 .bluepages-widget--horizontal .bluepages-widget__heading,.ds-col-11 .bluepages-widget--horizontal .bluepages-widget__heading,.ds-col-12 .bluepages-widget--horizontal .bluepages-widget__heading{text-align:center}.ds-col-7 .bluepages-widget--horizontal .bluepages-widget__body,.ds-col-8 .bluepages-widget--horizontal .bluepages-widget__body,.ds-col-9 .bluepages-widget--horizontal .bluepages-widget__body,.ds-col-10 .bluepages-widget--horizontal .bluepages-widget__body,.ds-col-11 .bluepages-widget--horizontal .bluepages-widget__body,.ds-col-12 .bluepages-widget--horizontal .bluepages-widget__body{justify-content:center}.ds-col-7 .bluepages-widget--horizontal .bluepages-widget__info,.ds-col-8 .bluepages-widget--horizontal .bluepages-widget__info,.ds-col-9 .bluepages-widget--horizontal .bluepages-widget__info,.ds-col-10 .bluepages-widget--horizontal .bluepages-widget__info,.ds-col-11 .bluepages-widget--horizontal .bluepages-widget__info,.ds-col-12 .bluepages-widget--horizontal .bluepages-widget__info{width:auto}.ds-col-7 .bluepages-widget--horizontal .bluepages-widget__avatar,.ds-col-8 .bluepages-widget--horizontal .bluepages-widget__avatar,.ds-col-9 .bluepages-widget--horizontal .bluepages-widget__avatar,.ds-col-10 .bluepages-widget--horizontal .bluepages-widget__avatar,.ds-col-11 .bluepages-widget--horizontal .bluepages-widget__avatar,.ds-col-12 .bluepages-widget--horizontal .bluepages-widget__avatar{max-height:115px;max-width:115px;-o-object-fit:cover;object-fit:cover;width:100%}.button-widget__wrapper{display:flex}.button-widget__wrapper--center{justify-content:center}.button-widget__wrapper--left{justify-content:flex-start}.button-widget__wrapper--right{justify-content:flex-end}.slide{background-position:50%;background-repeat:no-repeat;background-size:cover;color:#1b1b1b;display:block;height:360px}.slide__content{padding:2rem}.slide__content--center{text-align:center}.slide__content--left{float:left}.slide__content--right{float:right}.slide__content--right .slide__heading,.slide__content--right .slide__subtext{text-align:right}.slide__heading{font-size:48px;font-weight:300;letter-spacing:.01579rem;line-height:1.15;margin-bottom:.83rem;margin-top:0}.slide__heading--large{font-size:48px}.slide__heading--small{font-size:32px}.slide__subtext{font-size:24px;padding-bottom:2rem}.slide__subtext--large{font-size:24px}.slide__subtext--small{font-size:16px}.slide--image-left,.slide--image-right{align-items:center;display:flex;flex-direction:row}.slide--image-left .slide__content,.slide--image-right .slide__content{flex:1 1 auto;width:100%}.slide--image-right{flex-direction:row-reverse}.slide__image{flex:0 0 auto;max-height:360px}.slide__image--hidden{margin-right:2rem;visibility:hidden;width:0}.carousel{display:flex;width:100%}.carousel__nav-button{background:none;border:2px solid #757575;border-radius:50%;cursor:pointer;display:block;height:12px;margin:5px;padding:0;width:12px}.carousel__nav-button--active{background:#757575}.carousel__nav-button:focus{outline:2px dotted #232323}.carousel__nav-buttons{display:flex;justify-content:center;margin-top:15px;width:100%}.carousel__next-button,.carousel__prev-button{background:none;border:0;box-sizing:border-box;cursor:pointer;display:block;flex:0 0 auto;outline:none;position:relative;z-index:2}.carousel__next-button:focus,.carousel__next-button:hover,.carousel__prev-button:focus,.carousel__prev-button:hover{background-color:#f1f0ee;border:0}.carousel__next-button:focus .next-button__icon,.carousel__next-button:focus .prev-button__icon,.carousel__next-button:hover .next-button__icon,.carousel__next-button:hover .prev-button__icon,.carousel__prev-button:focus .next-button__icon,.carousel__prev-button:focus .prev-button__icon,.carousel__prev-button:hover .next-button__icon,.carousel__prev-button:hover .prev-button__icon{transform:scale(1.15)}.carousel__next-button:focus,.carousel__prev-button:focus{outline:2px dotted #757575;outline-offset:2px}.carousel__next-button--disabled,.carousel__prev-button--disabled{opacity:0}.carousel__prev-button{transform:rotateY(180deg)}.carousel__slides{display:flex;transition:transform .3s cubic-bezier(.77,0,.175,1)}.carousel__viewport{flex:1 1 auto;overflow:hidden;position:relative}.carousel .next-button__icon,.carousel .prev-button__icon{transition:transform .3s cubic-bezier(.77,0,.175,1)}a.cio-focus-area-link,a.cio-focus-area-link:hover{color:#000;text-decoration:none}.cio-focus-areas-widget{font-family:IBMPlexSans,Helvetica Neue,Helvetica,Arial,sans-serif;letter-spacing:.3px;margin:0 auto;max-width:1540px;padding:40px}.cio-focus-areas-widget__title{font-size:27px;font-weight:600;margin:0;text-align:center}.cio-focus-areas{display:flex;justify-content:space-between;margin-top:40px;width:100%}@media (max-width:778px){.cio-focus-areas{flex-wrap:wrap}}.cio-focus-area{flex:1 1 235px;margin:0 auto;max-width:225px;padding:0 5px}.cio-focus-area__description{font-size:12px;font-weight:400;line-height:1.5;text-align:center}.cio-focus-area__heading{font-size:15px;font-weight:800;line-height:1.4;margin-bottom:10px;text-align:center}.cio-focus-area__icon{display:block;margin:0 auto;padding-top:6px}.cio-focus-area__icon--agile{width:78px}.cio-focus-area__icon--ai{width:65px}.cio-focus-area__icon--culture{padding-top:0;position:relative;top:3px;width:98px}.cio-focus-area__icon--secure{width:53px}.cio-focus-area__icon--ux{padding-top:12px;width:75px}.cio-tool{border-bottom:1px solid #d1d1d1;display:flex;justify-content:space-between;padding:20px 0}.cio-tool:last-of-type{border:0}.cio-tool__description{color:#232323;font-size:19px;letter-spacing:.3px;line-height:1.42}.cio-tool__details{flex:0 1 auto}.cio-tool__early-adopter{background:#edf3f7;border-radius:20px;color:#0370b0;display:block;flex:0 0 auto;font-size:16px;height:35px;letter-spacing:.3px;line-height:2;margin:5px 0 0 10px;padding:0 20px}.cio-tool__header-row{align-items:center;display:flex;flex-wrap:wrap;margin-bottom:16px;margin-top:30px}.cio-tool__icon{display:block;margin:0 auto;width:290px}.cio-tool__icon-wrapper{flex:0 0 auto;padding-left:130px}@media (max-width:1158px){.cio-tool__icon-wrapper{padding-left:40px}}.cio-tool__link{border-radius:9px;display:block;font-size:14px;font-weight:600;margin:30px 0 0;padding:15px 30px;text-transform:none;width:-webkit-fit-content;width:-moz-fit-content;width:fit-content}.cio-tool__other-links{margin-top:60px}.cio-tool__other-links,.cio-tool__support-link,.cio-tool__web-link{align-items:center;display:flex}.cio-tool__support-link:hover,.cio-tool__web-link:hover{color:#232323;-webkit-text-decoration-color:#232323;text-decoration-color:#232323}.cio-tool__support-link:visited,.cio-tool__web-link:visited{color:#232323}.cio-tool__title{color:#232323;font-size:37px;font-stretch:normal;font-style:normal;font-weight:300;letter-spacing:.3px;line-height:1.16;margin:0}.cio-tool__web-link{margin-right:30px}.support-link__text,.web-link__text{color:#232323;font-size:11px;letter-spacing:.3px;line-height:1.45;margin-left:3px}.support-link__icon{display:block;height:25px;transform:translateY(-2px);width:30px}.web-link__icon{color:#232323;font-size:15px;letter-spacing:.5px;margin-right:6px}.cio-tools{background-color:#fdfdfd;border:1px solid #d1d1d1;box-shadow:0 3px 6px rgba(83,91,96,.23);margin:75px auto;max-width:1400px;padding:0 60px;position:relative;width:90%}@media (max-width:1158px){.cio-tools{padding:0 65px}}.cio-tools__label{background:#5b5b5b;border-radius:20px;color:#fdfdfd;display:block;font-size:15px;font-weight:500;padding:8px 20px;position:absolute;top:-35px;transform:translateX(-10px)}.cio-tool-accordion{display:none}@media (max-width:1039px){.cio-tool-accordion{display:block}}.cio-tool-accordion .accordion-entry__panel{background:#fdfdfd}.cio-tool-accordion .accordion-entry__panel__content-wrapper{padding:0}.cio-tool-accordion .cio-tools{border:0;box-shadow:none;margin:0;padding:0 10px;width:100%}.cio-tool-accordion .cio-tool{padding:40px 0}@media (max-width:474px){.cio-tool-accordion .cio-tool{flex-direction:column}}.cio-tool-accordion .cio-tool__details{flex-grow:1;padding-left:20px}.cio-tool-accordion .cio-tool__icon{width:120px}@media (max-width:474px){.cio-tool-accordion .cio-tool__icon{margin:0 0 7px}}.cio-tool-accordion .cio-tool__icon-wrapper{padding-left:0}.cio-tool-accordion .cio-tool__title{font-size:22px;font-weight:400;line-height:1.4}.cio-tool-accordion .cio-tool__description{font-size:15px}.cio-tool-tabs{background:#f3f3f3;display:flex;justify-content:center;width:100%}@media (max-width:1039px){.cio-tool-tabs{display:none}}.cio-tool-tabs-widget{font-family:IBMPlexSans,Helvetica Neue,Helvetica,Arial,sans-serif;letter-spacing:.3px;margin-top:-1rem}.cio-tool-tabs--docked{position:fixed;top:62px;z-index:100}.cio-tool-tabs--docked+.cio-tool-tab-panels{padding-top:70px}.cio-tool-tab{align-items:center;background:none;border-bottom-color:#f3f3f3;border-width:0 0 2.5px;box-sizing:border-box;cursor:pointer;display:flex;flex:1 1 0;height:70px;justify-content:center;max-width:265px;padding:10px}.cio-tool-tab:focus{outline:2px dotted #757575;outline-offset:2px}.cio-tool-tab--active{border-bottom-color:#0370b0;cursor:default}.cio-tool-tab--active .cio-tool-tab__title{color:#0370b0}.cio-tool-tab__icon{margin:0 10px 0 0;width:30px}.cio-tool-tab__title{font-size:15px;margin:0;text-align:center}@media (max-width:1039px){.cio-tool-tab-panels{display:none}}.cio-help-bar-widget{background:#eff4f4;display:flex;margin-top:-19px;padding:20px 0}@media screen and (max-width:750px){.cio-help-bar-widget{display:block;margin:0 auto}}.help-bar{display:flex;width:50%}@media screen and (max-width:1050px){.help-bar{display:block;width:100%}}@media screen and (max-width:750px){.help-bar--left{margin-bottom:15px}}.help-bar__content{display:flex;margin:0 auto;text-align:center}@media screen and (max-width:1050px){.help-bar__content{display:block;width:100%}}.help-bar__text{color:#363636;font-family:IBM Plex Sans;font-size:19px;font-weight:700;letter-spacing:-.1px;line-height:27px;margin:auto}.help-bar__img{height:48px;padding-left:15px;width:185px}@media screen and (max-width:1050px){.help-bar__img{margin-top:10px;padding-left:0}}@font-face{font-family:VideoJS;src:url(font/VideoJS.eot?#iefix) format("eot")}@font-face{font-family:VideoJS;src:url(data:application/font-woff;charset=utf-8;base64,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) format("woff"),url(data:application/x-font-ttf;charset=utf-8;base64,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AG8AbgB0AGUAbABsAG8AIABwAHIAbwBqAGUAYwB0AC4AaAB0AHQAcAA6AC8ALwBmAG8AbgB0AGUAbABsAG8ALgBjAG8AbQAAAAIAAAAAAAAAEQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAIQECAQMBBAEFAQYBBwEIAQkBCgELAQwBDQEOAQ8BEAERARIBEwEUARUBFgEXARgBGQEaARsBHAEdAR4BHwEgASEBIgAEcGxheQtwbGF5LWNpcmNsZQVwYXVzZQt2b2x1bWUtbXV0ZQp2b2x1bWUtbG93CnZvbHVtZS1taWQLdm9sdW1lLWhpZ2gQZnVsbHNjcmVlbi1lbnRlcg9mdWxsc2NyZWVuLWV4aXQGc3F1YXJlB3NwaW5uZXIJc3VidGl0bGVzCGNhcHRpb25zCGNoYXB0ZXJzBXNoYXJlA2NvZwZjaXJjbGUOY2lyY2xlLW91dGxpbmUTY2lyY2xlLWlubmVyLWNpcmNsZQJoZAZjYW5jZWwGcmVwbGF5CGZhY2Vib29rBWdwbHVzCGxpbmtlZGluB3R3aXR0ZXIGdHVtYmxyCXBpbnRlcmVzdBFhdWRpby1kZXNjcmlwdGlvbgVhdWRpbwluZXh0LWl0ZW0NcHJldmlvdXMtaXRlbQAAAAA=) format("truetype");font-weight:400;font-style:normal}.video-js .vjs-big-play-button .vjs-icon-placeholder:before,.video-js .vjs-play-control .vjs-icon-placeholder,.vjs-icon-play{font-family:VideoJS;font-weight:400;font-style:normal}.video-js .vjs-big-play-button .vjs-icon-placeholder:before,.video-js .vjs-play-control .vjs-icon-placeholder:before,.vjs-icon-play:before{content:"\F101"}.vjs-icon-play-circle{font-family:VideoJS;font-weight:400;font-style:normal}.vjs-icon-play-circle:before{content:"\F102"}.video-js .vjs-play-control.vjs-playing .vjs-icon-placeholder,.vjs-icon-pause{font-family:VideoJS;font-weight:400;font-style:normal}.video-js .vjs-play-control.vjs-playing .vjs-icon-placeholder:before,.vjs-icon-pause:before{content:"\F103"}.video-js .vjs-mute-control.vjs-vol-0 .vjs-icon-placeholder,.vjs-icon-volume-mute{font-family:VideoJS;font-weight:400;font-style:normal}.video-js .vjs-mute-control.vjs-vol-0 .vjs-icon-placeholder:before,.vjs-icon-volume-mute:before{content:"\F104"}.video-js .vjs-mute-control.vjs-vol-1 .vjs-icon-placeholder,.vjs-icon-volume-low{font-family:VideoJS;font-weight:400;font-style:normal}.video-js .vjs-mute-control.vjs-vol-1 .vjs-icon-placeholder:before,.vjs-icon-volume-low:before{content:"\F105"}.video-js .vjs-mute-control.vjs-vol-2 .vjs-icon-placeholder,.vjs-icon-volume-mid{font-family:VideoJS;font-weight:400;font-style:normal}.video-js .vjs-mute-control.vjs-vol-2 .vjs-icon-placeholder:before,.vjs-icon-volume-mid:before{content:"\F106"}.video-js .vjs-mute-control .vjs-icon-placeholder,.vjs-icon-volume-high{font-family:VideoJS;font-weight:400;font-style:normal}.video-js .vjs-mute-control .vjs-icon-placeholder:before,.vjs-icon-volume-high:before{content:"\F107"}.video-js .vjs-fullscreen-control .vjs-icon-placeholder,.vjs-icon-fullscreen-enter{font-family:VideoJS;font-weight:400;font-style:normal}.video-js .vjs-fullscreen-control .vjs-icon-placeholder:before,.vjs-icon-fullscreen-enter:before{content:"\F108"}.video-js.vjs-fullscreen .vjs-fullscreen-control .vjs-icon-placeholder,.vjs-icon-fullscreen-exit{font-family:VideoJS;font-weight:400;font-style:normal}.video-js.vjs-fullscreen .vjs-fullscreen-control .vjs-icon-placeholder:before,.vjs-icon-fullscreen-exit:before{content:"\F109"}.vjs-icon-square{font-family:VideoJS;font-weight:400;font-style:normal}.vjs-icon-square:before{content:"\F10A"}.vjs-icon-spinner{font-family:VideoJS;font-weight:400;font-style:normal}.vjs-icon-spinner:before{content:"\F10B"}.video-js.video-js:lang(en-AU) .vjs-subs-caps-button .vjs-icon-placeholder,.video-js.video-js:lang(en-GB) .vjs-subs-caps-button .vjs-icon-placeholder,.video-js.video-js:lang(en-IE) .vjs-subs-caps-button .vjs-icon-placeholder,.video-js.video-js:lang(en-NZ) .vjs-subs-caps-button .vjs-icon-placeholder,.video-js .vjs-subs-caps-button .vjs-icon-placeholder,.video-js .vjs-subtitles-button .vjs-icon-placeholder,.vjs-icon-subtitles{font-family:VideoJS;font-weight:400;font-style:normal}.video-js.video-js:lang(en-AU) .vjs-subs-caps-button .vjs-icon-placeholder:before,.video-js.video-js:lang(en-GB) .vjs-subs-caps-button .vjs-icon-placeholder:before,.video-js.video-js:lang(en-IE) .vjs-subs-caps-button .vjs-icon-placeholder:before,.video-js.video-js:lang(en-NZ) .vjs-subs-caps-button .vjs-icon-placeholder:before,.video-js .vjs-subs-caps-button .vjs-icon-placeholder:before,.video-js .vjs-subtitles-button .vjs-icon-placeholder:before,.vjs-icon-subtitles:before{content:"\F10C"}.video-js .vjs-captions-button .vjs-icon-placeholder,.video-js:lang(en) .vjs-subs-caps-button .vjs-icon-placeholder,.video-js:lang(fr-CA) .vjs-subs-caps-button .vjs-icon-placeholder,.vjs-icon-captions{font-family:VideoJS;font-weight:400;font-style:normal}.video-js .vjs-captions-button .vjs-icon-placeholder:before,.video-js:lang(en) .vjs-subs-caps-button .vjs-icon-placeholder:before,.video-js:lang(fr-CA) .vjs-subs-caps-button .vjs-icon-placeholder:before,.vjs-icon-captions:before{content:"\F10D"}.video-js .vjs-chapters-button .vjs-icon-placeholder,.vjs-icon-chapters{font-family:VideoJS;font-weight:400;font-style:normal}.video-js .vjs-chapters-button .vjs-icon-placeholder:before,.vjs-icon-chapters:before{content:"\F10E"}.vjs-icon-share{font-family:VideoJS;font-weight:400;font-style:normal}.vjs-icon-share:before{content:"\F10F"}.vjs-icon-cog{font-family:VideoJS;font-weight:400;font-style:normal}.vjs-icon-cog:before{content:"\F110"}.video-js .vjs-play-progress,.video-js .vjs-volume-level,.vjs-icon-circle{font-family:VideoJS;font-weight:400;font-style:normal}.video-js .vjs-play-progress:before,.video-js .vjs-volume-level:before,.vjs-icon-circle:before{content:"\F111"}.vjs-icon-circle-outline{font-family:VideoJS;font-weight:400;font-style:normal}.vjs-icon-circle-outline:before{content:"\F112"}.vjs-icon-circle-inner-circle{font-family:VideoJS;font-weight:400;font-style:normal}.vjs-icon-circle-inner-circle:before{content:"\F113"}.vjs-icon-hd{font-family:VideoJS;font-weight:400;font-style:normal}.vjs-icon-hd:before{content:"\F114"}.video-js .vjs-control.vjs-close-button .vjs-icon-placeholder,.vjs-icon-cancel{font-family:VideoJS;font-weight:400;font-style:normal}.video-js .vjs-control.vjs-close-button .vjs-icon-placeholder:before,.vjs-icon-cancel:before{content:"\F115"}.video-js .vjs-play-control.vjs-ended .vjs-icon-placeholder,.vjs-icon-replay{font-family:VideoJS;font-weight:400;font-style:normal}.video-js .vjs-play-control.vjs-ended .vjs-icon-placeholder:before,.vjs-icon-replay:before{content:"\F116"}.vjs-icon-facebook{font-family:VideoJS;font-weight:400;font-style:normal}.vjs-icon-facebook:before{content:"\F117"}.vjs-icon-gplus{font-family:VideoJS;font-weight:400;font-style:normal}.vjs-icon-gplus:before{content:"\F118"}.vjs-icon-linkedin{font-family:VideoJS;font-weight:400;font-style:normal}.vjs-icon-linkedin:before{content:"\F119"}.vjs-icon-twitter{font-family:VideoJS;font-weight:400;font-style:normal}.vjs-icon-twitter:before{content:"\F11A"}.vjs-icon-tumblr{font-family:VideoJS;font-weight:400;font-style:normal}.vjs-icon-tumblr:before{content:"\F11B"}.vjs-icon-pinterest{font-family:VideoJS;font-weight:400;font-style:normal}.vjs-icon-pinterest:before{content:"\F11C"}.video-js .vjs-descriptions-button .vjs-icon-placeholder,.vjs-icon-audio-description{font-family:VideoJS;font-weight:400;font-style:normal}.video-js .vjs-descriptions-button .vjs-icon-placeholder:before,.vjs-icon-audio-description:before{content:"\F11D"}.video-js .vjs-audio-button .vjs-icon-placeholder,.vjs-icon-audio{font-family:VideoJS;font-weight:400;font-style:normal}.video-js .vjs-audio-button .vjs-icon-placeholder:before,.vjs-icon-audio:before{content:"\F11E"}.vjs-icon-next-item{font-family:VideoJS;font-weight:400;font-style:normal}.vjs-icon-next-item:before{content:"\F11F"}.vjs-icon-previous-item{font-family:VideoJS;font-weight:400;font-style:normal}.vjs-icon-previous-item:before{content:"\F120"}.video-js{display:block;vertical-align:top;box-sizing:border-box;color:#fff;background-color:#000;position:relative;padding:0;font-size:10px;line-height:1;font-weight:400;font-style:normal;font-family:Arial,Helvetica,sans-serif;word-break:normal}.video-js:-moz-full-screen{position:absolute}.video-js:-webkit-full-screen{width:100%!important;height:100%!important}.video-js[tabindex="-1"]{outline:none}.video-js *,.video-js :after,.video-js :before{box-sizing:inherit}.video-js ul{font-family:inherit;font-size:inherit;line-height:inherit;list-style-position:outside;margin:0}.video-js.vjs-4-3,.video-js.vjs-16-9,.video-js.vjs-fluid{width:100%;max-width:100%;height:0}.video-js.vjs-16-9{padding-top:56.25%}.video-js.vjs-4-3{padding-top:75%}.video-js.vjs-fill,.video-js .vjs-tech{width:100%;height:100%}.video-js .vjs-tech{position:absolute;top:0;left:0}body.vjs-full-window{padding:0;margin:0;height:100%;overflow-y:auto}.vjs-full-window .video-js.vjs-fullscreen{position:fixed;overflow:hidden;z-index:1000;left:0;top:0;bottom:0;right:0}.video-js.vjs-fullscreen{width:100%!important;height:100%!important;padding-top:0!important}.video-js.vjs-fullscreen.vjs-user-inactive{cursor:none}.vjs-hidden{display:none!important}.vjs-disabled{opacity:.5;cursor:default}.video-js .vjs-offscreen{height:1px;left:-9999px;position:absolute;top:0;width:1px}.vjs-lock-showing{display:block!important;opacity:1;visibility:visible}.vjs-no-js{padding:20px;color:#fff;background-color:#000;font-size:18px;font-family:Arial,Helvetica,sans-serif;text-align:center;width:300px;height:150px;margin:0 auto}.vjs-no-js a,.vjs-no-js a:visited{color:#66a8cc}.video-js .vjs-big-play-button{font-size:3em;line-height:1.5em;height:1.5em;width:3em;display:block;position:absolute;top:10px;left:10px;padding:0;cursor:pointer;opacity:1;border:.06666em solid #fff;background-color:#2b333f;background-color:rgba(43,51,63,.7);border-radius:.3em;transition:all .4s}.vjs-big-play-centered .vjs-big-play-button{top:50%;left:50%;margin-top:-.75em;margin-left:-1.5em}.video-js .vjs-big-play-button:focus,.video-js:hover .vjs-big-play-button{border-color:#fff;background-color:#73859f;background-color:rgba(115,133,159,.5);transition:all 0s}.vjs-controls-disabled .vjs-big-play-button,.vjs-error .vjs-big-play-button,.vjs-has-started .vjs-big-play-button,.vjs-using-native-controls .vjs-big-play-button{display:none}.vjs-has-started.vjs-paused.vjs-show-big-play-button-on-pause .vjs-big-play-button{display:block}.video-js button{background:none;border:none;color:inherit;display:inline-block;overflow:visible;font-size:inherit;line-height:inherit;text-transform:none;text-decoration:none;transition:none;-webkit-appearance:none;-moz-appearance:none;appearance:none}.vjs-control .vjs-button{width:100%;height:100%}.video-js .vjs-control.vjs-close-button{cursor:pointer;height:3em;position:absolute;right:0;top:.5em;z-index:2}.video-js .vjs-modal-dialog{background:rgba(0,0,0,.8);background:linear-gradient(180deg,rgba(0,0,0,.8),hsla(0,0%,100%,0));overflow:auto;box-sizing:content-box}.video-js .vjs-modal-dialog>*{box-sizing:border-box}.vjs-modal-dialog .vjs-modal-dialog-content{font-size:1.2em;line-height:1.5;padding:20px 24px;z-index:1}.vjs-menu-button{cursor:pointer}.vjs-menu-button.vjs-disabled{cursor:default}.vjs-workinghover .vjs-menu-button.vjs-disabled:hover .vjs-menu{display:none}.vjs-menu .vjs-menu-content{display:block;padding:0;margin:0;font-family:Arial,Helvetica,sans-serif;overflow:auto;box-sizing:content-box}.vjs-menu .vjs-menu-content>*{box-sizing:border-box}.vjs-scrubbing .vjs-menu-button:hover .vjs-menu{display:none}.vjs-menu li{list-style:none;margin:0;padding:.2em 0;line-height:1.4em;font-size:1.2em;text-align:center;text-transform:lowercase}.vjs-menu li.vjs-menu-item:focus,.vjs-menu li.vjs-menu-item:hover{background-color:#73859f;background-color:rgba(115,133,159,.5)}.vjs-menu li.vjs-selected,.vjs-menu li.vjs-selected:focus,.vjs-menu li.vjs-selected:hover{background-color:#fff;color:#2b333f}.vjs-menu li.vjs-menu-title{text-align:center;text-transform:uppercase;font-size:1em;line-height:2em;padding:0;margin:0 0 .3em;font-weight:700;cursor:default}.vjs-menu-button-popup .vjs-menu{display:none;position:absolute;bottom:0;width:10em;left:-3em;height:0;margin-bottom:1.5em;border-top-color:rgba(43,51,63,.7)}.vjs-menu-button-popup .vjs-menu .vjs-menu-content{background-color:#2b333f;background-color:rgba(43,51,63,.7);position:absolute;width:100%;bottom:1.5em;max-height:15em}.vjs-menu-button-popup .vjs-menu.vjs-lock-showing,.vjs-workinghover .vjs-menu-button-popup:hover .vjs-menu{display:block}.video-js .vjs-menu-button-inline{transition:all .4s;overflow:hidden}.video-js .vjs-menu-button-inline:before{width:2.222222222em}.video-js .vjs-menu-button-inline.vjs-slider-active,.video-js .vjs-menu-button-inline:focus,.video-js .vjs-menu-button-inline:hover,.video-js.vjs-no-flex .vjs-menu-button-inline{width:12em}.vjs-menu-button-inline .vjs-menu{opacity:0;height:100%;width:auto;position:absolute;left:4em;top:0;padding:0;margin:0;transition:all .4s}.vjs-menu-button-inline.vjs-slider-active .vjs-menu,.vjs-menu-button-inline:focus .vjs-menu,.vjs-menu-button-inline:hover .vjs-menu{display:block;opacity:1}.vjs-no-flex .vjs-menu-button-inline .vjs-menu{display:block;opacity:1;position:relative;width:auto}.vjs-no-flex .vjs-menu-button-inline.vjs-slider-active .vjs-menu,.vjs-no-flex .vjs-menu-button-inline:focus .vjs-menu,.vjs-no-flex .vjs-menu-button-inline:hover .vjs-menu{width:auto}.vjs-menu-button-inline .vjs-menu-content{width:auto;height:100%;margin:0;overflow:hidden}.video-js .vjs-control-bar{display:none;width:100%;position:absolute;bottom:0;left:0;right:0;height:3em;background-color:#2b333f;background-color:rgba(43,51,63,.7)}.vjs-has-started .vjs-control-bar{display:flex;visibility:visible;opacity:1;transition:visibility .1s,opacity .1s}.vjs-has-started.vjs-user-inactive.vjs-playing .vjs-control-bar{visibility:visible;opacity:0;transition:visibility 1s,opacity 1s}.vjs-controls-disabled .vjs-control-bar,.vjs-error .vjs-control-bar,.vjs-using-native-controls .vjs-control-bar{display:none!important}.vjs-audio.vjs-has-started.vjs-user-inactive.vjs-playing .vjs-control-bar{opacity:1;visibility:visible}.vjs-has-started.vjs-no-flex .vjs-control-bar{display:table}.video-js .vjs-control{position:relative;text-align:center;margin:0;padding:0;height:100%;width:4em;flex:none}.vjs-button>.vjs-icon-placeholder:before{font-size:1.8em;line-height:1.67}.video-js .vjs-control:focus,.video-js .vjs-control:focus:before,.video-js .vjs-control:hover:before{text-shadow:0 0 1em #fff}.video-js .vjs-control-text{border:0;clip:rect(0 0 0 0);height:1px;overflow:hidden;padding:0;position:absolute;width:1px}.vjs-no-flex .vjs-control{display:table-cell;vertical-align:middle}.video-js .vjs-custom-control-spacer{display:none}.video-js .vjs-progress-control{cursor:pointer;flex:auto;display:flex;align-items:center;min-width:4em;touch-action:none}.video-js .vjs-progress-control.disabled{cursor:default}.vjs-live .vjs-progress-control{display:none}.vjs-no-flex .vjs-progress-control{width:auto}.video-js .vjs-progress-holder{flex:auto;transition:all .2s;height:.3em}.video-js .vjs-progress-control .vjs-progress-holder{margin:0 10px}.video-js .vjs-progress-control:hover .vjs-progress-holder{font-size:1.6666666666666667em}.video-js .vjs-progress-control:hover .vjs-progress-holder.disabled{font-size:1em}.video-js .vjs-progress-holder .vjs-load-progress,.video-js .vjs-progress-holder .vjs-load-progress div,.video-js .vjs-progress-holder .vjs-play-progress{position:absolute;display:block;height:100%;margin:0;padding:0;width:0;left:0;top:0}.video-js .vjs-play-progress{background-color:#fff}.video-js .vjs-play-progress:before{font-size:.9em;position:absolute;right:-.5em;top:-.333333333333333em;z-index:1}.video-js .vjs-load-progress{background:#bfc7d3;background:rgba(115,133,159,.5)}.video-js .vjs-load-progress div{background:#fff;background:rgba(115,133,159,.75)}.video-js .vjs-time-tooltip{background-color:#fff;background-color:hsla(0,0%,100%,.8);border-radius:.3em;color:#000;float:right;font-family:Arial,Helvetica,sans-serif;font-size:1em;padding:6px 8px 8px;pointer-events:none;position:absolute;top:-3.4em;visibility:hidden;z-index:1}.video-js .vjs-progress-holder:focus .vjs-time-tooltip{display:none}.video-js .vjs-progress-control:hover .vjs-progress-holder:focus .vjs-time-tooltip,.video-js .vjs-progress-control:hover .vjs-time-tooltip{display:block;font-size:.6em;visibility:visible}.video-js .vjs-progress-control.disabled:hover .vjs-time-tooltip{font-size:1em}.video-js .vjs-progress-control .vjs-mouse-display{display:none;position:absolute;width:1px;height:100%;background-color:#000;z-index:1}.vjs-no-flex .vjs-progress-control .vjs-mouse-display{z-index:0}.video-js .vjs-progress-control:hover .vjs-mouse-display{display:block}.video-js.vjs-user-inactive .vjs-progress-control .vjs-mouse-display{visibility:hidden;opacity:0;transition:visibility 1s,opacity 1s}.video-js.vjs-user-inactive.vjs-no-flex .vjs-progress-control .vjs-mouse-display{display:none}.vjs-mouse-display .vjs-time-tooltip{color:#fff;background-color:#000;background-color:rgba(0,0,0,.8)}.video-js .vjs-slider{position:relative;cursor:pointer;padding:0;margin:0 .45em;-webkit-touch-callout:none;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;background-color:#73859f;background-color:rgba(115,133,159,.5)}.video-js .vjs-slider.disabled{cursor:default}.video-js .vjs-slider:focus{text-shadow:0 0 1em #fff;box-shadow:0 0 1em #fff}.video-js .vjs-mute-control{cursor:pointer;flex:none;padding-left:2em;padding-right:2em;padding-bottom:3em}.video-js .vjs-volume-control{cursor:pointer;margin-right:1em;display:flex}.video-js .vjs-volume-control.vjs-volume-horizontal{width:5em}.video-js .vjs-volume-panel .vjs-volume-control{visibility:visible;opacity:0;width:1px;height:1px;margin-left:-1px}.vjs-no-flex .vjs-volume-panel .vjs-volume-control.vjs-volume-vertical,.vjs-no-flex .vjs-volume-panel .vjs-volume-control.vjs-volume-vertical .vjs-volume-bar,.vjs-no-flex .vjs-volume-panel .vjs-volume-control.vjs-volume-vertical .vjs-volume-level{-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)"}.video-js .vjs-volume-panel{transition:width 1s}.video-js .vjs-volume-panel .vjs-mute-control:hover~.vjs-volume-control,.video-js .vjs-volume-panel .vjs-volume-control.vjs-slider-active,.video-js .vjs-volume-panel .vjs-volume-control:active,.video-js .vjs-volume-panel .vjs-volume-control:hover,.video-js .vjs-volume-panel:active .vjs-volume-control,.video-js .vjs-volume-panel:focus .vjs-volume-control,.video-js .vjs-volume-panel:hover .vjs-volume-control{visibility:visible;opacity:1;position:relative;transition:visibility .1s,opacity .1s,height .1s,width .1s,left 0s,top 0s}.video-js .vjs-volume-panel .vjs-mute-control:hover~.vjs-volume-control.vjs-volume-horizontal,.video-js .vjs-volume-panel .vjs-volume-control.vjs-slider-active.vjs-volume-horizontal,.video-js .vjs-volume-panel .vjs-volume-control:active.vjs-volume-horizontal,.video-js .vjs-volume-panel .vjs-volume-control:hover.vjs-volume-horizontal,.video-js .vjs-volume-panel:active .vjs-volume-control.vjs-volume-horizontal,.video-js .vjs-volume-panel:focus .vjs-volume-control.vjs-volume-horizontal,.video-js .vjs-volume-panel:hover .vjs-volume-control.vjs-volume-horizontal{width:5em;height:3em}.video-js .vjs-volume-panel .vjs-mute-control:hover~.vjs-volume-control.vjs-volume-vertical,.video-js .vjs-volume-panel .vjs-mute-control:hover~.vjs-volume-control.vjs-volume-vertical .vjs-volume-bar,.video-js .vjs-volume-panel .vjs-mute-control:hover~.vjs-volume-control.vjs-volume-vertical .vjs-volume-level,.video-js .vjs-volume-panel .vjs-volume-control.vjs-slider-active.vjs-volume-vertical,.video-js .vjs-volume-panel .vjs-volume-control.vjs-slider-active.vjs-volume-vertical .vjs-volume-bar,.video-js .vjs-volume-panel .vjs-volume-control.vjs-slider-active.vjs-volume-vertical .vjs-volume-level,.video-js .vjs-volume-panel .vjs-volume-control:active.vjs-volume-vertical,.video-js .vjs-volume-panel .vjs-volume-control:active.vjs-volume-vertical .vjs-volume-bar,.video-js .vjs-volume-panel .vjs-volume-control:active.vjs-volume-vertical .vjs-volume-level,.video-js .vjs-volume-panel .vjs-volume-control:hover.vjs-volume-vertical,.video-js .vjs-volume-panel .vjs-volume-control:hover.vjs-volume-vertical .vjs-volume-bar,.video-js .vjs-volume-panel .vjs-volume-control:hover.vjs-volume-vertical .vjs-volume-level,.video-js .vjs-volume-panel:active .vjs-volume-control.vjs-volume-vertical,.video-js .vjs-volume-panel:active .vjs-volume-control.vjs-volume-vertical .vjs-volume-bar,.video-js .vjs-volume-panel:active .vjs-volume-control.vjs-volume-vertical .vjs-volume-level,.video-js .vjs-volume-panel:focus .vjs-volume-control.vjs-volume-vertical,.video-js .vjs-volume-panel:focus .vjs-volume-control.vjs-volume-vertical .vjs-volume-bar,.video-js .vjs-volume-panel:focus .vjs-volume-control.vjs-volume-vertical .vjs-volume-level,.video-js .vjs-volume-panel:hover .vjs-volume-control.vjs-volume-vertical,.video-js .vjs-volume-panel:hover .vjs-volume-control.vjs-volume-vertical .vjs-volume-bar,.video-js .vjs-volume-panel:hover .vjs-volume-control.vjs-volume-vertical .vjs-volume-level{-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=100)"}.video-js .vjs-volume-panel.vjs-volume-panel-horizontal.vjs-slider-active,.video-js .vjs-volume-panel.vjs-volume-panel-horizontal:active,.video-js .vjs-volume-panel.vjs-volume-panel-horizontal:hover{width:9em;transition:width .1s}.video-js .vjs-volume-panel.vjs-volume-panel-horizontal.vjs-mute-toggle-only{width:4em}.video-js .vjs-volume-panel .vjs-volume-control.vjs-volume-vertical{height:8em;width:3em;left:-3.5em;transition:visibility 1s,opacity 1s,height 1s 1s,width 1s 1s,left 1s 1s,top 1s 1s}.video-js .vjs-volume-panel .vjs-volume-control.vjs-volume-horizontal{transition:visibility 1s,opacity 1s,height 1s 1s,width 1s,left 1s 1s,top 1s 1s}.video-js.vjs-no-flex .vjs-volume-panel .vjs-volume-control.vjs-volume-horizontal{width:5em;height:3em;visibility:visible;opacity:1;position:relative;transition:none}.video-js.vjs-no-flex .vjs-volume-control.vjs-volume-vertical,.video-js.vjs-no-flex .vjs-volume-panel .vjs-volume-control.vjs-volume-vertical{position:absolute;bottom:3em;left:.5em}.video-js .vjs-volume-panel{display:flex}.video-js .vjs-volume-bar{margin:1.35em .45em}.vjs-volume-bar.vjs-slider-horizontal{width:5em;height:.3em}.vjs-volume-bar.vjs-slider-vertical{width:.3em;height:5em;margin:1.35em auto}.video-js .vjs-volume-level{position:absolute;bottom:0;left:0;background-color:#fff}.video-js .vjs-volume-level:before{position:absolute;font-size:.9em}.vjs-slider-vertical .vjs-volume-level{width:.3em}.vjs-slider-vertical .vjs-volume-level:before{top:-.5em;left:-.3em}.vjs-slider-horizontal .vjs-volume-level{height:.3em}.vjs-slider-horizontal .vjs-volume-level:before{top:-.3em;right:-.5em}.video-js .vjs-volume-panel.vjs-volume-panel-vertical{width:4em}.vjs-volume-bar.vjs-slider-vertical .vjs-volume-level{height:100%}.vjs-volume-bar.vjs-slider-horizontal .vjs-volume-level{width:100%}.video-js .vjs-volume-vertical{width:3em;height:8em;bottom:8em;background-color:#2b333f;background-color:rgba(43,51,63,.7)}.video-js .vjs-volume-horizontal .vjs-menu{left:-2em}.vjs-poster{display:inline-block;background-repeat:no-repeat;background-position:50% 50%;background-size:contain;background-color:#000;cursor:pointer;margin:0;position:absolute;top:0;right:0;bottom:0;left:0;height:100%}.vjs-poster,.vjs-poster img{vertical-align:middle;padding:0}.vjs-poster img{display:block;margin:0 auto;max-height:100%;width:100%}.vjs-has-started .vjs-poster{display:none}.vjs-audio.vjs-has-started .vjs-poster{display:block}.vjs-using-native-controls .vjs-poster{display:none}.video-js .vjs-live-control{display:flex;align-items:flex-start;flex:auto;font-size:1em;line-height:3em}.vjs-no-flex .vjs-live-control{display:table-cell;width:auto;text-align:left}.video-js .vjs-time-control{flex:none;font-size:1em;line-height:3em;min-width:2em;width:auto;padding-left:1em;padding-right:1em}.video-js .vjs-current-time,.vjs-live .vjs-time-control,.vjs-no-flex .vjs-current-time{display:none}.vjs-no-flex .vjs-remaining-time.vjs-time-control.vjs-control{width:0!important;white-space:nowrap}.video-js .vjs-duration,.vjs-no-flex .vjs-duration{display:none}.vjs-time-divider{display:none;line-height:3em}.vjs-live .vjs-time-divider{display:none}.video-js .vjs-play-control .vjs-icon-placeholder{cursor:pointer;flex:none}.vjs-text-track-display{position:absolute;bottom:3em;left:0;right:0;top:0;pointer-events:none}.video-js.vjs-user-inactive.vjs-playing .vjs-text-track-display{bottom:1em}.video-js .vjs-text-track{font-size:1.4em;text-align:center;margin-bottom:.1em;background-color:#000;background-color:rgba(0,0,0,.5)}.vjs-subtitles{color:#fff}.vjs-captions{color:#fc6}.vjs-tt-cue{display:block}video::-webkit-media-text-track-display{transform:translateY(-3em)}.video-js.vjs-user-inactive.vjs-playing video::-webkit-media-text-track-display{transform:translateY(-1.5em)}.video-js .vjs-fullscreen-control{cursor:pointer;flex:none}.vjs-playback-rate .vjs-playback-rate-value,.vjs-playback-rate>.vjs-menu-button{position:absolute;top:0;left:0;width:100%;height:100%}.vjs-playback-rate .vjs-playback-rate-value{pointer-events:none;font-size:1.5em;line-height:2;text-align:center}.vjs-playback-rate .vjs-menu{width:4em;left:0}.vjs-error .vjs-error-display .vjs-modal-dialog-content{font-size:1.4em;text-align:center}.vjs-error .vjs-error-display:before{color:#fff;content:"X";font-family:Arial,Helvetica,sans-serif;font-size:4em;left:0;line-height:1;margin-top:-.5em;position:absolute;text-shadow:.05em .05em .1em #000;text-align:center;top:50%;vertical-align:middle;width:100%}.vjs-loading-spinner{display:none;position:absolute;top:50%;left:50%;margin:-25px 0 0 -25px;opacity:.85;text-align:left;border:6px solid rgba(43,51,63,.7);box-sizing:border-box;background-clip:padding-box;width:50px;height:50px;border-radius:25px;visibility:hidden}.vjs-seeking .vjs-loading-spinner,.vjs-waiting .vjs-loading-spinner{display:block;animation:0s linear .3s forwards a}.vjs-loading-spinner:after,.vjs-loading-spinner:before{content:"";position:absolute;margin:-6px;box-sizing:inherit;width:inherit;height:inherit;border-radius:inherit;opacity:1;border:inherit;border-color:transparent;border-top-color:#fff}.vjs-seeking .vjs-loading-spinner:after,.vjs-seeking .vjs-loading-spinner:before,.vjs-waiting .vjs-loading-spinner:after,.vjs-waiting .vjs-loading-spinner:before{animation:b 1.1s cubic-bezier(.6,.2,0,.8) infinite,c 1.1s linear infinite}.vjs-seeking .vjs-loading-spinner:before,.vjs-waiting .vjs-loading-spinner:before{border-top-color:#fff}.vjs-seeking .vjs-loading-spinner:after,.vjs-waiting .vjs-loading-spinner:after{border-top-color:#fff;animation-delay:.44s}@keyframes a{to{visibility:visible}}@keyframes b{to{transform:rotate(1turn)}}@keyframes c{0%{border-top-color:#73859f}20%{border-top-color:#73859f}35%{border-top-color:#fff}60%{border-top-color:#73859f}to{border-top-color:#73859f}}.vjs-chapters-button .vjs-menu ul{width:24em}.video-js .vjs-subs-caps-button+.vjs-menu .vjs-captions-menu-item .vjs-menu-item-text .vjs-icon-placeholder{vertical-align:middle;display:inline-block;margin-bottom:-.1em}.video-js .vjs-subs-caps-button+.vjs-menu .vjs-captions-menu-item .vjs-menu-item-text .vjs-icon-placeholder:before{font-family:VideoJS;content:"\F10D";font-size:1.5em;line-height:inherit}.video-js .vjs-audio-button+.vjs-menu .vjs-main-desc-menu-item .vjs-menu-item-text .vjs-icon-placeholder{vertical-align:middle;display:inline-block;margin-bottom:-.1em}.video-js .vjs-audio-button+.vjs-menu .vjs-main-desc-menu-item .vjs-menu-item-text .vjs-icon-placeholder:before{font-family:VideoJS;content:" \F11D";font-size:1.5em;line-height:inherit}.video-js.vjs-layout-tiny:not(.vjs-fullscreen) .vjs-custom-control-spacer{flex:auto}.video-js.vjs-layout-tiny:not(.vjs-fullscreen).vjs-no-flex .vjs-custom-control-spacer{width:auto}.video-js.vjs-layout-small:not(.vjs-fullscreen) .vjs-captions-button,.video-js.vjs-layout-small:not(.vjs-fullscreen) .vjs-chapters-button,.video-js.vjs-layout-small:not(.vjs-fullscreen) .vjs-current-time,.video-js.vjs-layout-small:not(.vjs-fullscreen) .vjs-descriptions-button,.video-js.vjs-layout-small:not(.vjs-fullscreen) .vjs-duration,.video-js.vjs-layout-small:not(.vjs-fullscreen) .vjs-mute-control,.video-js.vjs-layout-small:not(.vjs-fullscreen) .vjs-playback-rate,.video-js.vjs-layout-small:not(.vjs-fullscreen) .vjs-remaining-time,.video-js.vjs-layout-small:not(.vjs-fullscreen) .vjs-subtitles-button .vjs-audio-button,.video-js.vjs-layout-small:not(.vjs-fullscreen) .vjs-time-divider,.video-js.vjs-layout-small:not(.vjs-fullscreen) .vjs-volume-control,.video-js.vjs-layout-tiny:not(.vjs-fullscreen) .vjs-audio-button,.video-js.vjs-layout-tiny:not(.vjs-fullscreen) .vjs-captions-button,.video-js.vjs-layout-tiny:not(.vjs-fullscreen) .vjs-chapters-button,.video-js.vjs-layout-tiny:not(.vjs-fullscreen) .vjs-current-time,.video-js.vjs-layout-tiny:not(.vjs-fullscreen) .vjs-descriptions-button,.video-js.vjs-layout-tiny:not(.vjs-fullscreen) .vjs-duration,.video-js.vjs-layout-tiny:not(.vjs-fullscreen) .vjs-mute-control,.video-js.vjs-layout-tiny:not(.vjs-fullscreen) .vjs-playback-rate,.video-js.vjs-layout-tiny:not(.vjs-fullscreen) .vjs-progress-control,.video-js.vjs-layout-tiny:not(.vjs-fullscreen) .vjs-remaining-time,.video-js.vjs-layout-tiny:not(.vjs-fullscreen) .vjs-subtitles-button,.video-js.vjs-layout-tiny:not(.vjs-fullscreen) .vjs-time-divider,.video-js.vjs-layout-tiny:not(.vjs-fullscreen) .vjs-volume-control,.video-js.vjs-layout-x-small:not(.vjs-fullscreen) .vjs-audio-button,.video-js.vjs-layout-x-small:not(.vjs-fullscreen) .vjs-captions-button,.video-js.vjs-layout-x-small:not(.vjs-fullscreen) .vjs-chapters-button,.video-js.vjs-layout-x-small:not(.vjs-fullscreen) .vjs-current-time,.video-js.vjs-layout-x-small:not(.vjs-fullscreen) .vjs-descriptions-button,.video-js.vjs-layout-x-small:not(.vjs-fullscreen) .vjs-duration,.video-js.vjs-layout-x-small:not(.vjs-fullscreen) .vjs-mute-control,.video-js.vjs-layout-x-small:not(.vjs-fullscreen) .vjs-playback-rate,.video-js.vjs-layout-x-small:not(.vjs-fullscreen) .vjs-remaining-time,.video-js.vjs-layout-x-small:not(.vjs-fullscreen) .vjs-subtitles-button,.video-js.vjs-layout-x-small:not(.vjs-fullscreen) .vjs-time-divider,.video-js.vjs-layout-x-small:not(.vjs-fullscreen) .vjs-volume-control{display:none}.vjs-modal-dialog.vjs-text-track-settings{background-color:#2b333f;background-color:rgba(43,51,63,.75);color:#fff;height:70%}.vjs-text-track-settings .vjs-modal-dialog-content{display:table}.vjs-text-track-settings .vjs-track-settings-colors,.vjs-text-track-settings .vjs-track-settings-controls,.vjs-text-track-settings .vjs-track-settings-font{display:table-cell}.vjs-text-track-settings .vjs-track-settings-controls{text-align:right;vertical-align:bottom}@supports (display:grid){.vjs-text-track-settings .vjs-modal-dialog-content{display:grid;grid-template-columns:1fr 1fr;grid-template-rows:1fr auto}.vjs-text-track-settings .vjs-track-settings-colors{display:block;grid-column:1;grid-row:1}.vjs-text-track-settings .vjs-track-settings-font{grid-column:2;grid-row:1}.vjs-text-track-settings .vjs-track-settings-controls{grid-column:2;grid-row:2}}.vjs-track-setting>select{margin-right:5px}.vjs-text-track-settings fieldset{margin:5px;padding:3px;border:none}.vjs-text-track-settings fieldset span{display:inline-block}.vjs-text-track-settings legend{color:#fff;margin:0 0 5px}.vjs-text-track-settings .vjs-label{position:absolute;clip:rect(1px 1px 1px 1px);clip:rect(1px,1px,1px,1px);display:block;margin:0 0 5px;padding:0;border:0;height:1px;width:1px;overflow:hidden}.vjs-track-settings-controls button:active,.vjs-track-settings-controls button:focus{outline-style:solid;outline-width:medium;background-image:linear-gradient(0deg,#fff 88%,#73859f)}.vjs-track-settings-controls button:hover{color:rgba(43,51,63,.75)}.vjs-track-settings-controls button{background-color:#fff;background-image:linear-gradient(-180deg,#fff 88%,#73859f);color:#2b333f;cursor:pointer;border-radius:2px}.vjs-track-settings-controls .vjs-default-button{margin-right:1em}@media print{.video-js>:not(.vjs-tech):not(.vjs-poster){visibility:hidden}}.vjs-resize-manager{position:absolute;top:0;left:0;width:100%;height:100%;border:none;visibility:hidden}@media \0screen{.vjs-user-inactive.vjs-playing .vjs-control-bar :before{content:""}}@media \0screen{.vjs-has-started.vjs-user-inactive.vjs-playing .vjs-control-bar{visibility:hidden}}.cio-videos{width:100%}.cio-videos__section{display:table;float:left;width:50%}@media (min-width:0) and (max-width:778px){.cio-videos__section{width:100%}}.cio-videos__section .video-player{display:table-row}.cio-videos__section .video-js{width:100%}.cio-videos__section .vjs-big-play-button{display:none!important}.cio-videos__section .vjs-poster{background-size:cover}.video-js .vjs-big-play-button .vjs-icon-placeholder:before,.video-js .vjs-modal-dialog,.vjs-button>.vjs-icon-placeholder:before,.vjs-modal-dialog .vjs-modal-dialog-content{position:absolute;top:0;left:0;width:100%;height:100%}.video-js .vjs-big-play-button .vjs-icon-placeholder:before,.vjs-button>.vjs-icon-placeholder:before{text-align:center}.email-form-field{margin-bottom:.83rem;padding-bottom:1rem}.email-form-field__label{display:block;font-family:IBMPlexSans,Helvetica Neue,Helvetica,Arial,sans-serif;font-size:.78947rem;font-weight:500;letter-spacing:.02632rem;margin-bottom:.55333rem;padding:0 .5rem 0 0;text-transform:uppercase}.email-form-field__required-symbol{color:#dd2113}.email-form-field__input,.email-form-field__textarea{background-color:#fdfdfd;border:2px solid #d1d1d1;border-radius:2px;color:#232323;display:block;font-family:IBMPlexSans,Helvetica Neue,Helvetica,Arial,sans-serif;font-size:1rem;font-weight:400;letter-spacing:.03rem;line-height:1.4;padding:.5rem;position:relative;transition:background-color .3s cubic-bezier(.23,1,.32,1),border-color .3s cubic-bezier(.23,1,.32,1);width:100%}.email-form-field__input:focus,.email-form-field__textarea:focus{background-color:#fdfdfd;border-color:#757575;outline:2px dotted #757575;outline-offset:2px}.email-form-field__textarea{resize:vertical}.hero-widget__wrapper[data-v-7b3a8952]{display:flex}.hero-widget__wrapper--left[data-v-7b3a8952]{flex-direction:row}.hero-widget__wrapper--right[data-v-7b3a8952]{flex-direction:row-reverse}.hero-widget__wrapper--stacked.hero-widget__wrapper--left[data-v-7b3a8952]{flex-direction:column}.hero-widget__wrapper--stacked.hero-widget__wrapper--right[data-v-7b3a8952]{flex-direction:column-reverse}.hero-widget__wrapper--stacked .side-layout__image[data-v-7b3a8952]{height:300px;margin:0;min-width:auto}.side-layout__image[data-v-7b3a8952]{min-width:400px}.button{border-radius:2px;box-sizing:border-box;cursor:pointer;display:inline-block;font-family:IBMPlexSans,Helvetica Neue,Helvetica,Arial,sans-serif;font-size:14px;font-weight:500;line-height:1.15;max-width:372px;min-width:140px;overflow:hidden;padding:.80132rem 7px;text-align:center;text-overflow:ellipsis;text-transform:uppercase;width:auto}.button,.button:focus,.button:hover{text-decoration:none}.button:focus{outline:2px dotted #757575;outline-offset:2px}.button--primary{background:#00598a;border:2px solid #00598a;color:#fff}.button--primary:visited{color:#fff}.button--primary:focus,.button--primary:hover{background:#0370b0;border-color:#0370b0;color:#fff}.button--secondary{background:#fff;border:2px solid #00598a;color:#00598a;padding:.69605rem 7px}.button--secondary:visited{color:#00598a}.button--secondary:focus,.button--secondary:hover{background:#0370b0;border-color:#0370b0;color:#fff}.button--textlink{color:#00598a;min-width:0;padding:15px 0}.button--textlink:visited{color:#00598a}.button--disabled{background-color:#f3f3f3;border-color:#f3f3f3;color:#d1d1d1;cursor:not-allowed;pointer-events:none}.hero-widget{box-sizing:border-box;display:block}.hero-widget__wrapper{display:flex;margin:0 auto;max-width:1540px}.hero-widget__content{font-family:IBMPlexSans,Helvetica Neue,Helvetica,Arial,sans-serif;padding:2rem 1rem 3rem;text-align:center;width:100%}.hero-widget__content--center{padding:2rem 0 3rem;text-align:center}.hero-widget__content--left{padding:2rem 0 3rem 2rem;text-align:left}.hero-widget__content--right{padding:2rem 2rem 3rem 0;text-align:right}.hero-widget__button{max-width:100%}.hero-widget__title{font-size:40px}.hero-widget__title--light{color:#fff}.hero-widget__title--dark{color:#232323}.hero-widget__subtext{font-size:20px}.hero-widget__subtext--light{color:#fff}.hero-widget__subtext--dark{color:#232323}.image-widget{box-sizing:border-box;display:block;max-width:100%;width:100%}.image-widget__link{box-sizing:border-box;display:inline-block;width:100%}.image-widget__link .image-widget{margin:0}.media-widget__wrapper{height:0;margin-bottom:1rem;padding-bottom:56.25%;
        /*! 16:9 Aspect Ratio */position:relative;width:100%}.media-widget__link,.media-widget__video{bottom:0;height:100%;left:0;position:absolute;right:0;top:0;width:100%}.media-widget__link{background-image:url(https://w3-publisher-image-service.w3-9203.ibm.com/image/images/cd6e4a37-e280-47d7-8810-2c2d90db6814:8001f523-47a1-4c4f-8c85-3e51d71171c5);background-repeat:no-repeat;background-size:cover;display:block}.media-widget__link--custom:after{border-color:transparent transparent transparent #fff;border-style:solid;border-width:35px 0 35px 60px;box-sizing:border-box;content:"";display:block;height:60px;position:absolute;width:60px}@media (min-width:475px){.media-widget__link--custom:after{left:48%;top:45%}}@media (min-width:0) and (max-width:778px){.media-widget__link--custom:after{left:45%;top:40%}}@media (max-width:474px){.media-widget__link--custom:after{left:42%;top:30%}}.spacer-widget{height:50px;width:100%}.text-widget{font-family:IBMPlexSans,Helvetica Neue,Helvetica,Arial,sans-serif}.panel-half[data-v-43930d08]{display:flex;width:100%}@media (max-width:778px){.panel-half[data-v-43930d08]{display:block}}.panel-half--left[data-v-43930d08]{flex-direction:row-reverse}.panel-half__img[data-v-43930d08]{background-position:50%;background-repeat:no-repeat;background-size:cover;width:50%}@media (max-width:778px){.panel-half__img[data-v-43930d08]{min-height:250px;width:100%}}.panel-half__content[data-v-43930d08]{padding:2rem;width:50%}@media (max-width:778px){.panel-half__content[data-v-43930d08]{width:100%}}.panel-half__content__sub-header[data-v-43930d08]{font-size:.78947rem;font-weight:600;letter-spacing:.02632rem;margin-bottom:.83rem;margin-top:0}@media (min-width:779px){.panel-half__content__sub-header[data-v-43930d08]{font-size:45px;font-weight:100;line-height:1.27}}@media (max-width:1158px){.panel-half__content__sub-header[data-v-43930d08]{font-size:37px;font-weight:100;line-height:1.25}}.panel-half__content__header[data-v-43930d08]{font-weight:600;margin:0}@media (min-width:779px){.panel-half__content__header[data-v-43930d08]{font-size:16px;line-height:1.5}}@media (max-width:1158px){.panel-half__content__header[data-v-43930d08]{font-size:15px;line-height:1.25}}.panel-half__content__text[data-v-43930d08]{word-break:break-word}.panel-large[data-v-3fcdd6b4]{display:flex;padding:2rem 3rem;width:100%}.panel-large__container[data-v-3fcdd6b4]{padding-right:4rem;width:calc(100% - 260px)}.panel-large__img[data-v-3fcdd6b4]{border-radius:50%;margin-left:1rem;margin-right:1rem}.panel-large__img.large[data-v-3fcdd6b4]{height:300px;width:320px}.panel-large__img.small[data-v-3fcdd6b4]{height:80px;width:80px}.panel-large__content[data-v-3fcdd6b4]{padding:1rem 2rem;word-break:break-word}.panel-large__title[data-v-3fcdd6b4]{margin-bottom:.5rem;margin-top:1rem}.panel-large__title__sub-header[data-v-3fcdd6b4]{font-weight:600;letter-spacing:.02632rem;margin:0}@media (min-width:779px){.panel-large__title__sub-header[data-v-3fcdd6b4]{font-size:45px;font-weight:100;line-height:1.27}}@media (max-width:1158px){.panel-large__title__sub-header[data-v-3fcdd6b4]{font-size:37px;font-weight:100;line-height:1.25}}.panel-large__title__header[data-v-3fcdd6b4]{font-weight:600;margin:0}@media (min-width:779px){.panel-large__title__header[data-v-3fcdd6b4]{font-size:16px;line-height:1.5}}@media (max-width:1158px){.panel-large__title__header[data-v-3fcdd6b4]{font-size:15px;line-height:1.25}}.panel-large__button[data-v-3fcdd6b4],.panel-small[data-v-711b5064]{width:100%}.panel-small__img[data-v-711b5064]{border-radius:50%;margin-left:1rem;margin-right:1rem;margin-top:1rem}.panel-small__img.small[data-v-711b5064]{height:80px;width:80px}.panel-small__content[data-v-711b5064]{padding:1rem 2rem;word-break:break-word}.panel-small__title[data-v-711b5064]{display:flex;flex-direction:column;justify-content:center;margin:0;padding-top:1rem;width:calc(100% - 120px)}.panel-small__title__sub-header[data-v-711b5064]{font-weight:600;letter-spacing:.02632rem;margin:0}@media (min-width:779px){.panel-small__title__sub-header[data-v-711b5064]{font-size:45px;font-weight:100;line-height:1.27}}@media (max-width:1158px){.panel-small__title__sub-header[data-v-711b5064]{font-size:37px;font-weight:100;line-height:1.25}}@media (max-width:474px){.panel-small__title__sub-header[data-v-711b5064]{font-size:30px}}@media (max-width:360px){.panel-small__title__sub-header[data-v-711b5064]{font-size:20px}}.panel-small__title__header[data-v-711b5064]{font-weight:600;margin:0}@media (min-width:779px){.panel-small__title__header[data-v-711b5064]{font-size:16px;line-height:1.5}}@media (max-width:1158px){.panel-small__title__header[data-v-711b5064]{font-size:15px;line-height:1.25}}.panel{border:1px solid #d1d1d1;border-radius:2px;box-shadow:0 1px 3px rgba(83,91,96,.23);display:flex;width:100%}.panel-button{margin-top:.5rem}.widget-wrapper{padding:10px}</style><style type="text/css">
                                                                                                                                                                                                                      </style><style type="text/css">
                                                                                                                                                                                                                      h1.ds-heading-1 {
                                                                                                                                                                                                                      font-size: 51px;
                                                                                                                                                                                                                      font-weight: 400;
                                                                                                                                                                                                                      line-height: 1.16;
                                                                                                                                                                                                                      }
                                                                                                                                                                                                                      @media (min-width: 0) and (max-width: 778px) {
                                                                                                                                                                                                                      h1.ds-heading-1 {
                                                                                                                                                                                                                      font-size: 42px;
                                                                                                                                                                                                                      line-height: 1.2;
                                                                                                                                                                                                                      }
                                                                                                                                                                                                                      }
                                                                                                                                                                                                                      @media (max-width: 474px) {
                                                                                                                                                                                                                      h1.ds-heading-1 {
                                                                                                                                                                                                                      font-size: 30px;
                                                                                                                                                                                                                      line-height: 1.23;
                                                                                                                                                                                                                      }
                                                                                                                                                                                                                      }
                                                                                                                                                                                                                      h2.ds-heading-2 {
                                                                                                                                                                                                                      font-size: 45px;
                                                                                                                                                                                                                      font-weight: 100;
                                                                                                                                                                                                                      line-height: 1.23;
                                                                                                                                                                                                                      }
                                                                                                                                                                                                                      @media (min-width: 0) and (max-width: 778px) {
                                                                                                                                                                                                                      h2.ds-heading-2 {
                                                                                                                                                                                                                      font-size: 37px;
                                                                                                                                                                                                                      line-height: 1.14;
                                                                                                                                                                                                                      }
                                                                                                                                                                                                                      }
                                                                                                                                                                                                                      @media (max-width: 474px) {
                                                                                                                                                                                                                      h2.ds-heading-2 {
                                                                                                                                                                                                                      font-size: 34px;
                                                                                                                                                                                                                      line-height: 1.15;
                                                                                                                                                                                                                      }
                                                                                                                                                                                                                      }
                                                                                                                                                                                                                      h3.ds-heading-3 {
                                                                                                                                                                                                                      font-size: 32px;
                                                                                                                                                                                                                      font-weight: 100;
                                                                                                                                                                                                                      line-height: 1.27;
                                                                                                                                                                                                                      }
                                                                                                                                                                                                                      @media (min-width: 0) and (max-width: 778px) {
                                                                                                                                                                                                                      h3.ds-heading-3 {
                                                                                                                                                                                                                      font-size: 27px;
                                                                                                                                                                                                                      line-height: 1.25;
                                                                                                                                                                                                                      }
                                                                                                                                                                                                                      }
                                                                                                                                                                                                                      @media (max-width: 474px) {
                                                                                                                                                                                                                      h3.ds-heading-3 {
                                                                                                                                                                                                                      font-size: 25px;
                                                                                                                                                                                                                      line-height: 1.3;
                                                                                                                                                                                                                      }
                                                                                                                                                                                                                      }
                                                                                                                                                                                                                      p,
                                                                                                                                                                                                                      ul,
                                                                                                                                                                                                                      li {
                                                                                                                                                                                                                      font-size: 16px;
                                                                                                                                                                                                                      font-weight: normal;
                                                                                                                                                                                                                      line-height: 1.5;
                                                                                                                                                                                                                      }
                                                                                                                                                                                                                      @media (max-width: 474px) {
                                                                                                                                                                                                                      p,
                                                                                                                                                                                                                      ul,
                                                                                                                                                                                                                      li {
                                                                                                                                                                                                                      font-size: 15px;
                                                                                                                                                                                                                      line-height: 1.53;
                                                                                                                                                                                                                      }
                                                                                                                                                                                                                      }
                                                                                                                                                                                                                      .large-text {
                                                                                                                                                                                                                      font-size: 21px;
                                                                                                                                                                                                                      font-weight: 100;
                                                                                                                                                                                                                      line-height: 1.4;
                                                                                                                                                                                                                      }
                                                                                                                                                                                                                      @media (min-width: 0) and (max-width: 778px) {
                                                                                                                                                                                                                      .large-text {
                                                                                                                                                                                                                      font-size: 19px;
                                                                                                                                                                                                                      line-height: 1.35;
                                                                                                                                                                                                                      }
                                                                                                                                                                                                                      }
                                                                                                                                                                                                                      @media (max-width: 474px) {
                                                                                                                                                                                                                      .large-text {
                                                                                                                                                                                                                      font-size: 18px;
                                                                                                                                                                                                                      line-height: 1.36;
                                                                                                                                                                                                                      }
                                                                                                                                                                                                                      }
                                                                                                                                                                                                                      .custom-bold {
                                                                                                                                                                                                                      font-weight: 800 !important;
                                                                                                                                                                                                                      }
                                                                                                                                                                                                                      .custom-bold.custom-italic {
                                                                                                                                                                                                                      font-weight: 800 !important;
                                                                                                                                                                                                                      }
                                                                                                                                                                                                                      .page__content--legacy .page__body {
                                                                                                                                                                                                                      display: flex;
                                                                                                                                                                                                                      margin: 0 auto;
                                                                                                                                                                                                                      max-width: 832px;
                                                                                                                                                                                                                      padding: 2rem 36px;
                                                                                                                                                                                                                      width: 90%;
                                                                                                                                                                                                                      }
                                                                                                                                                                                                                      @media (max-width: 778px) {
                                                                                                                                                                                                                      .page__content--legacy .page__body {
                                                                                                                                                                                                                      flex-direction: column;
                                                                                                                                                                                                                      }
                                                                                                                                                                                                                      }
                                                                                                                                                                                                                      .page__content--legacy .page__aside {
                                                                                                                                                                                                                      flex: 0 0 auto;
                                                                                                                                                                                                                      margin-left: 1rem;
                                                                                                                                                                                                                      width: 33%;
                                                                                                                                                                                                                      }
                                                                                                                                                                                                                      @media (max-width: 778px) {
                                                                                                                                                                                                                      .page__content--legacy .page__aside {
                                                                                                                                                                                                                      width: 100%;
                                                                                                                                                                                                                      }
                                                                                                                                                                                                                      }
                                                                                                                                                                                                                      </style><style type="text/css">
                                                                                                                                                                                                                      .page-not-found__text {
                                                                                                                                                                                                                      color: #232323;
                                                                                                                                                                                                                      font-size: 27px;
                                                                                                                                                                                                                      font-weight: 300;
                                                                                                                                                                                                                      margin: 50px auto 75px;
                                                                                                                                                                                                                      text-align: center;
                                                                                                                                                                                                                      width: 80%;
                                                                                                                                                                                                                      }
                                                                                                                                                                                                                      .page-not-found__home-link {
                                                                                                                                                                                                                      color: #367aa3;
                                                                                                                                                                                                                      }
                                                                                                                                                                                                                      .page-not-found__home-link:visited {
                                                                                                                                                                                                                      color: #367aa3;
                                                                                                                                                                                                                      }
                                                                                                                                                                                                                      </style><style type="text/css">
                                                                                                                                                                                                                      h1.ds-heading-1 {
                                                                                                                                                                                                                      font-size: 51px;
                                                                                                                                                                                                                      font-weight: 400;
                                                                                                                                                                                                                      line-height: 1.16;
                                                                                                                                                                                                                      }
                                                                                                                                                                                                                      @media (min-width: 0) and (max-width: 778px) {
                                                                                                                                                                                                                      h1.ds-heading-1 {
                                                                                                                                                                                                                      font-size: 42px;
                                                                                                                                                                                                                      line-height: 1.2;
                                                                                                                                                                                                                      }
                                                                                                                                                                                                                      }
                                                                                                                                                                                                                      @media (max-width: 474px) {
                                                                                                                                                                                                                      h1.ds-heading-1 {
                                                                                                                                                                                                                      font-size: 30px;
                                                                                                                                                                                                                      line-height: 1.23;
                                                                                                                                                                                                                      }
                                                                                                                                                                                                                      }
                                                                                                                                                                                                                      h2.ds-heading-2 {
                                                                                                                                                                                                                      font-size: 45px;
                                                                                                                                                                                                                      font-weight: 100;
                                                                                                                                                                                                                      line-height: 1.23;
                                                                                                                                                                                                                      }
                                                                                                                                                                                                                      @media (min-width: 0) and (max-width: 778px) {
                                                                                                                                                                                                                      h2.ds-heading-2 {
                                                                                                                                                                                                                      font-size: 37px;
                                                                                                                                                                                                                      line-height: 1.14;
                                                                                                                                                                                                                      }
                                                                                                                                                                                                                      }
                                                                                                                                                                                                                      @media (max-width: 474px) {
                                                                                                                                                                                                                      h2.ds-heading-2 {
                                                                                                                                                                                                                      font-size: 34px;
                                                                                                                                                                                                                      line-height: 1.15;
                                                                                                                                                                                                                      }
                                                                                                                                                                                                                      }
                                                                                                                                                                                                                      h3.ds-heading-3 {
                                                                                                                                                                                                                      font-size: 32px;
                                                                                                                                                                                                                      font-weight: 100;
                                                                                                                                                                                                                      line-height: 1.27;
                                                                                                                                                                                                                      }
                                                                                                                                                                                                                      @media (min-width: 0) and (max-width: 778px) {
                                                                                                                                                                                                                      h3.ds-heading-3 {
                                                                                                                                                                                                                      font-size: 27px;
                                                                                                                                                                                                                      line-height: 1.25;
                                                                                                                                                                                                                      }
                                                                                                                                                                                                                      }
                                                                                                                                                                                                                      @media (max-width: 474px) {
                                                                                                                                                                                                                      h3.ds-heading-3 {
                                                                                                                                                                                                                      font-size: 25px;
                                                                                                                                                                                                                      line-height: 1.3;
                                                                                                                                                                                                                      }
                                                                                                                                                                                                                      }
                                                                                                                                                                                                                      p,
                                                                                                                                                                                                                      ul,
                                                                                                                                                                                                                      li {
                                                                                                                                                                                                                      font-size: 16px;
                                                                                                                                                                                                                      font-weight: normal;
                                                                                                                                                                                                                      line-height: 1.5;
                                                                                                                                                                                                                      }
                                                                                                                                                                                                                      @media (max-width: 474px) {
                                                                                                                                                                                                                      p,
                                                                                                                                                                                                                      ul,
                                                                                                                                                                                                                      li {
                                                                                                                                                                                                                      font-size: 15px;
                                                                                                                                                                                                                      line-height: 1.53;
                                                                                                                                                                                                                      }
                                                                                                                                                                                                                      }
                                                                                                                                                                                                                      .large-text {
                                                                                                                                                                                                                      font-size: 21px;
                                                                                                                                                                                                                      font-weight: 100;
                                                                                                                                                                                                                      line-height: 1.4;
                                                                                                                                                                                                                      }
                                                                                                                                                                                                                      @media (min-width: 0) and (max-width: 778px) {
                                                                                                                                                                                                                      .large-text {
                                                                                                                                                                                                                      font-size: 19px;
                                                                                                                                                                                                                      line-height: 1.35;
                                                                                                                                                                                                                      }
                                                                                                                                                                                                                      }
                                                                                                                                                                                                                      @media (max-width: 474px) {
                                                                                                                                                                                                                      .large-text {
                                                                                                                                                                                                                      font-size: 18px;
                                                                                                                                                                                                                      line-height: 1.36;
                                                                                                                                                                                                                      }
                                                                                                                                                                                                                      }
                                                                                                                                                                                                                      .custom-bold {
                                                                                                                                                                                                                      font-weight: 800 !important;
                                                                                                                                                                                                                      }
                                                                                                                                                                                                                      .custom-bold.custom-italic {
                                                                                                                                                                                                                      font-weight: 800 !important;
                                                                                                                                                                                                                      }
                                                                                                                                                                                                                      .page {
                                                                                                                                                                                                                      flex: 1 0 auto;
                                                                                                                                                                                                                      }
                                                                                                                                                                                                                      .page::after {
                                                                                                                                                                                                                      clear: both;
                                                                                                                                                                                                                      content: '';
                                                                                                                                                                                                                      }
                                                                                                                                                                                                                      .page__content .ds-row:first-of-type {
                                                                                                                                                                                                                      padding-top: 0;
                                                                                                                                                                                                                      }
                                                                                                                                                                                                                      </style><style type="text/css">
                                                                                                                                                                                                                      .not-found-animation {
                                                                                                                                                                                                                      max-width: 250px;
                                                                                                                                                                                                                      }
                                                                                                                                                                                                                      </style><style type="text/css">
                                                                                                                                                                                                                      .site-not-found--animation[data-v-2186979a] {
                                                                                                                                                                                                                      margin: 150px auto 0;
                                                                                                                                                                                                                      }
                                                                                                                                                                                                                      .site-not-found--text[data-v-2186979a] {
                                                                                                                                                                                                                      color: #232323;
                                                                                                                                                                                                                      font-size: 27px;
                                                                                                                                                                                                                      font-weight: 300;
                                                                                                                                                                                                                      margin: 25px auto;
                                                                                                                                                                                                                      text-align: center;
                                                                                                                                                                                                                      width: 80%;
                                                                                                                                                                                                                      }
                                                                                                                                                                                                                      </style><style type="text/css">
                                                                                                                                                                                                                      body {
                                                                                                                                                                                                                      min-height: 100vh;
                                                                                                                                                                                                                      }
                                                                                                                                                                                                                      .main {
                                                                                                                                                                                                                      min-height: 100vh;
                                                                                                                                                                                                                      }
                                                                                                                                                                                                                      .site {
                                                                                                                                                                                                                      display: flex;
                                                                                                                                                                                                                      flex-direction: column;
                                                                                                                                                                                                                      min-height: 100vh;
                                                                                                                                                                                                                      }
                                                                                                                                                                                                                      iframe {
                                                                                                                                                                                                                      width: 100%;
                                                                                                                                                                                                                      height: 100%;
                                                                                                                                                                                                                    
                                                                                                                                                                                                                      border: 0;                                                                                                                                }
                                                                                                                                                                                                                      </style><script language="javascript" type="text/javascript" src="https://libs.coremetrics.com/configs/51040000.js"></script><script language="javascript" type="text/javascript" src="https://tmscdn.coremetrics.com/tms/dispatcher-v3.js"></script><script src="https://libs.coremetrics.com/ddxlibs/yahoo-min.js" type="text/javascript"></script><script src="https://tmscdn.coremetrics.com/tms/51040000/cp-v3.js?__t=20190131174151551" type="text/javascript"></script><script src="https://libs.coremetrics.com/ddxlibs/json-min.js" type="text/javascript"></script><script src="https://tmscdn.coremetrics.com/tms/51040002/cp-v3.js?__t=1548974512916" type="text/javascript"></script></head>
                                                                                                                                                                                                                      <body class=""><div style="display: none;" id="lightningjs-usabilla_live2"><div><iframe id="lightningjs-frame-usabilla_live2" frameborder="0"></iframe></div></div>
                                                                                                                                                                                                                      <div class="main" role="main">
                                                                                                                                                                                                                      <div id="w3-masthead-overlay" class="mast-overlay-fullscreen mast-hide" aria-hidden="false" role="dialog" style="display: block;"><div class="w3-masthead-background"></div><div class="mast-overlay-box mast-col-12" role="document"><button id="w3-masthead-close" class="w3-masthead-close mast-button mast-flat mast-width-auto mast-padding-left-1 mast-padding-right-1 mast-margin-top-1 mast-margin-right-1 mast-float-right"><svg id="w3-masthead-clearsearch" width="25px" height="25px" viewBox="0 0 35 35" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="x-l" fill-rule="nonzero" fill="#232323"><polygon id="close" points="17.5 15.877132 1.95897499 0.336106973 0.336106973 1.95897499 15.877132 17.5 0.336106973 33.041025 1.95897499 34.663893 17.5 19.122868 33.041025 34.663893 34.663893 33.041025 19.122868 17.5 34.663893 1.95897499 33.041025 0.336106973"></polygon></g></g></svg></button><div class="mast-row mast-overlay-content mast-padding-bottom-2"><div class="mast-col-12"><h2 class="heading-2 mast-align-text-center"><a href="https://w3.ibm.com" target="_blank" class="mast-text-neutral-8"><svg width="91px" height="99px" viewBox="0 0 71 40"><g><text id="w3" class="masthead-svg__text" font-size="22"><tspan x="21" y="40.85" font-family="IBMPlexSans, IBM Plex Sans" font-weight="bold">w</tspan><tspan x="38" y="40.85" font-family="IBMPlexSans, IBM Plex Sans" font-weight="normal">3</tspan></text></g></svg></a></h2></div><div id="w3-masthead-search"><div class="mast-col-xs-10 mast-push-xs-1 mast-col-sm-6 mast-push-sm-3 mast-display-md-inline-block mast-padding-top-0_5 mast-padding-bottom-0_5" style="vertical-align:middle;"><input id="w3-masthead-search-input" class="mast-input mast-large mast-display-inline-block mast-padding-right-3_5 w3-masthead-search-input" placeholder="Search places or people" autofocus="" type="search"> <svg id="w3-masthead-clearsearch" class="mast-hide" width="25px" height="25px" viewBox="0 0 35 35" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="x-l" fill-rule="nonzero" fill="#232323"><polygon id="close" points="17.5 15.877132 1.95897499 0.336106973 0.336106973 1.95897499 15.877132 17.5 0.336106973 33.041025 1.95897499 34.663893 17.5 19.122868 33.041025 34.663893 34.663893 33.041025 19.122868 17.5 34.663893 1.95897499 33.041025 0.336106973"></polygon></g></g></svg> <svg id="w3-masthead-gotow3search" width="25px" height="25px" viewBox="0 0 35 35" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="search-l" fill-rule="nonzero" fill="#232323"><path d="M5.15187016,5.15206346 C1.34281924,8.96150064 1.34281924,15.1372179 5.1517056,18.9464905 C8.96114278,22.7555414 15.13686,22.7555414 18.9462149,18.9465728 C22.7556333,15.1371544 22.7556333,8.9615641 18.9462149,5.15214575 C15.1367966,1.34272737 8.96120624,1.34272737 5.15187016,5.15206346 Z M20.5690829,3.52927772 C25.2747866,8.23498137 25.2747866,15.8637371 20.5690829,20.5694408 C15.8633793,25.2746673 8.23462351,25.2746673 3.52891986,20.5694408 C-1.17630662,15.8637371 -1.17630662,8.23498137 3.52891986,3.52927772 C8.23462351,-1.17642591 15.8633793,-1.17642591 20.5690829,3.52927772 Z M21.5656151,23.1884832 L23.1884832,21.5656151 L34.663893,33.041025 L33.041025,34.663893 L21.5656151,23.1884832 Z" id="search"></path></g></g></svg><div class="mast-caption mast-align-text-right mast-margin-1">Looking for something else? <a href="https://w3.ibm.com/" target="_blank" class="mast-text-blue-6 w3-search-link">Search on w3</a></div></div></div><div id="w3-masthead-loader" class="mast-hide"><div class="mast-loader-container mast-loader-blue mast-margin-top-3"><div class="mast-loader mast-loader"></div></div></div><div id="w3-masthead-results" class="w3-masthead-results"><div id="w3-masthead-results-featured" class=""><div class="w3-masthead-results"><div class="mast-col-xs-12"><h4 class="mast-heading-4 mast-align-text-center mast-padding-top-3 mast-padding-bottom-1 mast-text-blue-5">Quick Links</h4></div>  <div class="mast-col-xs-10 mast-push-xs-1 mast-col-sm-8 mast-push-sm-2"><div class="w3-masthead-results-cards mast-row"><a href="https://mail.notes.na.collabserv.com/sequoia/index.html" target="_blank" tabindex="-1" class="w3-masthead-card__place mast-col-xs-6 mast-col-lg-3 w3-mail-card" data-name="Mail: Verse" data-type="featured"><div class="mast-set-height-card mast-panel mast-hover mast-panel-raised mast-margin-bottom-1" tabindex="0" style="height: 183px;"><div class="mast-panel-container mast-padding-left-0_5 mast-padding-right-0_5 mast-padding-bottom-1"> <img class="mast-margin-top-1" src="https://w3.ibm.com/w3-masthead/images/places-mail-verse.png">  <p class="mast-text-small mast-text-blue-6 mast-align-text-center mast-padding-top-1">Mail: Verse</p></div></div></a><a href="https://w3.ibm.com/travel" target="_blank" tabindex="-1" class="w3-masthead-card__place mast-col-xs-6 mast-col-lg-3 w3-expense-card" data-name="Travel &amp; Expenses" data-type="featured"><div class="mast-set-height-card mast-panel mast-hover mast-panel-raised mast-margin-bottom-1" tabindex="0" style="height: 183px;"><div class="mast-panel-container mast-padding-left-0_5 mast-padding-right-0_5 mast-padding-bottom-1"> <img class="mast-margin-top-1" src="https://w3.ibm.com/w3-masthead/images/places-travel-medium.png">  <p class="mast-text-small mast-text-blue-6 mast-align-text-center mast-padding-top-1">Travel &amp; Expenses</p></div></div></a><a href="http://w3.ibm.com/hr/web/performance/checkpointtracker" target="_blank" tabindex="-1" class="w3-masthead-card__place mast-col-xs-6 mast-col-lg-3 w3-checkpoint-card" data-name="Checkpoint" data-type="featured"><div class="mast-set-height-card mast-panel mast-hover mast-panel-raised mast-margin-bottom-1" tabindex="0" style="height: 183px;"><div class="mast-panel-container mast-padding-left-0_5 mast-padding-right-0_5 mast-padding-bottom-1"> <img class="mast-margin-top-1" src="https://w3.ibm.com/w3-masthead/images/places-checkpoint-medium.png">  <p class="mast-text-small mast-text-blue-6 mast-align-text-center mast-padding-top-1">Checkpoint</p></div></div></a><a href="https://w3.ibm.com/bluepages/" target="_blank" tabindex="-1" class="w3-masthead-card__place mast-col-xs-6 mast-col-lg-3 w3-bluepages-card" data-name="BluePages" data-type="featured"><div class="mast-set-height-card mast-panel mast-hover mast-panel-raised mast-margin-bottom-1" tabindex="0" style="height: 183px;"><div class="mast-panel-container mast-padding-left-0_5 mast-padding-right-0_5 mast-padding-bottom-1"> <img class="mast-margin-top-1" src="https://w3.ibm.com/w3-masthead/images/places-bluepages.png">  <p class="mast-text-small mast-text-blue-6 mast-align-text-center mast-padding-top-1">BluePages</p></div></div></a><a href="https://w3.ibm.com/services/tools/marketplace/displayLogin.wss" target="_blank" tabindex="-1" class="w3-masthead-card__place mast-col-xs-6 mast-col-lg-3 w3-marketplace-card" data-name="Professional Marketplace" data-type="featured"><div class="mast-set-height-card mast-panel mast-hover mast-panel-raised mast-margin-bottom-1" tabindex="0" style="height: 183px;"><div class="mast-panel-container mast-padding-left-0_5 mast-padding-right-0_5 mast-padding-bottom-1"> <img class="mast-margin-top-1" src="https://w3.ibm.com/w3-masthead/images/places-jobs-medium.png">  <p class="mast-text-small mast-text-blue-6 mast-align-text-center mast-padding-top-1">Professional Marketplace</p></div></div></a><a href="https://w3.ibm.com/help" target="_blank" tabindex="-1" class="w3-masthead-card__place mast-col-xs-6 mast-col-lg-3 w3-help-card" data-name="Help@IBM" data-type="featured"><div class="mast-set-height-card mast-panel mast-hover mast-panel-raised mast-margin-bottom-1" tabindex="0" style="height: 183px;"><div class="mast-panel-container mast-padding-left-0_5 mast-padding-right-0_5 mast-padding-bottom-1"> <img class="mast-margin-top-1" src="https://w3.ibm.com/w3-masthead/images/places-it.png">  <p class="mast-text-small mast-text-blue-6 mast-align-text-center mast-padding-top-1">Help@IBM</p></div></div></a><a href="http://w3.ibm.com/sales/salesconnect" target="_blank" tabindex="-1" class="w3-masthead-card__place mast-col-xs-6 mast-col-lg-3 w3-sales-connect-card" data-name="SalesConnect" data-type="featured"><div class="mast-set-height-card mast-panel mast-hover mast-panel-raised mast-margin-bottom-1" tabindex="0" style="height: 183px;"><div class="mast-panel-container mast-padding-left-0_5 mast-padding-right-0_5 mast-padding-bottom-1"> <img class="mast-margin-top-1" src="https://w3.ibm.com/w3-masthead/images/places-salesconnect.png">  <p class="mast-text-small mast-text-blue-6 mast-align-text-center mast-padding-top-1">SalesConnect</p></div></div></a><a href="https://wd5.myworkday.com/ibm" target="_blank" tabindex="-1" class="w3-masthead-card__place mast-col-xs-6 mast-col-lg-3 w3-workday-card" data-name="Workday@IBM" data-type="featured"><div class="mast-set-height-card mast-panel mast-hover mast-panel-raised mast-margin-bottom-1" tabindex="0" style="height: 183px;"><div class="mast-panel-container mast-padding-left-0_5 mast-padding-right-0_5 mast-padding-bottom-1"> <img class="mast-margin-top-1" src="https://w3.ibm.com/w3-masthead/images/places-workday.png">  <p class="mast-text-small mast-text-blue-6 mast-align-text-center mast-padding-top-1">Workday@IBM</p></div></div></a></div><div class="mast-col-xs-12 mast-push-sm-1 mast-col-sm-10 mast-push-lg-4 mast-col-lg-4 mast-padding-top-1"><button class="mast-button mast-secondary" data-item="quicklinks-view-more">Go to the w3 Places card</button></div></div></div></div><div id="w3-masthead-results-links" class="mast-hide"></div><div id="w3-masthead-results-places" class="mast-hide"></div><div id="w3-masthead-results-people" class="mast-hide"></div></div></div><div class="masthead-usabilla mast-caption mast-align-text-right mast-margin-1 mast-padding-bottom-1"><span class="mast-padding-1">What do you think of the w3 Masthead <a href="#" id="usbl-integrated-button">Leave feedback here</a></span></div></div></div><a href="https://w3.ibm.com/" id="ds-w3-injectable-nav" data-layout="1" data-height="82" data-breakpoint="md" target="_blank" style="position: fixed; height: 82px; margin-left: 20px;" class="light md"><svg id="w3-masthead-badge" width="91px" height="99px" viewBox="0 0 71 99"><g id="w3-masthead-badge-background" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="w3-masthead-badge-background-fill"><polygon fill="black" fill-opacity="1" points="0.3828125 0.0936521943 0.3828125 64 35.62839 82 71 64 71 0.151757577"></polygon><polygon id="w3-masthead-badge-background-fill-color" fill-rule="evenodd" fill="white" points="0.3828125 0.0936521943 0.3828125 64 35.62839 82 71 64 71 0.151757577"></polygon></g></g></svg> <svg id="w3-masthead-text" width="91px" height="99px" viewBox="0 0 71 99"><g><text id="w3-masthead-text-fill" class="masthead-svg__text" font-size="22"><tspan x="21" y="40.85" font-family="IBMPlexSans, IBM Plex Sans" font-weight="bold">w</tspan><tspan x="38" y="40.85" font-family="IBMPlexSans, IBM Plex Sans" font-weight="normal">3</tspan></text></g></svg></a>
                                                                                                                                                                                                                      <div class="site"><div class="navbar__wrapper"><div role="presentation" class="navbar__placeholder" style="height: 64px;"></div> <div role="banner" class="navbar"><div class="site-title__wrapper"><a href="https://w3.ibm.com/w3publisher/icg" class="site-title router-link-active">ICG</a></div> <nav class="site-nav"><div class="site-nav__item-wrapper"><a href="https://w3.ibm.com/w3publisher/icg/innovation" class="site-nav__item router-link-active">
                                                                                                                                                                                                                      Innovation
                                                                                                                                                                                                                      </a> <div class="site-nav__sub-items"><a href="https://w3.ibm.com/w3publisher/icg/innovation/startups-and-scaleups" class="site-nav__sub-item router-link-exact-active router-link-active">
                                                                                                                                                                                                                      StartUps and ScaleUps
                                                                                                                                                                                                                      </a></div></div><div class="site-nav__item-wrapper"><a href="https://w3.ibm.com/w3publisher/icg/citizenship" class="site-nav__item">
                                                                                                                                                                                                                      Citizenship
                                                                                                                                                                                                                      </a> <div class="site-nav__sub-items"></div></div><div class="site-nav__item-wrapper"><a href="https://w3.ibm.com/w3publisher/icg/government-affairs" class="site-nav__item">
                                                                                                                                                                                                                      Government Affairs
                                                                                                                                                                                                                      </a> <div class="site-nav__sub-items"></div></div><div class="site-nav__item-wrapper"><a href="https://w3.ibm.com/w3publisher/icg/itb" class="site-nav__item">
                                                                                                                                                                                                                      ITB
                                                                                                                                                                                                                      </a> <div class="site-nav__sub-items"></div></div><div class="site-nav__item-wrapper"><a href="https://w3.ibm.com/w3publisher/icg/news-resources" class="site-nav__item">
                                                                                                                                                                                                                      News &amp; Resources
                                                                                                                                                                                                                      </a> <div class="site-nav__sub-items"><a href="https://w3.ibm.com/w3publisher/icg/news-resources/icg-success-stories" class="site-nav__sub-item">
                                                                                                                                                                                                                      ICG Success Stories
                                                                                                                                                                                                                      </a><a href="https://w3.ibm.com/w3publisher/icg/news-resources/blogs" class="site-nav__sub-item">
                                                                                                                                                                                                                      Blogs
                                                                                                                                                                                                                      </a><a href="https://w3.ibm.com/w3publisher/icg/news-resources/meet-the-icg-team" class="site-nav__sub-item">
                                                                                                                                                                                                                      Meet the ICG Team
                                                                                                                                                                                                                      </a></div></div></nav> <div role="dialog" aria-hidden="true" class="mobile-nav__overlay" style="display: none;"><div class="mobile-nav__site-title__wrapper"><a href="https://w3.ibm.com/w3publisher/icg" class="mobile-nav__site-title router-link-active">ICG</a></div> <nav class="mobile-nav"><a href="https://w3.ibm.com/w3publisher/icg/innovation" class="mobile-nav__item router-link-active">
                                                                                                                                                                                                                      Innovation
                                                                                                                                                                                                                      </a><a href="https://w3.ibm.com/w3publisher/icg/innovation/startups-and-scaleups" class="mobile-nav__item router-link-exact-active router-link-active mobile-nav__item--active mobile-nav__item--child">
                                                                                                                                                                                                                      StartUps and ScaleUps
                                                                                                                                                                                                                      </a><a href="https://w3.ibm.com/w3publisher/icg/citizenship" class="mobile-nav__item">
                                                                                                                                                                                                                      Citizenship
                                                                                                                                                                                                                      </a><a href="https://w3.ibm.com/w3publisher/icg/government-affairs" class="mobile-nav__item">
                                                                                                                                                                                                                      Government Affairs
                                                                                                                                                                                                                      </a><a href="https://w3.ibm.com/w3publisher/icg/itb" class="mobile-nav__item">
                                                                                                                                                                                                                      ITB
                                                                                                                                                                                                                      </a><a href="https://w3.ibm.com/w3publisher/icg/news-resources" class="mobile-nav__item">
                                                                                                                                                                                                                      News &amp; Resources
                                                                                                                                                                                                                      </a><a href="https://w3.ibm.com/w3publisher/icg/news-resources/icg-success-stories" class="mobile-nav__item mobile-nav__item--child">
                                                                                                                                                                                                                      ICG Success Stories
                                                                                                                                                                                                                      </a><a href="https://w3.ibm.com/w3publisher/icg/news-resources/blogs" class="mobile-nav__item mobile-nav__item--child">
                                                                                                                                                                                                                      Blogs
                                                                                                                                                                                                                      </a><a href="https://w3.ibm.com/w3publisher/icg/news-resources/meet-the-icg-team" class="mobile-nav__item mobile-nav__item--child">
                                                                                                                                                                                                                      Meet the ICG Team
                                                                                                                                                                                                                      </a></nav> <button aria-label="Close site navigation" class="mobile-nav__close-btn"><span role="presentation" class="ds-icon-close"></span></button></div> <button aria-label="Open site navigation" class="mobile-nav__toggle"><span role="presentation" class="ds-icon-menu ds-icon-size-default"></span></button></div></div> <article aria-label="page" class="page"><div class="page__content--dynamic page__content"><header class="hero hero--small" style="background: rgba(0, 0, 0, 0) url(&quot;https://w3-publisher-web-server.w3-9203.ibm.com/w3publisher/sites/icg/images/46392de0-f00d-4b25-9302-51228ac366c0:83ee5052-1d62-4498-9b53-109a2c11fd24.jpg&quot;) no-repeat scroll center center / cover;"><div class="hero__content"><!----> <h1 class="hero__title">Our Start-Ups</h1> <!----></div> <div role="presentation" class="hero__contrast-layer" style="opacity: 0.3;"></div></header>
                                                                                    
                                                                                                                                                                                                                      
                                                                                                                                                                                                                      
                                                                                    
                                                                                                                                                                                                                      
                                                                                    <iframe src="/index2.html">Alternate content</iframe>
                                                                                                                                                                                                    
                                                                                                                                                                                                                      
                                                                                                                                                                                                                      </div></article> <!----> </div>
                                                                                                                                                                                                                      </div>
                                                                                                                                                                                                                                                                                                                                                    <script src="https://w3ds-icons.mybluemix.net/w3ds.js"></script>
                                                                                                                                                                                                                      <script src="https://w3.ibm.com/w3-masthead/plugins/w3-masthead/w3-masthead.js"></script>
                                                                                                                                                                                                                      <script type="text/javascript" src="w3-publisher-site-vendor.js"></script><script type="text/javascript" src="w3-publisher-site.js"></script>
                                                                                                                                                                                                                      
                                                                                                                                                                                                                      </body></html>