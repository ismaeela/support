$('#assign_issue').on('click', function() {
    $('#test-content').load('assign_issue.php');
   
  })

  $('#send_issue').on('click', function() {
    $('#test-content').load('send_issue.php');
   
  })

  $('#view_issue').on('click', function() {
    $('#test-content').load('view_issue.php');
   
  })

  $('#treated_issue').on('click', function() {
    $('#test-content').load('treated_issue.php');
   
  })

  $('#change_passwordd').on('click', function() {
    $('#test-content').load('change_passwordd.php');
   
  })

  function add_ticket(){
    $.ajax({  
    type: "POST",  
    url: 'mypost.php',
    data: $('#send_issue').serialize(),
    cache: false,
      success:function(response){
        $('#succcess').html(response);
      }
                  
    
              
  });
  var form=document.getElementsByName('send_issue').reset();
  return false;

  
  }