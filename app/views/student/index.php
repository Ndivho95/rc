<?php require  APPROOT . '\views\inc\header.php';?>
       <div class="content-wrapper">
    <div class="container-fluid" style="margin-top:80px;">
      
       
       <div class="row">
           <div class="col-md-2">
               <img src="//placehold.it/150" class="m-x-auto img-fluid img-circle" alt="avatar" style="margin-bottom:50px;">
           </div>
           <div class="col-md-10">
               <h1 ><?php echo $data['student']->student_name . " " . $data['student']->student_surname;?></h1>

               <h6>Address</h6>
               <p>Street: <br> City: <br>Province: </p>
           </div>
       </div>
        
        
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a href="" data-target="#profile" data-toggle="tab" class="nav-link active">Profile</a>
                </li>
                
                <li class="nav-item">
                    <a href="" data-target="#personalDetails" data-toggle="tab" class="nav-link">Edit Profile</a>
                </li>
                
            </ul>
            <div class="tab-content p-b-3">
                <div class="tab-pane active" id="profile">
                    <h4 class="m-y-2"></h4>
                    <div class="row">
                        <div class="col-md-6">
                            <h6>About</h6>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean a magna orci. Phasellus sollicitudin odio a ante malesuada accumsan. Ut interdum, lacus non sollicitudin ornare, ipsum lorem tincidunt sapien, at pharetra diam dolor ut ante. Phasellus blandit scelerisque lorem eget accumsan. Nunc laoreet magna arcu, nec tincidunt lectus tempus quis. Etiam luctus gravida ante, eu rutrum metus. Aliquam non gravida lacus. Morbi posuere hendrerit libero eget laoreet. Nullam ut turpis a nibh finibus fringilla ut vel sem. Nulla mauris mi, malesuada sed ante vel, maximus accumsan nunc. Proin id consectetur ante. Aliquam in sapien vel elit accumsan dignissim ac dictum est.
                            </p>
                            <h6>Hobbies</h6>
                            <p>
                                Indie music, skiing and hiking. I love the great outdoors.
                            </p>
                        </div>
                        
                        
                        <div class="col-md-6">
                            <h6>Skills</h6>
                            <a href="" class="tag tag-default tag-pill"><span class="badge badge-secondary">html5</span></a>
                            <a href="" class="tag tag-default tag-pill"><span class="badge badge-secondary">react</span></a>
                            <a href="" class="tag tag-default tag-pill"><span class="badge badge-secondary">codeply</span></a>
                            <a href="" class="tag tag-default tag-pill"><span class="badge badge-secondary">angularjs</span></a>
                            <a href="" class="tag tag-default tag-pill"><span class="badge badge-secondary">css3</span></a>
                            <a href="" class="tag tag-default tag-pill"><span class="badge badge-secondary">jquery</span></a>
                            <a href="" class="tag tag-default tag-pill"><span class="badge badge-secondary">bootstrap</span></a>
                            <a href="" class="tag tag-default tag-pill"><span class="badge badge-secondary">responsive-design</span></a>
                            <br>
                            <br>
                            <h6>Project Links</h6>
                            <ul>
                                <li>Link 1</li>
                                <li>Link 2</li>
                                <li>Link 3</li>
                                <li>Link 4</li>
                            </ul>
                        </div>
                    </div>
                    
                </div>
                
                <div class="tab-pane" id="personalDetails">
                    <h4 class="m-y-2">Edit Profile</h4>
                    <form role="form">
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">First name</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" value="<?php echo $data['student']->student_name; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Last name</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" value="<?php echo $data['student']->student_surname; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Email</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="email" value="email@gmail.com">
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Address</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" value="" placeholder="Street">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label"></label>
                            <div class="col-lg-6">
                                <input class="form-control" type="text" value="" placeholder="City">
                            </div>
                            <div class="col-lg-3">
                                <input class="form-control" type="text" value="" placeholder="Province">
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Username</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" value="<?php echo $data['student']->student_name; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Password</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="password" value="11111122333">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Confirm password</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="password" value="11111122333">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label"></label>
                            <div class="col-lg-9">
                                <input type="reset" class="btn btn-secondary" value="Cancel">
                                <input type="button" class="btn btn-primary" value="Save Changes">
                            </div>
                        </div>
                    </form>
                </div>
                
            </div>

<?php require  APPROOT . '\views\inc\admin-footer.php';?>


