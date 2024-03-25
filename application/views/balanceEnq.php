<?php
$this->load->view('nav');
?>

<div class="row">
        <center><h2>Balance EQ</h2>
        <hr>
        <h3>
                <?php
                echo $msg;
                ?>
        </h3>
        </center>
        <hr>
        <div class="col-md-4"></div>
        
        <div class="col-md-4" style="border:2px solid gray; padding:10px">
<form>
 Account Number
<input type="text" name="ac" class="form-control" placeholder="Enter Account Number"><br>
Pin Number
<input type="text" name="pi" class="form-control" placeholder="Enter Pin Number"><br>
 
<button type="submit" class="btn btn-primary" name="submit" value="Check">Check</button>
</form>

        </div>
</div>
