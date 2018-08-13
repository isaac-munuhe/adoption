<!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="{{url ('admin')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url ('admin/children')}}">
            <i class="fas fa-fw fa-users"></i>
            <span>View Child Bio</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url ('admin/upload')}}">
            <i class="fas fa-fw fa-upload"></i>
            <span>Upload Document</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url ('admin/request')}}">
            <i class="fas fa-fw fa-book"></i>
            <span>Request Adoption</span></a>
        </li>
      </ul>