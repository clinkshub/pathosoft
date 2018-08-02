"use strict";
var handleGritterNotification = function () {
        "use strict";
        $("#add-sticky").on("click", function () {
            return $.gritter.add({
                title     : "This is a sticky notice!",
                text      : "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempus lacus ut lectus rutrum placerat. ",
                image     : "http://via.placeholder.com/128x128",
                sticky    : !0,
                time      : "",
                class_name: "my-sticky-class"
            }), !1
        }), $("#add-regular").on("click", function () {
            return $.gritter.add({
                title : "This is a regular notice!",
                text  : "This will fade out after a certain amount of time. Sed tempus lacus ut lectus rutrum placerat. ",
                image : "http://via.placeholder.com/128x128",
                sticky: !1,
                time  : ""
            }), !1
        }), $("#add-max").on("click", function () {
            return $.gritter.add({
                title      : "This is a notice with a max of 3 on screen at one time!",
                text       : "This will fade out after a certain amount of time. Sed tempus lacus ut lectus rutrum placerat. ",
                sticky     : !1,
                image      : "http://via.placeholder.com/128x128",
                before_open: function () {
                    if (3 === $(".gritter-item-wrapper").length) return !1
                }
            }), !1
        }), $("#add-without-image").on("click", function () {
            return $.gritter.add({
                title: "This is a notice without an image!",
                text : "This will fade out after a certain amount of time."
            }), !1
        }), $("#add-gritter-light").on("click", function () {
            return $.gritter.add({
                title     : "This is a light notification",
                text      : 'Just add a "gritter-light" class_name to your $.gritter.add or globally to $.gritter.options.class_name',
                class_name: "gritter-light"
            }), !1
        }), $("#add-with-callbacks").on("click", function () {
            return $.gritter.add({
                title       : "This is a notice with callbacks!",
                text        : "The callback is...",
                before_open : function () {
                    alert("I am called before it opens")
                },
                after_open  : function (t) {
                    alert("I am called after it opens: \nI am passed the jQuery object for the created Gritter element...\n" + t)
                },
                before_close: function (t) {
                    var e = t ? 'The "X" was clicked to close me!' : "";
                    alert("I am called before it closes: I am passed the jQuery object for the Gritter element... \n" + e)
                },
                after_close : function (t) {
                    var e = t ? 'The "X" was clicked to close me!' : "";
                    alert("I am called after it closes. " + e)
                }
            }), !1
        }), $("#add-sticky-with-callbacks").on("click", function () {
            return $.gritter.add({
                title       : "This is a sticky notice with callbacks!",
                text        : "Sticky sticky notice.. sticky sticky notice...",
                sticky      : !0,
                before_open : function () {
                    alert("I am a sticky called before it opens")
                },
                after_open  : function (t) {
                    alert("I am a sticky called after it opens: \nI am passed the jQuery object for the created Gritter element...\n" + t)
                },
                before_close: function (t) {
                    alert("I am a sticky called before it closes: I am passed the jQuery object for the Gritter element... \n" + t)
                },
                after_close : function () {
                    alert("I am a sticky called after it closes")
                }
            }), !1
        }), $("#remove-all").on("click", function () {
            return $.gritter.removeAll(), !1
        }), $("#remove-all-with-callbacks").on("click", function () {
            return $.gritter.removeAll({
                before_close: function (t) {
                    alert("I am called before all notifications are closed.  I am passed the jQuery object containing all  of Gritter notifications.\n" + t)
                },
                after_close : function () {
                    alert("I am called after everything has been closed.")
                }
            }), !1
        })
    },
    handleSweetNotification = function () {
        "use strict";
        $('[data-click="swal-primary"]').on("click", function () {
            swal({
                title             : "Are you sure?",
                text              : "You will not be able to recover this imaginary file!",
                type              : "info",
                showCancelButton  : !0,
                confirmButtonClass: "btn-primary",
                confirmButtonText : "Primary!"
            })
        }), $('[data-click="swal-info"]').on("click", function () {
            swal({
                title             : "Are you sure?",
                text              : "You will not be able to recover this imaginary file!",
                type              : "info",
                showCancelButton  : !0,
                confirmButtonClass: "btn-info",
                confirmButtonText : "Info!"
            })
        }), $('[data-click="swal-success"]').on("click", function () {
            swal({
                title             : "Are you sure?",
                text              : "You will not be able to recover this imaginary file!",
                type              : "success",
                showCancelButton  : !0,
                confirmButtonClass: "btn-success",
                confirmButtonText : "Success!"
            })
        }), $('[data-click="swal-warning"]').on("click", function () {
            swal({
                title             : "Are you sure?",
                text              : "You will not be able to recover this imaginary file!",
                type              : "warning",
                showCancelButton  : !0,
                confirmButtonClass: "btn-warning",
                confirmButtonText : "Warning!"
            })
        }), $('[data-click="swal-danger"]').on("click", function () {
            swal({
                title             : "Are you sure?",
                text              : "You will not be able to recover this imaginary file!",
                type              : "error",
                showCancelButton  : !0,
                confirmButtonClass: "btn-danger",
                confirmButtonText : "Danger!"
            })
        })
    },
    handleToastr = function () {
        "use strict";
        $(function () {
            var i = -1;
            var toastCount = 0;
            var $toastlast;

            var getMessage = function () {
                var msgs = [ 'My name is Inigo Montoya. You killed my father. Prepare to die!',
                    '<div><input class="input-small" value="textbox"/>&nbsp;<a href="http://johnpapa.net" target="_blank">This is a hyperlink</a></div><div><button type="button" id="okBtn" class="btn btn-primary">Close me</button><button type="button" id="surpriseBtn" class="btn" style="margin: 0 8px 0 8px">Surprise me</button></div>',
                    'Are you the six fingered man?',
                    'Inconceivable!',
                    'I do not think that means what you think it means.',
                    'Have fun storming the castle!'
                ];
                i++;
                if (i === msgs.length) {
                    i = 0;
                }

                return msgs[ i ];
            };

            var getMessageWithClearButton = function (msg) {
                msg = msg ? msg : 'Clear itself?';
                msg += '<br /><br /><button type="button" class="btn clear">Yes</button>';
                return msg;
            };

            $('#closeButton').click(function () {
                if ($(this).is(':checked')) {
                    $('#addBehaviorOnToastCloseClick').prop('disabled', false);
                } else {
                    $('#addBehaviorOnToastCloseClick').prop('disabled', true);
                    $('#addBehaviorOnToastCloseClick').prop('checked', false);
                }
            });

            $('#showtoast').click(function () {
                var shortCutFunction = $("#toastTypeGroup input:radio:checked").val();
                var msg = $('#message').val();
                var title = $('#title').val() || '';
                var $showDuration = $('#showDuration');
                var $hideDuration = $('#hideDuration');
                var $timeOut = $('#timeOut');
                var $extendedTimeOut = $('#extendedTimeOut');
                var $showEasing = $('#showEasing');
                var $hideEasing = $('#hideEasing');
                var $showMethod = $('#showMethod');
                var $hideMethod = $('#hideMethod');
                var toastIndex = toastCount++;
                var addClear = $('#addClear').prop('checked');

                toastr.options = {
                    closeButton      : $('#closeButton').prop('checked'),
                    debug            : $('#debugInfo').prop('checked'),
                    newestOnTop      : $('#newestOnTop').prop('checked'),
                    progressBar      : $('#progressBar').prop('checked'),
                    rtl              : $('#rtl').prop('checked'),
                    positionClass    : $('#positionGroup input:radio:checked').val() || 'toast-top-right',
                    preventDuplicates: $('#preventDuplicates').prop('checked'),
                    onclick          : null
                };

                if ($('#addBehaviorOnToastClick').prop('checked')) {
                    toastr.options.onclick = function () {
                        alert('You can perform some custom action after a toast goes away');
                    };
                }

                if ($('#addBehaviorOnToastCloseClick').prop('checked')) {
                    toastr.options.onCloseClick = function () {
                        alert('You can perform some custom action when the close button is clicked');
                    };
                }

                if ($showDuration.val().length) {
                    toastr.options.showDuration = parseInt($showDuration.val());
                }

                if ($hideDuration.val().length) {
                    toastr.options.hideDuration = parseInt($hideDuration.val());
                }

                if ($timeOut.val().length) {
                    toastr.options.timeOut = addClear ? 0 : parseInt($timeOut.val());
                }

                if ($extendedTimeOut.val().length) {
                    toastr.options.extendedTimeOut = addClear ? 0 : parseInt($extendedTimeOut.val());
                }

                if ($showEasing.val().length) {
                    toastr.options.showEasing = $showEasing.val();
                }

                if ($hideEasing.val().length) {
                    toastr.options.hideEasing = $hideEasing.val();
                }

                if ($showMethod.val().length) {
                    toastr.options.showMethod = $showMethod.val();
                }

                if ($hideMethod.val().length) {
                    toastr.options.hideMethod = $hideMethod.val();
                }

                if (addClear) {
                    msg = getMessageWithClearButton(msg);
                    toastr.options.tapToDismiss = false;
                }
                if (!msg) {
                    msg = getMessage();
                }

                $('#toastrOptions').text('Command: toastr["'
                    + shortCutFunction
                    + '"]("'
                    + msg
                    + (title ? '", "' + title : '')
                    + '")\n\ntoastr.options = '
                    + JSON.stringify(toastr.options, null, 2)
                );

                var $toast = toastr[ shortCutFunction ](msg, title); // Wire up an event handler to a button in the toast, if it exists
                $toastlast = $toast;

                if (typeof $toast === 'undefined') {
                    return;
                }

                if ($toast.find('#okBtn').length) {
                    $toast.delegate('#okBtn', 'click', function () {
                        alert('you clicked me. i was toast #' + toastIndex + '. goodbye!');
                        $toast.remove();
                    });
                }
                if ($toast.find('#surpriseBtn').length) {
                    $toast.delegate('#surpriseBtn', 'click', function () {
                        alert('Surprise! you clicked me. i was toast #' + toastIndex + '. You could perform an action here.');
                    });
                }
                if ($toast.find('.clear').length) {
                    $toast.delegate('.clear', 'click', function () {
                        toastr.clear($toast, {force: true});
                    });
                }
            });

            function getLastToast() {
                return $toastlast;
            }

            $('#clearlasttoast').click(function () {
                toastr.clear(getLastToast());
            });
            $('#cleartoasts').click(function () {
                toastr.clear();
            });
        });
    },
    Notification = function () {
        "use strict";
        return {
            init: function () {
                handleGritterNotification(), handleSweetNotification(), handleToastr()
            }
        }
    }();