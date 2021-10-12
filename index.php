
<?php
    require_once('./includes/htmlStart.php');
    require_once('./includes/sideMenu/sideMenuIndex.php');
    require_once('./includes/loading-page.php');

   require_once('./db/dbCon.php');
  //  require_once('./db/dbProdCon.php');
  //require_once('./db/dbSetUp.php');
    require_once('./includes/modal.php');
    require_once('./includes/loading-page.php');
    echo'<div id="sticky-header"class="container-full grey-bg z-index-2 sticky-top0 transion">';
    require_once('./includes/header.php');
    require_once('./includes/search-field.php');
    echo'</div>';
    require_once('./includes/ad-banner.php');
    require_once('./includes/breadCrumbs.php');
    require_once('./includes/headLine.php');
    require_once('./includes/promotedAds.php');
    require_once('./includes/sortAndFilterBtn.php');
    require_once('./includes/ads-counter.php');
    require_once('./includes/sortFilterForm.php');
    require_once('./includes/ads.php');
    require_once('./includes/footer.php');
    require_once('./includes/htmlEnd.php');
 ?>



