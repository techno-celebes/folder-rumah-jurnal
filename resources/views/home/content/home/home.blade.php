@extends('home.master.master-home')

@section('content_master_home')
	<div class="container-fluid hero">
		<div class="row">
			<div class="col-12">
				<div class="container">
					<div class="row">
						<div class="col-6 headline">
							<h1>Rumah Jurnal UIN Datokarama Palu</h1>
						</div>
						<div class="col-6 wrapper-search">
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
@endsection