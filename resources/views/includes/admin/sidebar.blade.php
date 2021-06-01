<div class="main-sidebar">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="index.html">SIA-UNIV</a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="index.html">St</a>
      </div>
      <ul class="sidebar-menu">
          <li class="menu-header">Dashboard</li>
          <li class="nav-item dropdown">
            <a href="{{ route('home') }}" ><i class="fas fa-fire"></i><span>Dashboard</span></a>
          </li>
          <li class="menu-header">Data</li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-book"></i> <span>Mata Kuliah</span></a>
            <ul class="dropdown-menu">
              <li><a class="nav-link" href="{{ route('matkul-index') }}">List Mata Kuliah</a></li>
              <li><a class="nav-link" href="{{ route('matkul-create') }}">Create Mata Kuliah</a></li>
            </ul>
        </li>
    </aside>
  </div>