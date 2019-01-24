<?php
class TZ   {

    public $connect;  
    private $host = "localhost";  
    private $username = 'root';  
    private $password = '';  
    private $database = 'blogdb';  
 
    function __construct()  
    {  
         $this->connect();  
    }  
    public function connect()  
    {  
         $this->connect = mysqli_connect($this->host, $this->username, $this->password, $this->database); 
          mysqli_set_charset($this->connect,'utf8');
    }  
    public function query($query)  
    {  
         return mysqli_query($this->connect, $query);  
    } 

    public function select ()
    {
    

    $sql = 'SELECT offers.name, requests.price, requests.count, operators.fio 
    FROM requests 
    INNER JOIN offers 
    ON requests.offer_id = offers.id 
    INNER JOIN operators 
    ON operators.id = requests.operator_id 
    WHERE requests.count > 2 
    AND operators.id = 10 
    OR 12';
    
    $result = $this->query($sql);
   
    $offers = mysqli_fetch_all($result, MYSQLI_ASSOC);
    
    return $offers;
    
    
    }
    public function groupby($query){

    $sql = 'SELECT offers.name, requests.price, requests.count, operators.fio 
    FROM requests 
    INNER JOIN offers 
    ON requests.offer_id = offers.id 
    INNER JOIN operators 
    ON operators.id = requests.operator_id 
    WHERE requests.count > 2 
    AND operators.id = 10 
    OR 12'.
    $query;
    $result = $this->query($sql);
   
    $offers = mysqli_fetch_all($result, MYSQLI_ASSOC);
    
    return $offers;

    }
    }



    $ajax = $_POST["group"];
    if($ajax == 'name'){  
        $results = new TZ;
        $ajaxresult = $results->groupby(' GROUP BY offers.name');
        print_r($ajaxresult);
      
    }
    elseif($ajax == 'count'){
        $results = new TZ;
        $ajaxresult = $results->groupby(' GROUP BY requests.count');
        print_r($ajaxresult);
    }
    elseif($ajax == 'price'){
        $results = new TZ;
        $ajaxresult = $results->groupby(' GROUP BY requests.price');
        print_r($ajaxresult);
    }
  

