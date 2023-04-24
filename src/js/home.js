$(document).ready(function () {
  
 

  //Called when add player button is clicked
  $("#action_add_player").click(function (event) {
    // event.preventDefault();
    var formData = new FormData();
    var form = $("form").serializeArray();
    var isAnyEmptyField = false;
    var formDataArr = {};
    form.forEach((element) => {
      if (!element.value) {
        isAnyEmptyField = true;
        return;
      }
      formDataArr[element.name] = element.value;
    });

    if (isAnyEmptyField) {
      generateErrorMessage("Fields can not be empty");
    }else{

    formData.append("player_name", $("#player_name").val());
    formData.append("player_score", $("#player_score").val());
    formData.append("ball_faced", $("#ball_faced").val());

    $.ajax({
      url: "../../add_player.php",
      type: "POST",
      dataType: "text",
      success: function (response) {
        var response_arr = jQuery.parseJSON(response);
        console.log(response_arr);
        if (response_arr["status"] == "success") {
          window.location = "/";
        } else {
          window.location = " /var/www/html/exam_module_2/cricket_score_board/src/views/login_page.php";
          
        }
      },
      error: function (xhr, status, error) {
        console.assert(xhr,error);
        window.location = "../../src/views/error_dialog.php?message=" + xhr;
      },
    });
  }
  });

  //Show error for 5 second, if any field is empty
  function generateErrorMessage($err_msg) {
    $("#error-field").html($err_msg);
    setTimeout(function () {
      $("#error-field").html("");
    }, 5000);
  }

});