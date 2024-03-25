<?php
$this->load->view('nav');
?>
    <div class="row">
        
        <center><h2>Pin Change Here!</h2>
        <hr>
        <h3>
            <?php
            echo $msg;
            ?>
        </h3>
        </center>
        <hr>
        <div class="col-md-4"></div>
        
        <div class="col-md-4" style="border:2px solid gray;padding: 10px;">
                    <form>
 Account Number
<input type="text" name="ac" class="form-control" placeholder="Enter Account Number"><br>
 Old Pin Number
<input type="text" name="op" class="form-control" placeholder="Enter Old Pin Number"><br>
 New Pin Number
<input type="text" name="np" class="form-control" placeholder="Enter New Pin Number"><br>
 
<button type="submit" class="btn btn-primary" name="submit" value="change">Change Pin</button


        </div>
</div> 
</form>