<?php

    require_once('../includes/htmlStart.php');
    require_once('../db/dbCon.php');
    // require_once('./db/dbSetUp.php');
    require_once('../includes/modal.php');
    echo'<div id="sticky-header"class="container-full grey-bg z-index-2 sticky-top0 transion">';
    require_once('../includes/header.php');
    require_once('../includes/ad-banner.php');
    echo'</div>';
    require_once('./type-nav.php');//done
    require_once('./cleanAllBtn.php');//done
    require_once('./searchByBtns.php');//done
    require_once('./searchByCity.php');//done
    require_once('./searchByType.php');//UI
    require_once('./searchByArea.php');
    require_once('./onlyMoshavAndKibuts.php');
    require_once('./roomsFilter.php');//UI
    require_once('./priceFilter.php');
    require_once('./advancedSearch.php');
    
    require_once('../includes/footer.php');
    require_once('../includes/htmlEnd.php');
 ?>