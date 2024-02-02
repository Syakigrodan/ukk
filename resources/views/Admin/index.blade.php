<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Coffe</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
                <a class="sidebar-brand brand-logo" href=""><img src="assets/images/logo.svg"
                        alt="logo" /></a>
                <a class="sidebar-brand brand-logo-mini" href=""><img src="assets/images/logo-mini.svg"
                        alt="logo" /></a>
            </div>
            <ul class="nav">
                <li class="nav-item profile">
                    <div class="profile-desc">
                        <div class="profile-pic">
                            <div class="count-indicator">
                                <img class="img-xs rounded-circle " src="assets/images/faces/face15.jpg" alt="">
                                <span class="count bg-success"></span>
                            </div>
                            <div class="profile-name">
                                <h5 class="mb-0 font-weight-normal">Henry Klein</h5>
                                <span>Gold Member</span>
                            </div>
                        </div>
                        <a href="#" id="profile-dropdown" data-toggle="dropdown"><i
                                class="mdi mdi-dots-vertical"></i></a>
                        <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list"
                            aria-labelledby="profile-dropdown">
                            <a href="#" class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-dark rounded-circle">
                                        <i class="mdi mdi-settings text-primary"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-dark rounded-circle">
                                        <i class="mdi mdi-onepassword  text-info"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-dark rounded-circle">
                                        <i class="mdi mdi-calendar-today text-success"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </li>
                <li class="nav-item nav-category">
                    <span class="nav-link">Navigation</span>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="/">
                        <span class="menu-icon">
                            <i class="mdi mdi-speedometer"></i>
                        </span>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </li>



                <li class="nav-item menu-items">
                    <a class="nav-link" href="formuserlogin">
                        <span class="menu-icon">
                            <i class="mdi mdi-account-circle"></i>
                        </span>
                        <span class="menu-title">User Pegawai</span>
                    </a>
                </li>

                <li class="nav-item menu-items">
                    <a class="nav-link" href="logpegawai">
                        <span class="menu-icon">
                            <i class="mdi mdi-file-document-box"></i>
                        </span>
                        <span class="menu-title">Log Pegawai</span>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_navbar.html -->
            <nav class="navbar p-0 fixed-top d-flex flex-row">
                <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
                    <a class="navbar-brand brand-logo-mini" href=""><img src="assets/images/logo-mini.svg"
                            alt="logo" /></a>
                </div>
                <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
                    <button class="navbar-toggler navbar-toggler align-self-center" type="button"
                        data-toggle="minimize">
                        <span class="mdi mdi-menu"></span>
                    </button>

                    <ul class="navbar-nav navbar-nav-right">
                        <li class="nav-item dropdown d-none d-lg-block">
                        </li>


                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                                <div class="navbar-profile">
                                    <img class="img-xs rounded-circle" src="assets/images/faces/face15.jpg"
                                        alt="">
                                    <p class="mb-0 d-none d-sm-block navbar-profile-name">Syaki</p>
                                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                                aria-labelledby="profileDropdown">
                                <h6 class="p-3 mb-0">Profile</h6>
                                <div class="dropdown-divider"></div>

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item" href="{{ route('logout') }}">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-dark rounded-circle">
                                            <i class="mdi mdi-logout text-danger"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <p class="preview-subject mb-1">Log out</p>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <p class="p-3 mb-0 text-center">Advanced settings</p>
                            </div>
                        </li>
                    </ul>
                    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                        data-toggle="offcanvas">
                        <span class="mdi mdi-format-line-spacing"></span>
                    </button>
                </div>
            </nav>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                    </div>
                    <div class="row">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Table tambah data</h4>
                                    @if (session('success'))
                                        <div class="alert alert-success">
                                            {{ session('success') }}
                                        </div>
                                    @endif

                                    @if (session('  error'))
                                        <div class="alert alert-danger">
                                            {{ session('error') }}
                                        </div>
                                    @endif
                                    <button type="button"
                                        class="btn btn-outline-primary btn-icon-text mb-3"data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        <i class="mdi mdi-file-check btn-icon-prepend"></i> Tambah Pegawai </button>
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th> No </th>
                                                    <th> Nama Pegawai </th>
                                                    <th> Username </th>
                                                    <th> Password </th>
                                                    {{-- <th> Jabatan </th> --}}
                                                    <th> Aksi </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($dataUser as $user)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>

                                                        <td>{{ $user->name }} </td>
                                                        <td> {{ $user->email }}</td>
                                                        <td> {{ $user->password }}</td>
                                                        {{-- <td> {{ $user->jabatan }}</td> --}}

                                                        <td><a href="{{ route('admin.delete', $user->id) }}"
                                                                class="btn btn-outline-danger btn-icon-text"
                                                                onclick="return confirm('Are you sure you want to delete this item?')">
                                                                <i class="fas fa-trash"></i> Delete
                                                            </a>
                                                            <a href=""
                                                                class="btn btn-outline-warning btn-icon-text"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#exampleModalEdit">
                                                                <i class="fas fa-trash"></i> Edit
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- modal edit --}}
                        <div class="modal fade" id="exampleModalEdit" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Form Edit Data</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="modal-body">
                                            <div class="card">
                                                <div class="card-body">
                                                    <form class="forms-sample"
                                                        action="{{ route('admin.edit', $user->id) }}" method="post">
                                                        @csrf
                                                        @method('PUT')
                                                        <fieldset disabled>
                                                            <div class="form-group">
                                                                <label for="disabledTextInput">Id</label>
                                                                <input type="text" class="form-control"
                                                                    id="id" name="id"
                                                                    value="{{ $user->id }}">
                                                            </div>
                                                        </fieldset>
                                                        <div class="form-group">
                                                            <label for="exampleInputNamaPegawai">Nama
                                                                Pegawai</label>
                                                            <input type="text" class="form-control"
                                                                id="namapegawai" placeholder="Nama Pegawai"
                                                                name="nama_pegawai" value="{{ $user->name }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputUsername">Username</label>
                                                            <input type="text" class="form-control" id="username"
                                                                placeholder="username" name="username"
                                                                value="{{ $user->email }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputPassword">Password</label>
                                                            <input type="text" class="form-control" id="password"
                                                                placeholder="Password" name="password"
                                                                value="{{ $user->password }}">
                                                        </div>
                                                        {{-- <div class="form-group">
                                                            <label for="exampleInputjabatan">Jabatan</label>
                                                            <input type="text" class="form-control" id="jabatan"
                                                                placeholder="jabatan" name="jabatan"
                                                                value="{{ $user->jabatan }}">
                                                        </div> --}}
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Close</button>
                                                            <button type="submit"
                                                                class="btn btn-primary">Edit</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        {{-- end modal edit --}}
                        {{-- modal tambah --}}
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Form Tambah Data</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="card">
                                            <div class="card-body">
                                                <form class="forms-sample"
                                                    action="{{ route('admin.tambahPegawai') }}" method="post">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label for="exampleInputNamaPegawai">Nama Pegawai</label>
                                                        <input type="text" class="form-control" id="namapegawai"
                                                            placeholder="Nama Pegawai" name="nama_pegawai">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputUsername">Username</label>
                                                        <input type="text" class="form-control" id="username"
                                                            placeholder="username" name="username">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputPassword">Password</label>
                                                        <input type="text" class="form-control" id="password"
                                                            placeholder="Password" name="password">
                                                    </div>
                                                    {{-- <div class="form-group">
                                                        <label for="exampleInputjabatan">Jabatan</label>
                                                        <input type="text" class="form-control" id="jabatan"
                                                            placeholder="jabatan" name="jabatan">
                                                    </div> --}}
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- end modal tambah --}}
                                </div>
                            </div>
                        </div>
                        <!-- container-scroller -->
                        <!-- plugins:js -->
                        <script src="assets/vendors/js/vendor.bundle.base.js"></script>
                        <!-- endinject -->
                        <!-- Plugin js for this page -->
                        <script src="assets/vendors/chart.js/Chart.min.js"></script>
                        <script src="assets/vendors/progressbar.js/progressbar.min.js"></script>
                        <script src="assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
                        <script src="assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
                        <script src="assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
                        <!-- End plugin js for this page -->
                        <!-- inject:js -->
                        <script src="assets/js/off-canvas.js"></script>
                        <script src="assets/js/hoverable-collapse.js"></script>
                        <script src="assets/js/misc.js"></script>
                        <script src="assets/js/settings.js"></script>
                        <script src="assets/js/todolist.js"></script>
                        <!-- endinject -->
                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
                            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
                        </script>
                        <!-- Custom js for this page -->
                        <script src="assets/js/dashboard.js"></script>
                        <!-- End custom js for this page -->
</body>

</html>
