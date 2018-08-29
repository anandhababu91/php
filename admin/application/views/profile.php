<div class="content-wrapper"> 
            <div class="page-header">
                <div class="ibox flex-1">
                    <div class="ibox-body">
                        <div class="flexbox">
                            <div class="flexbox-b">
                                <div class="ml-5 mr-5">
                                    <img class="img-circle" src="assets/img/users/u8.jpg" alt="image" width="110" />
                                </div>
                                <div>
                                    <h4>Lynn Weaver</h4>
                                    <div class="text-muted font-13 mb-3">
                                        <span class="mr-3"><i class="ti-location-pin mr-2"></i>New York, USA</span>
                                        <span><i class="ti-calendar mr-2"></i>12.04.2018</span>
                                    </div>
                                    <div>
                                        <span class="mr-3">
                                            <span class="badge badge-primary badge-circle mr-2 font-14" style="height:30px;width:30px;"><i class="ti-briefcase"></i></span>Partner</span>
                                        <span>
                                            <span class="badge badge-pink badge-circle mr-2 font-14" style="height:30px;width:30px;"><i class="ti-cup"></i></span>Vip Status</span>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div> 
                </div>
            </div>
            <form method="post" id="Profile_form" action="<?php echo base_url() ?>profile/update">
            <div class="row">
                    <div class="col-md-6">
                        <div class="ibox">                            
                            <div class="ibox-body">
                                <div class="form-group mb-4">
                                    <label>Firts Name</label>
                                    <input type="text" placeholder="Firts Name" class="form-control" name="first_name" value="<?php echo $info['firstname']; ?>">
                                </div>
                                <div class="form-group mb-4">
                                    <label>Last Name</label>
                                    <input type="text" placeholder="Last Name" class="form-control" name="last_name" value="<?php echo $info['lastname']; ?>">
                                </div>
                                <div class="form-group mb-4">
                                     <label>Profile Image</label><br>
                                     <label class="btn btn-gradient-purple file-input">
                                            <span class="btn-icon"><i class="la la-camera"></i>Browse</span>
                                            <input type="file" name="image">
                                            <input type="hidden" name="old_image" value="<?php echo $info['image']; ?>">
                                        </label>
                                </div> 
                            </div>
                        </div>                         
                    </div>
                    <div class="col-md-6">
                        <div class="ibox">                            
                            <div class="ibox-body">
                                <div class="form-group mb-4">
                                    <label>Email</label>
                                    <input type="text" placeholder="Email" class="form-control" name="email" value="<?php echo $info['email']; ?>">
                                </div>
                                <div class="form-group mb-4">
                                    <label>Phone No</label>
                                    <input type="text" placeholder="Phone No" class="form-control" name="phone" value="<?php echo $info['phone']; ?>">
                                </div>
                                <div class="form-group mb-4">
                                      <label>Password</label>
                                    <input type="text" placeholder="Password" class="form-control" name="password">
                                    <input type="hidden" name="old_password" value="<?php echo $info['txt_password']; ?>">
                                </div> 
                            </div>
                        </div>   
                        
                    </div>
                </div>
                <div class="row">
                        <div class="col-md-12">
                                <div class="ibox">                            
                                    <div class="ibox-body">
                                         <div class="form-group mb-4">
                                                <button type="submit" name="update" class="btn btn-success pull-right">Update</button>
                                         </div>
                                    </div>
                                </div>
                        </div>
                </div>
         </form>