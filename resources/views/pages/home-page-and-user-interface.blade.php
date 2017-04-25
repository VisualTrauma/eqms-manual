@extends('layouts.main')

@section('page-title') Home Page and User Interface @endsection

@section('nav-sec-home-page-and-user-interface') current_section @endsection

@section('page-content')
    <div id="page_content">
        <div id="page_content_inner">

            <div class="uk-grid blog_article" data-uk-grid-margin>
                <div class="uk-width-medium-3-8">
                    <div class="md-card">
                        <div class="md-card-content large-padding">
                            <div class="uk-article">
                                <h1 class="uk-article-title" style="font-family: 'Raleway', sans-serif; font-weight: 300; font-size: 42px;">Home Page and User Interface</h1>
                                <p class="uk-article-meta">
                                    Written on 20th April 2017 <br><br><br>
                                </p>
                                <p class="uk-article-lead">You will be redirected to Home Page after logging in to the system.</p>
                                <hr class="uk-article-divider">
                                <p>
                                    <figure class="uk-thumbnail thumbnail_left uk-width-medium-4-4">
                                        <img src="{{ url('uploads/home_page_labeled.jpg') }}" alt="">
                                        <figcaption class="uk-thumbnail-caption">Home Page</figcaption>
                                    </figure>
                                    Home Page is consist of the following:
                                </p>
                                <ol>
                                    <li>
                                        <strong>Home Button</strong>
                                        <p>Redirects you to the Home Page.</p>
                                    </li>
                                    <li>
                                        <strong>Page List</strong>
                                        <p>Displays all available pages that can be access.</p>
                                    </li>
                                    <li>
                                        <strong>Sign Out Button</strong>
                                        <p>End the current session and sign out the user from TMS.</p>
                                    </li>
                                    <li>
                                        <strong>Account Information Panel</strong>
                                        <p>Displays Accont Details of the currently logged in user. Provides link to Update User Information and Password.</p>
                                    </li>
                                    <li>
                                        <strong>On-going Schedule Panel</strong>
                                        <p>Displays a list of On-going training schedule for AM and PM schedules</p>
                                    </li>
                                </ol>
                                <blockquote>
                                    Note: List of pages that appear in the Page List may vary per user.
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection
