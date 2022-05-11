<?php include('header.php'); ?>



<section class="clearfix">

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="subscription-dashboard">
                    <ul id="subscription_dashboard">

                        <li>
                            <a href="dashboard.php">
                                <i><img src="images/dashboard/subscription-icon.svg" alt=""></i>
                                My Subscriptions
                            </a>
                        </li>

                        <li class="dropdown-dashboard">
                            <a href="subscription.php">
                                <i><img src="images/dashboard/manage-icon.svg" alt=""></i>
                                Manage Subscriptions
                            </a>
                            <ul class="subscription-menu">
                                <li><a href="#"> Manage Subscriptions 1</a></li>
                                <li><a href="#"> Manage Subscriptions 2</a></li>
                                <li><a href="#"> Manage Subscriptions 3</a></li>
                            </ul>
                        </li>

                        <li class="dropdown-dashboard">
                            <a href="payment-settings.php">
                                <i><img src="images/dashboard/payment-settings-icon.svg" alt=""></i>
                                Payment Settings
                            </a>
                            <ul class="subscription-menu">
                                <li><a href="#">Payment Settings 1</a></li>
                                <li><a href="#">Payment Settings 2</a></li>
                                <li><a href="#">Payment Settings 3</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="messages.php">
                                <i><img src="images/dashboard/messages-icon.svg" alt=""></i>
                                Messages
                            </a>
                        </li>

                        <li class="active">
                            <a href="account-settings.php">
                                <i><img src="images/dashboard/account-settings-icon.svg" alt=""></i>
                                Account Settings
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i><img src="images/dashboard/logout-icon.svg" alt=""></i>
                                Logout
                            </a>
                        </li>
                    </ul>
                  
                </div>
                
            </div>
        </div>

        <div class="row">
            <div class="col-12">

                <div class="section-heading">
                    <h2>Account Settings</h2>
                    <p>Aliquam massa aenean dui ac pellentesque leo phasellus </p>
                </div>

            </div>
            <div class="col-12">

                <div class="card">
                    
                    <form action="" class="row">

                        <div class="col-12">
                            <h3 class="w-500 mb-16">Contact Information</h3>
                        </div>

                        <div class="col-md-6">
                            <div class="input-wrapper">
                                <label for="" class="form-label">First name<sup>*</sup></label>
                                <input type="text" placeholder="Enter your first name">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="input-wrapper">
                                <label for="" class="form-label">Last Name<sup>*</sup></label>
                                <input type="text" placeholder="Enter your Last Name..">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="input-wrapper">
                                <label for="" class="form-label">Email<sup>*</sup></label>
                                <input type="email" placeholder="Email">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="input-wrapper">
                                <label for="" class="form-label">Phone Number<sup>*</sup></label>
                                <input type="tel" placeholder="Enter phone number">
                            </div>
                        </div>                        
                    
                        <div class="col-12">
                            <hr class="form-divider">
                        </div>

                        <div class="col-12">
                            <h3 class="w-500 mb-16">Change Password</h3>
                        </div>                   

                        <div class="col-12">
                            <div class="input-wrapper">
                                <label for="" class="form-label">Old Password<sup>*</sup></label>
                                <input type="password" placeholder="Enter your password">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="input-wrapper">
                                <label for="" class="form-label">New Password<sup>*</sup></label>
                                <input type="password" placeholder="Enter your new password">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="input-wrapper">
                                <label for="" class="form-label">Confirm New Password<sup>*</sup></label>
                                <input type="password" placeholder="Re-enter your  New Password..">
                            </div>
                        </div>

                    </form>

                    <div class="mt-10">
                        <input type="submit" value="Reset Password">
                    </div>

                </div>


                
            </div>
        </div>
    </div>
</section>


<!-- =============== Dashboard Menu Modal for Mobile View  =============== -->

<div class="offcanvas offcanvas-bottom subscription-offcanvas" tabindex="-1" id="offcanvas_dashboard">
    <div class="offcanvas-header">
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
            aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div class="mobile-subscription-dashboard">
            <ul id="subscription_dashboard_mobile">
                <li>
                    <a href="dashboard.php">
                        <i><img src="images/dashboard/subscription-icon.svg" alt=""></i>
                        My Subscriptions
                    </a>
                </li>

                <li class="dropdown-dashboard">
                    <a href="subscription.php">
                        <i><img src="images/dashboard/manage-icon.svg" alt=""></i>
                        Manage Subscriptions
                    </a>
                    <ul class="subscription-menu">
                        <li><a href="#">Manage Subscriptions 1</a></li>
                        <li><a href="#">Manage Subscriptions 2</a></li>
                        <li><a href="#">Manage Subscriptions 3</a></li>
                    </ul>
                </li>

                <li>
                    <a href="payment-settings.php">
                        <i><img src="images/dashboard/payment-settings-icon.svg" alt=""></i>
                        Payment Settings
                    </a>
                </li>

                <li>
                    <a href="messages.php">
                        <i><img src="images/dashboard/messages-icon.svg" alt=""></i>
                        Messages
                    </a>
                </li>

                <li class="active">
                    <a href="account-settings.php">
                        <i><img src="images/dashboard/account-settings-icon.svg" alt=""></i>
                        Account Settings
                    </a>
                </li>

                <li>
                    <a href="#">
                        <i><img src="images/dashboard/logout-icon.svg" alt=""></i>
                        Logout
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>

<?php include('footer.php'); ?>