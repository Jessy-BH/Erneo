<?php

switch ($loc) {

    case '':
        include(PATH_CONTENT . "/home.php");
        break;
    case 'studies':
        include(PATH_CONTENT . "/studies.php");
        break;
    case 'productions':
        include(PATH_CONTENT . "/productions.php");
        break;
    case 'trials':
        include(PATH_CONTENT . "/trials.php");
        break;
    case 'skill':
        include(PATH_CONTENT . "/skill.php");
        break;
    case 'products':
        include(PATH_CONTENT . "/products.php");
        break;
    case 'realisations':
        include(PATH_CONTENT . "/realisations.php");
        break;
    case 'contact':
        include(PATH_CONTENT . "/contact.php");
        break;

    default:
        include(PATH_CTRL . "/error/404.php");
        break;
}
