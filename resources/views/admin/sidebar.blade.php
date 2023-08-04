
  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="{{ route('admin.dashboard') }}">
          <i class="ri-dashboard-fill"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="ri-database-2-fill"></i><span>Master Data</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="/layanan">
              <i class="bi bi-circle"></i><span>Master Layanan</span>
            </a>
          </li>
          <li>
            <a href="/dokter">
              <i class="bi bi-circle"></i><span>Master Dokter</span>
            </a>
          </li>
          <li>
            <a href="/poli_a">
              <i class="bi bi-circle"></i><span>Master Poliklinik</span>
            </a>
          </li>
          <li>
            <a href="/rekanan">
              <i class="bi bi-circle"></i><span>Rekanan dan Mitra</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->
      <li class="nav-item">
        <a class="nav-link " href="/jadwal">
          <i class="ri-calendar-2-line"></i>
          <span>Jadwal Dokter</span>
        </a>
      </li><!-- End Dashboard Nav -->
      <li class="nav-item">
        <a class="nav-link " href="/media">
          <i class="ri-file-edit-fill"></i>
          <span>Media</span>
        </a>
      </li><!-- End Dashboard Nav -->

    </ul>

  </aside><!-- End Sidebar-->