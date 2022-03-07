<?php
$beallitasokmodell = new Beallitasok_Model;
$retData = $beallitasokmodell -> getChecked();
// var_dump($retData);
// var_dump($retData['beallitasok']['0']['name']);
// echo $retData['beallitasok']['0']['name'];
if ($retData['beallitasok']['0']['name'] == 'gabor') {
    //echo "Gábor vagyok, az apád";
    $szam = 2;
} else {
    //echo "Én vagyok Donát az apád";
    $szam = 1;
}

?>
<h1 style="margin: 20px;">Ez az admin almenüje a beállítások.</h1>
<div class="d-flex justify-content-center">
    
    <form action="<?php echo SITE_ROOT?>bead/" method="post">
        <label >Válassz e-mailt a kapcsolat beállításához:</label> </br>
        <input type="radio" id="1" name="ertek" value="1" <?php if($szam==1) echo "checked" ?> >
        <label for="">feherdonat99@gmail.com</label> </br>
        <input type="radio" id="2" name="ertek" value="2" <?php if($szam==2)echo "checked" ?> >
        <label for="">gabor.orban@raccoonlab.hu</label> </br> </br>
        <button type="submit" value="update" class="btn btn-primary">SUBMIT</button>
    </form>   
</div>
</br>

