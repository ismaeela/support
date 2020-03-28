<?php
 session_start();
        function __autoload($class){
            $myClass="methods.php";
            include_once("$myClass");
        }

        $obj = new mains_methods();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Briatek Computers Nig Ltd.</title>
  <link rel="stylesheet" href="jqueryui/jquery-ui.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="jqueryui/jquery.js"></script>
    <script src="jqueryui/jquery-ui.js"></script>
</head>
<body>
    <div class="container">
        <br />
        <h3 align="center">Briatek Computers Nig Ltd.</h3> <br />
        <br />

        <div align="right" style="margin-bottom:5px;">
            <button type="button" name="add" id="add" class="btn btn-success btn-xs">Add</button>
        </div>
        <div id="user_data" class="table-reponsive"> </div>
        
    </div>
    <br />
    <div id="user_dialog" title="Add Data">
        <form method="POST" id="user_form">
          <div class="row">
          <div class="col-lg-4">
          <div class="form-group">
            <label><b>Client's Name:</b></label>
              <select class="form-control" id="client_id" name="client_id">
                <option value=''>Select Client</option>
                  <?php
                    $selClient      =   $obj->client_drop_down();
                    while($fetch    =   $selClient->fetch()){
                    $id             =   $fetch['id']; 
                    $name           =   $fetch['name']; 
                    echo "<option value='$id'>$name</option>";
                                    }
                  ?>
              </select>
              <span id="error_client_id" class="text-danger"></span>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="form-group">
              <label><b>Subject:</b></label>
              <input type="text" id ="subject" name ="subject" class="form-control">
              <span id="error_subject" class="text-danger"></span>
            </div>
          </div>
          <div class="col-lg-4">    
            <div class="form-group">
                <label><b>Chanel:</b></label>
                <!-- <input type="text" name ="sender_id" class="form-control"> -->
                <select class = "form-control" id="tic_chanel" name="tic_chanel">
                  <?php
                    $selClient      =   $obj->comm_chenal_drop_down();
                    while($fetch        =   $selClient->fetch()){
                    $com_id             =   $fetch['com_id']; 
                    $com_name           =   $fetch['com_name']; 
                    echo "<option value='$com_id'>$com_name </option>";
                      }
                    ?>                                        
                </select>
                <span id="error_tic_chanel" class="text-danger"></span>
            </div>
          </div>
          <div class="col-lg-2">
            <div class="form-group">
              <label><b>Sender ID:</b></label>
              <input type="text" id ="sender_id" name ="sender_id" class="form-control">
              <span id="error_sender_id" class="text-danger"></span>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="form-group">
              <label><b>Date:</b></label>
              <input type="date" id ="tic_date" name ="tic_date" class="form-control">
              <span id="error_tic_date" class="text-danger"></span>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="form-group">
              <label><b>Time:</b></label>
              <input type="time" id="tic_time" name ="tic_time" class="form-control">
              <span id="error_tic_time" class="text-danger"></span>
            </div>
          </div>          
          <div class="col-lg-4">
            <div class="form-group">
              <label><b>Issue desription:</b></label>
              <input type="text" id="description" name ="description" class="form-control">
              <span id="error_description" class="text-danger"></span>
            </div>
          </div>    
          <div class="col-lg-4">
            
            <div class="form-group">
                
                <input type="hidden" id="action" name="action" value="insert" >
                <input type="hidden" id="hidden_id" name="hidden_id" >
                <input type="submit" id="form_action" name="form_action" class="btn btn-info" value="insert" >
            </div>
            <div>
            

            
        </form>
        <div id="action_alert" title="Action"></div>
    </div>
  
    
  
  </body>
</html>

<script type="application/javascript">
    $(document).ready(function() {
      
      load_data();
    function load_data(){
        $.ajax({
            url: "view.php",
            method: "POST",
            success:function(data){
                $('#user_data').html(data);
            }
        });
    }

    $("#user_dialog").dialog({
        //autoOpen: false,
        width: 400,

    });

    $('#add').click(function(){
        $('#user_dialg').attr('title', 'Add Data');
        $('#action').val('insert');
        $('#action_action').val('insert');
        $("#user_dialog").dialog('open');

    });

    $('#user_form').on('submit',function(event){
        event.preventDefault();
        var error_client_id = "";
        var error_subject = "";
        var error_tic_chanel = "";
        var error_sender_id = "";
        var error_tic_date = "";
        var error_tic_time = "";
        var error_description = "";
        if($('#client_id').val() == ""){
            error_client_id = "Client Id is Required";
            $('#error_client_id').text(error_client_id);
            $('#client_id').css('border-color','#cc0000')
        }else{
            error_client_id = "";
            $('#error_client_id').text(error_client_id);
            $('#client_id').css('border-color','')
        };

        if($('#subject').val() == ""){
            error_subject = "Subect is Required";
            $('#error_subject').text(error_subject);
            $('#subject').css('border-color','#cc0000')
        }else{
            error_subject = "";
            $('#error_subject').text(error_subject);
            $('#subject').css('border-color','')
        }

        if($('#tic_chanel').val() == ""){
            error_tic_chanel = "Chanel is Required";
            $('#error_tic_chanel').text(error_tic_chanel);
            $('#tic_chanel').css('border-color','#cc0000')
        }else{
            error_tic_chanel = "";
            $('#error_tic_chanel').text(error_tic_chanel);
            $('#tic_chanel').css('border-color','')
        }

        if($('#sender_id').val() == ""){
            error_sender_id = "Sender ID is Required";
            $('#error_sender_id').text(error_sender_id);
            $('#sender_id').css('border-color','#cc0000')
        }else{
            error_sender_id = "";
            $('#error_sender_id').text(error_sender_id);
            $('#sender_id').css('border-color','')
        }

        if($('#tic_date').val() == ""){
            error_tic_date = "Date is Required";
            $('#error_tic_date').text(error_tic_date);
            $('#tic_date').css('border-color','#cc0000')
        }else{
            error_tic_date = "";
            $('#error_tic_date').text(error_tic_date);
            $('#tic_date').css('border-color','')
        }

        if($('#tic_time').val() == ""){
            error_tic_time = "Time is Required";
            $('#error_tic_time').text(error_subject);
            $('#tic_time').css('border-color','#cc0000')
        }else{
            error_tic_time = "";
            $('#error_tic_time').text(error_tic_time);
            $('#tic_time').css('border-color','')
        }

        if($('#description').val() == ""){
            error_description = "Description is Required";
            $('#error_description').text(error_description);
            $('#description').css('border-color','#cc0000')
        }else{
            error_description = "";
            $('#error_description').text(error_description);
            $('#description').css('border-color','')
        }

        if(error_first_name == "" && error_last_name == ""){
            $('#form_action').attr('disabled','disabled');
            var form_data = $(this).serialize();
            $.ajax({
                url: "action.php",
                method: "POST",
                data: form_data,
                success:function(data){
                    $('#user_dialog').dialog('close');
                    $('#action_alert').html(data);
                    $('#action_alert').dialog('open');
                    load_data();
                }
            });
        }else{
            return false;
        } 
  
    });

  </script>
