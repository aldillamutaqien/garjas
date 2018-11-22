    <div class="header-top-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="logo-area">
                        <a href="#"><img src="<?php echo base_url($this->config->item("theme_admin")."/img/logo/logo.png"); ?>" alt="" /></a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="header-top-menu">
                        <ul class="nav navbar-nav notika-top-nav">

                            <li class="nav-item nc-al"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span><i class="notika-icon notika-menus"></i></span></a>
                                <div role="menu" class="dropdown-menu message-dd notification-dd animated zoomIn">
                                    <div class="hd-mg-tt">
                                        <h2></h2>
                                    </div>
                                    <div class="hd-message-info">
                                        <a href="<?php echo site_url("front/change_password") ?>">
                                            <div class="hd-message-sn">
                                                <div class="hd-message-img">
                                                    
                                                    <i class="notika-icon notika-draft"></i>

                                                </div>
                                                <div class="hd-mg-ctn">
                                                    <h3>Ubah Password</h3>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="<?php echo site_url("admin/signout") ?>">
                                            <div class="hd-message-sn">
                                                <div class="hd-message-img">

                                                    <i class="notika-icon notika-up-arrow"></i>

                                                </div>
                                                <div class="hd-mg-ctn">
                                                    <h3>Logout</h3>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>