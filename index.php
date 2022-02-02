<?php
include('website/config.php');
$loc    = filter_input(INPUT_GET, "loc", FILTER_SANITIZE_STRING);

switch ($loc) {

    case '':
        include(PATH_CTRL . "/ctrlHome.php");
        break;
    case 'studies':
        include(PATH_CTRL . '/ctrlStudies.php');
        break;
    case 'productions':
        include(PATH_CTRL . '/ctrlProductions.php');
        break;
    case 'trials':
        include(PATH_CTRL . '/ctrlTrials.php');
        break;
    case 'skill':
        include(PATH_CTRL . '/ctrlSkill.php');
        break;
    case 'products':
        include(PATH_CTRL . '/ctrlProducts.php');
        break;
    case 'realisations':
        include(PATH_CTRL . '/ctrlRealisations.php');
        break;
    case 'contact':
        include(PATH_CTRL . '/ctrlContact.php');
        break;
    default:
        echo ("404");
        break;
}

include(PATH_COMMON . '/template.php');
