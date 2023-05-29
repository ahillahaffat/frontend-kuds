<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    

    <link rel="stylesheet" href="{{ asset('/css/vendor/bootstrap.min.css') }}" />
<link rel="stylesheet" href="{{ asset('/css/vendor/vandella.css') }}" />
<link rel="stylesheet" href="{{ asset('/css/vendor/jellybelly.css') }}" />
<link rel="stylesheet" href="{{ asset('/css/vendor/icofont.min.css') }}" />
<link rel="stylesheet" href="{{ asset('/css/vendor/fontello.css') }}" />
<link rel="stylesheet" href="{{ asset('/css/plugins/easyzoom.css') }}" />
<link rel="stylesheet" href="{{ asset('/css/plugins/slick.css') }}" />
<link rel="stylesheet" href="{{ asset('/css/plugins/nice-select.css') }}" />
<link rel="stylesheet" href="{{ asset('/css/plugins/animate.css') }}" />
<link rel="stylesheet" href="{{ asset('/css/plugins/magnific-popup.css') }}" />
<link rel="stylesheet" href="{{ asset('/css/plugins/jquery-ui.css') }}" />
<link rel="stylesheet" href="{{ asset('/css/style.css') }}" />
<link rel="stylesheet" href="{{ asset('/css/informasi-umum.css') }}" />
<link rel="stylesheet" href="{{ asset('/css/my-account.css') }}" />

<script src="{{ asset('/js/informasi-umu.js') }}"></script>
<style>
        .sidebar-widget.sticky {
    position: sticky;
    top: 110px;
    overflow-y: auto;
}

.navbar {
    margin-bottom: 200px; /* Ganti "200px" dengan tinggi sidebar-widget atau tinggi tambahan yang diperlukan */
}


    /* Gaya tambahan untuk elemen lain di dalam menu */
    .myaccount-tab-menu a {
        display: block;
        padding: 10px;
        color: #333;
        text-decoration: none;
    }

    .myaccount-tab-menu a:hover {
        color: purple;
    }

    .myaccount-tab-menu a.active {
        background-color: purple;
        color: #fff;
    }
</style>
</head>
<body>
    @include('navbar')
<div class="breadcrumb-area breadcrumb-mt breadcrumb-ptb-2">
        <div class="container">
          <div class="breadcrumb-content">
            <ul>
              <li>
                <a href="/">Home</a>
              </li>
              <li><span> > </span></li>
              <li>
                <a href="/shop">Product</a>
              </li>
              <li><span> > </span></li>
              <li class="active">My Account</li>
            </ul>
          </div>
        </div>
      </div>
      @if (session('success'))
    <div id="session-message" class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
    <script>
        setTimeout(function() {
            document.getElementById('session-message').remove();
        }, 15000); // Timeout 15 detik (15000 milidetik)
    </script>
@endif

      <!-- my account wrapper start -->
