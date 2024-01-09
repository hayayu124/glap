// document.addEventListener("DOMContentLoaded", function () {
//   const links = document.querySelectorAll("a");
//   links.forEach(function (link) {
//     link.addEventListener("mouseenter", function () {
//       this.classList.add("on");
//     });
//     link.addEventListener("mouseleave", function () {
//       this.classList.remove("on");
//     });
//   });

//   const hoverElements = document.querySelectorAll(".hover");
//   hoverElements.forEach(function (element) {
//     element.addEventListener("mouseenter", function () {
//       this.classList.add("onHover");
//     });
//     element.addEventListener("mouseleave", function () {
//       this.classList.remove("onHover");
//     });
//   });

//   const fullElements = document.querySelectorAll(".full");
//   fullElements.forEach(function (fullElement) {
//     fullElement.style.height = window.innerHeight + "px";
//   });
// });

jQuery(function ($) {
  $("a").hover(
    function () {
      $(this).addClass("on");
    },
    function () {
      $(this).removeClass("on");
    }
  );
  $(".hover").hover(
    function () {
      $(this).addClass("onHover");
    },
    function () {
      $(this).removeClass("onHover");
    }
  );

  $(document).ready(function () {
    $(".full").height($(window).height() + "px");
  });

  window.addEventListener(
    "load",
    () => {
      let elemLeftHeight =
        document.getElementById("experienceLeft").clientHeight;
      let elemRight = document.getElementById("experienceRight");
      elemRight.style.height = elemLeftHeight + "px";
    },
    false
  );

  /*  ----------------------------------------------------------------------------------------------*/
  $("#close").on("click", function () {
    $(".info_wrap").fadeOut();
  });
  /*  ----------------------------------------------------------------------------------------------*/

  //ページスクロール
  if (window.matchMedia("(max-width:768px)").matches) {
    // $(function () {
    // 	$(".kv").height($(window).height() + 44 + "px");
    // 	$(".about_inner").height($(window).height() - 100 + "px");
    // 	$(".swiper-container-top .swiper-slide").height($(window).height() + 44 + "px");
    // });

    $(function () {
      $(".headtitle_wrap").height($(window).height() + 44 + "px");
    });

    // $(function () {
    // 	$('a[href^="#"]').on('click', function () {
    // 		var speed = 400;
    // 		var href = $(this).attr('href');
    // 		var target = $(href == '#' || href == '' ? 'html' : href);
    // 		var position = target.offset().top - 100;
    // 		$('body,html').animate({
    // 			scrollTop: position
    // 		}, speed, 'swing');
    // 		return false;
    // 	});
    // });
  } else {
    $(function () {
      $('a[href^="#"]').on("click", function () {
        var speed = 400;
        var href = $(this).attr("href");
        var target = $(href == "#" || href == "" ? "html" : href);
        var position = target.offset().top - 250;
        $("body,html").animate(
          {
            scrollTop: position,
          },
          speed,
          "swing"
        );
        return false;
      });
    });
  }

  //スライドメニュー
  var $body = $("body");
  $("#sidemenu_button").on("click", function () {
    $("#sidemenu_button").toggleClass("side-open"),
      $body.toggleClass("side-open");
    $("#overlay").on("click", function () {
      $("#sidemenu_button").removeClass("side-open"),
        $body.removeClass("side-open");
    });
  });

  $(function () {
    var state = false;
    $(".menu-btn, .close-btn").on("click", function () {
      if (state == false) {
        $(".menu").addClass("open");
        state = true;
      } else {
        $(".menu").removeClass("open");
        state = false;
      }
    });
  });

  $(function () {
    var status = false;
    $(".pickup-btn").on("click", function () {
      if (status == false) {
        $(".pickup").addClass("pickup-close");
        status = true;
      } else {
        $(".pickup").removeClass("pickup-close");
        status = false;
      }
    });
  });

  /* ローディング ----------------------------------------------------------------------------------------------*/

  $(document).ready(function () {
    var counter = 0;
    var c = 0;
    var i = setInterval(function () {
      $(".loader-inner p").html(c + "%");

      counter++;
      c++;

      $("#loader-bg").css("z-index", "-1");
      $(".kv_wrap .inner").addClass("on");

      if (counter == 101) {
        clearInterval(i);
        setTimeout(function () {
          $("#loader").addClass("end");
          $("#loader-bg").addClass("end");
        }, 200);
        setTimeout(function () {}, 1000);
      }
    }, 10);
  });

  /* Scrolltrigger ----------------------------------------------------------------------------------------------*/

  /*  ----------------------------------------------------------------------------------------------*/

  /* Block Reveal Effects ----------------------------------------------------------------------------------------------*/

  /* Shuffle ----------------------------------------------------------------------------------------------*/

  // $("#sort li").on("click", function () {
  //   var $this = $(this),
  //     $grid = $("#itemList");
  //   $("#sort .active").removeClass("active");
  //   $this.addClass("active");
  //   $grid.shuffle($this.data("group"));
  // });
  // var sizer = document.querySelector(".my-sizer-element");
  // $("#itemList").shuffle({
  //   group: "all",
  //   speed: 200,
  //   easing: "cubic-bezier(0.4, 0.0, 0.2, 1)",
  //   sizer: sizer,
  // });
});

