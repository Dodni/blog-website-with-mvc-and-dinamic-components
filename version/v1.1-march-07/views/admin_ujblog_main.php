<h1 style="margin: 20px;">Ez az admin új blog view-ja.</h1>
<div class="container mt-5">
        <form action="<?= SITE_ROOT ?>ujblog" method="post">
            <input type="text" name="cim" id="cim" placeholder="Blog címe">
            <input type="text" name="rovidleiras" id="rovidleiras" placeholder="Rövid leírás" class="form-control my-3 bg-dark text-white" cols="30" rows="2">
            <input type="text" name="hosszuleiras" id="hosszuleiras" placeholder="Hosszú leírás" class="form-control my-3 bg-dark text-white" cols="30" rows="10">
            <input type="date" name="datum" id="datum" value="2022-02-27" min="2021-01-01" max="2023-12-31"> </br></br> 
            <button type="submit" value="Küldés" class="btn btn-primary">Blog létrehozása</button> </br></br>
        </form>
   </div>
