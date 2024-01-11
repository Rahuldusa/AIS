<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- <title>Contact Us</title> -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/plugins/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/plugins/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<style>
    .error {
        color: red;
        size: 80%
    }

    .hidden {
        display: none;
    }


    .mandatory-symbol {
        color: red;
    }




    .bg-secondary {
        background-color: #f8f9fa;
    }

    .php-email-form {
        width: 80%;
        box-shadow: 0 0 24px 0 #55b6c7;
        padding: 30px;
        background: #fff;
        border: 1px solid;
        border-radius: 5px;
    }

    .php-email-form .form-floating {
        padding-bottom: 8px;
    }

    .php-email-form .error-message {
        display: none;
        color: #fff;
        background: #ed3c0d;
        text-align: center;
        padding: 15px;
        font-weight: 600;
    }

    .php-email-form .sent-message {
        display: none;
        color: #fff;
        background: #18d26e;
        text-align: center;
        padding: 15px;
        font-weight: 600;
    }

    .php-email-form .loading {
        display: none;
        background: #fff;
        text-align: center;
        padding: 15px;
    }

    .php-email-form .loading:before {
        content: "";
        display: inline-block;
        border-radius: 50%;
        width: 24px;
        height: 24px;
        margin: 0 10px -6px 0;
        border: 3px solid #18d26e;
        border-top-color: #eee;
        -webkit-animation: animate-loading 1s linear infinite;
        animation: animate-loading 1s linear infinite;
    }

    .php-email-form input,
    .php-email-form textarea {
        border-radius: 0;
        box-shadow: none;
        font-size: 14px;
    }

    .php-email-form input {
        height: 44px;
    }

    .php-email-form textarea {
        padding: 10px 12px;
    }


    .php-email-form button[type="submit"] {
        background: #007bff;
        border: 0;
        padding: 1px 24px;
        color: #fff;
        transition: 0.4s;
        border-radius: 15px;
    }

    .php-email-form button[type="submit"]:hover {
        background: #0056b3;
    }

    @media only screen and (min-width: 768px) and (max-width: 1024px) {

        /* Styles for iPad */
        #responsive_view {
            margin-left: 50px;
        }

        #responsive_view_map {
            margin-left: 50px;
        }

    }

    @media only screen and (min-width: 1025px) {

        /* Styles for desktop */
        #responsive_view {
            margin-left: 150px;
        }

        #responsive_view_map {
            margin-left: 150px;
        }

    }


    /* popup styles */

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .container-popup {
        position: relative;
        max-width: 450px;
        height: 270px;
        display: flex;
        justify-content: center;
        align-items: center;
        background: #17b3ab7c;
        transition: 0.5px;
        padding: 20px;
        flex-direction: column;
    }

    .container-popup img {
        width: 80px;
        height: 80px;
        margin-top: 30px;
        margin-bottom: 20px;
    }

    #main-container.active-blur {
        filter: blur(5px);
        /* You can adjust the blur amount as needed */
        pointer-events: none;
        user-select: none;
    }

    button {
        position: relative;
        padding: 5px 20px;
        display: inline-block;
        margin-top: 20px;
        text-decoration: none;
        color: #fff;
        margin-bottom: 40px;
        transition: 1s;
        background-color: #007bff;
        border: none;
        border-radius: 4px;
        width: 20%;
    }


    button :hover {
        transition: 1s;
        background: #007bff;
    }

    #popup {
        position: fixed;
        top: 40%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 500px;
        padding: 50px;
        box-shadow: 0 5px 30px #55b6c7;
        background: #fff;
        visibility: hidden;
        opacity: 0;
        transition: 0.5s;
    }

    #popup.active {
        top: 50%;
        visibility: visible;
        opacity: 1;
        transform: 0.5s;
    }

    @media only screen and (min-width: 768px) and (max-width: 1024px) {
        #popup {
            width: 40%;
            /* Adjust the maximum width of the popup for smaller screens */
            transform: translate(-50%, -180%);
            /* Center the popup horizontally and vertically */
        }
    }

    @media (max-width: 576px) {
        #popup {
            width: 90%;
            /* Adjust the maximum width of the popup for smaller screens */
            transform: translate(-50%, -140%);
            /* Center the popup horizontally and vertically */
        }

        .container-popup img {
            margin-top: 40px;
        }

        .container-popup p {
            font-size: 12px;
        }

    }


    /* popup styles end */

       /* inner banner style */
       .carousel-caption {
        display: grid;
        place-items: center;
        height: 100%;
        /* Make sure the container takes the full height */
        text-align: center;

    }

    .carousel-caption h2 {
        max-width: 80%;

        margin: 0;

        padding: 30px;

        color: white;

    }

    /* inner banner ends */
