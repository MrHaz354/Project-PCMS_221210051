<!-- SIDEBAR -->
<section id="sidebar">
    <a href="#" class="brand">
        <i class='bx bxs-smile'></i>
        <span class="text">Sistem Informasi</span>
    </a>
        <ul class="side-menu top">
            <li class="{{ Request::is('dashboard') ? 'active' : '' }}">
                <a href="{{ route('dashboard') }}">
                    <i class='bx bxs-dashboard' ></i>
                    <span class="text">Dashboard</span>
                </a>
            </li>
                    <li class="{{ Request::is('homes') ? 'active' : '' }}">
                        <a href="{{ URL::to('homes') }}">
                            <i class='bx bxs-home'></i>
                            <span class="text">Home</span>
                        </a>
                    </li>
                    <li class="{{ Request::is('profiles') ? 'active' : '' }}">
                        <a href="{{ URL::to('profiles') }}">
                            <i class='bx bxs-user-pin'></i>
                            <span class="text">Profile</span>
                        </a>
                    </li>
                    <li class="{{ Request::is('contacts') ? 'active' : '' }}">
                        <a href="{{ URL::to('contacts') }}">
                            <i class='bx bxs-doughnut-chart' ></i>
                            <span class="text">Contact Us</span>
                        </a>
                    </li>
                    <li class="{{ Request::is('footers') ? 'active' : '' }}">
                        <a href="{{ URL::to('footers') }}">
                            <i class='bx bx-link'></i>
                            <span class="text">Link Footers</span>
                        </a>
                    </li>
        </ul>
        <ul class="side-menu">
            <li>
                <a href="#">
                    <i class='bx bxs-cog' ></i>
                    <span class="text">Settings</span>
                </a>
            </li>
            <li>
                <a href="{{ route('logout') }}" class="logout">
                    <i class='bx bxs-log-out-circle' ></i>
                    <span class="text">Logout</span>
                </a>
            </li>
        </ul>
</section>
<!-- SIDEBAR -->