<aside class="main-sidebar sidebar-dark-primary elevation-4">
  
  <div class="sidebar">
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

        <li class="nav-header"></li>
        <li class="nav-item">
          <a href="{{ route('admin.logout') }} " class="nav-link">
            <i class="bi-alarm"></i>
            <p>
              {{Auth::user()->name}} {{Str::ucfirst(trans('app.logout'))}}
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

        <li class="nav-header">{{Str::upper(trans('app.data_tables'))}}</li>
        <li class="nav-item">
          <a href="{{ route('admin.games.index') }} " class="nav-link">
            <i class="nav-icon far fa-calendar-alt"></i>
            <p>
              {{Str::ucfirst(trans('app.games'))}}
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

        <li class="nav-header"></li>
        <li class="nav-item">
          <a href="{{ route('admin.genres.index') }} " class="nav-link">
            <i class="nav-icon far fa-calendar-alt"></i>
            <p>
              {{Str::ucfirst(trans('app.genres'))}}
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

        <li class="nav-header"></li>
        <li class="nav-item">
          <a href="{{ route('admin.languages.index') }} " class="nav-link">
            <i class="nav-icon far fa-calendar-alt"></i>
            <p>
              {{Str::ucfirst(trans('app.languages'))}}
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

        <li class="nav-header"></li>
        <li class="nav-item">
          <a href="{{ route('admin.platforms.index') }} " class="nav-link">
            <i class="nav-icon far fa-calendar-alt"></i>
            <p>
              {{Str::ucfirst(trans('app.platforms'))}}
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>