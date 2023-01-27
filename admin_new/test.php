<?php
include "inc/header.php";

//header
$file = "inc/header.php"; // file to edit
$html = file_get_contents($file); //read the file contents
$header = htmlentities($html, ENT_QUOTES);

// footer
$files = "inc/footer.php"; // file to edit
$htmls = file_get_contents($files); //read the file contents
$footer = htmlentities($htmls, ENT_QUOTES);



?>

<script>
  function encode_content() {
    var content = document.getElementById('header_file_content').value;
    document.getElementById('header_file_content').value = encodeURIComponent(content);
  }
</script>

<script>
  function encode_content() {
    var content = document.getElementById('footer_file_content').value;
    document.getElementById('footer_file_content').value = encodeURIComponent(content);
  }
</script>

<div class="container-fluid flex-grow-1 container-p-y">

  <form name="edit_form" method="post" action="" onsubmit="encode_content()">
    <textarea name="header_file_content" id="header_file_content" style="width:100%;" rows="20"><?php echo $header; ?></textarea>
    <input type="submit" name="headerpagesave" value="Save this file">
  </form>

  <form name="edit_form" class="mt-5" method="post" action="" onsubmit="encode_content()">
    <textarea name="footer_file_content" id="footer_file_content" style="width:100%;" rows="20"><?php echo $footer; ?></textarea>
    <input type="submit" name="footerpagesave" value="Save this file">
  </form>


  <?php
  if (isset($_POST['footerpagesave'])) {
    $footer_file_content = urldecode($_POST['footer_file_content']);
    file_put_contents('inc/header.php', html_entity_decode($footer_file_content)); //save the file
  }

  if (isset($_POST['headerpagesave'])) {
    $header_file_content = urldecode($_POST['header_file_content']);
    file_put_contents('inc/header.php', html_entity_decode($header_file_content)); //save the file
  }
  ?>



</div>
<?php include 'inc/footer.php'; ?>