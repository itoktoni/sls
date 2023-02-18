@extends('layouts.app')

@section('head')

    <!-- Slick.js styles -->
    <link rel="stylesheet" href="{{ url('/vendors/slick/slick.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ url('/vendors/slick/slick-theme.css') }}" type="text/css">

@endsection

@section('content')

    <div class="page-header">
        <div class="container-fluid d-sm-flex justify-content-between">
            <h4>Ecommerce</h4>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="#">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Ecommerce</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="slick-js">
                    <div>
                        <div class="card bg-primary-bright text-primary">
                            <div class="card-body text-center">
                                <h2 class="font-weight-bold">$1.422.315</h2>
                                <div>Sales</div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="card bg-secondary-bright text-secondary">
                            <div class="card-body text-center">
                                <h2 class="font-weight-bold">562</h2>
                                <div>Orders</div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="card bg-success-bright text-success">
                            <div class="card-body text-center">
                                <h2 class="font-weight-bold">82</h2>
                                <div>Products</div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="card bg-info-bright text-info">
                            <div class="card-body text-center">
                                <h2 class="font-weight-bold">1.482</h2>
                                <div>Customers</div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="card bg-dark-bright text-dark">
                            <div class="card-body text-center">
                                <h2 class="font-weight-bold">1807,8</h2>
                                <div>Average bill</div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="card bg-danger-bright text-danger">
                            <div class="card-body text-center">
                                <h2 class="font-weight-bold">1.482</h2>
                                <div>Return</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-8 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <h6 class="card-title">Number of Orders</h6>
                                    <div>
                                        <a href="#" class="mr-3">
                                            <i class="fa fa-refresh"></i>
                                        </a>
                                        <div class="dropdown">
                                            <a href="#" data-toggle="dropdown" aria-haspopup="true"
                                               aria-expanded="false">
                                                <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                            </a>
                                            <span class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item">Report</a>
                                                    <a href="#" class="dropdown-item">Download</a>
                                                    <a href="#" class="dropdown-item">Close</a>
                                                </span>
                                        </div>
                                    </div>
                                </div>
                                <div id="number-of-orders"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <h6 class="card-title mb-0">Top Sales</h6>
                                    <a href="#">All Sales</a>
                                </div>
                            </div>
                            <table class="table table-striped">
                                <tr>
                                    <td>
                                        <a href="#">Apple iPhone XR 256GB red</a>
                                    </td>
                                    <td>21</td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">Samsung Galaxy A30 3/32GB blue</a>
                                    </td>
                                    <td>52</td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">Samsung Galaxy Note9 6/128GB</a>
                                    </td>
                                    <td>74</td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">Apple iPhone XR 256GB red</a>
                                    </td>
                                    <td>25</td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">Samsung Galaxy A30 3/32GB blue</a>
                                    </td>
                                    <td>11</td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">Apple iPhone XS Max 256GB gold</a>
                                    </td>
                                    <td>52</td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">ASUS Asus ROG Phone 8/128GB blue</a>
                                    </td>
                                    <td>29</td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">Apple iPhone XR 256GB Green</a>
                                    </td>
                                    <td>5</td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">Samsung Galaxy Note9 6/128GB</a>
                                    </td>
                                    <td>74</td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">Apple iPhone XR 256GB red</a>
                                    </td>
                                    <td>25</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h6 class="card-title">Recent Orders</h6>
                            <div>
                                <a href="#" class="mr-3">
                                    <i class="fa fa-refresh"></i>
                                </a>
                                <div class="dropdown">
                                    <a href="#" data-toggle="dropdown" aria-haspopup="true"
                                       aria-expanded="false">
                                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="#" class="dropdown-item">Report</a>
                                        <a href="#" class="dropdown-item">Download</a>
                                        <a href="#" class="dropdown-item">Close</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table table-striped mb-0">
                                        <thead>
                                        <tr>
                                            <th class="text-left">Order ID</th>
                                            <th>Product</th>
                                            <th>Customer</th>
                                            <th>Country</th>
                                            <th>Date</th>
                                            <th>Price</th>
                                            <th>Status</th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <a href="#">#3132</a>
                                            </td>
                                            <td>
                                                <a href="#">Apple iPhone XR 256GB red</a>
                                            </td>
                                            <td>
                                                <a href="#">Nick Stone</a>
                                            </td>
                                            <td>
                                                <img title="Italy" width="30"
                                                     src="{{ url('/assets/media/image/flags/011-italy.png') }}" alt="...">
                                            </td>
                                            <td>20 March 2019</td>
                                            <td>$340.00</td>
                                            <td>
                                                <span class="badge badge-success">Success</span>
                                            </td>
                                            <td class="text-right">
                                                <div class="dropdown">
                                                    <a href="#" data-toggle="dropdown">
                                                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a href="#" class="dropdown-item">Detail</a>
                                                        <a href="#" class="dropdown-item text-danger">Remove</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#">#5211</a>
                                            </td>
                                            <td>
                                                <a href="#">ASUS Asus ROG Phone 8/128GB blue</a>
                                            </td>
                                            <td>
                                                <a href="#">Milano Esco</a>
                                            </td>
                                            <td>
                                                <img title="Kazakhstan" width="30"
                                                     src="{{ url('/assets/media/image/flags/034-kazakhstan.png') }}" alt="...">
                                            </td>
                                            <td>22 March 2019</td>
                                            <td>$580.00</td>
                                            <td>
                                                <span class="badge badge-success">Success</span>
                                            </td>
                                            <td class="text-right">
                                                <div class="dropdown">
                                                    <a href="#" data-toggle="dropdown">
                                                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a href="#" class="dropdown-item">Detail</a>
                                                        <a href="#" class="dropdown-item text-danger">Remove</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#">#1032</a>
                                            </td>
                                            <td>
                                                <a href="#">Samsung Galaxy A30 3/32GB blue</a>
                                            </td>
                                            <td>
                                                <a href="#">Wiltor Noice</a>
                                            </td>
                                            <td>
                                                <img title="Ethiopia" width="30"
                                                     src="{{ url('/assets/media/image/flags/001-ethiopia.png') }}" alt="...">
                                            </td>
                                            <td>10 May 2019</td>
                                            <td>$150.00</td>
                                            <td>
                                                <span class="badge badge-success">Success</span>
                                            </td>
                                            <td class="text-right">
                                                <div class="dropdown">
                                                    <a href="#" data-toggle="dropdown">
                                                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a href="#" class="dropdown-item">Detail</a>
                                                        <a href="#" class="dropdown-item text-danger">Remove</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#">#8320</a>
                                            </td>
                                            <td>
                                                <a href="#">Samsung Galaxy Note9 6/128GB</a>
                                            </td>
                                            <td>
                                                <a href="#">Anna Strong</a>
                                            </td>
                                            <td>
                                                <img title="United Kingdom" width="30"
                                                     src="{{ url('/assets/media/image/flags/262-united-kingdom.png') }}"
                                                     alt="...">
                                            </td>
                                            <td>02 May 2019</td>
                                            <td>$19.00</td>
                                            <td>
                                                <span class="badge badge-danger">Cancel</span>
                                            </td>
                                            <td class="text-right">
                                                <div class="dropdown">
                                                    <a href="#" data-toggle="dropdown">
                                                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a href="#" class="dropdown-item">Detail</a>
                                                        <a href="#" class="dropdown-item text-danger">Remove</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <h6 class="card-title">Hot Products</h6>
                                    <div>
                                        <a href="#" class="mr-3">
                                            <i class="fa fa-refresh"></i>
                                        </a>
                                        <span class="dropdown">
                                                <a href="#" data-toggle="dropdown" aria-haspopup="true"
                                                   aria-expanded="false">
                                                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                                </a>
                                                <span class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item">Report</a>
                                                    <a href="#" class="dropdown-item">Download</a>
                                                    <a href="#" class="dropdown-item">Close</a>
                                                </span>
                                            </span>
                                    </div>
                                </div>
                                <canvas id="hot-products"></canvas>
                                <div id="hot-products-legends"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <h6 class="card-title">Revenue</h6>
                                    <div>
                                        <a href="#" class="mr-3">
                                            <i class="fa fa-refresh"></i>
                                        </a>
                                        <span class="dropdown">
                                                <a href="#" data-toggle="dropdown" aria-haspopup="true"
                                                   aria-expanded="false">
                                                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                                </a>
                                                <span class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item">Report</a>
                                                    <a href="#" class="dropdown-item">Download</a>
                                                    <a href="#" class="dropdown-item">Close</a>
                                                </span>
                                            </span>
                                    </div>
                                </div>
                                <div id="revenue"></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection

