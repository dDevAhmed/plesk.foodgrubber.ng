@extends('layouts.market')

@section('content')
    <main class="main">
        <div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
            <div class="container">
                <h1 class="page-title">Terms of Service</h1>
            </div><!-- End .container -->
        </div><!-- End .page-header -->

        <div class="mb-4"></div>

        <div class="page-content">
            {{-- <div id="map" class="mb-5"></div> --}}
            <div class="container">
                <div class="entry-content editor-content">
                    <h5>Foodgrubber Terms Of Service</h5>
                    <p><strong>Last updated:</strong> 08 April 2021<br><br>

                        Welcome to Food Grubber This page (together with the documents referred to in it) tells you the
                        terms (the “Terms”) which apply when you order any menu items (the "Items") from our
                        foodgrubber.co.uk website or mobile applications and related services (each referred to as an
                        “Application”). <br><br>

                        Please read these Terms carefully before creating a Food Grubber account or using our Application.
                        If you have any questions relating to these Terms please contact support@foodgrubber.co.uk. If you
                        are a consumer, you have certain legal rights when you order Items using our Application. You can
                        find more information about these rights at: <a
                            href="https://www.citizensadvice.org.uk/consumer/">https://www.citizensadvice.org.uk/consumer/</a>.
                        Your legal rights are not affected by these Terms, which apply in addition to them and do not
                        replace them. By setting up your Foodgrubber account, you confirm that you accept these Terms. 
                    </p>

                    <ol>
                        <li>
                            <h5>1. Information About Us</h5>
                            <p>Foodgrubber.co.uk is operated by BINFO GROUP, a company incorporated and registered in England and Wales, whose registered office is at, 152-160 City Road, EC1V 2NX, London, United Kingdom. Our Company registration number is 09218927. Our VAT number is 220009572. You may contact us at support@foodgrubbergreen.com, or by using the instant messaging facility on our Application. </p>
                        </li>
                        <li>
                            <h5>How We Collect Your Information</h5>
                            <p>We collect your personal information when you interact with us or use our services, such as
                                when you use our Sites to place an order. We also look at how visitors use our Sites, to
                                help us improve our services and optimize customer experience. </p>
                        </li>
                        <li>
                            <h5>Information We Collect From You</h5>
                            <p>As part of our commitment to the privacy of our customers and visitors to our Sites more
                                generally, we want to be clear about the sorts of information we will collect from you. </p>
                        </li>
                        <li>
                            <h5>Use Of Your Information</h5>
                            <p>We will only process the data we collect about you if there is a reason for doing so, and if
                                that reason is permitted under data protection law. </p>
                        </li>
                        <li>
                            <h5>Foodgrubber For Business</h5>
                            <p>We also process your information to determine whether you may be interested in hearing about
                                our Foodgrubber for Business service and, if your employer signs up for Foodgrubber for
                                Business, to make this service available to you. </p>
                        </li>
                        <li>
                            <h5>Cookies</h5>
                            <p>You can set your browser to refuse all or some browser cookies, or to alert you when websites
                                set or access cookies. If you disable or refuse cookies, please note that some parts of the
                                Site may become inaccessible or not function properly. For more information about the
                                cookies we use, please see our Cookie Policy https://foodgrubbergreen.com/cookies. </p>
                        </li>
                        <li>
                            <h5>Direct Marketing</h5>
                            <p>Where you have given your consent or where we have a legitimate interest for doing so (and
                                are permitted to do so by law) we will use your information to let you know about our other
                                products and services that may be of interest to you and we may contact you to do so by
                                email, post or phone. You can control your marketing preferences by: </p>
                            <ul>
                                <li>visiting our website, <a href="foodgrubbergreen.com">www.foodgrubbergreen.com</a>, or
                                    mobile application;</li>
                                <li>clicking on "Account" (for our website this is under the drop-down menu); and</li>
                                <li>scrolling down to "Marketing Preferences".</li>
                            </ul>
                        </li>
                        <li>
                            <h5>Automated Decision Making</h5>
                            <p>We conduct fraud checks on all customers. Where we believe we may detect fraudulent activity
                                we may block you from placing an order and using our Sites. </p>
                        </li>
                        <li>
                            <h5>Retention Of Your Information</h5>
                            <p>We will not retain your information for any longer than we think is necessary. </p>
                        </li>
                        <li>
                            <h5>Disclosure Of Your Information</h5>
                            <p>The information we collect about you will be transferred to and stored on our servers located
                                within the EU. We are very careful and transparent about who else your information is shared
                                with. </p>
                        </li>
                        <li>
                            <h5>Security</h5>
                            <p>We adopt robust technologies and policies to ensure the personal information we hold about
                                you is suitably protected. </p>
                        </li>
                        <li>
                            <h5>Your Rights</h5>
                            <p>Subject to applicable law, you may have a number of rights concerning the data we hold about
                                you. If you wish to exercise any of these rights, please contact our Data Protection Officer
                                using the contact details set out above. For additional information on your rights please
                                contact your data protection authority and see below.</p>
                        </li>
                        <li>
                            <h5>Changes To Our Privacy Policy</h5>
                            <p>Any changes to our privacy policy will be posted to the Sites and, where appropriate, we may
                                notify you of the changes for example by email or push notification.

                                This privacy policy was last updated: 08/04/2021 </p>
                        </li>
                        <li>
                            <h5>Complaints</h5>
                            <p>If you’re not satisfied with our response to any complaint or believe our processing of your
                                information does not comply with data protection law, you can make a complaint to the
                                Information Commissioner’s Office (ICO) using the following details: </p>
                        </li>
                    </ol>

                    <h5>Cookies policy pop up</h5>
                    <p>We use cookies to ensure that we give you the best experience on our website, we also use cookies to
                        ensure we show you advertising that is relevant to you, if you continue without changing your
                        settings, we’ll assume that you are happy to receive all cookies on the FoodGrubber website.
                        However, if you would like to you can change your cookie settings at anytime</p>

                    
                </div>
            </div><!-- End .container -->
        </div><!-- End .page-content -->
    </main><!-- End .main -->


    <!-- Footer Start -->

    {{-- show toast if updated successful --}}
    {{-- <x-toast-message :type="session('success') ? 'success' : 'fail'" :message="session('success') ?? session('fail')" /> --}}
@endsection
