<!DOCTYPE html>
<html>

<?php include ('head.php') ?>
    <body>
        <div class="main-wrapper">
            <?php include ('header.php') ?>
            <?php include ('sidebar.php') ?>
            <div class="page-wrapper">
                <div class="content container-fluid">
					<div class="row">
						<div class="col-xs-4">
							<h4 class="page-title">Employee</h4>
						</div>
						<div class="col-xs-8 text-right m-b-30">
							<a href="#" class="btn btn-primary pull-right rounded" data-toggle="modal" data-target="#add_employee"><i class="fa fa-plus"></i> Add Employee</a>
							<div class="view-icons">
								<a href="employees.php" class="grid-view btn btn-link"><i class="fa fa-th"></i></a>
								<a href="employees-list.php" class="list-view btn btn-link active"><i class="fa fa-bars"></i></a>
							</div>
						</div>
					</div>
					<div class="row filter-row">
						<div class="col-sm-3 col-xs-6">  
							<div class="form-group form-focus">
								<label class="control-label">Employee ID</label>
								<input type="text" class="form-control floating" />
							</div>
						</div>
						<div class="col-sm-3 col-xs-6">  
							<div class="form-group form-focus">
								<label class="control-label">Employee Name</label>
								<input type="text" class="form-control floating" />
							</div>
						</div>
						<div class="col-sm-3 col-xs-6"> 
							<div class="form-group form-focus select-focus">
								<label class="control-label">Designation</label>
								<select class="select floating"> 
									<option value="">Select Designation</option>
									<option value="">Web Developer</option>
									<option value="1">Web Designer</option>
									<option value="1">Android Developer</option>
									<option value="1">Ios Developer</option>
								</select>
							</div>
						</div>
						<div class="col-sm-3 col-xs-6">  
							<a href="#" class="btn btn-success btn-block"> Search </a>  
						</div>     
                    </div>
					<div class="row">
						<div class="col-md-12">
							<div class="table-responsive">
								<table class="table table-striped custom-table datatable">
									<thead>
										<tr>
											<th style="width:30%;">Name</th>
											<th>Employee ID</th>
											<th>Email</th>
											<th>Mobile</th>
											<th>Join Date</th>
											<th>Role</th>
											<th class="text-right">Action</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<a href="profile.php" class="avatar">J</a>
												<h2><a href="profile.php">John Doe <span>Web Designer</span></a></h2>
											</td>
											<td>FT-0001</td>
											<td>johndoe@example.com</td>
											<td>9876543210</td>
											<td>1 Jan 2013</td>
											<td>
												<div class="dropdown">
													<a class="btn btn-white btn-sm rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Web Developer <i class="caret"></i></a>
													<ul class="dropdown-menu">
														<li><a href="#">Software Engineer</a></li>
														<li><a href="#">Software Tester</a></li>
														<li><a href="#">Frontend Developer</a></li>
														<li><a href="#">UI/UX Developer</a></li>
													</ul>
												</div>
											</td>
											<td class="text-right">
												<div class="dropdown">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
													<ul class="dropdown-menu pull-right">
														<li><a href="#" data-toggle="modal" data-target="#edit_employee"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
														<li><a href="#" data-toggle="modal" data-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
													</ul>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<a href="profile.php" class="avatar">R</a>
												<h2><a href="profile.php">Richard Miles <span>Web Developer</span></a></h2>
											</td>
											<td>FT-0002</td>
											<td>richardmiles@example.com</td>
											<td>9876543210</td>
											<td>18 Mar 2014</td>
											<td>
												<div class="dropdown">
													<a class="btn btn-white btn-sm rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Web Developer <i class="caret"></i></a>
													<ul class="dropdown-menu">
														<li><a href="#">Software Engineer</a></li>
														<li><a href="#">Software Tester</a></li>
														<li><a href="#">Frontend Developer</a></li>
														<li><a href="#">UI/UX Developer</a></li>
													</ul>
												</div>
											</td>
											<td class="text-right">
												<div class="dropdown">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
													<ul class="dropdown-menu pull-right">
														<li><a href="#" data-toggle="modal" data-target="#edit_employee"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
														<li><a href="#" data-toggle="modal" data-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
													</ul>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<a href="profile.php" class="avatar">J</a>
												<h2><a href="profile.php">John Smith <span>Android Developer</span></a></h2>
											</td>
											<td>FT-0003</td>
											<td>johnsmith@example.com</td>
											<td>9876543210</td>
											<td>1 Apr 2014</td>
											<td>
												<div class="dropdown">
													<a class="btn btn-white btn-sm rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Web Developer <i class="caret"></i></a>
													<ul class="dropdown-menu">
														<li><a href="#">Software Engineer</a></li>
														<li><a href="#">Software Tester</a></li>
														<li><a href="#">Frontend Developer</a></li>
														<li><a href="#">UI/UX Developer</a></li>
													</ul>
												</div>
											</td>
											<td class="text-right">
												<div class="dropdown">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
													<ul class="dropdown-menu pull-right">
														<li><a href="#" data-toggle="modal" data-target="#edit_employee"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
														<li><a href="#" data-toggle="modal" data-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
													</ul>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<a href="profile.php" class="avatar">M</a>
												<h2><a href="profile.php">Mike Litorus <span>IOS Developer</span></a></h2>
											</td>
											<td>FT-0004</td>
											<td>mikelitorus@example.com</td>
											<td>9876543210</td>
											<td>1 Apr 2014</td>
											<td>
												<div class="dropdown">
													<a class="btn btn-white btn-sm rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Web Developer <i class="caret"></i></a>
													<ul class="dropdown-menu">
														<li><a href="#">Software Engineer</a></li>
														<li><a href="#">Software Tester</a></li>
														<li><a href="#">Frontend Developer</a></li>
														<li><a href="#">UI/UX Developer</a></li>
													</ul>
												</div>
											</td>
											<td class="text-right">
												<div class="dropdown">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
													<ul class="dropdown-menu pull-right">
														<li><a href="#" data-toggle="modal" data-target="#edit_employee"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
														<li><a href="#" data-toggle="modal" data-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
													</ul>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<a href="profile.php" class="avatar">W</a>
												<h2><a href="profile.php">Wilmer Deluna <span>Team Leader</span></a></h2>
											</td>
											<td>FT-0005</td>
											<td>wilmerdeluna@example.com</td>
											<td>9876543210</td>
											<td>22 May 2014</td>
											<td>
												<div class="dropdown">
													<a class="btn btn-white btn-sm rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Web Developer <i class="caret"></i></a>
													<ul class="dropdown-menu">
														<li><a href="#">Software Engineer</a></li>
														<li><a href="#">Software Tester</a></li>
														<li><a href="#">Frontend Developer</a></li>
														<li><a href="#">UI/UX Developer</a></li>
													</ul>
												</div>
											</td>
											<td class="text-right">
												<div class="dropdown">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
													<ul class="dropdown-menu pull-right">
														<li><a href="#" data-toggle="modal" data-target="#edit_employee"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
														<li><a href="#" data-toggle="modal" data-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
													</ul>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<a href="profile.php" class="avatar">J</a>
												<h2><a href="profile.php">Jeffrey Warden <span>Web Developer</span></a></h2>
											</td>
											<td>FT-0006</td>
											<td>jeffreywarden@example.com</td>
											<td>9876543210</td>
											<td>16 Jun 2013</td>
											<td>
												<div class="dropdown">
													<a class="btn btn-white btn-sm rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Web Developer <i class="caret"></i></a>
													<ul class="dropdown-menu">
														<li><a href="#">Software Engineer</a></li>
														<li><a href="#">Software Tester</a></li>
														<li><a href="#">Frontend Developer</a></li>
														<li><a href="#">UI/UX Developer</a></li>
													</ul>
												</div>
											</td>
											<td class="text-right">
												<div class="dropdown">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
													<ul class="dropdown-menu pull-right">
														<li><a href="#" data-toggle="modal" data-target="#edit_employee"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
														<li><a href="#" data-toggle="modal" data-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
													</ul>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<a href="profile.php" class="avatar">B</a>
												<h2><a href="profile.php">Bernardo Galaviz <span>Web Developer</span></a></h2>
											</td>
											<td>FT-0007</td>
											<td>bernardogalaviz@example.com</td>
											<td>9876543210</td>
											<td>1 Jan 2013</td>
											<td>
												<div class="dropdown">
													<a class="btn btn-white btn-sm rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Web Developer <i class="caret"></i></a>
													<ul class="dropdown-menu">
														<li><a href="#">Software Engineer</a></li>
														<li><a href="#">Software Tester</a></li>
														<li><a href="#">Frontend Developer</a></li>
														<li><a href="#">UI/UX Developer</a></li>
													</ul>
												</div>
											</td>
											<td class="text-right">
												<div class="dropdown">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
													<ul class="dropdown-menu pull-right">
														<li><a href="#" data-toggle="modal" data-target="#edit_employee"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
														<li><a href="#" data-toggle="modal" data-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
													</ul>
												</div>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
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
			<div id="add_employee" class="modal custom-modal fade" role="dialog">
				<div class="modal-dialog">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<div class="modal-content modal-lg">
						<div class="modal-header">
							<h4 class="modal-title">Add Employee</h4>
						</div>
						<div class="modal-body">
							<form class="m-b-30">
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">First Name <span class="text-danger">*</span></label>
											<input class="form-control" type="text">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Last Name</label>
											<input class="form-control" type="text">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Username <span class="text-danger">*</span></label>
											<input class="form-control" type="text">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Email <span class="text-danger">*</span></label>
											<input class="form-control" type="email">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Password</label>
											<input class="form-control" type="password">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Confirm Password</label>
											<input class="form-control" type="password">
										</div>
									</div>
									<div class="col-sm-6">  
										<div class="form-group">
											<label class="control-label">Employee ID <span class="text-danger">*</span></label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-sm-6">  
										<div class="form-group">
											<label class="control-label">Joining Date <span class="text-danger">*</span></label>
											<div class="cal-icon"><input class="form-control datetimepicker" type="text"></div>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Phone </label>
											<input class="form-control" type="text">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Company</label>
											<select class="select">
												<option value="">Global Technologies</option>
												<option value="1">Delta Infotech</option>
											</select>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Designation</label>
											<select class="select">
												<option>Web Developer</option>
												<option>Web Designer</option>
												<option>SEO Analyst</option>
											</select>
										</div>
									</div>
								</div>
