"use strict";
var handleBootstrapTable = function () {
    "use strict";
    var $table = $('#table');
	$('#toolbar').find('select').change(function () {
	$table.bootstrapTable('refreshOptions', {
		  exportDataType: $(this).val()    
		});
	});
};

var TableManageAutofill = function () {
    "use strict";
    return {
        //main function
        init: function () {
            handleBootstrapTable();
        }
    };
}();
$(document).ready(function () {
    App.init();
    TableManageAutofill.init();
});
window.dataLayer = window.dataLayer || [];

function gtag() {
    dataLayer.push(arguments);
}

gtag('js', new Date());

gtag('config', 'UA-66289183-4');