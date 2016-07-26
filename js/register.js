$("#click_to_hide").click(function(){
      $("#click").hide();
        $("#password").show();

    // $("#cancel").click(function(){
    //     $("#click").show();
    //     $("#password").hide();
   
});
$("#cancel").click(function(){
    
         $("#click").show();
        $("#password").hide();
});
$(document).ready(function() {
    var search = $("#signup_email");
        search.keyup(function() {

            if (search.val() !='') {
                
                $.ajax({
                  type:"POST",
                 url:"../classes/Check.php",
                 data:{search:search.val(),search_type:'email'},

                 success:function(data){
                 $("#email_result").html(data);
                 //alert(search.val());
                 },
                  
                });



                //alert(search.val());
            }

          });

   var search_username = $("#signup_username");
        search_username.keyup(function() {
            if (search_username.val() !='') {
                
                $.ajax({
                  type:"POST",
                 url:"../classes/Check.php",
                 data:{search:search_username.val(),search_type:'username'},

                 success:function(data){
                 $("#username_result").html(data);
                 //alert(search.val());
                 },
                  
                });



                //alert(search.val());
            }

        });


           var old_pass_check = $("#current_password");
           var newpass = $("#new_password");
        $("#update_password").click(function() {
            if (old_pass_check.val() !='' && newpass.val() !='') {
               
                $.ajax({
                  type:"POST",
                 url:"../classes/Update_password.php",
                 data:{oldpass:old_pass_check.val(),new_pass:newpass.val()},

                 success:function(data){
                 $("#pass_update_result").html(data);
                
                 },
                  
                });

            }

        });

});
