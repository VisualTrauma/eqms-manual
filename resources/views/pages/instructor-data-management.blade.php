@extends('layouts.main')

@section('page-title') Instructor Data Management @endsection

@section('nav-instructor-data-management') act_item @endsection

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
                                <h1>Instructor Data Management</h1>
                                <p class="meta">Written on 20th April 2017</p>

                                <h2 id="interface"># Interface</h2>
                                <hr>

                                <img src="{{ url('uploads/instructor_data_management.jpg') }}" style="width: 949px;">
                                <p><span style="color: rgb(68, 68, 68); font-family: Roboto, sans-serif; font-size: 14px;">&nbsp;&nbsp;&nbsp;&nbsp;To access the Instructor Data Management page click the “Pages” button on the navigation bar next to Home Button then click on “Maintenance Instructor”.</span></p>

                                <h2 id="structure"># Structure</h2>
                                <hr>

                                <img src="{{ url('uploads/instructor_data_management_labeled.jpg') }}" style="width: 949px;">
                                <p style="margin-left: 15px;">Instructor Data Management page is consist of:</p>
                                <ol style="margin-left: 40px;">
                                    <li>
                                        <span style="font-weight: bold;">Add Button</span>
                                        <br>For creating new Instructor Profile.<br><br>
                                    </li>
                                    <li>
                                        <span style="font-weight: bold;">Instructor List</span>
                                        <br>Displays all Instructor's profile in a list.<br><br>
                                    </li>
                                </ol>

                                <h2 id="create-instructor-profile"># Create Instructor Profile</h2>
                                <hr>

                                <img src="{{ url('uploads/instructor_data_management_add_button.jpg') }}" style="width: 500px;">
                                <ul style="margin-left: 40px;">
                                    <li>
                                        <span style="font-weight: bold;">On Instructor/Assessor Data Management page click “Add Instructor / Assessor” button</span>
                                        <br>You will be redirected to the page displaying a form where you can create a new Instructor Profile.<br><br>
                                    </li>
                                </ul>

                                <br>
                                <img src="{{ url('uploads/instructor_data_management_form_new.jpg') }}" style="width:500px;">
                                <ul style="margin-left: 40px;">
                                    <li>
                                        <strong>Fill up all the required field and click the "Add" button.</strong>
                                    </li>
                                </ul>

                                <h2 id="edit-instructor-profile"># Edit Instructor Profile</h2>
                                <hr>

                                <img src="{{ url('uploads/instructor_data_management_view_button.jpg') }}" style="width: 500px;">
                                <ul style="margin-left: 40px;">
                                    <li>
                                        <span style="font-weight: bold;">Click the "View" button.</span>
                                        <br>On Instructor/Assessor Data Management page click “View” button next to the Instructor’s Record. You will be redirected to Instructor Edit page.<br><br>
                                    </li>
                                </ul>

                                <br>
                                <img src="{{ url('uploads/instructor_data_management_edit_page_labeled.jpg') }}" style="width:949;">
                                <p style="margin-left: 15px;">Instructor Edit page is consist of:</p>
                                <ol style="margin-left: 40px;">
                                    <li>
                                        <span style="font-weight: bold;">Instructor Data Form</span>
                                        <br>For updating Instructor Profile.<br><br>
                                    </li>
                                    <li>
                                        <span style="font-weight: bold;">Instructor Schedule</span>
                                        <br>Displays all Instructor's schedule in a list.<br><br>
                                    </li>
                                </ol>

                                <img src="{{ url('uploads/instructor_data_management_form_edit.jpg') }}" style="width: 500px;">
                                <ul style="margin-left: 40px;">
                                    <li>
                                        <strong>Update all the field you want to change and click the "Save" button.</strong>
                                    </li>
                                </ul>


                                <h2 id="upload-instructor-signature"># Upload Instructor's Signature</h2>
                                <hr>

                                <img src="{{ url('uploads/instructor_data_management_form_edit_2.jpg') }}" style="width: 500px;;">
                                <ul style="margin-left: 40px;">
                                    <li>
                                        <span style="font-weight: bold;">Click the "choose file" button.</span>
                                        <br>At the bottom of Instructor/Assessor Edit Page is where you can upload the signature of the instructor<br><br>
                                    </li>
                                    <li>
                                        <span style="font-weight: bold;">You may upload Instructor’s Signature in .PNG format.</span><br><br>
                                    </li>
                                    <li>
                                        <span style="font-weight: bold;">Instructor’s Signature is required to have transparency.</span><br>
                                    </li>
                                </ul>

                                <br>
                                <h2 id="search-instructor-profile"># Search an Instructor Profile</h2>
                                <hr>

                                <img src="{{ url('uploads/instructor_data_management_search_field.jpg') }}" style="width: 500px;">
                                <ul style="margin-left: 40px;">
                                    <li>
                                        <span style="font-weight: bold;">Type name of the instructor you want to search and it will automatically displays the matching result.</span>
                                    </li>
                                    <li>
                                        <span style="font-weight: bold;">The search query accepts the full name or status.</span>
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
                                <span class="md-list-heading uk-text-truncate"><a href="#create-instructor-profile">Create Instructor Profile</a></span>
                            </div>
                        </li>
                        <li>
                            <div class="md-list-content">
                                <span class="md-list-heading uk-text-truncate"><a href="#edit-instructor-profile">Edit Instructor Profile</a></span>
                            </div>
                        </li>
                        <li>
                            <div class="md-list-content">
                                <span class="md-list-heading uk-text-truncate"><a href="#upload-instructor-signature">Upload Instructor's Signature</a></span>
                            </div>
                        </li>
                        <li>
                            <div class="md-list-content">
                                <span class="md-list-heading uk-text-truncate"><a href="#search-instructor-profile">Search an Instructor Profile</a></span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>


@endsection
