@extends('layouts.main')

@section('page-title') Promos @endsection

@section('nav-promos') act_item @endsection

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

                                <h1>Promos</h1>
                                <p class="meta">Written on 20th April 2017</p>

                                <h2 id="adding-promo"># Adding a Promo</h2>
                                <hr>

                                <p><span style="color: rgb(68, 68, 68); font-family: Roboto, sans-serif; font-size: 14px;">To add a promo. Just add a discounted amount in the Course Maintenance Page. Here are the steps to do this:</span></p>
                                <ul style="margin-left: 40px;">
                                    <li>
                                        <span style="font-weight: bold;">Click the “Page” button on the Navigation Bar and click “Maintenance Course”</span>
                                    </li>
                                </ul>

                                <img src="{{ url('uploads/course_maintenance_search_field.jpg') }}" style="width: 949px;">
                                <ul style="margin-left: 40px;">
                                    <li>
                                        <span style="font-weight: bold;">Search for the course you want to add a discount on the search field</span>
                                    </li>
                                </ul>

                                <img src="{{ url('uploads/course_maintenance_edit_button.jpg') }}" style="width: 949px;">
                                <ul style="margin-left: 40px;">
                                    <li>
                                        <span style="font-weight: bold;">Click the “Edit Course Details” on the Action column next to “Edit Certificate” button.</span>
                                    </li>
                                </ul>

                                <img src="{{ url('uploads/promos_discount_amount.jpg') }}" style="width: 949px;">
                                <ul style="margin-left: 40px;">
                                    <li>
                                        <span style="font-weight: bold;">Enter the discounted amount in the Discounted Amount field.</span><br><br>
                                    </li>
                                    <li>
                                        <span style="font-weight: bold;">Click "Submit" button.</span>
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
                                <span class="md-list-heading uk-text-truncate"><a href="#adding-promo">Adding a Promo</a></span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>


@endsection
