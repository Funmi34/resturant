<?php
$db=mysqli_connect("localhost","root","","resturant");
if ($db->connect_error) {
    die("Connection failed: " .$db->connect_error);
}

$status =$statusMsg='';
if (isset($_POST["submit"])){ 
$status='error'; 
    if (!empty($_FILES["image"]["name"])){
        $filename=basename($_FILES["image"]["name"]);
        $filetype=pathinfo($filename,PATHINFO_EXTENSION);
        $allowtypes=array('jpg','png','jpeg','gif');
        if(in_array($filetype,$allowtypes)){
            $image=$_FILES['image']['tmp_name'];
            $fid=$_POST["food"];
            $imgcontent=addslashes(file_get_contents($image));
            $sql="INSERT INTO images (images,foodid,created) VALUES ('".$imgcontent."','".$fid."',NOW())";
            $insert=mysqli_query($db,$sql);
            if($insert){
                $status='success';
                $statusMsg="file uploaded successfully.";}else{
                    $statusMsg="file upload falied,please try again";
                }
            }else{
                    $statusMsg='sorry,only JPG,JPEG,PNG, & GIF files are allowed to upload';}
                }else{
                    $statusMsg='please select an image to upload';
                }
                }
        

?>