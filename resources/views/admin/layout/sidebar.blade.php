<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="/admin/dashboard">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <!-- <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="icon-layout menu-icon"></i>
                <span class="menu-title">UI Elements</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Dropdowns</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>
                </ul>
            </div>
        </li> -->
        
        
        
        @if(Auth::guard('admin')->user()->type=="admin 1")

        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-admins" aria-expanded="false" aria-controls="ui-admins">
                <i class="icon-head menu-icon"></i>
                <span class="menu-title">Admin setting</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-admins">
                <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="/admin/admins/admins"> Admins </a></li>
                <li class="nav-item"> <a class="nav-link" href="/admin/admins/add-edit-admin"> Add Admin </a></li>
                </ul>
            </div>
        </li>
        @else
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-donators" aria-expanded="false" aria-controls="ui-donators">
            <i class="fas fa-hand-holding-usd menu-icon" style="font-size:20px"></i>    
                <span class="menu-title">Donator</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-donators">
                <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="/admin/donators/monthly_donator">Monthly Donator</a></li>
                <li class="nav-item"> <a class="nav-link" href="/admin/donators/yearly_donator">Yearly Donator</a></li>
                <li class="nav-item"> <a class="nav-link" href="/admin/donators/all_donator">All Donators</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-donations" aria-expanded="false" aria-controls="ui-donations">
            <i class="fas fa-hand-holding-usd menu-icon" style="font-size:20px"></i>    
                <span class="menu-title">Donations</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-donations">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> 
                        <a class="nav-link" href="/admin/donations/donations">Donations</a>
                    </li>
                </ul>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="/admin/members/new_members"  >
            <i class="mdi mdi-account-multiple menu-icon" style='font-size:20px'></i>
                <span class="menu-title">New Members</span>
            </a>
        </li>
        
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-expenses" aria-expanded="false" aria-controls="ui-expenses">
            <i class='fas fa-donate menu-icon' style='font-size:20px'></i>    
                <span class="menu-title">Expenses</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-expenses">
                <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="/admin/expenses/my-expenses">My Expenses </a></li>
                <li class="nav-item"> <a class="nav-link" href="/admin/expenses/all-expenses">All Espenses</a></li>
                <!-- <li class="nav-item"> <a class="nav-link" href="/admin/expenses/years-expenses">Irregular Donator</a></li> -->
                </ul>
            </div>
        </li>

        <li class="nav-item">
            <!-- <a class="nav-link" data-toggle="collapse" href="/admin/collections/collections" aria-expanded="false" aria-controls="ui-collection"> -->
            <a class="nav-link" href="/admin/collections/collections"  >
            <i class='mdi mdi-cash-usd menu-icon' style='font-size:20px'></i>    
                <span class="menu-title">Collection</span>
                <i class="menu-arrow"></i>
            </a>
            <!-- <div class="collapse" id="ui-donators">
                <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="/admin/donators/monthly_donator">Monthly Donator</a></li>
                <li class="nav-item"> <a class="nav-link" href="/admin/donators/yearly_donator">Yearly Donator</a></li>
                <li class="nav-item"> <a class="nav-link" href="/admin/donators/irregular_donator">Irregular Donator</a></li>
                </ul>
            </div> -->
        </li>

        <li class="nav-item">
            <!-- <a class="nav-link" data-toggle="collapse" href="/admin/received_ammounts/received_ammounts" aria-expanded="false" aria-controls="ui-received"> -->
            <a class="nav-link" href="/admin/received_ammounts/received_ammounts"  >
            <i class='mdi mdi-cash-usd menu-icon' style='font-size:20px'></i>    
                <span class="menu-title">Received Amount</span>
                <i class="menu-arrow"></i>
            </a>
            <!-- <div class="collapse" id="ui-donators">
                <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="/admin/donators/monthly_donator">Monthly Donator</a></li>
                <li class="nav-item"> <a class="nav-link" href="/admin/donators/yearly_donator">Yearly Donator</a></li>
                <li class="nav-item"> <a class="nav-link" href="/admin/donators/irregular_donator">Irregular Donator</a></li>
                </ul>
            </div> -->
        </li>

        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-fpcustom" aria-expanded="false" aria-controls="ui-fpcustom">
                <i class="icon-head menu-icon"></i>
                <span class="menu-title">Front Page <br> Customization</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-fpcustom">
                <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="/admin/front-page-customization/slider/slider"> Slider </a></li>
                <li class="nav-item"> <a class="nav-link" href="/admin/admins/add-edit-admin"> Gallery Section </a></li>
                <li class="nav-item"> <a class="nav-link" href="/admin/front-page-customization/project/project"> Projects </a></li>
                </ul>
            </div>
        </li>
        @endif


    </ul>
</nav>