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
            <span>Children</span></a>
        </li>
        @if(Auth::check())
        @if(Auth::user()->admin)
        <li class="nav-item">
          <a class="nav-link" href="{{url ('admin/children/create')}}">
            <i class="fas fa-fw fa-plus"></i>
            <span>Add Child</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url ('admin/adoptees')}}">
            <i class="fas fa-fw fa-users"></i>
            <span>Adopters</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url ('admin/available')}}">
            <i class="fas fa-fw fa-user"></i>
            <span>Availbale 4 Adoption</span></a>
        </li>
        @endif
        @endif
        <li class="nav-item">
          <a class="nav-link" href="{{url ('admin/request')}}">
            <i class="fas fa-fw fa-book"></i>
            <span>Adoption Guidelines</span></a>
        </li>
      </ul>