$(document).ready(function() {
    $('#login-form').submit(function(e) {
      e.preventDefault();
      var userType = $('#user-type').val();
      var username = $('#username').val();
      var password = $('#password').val();
  
      $.ajax({
        type: 'post',
        url: 'login.php',
        data: {
          user_type: userType,
          username: username,
          password: password
        },
        success: function(response) {
          if (response == 'success') {
            switch (userType) {
              case 'admin':
                window.location = 'admin.php';
                break;
              case 'manager':
                window.location = 'manager.php';
                break;
              case 'hr':
                window.location = 'hr.php';
                break;
              case 'employee':
                window.location = 'employee.php';
                break;
            }
          } else {
            alert('Invalid login credentials');
          }
        }
      });
    });
  });