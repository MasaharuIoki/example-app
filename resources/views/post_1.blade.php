<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>post_1.blade.php</title>
</head>
<body>
 
<h1>POST受信</h1>
<?php if(!isset($_POST['choice'])){ ?>

 
 選択されていません。<br/>
 
<?php }else{ ?>

 <strong>$_POST['choice']の構造を確認</strong><br/>
 <pre>
 <?php var_dump($_POST['choice']); ?>
 </pre>
 <pre>
 <?php var_dump($_POST['choice2']); ?>
 </pre>
 <pre>
 <?php var_dump($_POST['choice3']); ?>
 </pre>
 <pre>
 <?php var_dump($_POST['example3']); ?>
 </pre>
 <pre>
 <?php var_dump($_POST['choice4']); ?>
 </pre>
 <pre>
 <?php var_dump($_POST['example4']); ?>
 </pre>
 <pre>
 <?php var_dump($_POST['choice5']); ?>
 </pre>
 <pre>
 <?php var_dump($_POST['choice6']); ?>
 </pre>
 <pre>
 <?php var_dump($_POST['example1']); ?>
 </pre>
 <pre>
 <?php var_dump($_POST['choice7']); ?>
 </pre>
 <pre>
 <?php var_dump($_POST['example2']); ?>
 </pre>

 <?php } ?>
 <form id="form1" name="form1" method="post" action="post_1.php">
 <input type="text" name="text" id="textField" />
 <input type="submit" value="書き込む" />
<?php
$filename = "write2.txt";
$string = $_POST;
var_dump( file_put_contents($filename, $string, FILE_APPEND | LOCK_EX));

?>
</body>
</html>