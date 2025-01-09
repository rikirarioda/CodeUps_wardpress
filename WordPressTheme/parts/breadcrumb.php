    <!-- パンくず -->
    <div class="breadcrumb">
      <div class="breadcrumb_inner inner">
        <div class="breadcrumb__text">
          <?php 
            if (function_exists('bcn_display')) { // 関数名を修正
            bcn_display(); // 関数呼び出しとセミコロンを追加
            }
          ?>
        </div>
      </div>
    </div>