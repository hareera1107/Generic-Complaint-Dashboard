<div class="sidebar">
    <div class="profile">
        <img src="{{ asset('images/logo.png') }}">
        <div class="name">{{ Auth::user()->name }}</div>
        <div class="email">{{ Auth::user()->email }}</div>
    </div>
    <div class="menu">
        <ul>
            <!-- <li><a href="#">Pending Complaint</a></li>
            <li><a href="#">Complete Complaint</a></li>
            <li><a href="#">In Progress Complaint</a></li> -->
            <li><a href="home">Home</a></li>
            <li><a href="{{ route('complaints.index') }}">Complaints</a></li>
            <li><a href="charts">Charts</a></li>
            <li><a href="reports">Reports</a></li>
            <li><a href="{{ route('users.index') }}">Users</a></li>
            <li><a href="setting">Settings</a></li>
            
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