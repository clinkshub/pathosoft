var handleLoginPageChangeBackground = function () {
        $('[data-click="change-bg"]').live("click", function (a) {
            a.preventDefault();
            var b = '[data-id="login-cover-image"]',
                c = $(this).find("img").attr("src"),
                d = '<img src="' + c + '" data-id="login-cover-image" />';
            $(".login-cover-image").prepend(d), $(b).not('[src="' + c + '"]').fadeOut("slow", function () {
                $(this).remove()
            }), $('[data-click="change-bg"]').closest("li").removeClass("active"), $(this).closest("li").addClass("active")
        })
    },
    LoginV2 = function () {
        "use strict";
        return {
            init: function () {
                handleLoginPageChangeBackground()
            }
        }
    }();