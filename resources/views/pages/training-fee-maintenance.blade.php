@extends('layouts.main')

@section('page-title') Training Fee Maintenance @endsection

@section('nav-training-fee-maintenance') act_item @endsection

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
                                <h1>Training Fee Maintenance</h1>
                                <p class="meta">Written on 20th April 2017</p>

                                <h2 id="interface"># Interface</h2>
                                <hr>

                                <img src="{{ url('uploads/course_maintenance.jpg') }}" style="width: 949px;">
                                <p><span style="color: rgb(68, 68, 68); font-family: Roboto, sans-serif; font-size: 14px;">&nbsp;&nbsp;&nbsp;&nbsp;To update training fee click the “Pages” button on the navigation bar next to Home Button then click on “Maintenance Course”.</span></p>

                                <h2 id="update-training-fee"># Update Training Fee</h2>
                                <hr>

                                <img src="{{ url('uploads/course_maintenance_edit_button.jpg') }}" style="width: 949px;">
                                <ol style="margin-left: 40px;">
                                    <li>
                                        <span style="font-weight: bold;">Click "Edit" link</span>
                                        <br>On Course Maintenance page, click the edit button (the right one on Actions column) next to the course you want to edit.<br><br>
                                    </li>
                                </ol>

                                <br>
                                <img src="{{ url('uploads/training_fee_maintenance_form_edit.jpg') }}" style="width: 500px;">
                                <ul style="margin-left: 40px;">
                                    <li>
                                        <span style="font-weight: bold;">Enter the new value for the “Amount” field and click “Submit” button</span>
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
                                <span class="md-list-heading uk-text-truncate"><a href="#update-training-fee">Update Training Fee</a></span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>


@endsection
