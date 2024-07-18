@extends('layouts.apps')
@section('Content')
						<main>
							<div class="head-title">
								<div class="left">
									<h1 class="ml1">
										<span class="text-wrapper">
										  <span class="line line1"></span>
										  <span class="letters">Welcome, Rofky!</span>
										  <span class="line line2"></span>
										</span>
									  </h1>
									  <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
								</div>
							</div>
							<ul class="box-info">
								<li>
									<i class='bx bx-code-alt'></i>
									<span class="text">
										<h3>100</h3>
										<p>Codingan</p>
									</span>
								</li>
								<li>
									<i class='bx bxs-error'></i>
									<span class="text">
										<h3>1000</h3>
										<p>Cobaan</p>
									</span>
								</li>
								<li>
									<i class='bx bxs-dollar-circle' ></i>
									<span class="text">
										<h3>10000</h3>
										<p>Cuan</p>
									</span>
								</li>
							</ul>
				
				
							<div class="table-data">
								<div class="order">
									<div class="head">
										<h3>Supporter</h3>
									</div>
									<table>
										<thead>
											<tr>
												<th>Name</th>
												<th>Description</th>
												<th>Status</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>
													<img src="{{ asset('admin_assets/img/images.png') }}">
													<p>Wahyu Adi</p>
												</td>
												<td>Teman Kampus</td>
												<td><span class="status class">Classmate</span></td>
											</tr>
											<tr>
												<td>
													<img src="{{ asset('admin_assets/img/563-5638091_thumb-image-kartun-laki-laki-hd-png-download.png') }}">
													<p>Rizky Nurdin</p>
												</td>
												<td>Teman Kampus</td>
												<td><span class="status class">Classmate</span></td>
											</tr>
											<tr>
												<td>
													<img src="{{ asset('admin_assets/img/face_head_female_woman_icon_143234.webp') }}">
													<p>Salpatris</p>
												</td>
												<td>Teman Kampus</td>
												<td><span class="status class">Classmate</span></td>
											</tr>
											<tr>
												<td>
													<img src="{{ asset('admin_assets/img/img.jpeg') }}">
													<p>Sila Milda</p>
												</td>
												<td>Teman Kampus</td>
												<td><span class="status class">Classmate</span></td>
											</tr>
											<tr>
												<td>
													<img src="{{ asset('admin_assets/img/pngtree-cartoon-girl-in-hijab-waving-hand-png-image_6435166.png') }}">
													<p>Nurul</p>
												</td>
												<td>Kakak Tingkat</td>
												<td><span class="status sen">Senior</span></td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="todo">
									<div class="head">
										<h3>Jadwal Ngoding</h3>
									</div>
									<ul class="todo-list">
										<li class="completed">
											<p>Senin Semangat</p>
											<i class='bx bxl-html5'></i>
										</li>
										<li class="completed">
											<p>Selasa Senyum</p>
											<i class='bx bxl-vuejs'></i>
										</li>
										<li class="not-completed">
											<p>Rabu Ramah</p>
											<i class='bx bxl-codepen'></i>
										</li>
										<li class="completed">
											<p>Kamis Bahagia</p>
											<i class='bx bxl-tailwind-css'></i>
										</li>
										<li class="not-completed">
											<p>Jum'at Jum'atan</p>
											<i class='bx bxl-php'></i>
										</li>
									</ul>
								</div>
							</div>
						</main>
@endsection