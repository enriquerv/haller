<nav class="navbar navbar-expand-md navbar-fixed-top navbar-light bg-light">
    <div class="container-fluid">
        <ul class="nav navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="https://www.facebook.com/InstitutoRafaelHaller/" target="_blank">
                	<img src="<?php echo $direction; ?>/assets/images/fb_az_in.png" width="80px">
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://twitter.com/HallerInstituto" target="_blank">
                	<img src="<?php echo $direction; ?>/assets/images/tw_az_in.png" width="80px">
                </a>
            </li>
        </ul>
        <ul class="nav navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="https://www.instagram.com/institutorafael_haller/" target="_blank">
                	<img src="<?php echo $direction; ?>/assets/images/in_az_in.png" width="80px">
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://www.youtube.com/channel/UCIK3jccyaRDlb3Dr_Vm8KAQ" target="_blank">
                	<img src="<?php echo $direction; ?>/assets/images/yt_az_in.png" width="80px">
                </a>
            </li>
        </ul>
    </div>
</nav>


<nav class="navbar navbar-expand-md navbar-fixed-top navbar-light bg-light main-nav">
    <div class="container-fluid">
        <div class="navbar-collapse collapse nav-content order-2">
            <ul class="nav navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">INICIO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="nosotros.php">NOSOTROS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php#ofed">OFERTA EDUCATIVA</a>
                </li>
            </ul>
        </div>
        <ul class="nav navbar-nav text-nowrap flex-row mx-md-auto order-1 order-md-2">

            <li class="nav-item">
            	<p class="navbar-brand navbar-brand-centered">
                    <a href="<?php echo $direction; ?>/universidad">
                        <img src="<?php echo $direction; ?>/assets/images/escudo2Bco.png" class="escudo2">
                    </a>
            		<img src="<?php echo $direction; ?>/assets/images/escudoBco.png" width="100px">
            	</p>
            	
            </li>

            <button class="navbar-toggler ml-2" type="button" data-toggle="collapse" data-target=".nav-content" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </ul>
        <div class="ml-auto navbar-collapse collapse nav-content order-3 order-md-3">
            <ul class="ml-auto nav navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="galeria.php">GALERÍA</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="servicios.php">SERVICIOS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contacto.php">CONTACTO</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<style>
    .escudo2{
        width: 35px;
        position: absolute;
        top: -25px;
        left: 110px;
    }
</style>
