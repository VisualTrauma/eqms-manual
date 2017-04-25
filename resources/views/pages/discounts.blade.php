@extends('layouts.main')

@section('page-title') Discounts @endsection

@section('nav-discounts') act_item @endsection

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
                                <h1>Discounts</h1>
                                <p class="meta">Written on 20th April 2017</p>

                                <h2 id="interface"># Interface</h2>
                                <hr>

                                <img src="{{ url('uploads/discounts.jpg') }}" style="width: 949px;">
                                <p><span style="color: rgb(68, 68, 68); font-family: Roboto, sans-serif; font-size: 14px;">&nbsp;&nbsp;&nbsp;&nbsp;To access the Discounts page click the “Pages” button on the navigation bar next to Home Button then click on “Mar. Discount”.</span></p>

                                <p style="margin-left: 15px;">Course Maintenance page is consist of:</p>
                                <ol style="margin-left: 40px;">
                                    <li>
                                        <span style="font-weight: bold;">Personal Discount</span>
                                        <br>Adding a discount to a particular trainee on a particular course.<br><br>
                                    </li>
                                    <li>
                                        <span style="font-weight: bold;">Company Discount</span>
                                        <br>Adding a discount to all company billed trainee.<br><br>
                                    </li>
                                </ol>

                                <h2 id="create-personal-discount"># Create a Personal Discount</h2>
                                <hr>

                                <img src="{{ url('uploads/discount_personal_button.jpg') }}" style="width: 949px;">
                                <ol style="margin-left: 40px;">
                                    <li>
                                        <span style="font-weight: bold;">On Discounts page click the green “Select” button.</span>
                                    </li>
                                </ol>

                                <br>
                                <img src="{{ url('uploads/discount_trainee_list.jpg') }}" style="width: 949px;">
                                <ul style="margin-left: 40px;">
                                    <li>
                                        <span style="font-weight: bold;">On the Personal Discount page click "Select Trainee" button next to the trainee you want to get a discount.</span><br><br>
                                    </li>
                                    <li>
                                        <span style="font-weight: bold;">Enter the amount of the discount in the form below and click "Submit" button.</span>
                                    </li>
                                </ul>

                                <h2 id="create-company-discount"># Create a Company Discount</h2>
                                <hr>

                                <img src="{{ url('uploads/discount_company_form.jpg') }}" style="width: 949px;">
                                <ul style="margin-left: 40px;">
                                    <li>
                                        <span style="font-weight: bold;">On Discounts Page fill up all the necessary fields.</span><br><br>
                                    </li>
                                    <li>
                                        <span style="font-weight: bold;">Add a remarks if necessary and click “Submit” button.</span>
                                    </li>
                                </ul>

                                <h2 id="show-all-discount"># Show All Discount</h2>
                                <hr>

                                <img src="{{ url('uploads/discounts_view_button.jpg') }}" style="width: 949px;">
                                <ul style="margin-left: 40px;">
                                    <li>
                                        <span style="font-weight: bold;">On Discounts Page click the “View” button.</span><br><br>
                                    </li>
                                </ul>

                                <br>
                                <img src="{{ url('uploads/discount_all.jpg') }}" style="width: 949px;">
                                <ul style="margin-left: 40px;">
                                    <li>
                                        <span style="font-weight: bold;">Click the “Edit” button next to the discount to edit the discount or “Delete” button to delete.</span><br><br>
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
                                <span class="md-list-heading uk-text-truncate"><a href="#interface">Interface</a></span>
                            </div>
                        </li>
                        <li>
                            <div class="md-list-content">
                                <span class="md-list-heading uk-text-truncate"><a href="#create-personal-discount">Create a Personal Discount</a></span>
                            </div>
                        </li>
                        <li>
                            <div class="md-list-content">
                                <span class="md-list-heading uk-text-truncate"><a href="#create-company-discount">Create a Company Discount</a></span>
                            </div>
                        </li>
                        <li>
                            <div class="md-list-content">
                                <span class="md-list-heading uk-text-truncate"><a href="#show-all-discount">Show All Discount</a></span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>


@endsection
