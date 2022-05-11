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

                        <li class="active">
                            <a href="messages.php">
                                <i><img src="images/dashboard/messages-icon.svg" alt=""></i>
                                Messages
                            </a>
                        </li>

                        <li>
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
                
                <div class="section-heading mb-30">
                    <h2>Messages</h2>
                    <p>Aliquam massa aenean dui ac pellentesque leo phasellus </p>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="chat-box" style="height: 500px;border:1px solid #DCDCDC;">

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

                <li class="active">
                    <a href="messages.php">
                        <i><img src="images/dashboard/messages-icon.svg" alt=""></i>
                        Messages
                    </a>
                </li>

                <li>
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