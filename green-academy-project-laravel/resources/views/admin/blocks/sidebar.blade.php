<aside class="main-sidebar elevation-4">
    <!-- Brand Logo -->
    <a class="brand-link">
      <img src="{{ asset('administrator/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light"><a href="{{ route ('adminIndex') }}">Admin Index</a></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        {{-- <div class="image">
          <img src="http://127.0.0.1:8000/administrator/dist/img/abc.jpg" class="img-circle elevation-2" alt="User Image">
        </div> --}}
        @if(Auth::check())
        <div class="row">
          <div class="info">
            <a href="#" class="d-block">{{ Auth::user()->username }}</a>
          </div>
          <div class="info">
            <a href="{{ route('logout') }}">Logout</a>
          </div>
        </div>
        @endif
      </div>
      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div><div class="sidebar-search-results"><div class="list-group"><a href="#" class="list-group-item"><div class="search-title"><strong class="text-light"></strong>N<strong class="text-light"></strong>o<strong class="text-light"></strong> <strong class="text-light"></strong>e<strong class="text-light"></strong>l<strong class="text-light"></strong>e<strong class="text-light"></strong>m<strong class="text-light"></strong>e<strong class="text-light"></strong>n<strong class="text-light"></strong>t<strong class="text-light"></strong> <strong class="text-light"></strong>f<strong class="text-light"></strong>o<strong class="text-light"></strong>u<strong class="text-light"></strong>n<strong class="text-light"></strong>d<strong class="text-light"></strong>!<strong class="text-light"></strong></div><div class="search-path"></div></a></div></div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <!-- Main -->
            <li class="nav-item">
              <a href="{{ route('home') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>User Page</p>
              </a>
            </li>

          <!-- Bill -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <p>
                Cart
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin.bill.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.bill.create') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create New</p>
                </a>
              </li>
            </ul>
          </li>

          <!-- Bill Detail -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <p>
                Store
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin.cart.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.cart.create') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create New</p>
                </a>
              </li>
            </ul>
          </li>

          <!-- Category Forum -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <p>
                Category Forum
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin.category-forum.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.category-forum.create') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create New</p>
                </a>
              </li>
            </ul>
          </li>

          <!-- Class -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <p>
                Class Character
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin.class.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.class.create') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create New</p>
                </a>
              </li>
            </ul>
          </li>
   
          <!-- Comment -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <p>
                Comment list
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin.comment.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.comment.create') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create New</p>
                </a>
              </li>
            </ul>
          </li>
          
          <!-- History purchase -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <p>
                History purchase
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin.history-purchase.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.history-purchase.create') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create New</p>
                </a>
              </li>
            </ul>
          </li>

          <!-- Item -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <p>
                Item list
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin.item.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.item.create') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create New</p>
                </a>
              </li>
            </ul>
          </li>
    
          <!-- Payment -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <p>
                Payment Method
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin.payment.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.payment.create') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create New</p>
                </a>
              </li>
            </ul>
          </li>

          <!-- Post Forum -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <p>
                Post Forum
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin.post-forum.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.post-forum.create') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create New</p>
                </a>
              </li>
            </ul>
          </li>
          
          <!-- Skill -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <p>
                Skill
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin.skill.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.skill.create') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create New</p>
                </a>
              </li>
            </ul>
          </li>

          <!-- User -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <p>
                User
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin.user.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.user.create') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create New</p>
                </a>
              </li>
            </ul>
          </li>

          <!-- News -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <p>
                News
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin.news.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.news.create') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create New</p>
                </a>
              </li>
            </ul>
          </li>
          
          <!-- Cate Support -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <p>
                Category Support
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin.category-support.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.category-support.create') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create New</p>
                </a>
              </li>
            </ul>
          </li>

          <!-- Support questions -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <p>
                Support questions
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin.support.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.support.create') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create New</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
