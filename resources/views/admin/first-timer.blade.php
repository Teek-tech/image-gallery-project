<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Form Element | Notika - Notika Admin Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
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
        .submit {
            padding: 10px !important;
            width: 200px;
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
										<i class="notika-icon notika-form"></i>
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
    <!-- Form Element area Start-->
    <div class="form-element-area">
        <div class="container">
            <div class="row">
                <form action="">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-element-list">
                            <div class="basic-tb-hd">
                                <h2>Enter First-Timer Information</h2>
                                <p>All fields are required! (<code>error message displays in red</code>) and success in green.</p>
                            </div>
                            {{-- <div class="row">
                            
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control input-lg" placeholder="Input Large">
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control input-lg" name="first_name" placeholder="Enter First Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control input-lg" name="last_name" placeholder="Enter Last Name">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="nk-int-mk sl-dp-mn">
                                        <h2>Select Gender</h2>
                                    </div>
                                    <div class="bootstrap-select fm-cmp-mg">
                                        <select class="selectpicker " name="gender">
                                                <option>Male</option>
                                                <option>Female</option>
                                            </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="form-group">
                                        <div class="nk-int-mk sl-dp-mn">
                                            <h2>Select Age</h2>
                                        </div>
                                        <div class="nk-int-st">
                                            <select class="selectpicker" name="age">
                                                <option>18</option>
                                                <option>19</option>
                                                <option>20</option>
                                                <option>21</option>
                                                <option>22</option>
                                                <option>23</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="form-group">
                                        <div class="nk-int-mk sl-dp-mn">
                                            <h2>Marital Status</h2>
                                        </div>
                                        <div class="nk-int-st">
                                            <select class="selectpicker" name="marital_status">
                                                <option>Married</option>
                                                <option>Single</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control input-lg" name="residence" placeholder="Residential Address">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control input-lg" name="bustop" placeholder="Nearest Bus-Stop">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control input-lg" name="bos" placeholder="Business/Office/School Address">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control input-lg" name="occupation" placeholder="Occupation">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="form-group nk-datapk-ctm form-elet-mg" id="data_1">
                                        <label>When should we visit you?</label>
                                        <div class="input-group date nk-int-st">
                                            <span class="input-group-addon"></span>
                                            <input type="text" class="form-control input-lg" name="visit" value="03/19/2018">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="form-group nk-datapk-ctm form-elet-mg" id="data_1">
                                        <label>Mobile Number</label>
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control input-lg" name="mobile" placeholder="Enter Phone Number">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="form-group nk-datapk-ctm form-elet-mg" id="data_1">
                                        <label>Email address</label>
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control input-lg" name="email" placeholder="Enter Email">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control input-lg" name="invited" placeholder="Invited by...">
                                    </div>
                                </div>
                            </div>
                        </div> <br>
                        <div class="material-design-btn">
                            <button class="btn notika-btn-lightblue submit">Save Data</button>
                        </div>
                        </div>
                    </div>
                </form>
            </div>
            {{-- <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-element-list mg-t-30">
                        <div class="basic-tb-hd">
                            <h2>Textarea</h2>
                            <p>Form control which supports multiple lines of text. Change 'rows' attribute as necessary.</p>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="floating-numner form-rlt-mg">
                                    <p>Basic Example</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <div class="nk-int-st">
                                        <textarea class="form-control" rows="5" placeholder="Let us type some lorem ipsum...."></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="floating-numner">
                                    <p>Height Auto Growing</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <div class="nk-int-st">
                                        <textarea class="form-control auto-size" rows="2" placeholder="Start pressing Enter to see growing..."></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="floating-numner">
                                    <p>Disabled State</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group form-elet-mg">
                                    <div class="nk-int-st">
                                        <textarea class="form-control" rows="2" placeholder="Start pressing Enter to see growing..." disabled></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-element-list mg-t-30">
                        <div class="basic-tb-hd">
                            <h2>Checkbox and Radio</h2>
                            <p>Checkboxes are for selecting one or several options in a list, while radios are for selecting one option from many.</p>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="floating-numner form-rlt-mg">
                                    <p>Basic Example</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="fm-checkbox">
                                    <label><input type="checkbox" checked="" class="i-checks"> <i></i> Option one is this and that-be sure to include why it's great</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="fm-checkbox">
                                    <label><input type="checkbox" class="i-checks"> <i></i> Option two is after click checked</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="fm-checkbox">
                                    <label><input type="checkbox" disabled class="i-checks"> <i></i>  Three checked and disabled </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="fm-checkbox">
                                    <label><input type="radio" checked="" class="i-checks"> <i></i> Option one is this and that-be sure to include why it's great</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="fm-checkbox">
                                    <label><input type="radio" value="option1" name="a" class="i-checks"> <i></i> Option two is after click checked Radio</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="fm-checkbox form-elet-mg">
                                    <label><input type="radio" disabled class="i-checks"> <i></i>  Three checked and disabled Radio</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
    <!-- Form Element area End-->
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
          <!-- Data Table JS
		============================================ -->
    <script src="js/data-table/jquery.dataTables.min.js"></script>
    <script src="js/data-table/data-table-act.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
     <!-- datapicker JS
		============================================ -->
        <script src="js/datapicker/bootstrap-datepicker.js"></script>
        <script src="js/datapicker/datepicker-active.js"></script>
</body>

</html>