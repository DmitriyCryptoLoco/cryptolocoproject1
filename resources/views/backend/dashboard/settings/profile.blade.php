<main class="main">
    <div class="container-fluid" style="padding-top: 30px">
        <div class="animated fadeIn">
            <div class="content-header">
            </div><!--content-header-->
            <div class="row justify-content-center align-items-center mb-3">
                <div class="col col-sm-12 align-self-center">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="mb-0">My Account</h3>
                        </div>

                        <div class="card-body">
                            <div role="tabpanel">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a href="#profile" class="nav-link active" aria-controls="profile" role="tab" data-toggle="tab">Profile</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="#edit" class="nav-link" aria-controls="edit" role="tab" data-toggle="tab">Update Information</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="#password" class="nav-link" aria-controls="password" role="tab" data-toggle="tab">Change Password</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade show active pt-3" id="profile" aria-labelledby="profile-tab">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-hover table-bordered">
                                                <tbody><tr>
                                                    <th>Avatar</th>
                                                    <td><img src="https://www.gravatar.com/avatar/42aee819db5deec9c92468f6be6b027c.jpg?s=80&amp;d=mm&amp;r=g" height="100px" class="user-profile-image"></td>
                                                </tr>
                                                <tr>
                                                    <th>Name</th>
                                                    <td>First Name Last Name</td>
                                                </tr>
                                                <tr>
                                                    <th>E-mail</th>
                                                    <td>gooddimoh@gmail.com</td>
                                                </tr>
                                                <tr>
                                                    <th>Created At</th>
                                                    <td>Mon Feb 24 18:11:58 UTC 2020 (1 hour ago)</td>
                                                </tr>
                                                <tr>
                                                    <th>Last Updated</th>
                                                    <td>Mon Feb 24 18:11:58 UTC 2020 (1 hour ago)</td>
                                                </tr>
                                                <tr>
                                                    <th>Phone</th>
                                                    <td>3</td>
                                                </tr>
                                                <tr>
                                                    <th>Date of Birth</th>
                                                    <td>2020-02-20</td>
                                                </tr>
                                                <tr>
                                                    <th>Gender</th>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th>Address</th>
                                                    <td>address address address address</td>
                                                </tr>
                                                <tr>
                                                    <th>City</th>
                                                    <td>Kiev</td>
                                                </tr>
                                                <tr>
                                                    <th>State</th>
                                                    <td>Kiev</td>
                                                </tr>
                                                <tr>
                                                    <th>Country</th>
                                                    <td>Ukraine</td>
                                                </tr>
                                                </tbody></table>
                                        </div>
                                    </div><!--tab panel profile-->

                                    <div role="tabpanel" class="tab-pane fade show pt-3" id="edit" aria-labelledby="edit-tab">
                                        <form class="form-horizontal" method="POST" action="https://learnwithbtc.com/user/profile/update" enctype="multipart/form-data"><input type="hidden" name="_method" id="_method" value="PATCH"><input type="hidden" name="_token" value="T72cZh16IxTrjcrCpdEwyffyp7ubm2aDMy1GAwH1">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="avatar">Avatar Location</label>

                                                        <div>
                                                            <input type="radio" name="avatar_type" value="gravatar" checked=""> Gravatar
                                                            &nbsp;&nbsp;
                                                            <input type="radio" name="avatar_type" value="storage"> Upload

                                                        </div>
                                                    </div><!--form-group-->

                                                    <div class="form-group hidden" id="avatar_location" style="display: none;">
                                                        <input class="form-control" type="file" name="avatar_location" id="avatar_location">
                                                    </div><!--form-group-->

                                                </div><!--col-->
                                            </div><!--row-->

                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="first_name">First Name</label>

                                                        <input class="form-control" type="text" name="first_name" id="first_name" value="First Name" placeholder="First Name" maxlength="191" required="" autofocus="">
                                                    </div><!--form-group-->
                                                </div><!--col-->
                                            </div><!--row-->

                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="last_name">Last Name</label>

                                                        <input class="form-control" type="text" name="last_name" id="last_name" value="Last Name" placeholder="Last Name" maxlength="191" required="">
                                                    </div><!--form-group-->
                                                </div><!--col-->
                                            </div><!--row-->



                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="last_name">Phone</label>

                                                        <input type="number" class="form-control mb-0" value="3" name="phone" placeholder="Phone">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="last_name">Date of Birth</label>

                                                        <input type="date" class="form-control mb-0" value="2020-02-20" name="dob" placeholder="Date of Birth">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <textarea name="address" placeholder="Address" class="form-control mb-0">address address address address</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="last_name">City</label>

                                                        <input type="text" class="form-control mb-0" value="Kiev" name="city" placeholder="City">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="last_name">State</label>

                                                        <input type="text" class="form-control mb-0" value="Kiev" name="state" placeholder="State">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="last_name">Country</label>

                                                        <input type="text" class="form-control mb-0" value="Ukraine" name="country" placeholder="Country">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group mb-0 clearfix">
                                                        <button class="btn btn-success pull-right" type="submit">Update</button>
                                                    </div><!--form-group-->
                                                </div><!--col-->
                                            </div><!--row-->
                                        </form>

                                    </div><!--tab panel profile-->

                                    <div role="tabpanel" class="tab-pane fade show pt-3" id="password" aria-labelledby="password-tab">
                                        <form class="form-horizontal" method="POST" action="https://learnwithbtc.com/user/account"><input type="hidden" name="_method" id="_method" value="PATCH"><input type="hidden" name="_token" value="T72cZh16IxTrjcrCpdEwyffyp7ubm2aDMy1GAwH1">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="old_password">Old Password</label>

                                                        <input class="form-control" type="password" name="old_password" id="old_password" placeholder="Old Password" autofocus="" required="">
                                                    </div><!--form-group-->
                                                </div><!--col-->
                                            </div><!--row-->

                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="password">Password</label>

                                                        <input class="form-control" type="password" name="password" id="password" placeholder="Password" required="">
                                                    </div><!--form-group-->
                                                </div><!--col-->
                                            </div><!--row-->

                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="password_confirmation">Password Confirmation</label>

                                                        <input class="form-control" type="password" name="password_confirmation" id="password_confirmation" placeholder="Password Confirmation" required="">
                                                    </div><!--form-group-->
                                                </div><!--col-->
                                            </div><!--row-->

                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group mb-0 clearfix">
                                                        <button class="btn btn-success pull-right" type="submit">Update Password</button>
                                                    </div><!--form-group-->
                                                </div><!--col-->
                                            </div><!--row-->
                                        </form>
                                    </div><!--tab panel change password-->
                                </div><!--tab content-->
                            </div><!--tab panel-->
                        </div><!--card body-->
                    </div><!-- card -->
                </div><!-- col-xs-12 -->
            </div><!-- row -->
        </div><!--animated-->
    </div><!--container-fluid-->
</main>
