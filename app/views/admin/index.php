<?php require  APPROOT . '\views\inc\header.php';?>

<header id="main-header" class="py-2 bg-primary text-white">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1 class="text-white"><i class="fa fa-gear "></i>Dashboard</h1>
            </div>
        </div>
    </div>
</header>

<!-- Actions -->
<section id="actions" class="py-4 mb-4 bg-faded">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <a href="#" class="btn btn-primary btn-block text-white" data-toggle="modal" data-target="#addPostModal"><i class="fa fa-plus"></i> Add Post</a>
            </div>
            <div class="col-md-3">
                <a href="#" class="btn btn-success btn-block text-white" data-toggle="modal" data-target="#addCategoryModal"><i class="fa fa-plus"></i> Add Category</a>
            </div>
            <div class="col-md-3">
                <a href="#" class="btn btn-warning btn-block text-white" data-toggle="modal" data-target="#addUserModal"><i class="fa fa-plus"></i> Add User</a>
            </div>
        </div>
    </div>
</section>

<!-- posts -->
<section id="posts">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h4>Latest Posts</h4>
                    </div>
                    <table class="table table-striped">
                        <thead class="thead-inverse">
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Catogory</th>
                                <th>Date Posted</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="row">1</td>
                                <td>Post One</td>
                                <td>Web Development</td>
                                <td>July 11, 2017</td>
                                <td><a href="details.html" class="btn btn-secondary"><i class="fa fa-angle-double-right"></i>Details</a></td>
                            </tr>
                            <tr>
                                <td scope="row">2</td>
                                <td>Post Two</td>
                                <td>Web Development</td>
                                <td>July 11, 2017</td>
                                <td><a href="details.html" class="btn btn-secondary"><i class="fa fa-angle-double-right"></i>Details</a></td>
                            </tr>
                            <tr>
                                <td scope="row">3</td>
                                <td>Post Three</td>
                                <td>Tech Gadgets</td>
                                <td>July 11, 2017</td>
                                <td><a href="details.html" class="btn btn-secondary"><i class="fa fa-angle-double-right"></i>Details</a></td>
                            </tr>
                            <tr>
                                <td scope="row">4</td>
                                <td>Post Four</td>
                                <td>Health and Wellness</td>
                                <td>July 11, 2017</td>
                                <td><a href="details.html" class="btn btn-secondary"><i class="fa fa-angle-double-right"></i>Details</a></td>
                            </tr>
                            <tr>
                                <td scope="row">5</td>
                                <td>Post Five</td>
                                <td>Business</td>
                                <td>July 14, 2017</td>
                                <td><a href="details.html" class="btn btn-secondary"><i class="fa fa-angle-double-right"></i>Details</a></td>
                            </tr>
                            <tr>
                                <td scope="row">6</td>
                                <td>Post Six</td>
                                <td>Business</td>
                                <td>July 16, 2017</td>
                                <td><a href="details.html" class="btn btn-secondary"><i class="fa fa-angle-double-right"></i>Details</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center mb-3 card-post text-white">
                    <div class="card-block">
                        <h3>Posts</h3>
                        <h1 class="display-4 text-white"><i class="fa fa-pencil"></i>6</h1>
                        <a href="#" class="btn btn-sm btn-outline-secondary text-white">View</a>
                    </div>
                </div>
                <div class="card text-center mb-3 card-category text-white">
                    <div class="card-block">
                        <h3>Categories</h3>
                        <h1 class="display-4 text-white"><i class="fa fa-folder-open-o"></i>4</h1>
                        <a href="#" class="btn btn-sm btn-outline-secondary text-white">View</a>
                    </div>
                </div>
                <div class="card text-center mb-3 card-user text-white">
                    <div class="card-block">
                        <h3>Users</h3>
                        <h1 class="display-4 text-white"><i class="fa fa-users"></i>6</h1>
                        <a href="#" class="btn btn-sm btn-outline-secondary text-white">View</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- footer -->
<footer id="main-footer" class="bg-inverse text-white mt-5 p-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <p class="lead text-center">Copyright &copy; 2018</p>
            </div>
        </div>
    </div>
</footer>


<!-- add post modal -->
<div class="modal fade" id="addPostModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="addPostModalLable">Add Post</h5>
                <button class="close" data-dismiss="modal"></button>
                <span>&times;</span>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="title" class="form-control-lable">Title</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="title" class="form-control-lable">Category</label>
                        <select class="form-control">
                            <option value="">Web Development</option>
                            <option value="">Tech Gadgets</option>
                            <option value="">Business</option>
                            <option value="">Health and Wellness</option>
                        </select>
                    </div>
                    <div class="form-group bg-faded p-3">
                        <label for="file">Image Upload</label>
                        <input type="file" class="form-control-file">
                        <small id="fileHelp" class="form-text text-muted">Max Size 3MB</small>
                    </div>
                    <div class="form-group">
                        <label for="body">Body</label>
                        <textarea name="editor1" class="form-control"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button class="btn btn-primary" data-dismiss="modal">Add Post</button>
            </div>
        </div>
    </div>
</div>

<!-- add category modal -->
<div class="modal fade" id="addCategoryModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-success text-white">
                <h5 class="modal-title" id="addCategoryModalLable">Add Category</h5>
                <button class="close" data-dismiss="modal"></button>
                <span>&times;</span>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="title" class="form-control-lable">Title</label>
                        <input type="text" class="form-control">
                    </div>
                    
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button class="btn btn-success" data-dismiss="modal">Add Category</button>
            </div>
        </div>
    </div>
</div>

<!-- add user modal -->
<div class="modal fade" id="addUserModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-warning text-white">
                <h5 class="modal-title" id="addUserModalLable">Add User</h5>
                <button class="close" data-dismiss="modal"></button>
                <span>&times;</span>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="name" class="form-control-lable">Name</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email" class="form-control-lable">Email</label>
                        <input type="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password" class="form-control-lable">Password</label>
                        <input type="password" class="form-control">
                    </div>
                    
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button class="btn btn-success" data-dismiss="modal">Add User</button>
            </div>
        </div>
    </div>
</div>

<?php require  APPROOT . '\views\inc\footer.php';?>


















