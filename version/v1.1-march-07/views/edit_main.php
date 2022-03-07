
<?php
if ($viewData['getone'] != NULL) {
    //echo "nem nulla a blogos";
    foreach ($viewData['getone'] as $e) {
        //var_dump($e)?>  <?php
        //echo $e['id']?>  <?php
        //echo $e['rovidleiras'] ?> <?php
        //echo $e['datum']?> <?php
        //echo $e['hosszuleiras']?> <?php

        ?>
        <div class="container mt-5">
<h1>Ez az edit view</h1>
<form action="<?php echo SITE_ROOT ?>edited/<?php echo $e['id']?>" method="post">
    <input type="text" hidden value="<?php echo $e['id'] ?>" name="id"> </br>
    <label >Cím:</label> </br>
    <input type="text" value="<?php echo $e['cim'] ?>" name="cim"> </br>
    <label >Rövid leírás:</label> </br>
    <input type="text" value="<?php echo $e['rovidleiras'] ?>" name="rovidleiras"> </br>
    <label >Dátum:</label>    </br>
    <input type="text" value="<?php echo $e['datum'] ?>" name="datum"> </br>
    <label >Hosszú leírás:</label>   </br>
    <textarea type="text" value="<?php echo $e['hosszuleiras'] ?>" name="hosszuleiras"  cols="30" rows="10" size="100"><?php echo $e['hosszuleiras'] ?></textarea> </br> </br>
    <button type="submit" name="update" class="btn btn-success">Edit</button>
   
</form>  </br>
</div>
    <?php }
} else {
    //echo "nulla a blogos";
    foreach ($viewData['menu'] as $e) {
        //var_dump($e)?>  <?php
        //echo $e['id']?>  <?php
        //echo $e['rovidleiras'] ?> <?php
        //echo $e['datum']?> <?php
        //echo $e['hosszuleiras']?> <?php
        ?>
        <div class="container mt-5">
<h1 style="margin: 20px;">Ez az edit view</h1>
<form action="<?php echo SITE_ROOT ?>edited/<?php echo $e['url']?>" method="post">
    <input type="text" value="<?php echo $e['url'] ?>" name="url" hidden> </br>
    <label >Url:</label> </br>
    <input type="text" value="<?php echo $e['url'] ?>" name="url" disabled="disabled"> </br>
    <label >Név:</label> </br>
    <input type="text" value="<?php echo $e['nev'] ?>" name="nev"> </br>
    <label >Szülő:</label>    </br>
    <input type="text" value="<?php echo $e['szulo'] ?>" name="szulo"> </br>
    <label >Sorrend:</label>   </br>
    <input type="text" value="<?php echo $e['sorrend'] ?>" name="sorrend"> </br> </br>
    <!-- CK EDITOR RÉSZ-->
    <textarea type="text" value="" name="tartalom" id="tartalom"><?php echo $e['tartalom'] ?></textarea> </br>
    
                <script>
                    ClassicEditor
                        .create(document.querySelector('#tartalom'))
                        .catch(error => {
                            console.error(error)
                        });
                </script> </br>
    <button type="submit" name="updatemenu" class="btn btn-success">Edit</button>
   
</form>  </br>
</div>
<?php
    }
}
 ?>


<?php 

