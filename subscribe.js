$(document).ready(function() {
 
    $('#overlay').fadeIn();
  
   
    $('.close').click(function() {
      $('#overlay').fadeOut();
    });
  
  
    $('#subscriptionForm').submit(function(event) {
      event.preventDefault();
      var email = $('#email').val();
      if (!isValidEmail(email)) {
        $('#email-error').text('Please enter a valid email address.');
        return;
      }
     
      $('#email-error').text('');
     
      $.ajax({
        type: 'POST',
        url: 'email.php', 
        data: $(this).serialize(),
        success: function(response) {
      
          console.log(response);
        
          window.location.href = 'settingpage.php';
        },
        error: function(xhr, status, error) {
         
          console.error(xhr.responseText);
        }
      });
    });
  
  
    function isValidEmail(email) {
   
      var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      return emailRegex.test(email);
    }
});
