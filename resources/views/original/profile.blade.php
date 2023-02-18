@extends('layouts.app')

@section('content')

    <!-- begin::page-header -->
    <div class="page-header">
        <div class="container-fluid d-sm-flex justify-content-between">
            <h4>Profile</h4>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="#">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#">Pages</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Profile</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- end::page-header -->

    <div class="container-fluid">

        <div class="row">
            <div class="col-md-4">

                <div class="card">
                    <div class="card-body text-center">
                        <figure class="avatar avatar-lg m-b-20">
                            <img src="{{ url('assets/media/image/user/women_avatar1.jpg') }}" class="rounded-circle" alt="...">
                        </figure>
                        <h5 class="mb-1">Roxana Roussell</h5>
                        <p class="text-muted small">Web Developer</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repudiandae eveniet
                            harum.</p>
                        <a href="#" class="btn btn-outline-primary">
                            <i data-feather="edit-2" class="mr-2"></i> Edit Profile
                        </a>
                    </div>
                    <hr class="m-0">
                    <div class="card-body">
                        <div class="row text-center">
                            <div class="col-4 text-info">
                                <h4 class="font-weight-bold">291</h4>
                                <span>Post</span>
                            </div>
                            <div class="col-4 text-success">
                                <h4 class="font-weight-bold">10.596</h4>
                                <span>Followers</span>
                            </div>
                            <div class="col-4 text-warning">
                                <h4 class="font-weight-bold">7.896</h4>
                                <span>Likes</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title d-flex justify-content-between align-items-center">
                            Information
                            <a href="#" class="btn btn-outline-light btn-sm">
                                <i data-feather="edit-2" class="mr-2"></i> Edit
                            </a>
                        </h6>
                        <div class="row mb-2">
                            <div class="col-6 text-muted">First Name:</div>
                            <div class="col-6">Johnatan</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-6 text-muted">Last Name:</div>
                            <div class="col-6">Due</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-6 text-muted">Age:</div>
                            <div class="col-6">26</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-6 text-muted">Position:</div>
                            <div class="col-6">Web Designer</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-6 text-muted">City:</div>
                            <div class="col-6">New York, USA</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-6 text-muted">Address:</div>
                            <div class="col-6">228 Park Ave Str.</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-6 text-muted">Phone:</div>
                            <div class="col-6">+1-202-555-0134</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-6 text-muted">Email:</div>
                            <div class="col-6">johndue@gmail.com</div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title d-flex justify-content-between align-items-center">
                            Photos
                            <a href="#" class="btn btn-outline-light btn-sm">
                                <i data-feather="upload" class="mr-2"></i> Upload
                            </a>
                        </h6>
                        <div class="row row-xs">
                            <div class="col-lg-4 mb-3">
                                <img class="img-fluid rounded" src="{{ url('assets/media/image/portfolio-one.jpg') }}"
                                     alt="image">
                            </div>
                            <div class="col-lg-4 mb-3">
                                <img class="img-fluid rounded" src="{{ url('assets/media/image/portfolio-two.jpg') }}"
                                     alt="image">
                            </div>
                            <div class="col-lg-4 mb-3">
                                <img class="img-fluid rounded" src="{{ url('assets/media/image/portfolio-three.jpg') }}"
                                     alt="image">
                            </div>
                            <div class="col-lg-4 mb-3">
                                <img class="img-fluid rounded" src="{{ url('assets/media/image/portfolio-four.jpg') }}"
                                     alt="image">
                            </div>
                            <div class="col-lg-4 mb-3">
                                <img class="img-fluid rounded" src="{{ url('assets/media/image/portfolio-five.jpg') }}"
                                     alt="image">
                            </div>
                            <div class="col-lg-4 mb-3">
                                <img class="img-fluid rounded" src="{{ url('assets/media/image/portfolio-six.jpg') }}"
                                     alt="image">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Skills</h6>
                        <div class="mb-4">
                            <div class="text-muted mb-2">
                                <div class="icon-block icon-block-sm icon-block-floating icon-block-outline-primary text-primary m-r-10">
                                    <i class="fa fa-user"></i>
                                </div>
                                <span class="text-uppercase font-size-11">Graphic Design</span>
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="progress flex-grow-1" style="height: 5px">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 42%;"
                                         aria-valuenow="42" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <span class="h6 mb-0 ml-3">42%</span>
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="text-muted mb-2">
                                <div class="icon-block icon-block-sm icon-block-floating icon-block-outline-danger text-danger m-r-10">
                                    <i class="fa fa-star"></i>
                                </div>
                                <span class="text-uppercase font-size-11">Web Design</span>
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="progress flex-grow-1" style="height: 5px">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 75%;"
                                         aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <span class="h6 mb-0 ml-3">75%</span>
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="text-muted mb-2">
                                <div class="icon-block icon-block-sm icon-block-floating icon-block-outline-warning text-warning m-r-10">
                                    <i class="fa fa-bar-chart"></i>
                                </div>
                                <span class="text-uppercase font-size-11">Software</span>
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="progress flex-grow-1" style="height: 5px">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 50%;"
                                         aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <span class="h6 mb-0 ml-3">50%</span>
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="text-muted mb-2">
                                <div class="icon-block icon-block-sm icon-block-floating icon-block-outline-success text-success m-r-10">
                                    <i class="fa fa-cloud-upload"></i>
                                </div>
                                <span class="text-uppercase font-size-11">Contact Management</span>
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="progress flex-grow-1" style="height: 7px">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 22%;"
                                         aria-valuenow="22" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <span class="h6 mb-0 ml-3">22%</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-8">

                <div class="card">
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <textarea rows="2" class="form-control" placeholder="Create something"></textarea>
                            </div>
                            <div class="text-right">
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <a href="#" data-toggle="tooltip" title="Add Image"
                                           class="btn btn-outline-light">
                                            <i data-feather="image"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" data-toggle="tooltip" title="Add Video"
                                           class="btn btn-outline-light">
                                            <i data-feather="video"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" data-toggle="tooltip" title="Add File"
                                           class="btn btn-outline-light">
                                            <i data-feather="file"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <button class="btn btn-primary">Submit</button>
                                    </li>
                                </ul>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <ul class="nav nav-pills flex-column flex-sm-row" id="myTab" role="tablist">
                            <li class="flex-sm-fill text-sm-center nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home"
                                   role="tab" aria-selected="true">Posts</a>
                            </li>
                            <li class="flex-sm-fill text-sm-center nav-item">
                                <a class="nav-link" id="timeline-tab" data-toggle="tab" href="#timeline"
                                   role="tab" aria-selected="true">Timeline</a>
                            </li>
                            <li class="flex-sm-fill text-sm-center nav-item">
                                <a class="nav-link" id="connections-tab1" data-toggle="tab" href="#connections"
                                   role="tab"
                                   aria-selected="false">
                                    Connections <span class="badge badge-light m-l-5">6</span>
                                </a>
                            </li>
                            <li class="flex-sm-fill text-sm-center nav-item">
                                <a class="nav-link" id="earnings-tab" data-toggle="tab" href="#earnings" role="tab"
                                   aria-selected="false">Earnings</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex mb-3">
                                    <div class="d-flex align-items-center">
                                        <figure class="avatar avatar-sm mr-3">
                                            <img src="{{ url('assets/media/image/user/man_avatar3.jpg') }}"
                                                 class="rounded-circle" alt="...">
                                        </figure>
                                        <div class="d-inline-block">
                                            <div><strong>Martina Ash</strong> shared a link</div>
                                            <small class="text-muted">7 hours ago</small>
                                        </div>
                                    </div>
                                    <div class="dropdown ml-auto">
                                        <a href="#" data-toggle="dropdown">
                                            <i class="fa fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="#" class="dropdown-item">Share</a>
                                            <a href="#" class="dropdown-item">Edit</a>
                                            <a href="#" class="dropdown-item">Delete</a>
                                        </div>
                                    </div>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet dolor eos id ipsa
                                    nobis omnis, tenetur? Dolor officiis omnis quo?</p>
                                <a href="#">
                                    <div class="row no-gutters border border-radius-1">
                                        <div class="col-3">
                                            <img src="{{ url('assets/media/image/photo8.jpg') }}" class="img-fluid" alt="image">
                                        </div>
                                        <div class="col-9 p-3">
                                            <h5>Algolia Integration</h5>
                                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit. Cumque dolor, eos laudantium maxime perferendis veritatis.</p>
                                            <small class="text-primary">https://themeforest.net/</small>
                                        </div>
                                    </div>
                                </a>
                                <div class="d-flex justify-content-between align-items-center mt-4">
                                    <div>
                                        <a href="#" title="Like" data-toggle="tooltip">
                                            <i data-feather="heart" class="width-17 height-17 mr-1"></i> 42
                                        </a>
                                    </div>
                                    <div>
                                        <a href="#" title="Comments" data-toggle="tooltip">
                                            <i data-feather="message-square" class="width-17 height-17 mr-1"></i> 3
                                        </a>
                                        <a href="#" class="ml-3" title="Share" data-toggle="tooltip">
                                            <i data-feather="share-2" class="width-17 height-17 mr-1"></i> 1
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex mb-3">
                                    <div class="d-flex align-items-center">
                                        <figure class="avatar avatar-sm mr-3">
                                            <img src="{{ url('assets/media/image/user/man_avatar3.jpg') }}"
                                                 class="rounded-circle" alt="...">
                                        </figure>
                                        <div class="d-inline-block">
                                            <div><strong>Martina Ash</strong> shared a link</div>
                                            <small class="text-muted">7 hours ago</small>
                                        </div>
                                    </div>
                                    <div class="dropdown ml-auto">
                                        <a href="#" data-toggle="dropdown">
                                            <i class="fa fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="#" class="dropdown-item">Share</a>
                                            <a href="#" class="dropdown-item">Edit</a>
                                            <a href="#" class="dropdown-item">Delete</a>
                                        </div>
                                    </div>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam doloremque
                                    eveniet illo minus nemo obcaecati, voluptatem? At corporis cum dolorem eos
                                    impedit in magni officiis quibusdam, ratione sequi totam voluptatum.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet dolor eos id ipsa
                                    nobis omnis, tenetur? Dolor officiis omnis quo?</p>
                                <div class="d-flex justify-content-between align-items-center mt-4">
                                    <div>
                                        <a href="#" title="Like" data-toggle="tooltip">
                                            <i data-feather="heart"
                                               class="width-17 height-17 mr-1 text-danger"></i> 142
                                        </a>
                                    </div>
                                    <div>
                                        <a href="#" title="Comments" data-toggle="tooltip">
                                            <i data-feather="message-square" class="width-17 height-17 mr-1"></i> 13
                                        </a>
                                        <a href="#" class="ml-3" title="Share" data-toggle="tooltip">
                                            <i data-feather="share-2" class="width-17 height-17 mr-1"></i> 4
                                        </a>
                                    </div>
                                </div>
                                <!-- People who wrote, liked, or shared a comment -->
                                <div class="mt-4">
                                    <div class="card card-body border p-3">
                                        <div class="d-flex mb-3">
                                            <div class="d-flex align-items-center">
                                                <figure class="avatar avatar-sm mr-3">
                                                    <img src="{{ url('assets/media/image/user/man_avatar1.jpg') }}"
                                                         class="rounded-circle" alt="...">
                                                </figure>
                                                <div class="d-inline-block">
                                                    <div><strong>Martina Ash</strong> shared a link</div>
                                                    <small class="text-muted">7 hours ago</small>
                                                </div>
                                            </div>
                                            <div class="dropdown ml-auto">
                                                <a href="#" data-toggle="dropdown">
                                                    <i class="fa fa-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item">Share</a>
                                                    <a href="#" class="dropdown-item">Edit</a>
                                                    <a href="#" class="dropdown-item">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus,
                                            ducimus?</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <a href="#" title="Like" data-toggle="tooltip">
                                                    <i data-feather="heart" class="width-17 height-17 mr-1"></i> 3
                                                </a>
                                                <a href="#" class="ml-3">
                                                    Reply
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card card-body border p-3">
                                        <div class="d-flex mb-3">
                                            <div class="d-flex align-items-center">
                                                <figure class="avatar avatar-sm mr-3">
                                                    <img src="{{ url('assets/media/image/user/women_avatar2.jpg') }}"
                                                         class="rounded-circle" alt="...">
                                                </figure>
                                                <div class="d-inline-block">
                                                    <div><strong>Martina Ash</strong> shared a link</div>
                                                    <small class="text-muted">7 hours ago</small>
                                                </div>
                                            </div>
                                            <div class="dropdown ml-auto">
                                                <a href="#" data-toggle="dropdown">
                                                    <i class="fa fa-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item">Share</a>
                                                    <a href="#" class="dropdown-item">Edit</a>
                                                    <a href="#" class="dropdown-item">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, ad,
                                            assumenda at atque corporis culpa earum id illum impedit laborum maxime
                                            minus nisi omnis quod sequi suscipit totam veritatis voluptatum.</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <a href="#" title="Like" data-toggle="tooltip">
                                                    <i data-feather="heart" class="width-17 height-17 mr-1"></i> 1
                                                </a>
                                                <a href="#" class="ml-3">
                                                    Reply
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <form class="d-flex">
                                        <div>
                                            <figure class="avatar avatar-sm mr-3">
                                                <img src="{{ url('assets/media/image/user/women_avatar2.jpg') }}"
                                                     class="rounded-circle" alt="...">
                                            </figure>
                                        </div>
                                        <div class="flex-grow-1">
                                            <div class="form-group">
                                                    <textarea rows="2" class="form-control"
                                                              placeholder="Post comment for @Martina"></textarea>
                                            </div>
                                            <button class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
                                </div>
                                <!-- ./ People who wrote, liked, or shared a comment -->
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex mb-3">
                                    <div class="d-flex align-items-center">
                                        <figure class="avatar avatar-sm mr-3">
                                            <img src="{{ url('assets/media/image/user/man_avatar3.jpg') }}"
                                                 class="rounded-circle" alt="...">
                                        </figure>
                                        <div class="d-inline-block">
                                            <div>Anna Mull</div>
                                            <small class="text-muted">7 hours ago</small>
                                        </div>
                                    </div>
                                    <div class="dropdown ml-auto">
                                        <a href="#" data-toggle="dropdown">
                                            <i class="fa fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="#" class="dropdown-item">Share</a>
                                            <a href="#" class="dropdown-item">Edit</a>
                                            <a href="#" class="dropdown-item">Delete</a>
                                        </div>
                                    </div>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet dolor eos id ipsa
                                    nobis omnis, tenetur? Dolor officiis omnis quo?</p>
                                <div class="row row-xs">
                                    <div class="col-6">
                                        <img src="{{ url('assets/media/image/photo9.jpg') }}" class="w-100 border-radius-1"
                                             alt="image">
                                    </div>
                                    <div class="col-6">
                                        <img src="{{ url('assets/media/image/photo10.jpg') }}" class="w-100 border-radius-1"
                                             alt="image">
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mt-4">
                                    <div>
                                        <a href="#" title="Like" data-toggle="tooltip">
                                            <i data-feather="heart"
                                               class="width-17 height-17 mr-1"></i> 311
                                        </a>
                                    </div>
                                    <div>
                                        <a href="#" title="Comments" data-toggle="tooltip">
                                            <i data-feather="message-square" class="width-17 height-17 mr-1"></i> 33
                                        </a>
                                        <a href="#" class="ml-3" title="Share" data-toggle="tooltip">
                                            <i data-feather="share-2" class="width-17 height-17 mr-1"></i> 14
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade show" id="timeline" role="tabpanel">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title">Timeline</h6>
                                <div class="timeline">
                                    <div class="timeline-item">
                                        <div>
                                            <a href="#">
                                                <figure class="avatar avatar-sm mr-3 bring-forward">
                                                    <img src="{{ url('assets/media/image/user/women_avatar4.jpg') }}"
                                                         class="rounded-circle" alt="image">
                                                </figure>
                                            </a>
                                        </div>
                                        <div>
                                            <h6 class="d-flex justify-content-between mb-4">
                                            <span>
                                                <a href="#">Martina Ash</a> shared a link
                                            </span>
                                                <span class="text-muted font-weight-normal">Tue 8:17pm</span>
                                            </h6>
                                            <a href="#">
                                                <div class="mb-3 border border-radius-1">
                                                    <div class="row no-gutters">
                                                        <div class="col-2">
                                                            <img src="{{ url('assets/media/image/photo6.jpg') }}" class="w-100"
                                                                 alt="image">
                                                        </div>
                                                        <div class="col-10 p-3">
                                                            <h5 class="line-height-16">Connection title</h5>
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing
                                                            elit. Facilis, voluptatibus.
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="timeline-item">
                                        <div>
                                            <figure class="avatar avatar-sm mr-3 bring-forward">
                                                <span class="avatar-title bg-success-bright text-success rounded-circle">C</span>
                                            </figure>
                                        </div>
                                        <div>
                                            <h6 class="d-flex justify-content-between mb-4">
                                            <span>
                                                <a href="#">Jonny Richie</a> shared a post
                                            </span>
                                                <span class="text-muted font-weight-normal">Tue 8:17pm</span>
                                            </h6>
                                            <a href="#">
                                                <div class="mb-3 border p-3 border-radius-1">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab
                                                    aliquid aperiam commodi culpa debitis deserunt enim itaque
                                                    laborum minima neque nostrum pariatur perspiciatis, placeat
                                                    quidem, ratione recusandae reiciendis sapiente, ut veritatis
                                                    vitae. Beatae dolore hic odio! Esse officiis quidem voluptate.
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="timeline-item">
                                        <div>
                                            <figure class="avatar avatar-sm mr-3 bring-forward">
                                                <span class="avatar-title bg-info-bright text-info rounded-circle">K</span>
                                            </figure>
                                        </div>
                                        <div>
                                            <h6 class="d-flex justify-content-between mb-4">
                                            <span>
                                                <a href="#">Jonny Richie</a> attached file
                                            </span>
                                                <span class="text-muted font-weight-normal">Tue 8:17pm</span>
                                            </h6>
                                            <a href="#">
                                                <div class="mb-3 border p-3 border-radius-1">
                                                    <i class="fa fa-file-pdf-o mr-2"></i> filename12334.pdf
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="timeline-item">
                                        <div>
                                            <figure class="avatar avatar-sm mr-3 bring-forward">
                                            <span class="avatar-title bg-warning-bright text-warning rounded-circle">
                                                <i class="ti-image"></i>
                                            </span>
                                            </figure>
                                        </div>
                                        <div>
                                            <h6 class="d-flex justify-content-between mb-4">
                                            <span>
                                                <a href="#">Jonny Richie</a> shared files
                                            </span>
                                                <span class="text-muted font-weight-normal">Tue 8:17pm</span>
                                            </h6>
                                            <div class="row row-xs">
                                                <div class="col-xl-3 col-lg-4 col-md-6">
                                                    <figure>
                                                        <img src="{{ url('assets/media/image/portfolio-five.jpg') }}"
                                                             class="w-100 border-radius-1" alt="image">
                                                    </figure>
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-md-6">
                                                    <figure>
                                                        <img src="{{ url('assets/media/image/portfolio-one.jpg') }}"
                                                             class="w-100 border-radius-1" alt="image">
                                                    </figure>
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-md-6">
                                                    <figure>
                                                        <img src="{{ url('assets/media/image/portfolio-three.jpg') }}"
                                                             class="w-100 border-radius-1" alt="image">
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="timeline-item">
                                        <div>
                                            <figure class="avatar avatar-sm mr-3 bring-forward">
                                                <span class="avatar-title bg-youtube rounded-circle">Y</span>
                                            </figure>
                                        </div>
                                        <div>
                                            <h6 class="d-flex justify-content-between">
                                           <span>
                                               <a href="#">Jonny Richie</a> shared video
                                           </span>
                                                <span class="text-muted font-weight-normal">Tue 8:17pm</span>
                                            </h6>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto,
                                                placeat.</p>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="embed-responsive embed-responsive-16by9 m-t-b-5">
                                                        <iframe class="embed-responsive-item"
                                                                src="https://www.youtube.com/embed/l-epKcOA7RQ"
                                                                allowfullscreen></iframe>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="connections" role="tabpanel">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title">Connections</h6>
                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <div class="card border">
                                            <div class="card-body p-3">
                                                <div class="d-flex align-items-center">
                                                    <div>
                                                        <figure class="avatar mr-3">
                                                            <img src="{{ url('assets/media/image/user/women_avatar1.jpg') }}"
                                                                 class="rounded-circle" alt="...">
                                                        </figure>
                                                    </div>
                                                    <div>
                                                        <p class="mb-0">Rosemary Krout</p>
                                                        <p class="small text-muted mb-0 line-height-15">
                                                            Team Leader
                                                        </p>
                                                    </div>
                                                    <a href="#" class="ml-auto" title="Message"
                                                       data-toggle="tooltip">
                                                        <i data-feather="message-circle"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="card border">
                                            <div class="card-body p-3">
                                                <div class="d-flex align-items-center">
                                                    <div>
                                                        <figure class="avatar mr-3">
                                                            <img src="{{ url('assets/media/image/user/man_avatar1.jpg') }}"
                                                                 class="rounded-circle" alt="...">
                                                        </figure>
                                                    </div>
                                                    <div>
                                                        <p class="mb-0">Miller Edwins</p>
                                                        <p class="small text-muted mb-0 line-height-15">
                                                            Team Leader
                                                        </p>
                                                    </div>
                                                    <a href="#" class="ml-auto" title="Message"
                                                       data-toggle="tooltip">
                                                        <i data-feather="message-circle"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="card border">
                                            <div class="card-body p-3">
                                                <div class="d-flex align-items-center">
                                                    <div>
                                                        <figure class="avatar mr-3">
                                                            <img src="{{ url('assets/media/image/user/man_avatar2.jpg') }}"
                                                                 class="rounded-circle" alt="...">
                                                        </figure>
                                                    </div>
                                                    <div>
                                                        <p class="mb-0">Cahra Smiz</p>
                                                        <p class="small text-muted mb-0 line-height-15">
                                                            Agent
                                                        </p>
                                                    </div>
                                                    <a href="#" class="ml-auto" title="Message"
                                                       data-toggle="tooltip">
                                                        <i data-feather="message-circle"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="card border">
                                            <div class="card-body p-3">
                                                <div class="d-flex align-items-center">
                                                    <div>
                                                        <figure class="avatar mr-3">
                                                            <img src="{{ url('assets/media/image/user/women_avatar4.jpg') }}"
                                                                 class="rounded-circle" alt="...">
                                                        </figure>
                                                    </div>
                                                    <div>
                                                        <p class="mb-0">Burgess Attwool</p>
                                                        <p class="small text-muted mb-0 line-height-15">
                                                            Contact
                                                        </p>
                                                    </div>
                                                    <a href="#" class="ml-auto" title="Message"
                                                       data-toggle="tooltip">
                                                        <i data-feather="message-circle"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="card border">
                                            <div class="card-body p-3">
                                                <div class="d-flex align-items-center">
                                                    <div>
                                                        <figure class="avatar mr-3">
                                                            <img src="{{ url('assets/media/image/user/women_avatar2.jpg') }}"
                                                                 class="rounded-circle" alt="...">
                                                        </figure>
                                                    </div>
                                                    <div>
                                                        <p class="mb-0">Allx Life</p>
                                                        <p class="small text-muted mb-0 line-height-15">
                                                            Agent
                                                        </p>
                                                    </div>
                                                    <a href="#" class="ml-auto" title="Message"
                                                       data-toggle="tooltip">
                                                        <i data-feather="message-circle"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="card border">
                                            <div class="card-body p-3">
                                                <div class="d-flex align-items-center">
                                                    <div>
                                                        <figure class="avatar mr-3">
                                                            <img src="{{ url('assets/media/image/user/women_avatar3.jpg') }}"
                                                                 class="rounded-circle" alt="...">
                                                        </figure>
                                                    </div>
                                                    <div>
                                                        <p class="mb-0">Marti Sorbey</p>
                                                        <p class="small text-muted mb-0 line-height-15">
                                                            Contact
                                                        </p>
                                                    </div>
                                                    <a href="#" class="ml-auto" title="Message"
                                                       data-toggle="tooltip">
                                                        <i data-feather="message-circle"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="earnings" role="tabpanel">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title">Earnings</h6>
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead class="thead-light">
                                        <tr>
                                            <th>Date</th>
                                            <th>Item Sales Count</th>
                                            <th>Earnings</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>monday, 12</td>
                                            <td>
                                                3
                                            </td>
                                            <td>$400</td>
                                        </tr>
                                        <tr>
                                            <td>tuesday, 13</td>
                                            <td>
                                                2
                                            </td>
                                            <td>$400</td>
                                        </tr>
                                        <tr>
                                            <td>wednesday, 14</td>
                                            <td>
                                                3
                                            </td>
                                            <td>$420</td>
                                        </tr>
                                        <tr>
                                            <td>thursday, 15</td>
                                            <td>
                                                5
                                            </td>
                                            <td>$500</td>
                                        </tr>
                                        <tr>
                                            <td>friday, 15</td>
                                            <td>
                                                3
                                            </td>
                                            <td>$400</td>
                                        </tr>
                                        <tr>
                                            <td>saturday, 16</td>
                                            <td>
                                                3
                                            </td>
                                            <td>$400</td>
                                        </tr>
                                        <tr>
                                            <td>sunday, 17</td>
                                            <td>
                                                3
                                            </td>
                                            <td>$400</td>
                                        </tr>
                                        <tr>
                                            <td>monday, 18</td>
                                            <td>
                                                3
                                            </td>
                                            <td>$500</td>
                                        </tr>
                                        <tr>
                                            <td>tuesday, 19</td>
                                            <td>
                                                3
                                            </td>
                                            <td>$400</td>
                                        </tr>
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th></th>
                                            <th>28</th>
                                            <th>$3720</th>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>

@endsection
