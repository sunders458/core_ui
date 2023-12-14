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
				<h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Projet</h1>
				<!--end::Title-->
				<!--begin::Separator-->
				<span class="h-20px border-gray-300 border-start mx-4"></span>
				<!--end::Separator-->
				{{--<!--begin::Breadcrumb-->
				<ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
					<!--begin::Item-->
					<li class="breadcrumb-item text-muted">
						<a href="../../demo1/dist/index.html" class="text-muted text-hover-primary">Accueil</a>
					</li>
					<!--end::Item-->
					
				</ul>
				<!--end::Breadcrumb-->--}}
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
			<div class="card mb-6 mb-xl-9">
				<div class="card-body pt-9 pb-0">
					<!--begin::Details-->
					@include('layouts.myprojetmenu')
				</div>
			</div>
			<!--end::Navbar-->
			<!--begin::Table depenses-->
			<div class="card card-flush mt-6 mt-xl-9" id="depenses">
				<!--begin::Card header-->
				<div class="card-header mt-5">
					<!--begin::Card title-->
					<div class="card-title flex-column">
						<h3 class="fw-bolder mb-1">Dépenses du projet</h3>
						<div class="fs-6 text-gray-400">Total de {{number_format($depenseTotal, 0, ',', ' ')}}  F CFA dépensés jusqu'à présent</div>
					</div>
					<!--begin::Card title-->
					<!--begin::Card toolbar-->
					<div class="card-toolbar my-1">
						
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
							<input type="text" id="kt_filter_search" class="form-control form-control-solid form-select-sm w-150px ps-9" placeholder="Rechercher" />
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
									<th class="min-w-90px">Libelle</th>
									<th class="min-w-90px">Montant</th>
									<th class="min-w-150px">Date</th>
								</tr>
							</thead>
							<!--end::Head-->
							<!--begin::Body-->
							<tbody class="fs-6">
								@foreach ($projetdepenses as $item)
								<tr>
									<td>
										<!--begin::User-->
										{{$item->name}}
										<!--end::User-->
									</td>
									<td>
									{{$item->libelle}}
									</td>
									<td>{{ \Carbon\Carbon::parse($item->created_at)->locale('fr')->translatedFormat('D d M Y') }}</td>
									<td>{{number_format($item->montant, 0, ',', ' ')}} F CFA</td>
								</tr>
								@endforeach
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


			<!--begin::Table Partenaires-->
			{{--<div class="card card-flush mt-6 mt-xl-9" id="partenaires">
				<!--begin::Card header-->
				<div class="card-header mt-5">
					<!--begin::Card title-->
					<div class="card-title flex-column">
						<h3 class="fw-bolder mb-1">Liste des partenaires</h3>
						<div class="fs-6 text-gray-400">Total de {{number_format($cotisationTotal, 0, ',', ' ')}}  F CFA dépensés jusqu'à présent</div>
					</div>
					<!--begin::Card title-->
					<!--begin::Card toolbar-->
					<div class="card-toolbar my-1">
						
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
							<input type="text" id="kt_filter_search" class="form-control form-control-solid form-select-sm w-150px ps-9" placeholder="Rechercher" />
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
									<th class="min-w-250px">Nom</th>
									<th class="min-w-150px">Date</th>
									<th class="min-w-90px">Montant</th>
									<th class="min-w-90px">Status</th>
									<th class="min-w-50px text-end">Details</th>
								</tr>
							</thead>
							<!--end::Head-->
							<!--begin::Body-->
							<tbody class="fs-6">
							@foreach ($projet->projectbypartenaire as $partenaire)
								<tr>
									<td>
										<!--begin::User-->
										<div class="d-flex align-items-center">
											<!--begin::Wrapper-->
											<div class="me-5 position-relative">
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
												<!--
													<img alt="Pic" src="assets/media/avatars/300-6.jpg" />
													-->
												</div>
												<!--end::Avatar-->
											</div>
											<!--end::Wrapper-->
											<!--begin::Info-->
											<div class="d-flex flex-column justify-content-center">
												<a href="" class="fs-6 text-gray-800 text-hover-primary">{{$partenaire->name}}</a>

												<div class="fw-bold text-gray-400"></div>

											</div>
											<!--end::Info-->
										</div>
										<!--end::User-->
									</td>
									<td>{{ \Carbon\Carbon::parse($partenaire->created_at)->locale('fr')->translatedFormat('D d M Y') }}</td>
									<td>{{number_format($partenaire->montant, 0, ',', ' ')}} F CFA</td>
									<td>
										<!--
										<span class="badge badge-light-danger fw-bolder px-4 py-3">Rejected</span>
										-->
									</td>
									<td class="text-end">
										<!--
										<a href="#" class="btn btn-light btn-sm">View</a>
										-->
									</td>
								</tr>
								@endforeach
								
								
								
							</tbody>
							<!--end::Body-->
						</table>
						<!--end::Table-->
					</div>
					<!--end::Table container-->
				</div>
				<!--end::Card body-->
			</div>--}}
			<!--end::Card-->
		</div>
		<!--end::Container-->
	</div>
	<!--end::Post-->
</div>
<!--end::Content-->
@endsection