<!-- <div class="container">
    <nav class="navbar navbar-expand-xl p-0" id="mainNav">
        <div class="row">
            <div class="col">
                <a class="navbar-brand <?= ($loc == '') ? 'active' : ''; ?>" href="<?= BASE_URL ?>">
                    <img src="<?= PATH_IMG ?>/logo-erneo.png" width="200px" height="50px" alt="logo">
                </a>
            </div>
            <div class="col">
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav mr-auto navnesti justify-content-around">
                        <li class="nav-item active <?= ($loc == 'studies') ? 'active' : ''; ?>">
                            <a class="nav-link " href="<?= BASE_URL ?>studies">Études</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= BASE_URL ?>productions">Fabrications</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= BASE_URL ?>trials">Essais</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= BASE_URL ?>skill">Savoir-Faire</a>
                        </li>
                        <li class="nav-item">

                            <a class="nav-link" href="<?= BASE_URL ?>products">Produits</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= BASE_URL ?>realisations">Réalisations</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= BASE_URL ?>contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>



    </nav>
</div>

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fas fa-bars"></i>
</button> -->


<!-- <nav id="navbar" class="">
    <div class="nav-wrapper">
        <div class="logo">
            <a href="<?= BASE_URL ?>" class="<?= ($loc == '') ? 'active' : ''; ?>">
                <i class="fa fa-angellist">
                    <img src="<?= PATH_IMG ?>/logo-erneo.png" alt="logo" class="erneo-logo">
                </i>
            </a>
        </div>
        <ul id="menu">
            <li class="nav-item <?= ($loc == 'studies') ? 'active' : ''; ?>">
                <a class="nav-link " href="<?= BASE_URL ?>studies">Études</a>
            </li>
            <li class="nav-item <?= ($loc == 'productions') ? 'active' : ''; ?>">
                <a class="nav-link" href="<?= BASE_URL ?>productions">Fabrications</a>
            </li>
            <li class="nav-item <?= ($loc == 'trials') ? 'active' : ''; ?>">
                <a class="nav-link" href="<?= BASE_URL ?>trials">Essais</a>
            </li>
            <li class="nav-item <?= ($loc == 'skill') ? 'active' : ''; ?>">
                <a class="nav-link" href="<?= BASE_URL ?>skill">Savoir-Faire</a>
            </li>
            <li class="nav-item <?= ($loc == 'products') ? 'active' : ''; ?>">
                <a class="nav-link" href="<?= BASE_URL ?>products">Produits</a>
            </li>
            <li class="nav-item <?= ($loc == 'realisations') ? 'active' : ''; ?>">
                <a class="nav-link" href="<?= BASE_URL ?>realisations">Réalisations</a>
            </li>
            <li class="nav-item <?= ($loc == 'contact') ? 'active' : ''; ?>">
                <a class="nav-link" href="<?= BASE_URL ?>contact">Contact</a>
            </li>
        </ul>
    </div>
</nav>
<div class="menuIcon">
    <span class="icon icon-bars"></span>
    <span class="icon icon-bars overlay"></span>
</div>
<div class="overlay-menu">
    <ul id="menu">
        <li class="nav-item <?= ($loc == 'studies') ? 'active' : ''; ?>">
            <a class="nav-link " href="<?= BASE_URL ?>studies">Études</a>
        </li>
        <li class="nav-item <?= ($loc == 'productions') ? 'active' : ''; ?>">
            <a class="nav-link" href="<?= BASE_URL ?>productions">Fabrications</a>
        </li>
        <li class="nav-item <?= ($loc == 'trials') ? 'active' : ''; ?>">
            <a class="nav-link" href="<?= BASE_URL ?>trials">Essais</a>
        </li>
        <li class="nav-item <?= ($loc == 'skill') ? 'active' : ''; ?>">
            <a class="nav-link" href="<?= BASE_URL ?>skill">Savoir-Faire</a>
        </li>
        <li class="nav-item <?= ($loc == 'products') ? 'active' : ''; ?>">
            <a class="nav-link" href="<?= BASE_URL ?>products">Produits</a>
        </li>
        <li class="nav-item <?= ($loc == 'realisations') ? 'active' : ''; ?>">
            <a class="nav-link" href="<?= BASE_URL ?>realisations">Réalisations</a>
        </li>
        <li class="nav-item <?= ($loc == 'contact') ? 'active' : ''; ?>">
            <a class="nav-link" href="<?= BASE_URL ?>contact">Contact</a>
        </li>
    </ul>
</div> -->

<!-- <header class="d-flex align-items-center" id="header-sticky-wrapper">

    <div class="container d-flex align-items-center">
        <a class="<?= ($loc == '') ? 'active' : ''; ?>" href="<?= BASE_URL ?>" id="logo">
            <img src="<?= PATH_IMG ?>/logo-erneo.png" width="200px" height="50px">
        </a>
        <nav id="navigation" class="navbar navbar-expand-xl justify-items-xl-center justify-content-end">
            <a id="closeMenu" class="d-xl-none">
                <span class="bar"></span>
            </a>
            <div class="collapse navbar-collapse navc">
                <ul id="" class="d-flex justify-content-xl-around align-items-xl-center justify-content-center flex-xl-row flex-column">
                    <li class="nav-item <?= ($loc == 'studies') ? 'active' : ''; ?>">
                        <a class="nav-link " href="<?= BASE_URL ?>studies">Études</a>
                    </li>
                    <li class="nav-item <?= ($loc == 'productions') ? 'active' : ''; ?>">
                        <a class="nav-link" href="<?= BASE_URL ?>productions">Fabrications</a>
                    </li>
                    <li class="nav-item <?= ($loc == 'trials') ? 'active' : ''; ?>">
                        <a class="nav-link" href="<?= BASE_URL ?>trials">Essais</a>
                    </li>
                    <li class="nav-item <?= ($loc == 'skill') ? 'active' : ''; ?>">
                        <a class="nav-link" href="<?= BASE_URL ?>skill">Savoir-Faire</a>
                    </li>
                    <li class="nav-item <?= ($loc == 'products') ? 'active' : ''; ?>">
                        <a class="nav-link" href="<?= BASE_URL ?>products">Produits</a>
                    </li>
                    <li class="nav-item <?= ($loc == 'realisations') ? 'active' : ''; ?>">
                        <a class="nav-link" href="<?= BASE_URL ?>realisations">Réalisations</a>
                    </li>
                    <li class="nav-item <?= ($loc == 'contact') ? 'active' : ''; ?>">
                        <a class="nav-link" href="<?= BASE_URL ?>contact">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="overlay"></div>

        </nav>
    </div>
</header> -->