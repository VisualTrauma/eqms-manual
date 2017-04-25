@extends('layouts.main')

@section('page-title') Client Company Maintenance @endsection

@section('nav-client-company-maintenance') act_item @endsection

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
                                <h1>Client Company Maintenance</h1>
                                <p class="meta">Written on 20th April 2017</p>

                                <h2 id="interface"># Interface</h2>
                                <hr>

                                <img src="{{ url('uploads/client_company_maintenance.jpg') }}" style="width: 949px;">
                                <p><span style="color: rgb(68, 68, 68); font-family: Roboto, sans-serif; font-size: 14px;">&nbsp;&nbsp;&nbsp;&nbsp;To access the Client Company Maintenance page click the “Pages” button on the navigation bar next to Home Button then click on “Maintenance Company”.</span></p>

                                <h2 id="structure"># Structure</h2>
                                <hr>

                                <img src="{{ url('uploads/client_company_maintenance_labeled.jpg') }}" style="width: 949px;">
                                <p style="margin-left: 15px;">Client Company Maintenance page is consist of:</p>
                                <ol style="margin-left: 40px;">
                                    <li>
                                        <span style="font-weight: bold;">Add Company Button</span>
                                        <br>For creating new Client Company profile.<br><br>
                                    </li>
                                    <li>
                                        <span style="font-weight: bold;">Client Company Table</span>
                                        <br>Displays all company profile in a list.<br><br>
                                    </li>
                                </ol>

                                <h2 id="add-client-company"># Add Client Company</h2>
                                <hr>

                                <img src="{{ url('uploads/client_company_maintenance_add_button.jpg') }}" style="width: 500px;">
                                <ul style="margin-left: 40px;">
                                    <li>
                                        <span style="font-weight: bold;">On the upper left corner of the page, click the "Add Company" button</span>
                                        <br>New panel will pop up of the page displaying a form where you can create a new client company profile.<br><br>
                                    </li>
                                </ul>

                                <br>
                                <img src="{{ url('uploads/client_company_form_new.jpg') }}" style="width:500px;">
                                <ul style="margin-left: 40px;">
                                    <li>
                                        <strong>Fill up all the required field and click the "Add Company" button.</strong>
                                    </li>
                                </ul>

                                <h2 id="edit-client-company-profile"># Edit Client Company Profile</h2>
                                <hr>

                                <img src="{{ url('uploads/client_company_maintenance_edit_button.jpg') }}" style="width: 949px;">
                                <ul style="margin-left: 40px;">
                                    <li>
                                        <span style="font-weight: bold;">Click the "Edit" button.</span>
                                        <br>On Client Company Maintenance page click the “Edit” link next to the company you wish to edit. You will be redirected to Client Company Edit Page.<br><br>
                                    </li>
                                </ul>

                                <img src="{{ url('uploads/client_company_maintenance_edit_page.jpg') }}" style="width: 949px;">
                                <p style="margin-left: 15px;">Client Company Edit page is consist of:</p>
                                <ol style="margin-left: 40px;">
                                    <li>
                                        <span style="font-weight: bold;">Client Company Details Form</span>
                                        <br>Displays the fields with existing company details.<br><br>
                                    </li>
                                    <li>
                                        <span style="font-weight: bold;">Training Fee per Company Panel</span>
                                        <br>Here you can set training fee per course per on currently selected company.<br>
                                    </li>
                                </ol>

                                <ul style="margin-left: 40px;">
                                    <li>
                                        <strong>Update all the field you want to change and click the "Submit" button.</strong>
                                    </li>
                                </ul>


                                <h2 id="edit-training-fee-per-company"># Edit Training Fee per Company </h2>
                                <hr>

                                <img src="{{ url('uploads/client_company_maintenance_update_price_button.jpg') }}" style="width: 949px;">
                                <ul style="margin-left: 40px;">
                                    <li>
                                        <span style="font-weight: bold;">Click the "Update Price" button.</span>
                                        <br>On Training Fee per Company Panel click “Update Price” button next to the course you want to update the training fee. A form will pop up where you can enter the new price<br><br>
                                    </li>
                                </ul>

                                <img src="{{ url('uploads/client_company_maintenance_form_new.jpg') }}" style="width: 500px;">
                                <ul style="margin-left: 40px;">
                                    <li>
                                        <span style="font-weight: bold;">Enter the value in the Company Price field and click “Update” button.</span>
                                    </li>
                                </ul>

                                <h2 id="search-client-company"># Search a Client Company</h2>
                                <hr>

                                <img src="{{ url('uploads/client_company_maintenance_search_field.jpg') }}" style="width: 949px;">
                                <ul style="margin-left: 40px;">
                                    <li>
                                        <span style="font-weight: bold;">Type the company name you want to search and it will automatically displays the matching result.</span>
                                    </li>
                                    <li>
                                        <span style="font-weight: bold;">The search query accepts company code or company's full name.</span>
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
                                <span class="md-list-heading uk-text-truncate"><a href="#add-client-company">Add Client Company</a></span>
                            </div>
                        </li>
                        <li>
                            <div class="md-list-content">
                                <span class="md-list-heading uk-text-truncate"><a href="#edit-client-company-profile">Edit Client Company Profile</a></span>
                            </div>
                        </li>
                        <li>
                            <div class="md-list-content">
                                <span class="md-list-heading uk-text-truncate"><a href="#edit-training-fee-per-company">Edit Training Fee per Company</a></span>
                            </div>
                        </li>
                        <li>
                            <div class="md-list-content">
                                <span class="md-list-heading uk-text-truncate"><a href="#search-client-company">Search a Client Company</a></span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
@endsection
