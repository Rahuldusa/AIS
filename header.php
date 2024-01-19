<style>
    .navbar a.right {
        float: right;
    }
    .navbar a:hover {
        background-color: #ddd;
        color: black;
    }
    .navbar a.active {
        background-color: #666;
        color: white;
    }
</style>
<header>
    <div class="my-nav">
        <div class="container">
            <div class="row">
                <div class="nav-items">
                    <div class="menu-toggle">
                        <div class="menu-hamburger"></div>
                    </div>
                    <div class="logo" style="width: 25px;">
                        <img src="images/AIS Logo Final.png" style="width: 28%; height: 100%;">
                    </div>

                    <div class="menu-items">
                        <div class="menu">
                            <ul class="nav">
                                <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                                <li class="nav-item"><a class="nav-link" href="about-us.php">About Us</a></li>
                                <li class="nav-item"><a class="nav-link" href="services.php">Services</a></li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Gallery</a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="photo.php" style="color:black;">Photo</a>
                                        <a class="dropdown-item" href="video.php" style="color:black;">Video</a>
                                    </div>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="contact-us.php">Contact Us</a></li>
                                <!-- Moved 'Become A Member' next to 'Contact Us' -->
                                <li class="nav-item">
                                    <a class="nav-link btn btn-primary" href="form.php">Become A Member</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</header>
