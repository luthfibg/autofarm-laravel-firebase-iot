@if ($user->level == 1)
<li class="nav-header">DEVELOPER TOOLS</li>
<li class="nav-item">
    <a href="{{ url('home') }}" class="nav-link">
        <i class="nav-icon fas fa-bug"></i>
        <p>Inspect</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ url('source') }}" class="nav-link">
        <i class="nav-icon fas fa-cog"></i>
        <p>Source Code</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ url('home') }}" class="nav-link">
        <i class="nav-icon fas fa-microchip"></i>
        <p>Techno Bundle</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ url('home') }}" class="nav-link">
        <i class="nav-icon fas fa-power-off"></i>
        <p>Web Switch</p>
    </a>
</li>  
@endif

@if ($user->level == 2)
<li class="nav-header">ADMIN TOOLS</li>
<li class="nav-item">
    <a href="{{ url('home') }}" class="nav-link">
        <i class="nav-icon fas fa-edit"></i>
        <p>Edit</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ url('home') }}" class="nav-link">
        <i class="nav-icon fas fa-print"></i>
        <p>Print</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ url('home') }}" class="nav-link">
        <i class="nav-icon fas fa-file"></i>
        <p>Report</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ url('userlist') }}" class="nav-link">
        <i class="nav-icon fas fa-users"></i>
        <p>View users</p>
    </a>
</li>
<li class="nav-header">JUMP TO</li>
<li class="nav-item">
    <a href="{{ url('home') }}" class="nav-link">
        <i class="nav-icon fas fa-chart-line"></i>
        <p>Dashboard</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ url('home') }}" class="nav-link">
        <i class="nav-icon fas fa-temperature-low"></i>
        <p>Realtime Status</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ url('home') }}" class="nav-link">
        <i class="nav-icon fas fa-leaf"></i>
        <p>Plant</p>
    </a>
</li>
<li class="nav-header">CATEGORIES</li>
<li class="nav-item">
    <a href="{{ url('home') }}" class="nav-link">
        <i class="nav-icon fas fa-thermometer-half"></i>
        <p>Temperature</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ url('home') }}" class="nav-link">
        <i class="nav-icon fas fa-water"></i>
        <p>Humidity</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ url('home') }}" class="nav-link">
        <i class="nav-icon fas fa-calendar"></i>
        <p>Period</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ url('home') }}" class="nav-link">
        <i class="nav-icon fas fa-history"></i>
        <p>History</p>
    </a>
</li>
<li class="nav-header">UTILITIES</li>
<li class="nav-item">
    <a href="{{ url('home') }}" class="nav-link">
        <i class="nav-icon fas fa-cog"></i>
        <p>Setting</p>
    </a>
</li>    
@endif

@if ($user->level == 3)
<li class="nav-header">SUPPORT TOOLS</li>
<li class="nav-item">
    <a href="{{ url('home') }}" class="nav-link">
        <i class="nav-icon fas fa-info-circle"></i>
        <p>My Info</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ url('home') }}" class="nav-link">
        <i class="nav-icon fas fa-folder-open"></i>
        <p>View Report</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ url('home') }}" class="nav-link">
        <i class="nav-icon fas fa-cog"></i>
        <p>Configuration</p>
    </a>
</li>
<li class="nav-header">JUMP TO</li>
<li class="nav-item">
    <a href="{{ url('home') }}" class="nav-link">
        <i class="nav-icon fas fa-chart-line"></i>
        <p>Dashboard</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ url('home') }}" class="nav-link">
        <i class="nav-icon fas fa-temperature-low"></i>
        <p>Realtime Status</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ url('home') }}" class="nav-link">
        <i class="nav-icon fas fa-leaf"></i>
        <p>Plant</p>
    </a>
</li>
<li class="nav-header">CATEGORIES</li>
<li class="nav-item">
    <a href="{{ url('home') }}" class="nav-link">
        <i class="nav-icon fas fa-thermometer-half"></i>
        <p>Temperature</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ url('home') }}" class="nav-link">
        <i class="nav-icon fas fa-water"></i>
        <p>Humidity</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ url('home') }}" class="nav-link">
        <i class="nav-icon fas fa-calendar"></i>
        <p>Period</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ url('home') }}" class="nav-link">
        <i class="nav-icon fas fa-history"></i>
        <p>History</p>
    </a>
</li>
<li class="nav-header">UTILITIES</li>
<li class="nav-item">
    <a href="{{ url('home') }}" class="nav-link">
        <i class="nav-icon fas fa-cog"></i>
        <p>Setting</p>
    </a>
</li>  
@endif

@if ($user->level == 4)
<li class="nav-header">JUMP TO</li>
<li class="nav-item">
    <a href="{{ url('home') }}" class="nav-link">
        <i class="nav-icon fas fa-chart-line"></i>
        <p>Dashboard</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ url('realtime') }}" class="nav-link">
        <i class="nav-icon fas fa-temperature-low"></i>
        <p>Realtime Status</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ url('home') }}" class="nav-link">
        <i class="nav-icon fas fa-leaf"></i>
        <p>Plant</p>
    </a>
</li>
<li class="nav-header">CATEGORIES</li>
<li class="nav-item">
    <a href="{{ url('home') }}" class="nav-link">
        <i class="nav-icon fas fa-thermometer-half"></i>
        <p>Temperature</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ url('home') }}" class="nav-link">
        <i class="nav-icon fas fa-water"></i>
        <p>Humidity</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ url('home') }}" class="nav-link">
        <i class="nav-icon fas fa-calendar"></i>
        <p>Period</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ url('home') }}" class="nav-link">
        <i class="nav-icon fas fa-history"></i>
        <p>History</p>
    </a>
</li>
<li class="nav-header">UTILITIES</li>
<li class="nav-item">
    <a href="{{ url('home') }}" class="nav-link">
        <i class="nav-icon fas fa-cog"></i>
        <p>Setting</p>
    </a>
</li>    
@endif