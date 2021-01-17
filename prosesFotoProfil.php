<?php
if(is_array($_FILES)) {
if(is_uploaded_file($_FILES['userpicture']['tmp_name'])) {
$sourcePath = $_FILES['userpicture']['tmp_name'];
$targetPath = "images/profil/".$_FILES['userpicture']['name'];
if(move_uploaded_file($sourcePath,$targetPath)) {
?>
<img id="imgprofil" src="<?php echo $targetPath; ?>" class="rounded img-fluid img-thumbnail" alt="kosong">
<?php
}
}
}
?>