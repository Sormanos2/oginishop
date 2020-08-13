<!DOCTYPE html>
<html lang="en">
   <!-- Mirrored from smartadmin.lodev09.com/php_api_docs.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Aug 2020 08:31:34 GMT -->
   <!-- Added by HTTrack -->
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <!-- /Added by HTTrack -->
   <head>
      <meta charset="utf-8">
      <title>Documentation - REST API - SmartAdmin v4.5.2</title>
      <meta name="description" content="Documentation - REST API - SmartAdmin v4.5.2">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
      <!-- Call App Mode on ios devices -->
      <meta name="apple-mobile-web-app-capable" content="yes" />
      <!-- Remove Tap Highlight on Windows Phone IE -->
      <meta name="msapplication-tap-highlight" content="no">
      <!-- base css -->
      <link id="vendorsbundle" rel="stylesheet" media="screen, print" href="{{ asset('admin/assets/css/vendors.bundle.css') }}">
      <link id="appbundle" rel="stylesheet" media="screen, print" href="{{ asset('admin/assets/css/app.bundle.css') }}">
      <link id="mytheme" rel="stylesheet" media="screen, print" href="{{ asset('admin/assets/css/mytheme.css') }}">
      <link id="myskin" rel="stylesheet" media="screen, print" href="{{ asset('admin/assets/css/skins/skin-master.css') }}">
      <!-- Place favicon.ico in the root directory -->
      <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('admin/assets/img/favicon/apple-touch-icon.png') }}">
      <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('admin/assets/img/favicon/favicon-32x32.png') }}">
      <link rel="mask-icon" href="{{ asset('admin/assets/img/favicon/safari-pinned-tab.svg') }}" color="#5bbad5">
      <meta name="hostname" content="smartadmin.lodev09.com">
      <meta name="app-url" content="index.html">
      <meta name="assets-url" content="assets/index.html">
      <meta name="environment" content="dev">
      <!-- Optional: page related CSS -->
      <!-- PHP docs -->
      <link rel="stylesheet" media="screen, print" href="{{ asset('admin/assets/css/markdown.css') }}">
      @yield('stylesheet')
   </head>
   <body class="mod-bg-1 mod-nav-link ">
      <!-- DOC: script to save and load page settings -->
      <script>
         /**
          *	This script should be placed right after the body tag for fast execution
          *	Note: the script is written in pure javascript and does not depend on thirdparty library
          **/
         'use strict';
         
         var classHolder = document.getElementsByTagName("BODY")[0],
             /**
              * Load from localstorage
              **/
             themeSettings = (localStorage.getItem('themeSettings')) ? JSON.parse(localStorage.getItem('themeSettings')) :
             {},
             themeURL = themeSettings.themeURL || '',
             themeOptions = themeSettings.themeOptions || '';
         /**
          * Load theme options
          **/
         if (themeSettings.themeOptions)
         {
             classHolder.className = themeSettings.themeOptions;
             console.log("%c✔ Theme settings loaded", "color: #148f32");
         }
         else
         {
             console.log("%c✔ Heads up! Theme settings is empty or does not exist, loading default settings...", "color: #ed1c24");
         }
         if (themeSettings.themeURL && !document.getElementById('mytheme'))
         {
             var cssfile = document.createElement('link');
             cssfile.id = 'mytheme';
             cssfile.rel = 'stylesheet';
             cssfile.href = themeURL;
             document.getElementsByTagName('head')[0].appendChild(cssfile);
         
         }
         else if (themeSettings.themeURL && document.getElementById('mytheme'))
         {
             document.getElementById('mytheme').href = themeSettings.themeURL;
         }
         /**
          * Save to localstorage
          **/
         var saveSettings = function()
         {
             themeSettings.themeOptions = String(classHolder.className).split(/[^\w-]+/).filter(function(item)
             {
                 return /^(nav|header|footer|mod|display)-/i.test(item);
             }).join(' ');
             if (document.getElementById('mytheme'))
             {
                 themeSettings.themeURL = document.getElementById('mytheme').getAttribute("href");
             };
             localStorage.setItem('themeSettings', JSON.stringify(themeSettings));
         }
         /**
          * Reset settings
          **/
         var resetSettings = function()
         {
             localStorage.setItem("themeSettings", "");
         }
         
      </script>
      <!-- BEGIN Page Wrapper -->
      <div class="page-wrapper">
         <div class="page-inner">
            <!-- BEGIN Left Aside -->
            @include('admin.component.left-side-menu')
            <!-- END Left Aside -->
            <div class="page-content-wrapper">
               <!-- BEGIN Page Header -->
               <!-- BEGIN Page Header -->
                @include('admin.component.page-header')
               <!-- END Page Header -->
               <!-- END Page Header -->
               <!-- BEGIN Page Content -->
               <!-- the #js-page-content id is needed for some plugins to initialize -->
               <main id="js-page-content" role="main" class="page-content">
                  <ol class="breadcrumb page-breadcrumb">
                     <li class="breadcrumb-item"><a href="javascript:void(0);">SmartAdmin</a></li>
                     <li class="breadcrumb-item">REST API</li>
                     <li class="breadcrumb-item active">Documentation</li>
                     <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
                  </ol>
                  @yield('content')
               </main>
               <!-- END Page Content -->
               <!-- this overlay is activated only when mobile menu is triggered -->
               <div class="page-content-overlay" data-action="toggle" data-class="mobile-nav-on"></div>
               <!-- BEGIN Page Footer -->
               <!-- BEGIN Page Footer -->
                @include('admin.component.footer')
               <!-- END Page Footer -->
               <!-- END Page Footer -->
            </div>
         </div>
      </div>
      <!-- END Page Wrapper -->
      <!-- BEGIN Quick Menu -->
      <!-- BEGIN Quick Menu -->
      <!-- to add more items, please make sure to change the variable '$menu-items: number;' in your _page-components-shortcut.scss -->
      <nav class="shortcut-menu d-none d-sm-block">
         <input type="checkbox" class="menu-open" name="menu-open" id="menu_open" />
         <label for="menu_open" class="menu-open-button ">
         <span class="app-shortcut-icon d-block"></span>
         </label>
         <a href="#" class="menu-item btn" data-toggle="tooltip" data-placement="left" title="Scroll Top">
         <i class="fal fa-arrow-up"></i>
         </a>
         <a href="page_login.html" class="menu-item btn" data-toggle="tooltip" data-placement="left" title="Logout">
         <i class="fal fa-sign-out"></i>
         </a>
         <a href="#" class="menu-item btn" data-action="app-fullscreen" data-toggle="tooltip" data-placement="left" title="Full Screen">
         <i class="fal fa-expand"></i>
         </a>
      </nav>
      <!-- END Quick Menu -->
      <!-- END Quick Menu -->
      <!-- BEGIN Colors -->
      <!-- BEGIN Color profile -->
      <!-- this area is hidden and will not be seen on screens or screen readers -->
      <!-- we use this only for CSS color refernce for JS stuff -->
      <p id="js-color-profile" class="d-none">
         <span class="color-primary-50"></span>
         <span class="color-primary-100"></span>
         <span class="color-primary-200"></span>
         <span class="color-primary-300"></span>
         <span class="color-primary-400"></span>
         <span class="color-primary-500"></span>
         <span class="color-primary-600"></span>
         <span class="color-primary-700"></span>
         <span class="color-primary-800"></span>
         <span class="color-primary-900"></span>
         <span class="color-info-50"></span>
         <span class="color-info-100"></span>
         <span class="color-info-200"></span>
         <span class="color-info-300"></span>
         <span class="color-info-400"></span>
         <span class="color-info-500"></span>
         <span class="color-info-600"></span>
         <span class="color-info-700"></span>
         <span class="color-info-800"></span>
         <span class="color-info-900"></span>
         <span class="color-danger-50"></span>
         <span class="color-danger-100"></span>
         <span class="color-danger-200"></span>
         <span class="color-danger-300"></span>
         <span class="color-danger-400"></span>
         <span class="color-danger-500"></span>
         <span class="color-danger-600"></span>
         <span class="color-danger-700"></span>
         <span class="color-danger-800"></span>
         <span class="color-danger-900"></span>
         <span class="color-warning-50"></span>
         <span class="color-warning-100"></span>
         <span class="color-warning-200"></span>
         <span class="color-warning-300"></span>
         <span class="color-warning-400"></span>
         <span class="color-warning-500"></span>
         <span class="color-warning-600"></span>
         <span class="color-warning-700"></span>
         <span class="color-warning-800"></span>
         <span class="color-warning-900"></span>
         <span class="color-success-50"></span>
         <span class="color-success-100"></span>
         <span class="color-success-200"></span>
         <span class="color-success-300"></span>
         <span class="color-success-400"></span>
         <span class="color-success-500"></span>
         <span class="color-success-600"></span>
         <span class="color-success-700"></span>
         <span class="color-success-800"></span>
         <span class="color-success-900"></span>
         <span class="color-fusion-50"></span>
         <span class="color-fusion-100"></span>
         <span class="color-fusion-200"></span>
         <span class="color-fusion-300"></span>
         <span class="color-fusion-400"></span>
         <span class="color-fusion-500"></span>
         <span class="color-fusion-600"></span>
         <span class="color-fusion-700"></span>
         <span class="color-fusion-800"></span>
         <span class="color-fusion-900"></span>
      </p>
      <!-- END Color profile -->
      <!-- END Colors -->
      <!-- BEGIN Page Settings -->
      <!-- BEGIN Page Settings -->
        @include('admin.component.layout-setting')
      <!-- END Page Settings -->
      <!-- END Page Settings -->
      <!-- Global site tag (gtag.js) - Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-143247136-2"></script>
      <script>
         window.dataLayer = window.dataLayer || [];
         
         function gtag()
         {
             dataLayer.push(arguments);
         }
         gtag('js', new Date());
         
         gtag('config', 'UA-143247136-2');
         
      </script>
      <script src="{{ asset('admin/assets/js/vendors.bundle.js') }}"></script>
      <script src="{{ asset('admin/assets/js/app.bundle.js') }}"></script>
      @yield('scripts')
   </body>
</html>