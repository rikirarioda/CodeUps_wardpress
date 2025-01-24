    <!-- パンくず -->
    <div class="breadcrumb<?php echo is_404() ? ' breadcrumb--page404' : ''; ?>">
      <div class="breadcrumb_inner inner">
        <div class="breadcrumb__text">
        <?php 
          if (function_exists('bcn_display')): 
            bcn_display();
          endif;
        ?>
        </div>
      </div>
    </div>
