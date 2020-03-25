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
     //view_ticket();
     
  }
            
});
}

//hide page
//         function hide_page(){
                     
//                 $.ajax({
//                 type: 'POST',   
//                 url: 'dashboard.php',
//                cache: false,
//                success: function(data){
//                   $("#addview_tic").hide();
//                    }
                
//             });
//           assign_ticket();
//   }

//end of hide page


//assign page
    
//     function assign_ticket(){
//                 $.ajax({
//                 url: 'assign_ticket.php',
//                cache: false,
//                success: function(data){
//                   $("#Assign").html(data);
//                    }
                
//             });
         
//   }
  
//end of assign page


// view_ticket();
  
//     function view_ticket(){
//                 $.ajax({
                
//                 url: 'view_ticket.php',
//                cache: false,
//                success: function(data){
//                   $("#Content").html(data);
//                    }
                
//             });
         
//   }
    
// view_ticket();
    
    
  //  end of view ticket
  

//add ticket
    
     
                     

///end


