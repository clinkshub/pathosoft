var handleDataTableResponsive = function () {
    "use strict";
    if ($("#data-table").length !== 0) {
        $("#data-table").DataTable({
            responsive: true
        })
    }
};
var TableManageResponsive = function () {
    "use strict";
    return {
        init: function () {
            handleDataTableResponsive()
        }
    }
}()