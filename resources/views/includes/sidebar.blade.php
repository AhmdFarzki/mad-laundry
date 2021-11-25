<div class="main-sidebar">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        <img src="{{ asset('assets/img/logo.png') }}" class="img" width="30" alt="">
      <a href="{{ url('dashboard')}}">Ahmad Laundry</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="{{ url('dashboard')}}">AL</a>
    </div>
    <ul class="sidebar-menu">
        <li class="menu-header">Dashboard</li>
        <li class="nav-item {{ Request::is('dashboard') ? 'active' : '' }}">
          <a href="{{ route('dashboard')}}" class="nav-link"><i class="fas fa-school"></i><span>Dashboard</span></a>
        </li>
        @if(auth()->user()->role == 'admin')
        <li class="menu-header">Data Master</li>
        <li class="nav-item {{ Request::is('data-outlet') ? 'active' : '' }}"><a class="nav-link" href="{{ url('data-outlet') }}"><i class="fas fa-store-alt"></i> <span>Data Outlet</span></a></li>
        <li class="nav-item {{ Request::is('data-paket') ? 'active' : '' }}"><a class="nav-link" href="{{ url('data-paket') }}"><i class="fas fa-layer-group"></i> <span>Data Paket Cucian</span></a></li>
        <li class="nav-item {{ Request::is('data-spp') ? 'active' : '' }}"><a class="nav-link" href="{{url('data-spp')}}"><i class="fas fa-receipt"></i> <span>Data Pelanggan</span></a></li>
        <li class="nav-item {{ Request::is('data-spp') ? 'active' : '' }}"><a class="nav-link" href="{{url('data-spp')}}"><i class="fas fa-user-cog"></i> <span>Data Pengguna</span></a></li>
        @endif

        <li class="menu-header">Transaksi   </li>
        <li class="nav-item {{ Request::is('pembayaran') ? 'active' : '' }}"><a class="nav-link" href="{{ url('pembayaran') }}"><i class="fas fa-money-bill-wave"></i> <span>Entry Pembayaran</span></a></li>

        @if(auth()->user()->role == 'admin')
        <li class="menu-header">Ekstra</li>
        <li class="nav-item {{ Request::is('laporan') ? 'active' : '' }}"><a class="nav-link" href="{{ url('laporan') }}"><i class="fas fa-file-invoice"></i> <span>Laporan</span></a></li>
        @endif

      </ul>
  </aside>
</div>
