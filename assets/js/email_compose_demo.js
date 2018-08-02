var handleEmailToInput = function () {
    $("#email-to").tagit({
        availableTags: [ "c++", "java", "php", "javascript", "ruby", "python", "c" ]
    })
};
var handleEmailContent = function () {
    $("#wysihtml5").wysihtml5()
};
var EmailCompose = function () {
    "use strict";
    return {
        init: function () {
            handleEmailToInput();
            handleEmailContent()
        }
    }
}()