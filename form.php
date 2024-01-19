
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Contact Us</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/plugins/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/plugins/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
<?php include('header.php') ?>
<main>
        <!-- ============abt-01 Section  Start============ -->
        
        <section class="abt-01">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="heading-wrapper">
                            <h3>Contact Us</h3>
                            <ol>
                                <li>Home<i class="far fa-angle-double-right"></i></li>
                                <li>Contact Us</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>

</head>
<style>
        .card {
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            margin-bottom: 40px;
        }
    </style>
<body>

<div class="container mt-5">
            <form method="post" id="form" action="formdb.php">
                <div class="card">
                    <div class="card-body">
            <h5 class="card-title">User Information</h5>

            <div class="row">
                <div class="col-md-4 mb-3">
                    <label for="firstName">First Name</label>
                    <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name" required>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="middleName">Middle Name</label>
                    <input type="text" class="form-control" id="middleName" name="middlename" placeholder="Middle Name" required>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="lastName">Last Name</label>
                    <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name" required>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 mb-3">
                    <label for="dob">Date of Birth</label>
                    <input type="date" class="form-control" id="dateofbirth" name="dateofbirth" required>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="age">Age</label>
                    <input type="number" class="form-control" id="age" name="age" placeholder="Age" required>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="maritalStatus">Marital Status</label>
                    <select class="form-control" id="maritalstatus" name="maritalstatus" required>
                        <option value="single">Single</option>
                        <option value="married">Married</option>
                    </select>
                </div>
            </div>

            <div class="mb-3">
                <label for="country">Country</label>
                <input type="text" class="form-control" id="country" name="country" placeholder="Country" required>
            </div>

                        <div class="mb-3">
                <label for="address">Complete Address</label>
                <textarea class="form-control" id="completeaddress" name="address" rows="3" placeholder="Complete Address" required></textarea>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="contactNumber">Contact Number</label>
                    <input type="tel" class="form-control" id="contactnumber" name="contactnumber" placeholder="Contact Number" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                </div>
            </div>

                        <center>
                            <div class="row">
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </center>
                    </div>
                </div>
            </form>
        </div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        
    </main>

<!-- ============Footer  Start============ -->

<?php include('footer.php') ?>

</body>
</html>



