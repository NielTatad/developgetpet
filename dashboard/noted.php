<!-- page content -->
<div class="clearfix"></div>

<div class="row">
  <div class="col-md-12 col-sm-12">
    <div class="x_panel" style="border-radius:10px;border-width:2px;">
      <div class="x_title">
        <h2>Short-term care Report</h2>
        <ul class="nav navbar-right panel_toolbox">
      </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content" style="text-align:center;">
  
              <div class="row">
              <div class="col-sm-12">
              <div class="card-box table-responsive">
      
              <table class="table table-striped jambo_table bulk_action">
                        <thead>
                        <tr class="headings">
                        <th style="text-align:center" class="column-title">User ID</th>
                        <th style="text-align:center" class="column-title">Pet ID</th>
                        <th hidden style="text-align:center" class="column-title">User ID</th>
                        <th style="text-align:center" class="column-title">Pet Name</th>
                        <th style="text-align:center" class="column-title">Pet Type</th>
                        <th style="text-align:center" class="column-title">Pet Breed</th>
                        <th style="text-align:center" class="column-title">Pet Photo</th>
                        <th style="text-align:center" class="column-title">Post Status</th>
                        <th style="text-align:center" class="column-title">Pet Status</th>
                        </th>
                        <th class="bulk-actions" colspan="12">
                          <a class="antoo" style="color:#fff; font-weight:500;">Data to be Deleted (<span class="action-cnt"> </span>)</a>
                        </th>
                        </tr>
                        </thead>

                        <tbody>
                        <?php
                        $sql="SELECT * from postpet WHERE petStatus='Short-Term Care' AND postStatus='Short-Term Care' AND postStatus!='Deleted' ORDER BY petID DESC";
                        $query=$dbh->prepare($sql);
                        $query->execute();
                        $results=$query->fetchALL(PDO::FETCH_OBJ);
                        $cnt=1;
                        if($query->rowCount()>0)
                        {
                         foreach($results as $result)
                        {
                         ?>
                          <tr class="even pointer">
                            <td style="text-align:center" class=" "><?php echo htmlentities($result->userID);?></td>
                            <td style="text-align:center" class=" "><?php echo htmlentities($result->petID);?></td>
                            <td hidden style="text-align:center" class=" "><?php echo htmlentities($result->userID);?></td>
                            <td style="text-align:center" class=" "><?php echo htmlentities($result->petName);?></td>
                            <td style="text-align:center" class=" "><?php echo htmlentities($result->petType);?></td>
                            <td style="text-align:center" class=" "><?php echo htmlentities($result->petBreed);?></td>
                            <td style="text-align:center" class=" "><?php echo"<img src = '/developgetpet/web/images/$result->petPicture' style = height:80px; width: 80px;/>";?></td>
                            <td style="text-align:center" class=" "><?php echo htmlentities($result->postStatus);?></td>     
                            <td style="text-align:center" class=" "><?php echo htmlentities($result->petStatus);?></td>                                                         
                          </tr>
                        <?php $cnt=$cnt+1;}}?>
                     </tbody>
                </table>
              </div>
            </div>
          </div> 
        
      </div>
    </div>
  </div>
</div> 
<!-- //page content -->  

 <!-- page content -->
 <div class="clearfix"></div>

<div class="row">
  <div class="col-md-12 col-sm-12">
    <div class="x_panel" style="border-radius:10px;border-width:2px;">
      <div class="x_title">
        <h2>Fund-raising activities Report</h2>
        <ul class="nav navbar-right panel_toolbox">
      </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content" style="text-align:center;">
  
              <div class="row">
              <div class="col-sm-12">
              <div class="card-box table-responsive">
      
              <table class="table table-striped jambo_table bulk_action">
                        <thead>
                        <tr class="headings">
                        <th style="text-align:center" class="column-title">Charity ID</th>
                        <th style="text-align:center" class="column-title">User ID</th>
                        <th hidden style="text-align:center" class="column-title">User ID</th>
                        <th style="text-align:center" class="column-title">Organization Name</th>
                        <th style="text-align:center" class="column-title">Title</th>
                        <th style="text-align:center" class="column-title">Description</th>
                        <th style="text-align:center" class="column-title">Picture</th>
                        <th style="text-align:center" class="column-title">Needed Amount</th>
                        <th style="text-align:center" class="column-title">QR-Code</th>
                        <th style="text-align:center" class="column-title">Organization Website</th>
                        <th style="text-align:center" class="column-title">Post Date</th>
                        <th style="text-align:center" class="column-title">Post Status</th>
                        <th style="text-align:center" class="column-title">Charity Status</th>
                        </th>
                        <th class="bulk-actions" colspan="12">
                          <a class="antoo" style="color:#fff; font-weight:500;">Data to be Deleted (<span class="action-cnt"> </span>)</a>
                        </th>
                        </tr>
                        </thead>

                        <tbody>
                        <?php
                        $sql="SELECT * from charity WHERE charityStatus='Accepted' AND charityPoststatus='Fundraising' AND charityStatus!='Deleted' ORDER BY charityID DESC";
                        $query=$dbh->prepare($sql);
                        $query->execute();
                        $results=$query->fetchALL(PDO::FETCH_OBJ);
                        $cnt=1;
                        if($query->rowCount()>0)
                        {
                         foreach($results as $result)
                        {
                         ?>
                          <tr class="even pointer">
                            <td style="text-align:center" class=" "><?php echo htmlentities($result->charityID);?></td>
                            <td style="text-align:center" class=" "><?php echo htmlentities($result->userID);?></td>
                            <td hidden style="text-align:center" class=" "><?php echo htmlentities($result->userID);?></td>
                            <td style="text-align:center" class=" "><?php echo htmlentities($result->userName);?></td>
                            <td style="text-align:center" class=" "><?php echo htmlentities($result->charityTitle);?></td>
                            <td style="text-align:center" class=" "><?php echo htmlentities($result->charityDescription);?></td>
                            <td style="text-align:center" class=" "><?php echo"<img src = '/developgetpet/web/images/$result->charityPicture' style = height:80px; width: 80px;/>";?></td>
                            <td style="text-align:center" class=" "><?php echo htmlentities($result->charityAmount);?></td>
                            <td style="text-align:center" class=" "><?php echo"<img src = '/developgetpet/web/images/$result->charityQRcode' style = height:80px; width: 80px;/>";?></td>
                            <td style="text-align:center" class=" "><?php echo htmlentities($result->charityWebsite);?></td>     
                            <td style="text-align:center" class=" "><?php echo htmlentities($result->charityPostdate);?></td> 
                            <td style="text-align:center" class=" "><?php echo htmlentities($result->charityPoststatus);?></td>   
                            <td style="text-align:center" class=" "><?php echo htmlentities($result->charityStatus);?></td>                                                      
                          </tr>
                        <?php $cnt=$cnt+1;}}?>
                     </tbody>
                </table>
              </div>
            </div>
          </div> 