</style>

<body>
<?php include('header.php') ?>
    <main>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="images/banner.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-flex align-items-center justify-content-center">
                <h2>Contact Us</h2>
            </div>

        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->



    <div class="container-fluid bg-white px-0">
        <div class="row g-0 justify-content-center ">
            <div class="col-lg-12 py-6 text-center ">




                <form method="POST" action="" class="php-email-form pt-5 mx-auto" id="responsive_view" style="margin-top:30px;">

                    <h2 class="text-center  mb-4 pt-5" style="font-size:30px;font-weight:bold;">Contact For Any Queries</h2>

                    <div class="row g-3">
                        <div class="col-md-12">
                            <div class="form-floating">
                                <input type="text" class="form-control border border-dark" id="name" name="full_name" placeholder="Name" onkeyup="validateNameForm()">
                                <label for="form-floating-1">Full Name <span class="mandatory-symbol">*</span></label>
                                <div id="name_error" class="error hidden">Please enter a valid name</div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="email" class="form-control border border-dark" id="email" name="email" placeholder="Email" onkeyup="validateEmailForm()">
                                <label for="form-floating-2">Email Address <span class="mandatory-symbol">*</span></label>
                                <div id="email_error" class="error hidden">Please enter a valid Email</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="tel" class="form-control border border-dark" id="mobile" name="mobile" placeholder="Mobile Number" onkeyup="validateMobileForm()">
                                <label for="form-floating-3">Mobile Number <span class="mandatory-symbol">*</span></label>
                                <div id="mobile_error" class="error hidden">Please enter a 10 digit mobile number</div>
                            </div>
                        </div>
                        <!-- <div class="col-md-12"> -->
                        <div class="col-md-12">
                            <div class="form-floating">
                                <textarea class="form-control border border-dark" name="message" placeholder="Message" id="my-text" style="height: 150px"></textarea>
                                <label for="message">Message (Max 250 characters)</label>
                                <p id="text_result" style="padding-right: 100px;"></p>
                                <p id="error_message" style="color: #ff2851; display: none;">Character limit exceeded!</p>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary fs-5 button_style " type="submit" onclick="toggle()" style="height:48px;background-color:#55b6c7!important" id="submit_btn">Send Message</button>

                        </div>
                        <!-- </div> -->
                    </div>
                </form>
            </div>
        </div>
    </div>
    </section>

    <style>
        @media screen and (max-width: 767px) {

            /* Styles for devices with screen width less than 768 pixels (e.g., smartphones) */
            .button_style {
                width: 180px;
            }
        }

        /* Media query for iPad and tablets */
        @media screen and (min-width: 768px) and (max-width: 1023px) {

            /* Styles for devices with screen width between 768px and 1023px (e.g., iPad and tablets) */
            .button_style {
                width: 200px;
            }
        }
    </style>

    <div id="popup" class="container-popup">
        <img src="img/tick1.png">
        <h2>Thank You!</h2>
        <p>Your details have been successfully submitted.</p>
        <button onclick="toggle()">Ok</button>
    </div>

    <script>
        function toggle() {
            var blurContainer = document.getElementById('main-container');
            blurContainer.classList.toggle('active-blur');

            var popup = document.getElementById('popup');
            popup.classList.toggle('active');
        }
        document.addEventListener("DOMContentLoaded", function() {
            // Redirect after alert is closed
            const closeButton = document.querySelector("#popup");
            closeButton.addEventListener("click", function() {
                window.location.href = "contact.php";
            });
        });
    </script>







    <script>
        // JavaScript code
        var myText = document.getElementById("my-text");
        var result = document.getElementById("text_result");
        var error = document.getElementById("error_message");
        var limit = 250;

        myText.addEventListener("input", function() {
            var textLength = myText.value.length;
            var remainingChars = limit - textLength;
            result.textContent = remainingChars + " characters left";

            if (remainingChars < 0) {
                myText.style.borderColor = "#ff2851";
                result.style.color = "#ff2851";
                error.style.display = "block";
            } else {
                myText.style.borderColor = "#b2b2b2";
                result.style.color = "#737373";
                error.style.display = "none";
            }
        });
    </script>




    <style>
        .map-card {
            border: 1px solid #000;
            height: 600px;
            /* Set the desired height for the map card */
            border-radius: 5px;
            box-shadow: 0 0 5px 0 #55b6c7;
        }

        .address-card {
            border: 1px solid #000;
            padding: 10px;
            border-radius: 5px;
            height: 600px;
            box-shadow: 0 0 5px 0 #55b6c7;
        }

        @media only screen and (min-width: 768px) and (max-width: 1024px) {
            #popup {
                width: 60%;
                /* Adjust the maximum width of the popup for smaller screens */
                transform: translate(-50%, -180%);
                /* Center the popup horizontally and vertically */
            }

            @media (max-width: 576px) {
                #popup {
                    width: 80%;
                    /* Adjust the maximum width of the popup for smaller screens */
                    transform: translate(-50%, -150%);
                    /* Center the popup horizontally and vertically */
                }

                .container-popup img {
                    margin-top: 30px;
                }
            }
        }
    </style>


    <section id="responsive_view_map;">
        <div class="container-fluid bg-white pb-3 pt-5">
            <div class="row g-0" style="justify-content: center;">
                <div class="col-lg-10 col-md-10 col-12 ">
                    <div class="position-relative h-100">
                        <div class="card h-100 border border-dark rounded p-3" style="box-shadow: 0 0 10px 0 #55b6c7; border-radius:10px; ">
                            <h2 class="text-center" style="font-size:30px;font-weight:bold;">Location Address</h2><br>
                            <div class="row">
                                <div class="col-lg-8 col-md-12 pt-2">
                                    <div class="map-card">
                                        <!-- <iframe class="w-100 h-100" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3502.9424023490756!2d77.18340307434593!3d28.6015046756817!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sA9%2C%201st%20floor%2C%20Malcha%20Marg%2C%20Chanakyapuri%2C%20New%20Delhi-%20110021!5e0!3m2!1sen!2sin!4v1686239309371!5m2!1sen!2sin" allowfullscreen="" aria-hidden="false" tabindex="0" style="border-radius: 5px;"></iframe> -->
                                        <iframe class="w-100 h-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d124403.74872118741!2d77.57987551065159!3d12.996321618218726!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae14590bf13091%3A0x305712975bf07ded!2sDR%20SPINE%20Chiropractic%20Clinic%20-%20Indiranagar%20Clinic%20-%20Bangalore!5e0!3m2!1sen!2sin!4v1691217237916!5m2!1sen!2sin" allowfullscreen="" aria-hidden="false" tabindex="0" style="border-radius: 5px;"></iframe>

                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12 pt-2 ">
                                    <div class="address-card ">
                                        <ul>
                                            <li style="font-size: 20px; color: black;" class="pt-4">
                                                <i class="fas fa-map-marker-alt"></i>
                                                Lorem Ipsum is simply dummy <span style="display: inline-block; margin-left: 24px;">Whitefield Bangalore,</br>
                                                    Lorem Ipsum is simply dummy </br></br>


                                                    Lorem Ipsum is simply dummy</br>
                                                    Lorem Ipsum is simply dummy </br>
                                                    Lorem Ipsum is simply dummy</br></br>
                                            </li>
                                            <li style="font-size: 20px">
                                                <i class="fa fa-envelope"></i> <a href="mailto:info@oneworldhrin.com">infoLorem Ipsum is simply dummy.com</a>
                                            </li>
                                            <br>
                                            <li style="font-size: 20px;padding-top:10px;">

                                                <i class="fa fa-phone" style="transform: rotate(90deg);padding-top:10px;"></i> <a href="tel:(+91)-7550705070 ">(+91)-9999999999</a></br>
                                               
                                            </li>


                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact End -->
    </div>


    <script>
        function test() {
            swal("Thank you", "We will get bck to you soon", "success");
        }
    </script>

    </main>

    <!-- ============Footer  Start============ -->

    <?php include('footer.php') ?>

</body>

<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/plugins/owl.carousel.js"></script>
<script src="assets/js/plugins/owl.carousel.min.js"></script>
<script src="assets/js/script.js"></script>

</html>