<?php

$msg="";
if(isset($_POST['upload'])){
$target="./images/". md5(uniqid(time())). basename($_FILES['image']['name']);
   $title=$_POST['title'];
   $description=$_POST['description'];
   $id=$_POST['id'];
$xml=simplexml_load_file('images.xml');
$date=$xml->addChild('date');
$date->addChild('id',$id);
$date->addChild('title',$title);
$date->addChild('description',$description);
$date->addChild('image',$target);
$date->addChild('view','view.php?id='.$id);
$date->addChild('edit','edit.php?id='.$id);
$date->addChild('delete','delete.php?id='.$id);
$date->addChild('confirm','return confirm("Are you sure you want to delete this item?")');
$date->addChild('back','modifica.php');

file_put_contents('images.xml', $xml->asXML());
if(move_uploaded_file($_FILES['image']['tmp_name'],$target)){
       header('location:modifica.php');
    }else{
        $msg="Vai! Vai! Vai!!!";
    }
}
