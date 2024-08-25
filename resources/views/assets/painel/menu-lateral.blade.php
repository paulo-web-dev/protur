 <!-- ========== Left Sidebar Start ========== -->
        <div class="leftside-menu">

            <!-- Brand Logo Light -->
            <a href="index.html" class="logo logo-light">
                <span class="logo-lg">
                    <img src="https://protur.com.br/wp-content/webp-express/webp-images/uploads/2023/02/protur_logo02.png.webp" style="width: 60px; height: 70px" alt="logo">
                </span>
                <span class="logo-sm">
                    <img src="https://protur.com.br/wp-content/webp-express/webp-images/uploads/2023/02/protur_logo02.png.webp" alt="small logo">
                </span>
            </a>

            <!-- Brand Logo Dark -->
            <a href="index.html" class="logo logo-dark">
                <span class="logo-lg">
                    <img src="assets/images/logo-dark.png" alt="dark logo">
                </span>
                <span class="logo-sm">
                    <img src="assets/images/logo-dark-sm.png" alt="small logo">
                </span>
            </a>

            <!-- Sidebar Hover Menu Toggle Button -->
            <div class="button-sm-hover" data-bs-toggle="tooltip" data-bs-placement="right" title="Show Full Sidebar">
                <i class="ri-checkbox-blank-circle-line align-middle"></i>
            </div>

            <!-- Full Sidebar Menu Close Button -->
            <div class="button-close-fullsidebar">
                <i class="ri-close-fill align-middle"></i>
            </div>

            <!-- Sidebar -->
            <div class="h-100" id="leftside-menu-container" data-simplebar>
                <!-- Leftbar User -->
                <div class="leftbar-user">
                    <a href="pages-profile.html">
                        <img src="assets/images/users/avatar-1.jpg" alt="user-image" height="42" class="rounded-circle shadow-sm">
                        <span class="leftbar-user-name mt-2">Dominic Keller</span>
                    </a>
                </div>

                <!--- Sidemenu -->
                <ul class="side-nav">

                    <li class="side-nav-title">Navegação</li>
                    <li class="side-nav-item">
                        <a href="{{route('home')}}" class="side-nav-link">
                            <i class="uil-home-alt"></i>
                            <span> Home </span>
                        </a>
                    </li>
                    
                    <li class="side-nav-item">
                        <a href="{{route('membros')}}" class="side-nav-link">
                            <i class="uil-comments-alt"></i>
                            <span> Membros </span>
                        </a>
                    </li>

                    <li class="side-nav-item">
                        <a href="{{route('eventos')}}" class="side-nav-link">
                            <i class="uil-clipboard-alt"></i>
                            <span> Eventos </span>
                        </a>
                    </li>


                    <li class="side-nav-item">
                        <a href="{{route('agenda')}}" class="side-nav-link">
                            <i class="uil-calender"></i>
                            <span> Agenda </span>
                        </a>
                    </li>
                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarDashboards" aria-expanded="false" aria-controls="sidebarDashboards" class="side-nav-link">
  
                            <i class="uil-briefcase"></i>
                            <span class="badge bg-success float-end">{{count($perrengueCategoria)}}</span>
                            <span> Perrengues </span>
                        </a>
                       
                            
                       
                        <div class="collapse" id="sidebarDashboards">
                            <ul class="side-nav-second-level">
                             @foreach ($perrengueCategoria as $categoria )
                                <a data-bs-toggle="collapse" href="#sidebarDashboards{{$categoria->id}}" aria-expanded="false" aria-controls="sidebarDashboards" class="side-nav-link">

                                   <span class="menu-arrow"></span>
                                    <span> {{$categoria->nome}} </span>
                                    
                                </a>

                                 <div class="collapse" id="sidebarDashboards{{$categoria->id}}">
                                        <ul class="side-nav-third-level">
                                        @foreach ($categoria->perrengues as $perrengue )
                                            <li>
                                                <a href="{{route('perfil-perrengue', ['perrengue' => $perrengue->id])}}">{{$perrengue->nome}}</a>
                                            </li>
                                        @endforeach
                                        
                                        </ul>
                                    </div>
                             @endforeach
                              
                            </ul>
                        </div>
                    </li>

                    <li class="side-nav-item">
                        <a href="{{route('parceiros')}}" class="side-nav-link">
                            <i class="uil-comments-alt"></i>
                            <span>Parceiros </span>
                        </a>
                    </li>
                 
                </ul>
                <!--- End Sidemenu -->

                <div class="clearfix"></div>
            </div>
        </div>
        <!-- ========== Left Sidebar End ========== --> 