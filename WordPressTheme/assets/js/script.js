"use strict";

jQuery(function ($) {
  // この中であればWordpressでも「$」が使用可能になる

/* -------------------------------------------------------------------------------- */
  $(function () {
    // ハンバーガーメニュー
    $(".js-hamburger, .js-drawer").click(function () {
      $(".js-hamburger").toggleClass("is-active");
      $(".js-drawer").fadeToggle();
    });

    $(window).resize(function () {
      if ($(window).width() >= 768) {
        if (!$('.js-hamburger').hasClass('is-active')) {
          $(".js-drawer").hide();
          $(".js-hamburger").removeClass("is-active");
          $("body").removeClass("no-scroll"); // no-scroll クラスをリセット
        }
      }
    }).trigger('resize');
  });

  //ハンバーガー開いている時背景スクロールしない
  $(".js-hamburger").click(function () {
    $("body").toggleClass('no-scroll');
  });

  // Swiperの初期化
  var main_swiper = new Swiper(".js-main-swiper", {
    loop: true,
    effect: "fade",
    speed: 3000,
    allowTouchMove: false,
    autoplay: {
      delay: 3000
    }
  });

  /* -------------------------------------------------------------------------------- */
  // キャンペーンカードスワイパー
  var campaign_swiper = new Swiper(".js-campaign-swiper", {
    loop: true,
    spaceBetween: 24,
    slidesPerView: "auto",
    speed: 3000,
    autoplay: {
      delay: 2000,
      disableOnInteraction: false
    },
    breakpoints: {
      768: {
        slidesPerView: "auto",
        spaceBetween: 40,
        width: 333,
      },
    },
    autoplay: {
      delay: 1000,
      disableOnInteraction: false,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev"
    }
  });



  /* -------------------------------------------------------------------------------- */
//アニメーション 写真の前に青の要素が出てくる実装
//要素の取得とスピードの設定
var box = $('.js-colorbox'),
    speed = 700;

//.colorboxの付いた全ての要素に対して下記の処理を行う
box.each(function(){
    $(this).append('<div class="color"></div>')
    var color = $(this).find($('.color')),
    image = $(this).find('img');
    var counter = 0;

    image.css('opacity','0');
    color.css('width','0%');
    //inviewを使って背景色が画面に現れたら処理をする
    color.on('inview', function(){
        if(counter == 0){
　　　　　$(this).delay(200).animate({'width':'100%'},speed,function(){
                   image.css('opacity','1');
                   $(this).css({'left':'0' , 'right':'auto'});
                   $(this).animate({'width':'0%'},speed);
                })
            counter = 1;
          }
     });
});

/* -------------------------------------------------------------------------------- */
  //ページトップに戻る
  $(document).ready(function () {
    var pageTop = $(".back-to-top");
    pageTop.hide();
    $(window).on("scroll", function () {
      var scrollHeight = $(document).height();
      var scrollPosition = $(window).height() + $(window).scrollTop();
      var footHeight = $("footer").innerHeight();
      if (scrollHeight - scrollPosition <= footHeight) {
        pageTop.css({
          position: "absolute",
          bottom: footHeight + 20
        });
      } else {
        pageTop.css({
          position: "fixed",
          bottom: 30
        });
      }
      if ($(this).scrollTop() > 100) {
        pageTop.fadeIn();
      } else {
        pageTop.fadeOut();
      }
    });
    pageTop.click(function () {
      $("body,html").animate({
        scrollTop: 0
      }, 800);
      return false;
    });
  });

  /* -------------------------------------------------------------------------------- */
  //information-page タブ
  $(function () {
    var tabButton = $(".js-tab-list"),
      tabContent = $(".js-information-tab-content");
    tabButton.on("click", function () {
      var index = tabButton.index(this);
      tabButton.removeClass("is-active");
      $(this).addClass("is-active");
      tabContent.removeClass("is-active");
      tabContent.eq(index).addClass("is-active");
    });
  });


/* -------------------------------------------------------------------------------- */
// Aboutモーダル
  $(function () {
    var open = $(".js-modal-open"),
      close = $(".js-modal-close"),
      modal = $(".js-modal"),
      modalImg = $(".js-modal-img"),
      body = $("body");
    var scrollPosition = 0;
    open.on("click", function () {
      scrollPosition = $(window).scrollTop(); // 現在のスクロール位置を保存
      var imgSrc = $(this).data("img-src"); // クリックされた画像のsrcを取得
      modalImg.attr("src", imgSrc); // モーダル内の画像srcを更新

      // ウィンドウサイズの90%以内に画像を収める
      adjustImageSize();
      modal.addClass("is-open"); // モーダルを開く

      // スクロールを無効化し、背景を固定
      body.css({
        overflow: 'hidden',
        position: 'relative',
        width: '100%'
      });
    });
    close.add(modal).on("click", function () {
      modal.removeClass("is-open"); // モーダルを閉じる

      // 背景スクロールを有効化し、スクロール位置を元に戻す
      body.css({
        overflow: '',
        position: '',
        top: '',
        height: '',
        width: ''
      });

      // スクロール位置を復元
      $(window).scrollTop(scrollPosition);
    });

    // モーダルの外側をクリックして閉じる処理
    modal.on("click", function (e) {
      if (e.target === modal[0]) {
        modal.removeClass("is-open");
        body.css({
          overflow: '',
          position: '',
          top: '',
          height: '',
          width: ''
        });

        // スクロール位置を復元
        $(window).scrollTop(scrollPosition);
      }
    });

    // ウィンドウサイズに合わせて画像を調整する関数
    function adjustImageSize() {
      var windowWidth = $(window).width(); // ウィンドウの幅
      var windowHeight = $(window).height(); // ウィンドウの高さ

      // 画像の最大幅と最大高さを90%に設定
      var maxWidth = windowWidth * 0.9;
      var maxHeight = windowHeight * 0.9;

      // 画像の自然サイズを取得
      var naturalWidth = modalImg[0].naturalWidth;
      var naturalHeight = modalImg[0].naturalHeight;

      // 画像の比率を保ちつつサイズを調整
      if (naturalWidth / naturalHeight > maxWidth / maxHeight) {
        modalImg.css({
          width: maxWidth + 'px',
          height: 'auto'
        });
      } else {
        modalImg.css({
          width: 'auto',
          height: maxHeight + 'px'
        });
      }
    }

    // ウィンドウのサイズが変更されたときにも画像を再調整
    $(window).on("resize", function () {
      if (modal.hasClass("is-open")) {
        adjustImageSize();
      }
    });
  });

  /* -------------------------------------------------------------------------------- */
  //アコーディオン　FAQ
  $(function () {
    $(".js-accordion-title").on("click", function () {
      $(this).toggleClass("is-open");
      $(this).next().slideToggle(300);
    });
  });

  /* -------------------------------------------------------------------------------- */
  //アコーディオン　ブログアーカイブ
  $(function () {
    $(".js-accordion-list").on("click", function () {
      // トグルの開閉状態を切り替え
      $(this).toggleClass("is-open");
  
      // クリックされた要素の次の要素（.article__months）をスライド
      $(this).next(".article__months").slideToggle(300);
  
      // アイコンの変更
      var img = $(this).find("img");
      var iconOpen = $(this).data("icon-open"); // 開いた状態のアイコン
      var iconClose = $(this).data("icon-close"); // 閉じた状態のアイコン
  
      if ($(this).hasClass("is-open")) {
        img.attr("src", iconOpen); // 開いた状態のアイコンに切り替え
      } else {
        img.attr("src", iconClose); // 閉じた状態のアイコンに切り替え
      }
    });
  });

  /* -------------------------------------------------------------------------------- */
  //インフォメーションページ　パラメータ

  $(function () {
    // URLからクエリパラメータを取得する関数
    function getQueryParam(param) {
      var urlParams = new URLSearchParams(window.location.search);
      return urlParams.get(param);
    }

    // URLのパラメータから対応するIDを取得
    var tabId = getQueryParam('tab');
    var tabButton = $(".js-tab-list"),
      tabContent = $(".js-information-tab-content");

    // パラメータに対応するタブボタンが存在するかチェック
    if (tabId) {
      // すべてのタブとコンテンツからアクティブクラスを削除
      tabButton.removeClass('is-active');
      tabContent.removeClass('is-active');

      // 対応するタブボタンとコンテンツにアクティブクラスを追加
      var targetTab = $("#" + tabId);
      var targetIndex = tabButton.index(targetTab);
      if (targetIndex !== -1) {
        targetTab.addClass('is-active');
        tabContent.eq(targetIndex).addClass('is-active');
      }
    }

    // タブクリック時の動作
    tabButton.on("click", function () {
      var index = tabButton.index(this);
      tabButton.removeClass("is-active");
      $(this).addClass("is-active");
      tabContent.removeClass("is-active");
      tabContent.eq(index).addClass("is-active");
    });
  });

  /* -------------------------------------------------------------------------------- */
  //別ページに飛ぶ 料金一覧ページ //クラス名にIDを設定
  $(window).on('load', function () {
    // ページが読み込まれたときに、URLにハッシュがあるかチェック
    if (window.location.hash) {
      var headerHeight = $(".js-header").height(); // ヘッダーの高さを取得
      var target = $(window.location.hash); // ハッシュのターゲット要素を取得

      if (target.length) {
        var position = target.offset().top - headerHeight; // ヘッダーの高さを引いて位置を調整
        $("html, body").animate({
          scrollTop: position
        }, 0); // ページをスクロール位置に移動
      }
    }

    // 同じページ内のリンクをクリックしたときの処理
    $('a[href^="#"]').click(function () {
      var headerHeight = $(".js-header").height();
      var speed = 600;
      var href = $(this).attr("href");
      var target = $(href == "#" || href == "" ? "html" : href);

      // ヘッダーの高さ分下げる
      var position = target.offset().top - headerHeight;
      $("body,html").animate({
        scrollTop: position
      }, speed, "swing");
      return false;
    });
  });
});

  /* -------------------------------------------------------------------------------- */
