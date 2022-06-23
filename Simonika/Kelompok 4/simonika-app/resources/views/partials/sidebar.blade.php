<aside class="left-sidebar" data-sidebarbg="skin6">
    {{-- Sidebar scroll --}}
    <div class="scroll-sidebar">
        {{-- Sidebar navigation --}}
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="sidebar-item"> <a
                        class="sidebar-link waves-effect waves-dark sidebar-link text-decoration-none {{ Request::is('home*') ? 'active' : '' }}"
                        href="/home" aria-expanded="false" style="font-weight: bold;">
                        <i class="bi bi-house-door-fill me-3" aria-hidden="true"></i><span
                            class="hide-menu">Home</span></a>
                </li>
                <li class="sidebar-item"> <a
                        class="sidebar-link waves-effect waves-dark sidebar-link text-decoration-none {{ Request::is('penilaian*') ? 'active' : '' }} "
                        href="/penilaian" aria-expanded="false" style="font-weight: bold;">
                        <i class="bi bi-file-earmark-diff-fill me-3" aria-hidden="true"></i><span
                            class="hide-menu">Penilaian</span></a>
                </li>
                <li class="sidebar-item"> <a
                        class="sidebar-link waves-effect waves-dark sidebar-link text-decoration-none {{ Request::is('laporan*') ? 'active' : '' }} "
                        href="/laporan" aria-expanded="false" style="font-weight: bold;">
                        <i class="bi bi-stack me-3" aria-hidden="true"></i><span class="hide-menu">Laporan</span></a>
                </li>
                <li class="text-center upgrade-btn">
                    <form action="/logout" method="post">
                        @csrf
                        <button class="btn btn-danger text-white mt-4 fw-bold"><i
                                class="bi bi-box-arrow-right me-2"></i>
                            Logout</button>
                    </form>
                </li>
            </ul>
        </nav>
        {{-- End Sidebar navigation --}}
    </div>
    {{-- End Sidebar scroll --}}
</aside>