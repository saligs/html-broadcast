<div class="sidebar app-aside" id="sidebar">
    <div class="sidebar-container perfect-scrollbar">
        <div>
            <!-- start: SEARCH FORM -->
            <div class="search-form hidden-md hidden-lg">
                <a class="s-open" href="#"> <i class="ti-search"></i> </a>
                <form class="navbar-form" role="search">
                    <a class="s-remove" href="#" target=".navbar-form"> <i class="ti-close"></i> </a>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Enter search text here...">
                        <button class="btn search-button" type="submit">
                            <i class="ti-search"></i>
                        </button>
                    </div>
                </form>
            </div>
            <!-- end: SEARCH FORM -->
            <!-- start: USER OPTIONS -->
            <div class="nav-user-wrapper">
                <div class="media">
                    <div class="media-left">
                        <a class="profile-card-photo" href="#"><img alt="" src="assets/images/avatar-1.jpg"></a>
                    </div>
                    <div class="media-body">
                        <span class="media-heading text-white">Peter Clark</span>
                        <div class="text-small text-white-transparent">
                            UI Designer
                        </div>
                    </div>
                    <div class="media-right media-middle">
                        <div class="dropdown">
                            <button href class="btn btn-transparent text-white dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-caret-down"></i>
                            </button>
                            <ul class="dropdown-menu animated fadeInRight pull-right">
                                <li>
                                    <a href="#"> Log Out </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end: USER OPTIONS -->
            <?php include 'include/menu.php'; ?>
        </div>
    </div>
</div>