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

                        <li class="dropdown-dashboard active">
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
                <h2 class="mb-20">Subscriptions</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="subscription-table">
                    <div class="subscription-table-heading d-none d-xxl-flex d-xl-flex d-lg-flex">
                        <h4 class="subscription-img pl-30">Author Image</h4>
                        <h4 class="subscription-name">Author Name</h4>
                        <h4 class="subscription-categories">Author Categories</h4>
                        <h4 class="subscription-articles d-flex justify-content-center">Live Articles</h4>
                        <h4 class="subscription-action d-flex justify-content-center">Action</h4>
                    </div>

                    <div class="subscription-table-card">
                        <figure class="subscription-img">
                            <img src="images/subscribe/subscribe-card-1.jpg" alt="">
                        </figure>
                        
                            <div class="subscription-name">Brooklyn Simmons</div>
                            <div class="subscription-categories">Cybersecurity</div>
                            <div class="subscription-articles">
                                <h4 class="d-block d-xxl-none d-xl-none d-lg-none">Live Articles:</h4> 77</div>
                            <div class="subscription-action">
                                <a href="#" class="btn btn-message mr-20">Message</a>
                                <a href="#" class="btn">Unsubscribe </a>
                            </div>
                        
                    </div>

                    <div class="subscription-table-card">
                        <figure class="subscription-img">
                            <img src="images/subscribe/subscribe-card-2.jpg" alt="">
                        </figure>
                        <div class="subscription-name">Eleanor Pena</div>
                        <div class="subscription-categories">Business Intelligence</div>
                        <div class="subscription-articles">
                            <h4 class="d-block d-xxl-none d-xl-none d-lg-none">Live Articles:</h4>39</div>
                        <div class="subscription-action">
                            <a href="#" class="btn btn-message mr-20">Message</a>
                            <a href="#" class="btn">Unsubscribe </a>
                        </div>
                    </div>

                    <div class="subscription-table-card">
                        <figure class="subscription-img">
                            <img src="images/subscribe/subscribe-card-3.jpg" alt="">
                        </figure>
                        <div class="subscription-name">Dianne Russell</div>
                        <div class="subscription-categories">Cybersecurity</div>
                        <div class="subscription-articles">
                            <h4 class="d-block d-xxl-none d-xl-none d-lg-none">Live Articles:</h4>13</div>
                        <div class="subscription-action">
                            <a href="#" class="btn btn-message mr-20">Message</a>
                            <a href="#" class="btn">Unsubscribe </a>
                        </div>
                    </div>

                    <div class="subscription-table-card">
                        <figure class="subscription-img">
                            <img src="images/subscribe/subscribe-card-4.jpg" alt="">
                        </figure>
                        <div class="subscription-name">Floyd Miles</div>
                        <div class="subscription-categories">Data & Analytics</div>
                        <div class="subscription-articles">
                            <h4 class="d-block d-xxl-none d-xl-none d-lg-none">Live Articles:</h4>51</div>
                        <div class="subscription-action">
                            <a href="#" class="btn btn-message mr-20">Message</a>
                            <a href="#" class="btn">Unsubscribe </a>
                        </div>
                    </div>

                    <div class="subscription-table-card">
                        <figure class="subscription-img">
                            <img src="images/subscribe/subscribe-card-5.jpg" alt="">
                        </figure>
                        <div class="subscription-name">Savannah Nguyen</div>
                        <div class="subscription-categories">Cybersecurity</div>
                        <div class="subscription-articles">
                            <h4 class="d-block d-xxl-none d-xl-none d-lg-none">Live Articles:</h4>32</div>
                        <div class="subscription-action">
                            <a href="#" class="btn btn-message mr-20">Message</a>
                            <a href="#" class="btn">Unsubscribe </a>
                        </div>
                    </div>

                    <div class="subscription-table-card">
                        <figure class="subscription-img">
                            <img src="images/subscribe/subscribe-card-6.jpg" alt="">
                        </figure>
                        <div class="subscription-name">Ralph Edwards</div>
                        <div class="subscription-categories">Cybersecurity</div>
                        <div class="subscription-articles">
                            <h4 class="d-block d-xxl-none d-xl-none d-lg-none">Live Articles:</h4>35</div>
                        <div class="subscription-action">
                            <a href="#" class="btn btn-message mr-20">Message</a>
                            <a href="#" class="btn">Unsubscribe </a>
                        </div>
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

                <li class="dropdown-dashboard active">
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