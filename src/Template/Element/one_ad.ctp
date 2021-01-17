<div class='ad-image-container'>
  <?php
  if (!empty($adLink)) :
    ?>
    <a href="<?= $adLink ?>" <?= (!empty($adFollow) && $adFollow == 1) ? 'rel="nofollow"' : ''; ?>>

      <?php
    endif;
    ?>
    <?= $adTitle ?>
    <?php
    if (!empty($adLink)) :
      ?>
    </a>
    <?php
  endif;
  ?>
  <?php
  if (!empty($adImageLink)) :
    ?>
    <div class="ad-image-background" style="background-image: urL(<?= $adImageLink ?>)"></div>
    <?php
  endif;
  ?>
</div>
