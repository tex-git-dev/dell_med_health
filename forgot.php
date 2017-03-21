<?php
include("db.php");
include("mail.php");
if ($_POST['call'] == 'PForget') {
   
    $email = $_POST['email'];
    $c1 = "select * from users where Email='".$email."'";
    $Crun=mysqli_query($dbcon,$c1);
     $row0 = $Crun->fetch_object();

    if ($Crun->num_rows != 0) {
        $Fname= $row0->Fname;
        $Lname= $row0->Lname;
        $Pass= $row0->Pass;
        $email_encoded = rtrim(strtr(base64_encode($email), '+/', '-_'), '=');
        $urls = pathUrl().'/?eid='.$email_encoded;
        $msg ="Hi ".$Fname." ".$Lname.",<br><br>";
        $msg .="Please click below link to reset your password:<br><br>";
        $msg .="<a href='".$urls."'>".$urls."</a><br><br>";
        $msg .="Thanks,<br>Dell Healthcare";
        SendMail($email, $Fname.' '.$Lname,'Reset your password',$msg);
    }else{
        echo 0;
    }
}else if ($_POST['call'] == 'PReset') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $c3 = "UPDATE users SET Pass='".$password."' WHERE Email='".$email."'";
    $Crun3=mysqli_query($dbcon,$c3);
    echo $Crun3;
    
}



function pathUrl($dir = __DIR__){
    $root = "";
    $dir = str_replace('\\', '/', realpath($dir));
    $root .= !empty($_SERVER['HTTPS']) ? 'https' : 'http';
    $root .= '://' . $_SERVER['HTTP_HOST'];
    if(!empty($_SERVER['CONTEXT_PREFIX'])) {
        $root .= $_SERVER['CONTEXT_PREFIX'];
        $root .= substr($dir, strlen($_SERVER[ 'CONTEXT_DOCUMENT_ROOT' ]));
    } else {
        $root .= substr($dir, strlen($_SERVER[ 'DOCUMENT_ROOT' ]));
    }
    $root .= '/';
    return $root;
}
    // echo isLoginSessionExpired();
?>