<?php 
//Written by Mathew Chebet.


//This holds all of the functions used 

    /*Allows for data retrieval*/
    function getData($field){
        if($_SERVER['REQUEST_METHOD']=='POST'){
            if(!isset($_POST[$field])){
                $data = "";
            }
            else{
                $data = $_POST[$field];
            }
            
            return trim($data);;
        }
        elseif($_SERVER['REQUEST_METHOD']=='GET') {
            if(!isset($_GET[$field])){
                $data = "";
            }
            else{
                $data =$_GET[$field];
            }
            
            return trim($data);
        }
        else {
            return null;
        }
    }

    /*Allows for data retrieval from a database*/
    function getBook($connection){
        $searchType=getData('search_type');
        $searchTerm=getData('search_bar');
        
        switch ($searchType) {
            case "genre":
                $sql = "SELECT * FROM BOOKS WHERE GENRE LIKE '%".$searchTerm."%'";
                break;
            case "title":
                $sql = "SELECT * FROM BOOKS WHERE TITLE LIKE '%".$searchTerm."%'";
                break;
            default:
                return []; // Handle invalid search type

        }
        
        $result_set = mysqli_query($connection,$sql);
        $results = [];

        while ($row =mysqli_fetch_assoc($result_set)){
            $results[] = $row;
        }
        
        return $results;
    }


    function getFavs($connection,$field){

        if (!$field || !is_numeric($field)) {
            die("Error: Invalid or missing user ID.");
        }
    
        $sql = "SELECT * FROM Favourites WHERE id=".$field."";
                
        
        $result_set = mysqli_query($connection,$sql);
        $results = [];

        while ($row =mysqli_fetch_assoc($result_set)){
            $results[] = $row;
        }
        
        return $results;
    }

    /*Opens a new DB connection*/
    Function openConnection(){
        /*Database connection parameters*/
        $serverName="localhost";
        $database="bookcatalogue";
        $username="root";
        $password="";
        $connection = mysqli_connect($serverName,$username,$password,$database);
        if (!$connection) {
            die("Connection failed: " . mysqli_connect_error());
        }

        return $connection;
    }  
    
    
    Function getBookData($connection, $sql){
        $result = mysqli_query($connection,$sql);
        
        if($result){
    
        $row =mysqli_fetch_assoc($result);
            
        return $row;
        }
        else{
         return "ERROR";
        }
    }

     /*Closes a new DB connection*/
    Function closeConnection($connection){
        mysqli_close($connection);
    }  

?>