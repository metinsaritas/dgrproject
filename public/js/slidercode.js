jQuery(document).ready(function ($) {

            var jssor_1_options = {
              $AutoPlay: 0,
              $Idle: 4000,
              $SlideEasing: $Jease$.$InOutSine,
              $DragOrientation: 0,
              $CaptionSliderOptions: {
                $Class: $JssorCaptionSlideo$,
                $Transitions: []
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              },
              $Loop: 1
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
            jssor_1_slider.$Elmt.style.margin = "";

            var MAX_WIDTH = 10000;
            var MAX_HEIGHT = 10000;
            var MAX_BLEEDING = 1;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {
                    var originalWidth = jssor_1_slider.$OriginalWidth();
                    var originalHeight = jssor_1_slider.$OriginalHeight();

                    var containerHeight = containerElement.clientHeight || originalHeight;

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);
                    var expectedHeight = Math.min(MAX_HEIGHT || containerHeight, containerHeight);

                    jssor_1_slider.$ScaleSize(expectedWidth, expectedHeight, MAX_BLEEDING);

                    jssor_1_slider.$Elmt.style.top = ((containerHeight - expectedHeight) / 2) + "px";

                    jssor_1_slider.$Elmt.style.left = ((containerWidth - expectedWidth) / 2) + "px";
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            function OnOrientationChange() {
                ScaleSlider();
                window.setTimeout(ScaleSlider, 800);
            }

            ScaleSlider();

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", OnOrientationChange);
        });