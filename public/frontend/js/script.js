

     $(document).ready(function() {
         $("#contctForm").validate({
             rules: {
                 first_name: {
                     required: true,
                     minlength: 3
                 },
                 last_name: {
                     required: true,
                     minlength: 3
                 },
                 email: {
                     required: true,
                     email: true
                 },
                 mobile: {
                     required: true,
                     minlength: 11,
                     maxlength: 14
                 },
                 message: {
                     required: true,
                     minlength: 5
                 },
             },
             messages: {
                 first_name: "Enter Your First Name",
                 last_name: "Enter Your Last Name",
                 email: "Enter Your Email Address",
                 mobile: "Enter Your Mobile Number",
                 subject: "Enter Your Subject",
                 message: "Please Leave a Message"
             },
             submitHandler: submitForm4
         });

         function submitForm4() {
             var data = $("#contctForm").serialize();
             $.ajax({
                 type: 'POST',
                 url: 'submitcontact.php',
                 data: data,
                 beforeSend: function() {
                     $("#error").fadeOut();
                     $("#btn-submit").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; sending ...');
                 },
                 success: function(data) {
                     console.log(data);
                     if (data) {
                         $('#errorMessage').html('<div class="alert alert-success" role="alert" id="success_message"> Thank you for contacting us. We will get back to you shortly.</div>');
                         $('#myModal').modal('show');
                         setTimeout('window.location.href = "index.php"; ', 5000);
                     } else {
                         alert('Something wrong');
                     }
                 }
             });
         }
     });
