<?php
$conn=mysqli_connect("localhost","root","","php_9");
session_start();
if(isset($_POST['next']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $dob=$_POST['dob'];
    $address=$_POST['address'];
    if($name !="" && $email !="" && $gender !="" && $dob !="" && $address !="")
    {
        foreach($_POST as $key=>$value)
        {
            $_SESSION['info'][$key]=$value;
        }
        $keys=array_keys($_SESSION['info']);
        if(in_array('next',$keys))
        {
            unset($_SESSION['info']['next']);
        }
        header("location:form1.php");
    }
}
if(isset($_POST['next_one']))
{
    $phone=$_POST['phone_no'];
    $fname=$_POST['father_name'];
    $mname=$_POST['mother_name'];
    $education=$_POST['education'];
    if($phone !="" && $fname !="" && $mname !="" && $education !="")
    {
        foreach($_POST as $key=>$value)
        {
            $_SESSION['info'][$key]=$value;
        }
        $keys=array_keys($_SESSION['info']);
        if(in_array('next_one',$keys))
        {
            unset($_SESSION['info']['next_one']);
        }
        header("location:form2.php");
    }
}
if(isset($_POST['submit']))
{
    $img=$_FILES['image']['name'];
    if($img!="")
    {
        foreach($_FILES as $key=>$value)
        {
            $_SESSION['info'][$key]=$value;
        }
        extract($_SESSION['info']);
        $session_img= $image['name'];
        $allowd_extension=array('jpg','png','jpeg');
        $file_extension=pathinfo($session_img,PATHINFO_EXTENSION);
        if(! in_array($file_extension,$allowd_extension))
        {
            echo"<script>alert('Invalid Image Format.');</script>";
        }
        else
        {
            $filename=rand().time().".".$file_extension;
            $move=move_uploaded_file($_FILES['image']['tmp_name'],"uploads/".$filename);
            if($move)
            {
                $sql="INSERT INTO `users`(`name`,`email`,`phone_no`,`dob`,`father_name`,`mother_name`,`gender`,`highest_qualification`,`address`,`image`)VALUES('$name','$email','$phone_no','$dob','$father_name','$mother_name','$gender','$education','$address','$filename')";
                $ins=mysqli_query($conn,$sql);
                if($ins)
                {
                    unset($_SESSION['info']);
                    echo"<script>alert('Data Inserted Successfully.')</script>";
                }
            }
        }
    }
}
?>