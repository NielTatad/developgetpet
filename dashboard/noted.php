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
					    <input hidden type="text" id="post_id2" name="postsID" required = "required" class="form-control">
				</div>

        <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Title<span class="required"></span></label>
        <div class="col-md-6 col-sm-6">
               <input type="text" class="form-control" id="post_title2" name="Title" style="background-color:#fff;width:400px;" required="required" onkeypress="return /[a-z\s*]/i.test(event.key)"/>
        </div>
        </div>

        <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Content<span class="required"></span></label>
        <div class="col-md-6 col-sm-6">
        <textarea id="post_content2" name="Content" style="width:400px;height:100px;padding-top:-5px;background-color: #fff;resize: none;font-size:16px;" onkeyup="edit()"></textarea>
        </div>
        </div>

        <script>
          function edit() {
          if(document.getElementById("post_content2").value==="") { 
                    document.getElementById('Edit').disabled = true; 
                } else { 
                    document.getElementById('Edit').disabled = false;
                }
            }
        </script>

        <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Location</label>
        <div class="col-md-6 col-sm-6">
               <input read only type="text" class="form-control" id="post_location2" name="Location" style="background-color:#fff;width:400px;" required="required"/>
        </div>
        </div>

        <div class="field item form-group">
                                         <label class='col-form-label col-md-3 col-sm-3  label-align'>
                                         Time</label>
                                         <div class="col-md-6 col-sm-6" class="form-group">
                                         <div class='input-group date' id='myDatepicker3'>
                                         <input required="required" type='text' id="post_time2" name="Time" class="form-control" class="input-group-addon" onkeypress="return onlyNumberKey(event)"/>
                                         <span class="input-group-addon">
                                         <span class="glyphicon glyphicon-time" style="margin-top:4px;"></span>
                                         </span>
                                         </div>
                                         </div>
                                         </div>

        <div class="field item form-group">
          <label class="col-form-label col-md-3 col-sm-3  label-align">Event Date<span class="required"></span></label>
          <div class="col-md-6 col-sm-6">
            <input class="form-control" class='date' type="date" id="post_date2" name="Date" required='required'>
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