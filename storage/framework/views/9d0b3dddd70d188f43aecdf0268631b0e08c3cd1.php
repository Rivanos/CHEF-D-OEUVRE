<?php if(isset($articles)): ?>
  <?php if($article->heart_attack == 1): ?>
    <div class="heart_attack triangle"><i class="fa fa-heart" aria-hidden="true"></i></div>
  <?php endif; ?>
  <?php if($article->most_sell == 1): ?>
    <div class="most_sell triangle"><i class="fa fa-money" aria-hidden="true"></i></div>
  <?php endif; ?>
<?php endif; ?>
<?php if(isset($articles_hearts)): ?>
  <?php if($articles_hearts->heart_attack == 1): ?>
    <div class="heart_attack triangle"><i class="fa fa-heart" aria-hidden="true"></i></div>
  <?php endif; ?>
  <?php if($articles_hearts->most_sell == 1): ?>
    <div class="most_sell triangle"><i class="fa fa-money" aria-hidden="true"></i></div>
  <?php endif; ?>
<?php endif; ?>
