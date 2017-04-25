@extends('layouts.main')

@section('page-title') Trainee Data Management @endsection

@section('nav-trainee-data-management') act_item @endsection

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
                                <h1>Trainee Data Management</h1>
                                <p class="meta">Written on 20th April 2017</p>

                                <h2 id="interface"># Interface</h2>
                                <hr>

                                <img src="{{ url('uploads/trainee_data_management.jpg') }}" style="width: 949px;">
                                <p><span style="color: rgb(68, 68, 68); font-family: Roboto, sans-serif; font-size: 14px;">&nbsp;&nbsp;&nbsp;&nbsp;To access the Trainee Data Management page click the “Pages” button on the navigation bar next to Home Button then click on “View Trainee”.</span></p>

                                <h2 id="structure"># Structure</h2>
                                <hr>

                                <img src="{{ url('uploads/trainee_data_management_labeled.jpg') }}" style="width: 949px;">
                                <p style="margin-left: 15px;">Trainee Data Management page is consist of:</p>
                                <ol style="margin-left: 40px;">
                                    <li>
                                        <span style="font-weight: bold;">Filter Field</span>
                                        <br>Filters the trainee depending on branch he/she was registered, department, first name or last name.<br><br>
                                    </li>
                                    <li>
                                        <span style="font-weight: bold;">Trainee Table</span>
                                        <br>Displays all trainee in a list.<br><br>
                                    </li>
                                </ol>

                                <h2 id="create-trainee-record"># Create Trainee Record</h2>
                                <hr>

                                <img src="{{ url('uploads/trainee_data_management_form_new.jpg') }}" style="width: 949px;">
                                <p><span style="color: rgb(68, 68, 68); font-family: Roboto, sans-serif; font-size: 14px;">
                                    &nbsp;&nbsp;&nbsp;&nbsp;To access the New Trainee Record Form page click the “Pages” button on the navigation bar next to Home Button then click on “Add Trainee.
                                </span></p>
                                <ul style="margin-left: 40px;">
                                    <li>
                                        <span style="font-weight: bold;">Fill up all the required field in General Information panel.</span>
                                    </li>
                                </ul>

                                <br>
                                <img src="{{ url('uploads/trainee_data_management_form_new_2.jpg') }}" style="width:949px;">
                                <ul style="margin-left: 40px;">
                                    <li>
                                        <strong>Enter the trainee's contact information and upload trainee picture and click "Submit" button.</strong>
                                    </li>
                                </ul>

                                <h2 id="update-trainee-record"># Update Trainee Record</h2>
                                <hr>

                                <img src="{{ url('uploads/trainee_data_management_view_button.jpg') }}" style="width: 949px;">
                                <ul style="margin-left: 40px;">
                                    <li>
                                        <span style="font-weight: bold;">Select a Trainee</span>
                                        <br>On Trainee Data Management page, click name of the trainee record you want to update.<br><br>
                                    </li>
                                </ul>

                                <br>
                                <img src="{{ url('uploads/trainee_data_management_edit_button.jpg') }}" style="width: 949px;">
                                <ul style="margin-left: 40px;">
                                    <li>
                                        <span style="font-weight: bold;">Click "Edit Trainee" button.</span>
                                    </li>
                                </ul>

                                <br>
                                <img src="{{ url('uploads/trainee_data_management_form_edit.jpg') }}" style="width: 949px;">
                                <ul style="margin-left: 40px;">
                                    <li>
                                        <span style="font-weight: bold;">Update the field and click “Submit” button.</span>
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
                                <span class="md-list-heading uk-text-truncate"><a href="#structure">Structure</a></span>
                            </div>
                        </li>
                        <li>
                            <div class="md-list-content">
                                <span class="md-list-heading uk-text-truncate"><a href="#create-trainee-record">Create Trainee Record</a></span>
                            </div>
                        </li>
                        <li>
                            <div class="md-list-content">
                                <span class="md-list-heading uk-text-truncate"><a href="#update-trainee-record">Update Trainee Record</a></span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
@endsection
