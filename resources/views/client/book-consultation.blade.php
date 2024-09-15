<?php $page="patient-dashboard";?>
@extends('layout.mainlayout')
@section('content')
<!-- Breadcrumb -->
			<div class="breadcrumb-bar">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-md-12 col-12">
							<nav aria-label="breadcrumb" class="page-breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index">Dashboard</a></li>
									<li class="breadcrumb-item active" aria-current="page">Booking</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">Appointment Booking</h2>
						</div>
					</div>
				</div>
			</div>
			<!-- /Breadcrumb -->

			<!-- Page Content -->
			<div class="content">
				<div class="container">

					<div class="row">

						<!-- Profile Sidebar -->
                        @include('client.includes.client-navbar')
						<!-- / Profile Sidebar -->
						<div class="col-md-7 col-lg-8 col-xl-9">
							<div class="card">
								<div class="card-body">
									<div class="row">
										<div class="col-md-12 col-lg-12">

											<!-- Change Password Form -->
											<form method="post" action="{{ route('client.change-password')}}">
                                                @csrf
												<div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Date of Appointment</label>
                                                            <input type="date" name="ap_datee" class="form-control">
                                                            @error('ap_datee')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Time of Appointment</label>
                                                            <input type="time" name="ap_time" class="form-control">
                                                            @error('ap_time')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                        </div>
                                                    </div>
                                                </div>

												<div class="form-group">
													<label>Comment</label>
													<input type="text" name="comment" class="form-control">
                                                    @error('comment')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
												</div>
												<div class="submit-section">
													<button type="submit" class="btn btn-primary submit-btn">Book Appointment</button>
												</div>
											</form>
											<!-- /Change Password Form -->

										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>

			</div>
			<!-- /Page Content -->
			</div>
	   @endsection
