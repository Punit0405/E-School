function checkadminlogin() {
  
    const adminlogemail = $("#adminloginemail").val();
    const adminlogpass = $("#adminloginpassword").val();
    $.ajax({
          url: "admin/adminverify.php",
          method: "POST",
        data: {
          checklogemail: "checklogemail",
          adminlogemail: adminlogemail,
          adminlogpass: adminlogpass,
        },
        success:  (data)=> {
          
          if(data==0){
            $("#adminlogmsg").html(
              "<span class='alert alert-danger'>Invalid Email Id Or Password !</span>"
            );
            setTimeout(() => {
              
              $('#adminlogmsg').hide();
            }, 1000);
          } else if(data==1){
            console.log("here wwe are")
            $('#adminlogmsg').html(
                "<span class='alert alert-success'>Success Loading ....</span>"
            );
            setTimeout(() => {
                
                location.href="admin/admindashboard.php";
              }, 500);
            
          }
          
          
        }
    });
}