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
							<a href="#">Cambridge Elements</a>
							<a href="#">Publishing partners</a>
							<a href="#">Open access</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection