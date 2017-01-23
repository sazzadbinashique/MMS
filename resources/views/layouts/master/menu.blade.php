<!-- navbar side -->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <!-- sidebar-collapse -->
            <div class="sidebar-collapse">
                <!-- side-menu -->
                <ul class="nav" id="side-menu">
                    <li>
                        <!-- user image section-->
                        <div class="user-section">
                            <div class="user-section-inner">
                                <img src="assets/img/user.jpg" alt="">
                            </div>
                            <div class="user-info">
                                <div>Jahir <strong>Shamim</strong></div>
                                <div class="user-text-online">
                                    <span class="user-circle-online btn btn-success btn-circle "></span>&nbsp;Online
                                </div>
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
                        <a href="{{url('/')}}"><i class="fa fa-dashboard fa-fw"></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-user fa-fw"></i> Collection<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{url('/collection_list')}}"><i class="fa fa-list"></i> Collection list</a>
                            </li>
                            <li>
                                <a href="{{url('/collection_add')}}"><i class="fa fa-plus"></i> Collection add</a>
                            </li>

                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-clock-o fa-fw"></i> Menu<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                            <a href="menu_list.html"><i class="fa fa-plus"></i> Menu List</a>
                            </li>                            
                            <li>
                            <a href="menu_add.html"><i class="fa fa-list"></i> Menu Add</a>
                            </li>
                        </ul>
                    </li> 

                    <li>
                        <a href="#"><i class="fa fa-building-o fa-fw"></i> Extra Item<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="extra_item_list.html"><i class="fa fa-list"></i> Extra Item list</a>
                            </li>
                            <li>
                                <a href="extra_item_add.html"><i class="fa fa-plus"></i> Extra Item add</a>

                            </li>
                        </ul>
                    </li>
                    
                    <li>
                        <a href="#"><i class="fa fa-money fa-fw"></i>Additional<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="additional_list.html"><i class="fa fa-list"></i> Additional List</a>
                            </li>
                            <li>
                                <a href="additional_add.html"><i class="fa fa-plus"></i> Additional Add </a>
                            </li> 
                        </ul>                           
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bed"></i> Meal<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            
                            <li>
                                <a href="meal_list.html"><i class="fa fa-plus"></i> Meal List</a>
                            </li>
                            <li>
                                <a href="meal_add.html"><i class="fa fa-list"></i> Meal Add</a>
                            </li>                            
                        </ul>
                    </li>
                    
                    <li>
                        <a href="#"><i class="fa fa-building-o fa-fw"></i> Bazar<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="bazar_list.html"><i class="fa fa-list"></i> Bazar List</a>
                            </li>
                            <li>
                                <a href="bazar_add.html"><i class="fa fa-plus"></i>  Bazar Add </a>

                            </li>
                        </ul>
                    </li>

                     <li>
                        <a href="#"><i class="fa fa-building-o fa-fw"></i>Bazar Details<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="bazar_details_list.html"><i class="fa fa-list"></i> Bazar Details List</a>
                            </li>
                            <li>
                                <a href="bazar_details_add.html"><i class="fa fa-plus"></i>  Bazar Details Add </a>

                            </li>
                        </ul>
                    </li>

                     <li>
                        <a href="#"><i class="fa fa-building-o fa-fw"></i> Month<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="month_list.html"><i class="fa fa-list"></i> Month list</a>
                            </li>
                            <li>
                                <a href="month_add.html"><i class="fa fa-plus"></i>  Month Add </a>

                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- end side-menu -->
            </div>
            <!-- end sidebar-collapse -->
        </nav>