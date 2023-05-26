<div class="sidebar">
    <div class="profile">
        <img src="{{ asset('images/logo.jpeg') }}">
        <div class="name">{{ Auth::user()->name }}</div>
        <div class="email">{{ Auth::user()->email }}</div>
    </div>
    <div class="menu">
        <ul>
            <!-- <li><a href="#">Pending Complaint</a></li>
            <li><a href="#">Complete Complaint</a></li>
            <li><a href="#">In Progress Complaint</a></li> -->
            <li><a href="home">Dashboard</a></li>
            <li><a href="{{ route('complaints.index') }}">Complaints</a></li>
            <li><a href="{{ route('complaints.charts') }}">Charts</a></li>
            <li><a href="{{ route('complaints.reports') }}">Reports</a></li>
            <li><a href="{{ route('users.index') }}">Users</a></li>
            {{-- <li><a href="{{ route('categories.index') }}">Configuration</a></li> --}}
            <li class="dropdown">
                <a href="#" class="dropdown-toggle">Configuration</a>
                <ul class="dropdown-content">
                    <li><a href="{{ route('categories.index') }}">Categories</a></li>
                    <li><a href="{{ route('districts.index') }}">Districts</a></li>
                </ul>
            </li>
            <li>
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Logout
                </a>  
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>

             </li>
        </ul>
    </div>

</div>