<!--								<div class="table-responsive m-t-15">-->
<!--									<table class="table table-striped custom-table">-->
<!--										<thead>-->
<!--											<tr>-->
<!--												<th>Module Permission</th>-->
<!--												<th class="text-center">Read</th>-->
<!--												<th class="text-center">Write</th>-->
<!--												<th class="text-center">Create</th>-->
<!--												<th class="text-center">Delete</th>-->
<!--												<th class="text-center">Import</th>-->
<!--												<th class="text-center">Export</th>-->
<!--											</tr>-->
<!--										</thead>-->
<!--										<tbody>-->
<!--											<tr>-->
<!--												<td>Holidays</td>-->
<!--												<td class="text-center">-->
<!--													<input checked="" type="checkbox">-->
<!--												</td>-->
<!--												<td class="text-center">-->
<!--													<input type="checkbox">-->
<!--												</td>-->
<!--												<td class="text-center">-->
<!--													<input type="checkbox">-->
<!--												</td>-->
<!--												<td class="text-center">-->
<!--													<input type="checkbox">-->
<!--												</td>-->
<!--												<td class="text-center">-->
<!--													<input type="checkbox">-->
<!--												</td>-->
<!--												<td class="text-center">-->
<!--													<input type="checkbox">-->
<!--												</td>-->
<!--											</tr>-->
<!--											<tr>-->
<!--												<td>Leave Request</td>-->
<!--												<td class="text-center">-->
<!--													<input checked="" type="checkbox">-->
<!--												</td>-->
<!--												<td class="text-center">-->
<!--													<input checked="" type="checkbox">-->
<!--												</td>-->
<!--												<td class="text-center">-->
<!--													<input checked="" type="checkbox">-->
<!--												</td>-->
<!--												<td class="text-center">-->
<!--													<input type="checkbox">-->
<!--												</td>-->
<!--												<td class="text-center">-->
<!--													<input type="checkbox">-->
<!--												</td>-->
<!--												<td class="text-center">-->
<!--													<input type="checkbox">-->
<!--												</td>-->
<!--											</tr>-->
<!--											<tr>-->
<!--												<td>Clients</td>-->
<!--												<td class="text-center">-->
<!--													<input checked="" type="checkbox">-->
<!--												</td>-->
<!--												<td class="text-center">-->
<!--													<input checked="" type="checkbox">-->
<!--												</td>-->
<!--												<td class="text-center">-->
<!--													<input checked="" type="checkbox">-->
<!--												</td>-->
<!--												<td class="text-center">-->
<!--													<input type="checkbox">-->
<!--												</td>-->
<!--												<td class="text-center">-->
<!--													<input type="checkbox">-->
<!--												</td>-->
<!--												<td class="text-center">-->
<!--													<input type="checkbox">-->
<!--												</td>-->
<!--											</tr>-->
<!--											<tr>-->
<!--												<td>Projects</td>-->
<!--												<td class="text-center">-->
<!--													<input checked="" type="checkbox">-->
<!--												</td>-->
<!--												<td class="text-center">-->
<!--													<input type="checkbox">-->
<!--												</td>-->
<!--												<td class="text-center">-->
<!--													<input type="checkbox">-->
<!--												</td>-->
<!--												<td class="text-center">-->
<!--													<input type="checkbox">-->
<!--												</td>-->
<!--												<td class="text-center">-->
<!--													<input type="checkbox">-->
<!--												</td>-->
<!--												<td class="text-center">-->
<!--													<input type="checkbox">-->
<!--												</td>-->
<!--											</tr>-->
<!--											<tr>-->
<!--												<td>Tasks</td>-->
<!--												<td class="text-center">-->
<!--													<input checked="" type="checkbox">-->
<!--												</td>-->
<!--												<td class="text-center">-->
<!--													<input checked="" type="checkbox">-->
<!--												</td>-->
<!--												<td class="text-center">-->
<!--													<input checked="" type="checkbox">-->
<!--												</td>-->
<!--												<td class="text-center">-->
<!--													<input checked="" type="checkbox">-->
<!--												</td>-->
<!--												<td class="text-center">-->
<!--													<input type="checkbox">-->
<!--												</td>-->
<!--												<td class="text-center">-->
<!--													<input type="checkbox">-->
<!--												</td>-->
<!--											</tr>-->
<!--											<tr>-->
<!--												<td>Chats</td>-->
<!--												<td class="text-center">-->
<!--													<input checked="" type="checkbox">-->
<!--												</td>-->
<!--												<td class="text-center">-->
<!--													<input checked="" type="checkbox">-->
<!--												</td>-->
<!--												<td class="text-center">-->
<!--													<input checked="" type="checkbox">-->
<!--												</td>-->
<!--												<td class="text-center">-->
<!--													<input checked="" type="checkbox">-->
<!--												</td>-->
<!--												<td class="text-center">-->
<!--													<input type="checkbox">-->
<!--												</td>-->
<!--												<td class="text-center">-->
<!--													<input type="checkbox">-->
<!--												</td>-->
<!--											</tr>-->
<!--											<tr>-->
<!--												<td>Assets</td>-->
<!--												<td class="text-center">-->
<!--													<input checked="" type="checkbox">-->
<!--												</td>-->
<!--												<td class="text-center">-->
<!--													<input checked="" type="checkbox">-->
<!--												</td>-->
<!--												<td class="text-center">-->
<!--													<input checked="" type="checkbox">-->
<!--												</td>-->
<!--												<td class="text-center">-->
<!--													<input checked="" type="checkbox">-->
<!--												</td>-->
<!--												<td class="text-center">-->
<!--													<input type="checkbox">-->
<!--												</td>-->
<!--												<td class="text-center">-->
<!--													<input type="checkbox">-->
<!--												</td>-->
<!--											</tr>-->
<!--											<tr>-->
<!--												<td>Timing Sheets</td>-->
<!--												<td class="text-center">-->
<!--													<input checked="" type="checkbox">-->
<!--												</td>-->
<!--												<td class="text-center">-->
<!--													<input checked="" type="checkbox">-->
<!--												</td>-->
<!--												<td class="text-center">-->
<!--													<input checked="" type="checkbox">-->
<!--												</td>-->
<!--												<td class="text-center">-->
<!--													<input checked="" type="checkbox">-->
<!--												</td>-->
<!--												<td class="text-center">-->
<!--													<input type="checkbox">-->
<!--												</td>-->
<!--												<td class="text-center">-->
<!--													<input type="checkbox">-->
<!--												</td>-->
<!--											</tr>-->
<!--										</tbody>-->
<!--									</table>-->
<!--								</div>-->
								<div class="m-t-20 text-center">
									<button class="btn btn-primary">Create Employee</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div id="edit_employee" class="modal custom-modal fade" role="dialog">
				<div class="modal-dialog">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<div class="modal-content modal-lg">
						<div class="modal-header">
							<h4 class="modal-title">Edit Employee</h4>
						</div>
						<div class="modal-body">
							<form class="m-b-30">
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">First Name <span class="text-danger">*</span></label>
											<input class="form-control" value="John" type="text">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Last Name</label>
											<input class="form-control" value="Doe" type="text">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Username <span class="text-danger">*</span></label>
											<input class="form-control" value="johndoe" type="text">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Email <span class="text-danger">*</span></label>
											<input class="form-control" value="johndoe@example.com" type="email">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Password</label>
											<input class="form-control" value="johndoe" type="password">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Confirm Password</label>
											<input class="form-control" value="johndoe" type="password">
										</div>
									</div>
									<div class="col-sm-6">  
										<div class="form-group">
											<label class="control-label">Employee ID <span class="text-danger">*</span></label>
											<input type="text" value="FT-0001" readonly="" class="form-control floating">
										</div>
									</div>
									<div class="col-sm-6">  
										<div class="form-group">
											<label class="control-label">Joining Date <span class="text-danger">*</span></label>
											<div class="cal-icon"><input class="form-control datetimepicker" type="text"></div>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Phone </label>
											<input class="form-control" value="9843014641" type="text">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Company</label>
											<select class="select">
												<option value="">Global Technologies</option>
												<option value="1">Delta Infotech</option>
											</select>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Designation</label>
											<select class="select">
												<option>Web Developer</option>
												<option>Web Designer</option>
												<option>SEO Analyst</option>
											</select>
										</div>
									</div>
								</div>
