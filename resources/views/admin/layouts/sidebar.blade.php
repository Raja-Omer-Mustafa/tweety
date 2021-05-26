<!-- start: sidebar -->
<aside id="sidebar-left" class="sidebar-left">

    <div class="sidebar-header">
        <div class="sidebar-title">
        </div>
        <div class="sidebar-toggle d-none d-md-block" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
            <i class="fas fa-bars" aria-label="Toggle sidebar"></i>
        </div>
    </div>

    <div class="nano">
        <div class="nano-content">
            <nav id="menu" class="nav-main" role="navigation">
            
                <ul class="nav nav-main">
                    <li>
                        <a class="nav-link" href="/dashboard">
                            <i class="fas fa-home" aria-hidden="true"></i>
                            <span>Dashboard</span>
                        </a>                        
                    </li>
                    <li class="nav-parent {{ Request::is('faq/*') ? 'nav-expanded' : '' }}">
                        <a class="nav-link" href="#">
                            <i class="fas fa-user-tag"></i>
                            <span>Roles&Permissions</span>
                        </a>
                        <ul class="nav nav-children">
                            <li class="{{ Request::is('') ? 'nav-active' : '' }}">
                                <a class="nav-link" href="{{ route('users.index') }}">
                                    Users
                                </a>
                            </li>
                            <li class="{{ Request::is('') ? 'nav-active' : '' }}">
                                <a class="nav-link" href="{{ route('roles.index') }}">
                                    Roles
                                </a>
                            </li>
                            <li class="{{ Request::is('') ? 'nav-active' : '' }}">
                                <a class="nav-link" href="{{ route('permissions.index') }}">
                                    Permissions
                                </a>
                            </li>
                        </ul>
                    </li>
                   

                </ul>
            </nav>

            <hr class="separator" />

            
            <hr class="separator" />

            
        </div>

        <script>
            // Maintain Scroll Position
            if (typeof localStorage !== 'undefined') {
                if (localStorage.getItem('sidebar-left-position') !== null) {
                    var initialPosition = localStorage.getItem('sidebar-left-position'),
                        sidebarLeft = document.querySelector('#sidebar-left .nano-content');
                    
                    sidebarLeft.scrollTop = initialPosition;
                }
            }
        </script>
        

    </div>

</aside>
<!-- end: sidebar -->