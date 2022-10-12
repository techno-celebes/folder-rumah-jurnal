@extends('home.master.master-home')

@section('content_master_home')
	<div class="container-fluid hero">
		<div class="row">
			<div class="col-12">
				<div class="container">
					<div class="row">
						<div class="col-sm-6 col-12 headline">
							<h1>Rumah Jurnal UIN Datokarama Palu</h1>
						</div>
						<div class="col-sm-6 col-12 wrapper-search">
							<form>
								<div class="input-group mb-3">
									<input type="text" class="form-control" placeholder="Search Our Book, Journal, Article, Etc" aria-label="Recipient's username" aria-describedby="basic-addon2">
									<div class="input-group-append">
										<button class="btn btn-success" type="button"><i class="bi bi-search"></i></button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid menu-sub-header-wrapper">
		<div class="row">
			<div class="col-12">
				<div class="container">
					<div class="row">
						<div class="col-12 menu-sub-header">
							<a href="#">Content home</a>
							<a href="#">Collections & Series</a>
							<a href="#" class="active">Journals</a>
							<a href="#">Books</a>
							<a href="#">Textbooks</a>
							<a href="#">Elements</a>
							<a href="#">Publishing partners</a>
							<a href="#">Open access</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<main class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="container main-wrapper">
					<div class="row">
						<div class="col-12">
							<h3>Journals</h3>
						</div>
					</div>
					<div class="row main-wrapper-parnot">
						<div class="col-12">
							<p>At UIN Datokarama Palu, we currently publish more than 380 peer-reviewed academic journals covering subjects across the humanities, social sciences and science, technology and medicine.</p>
						</div>
					</div>
					<div class="row filter-wrapper">
						<div class="col-sm-8 col-12">
							<div class="row">
								<div class="col-4">
									<div class="input-group mb-3">
										<span class="input-group-text" id="basic-addon1"><i class="fa fa-search"></i></span>
										<input type="text" class='form-control' placeholder="Searchy And Filter">
									</div>
								</div>
								<div class="col-4">
									<select class="form-control">
										<option value="1">All titles</option>
									</select>
								</div>
								<div class="col-4">
									<select class="form-control">
										<option value="1">All Subjects</option>
									</select>
								</div>
							</div>
						</div>
						<div class="col-sm-4 col-12">
							<div class="filter">
								<p>Unfiltered</p>
							</div>
						</div>
					</div>
					<div class="row journal-list">
						<div class="col-12">
							<ul>
								<li>
									<div class="row">
										<div class="col-sm-8 col-12 journal-name">
											<a href="#">Hunafa</a>
										</div>
										<div class="col-sm-4 col-12 rps">
											<div class="row">
												<div class="col-12">
													<a href="#">Get access</a>
													<div class="icon-wrapper">
														<i class="fa fa-bell" aria-hidden="true"></i>
														<i class="fa fa-rss" aria-hidden="true"></i>
													</div>
												</div>
												<div class="col-12">
													<a href="#" class="contains-open-access"><i class="fa fa-unlock" aria-hidden="true"></i>Contains open access</a>
												</div>
											</div>
										</div>
									</div>
								</li>
								<li>
									<div class="row">
										<div class="col-sm-8 col-12 journal-name">
											<a href="#">Inkunabula</a>
											<p class="journal-desc">In this section can be filled with something related to the journal.</p>
										</div>
										<div class="col-sm-4 col-12 rps">
											<div class="row">
												<div class="col-12">
													<a href="#">Get access</a>
													<div class="icon-wrapper">
														<i class="fa fa-bell" aria-hidden="true"></i>
														<i class="fa fa-rss" aria-hidden="true"></i>
													</div>
												</div>
												<div class="col-12">
													<a href="#" class="contains-open-access"><i class="fa fa-unlock" aria-hidden="true"></i>Contains open access</a>
												</div>
											</div>
										</div>
									</div>
								</li>
								<li>
									<div class="row">
										<div class="col-sm-8 col-12 journal-name">
											<a href="#">IJSYA</a>
										</div>
										<div class="col-sm-4 col-12 rps">
											<div class="row">
												<div class="col-12">
													<a href="#">Get access</a>
													<div class="icon-wrapper">
														<i class="fa fa-bell" aria-hidden="true"></i>
														<i class="fa fa-rss" aria-hidden="true"></i>
													</div>
												</div>
												<div class="col-12">
													<a href="#" class="contains-open-access"><i class="fa fa-unlock" aria-hidden="true"></i>Contains open access</a>
												</div>
											</div>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
@endsection