@include('assets.painel.header')
@include('assets.painel.menu-lateral')
<div class="content-page">
            <div class="content">

                <!-- Start Content-->
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Protur</a></li>
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Perrengues</a></li>
                                        <li class="breadcrumb-item active"></li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Perrengue</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-xl-4 col-lg-5">
                            <div class="card text-center">
                                <div class="card-body">
                                    <img src="{{ asset('fotos-perrengue/' . $perrengue->foto) }}" class="rounded-circle avatar-lg img-thumbnail" alt="profile-image">

                                    <h4 class="mb-0 mt-2">{{$perrengue->nome}}</h4>

                            
                                 
                                </div> <!-- end card-body -->
                            </div> <!-- end card -->

                           
                        </div> <!-- end col-->

                        <div class="col-xl-8 col-lg-7">
                            <div class="card">
                                <div class="card-body">
                                    <ul class="nav nav-pills bg-nav-pills nav-justified mb-3">
                                        <li class="nav-item">
                                            <a href="#aboutme" data-bs-toggle="tab" aria-expanded="true" class="nav-link rounded-0">
                                                Sobre
                                            </a>
                                        </li>
                                        {{-- <li class="nav-item">
                                            <a href="#timeline" data-bs-toggle="tab" aria-expanded="false" class="nav-link rounded-0 active">
                                                Timeline
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" data-bs-toggle="tab" aria-expanded="false" class="nav-link rounded-0">
                                                Grupos
                                            </a>
                                        </li> --}}
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane show active" id="aboutme">

                                            <h5 class="text-uppercase"><i class="mdi mdi-briefcase me-1"></i>
                                                {{$perrengue->nome}}</h5>

                                            <div class="timeline-alt pb-0">
                                            @foreach ($perrengue->modulos as $modulo )
                                                
                                            
                                                <div class="timeline-item">
                                                    <i class="mdi mdi-circle bg-info-lighten text-info timeline-icon"></i>
                                                    <div class="timeline-item-info">
                                                        <h5 class="mt-0 mb-1">{{$modulo->titulo}}</h5>
                                                     
                                                        <p class="text-muted mt-2 mb-0 pb-3">
                                                        <?= $modulo->texto ?>
                                                        </p>
                                                    </div>
                                                </div>
                                            @endforeach
                                               

                                            </div>
                                            <!-- end timeline -->
{{-- 
                                            <h5 class="mb-3 mt-4 text-uppercase"><i class="mdi mdi-cards-variant me-1"></i>
                                                Projects</h5>
                                            <div class="table-responsive">
                                                <table class="table table-borderless table-nowrap mb-0">
                                                    <thead class="table-light">
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Clients</th>
                                                            <th>Project Name</th>
                                                            <th>Start Date</th>
                                                            <th>Due Date</th>
                                                            <th>Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td><img src="assets/images/users/avatar-2.jpg" alt="table-user" class="me-2 rounded-circle" height="24"> Halette Boivin</td>
                                                            <td>App design and development</td>
                                                            <td>01/01/2015</td>
                                                            <td>10/15/2018</td>
                                                            <td><span class="badge badge-info-lighten">Work in Progress</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td><img src="assets/images/users/avatar-3.jpg" alt="table-user" class="me-2 rounded-circle" height="24"> Durandana Jolicoeur</td>
                                                            <td>Coffee detail page - Main Page</td>
                                                            <td>21/07/2016</td>
                                                            <td>12/05/2018</td>
                                                            <td><span class="badge badge-danger-lighten">Pending</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td>3</td>
                                                            <td><img src="assets/images/users/avatar-4.jpg" alt="table-user" class="me-2 rounded-circle" height="24"> Lucas Sabourin</td>
                                                            <td>Poster illustation design</td>
                                                            <td>18/03/2018</td>
                                                            <td>28/09/2018</td>
                                                            <td><span class="badge badge-success-lighten">Done</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td>4</td>
                                                            <td><img src="assets/images/users/avatar-6.jpg" alt="table-user" class="me-2 rounded-circle" height="24"> Donatien Brunelle</td>
                                                            <td>Drinking bottle graphics</td>
                                                            <td>02/10/2017</td>
                                                            <td>07/05/2018</td>
                                                            <td><span class="badge badge-info-lighten">Work in Progress</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td>5</td>
                                                            <td><img src="assets/images/users/avatar-5.jpg" alt="table-user" class="me-2 rounded-circle" height="24"> Karel Auberjo</td>
                                                            <td>Landing page design - Home</td>
                                                            <td>17/01/2017</td>
                                                            <td>25/05/2021</td>
                                                            <td><span class="badge badge-warning-lighten">Coming soon</span></td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>
--}}
                                        </div> <!-- end tab-pane -->
                                        <!-- end about me section content -->

                                        <div class="tab-pane show active" id="timeline">
{{-- 
                                            <!-- comment box -->
                                            <div class="border rounded mt-2 mb-3">
                                                <form action="#" class="comment-area-box">
                                                    <textarea rows="3" class="form-control border-0 resize-none" placeholder="Write something...."></textarea>
                                                    <div class="p-2 bg-light d-flex justify-content-between align-items-center">
                                                        <div>
                                                            <a href="#" class="btn btn-sm px-2 font-16 btn-light"><i class="mdi mdi-account-circle"></i></a>
                                                            <a href="#" class="btn btn-sm px-2 font-16 btn-light"><i class="mdi mdi-map-marker"></i></a>
                                                            <a href="#" class="btn btn-sm px-2 font-16 btn-light"><i class="mdi mdi-camera"></i></a>
                                                            <a href="#" class="btn btn-sm px-2 font-16 btn-light"><i class="mdi mdi-emoticon-outline"></i></a>
                                                        </div>
                                                        <button type="submit" class="btn btn-sm btn-dark waves-effect">Post</button>
                                                    </div>
                                                </form>
                                            </div> <!-- end .border-->
                                            <!-- end comment box --> --}}

                                          
                                          
                                        </div>
                                        <!-- end timeline content-->

                                        <div class="tab-pane" id="settings">
                                            <form>
                                                <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle me-1"></i> Personal Info</h5>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="firstname" class="form-label">First Name</label>
                                                            <input type="text" class="form-control" id="firstname" placeholder="Enter first name">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="lastname" class="form-label">Last Name</label>
                                                            <input type="text" class="form-control" id="lastname" placeholder="Enter last name">
                                                        </div>
                                                    </div> <!-- end col -->
                                                </div> <!-- end row -->

                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="mb-3">
                                                            <label for="userbio" class="form-label">Bio</label>
                                                            <textarea class="form-control" id="userbio" rows="4" placeholder="Write something..."></textarea>
                                                        </div>
                                                    </div> <!-- end col -->
                                                </div> <!-- end row -->

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="useremail" class="form-label">Email Address</label>
                                                            <input type="email" class="form-control" id="useremail" placeholder="Enter email">
                                                            <span class="form-text text-muted"><small>If you want to change email please <a href="javascript: void(0);">click</a> here.</small></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="userpassword" class="form-label">Password</label>
                                                            <input type="password" class="form-control" id="userpassword" placeholder="Enter password">
                                                            <span class="form-text text-muted"><small>If you want to change password please <a href="javascript: void(0);">click</a> here.</small></span>
                                                        </div>
                                                    </div> <!-- end col -->
                                                </div> <!-- end row -->

                                                <h5 class="mb-3 text-uppercase bg-light p-2"><i class="mdi mdi-office-building me-1"></i> Company Info</h5>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="companyname" class="form-label">Company Name</label>
                                                            <input type="text" class="form-control" id="companyname" placeholder="Enter company name">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="cwebsite" class="form-label">Website</label>
                                                            <input type="text" class="form-control" id="cwebsite" placeholder="Enter website url">
                                                        </div>
                                                    </div> <!-- end col -->
                                                </div> <!-- end row -->

                                                <h5 class="mb-3 text-uppercase bg-light p-2"><i class="mdi mdi-earth me-1"></i> Social</h5>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="social-fb" class="form-label">Facebook</label>
                                                            <div class="input-group">
                                                                <span class="input-group-text"><i class="mdi mdi-facebook"></i></span>
                                                                <input type="text" class="form-control" id="social-fb" placeholder="Url">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="social-tw" class="form-label">Twitter</label>
                                                            <div class="input-group">
                                                                <span class="input-group-text"><i class="mdi mdi-twitter"></i></span>
                                                                <input type="text" class="form-control" id="social-tw" placeholder="Username">
                                                            </div>
                                                        </div>
                                                    </div> <!-- end col -->
                                                </div> <!-- end row -->

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="social-insta" class="form-label">Instagram</label>
                                                            <div class="input-group">
                                                                <span class="input-group-text"><i class="mdi mdi-instagram"></i></span>
                                                                <input type="text" class="form-control" id="social-insta" placeholder="Url">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="social-lin" class="form-label">Linkedin</label>
                                                            <div class="input-group">
                                                                <span class="input-group-text"><i class="mdi mdi-linkedin"></i></span>
                                                                <input type="text" class="form-control" id="social-lin" placeholder="Url">
                                                            </div>
                                                        </div>
                                                    </div> <!-- end col -->
                                                </div> <!-- end row -->

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="social-sky" class="form-label">Skype</label>
                                                            <div class="input-group">
                                                                <span class="input-group-text"><i class="mdi mdi-skype"></i></span>
                                                                <input type="text" class="form-control" id="social-sky" placeholder="@username">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="social-gh" class="form-label">Github</label>
                                                            <div class="input-group">
                                                                <span class="input-group-text"><i class="mdi mdi-github"></i></span>
                                                                <input type="text" class="form-control" id="social-gh" placeholder="Username">
                                                            </div>
                                                        </div>
                                                    </div> <!-- end col -->
                                                </div> <!-- end row -->

                                                <div class="text-end">
                                                    <button type="submit" class="btn btn-success mt-2"><i class="mdi mdi-content-save"></i> Save</button>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- end settings content-->

                                    </div> <!-- end tab-content -->
                                </div> <!-- end card body -->
                            </div> <!-- end card -->
                        </div> <!-- end col -->
                    </div>
                    <!-- end row-->

                </div>
                <!-- container -->

            </div>

         
@include('assets.painel.footer')