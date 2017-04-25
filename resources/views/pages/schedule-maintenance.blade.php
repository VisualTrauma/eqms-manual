@extends('layouts.main')

@section('page-title') Schedule Maintenance @endsection

@section('nav-schedule-maintenance') act_item @endsection

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
                                <h1>Schedule Maintenance</h1>
                                <p class="meta">Written on 20th April 2017</p>

                                <h2 id="interface"># Interface</h2>
                                <hr>

                                <img src="{{ url('uploads/schedule_maintenance.jpg') }}" style="width: 949px;">
                                <p><span style="color: rgb(68, 68, 68); font-family: Roboto, sans-serif; font-size: 14px;">&nbsp;&nbsp;&nbsp;&nbsp;To access the Schedule Maintenance page click the “Pages” button on the navigation bar next to Home Button then click on “Schedule / Add”</span></p>

                                <h2 id="structure"># Structure</h2>
                                <hr>

                                <img src="{{ url('uploads/schedule_maintenance_labeled.jpg') }}" style="width: 949px;">
                                <p style="margin-left: 15px;">Schedule Maintenance page is consist of:</p>
                                <ol style="margin-left: 40px;">
                                    <li>
                                        <span style="font-weight: bold;">Add and Advance Search Button</span>
                                        <br>For creating new Schedule entry and Advance Search for seraching a particular schedule.<br><br>
                                    </li>
                                    <li>
                                        <span style="font-weight: bold;">Display Filters</span>
                                        <br>Filters the schedule depending on Year, Month and/or Category.<br><br>
                                    </li>
                                    <li>
                                        <span style="font-weight: bold;">Legend</span>
                                        <br>Indicates the current state of a schedule.<br><br>
                                    </li>
                                    <li>
                                        <span style="font-weight: bold;">Calendar of Schedules</span>
                                        <br>Displays all created schedules in a calendar.<br><br>
                                    </li>
                                </ol>

                                <h2 id="create-new-schedule"># Create New Schedule</h2>
                                <hr>

                                <img src="{{ url('uploads/schedule_maintenance_add_button.jpg') }}" style="width: 500px;">
                                <ul style="margin-left: 40px;">
                                    <li>
                                        <span style="font-weight: bold;">On the upper left corner of the page, click the "Add Schedule" button</span>
                                        <br>New panel will pop up of the page displaying a form where you can create a new schedule<br><br>
                                    </li>
                                </ul>

                                <br>
                                <img src="{{ url('uploads/schedule_maintenance_form_new_1.jpg') }}" style="width:500px;">
                                <ul style="margin-left: 40px;">
                                    <li>
                                        <strong>Select a Course</strong>
                                        <br>Click the "Select a Course" Dropdown field and choose a course or type the course code to search for the course on the provided field.<br><br>
                                    </li>
                                    <li>
                                        <strong>Choose a Starting Date</strong>
                                        <br>Click the field next to the "From" label and select a starting date for the schedule. <br><br>
                                    </li>
                                    <li>
                                        <strong>Choose a Ending Date</strong>
                                        <br>Click the field next to the "To" label and select an ending date for the schedule. <br><br>
                                    </li>
                                    <li>
                                        <strong>Enter a Batch Name</strong>
                                        <br>This is a code to distinguished a multiple schedule with the same course running at the same time. More like a "Section" in School.<br><br>
                                    </li>
                                    <li>
                                        <strong>Select a Start Time</strong>
                                        <br>Click the Dropdown next to "Hrs" to choose an hour. and "Min" for minutes. Note that the Dropdown is in 24hour format.<br><br>
                                    </li>
                                    <li>
                                        <strong>Select an End Time</strong>
                                        <br>Click the Dropdown next to "Hrs" to choose an hour. and "Min" for minutes. Note that the Dropdown is in 24hour format.<br><br>
                                    </li>
                                    <li>
                                        <strong>Select a Venue</strong>
                                        <br>Click the field next to "Venue" and choose where the training schedule will be held.<br><br>
                                    </li>
                                    <li>
                                        <strong>Select a Room</strong>
                                        <br>Click the field next to "Room" and choose a room wherer the training schedule will be held. Please note that Room is specific to the venue you selected.<br><br>
                                    </li>
                                    <li>
                                        <strong>Choose an Available Instructor</strong>
                                        <br>Click the "Select a Insructor" Dropdown field next to "Instructor 1" and choose an instructor or type the name of the instructor to search for the course on the provided field.<br><br>
                                    </li>
                                    <li>
                                        <strong>Choose an Available Assessor</strong>
                                        <br>Click the "Select a Assessor" Dropdown field next to "Assessor 1" and choose an Assessor or type the name of the Assessor to search for the course on the provided field. Please note that, an Instructor cannot be an Assessor at the same time<br><br>
                                    </li>
                                </ul>

                                <br>
                                <img src="{{ url('uploads/schedule_maintenance_form_new_2.jpg') }}" style="width:500px;">
                                <ul style="margin-left: 40px;">
                                    <li>
                                        <strong>Click "Submit" button.</strong>
                                        <br>Double check the field you entered and click the "Submit" button to save the schedule.<br><br>
                                    </li>
                                </ul>

                                <h2 id="search-for-schedule"># Search for Schedule</h2>
                                <hr>

                                <img src="{{ url('uploads/schedule_maintenance_search_button.jpg') }}" style="width: 500px;">
                                <ul style="margin-left: 40px;">
                                    <li>
                                        <span style="font-weight: bold;">On the upper left corner of the page, click the "Search Schedule" button</span>
                                        <br>You will be redirected to "Advance Schedule Search" page where you can specify specific attributes of the schedule you want to search.<br><br>
                                    </li>
                                </ul>

                                <br>
                                <img src="{{ url('uploads/schedule_maintenance_advance_search_page.jpg') }}" style="width:949;">
                                <ol style="margin-left: 40px;">
                                    <li>
                                        <strong>Search Form</strong>
                                        <br>Enter the attributes of schedule you want to search.<br><br>
                                    </li>
                                    <li>
                                        <strong>Search Result Panel</strong>
                                        <br>Displays the result of the current search. To view a detailed information about the schedule, click the course code on the schedule you want to view.<br><br>
                                    </li>
                                </ol>

                                <br>
                                <img src="{{ url('uploads/schedule_maintenance_advance_search_form.jpg') }}" style="width:500;">
                                <ul style="margin-left: 40px;">
                                    <li>
                                        <strong>Select a Course</strong>
                                        <br>Click the "Select a Course" Dropdown field and choose a course or type the course code to search for the course on the provided field. If you want to select all the courses, let the course unspecified.<br><br>
                                    </li>
                                    <li>
                                        <strong>Specify Search Coverage</strong>
                                        <br>Specify the date of coverage of your search by entering the start date “From” and end date “To”.<br><br>
                                    </li>
                                    <li>
                                        <strong>Select Schedule Date</strong>
                                        <br>The “Choose Schedule Date” specify whether you want to search for the start date of the schedule or the end date.<br><br>
                                    </li>
                                </ul>

                                <br>
                                <img src="{{ url('uploads/schedule_maintenance_advance_search_result.jpg') }}" style="width:949;">
                                <p>Search result will look like the image above. To show a more detailed information about the schedule, click the link on the first column of the table.</p>

                                <h2 id="display-schedule"># Display Schedule</h2>
                                <hr>

                                <img src="{{ url('uploads/schedule_maintenance_calendar.jpg') }}" style="width: 949px;">
                                <ul style="margin-left: 40px;">
                                    <li>
                                        <span style="font-weight: bold;">Select a Schedule to View</span>
                                        <br>On the Calendar of Schedules click the schedule you want to view. A new window should open containing detailed information about the schedule.<br><br>
                                    </li>
                                </ul>

                                <br>

                                <p style="margin-left: 15px;">Schedule Information Page is divided into three sections: </p>
                                <ol style="margin-left: 40px;">
                                    <li>
                                        <strong>Detailed Schedule Information Panel</strong>
                                        <br>Displays the detailed information about the selected schedule: course code, course name, batch, venue, room, trainee count, duration, session, instructor, assessor, date and time.<br>
                                        <img src="{{ url('uploads/schedule_maintenance_schedule_information.jpg') }}" style="width:500;"><br><br>
                                    </li>
                                    <li>
                                        <strong>Trainee Attendance Panel</strong>
                                        <br>Displays the list of trainee currently under the selected schedule and their attendance on the schedule<br>
                                        <img src="{{ url('uploads/schedule_maintenance_trainee_attendance_panel.jpg') }}" style="width:500;"><br><br>
                                    </li>
                                    <li>
                                        <strong>Printable Reports</strong>
                                        <br>Printable Reports consists of Attendance Sheet, Enrollment Report, Certificate of Completion, Completion Report, Assessment, TCROA, Transmittal, Summary Report, BUS, Trainee List. However, access to those reports depends on the privilege your account has.<br><br>
                                        <img src="{{ url('uploads/schedule_maintenance_printable_reports.jpg') }}" style="width:500;"><br><br>
                                    </li>
                                </ol>

                                <h2 id="edit-schedule"># Edit Schedule</h2>
                                <hr>

                                <img src="{{ url('uploads/schedule_maintenance_edit_button.jpg') }}" style="width: 500px;">
                                <ul style="margin-left: 40px;">
                                    <li>
                                        <span style="font-weight: bold;">On Detailed Schedule Information panel, click “Edit” button</span>
                                    </li>
                                </ul>

                                <br>

                                <img src="{{ url('uploads/schedule_maintenance_edit_form.jpg') }}" style="width: 949px;">
                                <ul style="margin-left: 40px;">
                                    <li>
                                        <span style="font-weight: bold;">Update the schedule field and click “Submit” button</span>
                                    </li>
                                </ul>

                                <h2 id="delete-schedule"># Delete Schedule</h2>
                                <hr>

                                <img src="{{ url('uploads/schedule_maintenance_delete_button.jpg') }}" style="width: 500px;">
                                <ul style="margin-left: 40px;">
                                    <li>
                                        <span style="font-weight: bold;">On Detailed Schedule Information panel, click “Delete” button</span>
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
                                <span class="md-list-heading uk-text-truncate"><a href="#create-new-schedule">Create New Schedule</a></span>
                            </div>
                        </li>
                        <li>
                            <div class="md-list-content">
                                <span class="md-list-heading uk-text-truncate"><a href="#search-for-schedule">Search for Schedule</a></span>
                            </div>
                        </li>
                        <li>
                            <div class="md-list-content">
                                <span class="md-list-heading uk-text-truncate"><a href="#display-schedule">Display Schedule</a></span>
                            </div>
                        </li>
                        <li>
                            <div class="md-list-content">
                                <span class="md-list-heading uk-text-truncate"><a href="#edit-schedule">Edit Schedule</a></span>
                            </div>
                        </li>
                        <li>
                            <div class="md-list-content">
                                <span class="md-list-heading uk-text-truncate"><a href="#delete-schedule">Delete Schedule</a></span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>


@endsection