@section('script')

    <!-- Slick.js -->
    <script src="{{ url('/vendors/slick/slick.min.js') }}"></script>

    <!-- Chartjs -->
    <script src="{{ url('/vendors/charts/chartjs/chart.min.js') }}"></script>

    <!-- Apex chart -->
    <script src="https://apexcharts.com/samples/assets/irregular-data-series.js"></script>
    <script src="{{ url('/vendors/charts/apex/apexcharts.min.js') }}"></script>

    <!-- Circle progress -->
    <script src="{{ url('/vendors/circle-progress/circle-progress.min.js') }}"></script>

    <!-- Dashboard scripts -->
    <script src="{{ url('/assets/js/examples/dashboard.js') }}"></script>
    <div class="colors"> <!-- To use theme colors with Javascript -->
        <div class="bg-primary"></div>
        <div class="bg-primary-bright"></div>
        <div class="bg-secondary"></div>
        <div class="bg-secondary-bright"></div>
        <div class="bg-info"></div>
        <div class="bg-info-bright"></div>
        <div class="bg-success"></div>
        <div class="bg-success-bright"></div>
        <div class="bg-danger"></div>
        <div class="bg-danger-bright"></div>
        <div class="bg-warning"></div>
        <div class="bg-warning-bright"></div>
    </div>
    <script>
        $(function () {
            $('.slick-js').slick({
                speed: 500,
                arrows: false,
                slidesToShow: 5,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                responsive: [
                    {
                        breakpoint: 1200,
                        settings: {
                            slidesToShow: 3
                        }
                    },
                    {
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 2
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 1
                        }
                    }
                ]
            });
        })
    </script>

@endsection
