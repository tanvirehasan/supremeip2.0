<?php 

include "inc/header.php";
include_once 'controller/settings/widget_sql.php';

$data = SelectData('settings','');
$row = $data->fetch_object();

?> 

<div class="container-fluid flex-grow-1 container-p-y"> 

    
    <div class="row">
        <div class="col-12 menubtn"><h3 class="bg-white p-3 text-uppercase text-primary"><i class="fas fa-cog"></i> Price</h3></div>
        
            <!-------Sub-Menu------>
            <div class="col-md-12 menu">
                <?php if(isset($messerror)){echo "<h3 class='text-success '>".$messerror."</h3>";}?>
                <div class="card p-3">
                    
                    <form method="POST" action="" enctype="multipart/form-data">
                        
                            <table class="table mb-3">
                                <tr>
                                    <td>Price Title:</td>
                                    <td> Font Size:
                                        <select name='ptsize' class="">                                            
                                            <option value="<?=widget_set('ptsize',1)?>"><?=widget_set('ptsize',1)?></option>
                                            <option value="h1">H1</option>
                                            <option value="h2">H2</option>
                                            <option value="h3">H3</option>
                                            <option value="h4">H4</option>
                                            <option value="h5">H5</option>
                                            <option value="h6">H6</option>                                         
                                        </select> 
                                    </td>
                                    <td>Font
                                        <select name='ptfont'>
                                            <option value="<?=widget_set('ptfont',1)?>"><?=widget_set('ptfont',1)?></option>
                                            <?=font_select()?>
                                        </select>
                                    </td>
                                      <td>Text case:
                                        <select name="ptcase" >
                                            <option value="<?=widget_set('ptcase',1);?>"><?=widget_set('ptcase',1);?></option>
                                            <option value="uppercase">uppercase</option>
                                            <option value="lowercase">lowercase</option>
                                            <option value="capitalize">capitalize</option>
                                            <option value="none">none</option>
                                        </select>
                                    </td>
                                    
                                    <td>Text Color: 
                                        <input type="color" name="ptcolor" value="<?=widget_set('ptcolor',1);?>" style='border:none;  padding:0;marin:0;' >
                                        
                                        
                                    </td>
                                </tr>
                                
                                <!--Price-->
                                <tr>
                                    <td>Price:</td>
                                    <td> Font Size:
                                        <select name='psize'>
                                            <option value="<?=widget_set('psize',1);?>"><?=widget_set('psize',1);?></option>
                                            <option value="h1">H1</option>
                                            <option value="h2">H2</option>
                                            <option value="h3">H3</option>
                                            <option value="h4">H4</option>
                                            <option value="h5">H5</option>
                                            <option value="h6">H6</option>
                                        </select> 
                                    </td>
                                    <td>Font
                                        <select name='pfont'>
                                            <option value="<?=widget_set('pfont',1)?>"><?=widget_set('pfont',1)?></option>
                                            <?=font_select()?>
                                        </select>
                                    </td>
                                      <td>Text case:
                                        <select name="pcase" >
                                            <option value="<?=widget_set('pcase',1);?>"><?=widget_set('pcase',1);?></option>
                                            <option value="uppercase">uppercase</option>
                                            <option value="lowercase">lowercase</option>
                                            <option value="capitalize">capitalize</option>
                                            <option value="none">none</option>
                                        </select>
                                    </td>                                    
                                    <td>Text Color:<input type="color" name="pcolor" value="<?=widget_set('pcolor',1);?>" style='padding:0;marin:0;' ></td>
                                </tr>
                                
                                <!--Price Description-->
                                <tr>
                                    <td>Price Description:</td>
                                    <td> Font Size: 
                                        <select name='pdsize'>
                                            <option value="<?=widget_set('pdsize',1);?>"><?=widget_set('pdsize',1);?></option>
                                            <option value="fs-1">fs1</option>
                                            <option value="fs-2">fs2</option>
                                            <option value="fs-3">fs3</option>
                                            <option value="fs-4">fs4</option>
                                            <option value="fs-5">fs5</option>
                                            <option value="fs-6">fs6</option>
                                        </select>
                                    
                                    
                                    </td>
                                    <td>Font
                                        <select name='pdfont'>
                                            <option value="<?=widget_set('pdfont',1)?>"><?=widget_set('pdfont',1)?></option>
                                            <?=font_select()?>
                                        </select>
                                    </td>
                                      <td>Text case:
                                        <select name="pdcase" >
                                            <option value="<?=widget_set('pdcase',1);?>"><?=widget_set('pdcase',1);?></option>
                                            <option value="uppercase">uppercase</option>
                                            <option value="lowercase">lowercase</option>
                                            <option value="capitalize">capitalize</option>
                                            <option value="none">none</option>
                                        </select>
                                    </td>
                                    
                                    <td>Text Color:
                                        <input type="color" name="pdcolor" class="" value="<?=widget_set('pdcolor',1);?>" style='border:none; padding:0; marin:0;' > 
                                    </td>
                                </tr>                                                             
                                
                                <!--Section-->
                                <tr>
                                    <td>Section BG: 
                                        <input type="color" name="Section_bg" class="" value="<?=widget_set('Section_bg',1);?>" style='border:none; padding:0; marin:0;' > 
                                    </td>

                                    
                                    <td>Border
                                        <input type="text"  name="border" value="<?=widget_set('border',1);?>" >
                                    </td>
                                    
                                    <td>Padding
                                        <input type="text"  name="padding" value="<?=widget_set('padding',1);?>" >
                                    </td>
                                    
                                      <td>odd 
                                        <input type="color" name="odd"  value="<?=widget_set('odd',1);?>" style='border:none;  padding:0;marin:0;' >
                                        
                                    </td>
                                    
                                    <td>even 
                                        <input name="even"  type="color" value="<?=widget_set('even',1);?>" style=' border:none;  padding:0;marin:0;' >
                                        
                                    </td>
                                    
                                    
                                </tr>
                                
                            </table>
                            
                            <input type="hidden"  name="wsid" value="1">
                            
                            <div class=" m-0 my-3"><button type="submit" name="price_design" class="btn btn-primary">Update</button></div> 
                    </form> 
                </div> 
            </div>
            
            
