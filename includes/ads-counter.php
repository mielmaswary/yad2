<?php
  $adsCount=0;
  $sql='SELECT * FROM  ads';
  $result=mysqli_query($connection,$sql);
  while ($ads=mysqli_fetch_array($result)) {
    $adsCount++;
  }
?>
<br>
<div class=" flex-row justify-center">
    <div class="padding-4  bright-grey">מציג <?= $adsCount ?> מודעות</div>
</div>