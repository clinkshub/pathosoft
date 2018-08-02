$(function () {
    // DataTable setup			
	$('#datattable').DataTable({
        order: [[ 4, "desc" ]],
	     lengthMenu: [[10, 25, 50, 100], [10, 25, 50, 100]],
         columnDefs: [ {
              "targets"  : 'no-sort',
              "orderable": false,
        }],
         processing: true,
         serverSide: true,
         language: {
            processing: "<div class='text-center text-info'><i class='fa fa-spinner fa-spin position-left'></i> Loading. Please wait...</div>"
            },
        ajax: {
            url :"doctors/getalldoctors",
            type: "post",
            error: function(){  // error handling
                $("#datattable").html("");
                $("#datattable").append('<tbody ><tr><th colspan="6" class="text-center">No data found in the server</th></tr></tbody>');
            }
        }				
    });

    //save new doctor
    $(document).on("submit",'#doctorForm',"submit",function(e){
        e.preventDefault();
        processRequest();
        var post_url = $(this).attr("action"); //get form action url
        var request_method = $(this).attr("method"); //get form GET/POST method
        var form_data = new FormData(this); //Creates new FormData object
        $.ajax({
            url : post_url,
            type: request_method,
            data : form_data,
            contentType: false,
            cache: false,
            processData:false
        }).done(function(response){ //
            processComplete();
            //$("#server-results").html(response);
        });
    });
  });