<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
      <a href="{{ route('admin') }}" class="app-brand-link">
        <span class="app-brand-logo demo">
        </span>
        <span class="app-brand-text demo menu-text fw-bolder ms-2">Admin Panel</span>
      </a>

      <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
        <i class="bx bx-chevron-left bx-sm align-middle"></i>
      </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
      <!-- Dashboard -->
      <li class="menu-item {{ (request()->is('admin/dashboard')) ? 'active' : '' }} ">
        <a href="{{ route('admin') }}" class="menu-link">
          <i class="menu-icon tf-icons bx bx-home-circle"></i>
          <div data-i18n="Analytics">Dashboard</div>
        </a>
      </li>

      <!-- Layouts -->
      <li class="menu-item {{ (request()->is(['admin/subcategory', 'admin/user/all'])) ? 'open' : '' }} ">
        <a href="javascript:void(0);" class="menu-link menu-toggle ">
          <i class="menu-icon tf-icons bx bx-user"></i>
          <div data-i18n="Layouts">Manage User</div>
        </a>

        <ul class="menu-sub">
          <li class="menu-item {{ (request()->is('admin/user/all')) ? 'active' : '' }}">
            <a href="{{ url('admin/user/all') }}" class="menu-link ">
              <div data-i18n="Without menu">All Users</div>
            </a>
          </li>
        </ul>
      </li>
         <!-- Layouts -->
      <li class="menu-item ">
        <a href="javascript:void(0);" class="menu-link menu-toggle ">
          <i class="menu-icon tf-icons bx bx-layout"></i>
          <div data-i18n="Layouts">Manage Post</div>
        </a>

        <ul class="menu-sub">
          <li class="menu-item ">
            <a href="{{ route('admin.post') }} " class="menu-link ">
              <div data-i18n="Without menu">All Post</div>
            </a>
          </li>
          <li class="menu-item ">
            <a href="" class="menu-link">
              <div data-i18n="Without navbar">Pending Post</div>
            </a>
          </li>
          {{-- {{ (request()->is(['admin/subcategory', 'admin/category', 'admin/subcategory','admin/product','admin/add-product'])) ? 'open' : '' }} --}}
          {{-- {{ (request()->is('admin/category')) ? 'active' : '' }} --}}
        </ul>
      </li>

      <li class="menu-item {{ (request()->is(['admin/country', 'admin/country/add','admin/category/edit'])) ? 'open' : '' }}">
        <a href="javascript:void(0);" class="menu-link menu-toggle ">
          <i class="menu-icon tf-icons bx bx-layout"></i>
          <div data-i18n="Layouts">Manage Country</div>
        </a>

        <ul class="menu-sub">
          <li class="menu-item {{ (request()->is('admin/country'))? 'active':'' }}">
            <a href="{{ route('admin.country') }} " class="menu-link ">
              <div data-i18n="Without menu">All Countries</div>
            </a>
          </li>
          <li class="menu-item {{ (request()->is('admin/country/add'))? 'active':'' }}">
            <a href="{{ route('admin.country.add') }} " class="menu-link ">
              <div data-i18n="Without menu">Add Countries</div>
            </a>
          </li>

          {{-- {{ (request()->is(['admin/subcategory', 'admin/category', 'admin/subcategory','admin/product','admin/add-product'])) ? 'open' : '' }} --}}
          {{-- {{ (request()->is('admin/category')) ? 'active' : '' }} --}}

        </ul>
      </li>

      <li class="menu-item {{ (request()->is(['admin/state','admin/state/add']))?"open":"" }} ">
        <a href="javascript:void(0);" class="menu-link menu-toggle ">
          <i class="menu-icon tf-icons bx bx-layout"></i>
          <div data-i18n="Layouts">Manage State</div>
        </a>

        <ul class="menu-sub">
          <li class="menu-item {{ (request()->is('admin/state'))? "active":"" }} ">
            <a href="{{ route('admin.state') }} " class="menu-link ">
              <div data-i18n="Without menu">All State</div>
            </a>
          </li>
          <li class="menu-item {{ (request()->is('admin/state/add'))?"active":"" }} ">
            <a href="{{ route('admin.state.add') }} " class="menu-link">
              <div data-i18n="Without navbar">Add State</div>
            </a>
          </li>
          {{-- {{ (request()->is(['admin/subcategory', 'admin/category', 'admin/subcategory','admin/product','admin/add-product'])) ? 'open' : '' }} --}}
          {{-- {{ (request()->is('admin/category')) ? 'active' : '' }} --}}
        </ul>
      </li>

      <li class="menu-item ">
        <a href="javascript:void(0);" class="menu-link menu-toggle ">
          <i class="menu-icon tf-icons bx bx-layout"></i>
          <div data-i18n="Layouts">Manage City</div>
        </a>

        <ul class="menu-sub">
          <li class="menu-item ">
            <a href="{{ route('admin.city') }} " class="menu-link ">
              <div data-i18n="Without menu">All City</div>
            </a>
          </li>
          <li class="menu-item ">
            <a href="" class="menu-link">
              <div data-i18n="Without navbar">Add City</div>
            </a>
          </li>
          {{-- {{ (request()->is(['admin/subcategory', 'admin/category', 'admin/subcategory','admin/product','admin/add-product'])) ? 'open' : '' }} --}}
          {{-- {{ (request()->is('admin/category')) ? 'active' : '' }} --}}
        </ul>
      </li>
      <li class="menu-item  {{ (request()->is(['admin/category', 'admin/category/add','admin/category/edit'])) ? 'open' : '' }}">
        <a href="javascript:void(0);" class="menu-link menu-toggle ">
          <i class="menu-icon tf-icons bx bx-layout"></i>
          <div data-i18n="Layouts">Manage Category</div>
        </a>

        <ul class="menu-sub">
          {{--  --}}
          {{-- {{ (request()->is('admin/category')) ? 'active' : '' }} --}}
          <li class="menu-item {{ (request()->is('admin/category')) ? 'active' : '' }}">
            <a href="{{ route('admin.category') }} " class="menu-link ">
              <div data-i18n="Fluid">All Category</div>
            </a>
          </li>
          <li class="menu-item {{ (request()->is('admin/category/add')) ? 'active' : '' }}">
            <a href="{{ route('admin.category.add') }} " class="menu-link">
              <div data-i18n="Blank">Add Category</div>
            </a>
          </li>
        </ul>
      </li>
      <li class="menu-item {{ (request()->is(['admin/subcategory', 'admin/subcategory/add','admin/category/edit'])) ? 'open' : '' }}">
        <a href="javascript:void(0);" class="menu-link menu-toggle ">
          <i class="menu-icon tf-icons bx bx-layout"></i>
          <div data-i18n="Layouts">Manage Sub Category</div>
        </a>

        <ul class="menu-sub">
          <li class="menu-item {{ (request()->is('admin/subcategory')) ? 'active' : '' }}">
            <a href="{{ route('admin.subcategory') }} " class="menu-link  ">
              <div data-i18n="Fluid">All Sub Category</div>
            </a>
          </li>
          <li class="menu-item {{ (request()->is('admin/subcategory/add')) ? 'active' : '' }}">
            <a href="{{ route('admin.add.subcategory') }}" class="menu-link">
              <div data-i18n="Blank">Add Sub Category</div>
            </a>
          </li>
        </ul>
      </li>

      <li class="menu-item">
        <a href="" class="menu-link ">
          <i class="menu-icon tf-icons bx bx-layout"></i>
          <div data-i18n="Analytics">Manage Ads</div>
        </a>
      </li>
      <li class="menu-item">
        <a href="{{ route('admin.pages') }}" class="menu-link">
          <i class="menu-icon tf-icons bx bx-layout"></i>
          <div data-i18n="Analytics">Manage Pages</div>
        </a>
      </li>
      <li class="menu-item">
        <a href="{{ route('admin') }}" class="menu-link">
          <i class="menu-icon tf-icons bx bx-cog"></i>
          <div data-i18n="Analytics">Transaction History</div>
        </a>
      </li>

      <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons bx bx-cog"></i>
          <div data-i18n="Authentications">Settings</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="auth-login-basic.html" class="menu-link" target="_blank">
              <div data-i18n="Basic">Genaral settings</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="auth-register-basic.html" class="menu-link" target="_blank">
              <div data-i18n="Basic">SMTP </div>
            </a>
          </li>
        </ul>
      </li>
    </ul>
  </aside>
