<?php
if(isset($_REQUEST['submit'])) {
    $data = '' ; 
    $filename = "data.json";
    if(is_file($filename)){
        $data = file_get_contents($filename);
    }

    $json_arr = json_decode($data , true);
    $json_arr[] = array('name' => $_REQUEST['name'] , 'specialty' => $_REQUEST['specialty'] , 'goal' => $_REQUEST['goal'] , 'lang' => $_REQUEST['lang'] , 'value' => $_REQUEST['value'] , 'link' => $_REQUEST['link']);


    file_put_contents($filename , json_encode($json_arr));


}

//    $json_arr[] = array('name' => $_REQUEST['name'] , 'specialty' => $_REQUEST['specialty'] , 'goal' => $_REQUEST['goal'] , 'lang' => $_REQUEST['lang'] , 'value' => $_REQUEST['value'] , 'link' => $_REQUEST['link']);


?>