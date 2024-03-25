<?php
$this->load->view('nav');
?>
<div class="row">
    <hr>
    <center><h1>Deposite here!<h1>
    <hr>
    <h3>
        <?php 
     echo $msg;
    ?>
    </h3>
    <hr>
    </center>
    <div class="col-md-4"></div>
    <div class="col-md-4" style="border:2px solid gray; padding:10px">
<form>
Account Number
<input type="text" name="ac" class="form-control" placeholder="Enter Account Number"><br>
Pin Number
<input type="text" name="pi" class="form-control" placeholder="Enter Pin Number"><br>
 Ammount to Deposite
<input type="text" name="ad" class="form-control" placeholder="Enter Ammount to Deposite"><br>
<button type="submit" class="btn btn-primary" name="submit" value="Deposite">Deposite</button
</form>
</div>
</div>