</div>
<!-- price end  -->




    
    <div class="row">
        <div class="col-12 menubtn"><h3 class="bg-white p-3 text-uppercase text-primary"><i class="fas fa-cog"></i> Flowchart</h3></div>
        
            <!-------Sub-Menu------>
            <div class="col-md-12 menu">
                <?php if(isset($messerror)){echo "<h3 class='text-success '>".$messerror."</h3>";}?>
                <div class="card p-3">
                    
                    <form method="POST" action="" enctype="multipart/form-data">
                        
                            <table class="mb-3 table " >
                                <tr>
                                    <td>Process Title:</td>
                                    <td> Font Size:
                                        <select name='ptsize'>
                                            <option value="<?=widget_set('ptsize',2)?>"><?=widget_set('ptsize',2)?></option>
                                            <option value="h1">H1</option>
                                            <option value="h2">H2</option>
                                            <option value="h3">H3</option>
                                            <option value="h4">H4</option>
                                            <option value="h5">H5</option>
                                            <option value="h6">H6</option>
                                        </select> 
                                    </td>
                                    <td>Font
                                        <select name='ptfont'>
                                            <option value="<?=widget_set('ptfont',2)?>"><?=widget_set('ptfont',2)?></option>
                                            <?=font_select()?>
                                        </select>
                                    </td>
                                      <td>Text case:
                                        <select name="ptcase" >
                                            <option value="<?=widget_set('ptcase',2);?>"><?=widget_set('ptcase',2);?></option>
                                            <option value="uppercase">uppercase</option>
                                            <option value="lowercase">lowercase</option>
                                            <option value="capitalize">capitalize</option>
                                            <option value="none">none</option>
                                        </select>
                                    </td>
                                    
                                    <td>Text Color:
                                        <input type="color" name="ptcolor" value="<?=widget_set('ptcolor',2);?>" style='height:25px; border:none;  padding:0;marin:0;' >
                                        
                                    </td>
                                </tr>
                                
                                <!--Price-->
                                <tr>
                                    <td>Flowchart Title:</td>
                                    <td> Font Size:
                                        <select name='psize'>
                                            <option value="<?=widget_set('psize',2);?>"><?=widget_set('psize',2);?></option>
                                            <option value="h1">H1</option>
                                            <option value="h2">H2</option>
                                            <option value="h3">H3</option>
                                            <option value="h4">H4</option>
                                            <option value="h5">H5</option>
                                            <option value="h6">H6</option>
                                        </select> 
                                    </td>
                                    <td>Font
                                        <select name='pfont'>
                                            <option value="<?=widget_set('pfont',2)?>"><?=widget_set('pfont',2)?></option>
                                            <?=font_select()?>
                                        </select>
                                    </td>
                                      <td>Text case:
                                        <select name="pcase" >
                                            <option value="<?=widget_set('pcase',2);?>"><?=widget_set('pcase',2);?></option>
                                            <option value="uppercase">uppercase</option>
                                            <option value="lowercase">lowercase</option>
                                            <option value="capitalize">capitalize</option>
                                            <option value="none">none</option>
                                        </select>
                                    </td>
                                    
                                    <td>Text Color:
                                        <input type="color" name="pcolor" value="<?=widget_set('pcolor',2);?>" style='height:25px; border:none;  padding:0;marin:0;' >
                                        
                                    </td>
                                </tr>
                                
                                <!--Price Description-->
                                <tr>
                                    <td>Description:</td>
                                    <td> Font Size: 
                                        <select name='pdsize'>
                                            <option value="<?=widget_set('pdsize',2);?>"><?=widget_set('pdsize',2);?></option>
                                            <option value="fs-1">fs1</option>
                                            <option value="fs-2">fs2</option>
                                            <option value="fs-3">fs3</option>
                                            <option value="fs-4">fs4</option>
                                            <option value="fs-5">fs5</option>
                                            <option value="fs-6">fs6</option>
                                        </select>
                                    
                                    
                                    </td>
                                    <td>Font
                                        <select name='pdfont'>
                                            <option value="<?=widget_set('pdfont',2)?>"><?=widget_set('pdfont',2)?></option>
                                            <?=font_select()?>
                                        </select>
                                    </td>
                                      <td>Text case:
                                        <select name="pdcase" >
                                            <option value="<?=widget_set('pdcase',2);?>"><?=widget_set('pdcase',2);?></option>
                                            <option value="uppercase">uppercase</option>
                                            <option value="lowercase">lowercase</option>
                                            <option value="capitalize">capitalize</option>
                                            <option value="none">none</option>
                                        </select>
                                    </td>
                                    
                                    <td>Text Color:
                                        <input type="color" name="pdcolor"  value="<?=widget_set('pdcolor',2);?>" style='height:25px; border:none;  padding:0;marin:0;' >
                                        
                                    </td>
                                </tr>
                                
                                 <!--Section-->
                                <tr>
                                    <td>Section BG:
                                        <input type="color" name="Section_bg" value="<?=widget_set('Section_bg',2);?>" style='height:25px; border:none;  padding:0;marin:0;' >
                                        
                                    </td>
                                    
                                    <td>stage BG:
                                        <input type="color" name="stage_bg" value="<?=widget_set('stage_bg',2);?>" style='height:25px; border:none;  padding:0;marin:0;' >
                                        
                                    </td>
                                    
                                    <td>stage padding:
                                        <input type="text" name="stage_bg_padding" value="<?=widget_set('stage_bg_padding',2);?>" >
                                    </td>
                                    
                                    <td>Border
                                        <input type="text"  name="border" value="<?=widget_set('border',2);?>" >
                                    </td>
                                    
                                    <td>Padding
                                        <input type="text"  name="padding" value="<?=widget_set('padding',2);?>" >
                                    </td>
                                </tr>
                                
                                
                                
                            </table>
                            
                  
                            <input type="hidden"  name="wsid" value="2">
                            <div class=" m-0 my-3"><button type="submit" name="price_design" class="btn btn-primary">Update</button></div> 
                    </form> 
                </div> 
            </div>
            
            
