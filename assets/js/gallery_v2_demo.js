var handleSuperboxGallery = function () {
    "use strict";
    $(window).load(function () {
        $(".superbox").SuperBox()
    })
};
var Gallery = function () {
    "use strict";
    return {
        init: function () {
            handleSuperboxGallery()
        }
    }
}()