<div class="my-account-wrapper bg-gray pt-50 pb-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- My Account Page Start -->
                <div class="myaccount-page-wrapper">
                    <!-- My Account Tab Menu Start -->
                    <div class="row">
                        <div class="col-lg-3 col-md-4">
                            <div class="sidebar-widget sticky">
                                <div class="sidebar-widget-categori mb-70">
                                    <ul>
                                        <li><a href="#dashboard" class="active" data-toggle="tab">Informasi Umum</a></li>
                                        <li><a href="#address-edit" data-toggle="tab">Alamat Pengiriman</a></li>
                                        <li><a href="#orders" data-toggle="tab">Orders</a></li>
                                        <li><a href="login-register.html">Logout</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- My Account Tab Menu End -->
                        <!-- My Account Tab Content Start -->
                        <div class="col-lg-9 col-md-8">
                            <div class="tab-content" id="myaccountContent">
                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade show active" id="dashboard" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>Informasi Umum</h3>
                                        <div class="welcome">
                                            <div class="profile-wrapper">
                                                <div class="profile-icon">
                                                    <div class="circle">
                                                        <img id="profile-image" src="{{ Auth::user()->photo }}" />
                                                    </div>
                                                </div>
                                                <div class="profile-buttons">
                                                    <input type="file" id="upload-input" style="display: none;" accept="image/*" onchange="previewProfilePhoto(event)" />
                                                </div>
                                            </div>
                                        </div>

                                        <form method="POST" action="{{ route('profile.updateGeneralInfo') }}" enctype="multipart/form-data" id="profile-form">
                                            @method('PUT')
                                            @csrf
                                            <div class="form-group">
                                                <label for="name" class="col-form-label">Nama:</label>
                                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name', Auth::user()->name) }}" required autocomplete="name" autofocus>
                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="photo" class="col-form-label">Foto Profil:</label>
                                                <input type="file" id="photo" name="photo" accept="image/*" onchange="previewProfilePhoto(event)">
                                            </div>

                                            <div class="form-group text-right">
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="myaccount-content">
                              <h3>Email & Nomor Telepon</h3>
                              <form action="{{ route('profile.updateEmailPhone') }}" method="POST" id="email-phone-form">
                                  @method('PUT')
                                  @csrf
                                  <div class="form-group">
                                      <label for="email" class="col-form-label">Email:</label>
                                      <input type="email" id="email" name="email" class="form-control" value="{{ Auth::user()->email }}" required>
                                  </div>

                                  <div class="form-group">
                                      <label for="phone" class="col-form-label">Telepon:</label>
                                      <input type="tel" id="phone" name="phone" class="form-control" value="{{ Auth::user()->no_telp }}">
                                  </div>

                                  <div class="form-group">
                                      <button type="submit" class="btn btn-primary">Simpan</button>
                                  </div>
                              </form>
                          </div>
                          <div class="myaccount-content">
                              <h3>Ubah Kata Sandi</h3>
                              <form action="{{ route('profile.updatePassword') }}" method="POST" id="password-form">
                                  @method('PUT')
                                  @csrf
                                  <div class="form-group">
                                      <label for="old-password" class="col-form-label">Kata Sandi Lama:</label>
                                      <input type="password" id="old-password" name="old_password" class="form-control" placeholder="Masukkan kata sandi lama">
                                  </div>

                                  <div class="form-group">
                                      <label for="new-password" class="col-form-label">Kata Sandi Baru:</label>
                                      <input type="password" id="new-password" name="new_password" class="form-control" placeholder="Masukkan kata sandi baru">
                                  </div>

                                  <div class="form-group">
                                      <label for="confirm-password" class="col-form-label">Ulangi Kata Sandi:</label>
                                      <input type="password" id="confirm-password" name="new_password_confirmation" class="form-control" placeholder="Ulangi kata sandi baru">
                                  </div>
                                  <div class="form-group">
                                      <button type="submit" class="btn btn-primary">Simpan</button>
                                  </div>
                                  </form>
                        </div>
                                </div>
                                <!-- Single Tab Content End -->
                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade" id="address-edit" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>Informasi Alamat</h3>
                                        <address>
                                            <p><strong>Alex Tuntuni</strong></p>
                                            <p>
                                                1355 Market St, Suite 900 <br />
                                                San Francisco, CA 94103
                                            </p>
                                            <p>Mobile: (123) 456-7890</p>
                                        </address>
                                        <a href="#" class="check-btn sqr-btn edit-address-btn"><i class="fas fa-edit"></i> Edit Address</a>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->
                                <div class="tab-pane fade" id="orders" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>Orders</h3>
                                        <div class="myaccount-table table-responsive text-center">
                                            <table class="table table-bordered">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th>Order</th>
                                                        <th>Date</th>
                                                        <th>Status</th>
                                                        <th>Total</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Aug 22, 2018</td>
                                                        <td>Pending</td>
                                                        <td>$3000</td>
                                                        <td><a href="cart.html" class="check-btn sqr-btn">View</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>July 22, 2018</td>
                                                        <td>Approved</td>
                                                        <td>$200</td>
                                                        <td><a href="cart.html" class="check-btn sqr-btn">View</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>June 12, 2017</td>
                                                        <td>On Hold</td>
                                                        <td>$990</td>
                                                        <td><a href="cart.html" class="check-btn sqr-btn">View</a></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->
                            </div>
                        </div>
                    </div>
                    <!-- My Account Tab Content End -->
                </div>
            </div>
            <!-- My Account Page End -->
        </div>
    </div>
</div>
<!-- my account wrapper end -->

