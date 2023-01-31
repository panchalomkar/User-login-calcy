
function myFunction(num) {
  
  document.getElementById("display").value=document.getElementById("display").value + num;

}

function mathOperation(action){
    let  input = $(".inp").val();
    
    $.ajax({
        type: 'post',
        url: 'calculator.php',
        data: {action:action,value:input},
        success: function (data) {
          $(".output").val(data);
        }
    });

}
function getHistory(action){
  let  input = $(".storedata").val();
  
  $.ajax({
      type: 'post',
      url: 'calculator.php',
      data: {action:action,value:input},
      success: function (data) {
        $(".hist").html(data);
      }
  });

}



