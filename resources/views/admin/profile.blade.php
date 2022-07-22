<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>PHZONE3 | Admin | First Timers Ministry</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 @include('layouts.head')
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        @include('layouts.nav')
    <!-- Main Menu area End-->
	<!-- Breadcomb area Start-->
	<div class="breadcomb-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="breadcomb-list">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="breadcomb-wp">
									<div class="breadcomb-icon">
										<i class="notika-icon notika-windows"></i>
									</div>
									<div class="breadcomb-ctn">
										<h2>Hi, Pastor Lily</h2>
										<p>Welcome to <span class="bread-ntd">First Timers Ministry</span></p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
								<div class="breadcomb-report">
									<button data-toggle="tooltip" data-placement="left" title="Download Report" class="btn"><i class="notika-icon notika-sent"></i></button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Breadcomb area End-->
     <!-- Invoice area Start-->
     <div class="invoice-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="invoice-wrap">
                        {{-- <div class="invoice-img">
                            <img src="img/logo/logo.png" alt="" />
                        </div> --}}
                        
                        @if(session()->has('success'))
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong>Glorrrrrry!</strong> {{ session()->get('success') }}
                          </div>
                        @endif
                        <div class="invoice-hds-pro">
                            <form action="{{route('update-profile')}}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="nk-int-mk sl-dp-mn">
                                            <h2>Select Title</h2>
                                        </div>
                                        <div class="bootstrap-select fm-cmp-mg">
                                            <select class="selectpicker" name="title" required>
                                                @if (!$user->title)
                                                <option></option>
                                                <option>Pastor</option>
                                                <option>Deacon</option>
                                                <option>Brother</option>
                                                <option>Sister</option>
                                                @else
                                                <option selected>{{$user->title}}</option>
                                                @endif
                                                
                                                </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="nk-int-mk sl-dp-mn">
                                            <h2>Select Office</h2>
                                        </div>
                                        <div class="bootstrap-select fm-cmp-mg">
                                            <select class="selectpicker " name="position" required>
                                                @if (!$user->position)
                                                <option></option>
                                                <option>Group Pastor</option>
                                                <option>First Timer Ministry(officer)</option>
                                                <option>First Timer Ministry (follow-up)</option>
                                                @else
                                                <option selected>{{$user->position}}</option>
                                                @endif
                                                
                                                </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="nk-int-mk sl-dp-mn">
                                            <h2>Select Church</h2>
                                        </div>
                                        <div class="bootstrap-select fm-cmp-mg">
                                            <select class="selectpicker " name="church" required>
                                                @if (!$user->church)
                                                <option></option>
                                                <option>Limitless Church</option>
                                                @else
                                                <option selected>{{$user->church}}</option>
                                                @endif
                                             </select>
                                        </div>
                                    </div>
                                
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <div class="nk-int-st">
                                                <input type="text" class="form-control input-lg" name="first_name" value="{{$user->first_name}}" placeholder="Enter First Name" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <div class="nk-int-st">
                                                <input type="text" class="form-control input-lg" name="last_name" value="{{$user->last_name}}" placeholder="Enter Last Name" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <div class="nk-int-st">
                                                <input type="text" class="form-control input-lg" readonly name="email" value="{{$user->email}}" placeholder="Enter Email" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <div class="nk-int-st">
                                                <input type="text" class="form-control input-lg" name="phone" value="{{$user->phone}}" placeholder="Enter phone" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
                                <div class="update-data">
                                    <button type="submit" class="btn btn-primary">Update Profile</button>
                                </div>
                            </form>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="invoice-hs">
                                    <span>Entries</span>
                                    <h2>25000</h2>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="invoice-hs date-inv sm-res-mg-t-30 tb-res-mg-t-30 tb-res-mg-t-0">
                                    <span>Foundation School</span>
                                    <h2>450</h2>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="invoice-hs wt-inv sm-res-mg-t-30 tb-res-mg-t-30 tb-res-mg-t-0">
                                    <span>Graduates</span>
                                    <h2>23000</h2>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="invoice-hs gdt-inv sm-res-mg-t-30 tb-res-mg-t-30 tb-res-mg-t-0">
                                    <span>Cell Leaders</span>
                                    <h2>10000</h2>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="invoice-sp">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Item Title</th>
                                                <th>Unit Price</th>
                                                <th>Quantity</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Crusal Damperal</td>
                                                <td>$500</td>
                                                <td>05</td>
                                                <td>$3000</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Indriacal Superral</td>
                                                <td>$650</td>
                                                <td>06</td>
                                                <td>$7000</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Vidaska Adrioal</td>
                                                <td>$400</td>
                                                <td>03</td>
                                                <td>$2000</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Croustal Desrikal</td>
                                                <td>$600</td>
                                                <td>04</td>
                                                <td>$7000</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div> --}} <br><br>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="invoice-ds-int">
                                    <h2>Message From Zonal Director</h2>
                                    <p>Ornare non tortor. Nam quis ipsum vitae dolor porttitor interdum. Curabitur faucibus erat vel ante fermentum lacinia. Integer porttitor laoreet suscipit. Sed cursus cursus massa ut pellentesque. Phasellus vehicula dictum arcu, eu interdum massa bibendum. Ornare non tortor. Nam quis ipsum vitae dolor porttitor interdum. Curabitur faucibus erat vel ante fermentum lacinia. Integer porttitor laoreet suscipit. Sed cursus cursus massa ut pellentesque. Phasellus vehicula dictum arcu, eu interdum massa bibendum. </p>
                                </div>
                                <div class="invoice-ds-int invoice-last">
                                    <h2>Messsage From Group Pastor</h2>
                                    <p class="tab-mg-b-0">Ornare non tortor. Nam quis ipsum vitae dolor porttitor interdum. Curabitur faucibus erat vel ante fermentum lacinia. Integer porttitor laoreet suscipit. Sed cursus cursus massa ut pellentesque. Phasellus vehicula dictum arcu, eu interdum massa bibendum. Ornare non tortor. Nam quis ipsum vitae dolor porttitor interdum. Curabitur faucibus erat vel ante fermentum lacinia. Integer porttitor laoreet suscipit. Sed cursus cursus massa ut pellentesque. Phasellus vehicula dictum arcu, eu interdum massa bibendum. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Invoice area End-->
  @include('layouts.footer')
     <!-- jquery
		============================================ -->
        <script src="js/jquery-1.12.4.min.js"></script>
        <!-- bootstrap JS
            ============================================ -->
        <script src="js/bootstrap.min.js"></script>
        <!-- wow JS
            ============================================ -->
             <!-- bootstrap select JS
            ============================================ -->
        <script src="js/bootstrap-select/bootstrap-select.js"></script>
             <!-- meanmenu JS
            ============================================ -->
        <script src="js/meanmenu/jquery.meanmenu.js"></script>
        <!-- autosize JS
            ============================================ -->
            <script src="js/autosize.min.js"></script>
        <!-- main JS
            ============================================ -->
        <script src="js/main.js"></script>
</body>

</html>