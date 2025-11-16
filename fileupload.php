<?php
session_start();

//echo php_ini_loaded_file();
?>
<!DOCTYPE html>
<html>
<head>
  <title>PHP File Upload</title>
    <link rel="stylesheet" href="fileupload.css">

</head>
<body>
  <?php
    if (isset($_SESSION['message']) && $_SESSION['message'])
    {
      echo '<p class="notification">'. $_SESSION['message'] . '</p>';
      unset($_SESSION['message']);
    }
  ?>
  <form method="POST" action="upload.php" enctype="multipart/form-data">
    <div class="upload-wrapper">
      <span class="file-name">Choose a file...</span>
      <label for="file-upload">Browse<input type="file" id="file-upload" name="uploadedFile"></label>
    </div>
    <input type="submit" name="uploadBtn" value="Upload" />
  </form>
</body>
</html>