$(document).ready(function () {
    // ajax call for verification
    $("#studentemail").on("keyup blur", function () {
      console.log("Eve")
      let studentemail = $("#studentemail").val();
      $.ajax({
        url: "emailverification.php",
        method: "POST",
        data: {
          checkemail: "checkemail",
          studentemail: studentemail,
        },
        success: function (data) {
          if (data != 0) {
            $("#statusmsg2").html(
              '<small style="color:red;">Email Already In Use ! !</small>'
            );
            $("#studentaddBtn").attr("disabled", true);
          } else if (data == 0) {
            $("#statusmsg2").html(
              '<small style="color:green;">Everything Is Good ! !</small>'
            );
            $("#studentaddBtn").attr("disabled", false);
          }
        },
      });
    });
  });