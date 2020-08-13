<aside class="page-sidebar">
    <div class="page-logo">
      <a href="#" class="page-logo-link press-scale-down d-flex align-items-center position-relative" data-toggle="modal" data-target="#modal-shortcut">
      <img src="{{ asset('admin/assets/img/logo.png') }}" alt="SmartAdmin for PHP" aria-roledescription="logo">
      <span class="page-logo-text mr-1">SmartAdmin for PHP</span>
      <span class="position-absolute text-white opacity-50 small pos-top pos-right mr-2 mt-n2"></span>
      </a>
    </div>
    <!-- BEGIN PRIMARY NAVIGATION -->
    <nav id="js-primary-nav" class="primary-nav" role="navigation">
      <div class="nav-filter">
          <div class="position-relative">
            <input type="text" id="nav_filter_input" placeholder="Filter menu" class="form-control" tabindex="0">
            <a href="#" onclick="return false;" class="btn-primary btn-search-close js-waves-off" data-action="toggle" data-class="list-filter-active" data-target=".page-sidebar">
            <i class="fal fa-chevron-up"></i>
            </a>
          </div>
      </div>
      <ul class="nav-menu" id="js-nav-menu">
          <li>
            <a href="#" title="Application Intel"  class=" " data-filter-tags="application intel">
            <i class="fal fa-info-circle"></i>
            <span class="nav-link-text" data-i18n="nav.application_intel">General Setup</span>
            </a>
            <ul>
                <li>
                  <a href="intel_analytics_dashboard.html" title="Analytics Dashboard"  class=" " data-filter-tags="application intel analytics dashboard">
                  <span class="nav-link-text" data-i18n="nav.application_intel_analytics_dashboard">Analytics Dashboard</span>
                  </a>
                </li>
                <li>
                  <a href="intel_marketing_dashboard.html" title="Marketing Dashboard"  class=" " data-filter-tags="application intel marketing dashboard">
                  <span class="nav-link-text" data-i18n="nav.application_intel_marketing_dashboard">Marketing Dashboard</span>
                  </a>
                </li>
                <li>
                  <a href="intel_introduction.html" title="Introduction"  class=" " data-filter-tags="application intel introduction">
                  <span class="nav-link-text" data-i18n="nav.application_intel_introduction">Introduction</span>
                  </a>
                </li>
                <li>
                  <a href="intel_privacy.html" title="Privacy"  class=" " data-filter-tags="application intel privacy">
                  <span class="nav-link-text" data-i18n="nav.application_intel_privacy">Privacy</span>
                  </a>
                </li>
            </ul>
          </li>
          <li>
            <a href="#" title="Application Intel"  class=" " data-filter-tags="application intel">
            <i class="fal fa-info-circle"></i>
            <span class="nav-link-text" data-i18n="nav.application_intel">Products</span>
            </a>
            <ul>
                <li>
                  <a href="{{ route('admin.products') }}" title="Product Lists"  class=" " data-filter-tags="application intel analytics dashboard">
                  <span class="nav-link-text" data-i18n="nav.application_intel_analytics_dashboard">Product Lists</span>
                  </a>
                </li>
                <li>
                  <a href="intel_marketing_dashboard.html" title="Marketing Dashboard"  class=" " data-filter-tags="application intel marketing dashboard">
                  <span class="nav-link-text" data-i18n="nav.application_intel_marketing_dashboard">Marketing Dashboard</span>
                  </a>
                </li>
                <li>
                  <a href="intel_introduction.html" title="Introduction"  class=" " data-filter-tags="application intel introduction">
                  <span class="nav-link-text" data-i18n="nav.application_intel_introduction">Introduction</span>
                  </a>
                </li>
                <li>
                  <a href="intel_privacy.html" title="Privacy"  class=" " data-filter-tags="application intel privacy">
                  <span class="nav-link-text" data-i18n="nav.application_intel_privacy">Privacy</span>
                  </a>
                </li>
            </ul>
          </li>
      </ul>
      <div class="filter-message js-filter-message bg-success-600"></div>
    </nav>
    <!-- END PRIMARY NAVIGATION -->
</aside>