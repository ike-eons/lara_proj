<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
            <router-link to="{!! ('/dashboard') !!}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt text-teal"></i>
              <p>Dashboard</p>
            </router-link>
          </li>
          <!-- Management Treeview -->
          <li class="nav-item has-treeview menu-open">
            <router-link to="{!! ('#') !!}" class="nav-link">
            <i class="fa fa-th nav-icon text-orange"></i>
              <p>
                Management
                <i class="right fa fa-angle-left text-orange"></i>
              </p>
            </router-link>
            <ul class="nav nav-treeview">
              <li class="nav-item ml-3">
                <router-link to="{!! ('/users') !!}" class="nav-link">
                  <p>
                  <i class="fas fa-users"></i>
                    Users
                  </p>
                </router-link>
              </li>
             
            </ul>
          </li>

          <!-- Profile -->
          <li class="nav-item">
            <router-link to="/profile" class="nav-link">
              <i class="fas fa-user nav-icon"></i>
              <p>Profile</p>
            </router-link>
          </li>

          <!-- logout processing -->
          <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}"
              onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
              <i class="fas fa-power-off nav-icon text-red"></i>
              <p>
                {{ __('Logout') }}
              </p>
            </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
          </li>
        </ul>