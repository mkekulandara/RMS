<?php
include('session.php');
?>
<div class="container">
    <div class="navbar navbar-inverse navbar-static-top">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="home.php">TECNO IT</a>
        </div>
        <div class="navbar-collapse collapse navbar-responsive-collapse">
            <ul class="nav navbar-nav">
                <li><a href="home.php"><i class="glyphicon glyphicon-home">  Home</i></a></li>
                <?php
                if($login_user_level == "General User")
                {
                    echo '<li>';
                }else
                {
                    echo '<li style="display: none;">';
                }
                ?>
                <a href="timetable.php">Time Tables</a>
                </li>
                <?php
                if($login_user_level == "General User" || $login_user_level == "Administrator")
                {
                    echo '<li class="dropdown">';
                }else
                {
                    echo '<li style="display: none;">';
                }
                ?>
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Resource Info<b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="lectureHalls.php">Lecture Halls</a></li>
                    <li><a href="labs.php">Labs</a></li>
                    <li class="divider"></li>
                    <li><a href="specialresources.php">Special Resources</a></li>
                    <li><a href="studyrooms.php">Study Rooms</a></li>
                    <li><a href="libraries.php">Libraries</a></li>
                    <li><a href="canteens.php">Canteens</a></li>
                </ul>
                </li>
                <?php
                if($login_user_level == "Administrator")
                {
                    echo '<li class="dropdown">';
                }else
                {
                    echo '<li style="display: none;">';
                }
                ?>
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Add Resources<b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="#addresource" data-toggle="modal">Add New Resources</a></li>
                </ul>
                </li>
                <?php
                /*                        if($login_user_level == 1)
                                        {
                                            echo '<li class="dropdown">';
                                        }else
                                        {
                                            echo '<li style="display: none;">';
                                        }
                                        */?><!--
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Labs<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#addlab" data-toggle="modal">Add New Labs</a></li>
                                <li><a href="#dellab" data-toggle="modal">Delete Labs</a></li>
                            </ul>
                        </li>-->
                <?php
                if($login_user_level == "Administrator")
                {
                    echo '<li class="dropdown">';
                }else
                {
                    echo '<li style="display: none;">';
                }
                ?>
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">User Administration<b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="#adduser" data-toggle="modal">Add New User</a></li>
                </ul>
                </li>
                <?php
                if($login_user_level == "Hall Administrator")
                {
                    echo '<li>';
                }else
                {
                    echo '<li style="display: none;">';
                }
                ?>
                <a href="request.php">Requests</a>
                </li>


            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $login_session; ?>&nbsp;&nbsp;<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="home.php">Edit Profile</a></li>
                        <li><a href="inbox.php">Masseges</a></li>
                        <li class="divider"></li>
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="modal fade" id="addresource"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="title">Add New Resource</h4>
            </div>
            <form class="form-horizontal" name="resource" method="post" action="new_resource.php" onsubmit="return notnullresource()">
                <fieldset>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="resource_id" class="col-lg-4 control-label">Enter Resource Id :<br></label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" name="resource_id" placeholder="Resource Id">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="resource_name" class="col-lg-4 control-label">Enter Resource Name :<br></label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" name="resource_name" placeholder="Resource Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="select" class="col-lg-4 control-label">Resource Type :</label>
                            <div class="col-lg-6">
                                <select class="form-control" name="resource_type">
                                    <option>Lecture Halls</option>
                                    <option>Labs</option>
                                    <option>Special Resources</option>
                                    <option>Study Rooms</option>
                                    <option>Libraries</option>
                                    <option>Canteens</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="select" class="col-lg-4 control-label">Sub Type :</label>
                            <div class="col-lg-6">
                                <select class="form-control" name="sub_type">
                                    <option>Software</option>
                                    <option>Network</option>
                                    <option>Hardware</option>
                                    <option>Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="capacity" class="col-lg-4 control-label">Enter Capacity :<br></label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" name="capacity" placeholder="Capacity">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="location" class="col-lg-4 control-label">Enter Location :<br></label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" name="location" placeholder="Location">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="select" class="col-lg-4 control-label">OHP :</label>
                            <div class="col-lg-6">
                                <select class="form-control" name="ohp">
                                    <option>Yes</option>
                                    <option>No</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="select" class="col-lg-4 control-label">Multimedia Projector :</label>
                            <div class="col-lg-6">
                                <select class="form-control" name="multimedia">
                                    <option>Yes</option>
                                    <option>No</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="select" class="col-lg-4 control-label">Sound System :</label>
                            <div class="col-lg-6">
                                <select class="form-control" name="sound_system">
                                    <option>Yes</option>
                                    <option>No</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="select" class="col-lg-4 control-label">Wifi :</label>
                            <div class="col-lg-6">
                                <select class="form-control" name="wifi">
                                    <option>Yes</option>
                                    <option>No</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="select" class="col-lg-4 control-label">Status :</label>
                            <div class="col-lg-6">
                                <select class="form-control" name="status">
                                    <option>Available</option>
                                    <option>Not Available</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Add Resource</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="adduser"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="title">Add New Resource</h4>
            </div>
            <form class="form-horizontal" name="user" method="post" action="new_user.php">
                <fieldset>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="username" class="col-lg-4 control-label">Enter Username :<br></label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" name="username" placeholder="Username">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password" class="col-lg-4 control-label">Enter Password :<br></label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" name="password" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="select" class="col-lg-4 control-label">User Level :</label>
                            <div class="col-lg-6">
                                <select class="form-control" name="user_level">
                                    <option>Administrator</option>
                                    <option>Hall Administrator</option>
                                    <option>General User</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-lg-4 control-label">Enter Email :<br></label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" name="email" placeholder="email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="first_name" class="col-lg-4 control-label">Enter First Name :<br></label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" name="first_name" placeholder="first_name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="last_name" class="col-lg-4 control-label">Enter Last Name :<br></label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" name="last_name" placeholder="last_name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="dob" class="col-lg-4 control-label">Enter dob :<br></label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" name="dob" placeholder="dob">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tel_num" class="col-lg-4 control-label">Enter tel_num :<br></label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" name="tel_num" placeholder="tel_num">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="address" class="col-lg-4 control-label">Enter address :<br></label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" name="address" placeholder="address">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="gender" class="col-lg-4 control-label">gender :</label>
                            <div class="col-lg-6">
                                <select class="form-control" name="gender">
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="select" class="col-lg-4 control-label">status :</label>
                            <div class="col-lg-6">
                                <select class="form-control" name="status">
                                    <option>Active</option>
                                    <option>Not Active</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Add Resource</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>







