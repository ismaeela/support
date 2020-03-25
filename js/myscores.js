function add_ticket(){
    $.ajax({  
    type: "POST",  
    url: 'mypost.php',
    data: $('#add_ticket').serialize(),
    cache: false,
    beforeSend: function() 
    {
                 
    },
                  
    success: function(data)
    {
       add_ticket();
       
    }
    //alert("hahaahaah");
              
  });
}
  