<?php 
    header('Content-Type: application/json');
    header('Content-Type: text/html; charset=utf-8');
    $data = json_decode(file_get_contents("php://input"));
    require('connect.php');
    
    
    //Prefix and Suffix
    if(isset($data->getPrefixes)){
        $json = getNamePrefixes($con);
        echo json_encode($json);
    }
    function getNamePrefixes($con){
        $query = "select * from data_nameprefix";
        $result = mysqli_query($con,$query);
        $prefixes = array();
        while($r = mysqli_fetch_assoc($result)) {
            $prefixes[] = $r;
        }
        return $prefixes;
    }
    
    
    if(isset($data->getSuffixes)){
        $json = getNamesuffixes($con);
        echo json_encode($json);
    }
    function getNamesuffixes($con){
        $query = "select * from data_namesuffix";
        $result = mysqli_query($con,$query);
        $suffiex = array();
        while($r = mysqli_fetch_assoc($result)) {
            $suffiex[] = $r;
        }
        return $suffiex;
    }
    
    
    //Genetic Disorders
    if(isset($data->getDisorders)){
        $json = getDisordersfn($con);
        echo json_encode($json);
    }
    function getDisordersfn($con){
        $query = "select disorder_id,disorder_name from data_geneticdisorders";
        $result = mysqli_query($con,$query);
        $suffiex = array();
        $i = 0;
        while($r = mysqli_fetch_assoc($result)) {
            $suffiex[$i] = $r;
            $i++;
        }
        return $suffiex;
    }
    
    //Getting Sports
    if(isset($data->getSports)){
        $json = getSports($con);
        echo json_encode($json);
    }
    function getSports($con){
        $query = "select * from data_sports LIMIT 300";
        $result = mysqli_query($con,$query);
        $arr = array();
        $s = 0;
        while($r = mysqli_fetch_assoc($result)) {
            $arr[$s] = $r;
            $s++;
        }
        return $arr;
    }
?>