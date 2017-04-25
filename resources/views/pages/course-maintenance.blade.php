@extends('layouts.main')

@section('page-title') Course Maintenance @endsection

@section('nav-course-maintenance') act_item @endsection

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
                                <h1>Course Maintenance</h1>
                                <p class="meta">Written on 20th April 2017</p>

                                <h2 id="interface"># Interface</h2>
                                <hr>

                                <img src="{{ url('uploads/course_maintenance.jpg') }}" style="width: 949px;">
                                <p><span style="color: rgb(68, 68, 68); font-family: Roboto, sans-serif; font-size: 14px;">&nbsp;&nbsp;&nbsp;&nbsp;To access the Schedule Maintenance page click the “Pages” button on the navigation bar next to Home Button then click on “Maintenance Course”.</span></p>

                                <h2 id="structure"># Structure</h2>
                                <hr>

                                <img src="{{ url('uploads/course_maintenance_labeled.jpg') }}" style="width: 949px;">
                                <p style="margin-left: 15px;">Course Maintenance page is consist of:</p>
                                <ol style="margin-left: 40px;">
                                    <li>
                                        <span style="font-weight: bold;">Add Button</span>
                                        <br>For creating new Course entry.<br><br>
                                    </li>
                                    <li>
                                        <span style="font-weight: bold;">Course Table</span>
                                        <br>Displays all courses in a list.<br><br>
                                    </li>
                                </ol>

                                <h2 id="add-new-course"># Add New Course</h2>
                                <hr>

                                <img src="{{ url('uploads/course_maintenance_add_button.jpg') }}" style="width: 500px;">
                                <ul style="margin-left: 40px;">
                                    <li>
                                        <span style="font-weight: bold;">On the upper left corner of the page, click the "Add Course" button</span>
                                        <br>You will be redirected to the page displaying a form where you can create a new course.<br><br>
                                    </li>
                                </ul>

                                <br>
                                <img src="{{ url('uploads/course_maintenance_form_new.jpg') }}" style="width:500px;">
                                <ul style="margin-left: 40px;">
                                    <li>
                                        <strong>Fill up all the required field and click the "Submit" button.</strong>
                                        <br>A course contain Course Code, Description, Category, Course Type, Level, Marina Required, Status, Branch and Duration<br><br>
                                    </li>
                                </ul>

                                <h2 id="edit-course"># Edit a Course</h2>
                                <hr>

                                <img src="{{ url('uploads/course_maintenance_edit_button.jpg') }}" style="width: 500px;">
                                <ul style="margin-left: 40px;">
                                    <li>
                                        <span style="font-weight: bold;">Click the "Edit" button.</span>
                                        <br>On Course Maintenance page, click the edit button (the right one on Actions column) next to the course you want to edit. You will be redirected to Course Edit page.<br><br>
                                    </li>
                                </ul>

                                <br>
                                <img src="{{ url('uploads/course_maintenance_form_edit.jpg') }}" style="width:949;">
                                <ul style="margin-left: 40px;">
                                    <li>
                                        <strong>Update all the field you want to change and click the "Submit" button.</strong>
                                    </li>
                                </ul>

                                <h2 id="edit-course-certificate"># Edit a Course Certificate </h2>
                                <hr>

                                <img src="{{ url('uploads/course_maintenance_certificate_button.jpg') }}" style="width: 949px;">
                                <ul style="margin-left: 40px;">
                                    <li>
                                        <span style="font-weight: bold;">Click the "Certificate" button.</span>
                                        <br>On Course Maintenance page, click the certificate button (the left one on Actions column) next to the course you want to edit a certificate. You will be redirected to Certificate Edit page.<br><br>
                                    </li>
                                </ul>

                                <br>

                                <p style="margin-left: 15px;">Certificate Edit Page is divided into three sections: </p>
                                <ol style="margin-left: 40px;">
                                    <li>
                                        <strong>Certificate Editor</strong>
                                        <br>This panel allows you to update the appearance and layout of the certificate.<br>
                                        <img src="{{ url('uploads/course_maintenance_certificate_editor.jpg') }}" style="width:500;"><br><br>
                                    </li>
                                    <li>
                                        <strong>Certificate Creation Guide</strong>
                                        <br>Explains how to use the Certificate Editor.<br>
                                        <img src="{{ url('uploads/course_maintenance_editor_guide.jpg') }}" style="width:500;"><br><br>
                                    </li>
                                    <li>
                                        <strong>Code Reference</strong>
                                        <br>Displays the list of codes that you can use as placeholder on the certificate editor. Those codes that exists on the Certificate will be replaced by the Actual data that needs to be on the certificate.<br><br>
                                        <img src="{{ url('uploads/course_maintenance_code_reference.jpg') }}" style="width:500;"><br><br>
                                    </li>
                                </ol>

                                <h2 id="search-course"># Search a Course</h2>
                                <hr>

                                <img src="{{ url('uploads/course_maintenance_search_field.jpg') }}" style="width: 500px;">
                                <ul style="margin-left: 40px;">
                                    <li>
                                        <span style="font-weight: bold;">Type course you want to search and it will automatically displays the matching result.</span>
                                    </li>
                                    <li>
                                        <span style="font-weight: bold;">The search query accepts the full course name or just the course code, whichever you prefer.</span>
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
                                <span class="md-list-heading uk-text-truncate"><a href="#add-new-course">Add New Course</a></span>
                            </div>
                        </li>
                        <li>
                            <div class="md-list-content">
                                <span class="md-list-heading uk-text-truncate"><a href="#edit-course">Edit a Course</a></span>
                            </div>
                        </li>
                        <li>
                            <div class="md-list-content">
                                <span class="md-list-heading uk-text-truncate"><a href="#edit-course-certificate">Edit a Course Certificate</a></span>
                            </div>
                        </li>
                        <li>
                            <div class="md-list-content">
                                <span class="md-list-heading uk-text-truncate"><a href="#search-course">Search a Course</a></span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>


@endsection
