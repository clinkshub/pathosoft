function processRequest(){
    $(".actionBtns").prop('disabled','disabled');
    $("#loader").html("<i class='fa fa-spinner fa-spin position-left'></i> Loading. Please wait...");
}
function processComplete(){
    $(".actionBtns").removeAttr('disabled');
    $("#loader").html("");
    $('html, body').animate({scrollTop:0}, 'slow');
}
$(".datepicker").datepicker({
    todayHighlight: !0,
    format: 'dd/mm/yyyy',
    yearRange: '1999:2012',
    minDate: new Date(1999, 10 - 1, 25),
    maxDate: '+30Y',
})