
<?php

//color Update
if (isset($_POST['price_design'])) {

    $update = "UPDATE `widget_setting` SET 
        `ptsize`='{$_POST['ptsize']}',
        `ptfont`='{$_POST['ptfont']}',
        `ptcase`='{$_POST['ptcase']}',
        `ptcolor`='{$_POST['ptcolor']}',
        `psize`='{$_POST['psize']}',
        `pfont`='{$_POST['pfont']}',
        `pcase`='{$_POST['pcase']}',
        `pcolor`='{$_POST['pcolor']}',
        `pdsize`='{$_POST['pdsize']}',
        `pdfont`='{$_POST['pdfont']}',
        `pdcase`='{$_POST['pdcase']}',
        `pdcolor`='{$_POST['pdcolor']}',
        
        `Section_bg`='{$_POST['Section_bg']}',
        `border`='{$_POST['border']}',
        `padding`='{$_POST['padding']}',
        `odd`='{$_POST['odd']}',
        `even`='{$_POST['even']}',
        `stage_bg`='{$_POST['stage_bg']}',
        `stage_bg_padding`='{$_POST['stage_bg_padding']}'            
        
        where wsid='{$_POST['wsid']}'
    ";
  if (mysqli_query($conn, $update)==TRUE) {
        // $messerror =  "Success!";
  }
}

?>