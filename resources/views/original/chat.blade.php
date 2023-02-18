@extends('layouts.app')

@section('bodyClass', 'stretch-layout navigation-toggle-one')

@section('content')

    <!-- begin::chat block -->
    <div class="container-fluid h-100">

        <div class="row no-gutters chat-block">

            <!-- begin::chat sidebar -->
            <div class="col-lg-4 chat-sidebar border-right">

                <!-- begin::chat sidebar search -->
                <div class="chat-sidebar-header">
                    <div class="d-flex">
                        <div class="pr-3">
                            <div class="avatar avatar-sm">
                                <img src="{{ url('assets/media/image/user/man_avatar3.jpg') }}" class="rounded-circle"
                                     alt="image">
                            </div>
                        </div>
                        <div>
                            <h6 class="mb-1">Nikos Pedlow</h6>
                            <div class="m-0 small text-muted">Administrator</div>
                        </div>
                        <div class="ml-auto">
                            <div class="dropdown">
                                <a href="#" data-toggle="dropdown">
                                    <i class="width-18 height-18" data-toggle="tooltip" title="Settings"
                                       data-feather="settings"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">View Profile</a>
                                    <a class="dropdown-item" href="#">Edit Profile</a>
                                    <a class="dropdown-item" href="#">Add status</a>
                                    <a class="dropdown-item" href="#">Settings</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <form>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Chat search">
                            <div class="input-group-append">
                                <button class="btn btn-outline-light" type="button">
                                    <i class="ti-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                    <ul class="nav nav-tabs" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home"
                               role="tab" aria-controls="pills-home" aria-selected="true">Chats</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile"
                               role="tab" aria-controls="pills-profile" aria-selected="false">Calls</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact"
                               role="tab" aria-controls="pills-contact" aria-selected="false">Contacts</a>
                        </li>
                    </ul>
                </div>
                <!-- begin::chat sidebar search -->

                <!-- end::chat list -->
                <div class="chat-sidebar-content">
                    <div class="tab-content pt-3" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                             aria-labelledby="pills-home-tab">
                            <p class="small mb-0">Recent chats</p>
                            <div class="chat-lists">
                                <div class="list-group list-group-flush">
                                    <a href="#"
                                       class="list-group-item d-flex align-items-center link-1 pl-0 pr-0 pb-3 pt-3">
                                        <div class="pr-3">
                                            <div class="avatar avatar-sm avatar-state-danger">
                                                <span class="avatar-title bg-success rounded-circle">F</span>
                                            </div>
                                        </div>
                                        <div>
                                            <h6 class="mb-1">Francisco Ubsdale</h6>
                                            <span class="small text-muted">Hello how are you?</span>
                                        </div>
                                        <div class="text-right ml-auto">
                                            <span class="badge badge-primary badge-pill ml-auto">1</span>
                                            <span class="small text-muted">2:32 PM</span>
                                        </div>
                                    </a>
                                    <a href="#"
                                       class="list-group-item d-flex align-items-center link-1 pl-0 pr-0 pb-3 pt-3">
                                        <div class="pr-3">
                                            <div class="avatar avatar-sm avatar-state-success">
                                                <img src="{{ url('assets/media/image/user/women_avatar1.jpg') }}"
                                                     class="rounded-circle"
                                                     alt="image">
                                            </div>
                                        </div>
                                        <div>
                                            <h6 class="mb-1">Natale Janu</h6>
                                            <span class="small text-muted">Hi!</span>
                                        </div>
                                        <div class="text-right ml-auto">
                                            <span class="badge badge-primary badge-pill ml-auto">3</span>
                                            <span class="small text-muted">08:27 PM</span>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item active d-flex pl-0 pr-0 pb-3 pt-3">
                                        <div class="pr-3">
                                            <span class="avatar avatar-sm avatar-state-warning">
                                                <img src="{{ url('assets/media/image/user/women_avatar2.jpg') }}"
                                                     class="rounded-circle"
                                                     alt="image">
                                            </span>
                                        </div>
                                        <div class="flex-grow- 1">
                                            <h6 class="mb-1">Orelie Rockhall</h6>
                                            <span class="small text-muted">
                                                <i class="fa fa-image mr-1"></i> Photo
                                            </span>
                                        </div>
                                        <div class="text-right ml-auto">
                                            <span class="small text-muted">Yesterday</span>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item d-flex pl-0 pr-0 pb-3 pt-3">
                                        <div class="pr-3">
                                            <span class="avatar avatar-sm avatar-state-info">
                                                <img src="{{ url('assets/media/image/user/man_avatar1.jpg') }}"
                                                     class="rounded-circle"
                                                     alt="image">
                                            </span>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1">Barbette Bolf</h6>
                                            <span class="small text-muted">
                                                <i class="fa fa-video-camera mr-1"></i> Video
                                            </span>
                                        </div>
                                        <div class="text-right ml-auto">
                                            <span class="small text-muted">Last week</span>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item d-flex align-items-center pl-0 pr-0 pb-3 pt-3">
                                        <div class="pr-3">
                                            <span class="avatar avatar-sm avatar-state-secondary">
                                                <span class="avatar-title bg-warning rounded-circle">D</span>
                                            </span>
                                        </div>
                                        <div>
                                            <h6 class="mb-1">Dudley Laborde</h6>
                                            <span class="small text-muted">Hello how are you?</span>
                                        </div>
                                        <div class="text-right ml-auto">
                                            <span class="small text-muted">2:32 PM</span>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item d-flex align-items-center pl-0 pr-0 pb-3 pt-3">
                                        <div class="pr-3">
                                            <span class="avatar avatar-sm avatar-state-success">
                                                <img src="{{ url('assets/media/image/user/man_avatar2.jpg') }}"
                                                     class="rounded-circle"
                                                     alt="image">
                                            </span>
                                        </div>
                                        <div>
                                            <h6 class="mb-1">Boony Gidden</h6>
                                            <span class="small text-muted">Hi!</span>
                                        </div>
                                        <div class="text-right ml-auto">
                                            <span class="small text-muted">08:27 PM</span>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item d-flex pl-0 pr-0 pb-3 pt-3">
                                        <div class="pr-3">
                                            <span class="avatar avatar-sm avatar-state-danger">
                                                <img src="{{ url('assets/media/image/user/women_avatar3.jpg') }}"
                                                     class="rounded-circle"
                                                     alt="image">
                                            </span>
                                        </div>
                                        <div class="flex-grow- 1">
                                            <h6 class="mb-1">Vivianne Sothcott</h6>
                                            <span class="small text-muted">
                                                <i class="fa fa-image mr-1"></i> Photo
                                            </span>
                                        </div>
                                        <div class="text-right ml-auto">
                                            <span class="small text-muted">Yesterday</span>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item d-flex pl-0 pr-0 pb-3 pt-3">
                                        <div class="pr-3">
                                            <span class="avatar avatar-sm avatar-state-warning">
                                                <img src="{{ url('assets/media/image/user/man_avatar4.jpg') }}"
                                                     class="rounded-circle"
                                                     alt="image">
                                            </span>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1">Brandais Reisen</h6>
                                            <span class="small text-muted">
                                                <i class="fa fa-video-camera mr-1"></i> Video
                                            </span>
                                        </div>
                                        <div class="text-right ml-auto">
                                            <span class="small text-muted">Last week</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                             aria-labelledby="pills-profile-tab">
                            <div class="list-group list-group-flush">
                                <a href="#" class="list-group-item d-flex pl-0 pr-0 pb-3 pt-3">
                                    <div class="pr-3">
                                        <div class="avatar avatar-sm avatar-state-warning">
                                            <img src="{{ url('assets/media/image/user/women_avatar2.jpg') }}"
                                                 class="rounded-circle"
                                                 alt="image">
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="mb-1">Orelie Rockhall</h6>
                                        <div class="small text-muted d-flex align-items-center">
                                            <i class="width-15 height-15 mr-1 text-danger"
                                               data-feather="arrow-down-left"></i>
                                            Today, 03:11 AM
                                        </div>
                                    </div>
                                    <div class="text-right ml-auto">
                                        <i class="text-danger width-18 height-18" data-feather="video"></i>
                                    </div>
                                </a>
                                <a href="#" class="list-group-item d-flex align-items-center pl-0 pr-0 pb-3 pt-3">
                                    <div class="pr-3">
                                        <div class="avatar avatar-sm avatar-state-success">
                                            <img src="{{ url('assets/media/image/user/man_avatar1.jpg') }}"
                                                 class="rounded-circle"
                                                 alt="image">
                                        </div>
                                    </div>
                                    <div>
                                        <h6 class="mb-1">Barbette Bolf</h6>
                                        <div class="small text-muted d-flex align-items-center">
                                            <i class="width-15 height-15 mr-1 text-success"
                                               data-feather="arrow-up-right"></i>
                                            Today, 03:11 AM
                                        </div>
                                    </div>
                                    <div class="text-right ml-auto">
                                        <i class="width-18 height-18 text-success"
                                           data-feather="phone-call"></i>
                                    </div>
                                </a>
                                <a href="#" class="list-group-item d-flex pl-0 pr-0 pb-3 pt-3">
                                    <div class="pr-3">
                                        <div class="avatar avatar-sm avatar-state-warning">
                                            <img src="{{ url('assets/media/image/user/women_avatar1.jpg') }}"
                                                 class="rounded-circle"
                                                 alt="image">
                                        </div>
                                    </div>
                                    <div class="flex-grow- 1">
                                        <h6 class="mb-1">Natale Janu</h6>
                                        <div class="small text-muted d-flex align-items-center">
                                            <i class="width-15 height-15 mr-1 text-success"
                                               data-feather="arrow-up-right"></i>
                                            Today, 03:11 AM
                                        </div>
                                    </div>
                                    <div class="text-right ml-auto">
                                        <i class="width-18 height-18 text-success" data-feather="video"></i>
                                    </div>
                                </a>
                                <a href="#" class="list-group-item d-flex align-items-center pl-0 pr-0 pb-3 pt-3">
                                    <div class="pr-3">
                                        <div class="avatar avatar-sm avatar-state-secondary">
                                            <span class="avatar-title bg-info rounded-circle">T</span>
                                        </div>
                                    </div>
                                    <div>
                                        <h6 class="mb-1">Terra Fehner</h6>
                                        <div class="small text-muted d-flex align-items-center">
                                            <i class="width-15 height-15 mr-1 text-danger"
                                               data-feather="arrow-down-left"></i>
                                            Today, 03:11 AM
                                        </div>
                                    </div>
                                    <div class="text-right ml-auto">
                                        <i class="width-18 height-18 text-danger" data-feather="video"></i>
                                    </div>
                                </a>
                                <a href="#" class="list-group-item d-flex pl-0 pr-0 pb-3 pt-3">
                                    <div class="pr-3">
                                        <div class="avatar avatar-sm avatar-state-info">
                                            <img src="{{ url('assets/media/image/user/women_avatar2.jpg') }}"
                                                 class="rounded-circle"
                                                 alt="image">
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="mb-1">Orelie Rockhall</h6>
                                        <div class="small text-muted d-flex align-items-center">
                                            <i class="width-15 height-15 mr-1 text-success"
                                               data-feather="arrow-up-right"></i>
                                            Today, 03:11 AM
                                        </div>
                                    </div>
                                    <div class="text-right ml-auto">
                                        <i class="width-18 height-18 text-success"
                                           data-feather="phone-call"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                             aria-labelledby="pills-contact-tab">
                            <p class="small mb-0">142 Contacts</p>
                            <div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item d-flex align-items-center pl-0 pr-0 pb-3 pt-3">
                                        <div class="pr-3">
                                            <div class="avatar avatar-sm avatar-state-danger">
                                                <span class="avatar-title bg-success rounded-circle">A</span>
                                            </div>
                                        </div>
                                        <div>
                                            <h6 class="mb-1">Alene Ranyelld</h6>
                                            <div class="small text-muted">United Kingdom</div>
                                        </div>
                                        <div class="text-right ml-auto">
                                            <a href="#" class="p-1">
                                                <i data-feather="phone-call" class="width-18 height-18"></i>
                                            </a>
                                            <a href="#" class="p-1">
                                                <i data-feather="message-circle" class="width-18 height-18"></i>
                                            </a>
                                            <a href="#" class="p-1">
                                                <i data-feather="video" class="width-18 height-18"></i>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex align-items-center pl-0 pr-0 pb-3 pt-3">
                                        <div class="pr-3">
                                            <div class="avatar avatar-sm avatar-state-success">
                                                <img src="{{ url('assets/media/image/user/man_avatar1.jpg') }}"
                                                     class="rounded-circle"
                                                     alt="image">
                                            </div>
                                        </div>
                                        <div>
                                            <h6 class="mb-1">Chloette Fewster</h6>
                                            <div class="small text-muted">Estonia</div>
                                        </div>
                                        <div class="text-right ml-auto">
                                            <a href="#" class="p-1">
                                                <i data-feather="phone-call" class="width-18 height-18"></i>
                                            </a>
                                            <a href="#" class="p-1">
                                                <i data-feather="message-circle" class="width-18 height-18"></i>
                                            </a>
                                            <a href="#" class="p-1">
                                                <i data-feather="video" class="width-18 height-18"></i>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex align-items-center pl-0 pr-0 pb-3 pt-3">
                                        <div class="pr-3">
                                            <div class="avatar avatar-sm avatar-state-warning">
                                                <img src="{{ url('assets/media/image/user/women_avatar1.jpg') }}"
                                                     class="rounded-circle"
                                                     alt="image">
                                            </div>
                                        </div>
                                        <div class="flex-grow- 1">
                                            <h6 class="mb-1">Stephanus Shergill</h6>
                                            <div class="small text-muted">Austria</div>
                                        </div>
                                        <div class="text-right ml-auto">
                                            <a href="#" class="p-1">
                                                <i data-feather="phone-call" class="width-18 height-18"></i>
                                            </a>
                                            <a href="#" class="p-1">
                                                <i data-feather="message-circle" class="width-18 height-18"></i>
                                            </a>
                                            <a href="#" class="p-1">
                                                <i data-feather="video" class="width-18 height-18"></i>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex align-items-center pl-0 pr-0 pb-3 pt-3">
                                        <div class="pr-3">
                                            <div class="avatar avatar-sm avatar-state-info">
                                                <img src="{{ url('assets/media/image/user/women_avatar2.jpg') }}"
                                                     class="rounded-circle"
                                                     alt="image">
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1">Elvyn Frowde</h6>
                                            <div class="small text-muted">Canada</div>
                                        </div>
                                        <div class="text-right ml-auto">
                                            <a href="#" class="p-1">
                                                <i data-feather="phone-call" class="width-18 height-18"></i>
                                            </a>
                                            <a href="#" class="p-1">
                                                <i data-feather="message-circle" class="width-18 height-18"></i>
                                            </a>
                                            <a href="#" class="p-1">
                                                <i data-feather="video" class="width-18 height-18"></i>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex align-items-center pl-0 pr-0 pb-3 pt-3">
                                        <div class="pr-3">
                                            <div class="avatar avatar-sm avatar-state-secondary">
                                                <span class="avatar-title bg-success rounded-circle">A</span>
                                            </div>
                                        </div>
                                        <div>
                                            <h6 class="mb-1">Alene Ranyelld</h6>
                                            <div class="small text-muted">Canada</div>
                                        </div>
                                        <div class="text-right ml-auto">
                                            <a href="#" class="p-1">
                                                <i data-feather="phone-call" class="width-18 height-18"></i>
                                            </a>
                                            <a href="#" class="p-1">
                                                <i data-feather="message-circle" class="width-18 height-18"></i>
                                            </a>
                                            <a href="#" class="p-1">
                                                <i data-feather="video" class="width-18 height-18"></i>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex align-items-center pl-0 pr-0 pb-3 pt-3">
                                        <div class="pr-3">
                                            <div class="avatar avatar-sm avatar-state-success">
                                                <img src="{{ url('assets/media/image/user/man_avatar1.jpg') }}"
                                                     class="rounded-circle"
                                                     alt="image">
                                            </div>
                                        </div>
                                        <div>
                                            <h6 class="mb-1">Chloette Fewster</h6>
                                            <div class="small text-muted">Spain</div>
                                        </div>
                                        <div class="text-right ml-auto">
                                            <a href="#" class="p-1">
                                                <i data-feather="phone-call" class="width-18 height-18"></i>
                                            </a>
                                            <a href="#" class="p-1">
                                                <i data-feather="message-circle" class="width-18 height-18"></i>
                                            </a>
                                            <a href="#" class="p-1">
                                                <i data-feather="video" class="width-18 height-18"></i>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex align-items-center pl-0 pr-0 pb-3 pt-3">
                                        <div class="pr-3">
                                            <div class="avatar avatar-sm avatar-state-danger">
                                                <img src="{{ url('assets/media/image/user/women_avatar1.jpg') }}"
                                                     class="rounded-circle"
                                                     alt="image">
                                            </div>
                                        </div>
                                        <div class="flex-grow- 1">
                                            <h6 class="mb-1">Stephanus Shergill</h6>
                                            <div class="small text-muted">Romania</div>
                                        </div>
                                        <div class="text-right ml-auto">
                                            <a href="#" class="p-1">
                                                <i data-feather="phone-call" class="width-18 height-18"></i>
                                            </a>
                                            <a href="#" class="p-1">
                                                <i data-feather="message-circle" class="width-18 height-18"></i>
                                            </a>
                                            <a href="#" class="p-1">
                                                <i data-feather="video" class="width-18 height-18"></i>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex align-items-center pl-0 pr-0 pb-3 pt-3">
                                        <div class="pr-3">
                                            <div class="avatar avatar-sm avatar-state-warning">
                                                <img src="{{ url('assets/media/image/user/women_avatar2.jpg') }}"
                                                     class="rounded-circle"
                                                     alt="image">
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1">Elvyn Frowde</h6>
                                            <div class="small text-muted">New Zealand</div>
                                        </div>
                                        <div class="text-right ml-auto">
                                            <a href="#" class="p-1">
                                                <i data-feather="phone-call" class="width-18 height-18"></i>
                                            </a>
                                            <a href="#" class="p-1">
                                                <i data-feather="message-circle" class="width-18 height-18"></i>
                                            </a>
                                            <a href="#" class="p-1">
                                                <i data-feather="video" class="width-18 height-18"></i>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end::chat list -->

            </div>
            <!-- end::chat sidebar -->

            <!-- begin::chat content -->
            <div class="col-lg-8 chat-content">

                <!-- begin::chat header -->
                <div class="chat-header border-bottom">
                    <div class="d-flex align-items-center">
                        <div class="pr-3">
                            <div class="avatar avatar-sm avatar-state-warning">
                                <img src="{{ url('assets/media/image/user/women_avatar2.jpg') }}" class="rounded-circle"
                                     alt="image">
                            </div>
                        </div>
                        <div>
                            <h6 class="mb-1">Orelie Rockhall</h6>
                            <div class="m-0 small text-success">typing...</div>
                        </div>
                        <div class="ml-auto">
                            <ul class="nav align-items-center">
                                <li class="mr-4 d-sm-inline d-none">
                                    <a href="#" title="Start Video Call" data-toggle="tooltip">
                                        <i data-feather="video" class="width-18 height-18"></i>
                                    </a>
                                </li>
                                <li class="mr-4 d-sm-inline d-none">
                                    <a href="#" title="Start Voice Call" data-toggle="tooltip">
                                        <i data-feather="phone-call" class="width-18 height-18"></i>
                                    </a>
                                </li>
                                <li class="d-sm-inline d-none">
                                    <a href="#" title="Add to Contact" data-toggle="tooltip">
                                        <i data-feather="user-plus" class="width-18 height-18"></i>
                                    </a>
                                </li>
                                <li class="ml-4 mobile-chat-close-btn">
                                    <a href="#" class="btn btn-sm btn-danger">
                                        <i data-feather="x" class="width-18 height-18"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- end::chat header -->

                <!-- begin::messages -->
                <div class="messages">
                    <div class="message-item">
                        <div class="message-item-content">Hi!</div>
                        <span class="time small text-muted font-italic">02:30 PM</span>
                    </div>
                    <div class="message-item me">
                        <div class="message-item-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Exercitationem fuga iure iusto libero, possimus quasi quis repellat sint tempora ullam!
                        </div>
                        <span class="time small text-muted font-italic">Yesterday</span>
                    </div>
                    <div class="message-item">
                        <div class="message-item-content">Hello! How are you today?</div>
                        <span class="time small text-muted font-italic">02:30 PM</span>
                    </div>
                    <div class="message-item me">
                        <div class="message-item-content">Lorem ipsum dolor sit.</div>
                        <span class="time small text-muted font-italic">02:30 PM</span>
                    </div>
                    <div class="message-item">
                        <div class="message-item-content d-flex">
                            <i class="ti-file mr-2 font-size-20 mt-2"></i>
                            <div>
                                <div>important_documents.pdf <i class="text-muted small">(50KB)</i></div>
                                <ul class="list-inline small">
                                    <li class="list-inline-item"><a href="#">Download</a></li>
                                    <li class="list-inline-item"><a href="#">View</a></li>
                                </ul>
                            </div>
                        </div>
                        <span class="small text-muted font-italic">02:30 PM</span>
                    </div>
                    <div class="message-item me">
                        <div class="message-item-content">Lorem ipsum dolor sit.</div>
                        <span class="time small text-muted font-italic">02:30 PM</span>
                    </div>
                    <div class="message-item">
                        <div class="message-item-content">Lorem ipsum dolor sit.</div>
                        <span class="time small text-muted font-italic">02:30 PM</span>
                    </div>
                    <div class="message-item me message-media">
                        <img src="{{ url('assets/media/image/photo1.jpg') }}" alt="image">
                        <span class="time small text-muted font-italic">02:30 PM</span>
                    </div>
                    <div class="message-item message-item-divider">
                        <span>Today</span>
                    </div>
                    <div class="message-item">
                        <div class="message-item-content">Lorem ipsum dolor sit.</div>
                        <span class="time small text-muted font-italic">02:30 PM</span>
                    </div>
                </div>
                <!-- end::messages -->

                <!-- begin::chat footer -->
                <div class="chat-footer border-top">
                    <form class="d-flex">
                        <button class="btn btn-outline-light mr-2" type="button" title="Emoji"
                                data-toggle="tooltip">
                            <i data-feather="smile" class="width-15 height-15"></i>
                        </button>
                        <div class="flex-grow-1">
                            <input type="text" class="form-control" placeholder="Write your message">
                        </div>
                        <div class="chat-footer-buttons d-flex">
                            <button class="btn btn-primary" type="submit">
                                <i data-feather="send" class="width-15 height-15"></i>
                            </button>
                            <button class="btn btn-outline-light" type="button" title="Attach files"
                                    data-toggle="tooltip">
                                <i data-feather="paperclip" class="width-15 height-15"></i>
                            </button>
                        </div>
                    </form>
                </div>
                <!-- end::chat footer -->

            </div>
            <!-- begin::chat content -->

        </div>

    </div>
    <!-- begin::chat block -->

@endsection
