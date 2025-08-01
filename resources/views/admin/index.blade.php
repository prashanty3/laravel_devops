 @extends('admin.dashboard')
 @section('title', 'Admin Dashboard')
 @section('content')
   <div class="content-wrapper">
	  <div class="container-full">
		<!-- Main content -->
		<section class="content"> 
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="box">
						<div class="box-body">
							<h6 class="box-title">CONVERSION RATE</h6>
							<div class="d-flex d-lg-block d-xl-flex align-items-end">
								<h3 class="mb-0 mr-5">0.51%</h3>
								<p class="mb-0"><span class="text-success">1.1% <i class="fa fa-arrow-up"></i></span> than last week</p>
						    </div>
							<div id="bar-negative-chart"></div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="box">
						<div class="box-body">
							<h6 class="box-title">UNIQUE PURCHASES</h6>
							<div class="d-flex d-lg-block d-xl-flex align-items-end">
								<h3 class="mb-0 mr-5">4,124</h3>
								<p class="mb-0"><span class="text-danger">0.5% <i class="fa fa-arrow-down"></i></span> than last week</p>
						    </div>
							<div id="success-line-chart"></div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="box">
						<div class="box-body">
							<h6 class="box-title">AVG. ORDER VALUE</h6>
							<div class="d-flex d-lg-block d-xl-flex align-items-end">
								<h3 class="mb-0 mr-5">$548.20</h3>
								<p class="mb-0"><span class="text-danger">0.7% <i class="fa fa-arrow-down"></i></span> than last week</p>
						    </div>
							<div id="primary-line-chart"></div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="box">
						<div class="box-body">
							<h6 class="box-title">ORDER QUANTITY</h6>
							<div class="d-flex d-lg-block d-xl-flex align-items-end">
								<h3 class="mb-0 mr-5">1,870</h3>
								<p class="mb-0"><span class="text-success">2.5% <i class="fa fa-arrow-up"></i></span> than last week</p>
						    </div>
							<div id="warning-line-chart"></div>
						</div>
					</div>
				</div>
				<div class="col-xl-8 col-12">
					<div class="box box-body">
						<div class="row">
							<div class="col-lg-8 col-12">
								<div class="box no-border mb-0">									
									<div class="box-header no-border">
										<h4 class="box-title">Order Overview</h4>
										<ul class="box-controls">
											<li><button class="btn btn-xs btn-danger" href="#">Monthly</button></li>
											<li><button class="btn btn-xs btn-info" href="#">Weeks</button></li>
										</ul>
									</div>
									<div class="box-body p-0">
										<div id="order-summary-chart"></div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-12">
								<div class="box mb-0 bg-lightest">
									<div class="box-header no-border pb-0">
										<h4 class="box-title">Sales Overview</h4>
									</div>
									<div class="box-body">
									  <div class="d-flex justify-content-between align-items-center mb-10">
										<div>
										  <h5 class="mb-0">iPod</h5>
										  <small class="text-muted">25 min ago</small>
										</div>
										<div>
										  <h6 class="mb-0"><span class="text-success">+</span> $250</h6>
										</div>
									  </div>
									  <div class="d-flex justify-content-between align-items-center mb-10">
										<div>
										  <h5 class="mb-0">iMac</h5>
										  <small class="text-muted">5 hour ago</small>
										</div>
										<div>
										  <h6 class="mb-0"><span class="text-danger">-</span> $589</h6>
										</div>
									  </div>
									  <div class="d-flex justify-content-between align-items-center">
										<div>
										  <h5 class="mb-0">iPhone x</h5>
										  <small class="text-muted">3 day ago</small>
										</div>
										<div>
										  <h6 class="mb-0"><span class="text-success">+</span> $1292</h6>
										</div>
									  </div>
									</div>
									<div class="box-footer">
									  <h4 class="mb-0">Total Sales</h4>
									  <p class="text-primary font-size-18 font-weight-700">$8,459k</p>
									  <div class="progress">
										<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
										  <span class="sr-only">40% Complete (primary)</span>
										</div>
									  </div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-12">
					<div class="box">
						<div class="box-header">
							<h4 class="box-title">Earning</h4>
						</div>
						<div class="box-body pt-10">
							<div class="table-responsive">
								<table class="table no-border mb-0">
									<tbody>
									  <tr>
										<td>
										  <div class="media align-items-center p-0">
											<a class="media-left mx-0" href="#">
											  <img src="{{asset('assets/images/product/product-1.png')}}" alt="avatar" class="rounded-circle avatar-lg">
											</a>
											<div class="media-body">
											  <h6 class="media-heading mb-0">Top</h6>
											  <span>$110</span>
											</div>
										  </div>
										</td>
										<td class="px-0 w-25">
										  <div class="progress progress-sm active">
											<div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
											</div>
										  </div>
										</td>
										<td class="text-center"><span class="badge bg-info-light badge-lg">Total $480</span></td>
									  </tr>
									  <tr>
										<td>
										  <div class="media align-items-center p-0">
											<a class="media-left mx-0" href="#">
											  <img src="{{asset('assets/images/product/product-11.png')}}" alt="avatar" class="rounded-circle avatar-lg">
											</a>
											<div class="media-body">
											  <h6 class="media-heading mb-0">T-Shirt</h6>
											  <span>$199</span>
											</div>
										  </div>
										</td>
										<td class="px-0 w-25">
										  <div class="progress progress-sm active">
											<div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
											</div>
										  </div>
										</td>
										<td class="text-center"><span class="badge bg-danger-light badge-lg">Total $789</span></td>
									  </tr>
									  <tr>
										<td>
										  <div class="media align-items-center p-0">
											<a class="media-left mx-0" href="#">
											  <img src="{{asset('assets/images/product/product-12.png')}}" alt="avatar" class="rounded-circle avatar-lg">
											</a>
											<div class="media-body">
											  <h6 class="media-heading mb-0">Shorts</h6>
											  <span>$125</span>
											</div>
										  </div>
										</td>
										<td class="px-0 w-25">
										  <div class="progress progress-sm active">
											<div class="progress-bar progress-bar-primary progress-bar-striped" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
											</div>
										  </div>
										</td>
										<td class="text-center"><span class="badge bg-primary-light badge-lg">Total $787</span></td>
									  </tr>
									  <tr>
										<td>
										  <div class="media align-items-center p-0">
											<a class="media-left mx-0" href="#">
											  <img src="{{asset('assets/images/product/product-2.png')}}" alt="avatar" class="rounded-circle avatar-lg">
											</a>
											<div class="media-body">
											  <h6 class="media-heading mb-0">Cap</h6>
											  <span>$58</span>
											</div>
										  </div>
										</td>
										<td class="px-0 w-25">
										  <div class="progress progress-sm active">
											<div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
											</div>
										  </div>
										</td>
										<td class="text-center"><span class="badge bg-warning-light badge-lg">Total $80</span></td>
									  </tr>
									</tbody>
								  </table>
							</div>
						</div>
					</div>					
				</div>
				<div class="col-xl-4 col-12">
					<div class="box">
						<div class="box-header">
							<h4 class="box-title">
								Sales Revenue
							</h4>
						</div>
						<div class="box-body">
							<div id="vmap" class="h-200"></div>
							<div class="table-responsive mt-30">
							  <table class="table table-borderless mb-0">
								<thead>
								  <tr>
									<th class="w-40">States</th>
									<th class="w-25 text-right">Orders</th>
									<th class="w-35 text-right">Earnings</th>
								  </tr>
								</thead>
								<tbody>
								  <tr>
									<td class="font-weight-500">California</td>
									<td class="text-right">12,201</td>
									<td class="text-right">$150,200.80</td>
								  </tr>
								  <tr>
									<td class="font-weight-500">Texas</td>
									<td class="text-right">11,950</td>
									<td class="text-right">$138,910.20</td>
								  </tr>
								  <tr>
									<td class="font-weight-500">Wyoming</td>
									<td class="text-right">11,198</td>
									<td class="text-right">$132,050.00</td>
								  </tr>
								  <tr>
									<td class="font-weight-500">Florida</td>
									<td class="text-right">9,885</td>
									<td class="text-right">$127,762.10</td>
								  </tr>
								  <tr>
									<td class="font-weight-500">New York</td>
									<td class="text-right">8,560</td>
									<td class="text-right">$117,087.50</td>
								  </tr>
								  <tr>
									<td class="font-weight-500">Miami</td>
									<td class="text-right">11,198</td>
									<td class="text-right">$132,050.00</td>
								  </tr>
								  <tr>
									<td class="font-weight-500">Texas</td>
									<td class="text-right">9,885</td>
									<td class="text-right">$127,762.10</td>
								  </tr>
								</tbody>
							  </table>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-8 col-12">
					<div class="box">
						<div class="box-header">
							<h4 class="box-title">Recent Earnings</h4>
						</div>
						<div class="box-body">
							<div class="d-lg-flex justify-content-between">							
								<div class="info-box bg-transparent no-shadow p-0 h-auto min-h-0">
									<span class="info-box-icon bg-info-light rounded"><i class="ion ion-stats-bars"></i></span>
									<div class="info-box-content">
									  <span class="info-box-number">$1,845,104</span>
									  <span class="d-block font-weight-700">GROSS EARNINGS</span>
									</div>
								</div>				
								<div class="info-box bg-transparent no-shadow p-0 h-auto min-h-0">
									<span class="info-box-icon bg-primary-light rounded"><i class="ion ion-stats-bars"></i></span>
									<div class="info-box-content">
									  <span class="info-box-number">$154,769<small>.50</small></span>
									  <span class="d-block font-weight-700">TAX WITHHELD</span>
									</div>
								</div>				
								<div class="info-box bg-transparent no-shadow p-0 h-auto min-h-0">
									<span class="info-box-icon bg-danger-light rounded"><i class="ion ion-stats-bars"></i></span>
									<div class="info-box-content">
									  <span class="info-box-number">$1,512,469<small>.50</small></span>
									  <span class="d-block font-weight-700">NET EARNINGS</span>
									</div>
								</div>
							</div>
							<div class="table-responsive">
								<table class="table mb-0">
								  <thead>
									<tr>
									  <th>Date</th>
									  <th class="text-right">Sales Count</th>
									  <th class="text-right">Gross Earnings</th>
									  <th class="text-right">Tax Withheld</th>
									  <th class="text-right">Net Earnings</th>
									</tr>
								  </thead>
								  <tbody>
									<tr>
									  <td>03/05/2018</td>
									  <td class="text-right">1,050</td>
									  <td class="text-right text-info">+ $32,580.00</td>
									  <td class="text-right text-danger">- $3,023.10</td>
									  <td class="text-right">$28,670.90 <span class="ml-5 font-size-10 text-success"><i class="fa fa-arrow-up"></i> 4.5%</span></td>
									</tr>
									<tr>
									  <td>03/04/2018</td>
									  <td class="text-right">980</td>
									  <td class="text-right text-info">+ $30,065.10</td>
									  <td class="text-right text-danger">- $2,780.00</td>
									  <td class="text-right">$26,930.40  <span class="ml-5 font-size-10 text-danger"><i class="fa fa-arrow-down"></i> 0.8%</span></td>
									</tr>
									<tr>
									  <td>03/04/2018</td>
									  <td class="text-right">980</td>
									  <td class="text-right text-info">+ $30,065.10</td>
									  <td class="text-right text-danger">- $2,780.00</td>
									  <td class="text-right">$26,930.40  <span class="ml-5 font-size-10 text-danger"><i class="fa fa-arrow-down"></i> 0.8%</span></td>
									</tr>
									<tr>
									  <td>03/04/2018</td>
									  <td class="text-right">980</td>
									  <td class="text-right text-info">+ $30,065.10</td>
									  <td class="text-right text-danger">- $2,780.00</td>
									  <td class="text-right">$26,930.40  <span class="ml-5 font-size-10 text-danger"><i class="fa fa-arrow-down"></i> 0.8%</span></td>
									</tr>
									<tr>
									  <td>03/04/2018</td>
									  <td class="text-right">980</td>
									  <td class="text-right text-info">+ $30,065.10</td>
									  <td class="text-right text-danger">- $2,780.00</td>
									  <td class="text-right">$26,930.40  <span class="ml-5 font-size-10 text-danger"><i class="fa fa-arrow-down"></i> 0.8%</span></td>
									</tr>
								  </tbody>
								</table>
							  </div>
						</div>
					</div>
					<div class="box">
						<div class="box-header no-border">
							<h4 class="box-title">Revenue Growth</h4>
							<div class="box-controls pull-right">
							    <p class="mb-0">$25,980</p>
							</div>
						</div>						
						<div class="box-body pb-0">
							<canvas id="customer" class="dash-chart"></canvas>
						</div>
					</div>	
				</div>
			</div>
		</section>
		<!-- /.content -->
	  </div>
  </div>
@endsection
