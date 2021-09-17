
 
<div class="container">
        <div class="row">
                <div class="col-lg-8">
                <div class="card m-3">
                <div class="card-header ">
                        <h3>  New Client Appointment</h3>
                </div>
                <div class="table-responsive">
                <!-- /.card-header -->
                <div class="card-body">
<div class="container"></div>
                <form action="Barber.php?PageName=AddAppointment" method="post" class="">
                <div class="row ">
                            <div class="col-lg-12 col-md-6  form-group">
                                <?php
                                if (count($errors) > 0) {
                                ?>
                                    <div class="alert alert-danger text-center p-2">
                                        <?php
                                        foreach ($errors as $showerror) {
                                            echo $showerror;
                                        }
                                        ?>
                                    </div>
                                <?php
                                }
                                ?>

<?php
                                if (isset($success['success'])) {
                                ?>
                                    <div class="alert alert-success text-center p-2">
                                        <?php
                                        echo $success['success'];
                                        ?>
                                    </div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
<div class="row">
  
<div class="col-lg-1">
    </div>
    
    <div class="col-lg-3">
        <label for=""> Client Id</label>
    </div>
    <div class="col-lg-8  form-group">
        <input type="text" name="clientid" value='<?php echo $_GET["clientId"]?>'   class="form-control" disabled>
    </div>

    
    <div class="col-lg-1">
    </div>
    
    <div class="col-lg-3">
        <label for=""> Appointment Date</label>
    </div>
    <div class="col-lg-8  form-group">
        <input type="date" name="appointmentDate" id="appointmentDate"   class="form-control" required>
    </div>
   
    <div class="col-lg-1">
       </div>
    <div class="col-lg-3">
        <label for=""> Appointment Time</label>
    </div>
    <div class="col-lg-8  form-group">
    <input type="time" name="appointmentTime" id="appointmentTime"   class="form-control" required>
    </div>

    <div class="col-lg-1">
       </div>
    <div class="col-lg-3">
        <label for="">Hair Cut</label>
    </div>
    <div class="col-lg-6  form-group">
        <select name="clientHaircut" id="clientHaircut" class="form-control">
<option value="Regular Hair Cut">Regular Hair Cut</option>
<option value="Full Scissor Cut">Full Scissor Cut</option>
<option value="Beard Shave">Beard Shave</option>
<option value="Beared Trim">Beared Trim</option>
<option value="Shape Up">Shape Up</option>
<option value="Hot Tool Shave">Hot Tool Shave</option>
        </select>
   
    </div>

</div>

<div class="row">
<div class="col-lg-4">
       </div>
    <div class="col-lg-3 col-md-6 form-group  text-center ">
        <input class="form-control btn btn-dark " type="submit"  name="submitClientForm" value="Submit" required>
    </div>
    <div class="col-lg-3 col-md-6 form-group  text-center ">
        <input class="form-control btn btn-outline-danger " type="reset" value="Reset" required>
    </div>
</div>

</form>
                </div>

                </div>
                </div>
                <!-- /.card-body -->
        </div>
       


                </div>
        </div>
</div>
