<!doctype html>
<html lang="en">

<head>
    <?php $page = "Contact Us" ?>
    <meta content="" name="keywords">
    <meta content="" name="description">
    <?php include 'include/headerlink.php' ?>
</head>

<body class="bg-light">
    <?php include 'include/header.php' ?>

    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h4 class="text-white display-4 mb-4 wow " >Contact Us</h4>
            <ol class="breadcrumb d-flex justify-content-center mb-0 wow ">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active text-primary"><?php echo $page ?></li>
            </ol>
        </div>
    </div>

    <section class="contact py-5">
        <div class="container">
            <div class="row">
                <!-- Contact Form Section -->
                <div class="col-md-4">
                    <div class="form-section shadow p-4 bg-white rounded">
                        <h3 class="fw-bold text-center mb-3">Contact Us</h3>
                        <form id="contactForm">
                            <div class="mb-3">
                                <label class="form-label">Your Name *</label>
                                <input type="text" class="form-control" placeholder="Enter Your Name" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email *</label>
                                <input type="email" class="form-control" placeholder="Enter Your Email" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Phone *</label>
                                <input type="text" class="form-control" placeholder="Enter Your Mobile No" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Message</label>
                                <textarea class="form-control" placeholder="Tell us how we can help" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Submit</button>
                        </form>
                    </div>
                </div>

                <!-- Contact Info Section -->
                <div class="col-md-8 d-flex justify-content-center align-items-center">
                    <div class="info-section shadow p-4 bg-white rounded w-100 text-center">
                        <h3 class="fw-bold">Get In Touch !!</h3>
                        <div class="row mt-4">
                            <div class="col-md-4">
                                <img class=" img-fluid" src="img/icons/icons8-message.gif" alt="Email">
                                <h4>Email</h4>
                                <p><img src="img/icons/chat.png" width="8%" class="img-fluid rounded-circle" alt="Email"> info@schoolname.com</p>
                            </div>
                            <div class="col-md-4">
                                <img class=" img-fluid" src="img/icons/icons8-call.gif" alt="Phone">
                                <h4>Phone</h4>
                                <p><img src="img/icons/call.png" width="8%" class="img-fluid rounded-circle" alt="Phone"> +91 7004515210</p>
                                <p><img src="img/icons/call.png" width="8%" class="img-fluid rounded-circle" alt="Phone"> +91 9162425039</p>
                            </div>
                            <div class="col-md-4">
                                <img class=" img-fluid " src="img/icons/icons8-map.gif" alt="Address">
                                <h4>Address</h4>
                                <p>Near Kamlesh Dubey Chowk, Ratu, Pirra, Jharkhand 835222</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4097.807396612826!2d85.18832717567443!3d23.326734804908455!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f4df4c9fd98c15%3A0x239bebcbb15141b3!2sW.%20John%20Multipurpose%20Boarding%20School!5e1!3m2!1sen!2sin!4v1741686382474!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <?php include 'include/footer.php' ?>
    <?php include 'include/footerlink.php' ?>
</body>

</html>