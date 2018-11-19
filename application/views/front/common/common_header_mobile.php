    <div class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul class="mobile-menu-nav">
                                <li><a data-toggle="collapse" data-target="#Charts" href="<?php echo site_url("front/dashboard") ?>">Home</a>
                                </li>
                                <li><a data-toggle="collapse" data-target="#demoevent" href="#">Data Personel</a>
                                    <ul id="demoevent" class="collapse dropdown-header-top">
                                        <li><a href="<?php echo site_url("personelfront/index") ?>">Profil</a></li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#democrou" href="#">Data Nilai</a>
                                    <ul id="democrou" class="collapse dropdown-header-top">
                                        <li><a href="<?php echo site_url("datanilaifront/tabel_nilai") ?>">Hasil Garjas</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>