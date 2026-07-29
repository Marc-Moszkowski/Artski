<?php
switch (@$_GET['do'])
 {

 case "send":

      $fname = $_POST['fname'];
      $lname = $_POST['lname'];
      $femail = $_POST['femail'];
      $f2email = $_POST['f2email'];
      $saddy = $_POST['saddy'];
      $scity = $_POST['scity'];
      $szip = $_POST['szip'];
      $fphone1 = $_POST['fphone1'];

      $mname = $_POST['mname'];
      $sapt = $_POST['sapt'];
      $sstate = $_POST['sstate'];
      $scountry = $_POST['scountry'];
      $fphone2 = $_POST['fphone2'];
      $fphone3 = $_POST['fphone3'];
      $fsendmail = $_POST['fsendmail'];
      $secretinfo = $_POST['info'];

  

 
    if ($secretinfo == "")
    {
       $myemail = "deepgulf@deepgulf.net";
     
       $emess.= "Name: ".$lname."\n";
       $emess.= "Email: ".$femail."\n";
       $emess.= "Comments: ".$fsendmail;
       $ehead = "From: ".$femail."\r\n";
       $subj = "An Email from ".$fname." ".$mname." ".$lname."!";
       $mailsend=mail("$myemail","$subj","$emess","$ehead");
       $message = "Email was sent.";
    }
 
       unset($_GET['do']);
       header("Location: confirm.html");
     break;
 
 default: break;
 }
 

?>


<html>
<body>
<form action="email_form.php?do=send" method="POST">


<p>Check and send:</p>
<?php
   if ($message) echo '<p style="color:red;">'.$message.'</p>';
?>
   <table border="0" width="500">
     <tr><td align="right">* Name: </td>
         <td><input type="text" name="fname" size="30" value="<?php echo @$fname ?>"></td></tr>
    
   </table>
<p>
   <table border="0" width="500">
     <tr><td align="right">* Email: </td>
         <td><input type="text" name="femail" size="30" value="<?php echo @$femail ?>"></td></tr>
   

   </table>
<p>
   <table border="0" width="500"><tr><td>
     Comments:<br />
     <TEXTAREA name="fsendmail" ROWS="6" COLS="60"><?php if($fsendmail) echo $fsendmail; ?></TEXTAREA>
     </td></tr>
     <tr><td align="right"><input type="submit" value="Confirm and send now">



     </td></tr>
   </table>
   </form>
</body>
</html>