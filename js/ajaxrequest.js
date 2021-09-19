$(document).ready(function () {
  // ajax call for verification
  $("#stuemail").on("keypress blur", function () {
    let stuemail = $("#stuemail").val();
    $.ajax({
      url: "student/emailverification.php",
      method: "POST",
      data: {
        checkemail: "checkemail",
        stuemail: stuemail,
      },
      success: function (data) {
        if (data != 0) {
          $("#statusmsg2").html(
            '<small style="color:red;">Email Already In Use ! !</small>'
          );
          $("#signup").attr("disabled", true);
        } else if (data == 0) {
          $("#statusmsg2").html(
            '<small style="color:green;">Everything Is Good ! !</small>'
          );
          $("#signup").attr("disabled", false);
        }
      },
    });
  });
});

function addstudent() {
  let stuname = $("#stuname").val();
  let stuemail = $("#stuemail").val();
  let stupassword = $("#stupassword").val();
  //    checking form filed
  if (stuname.trim() == "") {
    $("#statusmsg1").html(
      '<small style="color:red;">Please Enter Name !</small>'
    );
    $("#stuname").focus();
    return false;
  } else if (stuemail.trim() == "") {
    $("#statusmsg2").html(
      '<small style="color:red;">Please Enter Email !</small>'
    );
    $("#stuemail").focus();
    return false;
  } else if (stupassword.trim() == "") {
    $("#statusmsg3").html(
      '<small style="color:red;">Please Enter Password !</small>'
    );
    $("#stupassword").focus();
    return false;
  } else {
    $.ajax({
      url: "student/addstudent.php",
      method: "POST",
      dataType: "json",
      data: {
        stuname: stuname,
        stuemail: stuemail,
        stupassword: stupassword,
      },
      success: function (data) {
        if (data == "OK") {
          successmsg();

          setTimeout(() => {
            $("#successmsg").hide();
          }, 3000);
          clearform();
        } else if (data == "Failed") {
          $("#successmsg").html(
            "<span class='alert alert-danger'>Registration Failed</span>"
          );
        }
      },
    });
  }
}
function clearform() {
  $("#sturegistrationform").trigger("reset");
  $("#statusmsg1").html(" ");
  $("#statusmsg2").html(" ");
  $("#statusmsg3").html(" ");
  $("#registrationclose").click();
}
function successmsg(params) {
  $("#successmsg").html(
    "<span class='alert alert-success'>Registration Sucessfull</span>"
  );

  $("#successmsg").show();
}

// ajax call for student verification
function checkstulogin() {
  
  const stulogemail = $("#loginemail").val();
  const stulogpass = $("#loginpassword").val();
  $.ajax({
        url: "student/addstudent.php",
        method: "POST",
      data: {
        checklogemail: "checklogemail",
        stulogemail: stulogemail,
        stulogpass: stulogpass,
      },
      success:  (data)=> {
        
        if(data==0){
          $("#loginsuccessmsg").html(
            "<span class='alert alert-danger'>Invalid Email Id Or Password !</span>"
          );
          setTimeout(() => {
            
            $('#loginsuccessmsg').hide();
          }, 1000);
        } else if(data==1){
          console.log("here wwe are")
          $('#loginsuccessmsg').html(
            '<div class="spinner-border text-success" role="status">'
          );
          setTimeout(() => {
              
              location.href="index.php";
            }, 500);
          
        }
        
        
      }

    });
    
  }
  
 