<!DOCTYPE html>
<html>
    
<!-- Mirrored from dreamguys.co.in/smarthr/blue/events.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Oct 2018 15:26:42 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
        <title>Events - HRMS admin template</title>
		<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="assets/css/fullcalendar.min.css">
		<link rel="stylesheet" type="text/css" href="assets/css/select2.min.css">
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-datetimepicker.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
    </head>
    <body>
        <div class="main-wrapper">
            <div class="header">
                <div class="header-left">
                    <a href="index.php" class="logo">
						<img src="assets/img/logo.png" width="40" height="40" alt="">
					</a>
                </div>
                <div class="page-title-box pull-left">
					<h3>Focus Technologies</h3>
                </div>
				<a id="mobile_btn" class="mobile_btn pull-left" href="#sidebar"><i class="fa fa-bars" aria-hidden="true"></i></a>
				<ul class="nav navbar-nav navbar-right user-menu pull-right">
					<li class="dropdown hidden-xs">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell-o"></i> <span class="badge bg-purple pull-right">3</span></a>
						<div class="dropdown-menu notifications">
							<div class="topnav-dropdown-header">
								<span>Notifications</span>
							</div>
							<div class="drop-scroll">
								<ul class="media-list">
									<li class="media notification-message">
										<a href="activities.php">
											<div class="media-left">
												<span class="avatar">
													<img alt="John Doe" src="assets/img/user.jpg" class="img-responsive img-circle">
												</span>
											</div>
											<div class="media-body">
												<p class="m-0 noti-details"><span class="noti-title">John Doe</span> added new task <span class="noti-title">Patient appointment booking</span></p>
												<p class="m-0"><span class="notification-time">4 mins ago</span></p>
											</div>
										</a>
									</li>
									<li class="media notification-message">
										<a href="activities.php">
											<div class="media-left">
												<span class="avatar">V</span>
											</div>
											<div class="media-body">
												<p class="m-0 noti-details"><span class="noti-title">Tarah Shropshire</span> changed the task name <span class="noti-title">Appointment booking with payment gateway</span></p>
												<p class="m-0"><span class="notification-time">6 mins ago</span></p>
											</div>
										</a>
									</li>
									<li class="media notification-message">
										<a href="activities.php">
											<div class="media-left">
												<span class="avatar">L</span>
											</div>
											<div class="media-body">
												<p class="m-0 noti-details"><span class="noti-title">Misty Tison</span> added <span class="noti-title">Domenic Houston</span> and <span class="noti-title">Claire Mapes</span> to project <span class="noti-title">Doctor available module</span></p>
												<p class="m-0"><span class="notification-time">8 mins ago</span></p>
											</div>
										</a>
									</li>
									<li class="media notification-message">
										<a href="activities.php">
											<div class="media-left">
												<span class="avatar">G</span>
											</div>
											<div class="media-body">
												<p class="m-0 noti-details"><span class="noti-title">Rolland Webber</span> completed task <span class="noti-title">Patient and Doctor video conferencing</span></p>
												<p class="m-0"><span class="notification-time">12 mins ago</span></p>
											</div>
										</a>
									</li>
									<li class="media notification-message">
										<a href="activities.php">
											<div class="media-left">
												<span class="avatar">V</span>
											</div>
											<div class="media-body">
												<p class="m-0 noti-details"><span class="noti-title">Bernardo Galaviz</span> added new task <span class="noti-title">Private chat module</span></p>
												<p class="m-0"><span class="notification-time">2 days ago</span></p>
											</div>
										</a>
									</li>
								</ul>
							</div>
							<div class="topnav-dropdown-footer">
								<a href="activities.php">View all Notifications</a>
							</div>
						</div>
					</li>
					<li class="dropdown hidden-xs">
						<a href="javascript:;" id="open_msg_box" class="hasnotifications"><i class="fa fa-comment-o"></i> <span class="badge bg-purple pull-right">8</span></a>
					</li>	
					<li class="dropdown">
						<a href="profile.php" class="dropdown-toggle user-link" data-toggle="dropdown" title="Admin">
							<span class="user-img"><img class="img-circle" src="assets/img/user.jpg" width="40" alt="Admin">
							<span class="status online"></span></span>
							<span>Admin</span>
							<i class="caret"></i>
						</a>
						<ul class="dropdown-menu">
							<li><a href="profile.php">My Profile</a></li>
							<li><a href="edit-profile.php">Edit Profile</a></li>
							<li><a href="settings.php">Settings</a></li>
							<li><a href="login.php">Logout</a></li>
						</ul>
					</li>
				</ul>
				<div class="dropdown mobile-user-menu pull-right">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
					<ul class="dropdown-menu pull-right">
						<li><a href="profile.php">My Profile</a></li>
						<li><a href="edit-profile.php">Edit Profile</a></li>
						<li><a href="settings.php">Settings</a></li>
						<li><a href="login.php">Logout</a></li>
					</ul>
				</div>
            </div>
            <div class="sidebar" id="sidebar">
                <div class="sidebar-inner slimscroll">
					<div id="sidebar-menu" class="sidebar-menu">
						<ul>
							<li> 
								<a href="index.php">Dashboard</a>
							</li>
							<li class="submenu">
								<a href="#" class="noti-dot"><span> Employees</span> <span class="menu-arrow"></span></a>
								<ul class="list-unstyled" style="display: none;">
									<li><a href="employees.php">All Employees</a></li>
									<li><a href="holidays.php">Holidays</a></li>
									<li><a href="leaves.php"><span>Leave Requests</span> <span class="badge bg-primary pull-right">1</span></a></li>
									<li><a href="attendance.php">Attendance</a></li>
									<li><a href="departments.php">Departments</a></li>
									<li><a href="designations.php">Designations</a></li>
								</ul>
							</li>
							<li> 
								<a href="clients.php">Clients</a>
							</li>
							<li> 
								<a href="projects.php">Projects</a>
							</li>
							<li> 
								<a href="tasks.php">Tasks</a>
							</li>
							<li class="submenu">
								<a href="#"><span> Calls</span> <span class="menu-arrow"></span></a>
								<ul class="list-unstyled" style="display: none;">
									<li><a href="voice-call.php">Voice Call</a></li>
									<li><a href="video-call.php">Video Call</a></li>
									<li><a href="incoming-call.php">Incoming Call</a></li>
								</ul>
							</li>
							<li> 
								<a href="contacts.php">Contacts</a>
							</li>
							<li> 
								<a href="leads.php">Leads</a>
							</li>
							<li class="submenu">
								<a href="#"><span> Accounts </span> <span class="menu-arrow"></span></a>
								<ul class="list-unstyled" style="display: none;">
									<li><a href="estimates.php">Estimates</a></li>
									<li><a href="invoices.php">Invoices</a></li>
									<li><a href="payments.php">Payments</a></li>
									<li><a href="expenses.php">Expenses</a></li>
									<li><a href="provident-fund.php">Provident Fund</a></li>
									<li><a href="taxes.php">Taxes</a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="#"><span> Payroll </span> <span class="menu-arrow"></span></a>
								<ul class="list-unstyled" style="display: none;">
									<li><a href="salary.php"> Employee Salary </a></li>
									<li><a href="salary-view.php"> Payslip </a></li>
								</ul>
							</li>
							<li> 
								<a href="worksheet.php">Timing Sheet</a>
							</li>
							<li> 
								<a href="tickets.php">Tickets</a>
							</li>
							<li class="active"> 
								<a href="events.php">Events</a>
							</li>
							<li> 
								<a href="inbox.php">Email</a>
							</li>
							<li> 
								<a href="chat.php">Chat <span class="badge bg-primary pull-right">5</span></a>
							</li>
							<li> 
								<a href="assets.php">Assets</a>
							</li>
							<li> 
								<a href="activities.php">Activities</a>
							</li>
							<li> 
								<a href="users.php">Users</a>
							</li>
							<li class="submenu">
								<a href="#"><span> Reports </span> <span class="menu-arrow"></span></a>
								<ul class="list-unstyled" style="display: none;">
									<li><a href="expense-reports.php"> Expense Report </a></li>
									<li><a href="invoice-reports.php"> Invoice Report </a></li>
								</ul>
							</li>
							<li> 
								<a href="settings.php">Settings</a>
							</li>
							<li class="submenu">
								<a href="#"><span> Pages </span> <span class="menu-arrow"></span></a>
								<ul class="list-unstyled" style="display: none;">
									<li><a href="login.php"> Login </a></li>
									<li><a href="register.php"> Register </a></li>
									<li><a href="forgot-password.php"> Forgot Password </a></li>
									<li><a href="profile.php"> Profile </a></li>
								</ul>
							</li>
						</ul>
					</div>
                </div>
            </div>
            <div class="page-wrapper">
                <div class="content container-fluid">
					<div class="row">
						<div class="col-sm-8 col-xs-6">
							<h4 class="page-title">Events</h4>
						</div>
						<div class="col-sm-4 col-xs-6 text-right m-b-30">
							<a href="#" class="btn btn-primary rounded" data-toggle="modal" data-target="#add_event"><i class="fa fa-plus"></i> Add Event</a>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12">
							<div class="card-box m-b-0">
								<div class="row">
									<div class="col-md-12">
										<div id="calendar"></div>
									</div>
								</div>
							</div>
							<!-- BEGIN MODAL -->
							<div class="modal custom-modal fade none-border" id="event-modal">
								<div class="modal-dialog">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									<div class="modal-content modal-md">
										<div class="modal-header">
											<h4 class="modal-title">Add New Event</h4>
										</div>
										<div class="modal-body"></div>
										<div class="modal-footer text-center">
											<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
											<button type="button" class="btn btn-success save-event">Create event</button>
											<button type="button" class="btn btn-danger delete-event" data-dismiss="modal">Delete</button>
										</div>
									</div>
								</div>
							</div>
							<!-- Modal Add Category -->
							<div class="modal fade none-border" id="add-category">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
											<h4 class="modal-title">Add a category</h4>
										</div>
										<div class="modal-body p-20">
											<form>
												<div class="row">
													<div class="col-md-6">
														<label class="control-label">Category Name</label>
														<input class="form-control" placeholder="Enter name" type="text" name="category-name"/>
													</div>
													<div class="col-md-6">
														<label class="control-label">Choose Category Color</label>
														<select class="form-control" data-placeholder="Choose a color..." name="category-color">
															<option value="success">Success</option>
															<option value="danger">Danger</option>
															<option value="info">Info</option>
															<option value="pink">Pink</option>
															<option value="primary">Primary</option>
															<option value="warning">Warning</option>
															<option value="orange">Orange</option>
															<option value="brown">Brown</option>
															<option value="teal">Teal</option>
															<option value="inverse">Inverse</option>
														</select>
													</div>
												</div>
											</form>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
											<button type="button" class="btn btn-danger save-category" data-dismiss="modal">Save</button>
										</div>
									</div>
								</div>
							</div>
							<!-- END MODAL -->
						</div>
					</div>
                </div>
				<div class="notification-box">
					<div class="msg-sidebar notifications msg-noti">
						<div class="topnav-dropdown-header">
							<span>Messages</span>
						</div>
						<div class="drop-scroll msg-list-scroll">
							<ul class="list-box">
								<li>
									<a href="chat.php">
										<div class="list-item">
											<div class="list-left">
												<span class="avatar">R</span>
											</div>
											<div class="list-body">
												<span class="message-author">Richard Miles </span>
												<span class="message-time">12:28 AM</span>
												<div class="clearfix"></div>
												<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
											</div>
										</div>
									</a>
								</li>
								<li>
									<a href="chat.php">
										<div class="list-item new-message">
											<div class="list-left">
												<span class="avatar">J</span>
											</div>
											<div class="list-body">
												<span class="message-author">John Doe</span>
												<span class="message-time">1 Aug</span>
												<div class="clearfix"></div>
												<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
											</div>
										</div>
									</a>
								</li>
								<li>
									<a href="chat.php">
										<div class="list-item">
											<div class="list-left">
												<span class="avatar">T</span>
											</div>
											<div class="list-body">
												<span class="message-author"> Tarah Shropshire </span>
												<span class="message-time">12:28 AM</span>
												<div class="clearfix"></div>
												<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
											</div>
										</div>
									</a>
								</li>
								<li>
									<a href="chat.php">
										<div class="list-item">
											<div class="list-left">
												<span class="avatar">M</span>
											</div>
											<div class="list-body">
												<span class="message-author">Mike Litorus</span>
												<span class="message-time">12:28 AM</span>
												<div class="clearfix"></div>
												<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
											</div>
										</div>
									</a>
								</li>
								<li>
									<a href="chat.php">
										<div class="list-item">
											<div class="list-left">
												<span class="avatar">C</span>
											</div>
											<div class="list-body">
												<span class="message-author"> Catherine Manseau </span>
												<span class="message-time">12:28 AM</span>
												<div class="clearfix"></div>
												<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
											</div>
										</div>
									</a>
								</li>
								<li>
									<a href="chat.php">
										<div class="list-item">
											<div class="list-left">
												<span class="avatar">D</span>
											</div>
											<div class="list-body">
												<span class="message-author"> Domenic Houston </span>
												<span class="message-time">12:28 AM</span>
												<div class="clearfix"></div>
												<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
											</div>
										</div>
									</a>
								</li>
								<li>
									<a href="chat.php">
										<div class="list-item">
											<div class="list-left">
												<span class="avatar">B</span>
											</div>
											<div class="list-body">
												<span class="message-author"> Buster Wigton </span>
												<span class="message-time">12:28 AM</span>
												<div class="clearfix"></div>
												<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
											</div>
										</div>
									</a>
								</li>
								<li>
									<a href="chat.php">
										<div class="list-item">
											<div class="list-left">
												<span class="avatar">R</span>
											</div>
											<div class="list-body">
												<span class="message-author"> Rolland Webber </span>
												<span class="message-time">12:28 AM</span>
												<div class="clearfix"></div>
												<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
											</div>
										</div>
									</a>
								</li>
								<li>
									<a href="chat.php">
										<div class="list-item">
											<div class="list-left">
												<span class="avatar">C</span>
											</div>
											<div class="list-body">
												<span class="message-author"> Claire Mapes </span>
												<span class="message-time">12:28 AM</span>
												<div class="clearfix"></div>
												<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
											</div>
										</div>
									</a>
								</li>
								<li>
									<a href="chat.php">
										<div class="list-item">
											<div class="list-left">
												<span class="avatar">M</span>
											</div>
											<div class="list-body">
												<span class="message-author">Melita Faucher</span>
												<span class="message-time">12:28 AM</span>
												<div class="clearfix"></div>
												<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
											</div>
										</div>
									</a>
								</li>
								<li>
									<a href="chat.php">
										<div class="list-item">
											<div class="list-left">
												<span class="avatar">J</span>
											</div>
											<div class="list-body">
												<span class="message-author">Jeffery Lalor</span>
												<span class="message-time">12:28 AM</span>
												<div class="clearfix"></div>
												<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
											</div>
										</div>
									</a>
								</li>
								<li>
									<a href="chat.php">
										<div class="list-item">
											<div class="list-left">
												<span class="avatar">L</span>
											</div>
											<div class="list-body">
												<span class="message-author">Loren Gatlin</span>
												<span class="message-time">12:28 AM</span>
												<div class="clearfix"></div>
												<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
											</div>
										</div>
									</a>
								</li>
								<li>
									<a href="chat.php">
										<div class="list-item">
											<div class="list-left">
												<span class="avatar">T</span>
											</div>
											<div class="list-body">
												<span class="message-author">Tarah Shropshire</span>
												<span class="message-time">12:28 AM</span>
												<div class="clearfix"></div>
												<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
											</div>
										</div>
									</a>
								</li>
							</ul>
						</div>
						<div class="topnav-dropdown-footer">
							<a href="chat.php">See all messages</a>
						</div>
					</div>
				</div>
            </div>
			<div id="add_event" class="modal custom-modal fade" role="dialog">
				<div class="modal-dialog">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<div class="modal-content modal-md">
						<div class="modal-header">
							<h4 class="modal-title">Add Event</h4>
						</div>
						<div class="modal-body">
							<form>
								<div class="form-group">
									<label>Event Name <span class="text-danger">*</span></label>
									<input class="form-control" required="" type="text">
								</div>
								<div class="form-group">
									<label>Event Date <span class="text-danger">*</span></label>
									<div class="cal-icon"><input class="form-control datetimepicker" type="text"></div>
								</div>
								<div class="m-t-20 text-center">
									<button class="btn btn-primary">Create Event</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
        </div>
		<div class="sidebar-overlay" data-reff="#sidebar"></div>
        <script type="text/javascript" src="assets/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="assets/js/jquery.slimscroll.js"></script>
		<script type="text/javascript" src="assets/js/select2.min.js"></script>
		<script type="text/javascript" src="assets/js/moment.min.js"></script>
		<script type="text/javascript" src="assets/js/jquery-ui.min.php"></script>
        <script type="text/javascript" src="assets/js/fullcalendar.min.js"></script>
        <script type="text/javascript" src="assets/js/jquery.fullcalendar.js"></script>
		<script type="text/javascript" src="assets/js/bootstrap-datetimepicker.min.js"></script>
		<script type="text/javascript" src="assets/js/app.js"></script>
    </body>

<!-- Mirrored from dreamguys.co.in/smarthr/blue/events.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Oct 2018 15:26:44 GMT -->
</html>