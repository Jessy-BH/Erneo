<nav>
    <input type="checkbox" id="check">
    <label for="check" class="checkbtn">
        <i id="icon" class="fas fa-bars navTrigger"></i>
    </label>
    <label class="logo">
        <a class="<?= ($loc == ''); ?>" href="<?= BASE_URL ?>" id="logo">
            <img src="<?= PATH_IMG ?>/logo-erneo.png" class="logo-erneo">
        </a>
    </label>
    <ul class="navlist">
        <li>
            <a class="<?= ($loc == 'skill') ? 'active' : ''; ?>" href="<?= BASE_URL ?>skill">Savoir-Faire</a>
        </li>
        <li>
            <a class="<?= ($loc == 'studies') ? 'active' : ''; ?>" href="<?= BASE_URL ?>studies">Études</a>
        </li>
        <li>
            <a class="<?= ($loc == 'productions') ? 'active' : ''; ?>" href="<?= BASE_URL ?>productions">Fabrication</a>
        </li>
        <li>
            <a class="<?= ($loc == 'trials') ? 'active' : ''; ?>" href="<?= BASE_URL ?>trials">Moyens d'Essais</a>
        </li>
        <li>
            <a class="<?= ($loc == 'realisations') ? 'active' : ''; ?>" href="<?= BASE_URL ?>realisations">Réalisations</a>
        </li>
        <li>
            <a class="<?= ($loc == 'products') ? 'active' : ''; ?>" href="<?= BASE_URL ?>products">Produits</a>
        </li>

        <li>
            <a class="<?= ($loc == 'contact') ? 'active' : ''; ?>" href="<?= BASE_URL ?>contact">Contact</a>
        </li>
    </ul>
</nav>