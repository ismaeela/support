<?php

    class mains_methods{
    
    
        private $hostname="localhost";
        private $username="root";
        private $password="";
        private $options  = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,);
     
        #-Connection   
            function __construct(){
                $database = "support";
                $this->dbConn= new PDO("mysql:host=$this->hostname;dbname=$database", $this->username, $this->password, $this->options);
                $this->dbConn->exec("SET CHARACTER SET utf8");
            }
        #-end of Connection
        
            //$message="";
           
        public function client_drop_down(){
                $sql        =   "SELECT * FROM clients_tbl";
                $s          =   $this->dbConn->prepare($sql);
                $s          ->  execute();
                return $s;
        }
        //Staff drop down
              public function staff_drop_down(){
                $sql        =   "SELECT * FROM staff_tbl";
                $s          =   $this->dbConn->prepare($sql);
                $s          ->  execute();
                return $s;
        }
        //end of drop down
        
        public function comm_chenal_drop_down(){
                $sql        =   "SELECT * FROM com_chanels";
                $s          =   $this->dbConn->prepare($sql);
                $s          ->  execute();
                return $s;
        }
        
        
         public function add_ticket($client_id, $channel_id, $subject, $sender_id, $tic_date, $tic_time, $description){
                $sql        =   "INSERT INTO tickes(tic_client_id, tic_chanel, tic_subject, tic_sender_id, tic_date, tic_time, tic_desc) VALUES (?, ?, ?, ?, ?, ?, ?)";
                $s          =   $this->dbConn->prepare($sql);
                $s          ->  bindParam(1, $client_id);
                $s          ->  bindParam(2, $channel_id);
                $s          ->  bindParam(3, $subject);
                $s          ->  bindParam(4, $sender_id);
                $s          ->  bindParam(5, $tic_date);
                $s          ->  bindParam(6, $tic_time);
                $s          ->  bindParam(7, $description);
                $s          ->  execute();
               // $message    = "you successfully added a ticket";
        }
        //SELECT * FROM table1 INNER JOIN table2 ON table1.column_name = table2.column_name;  t INNER JOIN clients_tbl c ON t.tic_client_id = c.id
        public function view_ticket(){
                $sqlslt     =   "SELECT * FROM tickes";
                $scmt       =   $this-> dbConn->prepare($sqlslt);
                $scmt       ->  execute();
                              
                              return $scmt; 
             }
                 public function assign_tickes(){
                $sqlslt     =   "SELECT * FROM tickes t INNER JOIN clients_tbl c ON t.tic_client_id = c.id AND  id ='$id'";
                $scmt       =   $this-> dbConn->prepare($sqlslt);
                $scmt       ->  execute();
                              
                              return $scmt; 
                 }
                public function update_ticket(){
                $sqlslt     =   "SELECT * FROM tickes t INNER JOIN clients_tbl c ON t.tic_client_id = c.id ";
                $scmt       =   $this-> dbConn->prepare($sqlslt);
                $scmt       ->  execute();
                              
                              return $scmt; 
             }
          
        
 
    }

?>