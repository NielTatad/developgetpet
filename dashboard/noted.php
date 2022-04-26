<?php
                        $sql="SELECT * from postpet WHERE petStatus='Available' AND postStatus='Adoption' AND postStatus!='Deleted' ORDER BY petID DESC LIMIT 3";
                        $query=$dbh->prepare($sql);
                        $query->execute();
                        $results=$query->fetchALL(PDO::FETCH_OBJ);
                        $cnt=1;
                        if($query->rowCount()>0)
                        {
                          foreach($results as $result)
                        {
                           ?>
                                  <div class="col-md-4">
                                    <div class="card" style="border-radius:10px;border-width:2px;">                 
                                      <div class="card-body" style="box-shadow: 8px 8px 8px #888888;border-radius:10px;">
                                            <Img <?php echo"<img src = '/developgetpet/web/images/$result->petPicture'";?> class="rounded-circle img-responsive" alt="Post Images" style="height:180px;width:180px;">
                                            
                                            <h3 hidden class="card-title"><?php echo ($result->petID);?></h3>
                                            <h2 style="margin-right:5px;"><h2 class="card-title" style="font-style:bold;font-size:25px;font-family:Arial, Helvetica, sans-serif;text-transform: uppercase;"><?php echo ($result->petName);?></h2></h2>
                                            <h2 style="margin-right:5px;"><h2 class="card-title" style="font-size:15px;"><?php echo ($result->petSex);?> (<?php echo ($result->petBreed);?>)</h2></ul>
                                            <h2 style="margin-right:5px;"><h2 class="card-title" style="font-size:15px;"><?php echo ($result->petStatus);?></h2></h2>                                
                                            <h3 hidden class="card-title"><?php echo ($result->userID);?></h3>
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
                                            
                                            <label style="margin-top:10px;">Posted by: <img <?php echo"<img src = '/developgetpet/web/images/$userid->Image'";?> alt="avatar" style="width:25px;height:25px;" class="rounded-circle img-responsive"> <?php echo ( $userid->userFirstname);?> <?php echo ($userid->userLastname);?><?php echo ($userid->orgName);?></label><br>
                                            <?php $cnt1=$cnt1+1;}} ?>
                                            <label style=""><?php echo ($result->postDate);?></label><br>
                                            
                                    </div>
                                  </div><br>
                                </div>
                              <?php $cnt=$cnt+1;
                            }
                        } 
                        else
                        {
                          echo "There isn't any information displayed.";
                        }
                        ?>