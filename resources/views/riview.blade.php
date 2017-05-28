<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Profile Page - Now Ui Kit by Creative Tim</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/now-ui-kit.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/demo.css')}}">
</head>

<body class="profile-page">
    <!-- Navbar -->
    <!-- <nav class="navbar navbar-toggleable-md bg-primary fixed-top navbar-transparent " color-on-scroll="500">
        <div class="container">
            <div class="dropdown button-dropdown">
                <a href="#pablo" class="dropdown-toggle" id="navbarDropdown" data-toggle="dropdown">
                    <span class="button-bar"></span>
                    <span class="button-bar"></span>
                    <span class="button-bar"></span>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-header">Dropdown header</a>
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Separated link</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">One more separated link</a>
                </div>
            </div>
            <div class="navbar-translate">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </button>
                <a class="navbar-brand" href="http://demos.creative-tim.com/now-ui-kit/index.html" rel="tooltip" title="Designed by Invision. Coded by Creative Tim" data-placement="bottom" target="_blank">
                    Now Ui Kit
                </a>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="../assets/img/blurred-image-1.jpg">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="../index.html">Back to Kit</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://github.com/creativetimofficial/now-ui-kit/issues">Have an issue?</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="Follow us on Twitter" data-placement="bottom" href="https://twitter.com/CreativeTim" target="_blank">
                            <i class="fa fa-twitter"></i>
                            <p class="hidden-lg-up">Twitter</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="Like us on Facebook" data-placement="bottom" href="https://www.facebook.com/CreativeTim" target="_blank">
                            <i class="fa fa-facebook-square"></i>
                            <p class="hidden-lg-up">Facebook</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="Follow us on Instagram" data-placement="bottom" href="https://www.instagram.com/CreativeTimOfficial" target="_blank">
                            <i class="fa fa-instagram"></i>
                            <p class="hidden-lg-up">Instagram</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav> -->
    <!-- End Navbar -->
    <div class="wrapper">
        <div class="page-header page-header-small" filter-color="orange">
            <div class="page-header-image" data-parallax="true" style="background-image: url({{URL::asset('img/bg5.jpg')}});">
            </div>
            <div class="container">
                <div class="content-center">
                    <div class="photo-container">
                        <img src="{{URL::asset('img/ryan.jpg')}}" alt="">
                    </div>
                    <h3 class="title">RS Abu Nawas</h3>
                    <p class="category">Beji, Depok</p>
                   <!--  <div class="content">
                        <div class="social-description">
                            <h2>26</h2>
                            <p>Comments</p>
                        </div>
                        <div class="social-description">
                            <h2>26</h2>
                            <p>Comments</p>
                        </div>
                        <div class="social-description">
                            <h2>48</h2>
                            <p>Bookmarks</p>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        <div class="section">
            <div class="container">
                
                <h3 class="title">Data Transaksi</h3>
               
                <div class="section buttonx">
                       
               
                    <div class="section section-tabs">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 offset-md-1 col-xl-12 offset-xl-0">
                                    
                                    <!-- Nav tabs -->
                                    <div class="card">
                                        <ul class="nav nav-tabs nav-tabs-neutral justify-content-center" role="tablist" data-background-color="orange">
                                           
                                            <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#riview" role="tab">
                                                <i class="now-ui-icons ui-2_settings-90"></i> Riview
                                            </a>
                                            </li>
                                            
                                        </ul>
                                        <div class="card-block">
                                            <!-- Tab panes -->
                                            <div class="tab-content text-left">
                                               
                                                    <form action="{{url('addriview/'.$transaksi_list->id)}}" method="POST">
                                                    {{ csrf_field() }}
                                                       <div class="col-sm-4">


                                                        <h6>Id : {{$transaksi_list->id}}</h6>
                                                        <h6>Farmasi : {{$transaksi_list->farmasi}}</h6>
                                                        <h6>Obat : {{$transaksi_list->nama_obat}}</h6>

                                                        </div>
                                                        <div class="col-sm-4">
                                                        <h4>Rating Kondisi Produk :</h4>
                                                            <div class="form-group">
                                                               
                                                                <select name="rat_kondisi" class="form-control" id="exampleSelect1" value="{{ csrf_token() }}">
                                                                  <option>1</option>
                                                                  <option>2</option>
                                                                  <option>3</option>
                                                                  <option>4</option>
                                                                  <option>5</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                       <!--  <p>Pick your style</p> -->
                                                        <div class="col-sm-4">
                                                          <h4>Akurasi Waktu :</h4>
                                                           <div class="form-group">
                                                                
                                                                <select name="rat_waktu" class="form-control" id="exampleSelect1" value="{{ csrf_token() }}">
                                                                  <option>1</option>
                                                                  <option>2</option>
                                                                  <option>3</option>
                                                                  <option>4</option>
                                                                  <option>5</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                         <h4>Pemenuhan Kontrak :</h4>
                                                            <div class="form-group">
                                                                
                                                                <select name="rat_kontrak" class="form-control" id="exampleSelect1" value="{{ csrf_token() }}">
                                                                  <option>1</option>
                                                                  <option>2</option>
                                                                  <option>3</option>
                                                                  <option>4</option>
                                                                  <option>5</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                        <h4>Pelayanan :</h4>
                                                            <div class="form-group">
                                                               
                                                                <select name="rat_pelayanan" class="form-control" id="exampleSelect1" value="{{ csrf_token() }}">
                                                                  <option>1</option>
                                                                  <option>2</option>
                                                                  <option>3</option>
                                                                  <option>4</option>
                                                                  <option>5</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                        <h4>Komentar :</h4>
                                                            <div class="form-group form-group-no-border">
                                                                <textarea name="komentar" class="form-control" placeholder="Here can be your nice text" rows="5" value="{{ csrf_token() }}"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group form-group-no-border">
                                                                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    
            <!-- End Section Tabs -->
                </div>
            </div>
        </div>
        <!-- <footer class="footer footer-default">
            <div class="container">
                <nav>
                    <ul>
                        <li>
                            <a href="https://www.creative-tim.com">
                                Creative Tim
                            </a>
                        </li>
                        <li>
                            <a href="http://presentation.creative-tim.com">
                                About Us
                            </a>
                        </li>
                        <li>
                            <a href="http://blog.creative-tim.com">
                                Blog
                            </a>
                        </li>
                        <li>
                            <a href="https://github.com/creativetimofficial/now-ui-kit/blob/master/LICENSE.md">
                                MIT License
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright">
                    &copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script>, Designed by
                    <a href="http://www.invisionapp.com" target="_blank">Invision</a>. Coded by
                    <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
                </div>
            </div>
        </footer> -->
    </div>
</body>
<script src="{{URL::asset('js/core/jquery.3.2.1.min.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('js/core/tether.min.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('js/core/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('js/plugins/bootstrap-switch.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('js/plugins/nouislider.min.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('js/plugins/bootstrap-datepicker.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('js/now-ui-kit.js')}}" type="text/javascript"></script>

</html>