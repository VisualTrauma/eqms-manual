@extends('layouts.main')

@section('page-title') Printing Of Certificates @endsection

@section('nav-printing-of-certificates') act_item @endsection

@section('css')
    <style media="screen">
        h1 {
          font-size: 36px;
          line-height: 42px;
          font-weight: normal;
          text-transform: none;
          font-family: 'Raleway', sans-serif;
          font-weight: 300;
          font-size: 42px;
        }
        h2 {
          color: rgb(25, 118, 210);
          font-size: 32px;
          line-height: 24px;
          font-family: 'Raleway', sans-serif;
          font-weight: normal;
          margin-top: 70px;
        }

        .meta {
          font-size: 12px;
          line-height: 18px;
          color: #999;
        }
    </style>
@endsection

@section('page-content')
    <div id="page_content">
        <div id="page_content_inner">

            <div class="uk-grid blog_article" data-uk-grid-margin>
                <div class="uk-width-medium-3-4">
                    <div class="md-card">
                        <div class="md-card-content large-padding">
                            <div class="uk-article">
                                <h1>Printing of Certificates</h1>
                                <p class="meta">Written on 20th April 2017</p>

                                <h2 id="create-transaction"># Print Requirements</h2>
                                <hr>
                                <p style="margin-left: 15px;">Before you were able to print a certificate all of the following must be true:</p>
                                <ol style="margin-left: 40px;">
                                    <li>
                                        <span style="font-weight: bold;">Completion of Training Schedule</span>
                                        <br>You will only be able to print certificates after the training has finished.<br><br>
                                    </li>
                                    <li>
                                        <span style="font-weight: bold;">Attendance</span>
                                        <br>Trainee must have completely attended the training inorder to be able to get a certificate.<br><br>
                                    </li>
                                    <li>
                                        <span style="font-weight: bold;">No Outstanding Balance</span>
                                        <br>Training Certificate for trainee with outstanding balance will be on-hold until the payment has been made.<br><br>
                                    </li>
                                    <li>
                                        <span style="font-weight: bold;">Accurate Trainee Information and Must provide a Photo.</span>
                                        <br>Trainee's information must be clear and accurate.<br><br>
                                    </li>
                                </ol>

                                <h2 id="create-transaction"># Printing of Certificate of Completion</h2>
                                <hr>
                                <img src="{{ url('uploads/certificate_printing_schedule_selection.jpg') }}" style="width: 949px;">
                                <ul style="margin-left: 40px;">
                                    <li>
                                        <span style="font-weight: bold;">Select a Schedule</span>
                                        <br>On Calendar of Schedule panel of Schedule Mainteanance page. Select a red colored schedule. In this example we are choosing Medical Care.<br><br>
                                    </li>
                                </ul>

                                <br>
                                <img src="{{ url('uploads/certificate_printing_schedule_view_incomplete.jpg') }}" style="width: 949px;">
                                <p style="margin-left: 15px;">Please note that trainee with incomplete attendance and unpaid status will not be included on the list of certificates that will be printed..</p>

                                <br>
                                <img src="{{ url('uploads/certificate_printing_schedule_view_button_certificate.jpg') }}" style="width: 949px;">
                                <ul style="margin-left: 40px;">
                                    <li>
                                        <span style="font-weight: bold;">Click "Certificate of Completion" button.</span>
                                        <br>You may be asked to re-enter your password to print the certificates. Enter your password to continue<br><br>
                                    </li>
                                </ul>

                                <br>
                                <img src="{{ url('uploads/certificate_printing_certificate_lists.jpg') }}" style="width: 949px;">
                                <ul style="margin-left: 40px;">
                                    <li>
                                        <span style="font-weight: bold;">On your keyboared press Ctrl + P</span>
                                    </li>
                                </ul>

                                <br>
                                <img src="{{ url('uploads/certificate_printing_certficate_print_preview.jpg') }}" style="width: 949px;">
                                <ul style="margin-left: 40px;">
                                    <li>
                                        <span style="font-weight: bold;">Select</span>
                                        <br>On your keyboared press Ctrl + P to print the certificates.<br><br>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-width-medium-1-4">
                    <h5 class="uk-margin-small-bottom uk-text-upper">Contents</h5>
                    <ul class="md-list uk-margin-remove">
                        <li>
                            <div class="md-list-content">
                                <span class="md-list-heading uk-text-truncate"><a href="#create-transaction">Print Requirements</a></span>
                            </div>
                        </li>
                        <li>
                            <div class="md-list-content">
                                <span class="md-list-heading uk-text-truncate"><a href="#create-transaction">Printing of Certificate of Completion</a></span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
@endsection
