$(function() {
  
    // Setup form validation on the #register-form element
    $("#profile-form").validate({
    
        // Specify the validation rules
        rules: {
            full_name: "required",
            email: {
                required: true,
                email: true
            },
            mobile_number: {
                minlength: 10,
                number: true
            }
        },
        
        // Specify the validation error messages
        messages: {
            full_name: "Please enter your Full Name",
            password: {
                required: "Please provide a password",
                minlength: "Your password must be at least 5 characters long"
            },
            email: "Please enter a valid email address"
            
        },
        
        submitHandler: function(form) {
            form.submit();
        }
    });

  });