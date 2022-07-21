<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Data Table | Notika - Notika Admin Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <!-- Google Fonts
		============================================ -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
        <!-- Bootstrap CSS
            ============================================ -->
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <!-- font awesome CSS
            ============================================ -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <!-- owl.carousel CSS
            ============================================ -->
            <!-- meanmenu CSS
            ============================================ -->
        <link rel="stylesheet" href="css/meanmenu/meanmenu.min.css">
        <!-- main CSS
            ============================================ -->
        <link rel="stylesheet" href="css/main.css">
        <!-- style CSS
            ============================================ -->
        <link rel="stylesheet" href="css/style.css">
         <!-- Data Table JS
		============================================ -->
        <link rel="stylesheet" href="css/jquery.dataTables.min.css">
        <!-- responsive CSS
            ============================================ -->
        <link rel="stylesheet" href="css/responsive.css">
         <!-- animate CSS
            ============================================ -->
            <link rel="stylesheet" href="css/animate.css">
            <!-- Notika icon CSS
            ============================================ -->
        <link rel="stylesheet" href="css/notika-custom-icon.css">
         <!-- bootstrap select CSS
            ============================================ -->
            <link rel="stylesheet" href="css/bootstrap-select/bootstrap-select.css">
                <!-- wave CSS
            ============================================ -->
        <link rel="stylesheet" href="css/wave/waves.min.css">
        <link rel="stylesheet" href="css/wave/button.css">
        <style>
  

.form-control:focus {
    box-shadow: none;
    border-color: #BA68C8
}

.profile-button {
    background: rgb(99, 39, 120);
    box-shadow: none;
    border: none
}

.profile-button:hover {
    background: #682773
}

.profile-button:focus {
    background: #682773;
    box-shadow: none
}

.profile-button:active {
    background: #682773;
    box-shadow: none
}

.back:hover {
    color: #682773;
    cursor: pointer
}

.labels {
    font-size: 11px
}

.add-experience:hover {
    background: #BA68C8;
    color: #fff;
    cursor: pointer;
    border: solid 1px #BA68C8
}
        </style>
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
                        <div class="invoice-hds-pro">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="invoice-cmp-ds ivc-frm">
                                        <div class="invoice-frm">
                                            <span>Invoice from</span>
                                        </div>
                                        <div class="comp-tl">
                                            <h2>David Designs LLC</h2>
                                            <p>44, Qube Towers uttara Media City, Dubai, Bangladesh</p>
                                        </div>
                                        <div class="cmp-ph-em">
                                            <span>01962067309</span>
                                            <span>David@notika.com</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="invoice-cmp-ds ivc-to">
                                        <div class="invoice-frm">
                                            <span>Invoice to</span>
                                        </div>
                                        <div class="comp-tl">
                                            <h2>Mallinda Hollaway</h2>
                                            <p>10098 ABC Towers Uttara Silicon Oasis, Dubai, Bangladesh.</p>
                                        </div>
                                        <div class="cmp-ph-em">
                                            <span>01955239099</span>
                                            <span>Mall@notika.com</span>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="d-flex" style="width: 50%; background-color:red;">
                                <button class="btn btn-primary">Hello</button>
                            </div>
                            
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