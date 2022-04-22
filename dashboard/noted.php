                     
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