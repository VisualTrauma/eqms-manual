@extends('layouts.main')

@section('page-title') Enrollment @endsection

@section('nav-enrollment') act_item @endsection

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
                                <h1>Enrollment</h1>
                                <p class="meta">Written on 20th April 2017</p>

                                <h2 id="create-transaction"># Create Transaction</h2>
                                <hr>
                                <img src="{{ url('uploads/enrollment_view_button.jpg') }}" style="width: 949px;">
                                <ul style="margin-left: 40px;">
                                    <li>
                                        <span style="font-weight: bold;">Select a Trainee</span>
                                        <br>On Trainee Data Management page, click name of the trainee record you want to enroll.<br><br>
                                    </li>
                                </ul>

                                <br>
                                <img src="{{ url('uploads/enrollment_add_course_button.jpg') }}" style="width: 949px;">
                                <ul style="margin-left: 40px;">
                                    <li>
                                        <span style="font-weight: bold;">Click "Add Course" button</span>
                                        <br>You will be redirected to a page where you can add new transaction to the trainee.<br><br>
                                    </li>
                                </ul>

                                <br>
                                <img src="{{ url('uploads/enrollment_transaction_form_new.jpg') }}" style="width: 949px;">
                                <p style="margin-left: 15px;">The system will generate a Certificate of Registration No. for every transaction created. This will be your reference when adding courses to the created transaction later.</p>
                                <ul style="margin-left: 40px;">
                                    <li>
                                        <span style="font-weight: bold;">Select a Department</span>
                                        <br>Select the current department of the trainee.<br><br>
                                    </li>
                                    <li>
                                        <span style="font-weight: bold;">Select a Rank</span>
                                        <br>Select the current rank of the trainee.<br><br>
                                    </li>
                                    <li>
                                        <span style="font-weight: bold;">Select a Level</span>
                                        <br>Select the current level of the trainee.<br><br>
                                    </li>
                                    <li>
                                        <span style="font-weight: bold;">Select Pay Type</span>
                                        <br>Select whether the trainee will personally pay for the training fee (Walk-in) or a company will pay for his training fee (Company Account)<br><br>
                                    </li>
                                    <li>
                                        <span style="font-weight: bold;">Click "Submit" button.</span>
                                        <br>You will be redirected to Add Training Course page after the transaction has been created.<br><br>
                                    </li>
                                </ul>

                                <h2 id="adding-training-course"># Adding Training Course</h2>
                                <hr>
                                <img src="{{ url('uploads/enrollment_view_button.jpg') }}" style="width: 949px;">
                                <ul style="margin-left: 40px;">
                                    <li>
                                        <span style="font-weight: bold;">Select a Trainee</span>
                                        <br>On Trainee Data Management page, click name of the trainee record you want to enroll.<br><br>
                                    </li>
                                </ul>

                                <br>
                                <img src="{{ url('uploads/enrollment_transaction_button.jpg') }}" style="width:949px;">
                                <ul style="margin-left: 40px;">
                                    <li>
                                        <span style="font-weight: bold;">Select a Transaction</span>
                                        <br>As mentioned in Transaction Creation above, the system generates a C.O.R. No. for every transaction created. The latest created transaction will always be at the bottom of the dropdown list.<br><br>
                                    </li>
                                </ul>

                                <br>
                                <img src="{{ url('uploads/enrollment_open_transaction_button.jpg') }}" style="width:949px;">
                                <ul style="margin-left: 40px;">
                                    <li>
                                        <span style="font-weight: bold;">Click "Open" button</span>
                                        <br>Clicking the "Open" button will get you to Add Training Course page.<br><br>
                                    </li>
                                </ul>

                                <br>
                                <img src="{{ url('uploads/enrollment_add_training_course_page.jpg') }}" style="width:949px;">
                                <p style="margin-left: 15px;">Add Training Course page is consist of:</p>
                                <ol style="margin-left: 40px;">
                                    <li>
                                        <span style="font-weight: bold;">Transaction Panel</span>
                                        <br>Displays information about the current transaction as well as the payment information about the current transaction.<br><br>
                                    </li>
                                    <li>
                                        <span style="font-weight: bold;">Course Panel</span>
                                        <br>Displays all courses add to the current transaction in a list as well as add, remove and print button.<br><br>
                                    </li>
                                </ol>

                                <br>
                                <img src="{{ url('uploads/enrollment_transaction_add_course_button.jpg') }}" style="width:949px;">
                                <ul style="margin-left: 40px;">
                                    <li>
                                        <span style="font-weight: bold;">Click "Add Courses" button</span>
                                        <br>A form will apppear where you can select a course<br><br>
                                    </li>
                                </ul>

                                <br>
                                <img src="{{ url('uploads/enrollment_transaction_select_category.jpg') }}" style="width:500px;">
                                <ul style="margin-left: 40px;">
                                    <li>
                                        <span style="font-weight: bold;">Select a Category of the Course</span>
                                        <br>Clicking the "Open" button will get you to Add Training Course page.<br><br>
                                    </li>
                                </ul>

                                <br>
                                <img src="{{ url('uploads/enrollment_transaction_course_selection.jpg') }}" style="width:949px;">
                                <ul style="margin-left: 40px;">
                                    <li>
                                        <span style="font-weight: bold;">Select the Course(s) you want to add to the transaction</span>
                                        <br>The newly added course will appear on the Add Training Course page, if not try refreshing the page and see if the course was added on the list.<br><br>
                                    </li>
                                </ul>

                                <h2 id="schedule-selection"># Schedule Selection</h2>
                                <hr>
                                <img src="{{ url('uploads/enrollment_transaction_course_added.jpg') }}" style="width:949px;">
                                <ul style="margin-left: 40px;">
                                    <li>
                                        <span style="font-weight: bold;">Select a Schedule</span>
                                        <br>Click the "open" link under schedule time to include the trainee to a particular schedule.<br><br>
                                    </li>
                                </ul>

                                <br>
                                <img src="{{ url('uploads/enrollment_transaction_schedule_selection.jpg') }}" style="width:500px;">
                                <ul style="margin-left: 40px;">
                                    <li>
                                        <span style="font-weight: bold;">Select a Schedule</span>
                                        <br>Always choose the earliest schedule for the course.<br><br>
                                    </li>
                                </ul>

                                <br>
                                <img src="{{ url('uploads/enrollment_transaction_schedule_apply.jpg') }}" style="width:450px;">
                                <ul style="margin-left: 40px;">
                                    <li>
                                        <span style="font-weight: bold;">Click Apply</span>
                                    </li>
                                </ul>

                                <br>
                                <img src="{{ url('uploads/enrollment_transaction_schedule_selected_done.jpg') }}" style="width:949px;">
                                <ul style="margin-left: 40px;">
                                    <li>
                                        <span style="font-weight: bold;">Course on Course Panel should look like this.</span>
                                        <br>If you don't see the schedule reflected in the Course Panel try refreshing the page.<br><br>
                                    </li>
                                </ul>

                                <h2 id="edit-transaction"># Edit Transaction</h2>
                                <hr>
                                <img src="{{ url('uploads/enrollment_transaction_button.jpg') }}" style="width: 949px;">
                                <ul style="margin-left: 40px;">
                                    <li>
                                        <span style="font-weight: bold;">Select Transaction</span>
                                    </li>
                                </ul>

                                <br>
                                <img src="{{ url('uploads/enrollment_open_transaction_button.jpg') }}" style="width: 949px;">
                                <ul style="margin-left: 40px;">
                                    <li>
                                        <span style="font-weight: bold;">Click "Open" button.</span>
                                    </li>
                                </ul>

                                <br>
                                <img src="{{ url('uploads/enrollment_transaction_edit_button.jpg') }}" style="width: 949px;">
                                <ul style="margin-left: 40px;">
                                    <li>
                                        <span style="font-weight: bold;">Click "Edit" button.</span>
                                    </li>
                                </ul>

                                <br>
                                <img src="{{ url('uploads/enrollment_transaction_edit_form.jpg') }}" style="width: 500px;">
                                <ul style="margin-left: 40px;">
                                    <li>
                                        <span style="font-weight: bold;">Update the fields and click "Save Enrollment".</span>
                                    </li>
                                </ul>

                                <h2 id="cor-printing"># C.O.R Printing</h2>
                                <hr>
                                <img src="{{ url('uploads/enrollment_add_training_course_page_2.jpg') }}" style="width: 949px;">
                                <ul style="margin-left: 40px;">
                                    <li>
                                        <span style="font-weight: bold;">Click "Print" button.</span>
                                        <br>On Add Training Course page, click "Print" button.<br><br>
                                    </li>
                                </ul>

                                <br>
                                <img src="{{ url('uploads/enrollment_print_cor_button.jpg') }}" style="width: 500px;">
                                <ul style="margin-left: 40px;">
                                    <li>
                                        <span style="font-weight: bold;">Update the fields and click "Save Enrollment".</span>
                                    </li>
                                </ul>

                                <br>
                                <img src="{{ url('uploads/enrollment_cor_raw_format.jpg') }}" style="width: 949px;">
                                <ul style="margin-left: 40px;">
                                    <li>
                                        <span style="font-weight: bold;">Print the Page.</span>
                                        <br>Press Ctrl + P on your keyboard to print the COR. Header and footer of COR will appear on print preview page.<br><br>
                                    </li>
                                </ul>

                                <br>
                                <img src="{{ url('uploads/enrollment_cor_print_preview.jpg') }}" style="width: 949px;">
                                <ul style="margin-left: 40px;">
                                    <li>
                                        <span style="font-weight: bold;">Click the "Print"</span>
                                        <br>Select a proper paper size and make sure. background graphics is checked. If you don't see this settings click "more settings" on the left pane of the Print Preview page.<br><br>
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
                                <span class="md-list-heading uk-text-truncate"><a href="#create-transaction">Create Transaction</a></span>
                            </div>
                        </li>
                        <li>
                            <div class="md-list-content">
                                <span class="md-list-heading uk-text-truncate"><a href="#adding-training-course">Adding Training Course</a></span>
                            </div>
                        </li>
                        <li>
                            <div class="md-list-content">
                                <span class="md-list-heading uk-text-truncate"><a href="#schedule-selection">Schedule Selection</a></span>
                            </div>
                        </li>
                        <li>
                            <div class="md-list-content">
                                <span class="md-list-heading uk-text-truncate"><a href="#edit-transaction">Edit Transaction</a></span>
                            </div>
                        </li>
                        <li>
                            <div class="md-list-content">
                                <span class="md-list-heading uk-text-truncate"><a href="#cor-printing">C.O.R Printing</a></span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
@endsection
