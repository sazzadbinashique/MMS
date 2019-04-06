<!-- navbar side -->
<nav class="navbar-default navbar-static-side" role="navigation">
    <!-- sidebar-collapse -->
    <div class="sidebar-collapse">
        <!-- side-menu -->
        <ul class="nav" id="side-menu">
            <li>
                <!-- user image section-->
                <div class="user-section">
                    <div class="user-section-inner ">
                        <img src="{{asset('assets/img/user.jpg')}}" alt="">
                    </div>
                    <div class="user-info">
                        {{ Auth::user()->name }}   
                    </div>
                </div>
                <!--end user image section-->
            </li>
            <li class="sidebar-search">
                <!-- search section-->
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
            </li>
            <li class="selected">
                <a href="{{url('/dashboard')}}"><i class="fa fa-dashboard fa-fw"></i>Dashboard</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-user fa-fw"></i> Collection<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{url('/collections')}}"><i class="fa fa-list"></i>All Collection</a>
                    </li>
                    <li>
                        <a href="{{url('/collections/create')}}"><i class="fa fa-plus"></i>Add Collection</a>
                    </li>

                </ul>
            </li>

            <li>
                <a href="#"><i class="fa fa-clock-o fa-fw"></i> Menu<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{url('/bazar_menus')}}"><i class="fa fa-plus"></i>All Bazar Menu </a>
                    </li>                            
                    <li>
                        <a href="{{url('/bazar_menus/create')}}"><i class="fa fa-list"></i>Add Menu</a>
                    </li>
                </ul>
            </li> 

            <li>
                <a href="#"><i class="fa fa-building-o fa-fw"></i> Extra Item<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{url('/extra_items')}}"><i class="fa fa-list"></i>All Extra Item </a>
                    </li>
                    <li>
                        <a href="{{url('/extra_items/create')}}"><i class="fa fa-plus"></i>Add Extra Item </a>

                    </li>
                </ul>
            </li>

            <li>
                <a href="#"><i class="fa fa-money fa-fw"></i>Additional<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{url('/additionals')}}"><i class="fa fa-list"></i> All Additional</a>
                    </li>
                    <li>
                        <a href="{{url('/additionals/create')}}"><i class="fa fa-plus"></i> Add Additional</a>
                    </li> 
                </ul>                           
            </li>
            <li>
                <a href="#"><i class="fa fa-bed"></i> Meal<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">

                    <li>
                        <a href="{{url('/meals')}}"><i class="fa fa-plus"></i> Meal List</a>
                    </li>
                    <li>
                        <a href="{{url('/meals/create')}}"><i class="fa fa-list"></i> Meal Add</a>
                    </li>                            
                </ul>
            </li>

            <li>
                <a href="#"><i class="fa fa-building-o fa-fw"></i> Bazar<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{url('/bazars')}}"><i class="fa fa-list"></i>All Bazar </a>
                    </li>
                    <li>
                        <a href="{{url('/bazars/create')}}"><i class="fa fa-plus"></i>Add Bazar </a>

                    </li>
                </ul>
            </li>

            <li>
                <a href="#"><i class="fa fa-building-o fa-fw"></i>Bazar Details<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{url('/bazar_details')}}"><i class="fa fa-list"></i>All Bazar Detail</a>
                    </li>
                    <li>
                        <a href="{{url('/bazar_details/create')}}"><i class="fa fa-plus"></i>Add Bazar Detail </a>

                    </li>
                </ul>
            </li>

            <li>
                <a href="#"><i class="fa fa-building-o fa-fw"></i> Month<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{url('/months')}}"><i class="fa fa-list"></i> Month list</a>
                    </li>
                    <li>
                        <a href="{{url('/months/create')}}"><i class="fa fa-plus"></i>  Month Add </a>

                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-building-o fa-fw"></i> User<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                  <!--   <li>
                        <a href="{{url('/user_list')}}"><i class="fa fa-list"></i> User list</a>
                    </li>-->
                    <li>
                        <a href="{{url('/user_add')}}"><i class="fa fa-plus"></i>  User Add </a>
                    </li> 

                    <li>
                        <a href="{{url('/users')}}"><i class="fa fa-plus"></i> All User </a>
                    </li>
                    <li>
                        <a href="{{url('/users/create')}}"><i class="fa fa-plus"></i> Add User </a>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- end side-menu -->
    </div>
    <!-- end sidebar-collapse -->
</nav>