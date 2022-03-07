        <div class="row">
            <?php foreach ($viewData['blog'] as $b) { ?>
                <div class="col-12 col-lg-4 d-flex justify-content-center">
                    
                    <div class="card text-white bg-dark mt-5" style="width: 22rem;">
                    
                        <div class="card-black" style="padding: 5px;">
                            <p><a href="<?php echo SITE_ROOT ?>blog/<?php echo $b['id']; ?>">
                            <img src="images\github-logo.png" alt="GitHub" width="30" height="30" ></a></p>
                            <div class="card">
                                <h1>
                            <a class="" style="color: black;" href="<?php echo SITE_ROOT ?>blog/<?php echo $b['id']; ?>"><?php echo $b['cim']; ?></a>
                            </h1></div>
                            
                            <p class="detail"><?php echo $b['rovidleiras']; ?> - <?php echo $b['datum']; ?></p>
                        </div>
                    </div>
                </div>
            <?php }?>
        </div>
            </br>


