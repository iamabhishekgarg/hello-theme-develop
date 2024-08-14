<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Hello_Elementor_Child
 * @since Hello Elementor Child Theme
 */

?>
<style>
   

    .wrapper {
        min-height: 100%;
        display: flex;
        flex-direction: column;
    }

    .content {
        flex: 1;
    }

    .footer {
        background-color: #198754;
    }

    .footer-content h2 {
        color: #fff;
    }

    .footer-content h5,
    .footer-content p,
    .footer-links a {
        color: #fff;
    }

    .footer-links a:hover {
        text-decoration: underline;
    }

    .footer hr {
        background-color: #fff;
    }
</style>
<div class="container">
    <div class="wrapper">
        <div class="content">
            <!-- Your page content goes here -->
            <div class="container">
                <h1>Welcome to My Website</h1>
                <p>This is a sample content.</p>
            </div>
        </div>
    </div>
</div>
    <footer class="footer p-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h2>Abhi</h2>
                </div>
                <div class="col-md-3">
                    <h5>About Us</h5>
                    <p>
                        Abhi is a leading platform that provides
                        computer science resources and coding challenges for
                        programmers and technology enthusiasts along with
                        interview and exam preparations for upcoming aspirants.
                    </p>
                </div>
                <div class="col-md-3">
                    <h5>Contact Us</h5>
                    <ul class="list-unstyled">
                        <li>Email: info@example.com</li>
                        <li>Phone: +1233567890</li>
                        <li>Address: 123 Street, City, Country</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5>Follow Us</h5>
                    <ul class="list-inline footer-links">
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="fab fa-facebook"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="fab fa-linkedin"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-6">
                    <p>&copy; 2024 Your Website. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-end">
                    <ul class="list-inline footer-links">
                        <li class="list-inline-item">
                            <a href="#" class="text-white">
                                Privacy Policy
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" class="text-white">
                                Terms of Service
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" class="text-white">
                                Sitemap
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>