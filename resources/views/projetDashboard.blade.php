@extends('layouts.app')
@section('contenu')
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Toolbar-->
						<div class="toolbar" id="kt_toolbar">
							<!--begin::Container-->
							<div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
								<!--begin::Page title-->
								<div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
									<!--begin::Title-->
									<h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">View Project</h1>
									<!--end::Title-->
									<!--begin::Separator-->
									<span class="h-20px border-gray-300 border-start mx-4"></span>
									<!--end::Separator-->
									<!--begin::Breadcrumb-->
									<ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
										<!--begin::Item-->
										<li class="breadcrumb-item text-muted">
											<a href="../../demo1/dist/index.html" class="text-muted text-hover-primary">Home</a>
										</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="breadcrumb-item">
											<span class="bullet bg-gray-300 w-5px h-2px"></span>
										</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="breadcrumb-item text-muted">Projects</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="breadcrumb-item">
											<span class="bullet bg-gray-300 w-5px h-2px"></span>
										</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="breadcrumb-item text-dark">View Project</li>
										<!--end::Item-->
									</ul>
									<!--end::Breadcrumb-->
								</div>
								<!--end::Page title-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Toolbar-->
						<!--begin::Post-->
						<div class="post d-flex flex-column-fluid" id="kt_post">
							<!--begin::Container-->
							<div id="kt_content_container" class="container-xxl">
								<!--begin::Navbar-->
								@include('layouts.projetNavbar')
								<!--end::Navbar-->
								<!--begin::Row-->
								<div class="row g-6 g-xl-9">
									<!--begin::Col-->
									<div class="col-lg-6">
										<!--begin::Summary-->
										<div class="card card-flush h-lg-100">
											<!--begin::Card header-->
											<div class="card-header mt-6">
												<!--begin::Card title-->
												<div class="card-title flex-column">
													<h3 class="fw-bolder mb-1">Tasks Summary</h3>
													<div class="fs-6 fw-bold text-gray-400">24 Overdue Tasks</div>
												</div>
												<!--end::Card title-->
												<!--begin::Card toolbar-->
												<div class="card-toolbar">
													<a href="#" class="btn btn-light btn-sm">View Tasks</a>
												</div>
												<!--end::Card toolbar-->
											</div>
											<!--end::Card header-->
											<!--begin::Card body-->
											<div class="card-body p-9 pt-5">
												<!--begin::Wrapper-->
												<div class="d-flex flex-wrap">
													<!--begin::Chart-->
													<div class="position-relative d-flex flex-center h-175px w-175px me-15 mb-7">
														<div class="position-absolute translate-middle start-50 top-50 d-flex flex-column flex-center">
															<span class="fs-2qx fw-bolder">237</span>
															<span class="fs-6 fw-bold text-gray-400">Total Tasks</span>
														</div>
														<canvas id="project_overview_chart"></canvas>
													</div>
													<!--end::Chart-->
													<!--begin::Labels-->
													<div class="d-flex flex-column justify-content-center flex-row-fluid pe-11 mb-5">
														<!--begin::Label-->
														<div class="d-flex fs-6 fw-bold align-items-center mb-3">
															<div class="bullet bg-primary me-3"></div>
															<div class="text-gray-400">Active</div>
															<div class="ms-auto fw-bolder text-gray-700">30</div>
														</div>
														<!--end::Label-->
														<!--begin::Label-->
														<div class="d-flex fs-6 fw-bold align-items-center mb-3">
															<div class="bullet bg-success me-3"></div>
															<div class="text-gray-400">Completed</div>
															<div class="ms-auto fw-bolder text-gray-700">45</div>
														</div>
														<!--end::Label-->
														<!--begin::Label-->
														<div class="d-flex fs-6 fw-bold align-items-center mb-3">
															<div class="bullet bg-danger me-3"></div>
															<div class="text-gray-400">Overdue</div>
															<div class="ms-auto fw-bolder text-gray-700">0</div>
														</div>
														<!--end::Label-->
														<!--begin::Label-->
														<div class="d-flex fs-6 fw-bold align-items-center">
															<div class="bullet bg-gray-300 me-3"></div>
															<div class="text-gray-400">Yet to start</div>
															<div class="ms-auto fw-bolder text-gray-700">25</div>
														</div>
														<!--end::Label-->
													</div>
													<!--end::Labels-->
												</div>
												<!--end::Wrapper-->
												<!--begin::Notice-->
												<div class="notice d-flex bg-light-primary rounded border-primary border border-dashed p-6">
													<!--begin::Wrapper-->
													<div class="d-flex flex-stack flex-grow-1">
														<!--begin::Content-->
														<div class="fw-bold">
															<div class="fs-6 text-gray-700">
															<a href="#" class="fw-bolder me-1">Invite New .NET Collaborators</a>to create great outstanding business to business .jsp modutr class scripts</div>
														</div>
														<!--end::Content-->
													</div>
													<!--end::Wrapper-->
												</div>
												<!--end::Notice-->
											</div>
											<!--end::Card body-->
										</div>
										<!--end::Summary-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-lg-6">
										<!--begin::Graph-->
										<div class="card card-flush h-lg-100">
											<!--begin::Card header-->
											<div class="card-header mt-6">
												<!--begin::Card title-->
												<div class="card-title flex-column">
													<h3 class="fw-bolder mb-1">Tasks Over Time</h3>
													<!--begin::Labels-->
													<div class="fs-6 d-flex text-gray-400 fs-6 fw-bold">
														<!--begin::Label-->
														<div class="d-flex align-items-center me-6">
														<span class="menu-bullet d-flex align-items-center me-2">
															<span class="bullet bg-success"></span>
														</span>Complete</div>
														<!--end::Label-->
														<!--begin::Label-->
														<div class="d-flex align-items-center">
														<span class="menu-bullet d-flex align-items-center me-2">
															<span class="bullet bg-primary"></span>
														</span>Incomplete</div>
														<!--end::Label-->
													</div>
													<!--end::Labels-->
												</div>
												<!--end::Card title-->
												<!--begin::Card toolbar-->
												<div class="card-toolbar">
													<!--begin::Select-->
													<select name="status" data-control="select2" data-hide-search="true" class="form-select form-select-solid form-select-sm fw-bolder w-100px">
														<option value="1">2020 Q1</option>
														<option value="2">2020 Q2</option>
														<option value="3" selected="selected">2020 Q3</option>
														<option value="4">2020 Q4</option>
													</select>
													<!--end::Select-->
												</div>
												<!--end::Card toolbar-->
											</div>
											<!--end::Card header-->
											<!--begin::Card body-->
											<div class="card-body pt-10 pb-0 px-5">
												<!--begin::Chart-->
												<div id="kt_project_overview_graph" class="card-rounded-bottom" style="height: 300px"></div>
												<!--end::Chart-->
											</div>
											<!--end::Card body-->
										</div>
										<!--end::Graph-->
									</div>
									<!--end::Col-->
								</div>
								<!--end::Row-->
								<!--begin::Table-->
								<div class="card card-flush mt-6 mt-xl-9">
									<!--begin::Card header-->
									<div class="card-header mt-5">
										<!--begin::Card title-->
										<div class="card-title flex-column">
											<h3 class="fw-bolder mb-1">Project Spendings</h3>
											<div class="fs-6 text-gray-400">Total $260,300 sepnt so far</div>
										</div>
										<!--begin::Card title-->
										<!--begin::Card toolbar-->
										<div class="card-toolbar my-1">
											<!--begin::Select-->
											<div class="me-6 my-1">
												<select id="kt_filter_year" name="year" data-control="select2" data-hide-search="true" class="w-125px form-select form-select-solid form-select-sm">
													<option value="All" selected="selected">All time</option>
													<option value="thisyear">This year</option>
													<option value="thismonth">This month</option>
													<option value="lastmonth">Last month</option>
													<option value="last90days">Last 90 days</option>
												</select>
											</div>
											<!--end::Select-->
											<!--begin::Select-->
											<div class="me-4 my-1">
												<select id="kt_filter_orders" name="orders" data-control="select2" data-hide-search="true" class="w-125px form-select form-select-solid form-select-sm">
													<option value="All" selected="selected">All Orders</option>
													<option value="Approved">Approved</option>
													<option value="Declined">Declined</option>
													<option value="In Progress">In Progress</option>
													<option value="In Transit">In Transit</option>
												</select>
											</div>
											<!--end::Select-->
											<!--begin::Search-->
											<div class="d-flex align-items-center position-relative my-1">
												<!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
												<span class="svg-icon svg-icon-3 position-absolute ms-3">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
														<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
												<input type="text" id="kt_filter_search" class="form-control form-control-solid form-select-sm w-150px ps-9" placeholder="Search Order" />
											</div>
											<!--end::Search-->
										</div>
										<!--begin::Card toolbar-->
									</div>
									<!--end::Card header-->
									<!--begin::Card body-->
									<div class="card-body pt-0">
										<!--begin::Table container-->
										<div class="table-responsive">
											<!--begin::Table-->
											<table id="kt_profile_overview_table" class="table table-row-bordered table-row-dashed gy-4 align-middle fw-bolder">
												<!--begin::Head-->
												<thead class="fs-7 text-gray-400 text-uppercase">
													<tr>
														<th class="min-w-250px">Manager</th>
														<th class="min-w-150px">Date</th>
														<th class="min-w-90px">Amount</th>
														<th class="min-w-90px">Status</th>
														<th class="min-w-50px text-end">Details</th>
													</tr>
												</thead>
												<!--end::Head-->
												<!--begin::Body-->
												<tbody class="fs-6">
													<tr>
														<td>
															<!--begin::User-->
															<div class="d-flex align-items-center">
																<!--begin::Wrapper-->
																<div class="me-5 position-relative">
																	<!--begin::Avatar-->
																	<div class="symbol symbol-35px symbol-circle">
																		<img alt="Pic" src="assets/media/avatars/300-6.jpg" />
																	</div>
																	<!--end::Avatar-->
																</div>
																<!--end::Wrapper-->
																<!--begin::Info-->
																<div class="d-flex flex-column justify-content-center">
																	<a href="" class="fs-6 text-gray-800 text-hover-primary">Emma Smith</a>
																	<div class="fw-bold text-gray-400">smith@kpmg.com</div>
																</div>
																<!--end::Info-->
															</div>
															<!--end::User-->
														</td>
														<td>Dec 20, 2022</td>
														<td>$617.00</td>
														<td>
															<span class="badge badge-light-danger fw-bolder px-4 py-3">Rejected</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-light btn-sm">View</a>
														</td>
													</tr>
													<tr>
														<td>
															<!--begin::User-->
															<div class="d-flex align-items-center">
																<!--begin::Wrapper-->
																<div class="me-5 position-relative">
																	<!--begin::Avatar-->
																	<div class="symbol symbol-35px symbol-circle">
																		<span class="symbol-label bg-light-danger text-danger fw-bold">M</span>
																	</div>
																	<!--end::Avatar-->
																	<!--begin::Online-->
																	<div class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
																	<!--end::Online-->
																</div>
																<!--end::Wrapper-->
																<!--begin::Info-->
																<div class="d-flex flex-column justify-content-center">
																	<a href="" class="fs-6 text-gray-800 text-hover-primary">Melody Macy</a>
																	<div class="fw-bold text-gray-400">melody@altbox.com</div>
																</div>
																<!--end::Info-->
															</div>
															<!--end::User-->
														</td>
														<td>Nov 10, 2022</td>
														<td>$580.00</td>
														<td>
															<span class="badge badge-light-warning fw-bolder px-4 py-3">Pending</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-light btn-sm">View</a>
														</td>
													</tr>
													<tr>
														<td>
															<!--begin::User-->
															<div class="d-flex align-items-center">
																<!--begin::Wrapper-->
																<div class="me-5 position-relative">
																	<!--begin::Avatar-->
																	<div class="symbol symbol-35px symbol-circle">
																		<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
																	</div>
																	<!--end::Avatar-->
																</div>
																<!--end::Wrapper-->
																<!--begin::Info-->
																<div class="d-flex flex-column justify-content-center">
																	<a href="" class="fs-6 text-gray-800 text-hover-primary">Max Smith</a>
																	<div class="fw-bold text-gray-400">max@kt.com</div>
																</div>
																<!--end::Info-->
															</div>
															<!--end::User-->
														</td>
														<td>Jun 24, 2022</td>
														<td>$516.00</td>
														<td>
															<span class="badge badge-light-success fw-bolder px-4 py-3">Approved</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-light btn-sm">View</a>
														</td>
													</tr>
													<tr>
														<td>
															<!--begin::User-->
															<div class="d-flex align-items-center">
																<!--begin::Wrapper-->
																<div class="me-5 position-relative">
																	<!--begin::Avatar-->
																	<div class="symbol symbol-35px symbol-circle">
																		<img alt="Pic" src="assets/media/avatars/300-5.jpg" />
																	</div>
																	<!--end::Avatar-->
																</div>
																<!--end::Wrapper-->
																<!--begin::Info-->
																<div class="d-flex flex-column justify-content-center">
																	<a href="" class="fs-6 text-gray-800 text-hover-primary">Sean Bean</a>
																	<div class="fw-bold text-gray-400">sean@dellito.com</div>
																</div>
																<!--end::Info-->
															</div>
															<!--end::User-->
														</td>
														<td>Nov 10, 2022</td>
														<td>$879.00</td>
														<td>
															<span class="badge badge-light-warning fw-bolder px-4 py-3">Pending</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-light btn-sm">View</a>
														</td>
													</tr>
													<tr>
														<td>
															<!--begin::User-->
															<div class="d-flex align-items-center">
																<!--begin::Wrapper-->
																<div class="me-5 position-relative">
																	<!--begin::Avatar-->
																	<div class="symbol symbol-35px symbol-circle">
																		<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
																	</div>
																	<!--end::Avatar-->
																</div>
																<!--end::Wrapper-->
																<!--begin::Info-->
																<div class="d-flex flex-column justify-content-center">
																	<a href="" class="fs-6 text-gray-800 text-hover-primary">Brian Cox</a>
																	<div class="fw-bold text-gray-400">brian@exchange.com</div>
																</div>
																<!--end::Info-->
															</div>
															<!--end::User-->
														</td>
														<td>Aug 19, 2022</td>
														<td>$439.00</td>
														<td>
															<span class="badge badge-light-info fw-bolder px-4 py-3">In progress</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-light btn-sm">View</a>
														</td>
													</tr>
													<tr>
														<td>
															<!--begin::User-->
															<div class="d-flex align-items-center">
																<!--begin::Wrapper-->
																<div class="me-5 position-relative">
																	<!--begin::Avatar-->
																	<div class="symbol symbol-35px symbol-circle">
																		<span class="symbol-label bg-light-warning text-warning fw-bold">C</span>
																	</div>
																	<!--end::Avatar-->
																	<!--begin::Online-->
																	<div class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
																	<!--end::Online-->
																</div>
																<!--end::Wrapper-->
																<!--begin::Info-->
																<div class="d-flex flex-column justify-content-center">
																	<a href="" class="fs-6 text-gray-800 text-hover-primary">Mikaela Collins</a>
																	<div class="fw-bold text-gray-400">mik@pex.com</div>
																</div>
																<!--end::Info-->
															</div>
															<!--end::User-->
														</td>
														<td>May 05, 2022</td>
														<td>$435.00</td>
														<td>
															<span class="badge badge-light-danger fw-bolder px-4 py-3">Rejected</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-light btn-sm">View</a>
														</td>
													</tr>
													<tr>
														<td>
															<!--begin::User-->
															<div class="d-flex align-items-center">
																<!--begin::Wrapper-->
																<div class="me-5 position-relative">
																	<!--begin::Avatar-->
																	<div class="symbol symbol-35px symbol-circle">
																		<img alt="Pic" src="assets/media/avatars/300-9.jpg" />
																	</div>
																	<!--end::Avatar-->
																</div>
																<!--end::Wrapper-->
																<!--begin::Info-->
																<div class="d-flex flex-column justify-content-center">
																	<a href="" class="fs-6 text-gray-800 text-hover-primary">Francis Mitcham</a>
																	<div class="fw-bold text-gray-400">f.mit@kpmg.com</div>
																</div>
																<!--end::Info-->
															</div>
															<!--end::User-->
														</td>
														<td>Oct 25, 2022</td>
														<td>$685.00</td>
														<td>
															<span class="badge badge-light-info fw-bolder px-4 py-3">In progress</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-light btn-sm">View</a>
														</td>
													</tr>
													<tr>
														<td>
															<!--begin::User-->
															<div class="d-flex align-items-center">
																<!--begin::Wrapper-->
																<div class="me-5 position-relative">
																	<!--begin::Avatar-->
																	<div class="symbol symbol-35px symbol-circle">
																		<span class="symbol-label bg-light-danger text-danger fw-bold">O</span>
																	</div>
																	<!--end::Avatar-->
																	<!--begin::Online-->
																	<div class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
																	<!--end::Online-->
																</div>
																<!--end::Wrapper-->
																<!--begin::Info-->
																<div class="d-flex flex-column justify-content-center">
																	<a href="" class="fs-6 text-gray-800 text-hover-primary">Olivia Wild</a>
																	<div class="fw-bold text-gray-400">olivia@corpmail.com</div>
																</div>
																<!--end::Info-->
															</div>
															<!--end::User-->
														</td>
														<td>Aug 19, 2022</td>
														<td>$950.00</td>
														<td>
															<span class="badge badge-light-warning fw-bolder px-4 py-3">Pending</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-light btn-sm">View</a>
														</td>
													</tr>
													<tr>
														<td>
															<!--begin::User-->
															<div class="d-flex align-items-center">
																<!--begin::Wrapper-->
																<div class="me-5 position-relative">
																	<!--begin::Avatar-->
																	<div class="symbol symbol-35px symbol-circle">
																		<span class="symbol-label bg-light-primary text-primary fw-bold">N</span>
																	</div>
																	<!--end::Avatar-->
																	<!--begin::Online-->
																	<div class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
																	<!--end::Online-->
																</div>
																<!--end::Wrapper-->
																<!--begin::Info-->
																<div class="d-flex flex-column justify-content-center">
																	<a href="" class="fs-6 text-gray-800 text-hover-primary">Neil Owen</a>
																	<div class="fw-bold text-gray-400">owen.neil@gmail.com</div>
																</div>
																<!--end::Info-->
															</div>
															<!--end::User-->
														</td>
														<td>Nov 10, 2022</td>
														<td>$956.00</td>
														<td>
															<span class="badge badge-light-info fw-bolder px-4 py-3">In progress</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-light btn-sm">View</a>
														</td>
													</tr>
													<tr>
														<td>
															<!--begin::User-->
															<div class="d-flex align-items-center">
																<!--begin::Wrapper-->
																<div class="me-5 position-relative">
																	<!--begin::Avatar-->
																	<div class="symbol symbol-35px symbol-circle">
																		<img alt="Pic" src="assets/media/avatars/300-23.jpg" />
																	</div>
																	<!--end::Avatar-->
																</div>
																<!--end::Wrapper-->
																<!--begin::Info-->
																<div class="d-flex flex-column justify-content-center">
																	<a href="" class="fs-6 text-gray-800 text-hover-primary">Dan Wilson</a>
																	<div class="fw-bold text-gray-400">dam@consilting.com</div>
																</div>
																<!--end::Info-->
															</div>
															<!--end::User-->
														</td>
														<td>May 05, 2022</td>
														<td>$925.00</td>
														<td>
															<span class="badge badge-light-warning fw-bolder px-4 py-3">Pending</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-light btn-sm">View</a>
														</td>
													</tr>
													<tr>
														<td>
															<!--begin::User-->
															<div class="d-flex align-items-center">
																<!--begin::Wrapper-->
																<div class="me-5 position-relative">
																	<!--begin::Avatar-->
																	<div class="symbol symbol-35px symbol-circle">
																		<span class="symbol-label bg-light-danger text-danger fw-bold">E</span>
																	</div>
																	<!--end::Avatar-->
																	<!--begin::Online-->
																	<div class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
																	<!--end::Online-->
																</div>
																<!--end::Wrapper-->
																<!--begin::Info-->
																<div class="d-flex flex-column justify-content-center">
																	<a href="" class="fs-6 text-gray-800 text-hover-primary">Emma Bold</a>
																	<div class="fw-bold text-gray-400">emma@intenso.com</div>
																</div>
																<!--end::Info-->
															</div>
															<!--end::User-->
														</td>
														<td>Jun 24, 2022</td>
														<td>$647.00</td>
														<td>
															<span class="badge badge-light-warning fw-bolder px-4 py-3">Pending</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-light btn-sm">View</a>
														</td>
													</tr>
													<tr>
														<td>
															<!--begin::User-->
															<div class="d-flex align-items-center">
																<!--begin::Wrapper-->
																<div class="me-5 position-relative">
																	<!--begin::Avatar-->
																	<div class="symbol symbol-35px symbol-circle">
																		<img alt="Pic" src="assets/media/avatars/300-12.jpg" />
																	</div>
																	<!--end::Avatar-->
																</div>
																<!--end::Wrapper-->
																<!--begin::Info-->
																<div class="d-flex flex-column justify-content-center">
																	<a href="" class="fs-6 text-gray-800 text-hover-primary">Ana Crown</a>
																	<div class="fw-bold text-gray-400">ana.cf@limtel.com</div>
																</div>
																<!--end::Info-->
															</div>
															<!--end::User-->
														</td>
														<td>Apr 15, 2022</td>
														<td>$597.00</td>
														<td>
															<span class="badge badge-light-danger fw-bolder px-4 py-3">Rejected</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-light btn-sm">View</a>
														</td>
													</tr>
													<tr>
														<td>
															<!--begin::User-->
															<div class="d-flex align-items-center">
																<!--begin::Wrapper-->
																<div class="me-5 position-relative">
																	<!--begin::Avatar-->
																	<div class="symbol symbol-35px symbol-circle">
																		<span class="symbol-label bg-light-info text-info fw-bold">A</span>
																	</div>
																	<!--end::Avatar-->
																	<!--begin::Online-->
																	<div class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
																	<!--end::Online-->
																</div>
																<!--end::Wrapper-->
																<!--begin::Info-->
																<div class="d-flex flex-column justify-content-center">
																	<a href="" class="fs-6 text-gray-800 text-hover-primary">Robert Doe</a>
																	<div class="fw-bold text-gray-400">robert@benko.com</div>
																</div>
																<!--end::Info-->
															</div>
															<!--end::User-->
														</td>
														<td>Jun 24, 2022</td>
														<td>$727.00</td>
														<td>
															<span class="badge badge-light-info fw-bolder px-4 py-3">In progress</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-light btn-sm">View</a>
														</td>
													</tr>
													<tr>
														<td>
															<!--begin::User-->
															<div class="d-flex align-items-center">
																<!--begin::Wrapper-->
																<div class="me-5 position-relative">
																	<!--begin::Avatar-->
																	<div class="symbol symbol-35px symbol-circle">
																		<img alt="Pic" src="assets/media/avatars/300-13.jpg" />
																	</div>
																	<!--end::Avatar-->
																</div>
																<!--end::Wrapper-->
																<!--begin::Info-->
																<div class="d-flex flex-column justify-content-center">
																	<a href="" class="fs-6 text-gray-800 text-hover-primary">John Miller</a>
																	<div class="fw-bold text-gray-400">miller@mapple.com</div>
																</div>
																<!--end::Info-->
															</div>
															<!--end::User-->
														</td>
														<td>May 05, 2022</td>
														<td>$768.00</td>
														<td>
															<span class="badge badge-light-info fw-bolder px-4 py-3">In progress</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-light btn-sm">View</a>
														</td>
													</tr>
													<tr>
														<td>
															<!--begin::User-->
															<div class="d-flex align-items-center">
																<!--begin::Wrapper-->
																<div class="me-5 position-relative">
																	<!--begin::Avatar-->
																	<div class="symbol symbol-35px symbol-circle">
																		<span class="symbol-label bg-light-success text-success fw-bold">L</span>
																	</div>
																	<!--end::Avatar-->
																	<!--begin::Online-->
																	<div class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
																	<!--end::Online-->
																</div>
																<!--end::Wrapper-->
																<!--begin::Info-->
																<div class="d-flex flex-column justify-content-center">
																	<a href="" class="fs-6 text-gray-800 text-hover-primary">Lucy Kunic</a>
																	<div class="fw-bold text-gray-400">lucy.m@fentech.com</div>
																</div>
																<!--end::Info-->
															</div>
															<!--end::User-->
														</td>
														<td>Sep 22, 2022</td>
														<td>$491.00</td>
														<td>
															<span class="badge badge-light-warning fw-bolder px-4 py-3">Pending</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-light btn-sm">View</a>
														</td>
													</tr>
													<tr>
														<td>
															<!--begin::User-->
															<div class="d-flex align-items-center">
																<!--begin::Wrapper-->
																<div class="me-5 position-relative">
																	<!--begin::Avatar-->
																	<div class="symbol symbol-35px symbol-circle">
																		<img alt="Pic" src="assets/media/avatars/300-21.jpg" />
																	</div>
																	<!--end::Avatar-->
																	<!--begin::Online-->
																	<div class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
																	<!--end::Online-->
																</div>
																<!--end::Wrapper-->
																<!--begin::Info-->
																<div class="d-flex flex-column justify-content-center">
																	<a href="" class="fs-6 text-gray-800 text-hover-primary">Ethan Wilder</a>
																	<div class="fw-bold text-gray-400">ethan@loop.com.au</div>
																</div>
																<!--end::Info-->
															</div>
															<!--end::User-->
														</td>
														<td>Nov 10, 2022</td>
														<td>$641.00</td>
														<td>
															<span class="badge badge-light-warning fw-bolder px-4 py-3">Pending</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-light btn-sm">View</a>
														</td>
													</tr>
													<tr>
														<td>
															<!--begin::User-->
															<div class="d-flex align-items-center">
																<!--begin::Wrapper-->
																<div class="me-5 position-relative">
																	<!--begin::Avatar-->
																	<div class="symbol symbol-35px symbol-circle">
																		<span class="symbol-label bg-light-danger text-danger fw-bold">M</span>
																	</div>
																	<!--end::Avatar-->
																	<!--begin::Online-->
																	<div class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
																	<!--end::Online-->
																</div>
																<!--end::Wrapper-->
																<!--begin::Info-->
																<div class="d-flex flex-column justify-content-center">
																	<a href="" class="fs-6 text-gray-800 text-hover-primary">Melody Macy</a>
																	<div class="fw-bold text-gray-400">melody@altbox.com</div>
																</div>
																<!--end::Info-->
															</div>
															<!--end::User-->
														</td>
														<td>Nov 10, 2022</td>
														<td>$586.00</td>
														<td>
															<span class="badge badge-light-info fw-bolder px-4 py-3">In progress</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-light btn-sm">View</a>
														</td>
													</tr>
													<tr>
														<td>
															<!--begin::User-->
															<div class="d-flex align-items-center">
																<!--begin::Wrapper-->
																<div class="me-5 position-relative">
																	<!--begin::Avatar-->
																	<div class="symbol symbol-35px symbol-circle">
																		<img alt="Pic" src="assets/media/avatars/300-5.jpg" />
																	</div>
																	<!--end::Avatar-->
																</div>
																<!--end::Wrapper-->
																<!--begin::Info-->
																<div class="d-flex flex-column justify-content-center">
																	<a href="" class="fs-6 text-gray-800 text-hover-primary">Sean Bean</a>
																	<div class="fw-bold text-gray-400">sean@dellito.com</div>
																</div>
																<!--end::Info-->
															</div>
															<!--end::User-->
														</td>
														<td>Aug 19, 2022</td>
														<td>$477.00</td>
														<td>
															<span class="badge badge-light-success fw-bolder px-4 py-3">Approved</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-light btn-sm">View</a>
														</td>
													</tr>
													<tr>
														<td>
															<!--begin::User-->
															<div class="d-flex align-items-center">
																<!--begin::Wrapper-->
																<div class="me-5 position-relative">
																	<!--begin::Avatar-->
																	<div class="symbol symbol-35px symbol-circle">
																		<span class="symbol-label bg-light-danger text-danger fw-bold">O</span>
																	</div>
																	<!--end::Avatar-->
																	<!--begin::Online-->
																	<div class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
																	<!--end::Online-->
																</div>
																<!--end::Wrapper-->
																<!--begin::Info-->
																<div class="d-flex flex-column justify-content-center">
																	<a href="" class="fs-6 text-gray-800 text-hover-primary">Olivia Wild</a>
																	<div class="fw-bold text-gray-400">olivia@corpmail.com</div>
																</div>
																<!--end::Info-->
															</div>
															<!--end::User-->
														</td>
														<td>May 05, 2022</td>
														<td>$820.00</td>
														<td>
															<span class="badge badge-light-success fw-bolder px-4 py-3">Approved</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-light btn-sm">View</a>
														</td>
													</tr>
													<tr>
														<td>
															<!--begin::User-->
															<div class="d-flex align-items-center">
																<!--begin::Wrapper-->
																<div class="me-5 position-relative">
																	<!--begin::Avatar-->
																	<div class="symbol symbol-35px symbol-circle">
																		<img alt="Pic" src="assets/media/avatars/300-12.jpg" />
																	</div>
																	<!--end::Avatar-->
																</div>
																<!--end::Wrapper-->
																<!--begin::Info-->
																<div class="d-flex flex-column justify-content-center">
																	<a href="" class="fs-6 text-gray-800 text-hover-primary">Ana Crown</a>
																	<div class="fw-bold text-gray-400">ana.cf@limtel.com</div>
																</div>
																<!--end::Info-->
															</div>
															<!--end::User-->
														</td>
														<td>Nov 10, 2022</td>
														<td>$622.00</td>
														<td>
															<span class="badge badge-light-info fw-bolder px-4 py-3">In progress</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-light btn-sm">View</a>
														</td>
													</tr>
													<tr>
														<td>
															<!--begin::User-->
															<div class="d-flex align-items-center">
																<!--begin::Wrapper-->
																<div class="me-5 position-relative">
																	<!--begin::Avatar-->
																	<div class="symbol symbol-35px symbol-circle">
																		<span class="symbol-label bg-light-info text-info fw-bold">A</span>
																	</div>
																	<!--end::Avatar-->
																	<!--begin::Online-->
																	<div class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
																	<!--end::Online-->
																</div>
																<!--end::Wrapper-->
																<!--begin::Info-->
																<div class="d-flex flex-column justify-content-center">
																	<a href="" class="fs-6 text-gray-800 text-hover-primary">Robert Doe</a>
																	<div class="fw-bold text-gray-400">robert@benko.com</div>
																</div>
																<!--end::Info-->
															</div>
															<!--end::User-->
														</td>
														<td>Feb 21, 2022</td>
														<td>$538.00</td>
														<td>
															<span class="badge badge-light-success fw-bolder px-4 py-3">Approved</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-light btn-sm">View</a>
														</td>
													</tr>
													<tr>
														<td>
															<!--begin::User-->
															<div class="d-flex align-items-center">
																<!--begin::Wrapper-->
																<div class="me-5 position-relative">
																	<!--begin::Avatar-->
																	<div class="symbol symbol-35px symbol-circle">
																		<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
																	</div>
																	<!--end::Avatar-->
																</div>
																<!--end::Wrapper-->
																<!--begin::Info-->
																<div class="d-flex flex-column justify-content-center">
																	<a href="" class="fs-6 text-gray-800 text-hover-primary">Brian Cox</a>
																	<div class="fw-bold text-gray-400">brian@exchange.com</div>
																</div>
																<!--end::Info-->
															</div>
															<!--end::User-->
														</td>
														<td>Jul 25, 2022</td>
														<td>$702.00</td>
														<td>
															<span class="badge badge-light-info fw-bolder px-4 py-3">In progress</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-light btn-sm">View</a>
														</td>
													</tr>
													<tr>
														<td>
															<!--begin::User-->
															<div class="d-flex align-items-center">
																<!--begin::Wrapper-->
																<div class="me-5 position-relative">
																	<!--begin::Avatar-->
																	<div class="symbol symbol-35px symbol-circle">
																		<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
																	</div>
																	<!--end::Avatar-->
																</div>
																<!--end::Wrapper-->
																<!--begin::Info-->
																<div class="d-flex flex-column justify-content-center">
																	<a href="" class="fs-6 text-gray-800 text-hover-primary">Brian Cox</a>
																	<div class="fw-bold text-gray-400">brian@exchange.com</div>
																</div>
																<!--end::Info-->
															</div>
															<!--end::User-->
														</td>
														<td>Feb 21, 2022</td>
														<td>$421.00</td>
														<td>
															<span class="badge badge-light-danger fw-bolder px-4 py-3">Rejected</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-light btn-sm">View</a>
														</td>
													</tr>
													<tr>
														<td>
															<!--begin::User-->
															<div class="d-flex align-items-center">
																<!--begin::Wrapper-->
																<div class="me-5 position-relative">
																	<!--begin::Avatar-->
																	<div class="symbol symbol-35px symbol-circle">
																		<span class="symbol-label bg-light-info text-info fw-bold">A</span>
																	</div>
																	<!--end::Avatar-->
																	<!--begin::Online-->
																	<div class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
																	<!--end::Online-->
																</div>
																<!--end::Wrapper-->
																<!--begin::Info-->
																<div class="d-flex flex-column justify-content-center">
																	<a href="" class="fs-6 text-gray-800 text-hover-primary">Robert Doe</a>
																	<div class="fw-bold text-gray-400">robert@benko.com</div>
																</div>
																<!--end::Info-->
															</div>
															<!--end::User-->
														</td>
														<td>Feb 21, 2022</td>
														<td>$893.00</td>
														<td>
															<span class="badge badge-light-danger fw-bolder px-4 py-3">Rejected</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-light btn-sm">View</a>
														</td>
													</tr>
													<tr>
														<td>
															<!--begin::User-->
															<div class="d-flex align-items-center">
																<!--begin::Wrapper-->
																<div class="me-5 position-relative">
																	<!--begin::Avatar-->
																	<div class="symbol symbol-35px symbol-circle">
																		<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
																	</div>
																	<!--end::Avatar-->
																</div>
																<!--end::Wrapper-->
																<!--begin::Info-->
																<div class="d-flex flex-column justify-content-center">
																	<a href="" class="fs-6 text-gray-800 text-hover-primary">Brian Cox</a>
																	<div class="fw-bold text-gray-400">brian@exchange.com</div>
																</div>
																<!--end::Info-->
															</div>
															<!--end::User-->
														</td>
														<td>Jun 20, 2022</td>
														<td>$679.00</td>
														<td>
															<span class="badge badge-light-danger fw-bolder px-4 py-3">Rejected</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-light btn-sm">View</a>
														</td>
													</tr>
													<tr>
														<td>
															<!--begin::User-->
															<div class="d-flex align-items-center">
																<!--begin::Wrapper-->
																<div class="me-5 position-relative">
																	<!--begin::Avatar-->
																	<div class="symbol symbol-35px symbol-circle">
																		<span class="symbol-label bg-light-success text-success fw-bold">L</span>
																	</div>
																	<!--end::Avatar-->
																	<!--begin::Online-->
																	<div class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
																	<!--end::Online-->
																</div>
																<!--end::Wrapper-->
																<!--begin::Info-->
																<div class="d-flex flex-column justify-content-center">
																	<a href="" class="fs-6 text-gray-800 text-hover-primary">Lucy Kunic</a>
																	<div class="fw-bold text-gray-400">lucy.m@fentech.com</div>
																</div>
																<!--end::Info-->
															</div>
															<!--end::User-->
														</td>
														<td>May 05, 2022</td>
														<td>$430.00</td>
														<td>
															<span class="badge badge-light-info fw-bolder px-4 py-3">In progress</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-light btn-sm">View</a>
														</td>
													</tr>
													<tr>
														<td>
															<!--begin::User-->
															<div class="d-flex align-items-center">
																<!--begin::Wrapper-->
																<div class="me-5 position-relative">
																	<!--begin::Avatar-->
																	<div class="symbol symbol-35px symbol-circle">
																		<img alt="Pic" src="assets/media/avatars/300-5.jpg" />
																	</div>
																	<!--end::Avatar-->
																</div>
																<!--end::Wrapper-->
																<!--begin::Info-->
																<div class="d-flex flex-column justify-content-center">
																	<a href="" class="fs-6 text-gray-800 text-hover-primary">Sean Bean</a>
																	<div class="fw-bold text-gray-400">sean@dellito.com</div>
																</div>
																<!--end::Info-->
															</div>
															<!--end::User-->
														</td>
														<td>Oct 25, 2022</td>
														<td>$464.00</td>
														<td>
															<span class="badge badge-light-info fw-bolder px-4 py-3">In progress</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-light btn-sm">View</a>
														</td>
													</tr>
													<tr>
														<td>
															<!--begin::User-->
															<div class="d-flex align-items-center">
																<!--begin::Wrapper-->
																<div class="me-5 position-relative">
																	<!--begin::Avatar-->
																	<div class="symbol symbol-35px symbol-circle">
																		<img alt="Pic" src="assets/media/avatars/300-12.jpg" />
																	</div>
																	<!--end::Avatar-->
																</div>
																<!--end::Wrapper-->
																<!--begin::Info-->
																<div class="d-flex flex-column justify-content-center">
																	<a href="" class="fs-6 text-gray-800 text-hover-primary">Ana Crown</a>
																	<div class="fw-bold text-gray-400">ana.cf@limtel.com</div>
																</div>
																<!--end::Info-->
															</div>
															<!--end::User-->
														</td>
														<td>Feb 21, 2022</td>
														<td>$728.00</td>
														<td>
															<span class="badge badge-light-success fw-bolder px-4 py-3">Approved</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-light btn-sm">View</a>
														</td>
													</tr>
													<tr>
														<td>
															<!--begin::User-->
															<div class="d-flex align-items-center">
																<!--begin::Wrapper-->
																<div class="me-5 position-relative">
																	<!--begin::Avatar-->
																	<div class="symbol symbol-35px symbol-circle">
																		<img alt="Pic" src="assets/media/avatars/300-5.jpg" />
																	</div>
																	<!--end::Avatar-->
																</div>
																<!--end::Wrapper-->
																<!--begin::Info-->
																<div class="d-flex flex-column justify-content-center">
																	<a href="" class="fs-6 text-gray-800 text-hover-primary">Sean Bean</a>
																	<div class="fw-bold text-gray-400">sean@dellito.com</div>
																</div>
																<!--end::Info-->
															</div>
															<!--end::User-->
														</td>
														<td>Jul 25, 2022</td>
														<td>$991.00</td>
														<td>
															<span class="badge badge-light-danger fw-bolder px-4 py-3">Rejected</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-light btn-sm">View</a>
														</td>
													</tr>
													<tr>
														<td>
															<!--begin::User-->
															<div class="d-flex align-items-center">
																<!--begin::Wrapper-->
																<div class="me-5 position-relative">
																	<!--begin::Avatar-->
																	<div class="symbol symbol-35px symbol-circle">
																		<img alt="Pic" src="assets/media/avatars/300-9.jpg" />
																	</div>
																	<!--end::Avatar-->
																</div>
																<!--end::Wrapper-->
																<!--begin::Info-->
																<div class="d-flex flex-column justify-content-center">
																	<a href="" class="fs-6 text-gray-800 text-hover-primary">Francis Mitcham</a>
																	<div class="fw-bold text-gray-400">f.mit@kpmg.com</div>
																</div>
																<!--end::Info-->
															</div>
															<!--end::User-->
														</td>
														<td>Aug 19, 2022</td>
														<td>$523.00</td>
														<td>
															<span class="badge badge-light-danger fw-bolder px-4 py-3">Rejected</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-light btn-sm">View</a>
														</td>
													</tr>
												</tbody>
												<!--end::Body-->
											</table>
											<!--end::Table-->
										</div>
										<!--end::Table container-->
									</div>
									<!--end::Card body-->
								</div>
								<!--end::Card-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Post-->
					</div>
					<!--end::Content-->
@endsection