<!-- JavaScript -->
    <!-- my account wrapper end -->
    @include('footer')
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Dapatkan semua tab menu
        const tabMenuItems = document.querySelectorAll('.sidebar-widget-categori ul li a');

        // Tambahkan event listener untuk setiap tab menu
        tabMenuItems.forEach(function(tabMenuItem) {
            tabMenuItem.addEventListener('click', function(event) {
                event.preventDefault();

                // Hapus kelas 'active' dari semua tab menu
                tabMenuItems.forEach(function(item) {
                    item.classList.remove('active');
                });

                // Hapus kelas 'show' dan 'active' dari semua konten tab
                const tabContents = document.querySelectorAll('.tab-pane');
                tabContents.forEach(function(tabContent) {
                    tabContent.classList.remove('show', 'active');
                });

                // Tambahkan kelas 'active' ke tab menu yang diklik
                tabMenuItem.classList.add('active');

                // Dapatkan ID konten tab yang sesuai dengan tab menu yang diklik
                const target = tabMenuItem.getAttribute('href');

                // Tambahkan kelas 'show' dan 'active' ke konten tab yang sesuai
                document.querySelector(target).classList.add('show', 'active');
            });
        });
    });
</script>
    <script>
    function previewProfilePhoto(event) {
        const file = event.target.files[0];
        const reader = new FileReader();

        reader.onload = function() {
            const image = document.getElementById('profile-image');
            const circle = document.querySelector('.circle');

            image.onload = function() {
                const imageWidth = this.width;
                const imageHeight = this.height;
                const circleSize = parseInt(getComputedStyle(circle).width, 10);

                // Menetapkan ukuran gambar sesuai dengan lingkaran
                if (imageWidth > imageHeight) {
                    image.style.width = 'auto';
                    image.style.height = '100%';
                } else {
                    image.style.width = '100%';
                    image.style.height = 'auto';
                }

                // Mengatur margin vertikal agar gambar berada di tengah lingkaran
                const marginTop = (circleSize - image.offsetHeight) / 2;
                image.style.marginTop = `${marginTop}px`;
            };

            image.src = reader.result;
        };

        reader.readAsDataURL(file);
    }
</script>
    <script>
        window.addEventListener('scroll', function() {
            var tabMenu = document.querySelector('.myaccount-tab-menu');
            var tabContent = document.querySelector('.myaccount-tab-content');

            var tabMenuTop = tabMenu.getBoundingClientRect().top;
            var tabContentTop = tabContent.getBoundingClientRect().top;

            if (tabMenuTop <= 0) {
                tabMenu.classList.add('sticky');
                tabContent.style.paddingTop = tabMenu.offsetHeight + 'px';
            } else {
                tabMenu.classList.remove('sticky');
                tabContent.style.paddingTop = '50px';
            }
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="{{ asset('/js/uphoto.js') }}"></script>
        <script src="{{ asset('/js/vendor/modernizr-3.6.0.min.js') }}"></script>
<script src="{{ asset('/js/vendor/jquery-3.5.1.min.js') }}"></script>
<script src="{{ asset('/js/vendor/jquery-migrate-3.3.0.min.js') }}"></script>
<script src="{{ asset('/js/vendor/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('/js/plugins/slick.js') }}"></script>
<script src="{{ asset('/js/plugins/countdown.js') }}"></script>
<script src="{{ asset('/js/plugins/wow.js') }}"></script>
<script src="{{ asset('/js/plugins/instafeed.js') }}"></script>
<script src="{{ asset('/js/plugins/svg-injector.min.js') }}"></script>
<script src="{{ asset('/js/plugins/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('/js/plugins/mouse-parallax.js') }}"></script>
<script src="{{ asset('/js/plugins/images-loaded.js') }}"></script>
<script src="{{ asset('/js/plugins/isotope.js') }}"></script>
<script src="{{ asset('/js/plugins/jquery-ui-touch-punch.js') }}"></script>
<script src="{{ asset('/js/plugins/jquery-ui.js') }}"></script>
<script src="{{ asset('/js/plugins/magnific-popup.js') }}"></script>
<script src="{{ asset('/js/plugins/easyzoom.js') }}"></script>
<script src="{{ asset('/js/plugins/scrollup.js') }}"></script>
<script src="{{ asset('/js/plugins/ajax-mail.js') }}"></script>
<script src="{{ asset('/js/main.js') }}"></script>
</body>
</html>