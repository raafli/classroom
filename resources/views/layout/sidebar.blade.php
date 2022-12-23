<div data-simplebar class="h-100">


    <div class="user-sidebar text-center">
        <div class="dropdown">
            <div class="user-img">
                <img src="{{ asset('admin/template/morvin-django/layouts/assets/images/users/avatar-7.jpg') }}" alt="" class="rounded-circle">
                <span class="avatar-online bg-success"></span>
            </div>
            <div class="user-info">
                <h5 class="mt-3 font-size-16 text-white">{{ Auth::user()->name }}</h5>
                <span class="font-size-13 text-white-50">{{ Auth::user()->role }}</span>
            </div>
        </div>
    </div>



    <!--- Sidemenu -->
    <div id="sidebar-menu">
        <!-- Left Menu Start -->
        <ul class="metismenu list-unstyled" id="side-menu">
            <li class="menu-title">Menu</li>

            <li>
                <a href="/" class="waves-effect">
                    <i class="fa-solid fa-house"></i><span class="badge rounded-pill bg-info float-end"></span>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="menu-title">Task</li>

            <li>
                <a href="/datatugas" class=" waves-effect">
                    <i class="fa-solid fa-book"></i>
                    <span>Tugas</span>
                </a>
            </li>

            <li>
                <a href="/pengumpulan" class=" waves-effect">
                    <i class="fa-solid fa-cloud-arrow-up"></i>
                    <span>Pengumpulan Tugas</span>
                </a>
            </li>

            <li class="menu-title">Data</li>

            <li>
                <a href="/datasiswa" class=" waves-effect">
                    <i class="fa-solid fa-person"></i>
                    <span>Data Siswa</span>
                </a>
            </li>
                @if(auth()->user()->role=="admin")
            <li>
                <a href="/dataguru" class=" waves-effect">
                    <i class="fa-solid fa-person"></i>
                    <span>Data Guru</span>
                </a>
            </li>

            <li class="menu-title">Lainnya</li>

            <li>
                <a href="/datamapel" class=" waves-effect">
                    <i class="fa-solid fa-list"></i>
                    <span>Mapel</span>
                </a>
            </li>

            <li>
                <a href="/datakelas" class=" waves-effect">
                    <i class="fa-solid fa-chalkboard"></i>
                    <span>Kelas</span>
                </a>
            </li>
            @endif

            <li>

                {{-- <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="fa-solid fa-caret-down"></i>
                    <span>Dll</span>
                </a>
                <ul class="sub-menu" aria-expanded="false"> --}}
                    {{-- <li><a href="/datasiswa">Data Siswa</a></li> --}}
                    {{-- <li><a href="/dataguru">Data Guru</a></li>
                    <li><a href="/datamapel">Mapel</a></li>
                    <li><a href="/datakelas">Kelas</a></li>
                </ul> --}}
            </li>

        </ul>
    </div>
    <!-- Sidebar -->
</div>