/*  TOPへ戻る
----------------------------------------------------------------------------------------------*/

//SPメニュー
function myFunc() {
  var para = document.getElementById("menuSp");
  para.classList.toggle("open");
}

function isSafeAreaDisplay() {
  var flag = false;

  //constant()はiOS 11.2で削除されるのでenv()へのフォールバックが必要
  //Designing Websites for iPhone X | WebKit
  //https://webkit.org/blog/7929/designing-websites-for-iphone-x/
  var isSafeAreaConst = CSS.supports(
    "padding-left: constant(safe-area-inset-left)"
  );
  var isSafeAreaEnv = CSS.supports("padding-left: env(safe-area-inset-left)");

  //どちらかがサポートされているなら実際の値を計算
  if (isSafeAreaConst || isSafeAreaEnv) {
    //safe-area-inset-*をダミーDIVのpaddingに設定する
    var elmDiv = document.createElement("div");
    if (isSafeAreaConst) {
      //iOS 11.1
      elmDiv.style.paddingTop = "constant(safe-area-inset-top)";
      elmDiv.style.paddingLeft = "constant(safe-area-inset-left)";
      elmDiv.style.paddingRight = "constant(safe-area-inset-right)";
      elmDiv.style.paddingBottom = "constant(safe-area-inset-bottom)";
    } else {
      //iOS 11.2
      elmDiv.style.paddingTop = "env(safe-area-inset-top)";
      elmDiv.style.paddingLeft = "env(safe-area-inset-left)";
      elmDiv.style.paddingRight = "env(safe-area-inset-right)";
      elmDiv.style.paddingBottom = "env(safe-area-inset-bottom)";
    }

    //非表示にしてドキュメントに追加
    elmDiv.style.display = "none";
    document.body.appendChild(elmDiv);

    //計算後のsafe-area-inset-*を取得
    var elmDivStyle = window.getComputedStyle(elmDiv);
    var safeAreaInsetTop = parseInt(elmDivStyle.paddingTop);
    var safeAreaInsetLeft = parseInt(elmDivStyle.paddingLeft);
    var safeAreaInsetRight = parseInt(elmDivStyle.paddingRight);
    var safeAreaInsetBottom = parseInt(elmDivStyle.paddingBottom);
    // console.log(
    // 	'safeAreaInsetTop=' + safeAreaInsetTop,
    // 	'safeAreaInsetLeft=' + safeAreaInsetLeft,
    // 	'safeAreaInsetRight=' + safeAreaInsetRight,
    // 	'safeAreaInsetBottom=' + safeAreaInsetBottom
    // );

    //セーフエリアディスプレイか判断
    if (window.navigator.userAgent.indexOf("iPhone") != -1) {
      //iOSの場合、iPhoneXでない端末の場合でもステータスバーの20pxがinsetに設定されるので、このケースを除外する必要がある
      var statusBarH = 20;

      //デバイスの回転によってどこにinsetが付くのかわからないので、４辺のどこかにinsetが設定されればセーフエリアディスプレイだとみなす
      if (
        safeAreaInsetTop > statusBarH ||
        safeAreaInsetLeft > statusBarH ||
        safeAreaInsetRight > statusBarH ||
        safeAreaInsetBottom > statusBarH
      ) {
        flag = true;
      }
    } else {
      if (
        safeAreaInsetTop > 0 ||
        safeAreaInsetLeft > 0 ||
        safeAreaInsetRight > 0 ||
        safeAreaInsetBottom > 0
      ) {
        flag = true;
      }
    }

    //ドキュメントから削除
    document.body.removeChild(elmDiv);
  }

  //デバッグログ
  // console.log('isSafeAreaDisplay=' + flag, 'isSafeAreaConst=' + isSafeAreaConst, 'isSafeAreaEnv=' + isSafeAreaEnv);

  return flag;
}
