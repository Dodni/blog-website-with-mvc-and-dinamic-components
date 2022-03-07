<h1 style="margin: 20px;">Ez az admin blogok view-ja.</h1>
<?php 
//$blogok_model = new Blogok_Model(); $blogok_model -> delete($b['id']);
?>

  <div class="row">
    <?php foreach ($viewData['blog'] as $b) { ?>
                <div class="col-12 col-lg-4 d-flex justify-content-center">
                    
                    <div class="card text-white bg-dark mt-5" style="width: 22rem;">
                    
                        <div class="card-black" style="padding: 5px;">
                          <!-- Kep ami a blogok/$id-re mutat -->
                          <p><a href="<?php echo SITE_ROOT ?>blog/<?php echo $b['id']; ?>">
                          <img src="..\images\github-logo.png" alt="GitHub" width="50" height="50" ></a></p>
                          <div class="card">
                          <h1><a class="hir" style="color:black" href="<?php echo SITE_ROOT ?>blog/<?php echo $b['id']; ?>"><?php echo $b['cim']; ?></a></h1></br>
                          
                          </div>
                          <!-- Kep ami a blogok/$id-re mutat-->
                          <p class="detail"><?php echo $b['rovidleiras']; ?> - <?php echo $b['datum']; ?></p>
        
                          <div>
                            <!-- Ez lesz az edit button -->
                            <!-- A controllernek vissza kell adni OPEN EDIT CONTROLLER -->
                            <form action="<?php echo SITE_ROOT ?>edit/<?php echo $b['id']?>" method="POST">
                            <button type="submit" name="id" value="<?php echo $b['id']?>" class="btn btn-success">Edit</button> </br>
                            </form>
    </br>
                            <!-- Ez lesz az delete button -->
                            <form action="<?php echo SITE_ROOT ?>delete/<?php echo $b['id']?>" method="POST">
                            <button type="submit" name="id" value="<?php echo $b['id']?>" class="btn btn-danger">Delete</button>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            <?php }?>
        </div>
        </br>

        
    



