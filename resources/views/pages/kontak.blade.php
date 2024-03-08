<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>PPID Kota Surakarta</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        @include('include.style')
    </head>

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        @include('include.navbar')

        <!-- Form Review Start -->
            <div class="container-fluid booking py-5">
                <div class="container py-5">
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-6">
                            <h5 class="section-booking-title pe-3">Review</h5>
                            <h1 class="text-white mb-4">Ulasan</h1>
                            <p class="text-white mb-4">Berdasarkan Informasi yang ada pada Website PPID Kota Surakarta ini, apabila ada kekurangan terkait informasi silahkan isi ulasan berikut ini !!
                            </p>
                            <p class="text-white mb-4">Silahkan berikan Ulasan Terbaik Anda, sesuai dengan ketentuan dan kejelasan dalam website PPID Kota Surakarta.
                            </p>
                            <a href="#" class="btn btn-light text-primary rounded-pill py-3 px-5 mt-2">Read More</a>
                        </div>
                        <div class="col-lg-6">
                            <h1 class="text-white mb-3">Formulir Ulasan</h1>
                            <p class="text-white mb-4">Isilah ulasan dengan baik <span class="text-warning">Terimakasih.</span></p>
                            <form>
                                <div class="mb-3">
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                </div>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control bg-white border-0" id="name" placeholder="Your Name">
                                            <label for="name">Your Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <select class="form-select bg-white border-0" id="select1">
                                                <option value="1">Mahasiswa</option>
                                                <option value="2">Pekerja</option>
                                                <option value="3">Penduduk Lokal</option>
                                            </select>
                                            <label for="select1">Status</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">

                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control bg-white border-0" placeholder="Special Request" id="message" style="height: 100px"></textarea>
                                            <label for="message">Ulasan</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary text-white w-100 py-3" type="submit">Kirim</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Form Review End -->

            <!-- Kontak Kami Start -->
            <div class="container-xxl py-5">
                <div class="container">
                    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                        <h6 class="section-title bg-white text-center text-primary px-3">Contact Us</h6>
                        <h1 class="mb-5">Contact For Any Query</h1>
                    </div>
                    <div class="row g-4">
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <h5>Get In Touch</h5>
                            <p class="mb-4">The contact form is currently inactive. Get a functional and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done. <a href="https://htmlcodex.com/contact-form">Download Now</a>.</p>
                            <div class="d-flex align-items-center mb-3">
                                <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px;">
                                    <i class="fa fa-phone-alt text-white"></i>
                                </div>
                                <div class="ms-3">
                                    <h5 class="text-primary">Telepon</h5>
                                    <p class="mb-0">(0271) 2931669</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px;">
                                    <i class="fa fa-envelope-open text-white"></i>
                                </div>
                                <div class="ms-3">
                                    <h5 class="text-primary">Email</h5>
                                    <p class="mb-0">ppid@surakarta.go.id</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px;">
                                    <i class="fa fa-clock text-white"></i>
                                </div>
                                <div class="ms-3">
                                    <h5 class="text-primary">Jam Operasional</h5>
                                    <p class="mb-0">Senin - Kamis : 07:15 - 16:00
                                    </p>Jumat : 07:00 - 11:30</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                            <iframe class="position-relative rounded w-100 h-100"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
                                frameborder="0" style="min-height: 300px; border:0;" allowfullscreen="" aria-hidden="false"
                                tabindex="0"></iframe>
                        </div>
                        <div class="col-lg-4 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                        </div>
                    </div>
                </div>
            </div>
        <!-- Kontak Kami End -->
  
        @include('include.footer')

        
        @include('include.script')
    </body>

</html>