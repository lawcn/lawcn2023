
$(document).ready(function() {
   
    // process the form
    $('form').on('submit', function (e) {
     
          e.preventDefault();

          $.ajax({
            type: 'post',
            url: 'email.php',
            data: $('form').serialize(),
            success: function (data) {
              $('#sent').html(data);
              $('#name').val("");
              $('#email').val("");
              $('#message').val("");
              
            }
          });

        });
});