<!--								<div class="table-responsive m-t-15">-->
<!--									<table class="table table-striped custom-table">-->
<!--										<thead>-->
<!--											<tr>-->
<!--												<th>Module Permission</th>-->
<!--												<th class="text-center">Read</th>-->
<!--												<th class="text-center">Write</th>-->
<!--												<th class="text-center">Create</th>-->
<!--												<th class="text-center">Delete</th>-->
<!--												<th class="text-center">Import</th>-->
<!--												<th class="text-center">Export</th>-->
<!--											</tr>-->
<!--										</thead>-->
<!--										<tbody>-->
<!--											<tr>-->
<!--												<td>Holidays</td>-->
<!--												<td class="text-center">-->
<!--													<input checked="" type="checkbox">-->
<!--												</td>-->
<!--												<td class="text-center">-->
<!--													<input type="checkbox">-->
<!--												</td>-->
<!--												<td class="text-center">-->
<!--													<input type="checkbox">-->
<!--												</td>-->
<!--												<td class="text-center">-->
<!--													<input type="checkbox">-->
<!--												</td>-->
<!--												<td class="text-center">-->
<!--													<input type="checkbox">-->
<!--												</td>-->
<!--												<td class="text-center">-->
<!--													<input type="checkbox">-->
<!--												</td>-->
<!--											</tr>-->
<!--											<tr>-->
<!--												<td>Leave Request</td>-->
<!--												<td class="text-center">-->
<!--													<input checked="" type="checkbox">-->
<!--												</td>-->
<!--												<td class="text-center">-->
<!--													<input checked="" type="checkbox">-->
<!--												</td>-->
<!--												<td class="text-center">-->
<!--													<input checked="" type="checkbox">-->
<!--												</td>-->
<!--												<td class="text-center">-->
<!--													<input type="checkbox">-->
<!--												</td>-->
<!--												<td class="text-center">-->
<!--													<input type="checkbox">-->
<!--												</td>-->
<!--												<td class="text-center">-->
<!--													<input type="checkbox">-->
<!--												</td>-->
<!--											</tr>-->
<!--											<tr>-->
<!--												<td>Projects</td>-->
<!--												<td class="text-center">-->
<!--													<input checked="" type="checkbox">-->
<!--												</td>-->
<!--												<td class="text-center">-->
<!--													<input type="checkbox">-->
<!--												</td>-->
<!--												<td class="text-center">-->
<!--													<input type="checkbox">-->
<!--												</td>-->
<!--												<td class="text-center">-->
<!--													<input type="checkbox">-->
<!--												</td>-->
<!--												<td class="text-center">-->
<!--													<input type="checkbox">-->
<!--												</td>-->
<!--												<td class="text-center">-->
<!--													<input type="checkbox">-->
<!--												</td>-->
<!--											</tr>-->
<!--											<tr>-->
<!--												<td>Tasks</td>-->
<!--												<td class="text-center">-->
<!--													<input checked="" type="checkbox">-->
<!--												</td>-->
<!--												<td class="text-center">-->
<!--													<input checked="" type="checkbox">-->
<!--												</td>-->
<!--												<td class="text-center">-->
<!--													<input checked="" type="checkbox">-->
<!--												</td>-->
<!--												<td class="text-center">-->
<!--													<input checked="" type="checkbox">-->
<!--												</td>-->
<!--												<td class="text-center">-->
<!--													<input type="checkbox">-->
<!--												</td>-->
<!--												<td class="text-center">-->
<!--													<input type="checkbox">-->
<!--												</td>-->
<!--											</tr>-->
<!--											<tr>-->
<!--												<td>Chats</td>-->
<!--												<td class="text-center">-->
<!--													<input checked="" type="checkbox">-->
<!--												</td>-->
<!--												<td class="text-center">-->
<!--													<input checked="" type="checkbox">-->
<!--												</td>-->
<!--												<td class="text-center">-->
<!--													<input checked="" type="checkbox">-->
<!--												</td>-->
<!--												<td class="text-center">-->
<!--													<input checked="" type="checkbox">-->
<!--												</td>-->
<!--												<td class="text-center">-->
<!--													<input type="checkbox">-->
<!--												</td>-->
<!--												<td class="text-center">-->
<!--													<input type="checkbox">-->
<!--												</td>-->
<!--											</tr>-->
<!--										</tbody>-->
<!--									</table>-->
<!--								</div>-->
								<div class="m-t-20 text-center">
									<button class="btn btn-primary">Save Changes</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div id="delete_employee" class="modal custom-modal fade" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content modal-md">
						<div class="modal-header">
							<h4 class="modal-title">Delete Employee</h4>
						</div>
						<form>
							<div class="modal-body card-box">
								<p>Are you sure want to delete this?</p>
								<div class="m-t-20"> <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
									<button type="submit" class="btn btn-danger">Delete</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
        </div>
		<div class="sidebar-overlay" data-reff="#sidebar"></div>
        <script type="text/javascript" src="assets/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="assets/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" src="assets/js/dataTables.bootstrap.min.js"></script>
		<script type="text/javascript" src="assets/js/jquery.slimscroll.js"></script>
		<script type="text/javascript" src="assets/js/select2.min.js"></script>
		<script type="text/javascript" src="assets/js/moment.min.js"></script>
		<script type="text/javascript" src="assets/js/bootstrap-datetimepicker.min.js"></script>
		<script type="text/javascript" src="assets/js/app.js"></script>
    </body>

<!-- Mirrored from dreamguys.co.in/smarthr/blue/employees-list.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Oct 2018 15:26:47 GMT -->
</html>