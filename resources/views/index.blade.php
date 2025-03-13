@extends('layout.admin')
@section('main')
    <div class="wrapper">
        <div class="sidebar">
            <div class="sidebar-header">
                <img src="{{ asset('admin_assets/img/profile.jpg') }}" alt="Image">
            </div>
            <div class="sidebar-content">
                <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                    <a href="#" class="navbar-brand">Navigation</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="nav navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="#header">Home<i class="fa fa-home"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#about">About<i class="fa fa-address-card"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#experience">Experience<i class="fa fa-star"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#service">Service<i class="fa fa-tasks"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#portfolio">Portfolio<i class="fa fa-file-archive"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#contact">Contact<i class="fa fa-envelope"></i></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="sidebar-footer">
                <a href="https://www.facebook.com/share/15GT54a79Q/"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.linkedin.com/in/hardik-kachhad-446534244"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
        <div class="content">
            <!-- Header Start -->
            <div class="header" id="header">
                <div class="content-inner">
                    <p>I'm</p>
                    <h1>Hardik Kachhad</h1>
                    <h2></h2>
                    <div class="typed-text"> Web Developer, Php Laravel Developer</div>
                </div>
            </div>
            <!-- Header End -->

            <!-- Large Button Start -->
            <div class="large-btn">
                <div class="content-inner">
                    <a class="btn" href="{{ route('resume.download') }}"><i class="fa fa-download"></i>Resume</a>
                    <a class="btn" href="tel:+916354970721"><i class="fa fa-hands-helping"></i>Hire Me</a>
                </div>
            </div>
            <!-- Large Button End -->

            <!-- About Start -->
            <div class="about" id="about">
                <div class="content-inner">
                    <div class="content-header">
                        <h2>About Me</h2>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-md-6 col-lg-5">
                            <img src="{{ asset('admin_assets/img/about.jpg') }}" alt="Image">
                        </div>
                        <div class="col-md-6 col-lg-7">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu suscipit orci. Donec
                                molestie velit id libero blandit, quis suscipit urna suscipit. Donec aliquet erat eu lacinia
                                iaculis. Ut tempor tellus eu sem pharetra feugiat. Proin libero ligula, gravida at porttitor
                                eget.
                            </p>
                            <a class="btn" href="tel:+916354970721">Hire Me</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="skills">
                                <div class="skill-name">
                                    <p>Design</p>
                                    <p>85%</p>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                                <div class="skill-name">
                                    <p>SEO</p>
                                    <p>95%</p>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="skills">
                                <div class="skill-name">
                                    <p>Development</p>
                                    <p>90%</p>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                                <div class="skill-name">
                                    <p>Marketing</p>
                                    <p>85%</p>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About End -->

            <!-- Education Start -->
            <div class="education" id="education">
                <div class="content-inner">
                    <div class="content-header">
                        <h2>Education</h2>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="edu-col">
                                <span>01-Jan-2020 <i>to</i> 31-Dec-2050</span>
                                <h3>Master Degree</h3>
                                <p>Lorem ipsum dolor sit amet elit suscipit orci. Donec molestie velit id libero.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="edu-col">
                                <span>01-Jan-2020 <i>to</i> 31-Dec-2050</span>
                                <h3>Bachelor Degree</h3>
                                <p>Lorem ipsum dolor sit amet elit suscipit orci. Donec molestie velit id libero.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="edu-col">
                                <span>01-Jan-2020 <i>to</i> 31-Dec-2050</span>
                                <h3>Associate Degree</h3>
                                <p>Lorem ipsum dolor sit amet elit suscipit orci. Donec molestie velit id libero.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="edu-col">
                                <span>01-Jan-2020 <i>to</i> 31-Dec-2050</span>
                                <h3>High School</h3>
                                <p>Lorem ipsum dolor sit amet elit suscipit orci. Donec molestie velit id libero.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Education Start -->

            <!-- Experience Start -->
            <div class="experience" id="experience">
                <div class="content-inner">
                    <div class="content-header">
                        <h2>Experience</h2>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="exp-col">
                                <span>01-Jan-2020 <i>to</i> 31-Dec-2050</span>
                                <h3>Codex Solution</h3>
                                <h4>San Francisco, CA</h4>
                                <h5>Project Manager</h5>
                                <p>Lorem ipsum dolor sit amet elit suscipit orci. Donec molestie velit id libero.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="exp-col">
                                <span>01-Jan-2020 <i>to</i> 31-Dec-2050</span>
                                <h3>Soft Solution Ltd</h3>
                                <h4>San Francisco, CA</h4>
                                <h5>Web Developer</h5>
                                <p>Lorem ipsum dolor sit amet elit suscipit orci. Donec molestie velit id libero.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="exp-col">
                                <span>01-Jan-2020 <i>to</i> 31-Dec-2050</span>
                                <h3>ABC Soft Ltd</h3>
                                <h4>San Francisco, CA</h4>
                                <h5>Web Designer</h5>
                                <p>Lorem ipsum dolor sit amet elit suscipit orci. Donec molestie velit id libero.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="exp-col">
                                <span>01-Jan-2020 <i>to</i> 31-Dec-2050</span>
                                <h3>Soft Agency</h3>
                                <h4>San Francisco, CA</h4>
                                <h5>Graphic Designer</h5>
                                <p>Lorem ipsum dolor sit amet elit suscipit orci. Donec molestie velit id libero.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Experience Start -->

            <!-- Service Start -->
            <div class="service" id="service">
                <div class="content-inner">
                    <div class="content-header">
                        <h2>Service</h2>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="srv-col">
                                <i class="fa fa-desktop"></i>
                                <h3>Web Design</h3>
                                <p>Lorem ipsum dolor sit amet elit suscipit orci. Donec molestie velit id libero.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="srv-col">
                                <i class="fa fa-laptop"></i>
                                <h3>Web Development</h3>
                                <p>Lorem ipsum dolor sit amet elit suscipit orci. Donec molestie velit id libero.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="srv-col">
                                <i class="fa fa-search"></i>
                                <h3>SEO</h3>
                                <p>Lorem ipsum dolor sit amet elit suscipit orci. Donec molestie velit id libero.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="srv-col">
                                <i class="fa fa-envelope-open-text"></i>
                                <h3>Digital Marketing</h3>
                                <p>Lorem ipsum dolor sit amet elit suscipit orci. Donec molestie velit id libero.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Service Start -->

            <!-- Portfolio Start -->
            <div class="portfolio" id="portfolio">
                <div class="content-inner">
                    <div class="content-header">
                        <h2>Portfolio</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <ul id="portfolio-flters">
                                <li data-filter="*" class="filter-active">All</li>
                                <li data-filter=".web-dev">Development</li>
                            </ul>
                        </div>
                    </div>
                    <div class="row portfolio-container">
                        <div class="col-lg-4 col-md-6 portfolio-item web-des">
                            <div class="portfolio-wrap">
                                <figure>
                                    <img src="{{ asset('admin_assets/img/portfolio-1.jpg') }}" class="img-fluid"
                                        alt="">
                                    <a href="{{ asset('admin_assets/img/portfolio-1.jpg') }}" data-lightbox="portfolio"
                                        data-title="Project Name" class="link-preview" title="Preview"><i
                                            class="fa fa-eye"></i></a>
                                    <a href="#" class="link-details" title="More Details"><i
                                            class="fa fa-link"></i></a>
                                    <a class="portfolio-title" href="#">Project Name <span>Web Design</span></a>
                                </figure>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 portfolio-item web-des">
                            <div class="portfolio-wrap">
                                <figure>
                                    <img src="{{ asset('admin_assets/img/portfolio-2.jpg') }}" class="img-fluid"
                                        alt="">
                                    <a href="{{ asset('admin_assets/img/portfolio-2.jpg') }}" class="link-preview"
                                        data-lightbox="portfolio" data-title="Project Name" title="Preview"><i
                                            class="fa fa-eye"></i></a>
                                    <a href="#" class="link-details" title="More Details"><i
                                            class="fa fa-link"></i></a>
                                    <a class="portfolio-title" href="#">Project Name <span>Web Design</span></a>
                                </figure>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 portfolio-item web-dev">
                            <div class="portfolio-wrap">
                                <figure>
                                    <img src="{{ asset('admin_assets/img/portfolio-3.jpg') }}" class="img-fluid"
                                        alt="">
                                    <a href="{{ asset('admin_assets/img/portfolio-3.jpg') }}" class="link-preview"
                                        data-lightbox="portfolio" data-title="Project Name" title="Preview"><i
                                            class="fa fa-eye"></i></a>
                                    <a href="#" class="link-details" title="More Details"><i
                                            class="fa fa-link"></i></a>
                                    <a class="portfolio-title" href="#">Project Name <span>Web
                                            Development</span></a>
                                </figure>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 portfolio-item web-dev">
                            <div class="portfolio-wrap">
                                <figure>
                                    <img src="{{ asset('admin_assets/img/portfolio-4.jpg') }}" class="img-fluid"
                                        alt="">
                                    <a href="{{ asset('admin_assets/git branch -M mainimg/portfolio-4.jpg') }}"
                                        class="link-preview" data-lightbox="portfolio" data-title="Project Name"
                                        title="Preview"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="link-details" title="More Details"><i
                                            class="fa fa-link"></i></a>
                                    <a class="portfolio-title" href="#">Project Name <span>Web
                                            Development</span></a>
                                </figure>
                            </div>
                        </div>

                        {{-- <div class="col-lg-4 col-md-6 portfolio-item dig-mar">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="img/portfolio-5.jpg" class="img-fluid" alt="">
                                <a href="img/portfolio-5.jpg" class="link-preview" data-lightbox="portfolio" data-title="Project Name" title="Preview"><i class="fa fa-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i class="fa fa-link"></i></a>
                                <a class="portfolio-title" href="#">Project Name <span>Digital Marketing</span></a>
                            </figure>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item dig-mar">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="img/portfolio-6.jpg" class="img-fluid" alt="">
                                <a href="img/portfolio-6.jpg" class="link-preview" data-lightbox="portfolio" data-title="Project Name" title="Preview"><i class="fa fa-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i class="fa fa-link"></i></a>
                                <a class="portfolio-title" href="#">Project Name <span>Digital Marketing</span></a>
                            </figure>
                        </div>
                    </div> --}}
                    </div>
                </div>
            </div>
            <!-- Portfolio Start -->

            <!-- Review Start -->
            {{-- <div class="review" id="review">
            <div class="content-inner">
                <div class="content-header">
                    <h2>Review</h2>
                </div>
                <div class="row align-items-center review-slider">
                    <div class="col-md-12">
                        <div class="review-slider-item">
                            <div class="review-text">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu suscipit orci. Donec molestie velit id libero blandit, quis suscipit urna suscipit. Donec aliquet erat eu lacinia iaculis. Ut tempor tellus eu sem pharetra feugiat.
                                </p>
                            </div>
                            <div class="review-img">
                                <img src="img/review-1.jpg" alt="Image">
                                <div class="review-name">
                                    <h3>Client Name</h3>
                                    <p>Profession</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="review-slider-item">
                            <div class="review-text">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu suscipit orci. Donec molestie velit id libero blandit, quis suscipit urna suscipit. Donec aliquet erat eu lacinia iaculis. Ut tempor tellus eu sem pharetra feugiat.
                                </p>
                            </div>
                            <div class="review-img">
                                <img src="img/review-2.jpg" alt="Image">
                                <div class="review-name">
                                    <h3>Client Name</h3>
                                    <p>Profession</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="review-slider-item">
                            <div class="review-text">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu suscipit orci. Donec molestie velit id libero blandit, quis suscipit urna suscipit. Donec aliquet erat eu lacinia iaculis. Ut tempor tellus eu sem pharetra feugiat.
                                </p>
                            </div>
                            <div class="review-img">
                                <img src="img/review-3.jpg" alt="Image">
                                <div class="review-name">
                                    <h3>Client Name</h3>
                                    <p>Profession</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
            <!-- Review End -->

            <!-- Contact Start -->
            <div class="contact" id="contact">
                <div class="content-inner">
                    <div class="content-header">
                        <h2>Contact</h2>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="contact-info">
                                <p><i class="fa fa-user"></i>Hardik Kachhad</p>
                                <p><i class="fa fa-tag"></i>Web Developer</p>
                                <p><i class="fa fa-envelope"></i><a
                                        href="mailto:info@example.com">hardikkachhad08@gmail.com</a></p>
                                <p><i class="fa fa-phone"></i><a href="tel:+1234567890">+91 6354970721</a></p>
                                <p><i class="fa fa-map-marker"></i>395010 Surat, Gujarat, India</p>
                                <div class="social">
                                    <a class="btn" href="https://www.facebook.com/share/15GT54a79Q/"><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a class="btn" href="https://www.linkedin.com/in/hardik-kachhad-446534244"><i
                                            class="fab fa-linkedin-in"></i></a>
                                    <a class="btn"
                                        href="https://www.instagram.com/hardik_ahir_124/profilecard/?igsh=MTFmZmp5cmpnYXg2OA=="><i
                                            class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form">
                                <form id="contact-form" novalidate>
                                    <input type="hidden" name="access_key" value="8db3b283-0f74-4fc6-95ae-3dfd9d1525dc">

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="name">Your Name</label>
                                            <input type="text" class="form-control" id="name" name="name"
                                                placeholder="Your Name" required />
                                            <div class="valid-feedback">Looks good!</div>
                                            <div class="invalid-feedback">Name is required!</div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="email">Your Email</label>
                                            <input type="email" class="form-control" id="email" name="email"
                                                placeholder="Your Email" required />
                                            <div class="valid-feedback">Looks good!</div>
                                            <div class="invalid-feedback">Enter a valid email address!</div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="mobile">Mobile Number</label>
                                        <input type="text" class="form-control" id="mobile" name="MobileNumber"
                                            placeholder="Mobile Number" required />
                                        <div class="valid-feedback">Looks good!</div>
                                        <div class="invalid-feedback">Enter a valid 10-digit mobile number!</div>
                                    </div>

                                    <div class="form-group">
                                        <label for="message">Message</label>
                                        <textarea class="form-control" id="message" name="message" rows="5" placeholder="Message" required></textarea>
                                        <div class="valid-feedback">Looks good!</div>
                                        <div class="invalid-feedback">Message must be at least 10 characters!</div>
                                    </div>

                                    <div>
                                        <button class="btn btn-primary" type="submit">Send Message</button>
                                    </div>
                                </form>

                                <!-- Bootstrap Alert Messages -->
                                <div id="form-message" class="mt-3"></div>
                            </div>
                        </div>

                        <!-- JavaScript (Validation & AJAX) -->
                        <script>
                            document.getElementById("contact-form").addEventListener("submit", async function(event) {
                                event.preventDefault(); // Prevent default form submission

                                let isValid = true;

                                // Get form fields
                                let name = document.getElementById("name");
                                let email = document.getElementById("email");
                                let mobile = document.getElementById("mobile");
                                let message = document.getElementById("message");

                                // Reset Bootstrap validation classes
                                name.classList.remove("is-invalid", "is-valid");
                                email.classList.remove("is-invalid", "is-valid");
                                mobile.classList.remove("is-invalid", "is-valid");
                                message.classList.remove("is-invalid", "is-valid");

                                // Validate Name
                                if (name.value.trim() === "") {
                                    name.classList.add("is-invalid");
                                    isValid = false;
                                } else {
                                    name.classList.add("is-valid");
                                }

                                // Validate Email
                                let emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
                                if (!email.value.match(emailPattern)) {
                                    email.classList.add("is-invalid");
                                    isValid = false;
                                } else {
                                    email.classList.add("is-valid");
                                }

                                // Validate Mobile Number
                                let mobilePattern = /^[0-9]{10}$/;
                                if (!mobile.value.match(mobilePattern)) {
                                    mobile.classList.add("is-invalid");
                                    isValid = false;
                                } else {
                                    mobile.classList.add("is-valid");
                                }

                                // Validate Message
                                if (message.value.trim().length < 10) {
                                    message.classList.add("is-invalid");
                                    isValid = false;
                                } else {
                                    message.classList.add("is-valid");
                                }

                                if (!isValid) return; // Stop submission if validation fails

                                // Proceed with form submission
                                let formData = new FormData(this);
                                let response = await fetch("https://api.web3forms.com/submit", {
                                    method: "POST",
                                    body: formData
                                });

                                let result = await response.json();
                                let messageDiv = document.getElementById("form-message");

                                if (result.success) {
                                    messageDiv.innerHTML = `
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <strong>Success!</strong> Your message has been sent successfully.
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>`;
                                    this.reset(); // Clear form fields
                                    document.querySelectorAll(".form-control").forEach(field => field.classList.remove(
                                    "is-valid")); // Reset validation styles
                                } else {
                                    messageDiv.innerHTML = `
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <strong>Error!</strong> ${result.message}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>`;
                                }
                            });
                        </script>

                        <!-- CSS for Bootstrap Styling -->
                        <style>
                            .error-message {
                                font-size: 14px;
                                margin-top: 4px;
                                display: block;
                            }
                        </style>



                    </div>
                </div>
            </div>
            <!-- Contact End -->

            <!-- Footer Start -->
            <div class="footer">
                <div class="content-inner">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <p>&copy; Copyright 2025</p>
                        </div>
                        <div class="col-md-6">
                            <p>Powered by Hardik Kachhad</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer Start -->
        </div>
    </div>

    <!-- Back to Top -->
    <a href="#" class="back-to-top"><i class="fa fa-angle-double-up"></i></a>
@endsection
