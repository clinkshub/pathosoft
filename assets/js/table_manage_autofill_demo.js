var handleDataTableAutofill = function () {
    "use strict";
    if ($('#data-table').length !== 0) {
        $('#data-table').DataTable({
            autoFill  : true,
            responsive: true
        });
    }
};

var TableManageAutofill = function () {
    "use strict";
    return {
        //main function
        init: function () {
            handleDataTableAutofill();
        }
    };
}();