</div>
<!-- Flowchart end  -->



    
    <div class="row">
        <div class="col-12 menubtn"><h3 class="bg-white p-3 text-uppercase text-primary"><i class="fas fa-cog"></i> FAQ</h3></div>
        
            <!-------FAQ----->
            <div class="col-md-12 menu">
                <?php if(isset($messerror)){echo "<h3 class='text-success '>".$messerror."</h3>";}?>
                <div class="card p-3">
                    
                    <form method="POST" action="" enctype="multipart/form-data">
                        
                            <table class="mb-3 table ">
                                <tr>
                                    <td>FAQ Title:</td>
                                    <td> Font Size:
                                        <select name='ptsize'>
                                            <option value="<?=widget_set('ptsize',3)?>"><?=widget_set('ptsize',3)?></option>
                                            <option value="fs-1">fs1</option>
                                            <option value="fs-2">fs2</option>
                                            <option value="fs-3">fs3</option>
                                            <option value="fs-4">fs4</option>
                                            <option value="fs-5">fs5</option>
                                            <option value="fs-6">fs6</option>
                                        </select> 
                                    </td>
                                    <td>Font
                                        <select name='ptfont'>
                                            <option value="<?=widget_set('ptfont',3)?>"><?=widget_set('ptfont',3)?></option>
                                            <?=font_select()?>
                                        </select>
                                    </td>
                                      <td>Text case:
                                        <select name="ptcase" >
                                            <option value="<?=widget_set('ptcase',3);?>"><?=widget_set('ptcase',3);?></option>
                                            <option value="uppercase">uppercase</option>
                                            <option value="lowercase">lowercase</option>
                                            <option value="capitalize">capitalize</option>
                                            <option value="none">none</option>
                                        </select>
                                    </td>
                                    
                                    <td>Text Color:
                                        <input type="color" name="ptcolor" value="<?=widget_set('ptcolor',3);?>" style='height:25px; border:none;  padding:0;marin:0;' >
                                        
                                    </td>
                                </tr>
                                
                                <!--FAQ-->
                                <input type="hidden"  name="psize" value="null">
                                <input type="hidden"  name="pfont" value="null">
                                <input type="hidden"  name="pcase" value="null">
                                <input type="hidden"  name="color" value="null">
                                
                                <!--FAQ Description-->
                                <tr>
                                    <td>Description:</td>
                                    <td> Font Size: 
                                        <select name='pdsize'>
                                            <option value="<?=widget_set('pdsize',3);?>"><?=widget_set('pdsize',3);?></option>
                                            <option value="fs-1">fs1</option>
                                            <option value="fs-2">fs2</option>
                                            <option value="fs-3">fs3</option>
                                            <option value="fs-4">fs4</option>
                                            <option value="fs-5">fs5</option>
                                            <option value="fs-6">fs6</option>
                                        </select>
                                    
                                    
                                    </td>
                                    <td>Font
                                        <select name='pdfont'>
                                            <option value="<?=widget_set('pdfont',3)?>"><?=widget_set('pdfont',3)?></option>
                                            <?=font_select()?>
                                        </select>
                                    </td>
                                      <td>Text case:
                                        <select name="pdcase" >
                                            <option value="<?=widget_set('pdcase',3);?>"><?=widget_set('pdcase',3);?></option>
                                            <option value="uppercase">uppercase</option>
                                            <option value="lowercase">lowercase</option>
                                            <option value="capitalize">capitalize</option>
                                            <option value="none">none</option>
                                        </select>
                                    </td>
                                    
                                    <td>Text Color:
                                        <input type="color"  name="pdcolor" value="<?=widget_set('pdcolor',3);?>" style='height:25px; border:none;  padding:0;marin:0;' >
                                        
                                    </td>
                                </tr>
                                
                                <!--Section-->
                                <tr>
                                    <td>Section BG:
                                        <input name="Section_bg" type="color" value="<?=widget_set('Section_bg',3);?>" style='border:none;  padding:0;marin:0;' >
                                        
                                    </td>
                                    
                                    <td>Border
                                        <input type="text"  name="border" value="<?=widget_set('border',3);?>" >
                                    </td>
                                    
                                    <td>Padding
                                        <input type="text"  name="padding" value="<?=widget_set('padding',3);?>" >
                                    </td>
                                </tr>
                                
                                
                                
                                
                            </table>
                            
                  
                            <input type="hidden"  name="wsid" value="3">
                            <div class=" m-0 my-3"><button type="submit" name="price_design" class="btn btn-primary">Update</button></div> 
                    </form> 
                </div> 
            </div>
            
            
</div>
<!-- menu setting end  -->



</div>









<?php include 'inc/footer.php';?>