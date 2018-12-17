<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
            <router-link to="{!! ('/dashboard') !!}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </router-link>
          </li>
          <li class="nav-item has-treeview menu-open">
            <router-link to="{!! ('/dashboard') !!}" class="nav-link">
            <i class="fa fa-th nav-icon"></i>
              <p>
                Management
              </p>
            </router-link>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <p>Admin
                    <i class="right fa fa-angle-right"></i>
                  </p>
                </a>
              </li>
             
            </ul>
          </li>
          <li class="nav-item">
            <router-link to="/profile" class="nav-link">
              <i class="fas fa-user nav-icon"></i>
              <p>Profile</p>
            </router-link>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-power-off nav-icon"></i>
              <p>Logout</p>
            </a>
          </li>
        </ul>