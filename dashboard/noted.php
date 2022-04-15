                     
 <!-- View User Request Code -->
 <?php
            $sql="SELECT * from adoptionrequest WHERE masterID='$ID' ORDER BY petID DESC";
            $query=$dbh->prepare($sql);
            $query->execute();
            $results=$query->fetchALL(PDO::FETCH_OBJ);
            $cnt=1;
            if($query->rowCount()>0)
            {
              foreach($results as $result)
            {
               ?>
            <div class="col-nd-4">
                <div class="card">
                  <div class="card-body">
                      <ul style="list-style:none;margin-left:-50px;"><br>
                      <li><h3 hidden class="card-title"><?php echo ($result->userID);?></h3></li>
                      <?php $user_id = $result->userID;

                      $sql1="SELECT * from register WHERE userID='$user_id'";
                      $query1=$dbh->prepare($sql1);
                      $query1->execute();
                      $userids=$query1->fetchALL(PDO::FETCH_OBJ);
                      $cnt1=1;
                      if($query1->rowCount()>0)
                      {
                        foreach($userids as $userid)
                      {
                        ?>
                      
                      <img <?php echo"<img src = '/developgetpet/web/images/$userid->Image'";?> alt="avatar" style="width:80px;height:80px;" class="rounded-circle img-responsive"><br><br>

                      <table border='0' width='480px' cellpadding='0' cellspacing='0' align='center'>
 
                      <table border='0' width='480px' cellpadding='0' cellspacing='0' align='center'>
                      <tr>
                          <td align='center'>Name:</td>
                          <td><input readonly style="width:300px;margin-bottom:-10px;" type='text' value="<?php echo ( $userid->userFirstname);?> <?php echo ($userid->userLastname);?><?php echo ($userid->orgName);?>"></td>
                      </tr>
                      <tr> <td>&nbsp;</td> </tr>
                      <tr>
                      <td align='center'>Address:</td>
                          <td><input readonly style="width:300px;margin-bottom:-10px;" type='text' value="<?php echo ( $userid->Address);?>"></td>
                      </tr>
                      <tr> <td>&nbsp;</td> </tr>
                      <tr>
                          <td align='center'>Email:</td>
                          <td><input readonly style="width:300px;margin-bottom:-10px;" type='text' value="<?php echo ( $userid->Email);?>""></td>
                      </tr>
                      <tr> <td>&nbsp;</td> </tr>
                      <tr>
                          <td align='center'>Contact No:</td>
                          <td><input readonly style="width:300px;margin-bottom:-10px;" type='text' value="<?php echo ( $userid->contactNo);?>""></td>
                      </tr>
                      <tr> <td>&nbsp;</td> </tr>
                      <tr>
                          <td align='center'>Message:</td>
                          <td><textarea disabled="yes" id="description" style="width:300px;margin-bottom:-10px;height:80px;background-color: #fff;resize: none;border-color:black;" type='text'><?php echo ( $result->requestMessage);?></textarea></td>
                      </tr>
                      <tr> <td>&nbsp;</td> </tr>
                      <table border='0' cellpadding='0' cellspacing='0' width='480px' align='center'>
                      </table>
                      </table>
                      
                      </table>
                      <li><h3 hidden class="card-title"><?php echo ($result->petID);?></h3></li>
                      <?php $pet_id = $result->petID;

                      $sql2="SELECT * from postforadoption WHERE petID='$pet_id'";
                      $query2=$dbh->prepare($sql2);
                      $query2->execute();
                      $petids=$query2->fetchALL(PDO::FETCH_OBJ);
                      $cnt2=1;
                      if($query2->rowCount()>0)
                      {
                        foreach($petids as $petid)
                      {
                        ?>
                      <img <?php echo"<img src = '/developgetpet/web/images/$petid->petPicture'";?> alt="avatar" style="width:80px;height:80px;" class="rounded-circle img-responsive"><br>
                       <table border='0' width='480px' cellpadding='0' cellspacing='0' align='center'>
 
                      <table border='0' width='480px' cellpadding='0' cellspacing='0' align='center'>
                      <tr>
                          <td align='center'>Pet Type:</td>
                          <td><input readonly style="width:300px;margin-bottom:-10px;" type='text' value="<?php echo ($petid->petType);?>"></td>
                      </tr>
                      <tr> <td>&nbsp;</td> </tr>
                      <tr>
                      <td align='center'>Pet Name:</td>
                          <td><input readonly style="width:300px;margin-bottom:-10px;" type='text' value="<?php echo ($petid->petName);?>"></td>
                      </tr>
                      <tr> <td>&nbsp;</td> </tr>
                      <tr>
                          <td align='center'>Message:</td>
                          <td><textarea disabled="yes" id="description" style="width:300px;margin-bottom:-10px;height:80px;background-color: #fff;resize: none;border-color:black;" type='text'><?php echo ( $petid->petDescription);?></textarea></td>
                      </tr>
                      <tr> <td>&nbsp;</td> </tr>
                      <tr>
                      <td align='center'>Request Date:</td>
                          <td><input readonly style="width:300px;margin-bottom:-10px;" type='text' value="<?php echo ($result->requestDate);?>"></td>
                      </tr>
                      <tr> <td>&nbsp;</td> </tr>
                      <table border='0' cellpadding='0' cellspacing='0' width='480px' align='center'>
                      </table>
                      </table>
                      
                      </table>
                      <?php $cnt2=$cnt2+1;}} ?>
                      <?php $cnt1=$cnt1+1;}} ?>
                      <div style="text-align: center" class="form-group">
                      <div class="col-md-6 offset-md-3">
                            <button name="profile" type="submit" type='submit' class="btn btn-round btn-success" style="background-color:#00cdc1;border:#00cdc1;width: 90px;height:37px;">Accept</button>
                            <button type='reset' class="btn btn-round btn-danger" name="Cancel" class="close" data-dismiss="modal" style="width:90px;height:37px;">Cancel</button>
                      </div>
                      </div>
                      </ul>
              </div>
            </div>
          </div>
          <br>
          <?php $cnt=$cnt+1;}} ?>
         <!-- //View User Request Code -->


         <!-- Modal Edit Post -->
 <div class="modal fade" id="EditPost" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold" style="margin-left:20px;">Edit Post</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="enableButton()">
          <span aria-hidden="true">&times;</span>
        </button>
        <script>
        function enableButton() {
            document.getElementById("Edit").disabled = false;
        }
      </script>
      </div>
      <div class="modal-body mx-3">
      <form method="post">
        
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input hidden type="text" id="charity_id2" name="charityID" required = "required" class="form-control">
				</div>

        <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Title<span class="required"></span></label>
        <div class="col-md-6 col-sm-6">
               <input type="text" class="form-control" id="charity_title2" name="Title" style="background-color:#fff;width:400px;" required="required" onkeypress="return /[a-z\s*]/i.test(event.key)"/>
        </div>
        </div>

        <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Description<span class="required"></span></label>
        <div class="col-md-6 col-sm-6">
        <textarea id="charity_description2" name="Description" style="width:400px;height:100px;padding-top:-5px;background-color: #fff;resize: none;font-size:16px;" onkeyup="edit()"></textarea>
        </div>
        </div>

        <script>
          function edit() {
          if(document.getElementById("charity_description2").value==="") { 
                    document.getElementById('Edit').disabled = true; 
                } else { 
                    document.getElementById('Edit').disabled = false;
                }
            }
        </script>

        <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Bank</label>
        <div class="col-md-6 col-sm-6">
               <input read only type="text" class="form-control" id="charity_bank2" name="Bank" style="background-color:#fff;width:400px;" required="required"/>
        </div>
        </div>

        <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Pin Number</label>
        <div class="col-md-6 col-sm-6">
               <input read only type="text" class="form-control" id="charity_pinnumber2" name="Pinnumber" style="background-color:#fff;width:400px;" required="required"/>
        </div>
        </div>

        <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Amount</label>
        <div class="col-md-6 col-sm-6">
               <input read only type="text" class="form-control" id="charity_amount2" name="Amount" style="background-color:#fff;width:400px;" required="required"/>
        </div>
        </div>
       
        <div class="ln_solid">
        <br>
        <div class="form-group" style="text-align: center">
        <div class="col-md-6 offset-md-3">
               <button id="Edit" name ="Edit" type='submit' class="btn btn-success" style="background-color:#00cdc1;border:#00cdc1;width:130px;height:40px;font-size:18px;">Update</button>
        </div>
        </div>
        </div>

        </form>
      </div>
    </div>
  </div>
</div>
<!-- //Modal Edit Post -->