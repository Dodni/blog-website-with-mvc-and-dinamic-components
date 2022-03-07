<?php 

?>
<h1 style="margin: 20px;">Ez az admin alpontja a felhasznalok view. </h1>
<div>
    <ul style="background-color: white;">
        <li style="background-color: white;">
            <h3 style="background-color: white;">Létrehozás:</h3>
            <form action="<?php SITE_ROOT?>regisztraciosikeres/" method="post">
                <label for="">Felhasználónév:</label> </br>
                <input type="text" name="bejelentkezes" id="bejelentkezes" required> </br>
                <label for="">Jelszó:</label> </br>
                <input type="password" name="jelszo" id="jelszo" required></br></br>
                <button type="submit" value="Regisztráció"class="btn btn-primary">Regisztrál</button>
            </form> </br>
        </li>
        <li>
            <h3>Felhasználó jelszavának módosítása:</h3>
            <form action="<?php SITE_ROOT?>modositassikeres/" method="post">
                <label for="">Felhasználónév:</label> </br>
                <input type="text" name="bejelentkezes" id="bejelentkezes" required> </br>
                <label for="">Új jelszó:</label> </br>
                <input type="password" name="jelszo" id="jelszo" required></br></br>
                <button type="submit" value="Módosítás"class="btn btn-success">Módosítás</button>
            </form> </br>
        </li>
        <li>
            <h3>Felhasználó törlése:</h3>
            <form action="<?php SITE_ROOT?>torlessikeres/" method="post">
                <label for="">Felhasználónév:</label> </br>
                <input type="text" name="bejelentkezes" id="bejelentkezes" required> </br></br>
                <button type="submit" value="Törlés"class="btn btn-danger">Törlés</button>
            </form>
        </li>
    </ul>
</div>