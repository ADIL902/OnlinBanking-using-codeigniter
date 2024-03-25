<?php
$this->load->view('nav');
?>
<div class="row">
    <hr>
    <center><h1>fundtransfer here!<h1>
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
 Account Number to Transfer the Amount
<input type="text" name="acnot" class="form-control" placeholder="Enter transfer Acc Number"><br>
 Amount to Transfer
 <input type="text" name="at" class="form-control" placeholder="Enter amount to transfer"><br>
<button type="submit" class="btn btn-primary" name="submit" value="Fund transfer">Fund Transfer</button

</div>
</div>
</form>