<?php

$tabla = '<section class="body">

        <!-- start: header -->
        <header class="header">
                <div class="logo-container">
                        <a href="../" class="logo">
                                <img src="assets/images/logo.png" height="35" alt="Porto Admin" />
                        </a>
                        <div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
                                <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
                        </div>
                </div>

                <!-- start: search & user box -->
                <div class="header-right">

                        <form action="pages-search-results.html" class="search nav-form">
                                <div class="input-group input-search">
                                        <input type="text" class="form-control" name="q" id="q" placeholder="Search...">
                                        <span class="input-group-btn">
                                                <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                                        </span>
                                </div>
                        </form>

                        <span class="separator"></span>

                        <ul class="notifications">
                                <li>
                                        <a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
                                                <i class="fa fa-tasks"></i>
                                                <span class="badge">3</span>
                                        </a>

                                        <div class="dropdown-menu notification-menu large">
                                                <div class="notification-title">
                                                        <span class="pull-right label label-default">3</span>
                                                        Tasks
                                                </div>

                                                <div class="content">
                                                        <ul>
                                                                <li>
                                                                        <p class="clearfix mb-xs">
                                                                                <span class="message pull-left">Generating Sales Report</span>
                                                                                <span class="message pull-right text-dark">60%</span>
                                                                        </p>
                                                                        <div class="progress progress-xs light">
                                                                                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                                                                        </div>
                                                                </li>

                                                                <li>
                                                                        <p class="clearfix mb-xs">
                                                                                <span class="message pull-left">Importing Contacts</span>
                                                                                <span class="message pull-right text-dark">98%</span>
                                                                        </p>
                                                                        <div class="progress progress-xs light">
                                                                                <div class="progress-bar" role="progressbar" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100" style="width: 98%;"></div>
                                                                        </div>
                                                                </li>

                                                                <li>
                                                                        <p class="clearfix mb-xs">
                                                                                <span class="message pull-left">Uploading something big</span>
                                                                                <span class="message pull-right text-dark">33%</span>
                                                                        </p>
                                                                        <div class="progress progress-xs light mb-xs">
                                                                                <div class="progress-bar" role="progressbar" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100" style="width: 33%;"></div>
                                                                        </div>
                                                                </li>
                                                        </ul>
                                                </div>
                                        </div>
                                </li>
                                <li>
                                        <a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
                                                <i class="fa fa-envelope"></i>
                                                <span class="badge">4</span>
                                        </a>

                                        <div class="dropdown-menu notification-menu">
                                                <div class="notification-title">
                                                        <span class="pull-right label label-default">230</span>
                                                        Messages
                                                </div>

                                                <div class="content">
                                                        <ul>
                                                                <li>
                                                                        <a href="#" class="clearfix">
                                                                                <figure class="image">
                                                                                        <img src="assets/images/!sample-user.jpg" alt="Joseph Doe Junior" class="img-circle" />
                                                                                </figure>
                                                                                <span class="title">Joseph Doe</span>
                                                                                <span class="message">Lorem ipsum dolor sit.</span>
                                                                        </a>
                                                                </li>
                                                                <li>
                                                                        <a href="#" class="clearfix">
                                                                                <figure class="image">
                                                                                        <img src="assets/images/!sample-user.jpg" alt="Joseph Junior" class="img-circle" />
                                                                                </figure>
                                                                                <span class="title">Joseph Junior</span>
                                                                                <span class="message truncate">Truncated message. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet lacinia orci. Proin vestibulum eget risus non luctus. Nunc cursus lacinia lacinia. Nulla molestie malesuada est ac tincidunt. Quisque eget convallis diam, nec venenatis risus. Vestibulum blandit faucibus est et malesuada. Sed interdum cursus dui nec venenatis. Pellentesque non nisi lobortis, rutrum eros ut, convallis nisi. Sed tellus turpis, dignissim sit amet tristique quis, pretium id est. Sed aliquam diam diam, sit amet faucibus tellus ultricies eu. Aliquam lacinia nibh a metus bibendum, eu commodo eros commodo. Sed commodo molestie elit, a molestie lacus porttitor id. Donec facilisis varius sapien, ac fringilla velit porttitor et. Nam tincidunt gravida dui, sed pharetra odio pharetra nec. Duis consectetur venenatis pharetra. Vestibulum egestas nisi quis elementum elementum.</span>
                                                                        </a>
                                                                </li>
                                                                <li>
                                                                        <a href="#" class="clearfix">
                                                                                <figure class="image">
                                                                                        <img src="assets/images/!sample-user.jpg" alt="Joe Junior" class="img-circle" />
                                                                                </figure>
                                                                                <span class="title">Joe Junior</span>
                                                                                <span class="message">Lorem ipsum dolor sit.</span>
                                                                        </a>
                                                                </li>
                                                                <li>
                                                                        <a href="#" class="clearfix">
                                                                                <figure class="image">
                                                                                        <img src="assets/images/!sample-user.jpg" alt="Joseph Junior" class="img-circle" />
                                                                                </figure>
                                                                                <span class="title">Joseph Junior</span>
                                                                                <span class="message">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet lacinia orci. Proin vestibulum eget risus non luctus. Nunc cursus lacinia lacinia. Nulla molestie malesuada est ac tincidunt. Quisque eget convallis diam.</span>
                                                                        </a>
                                                                </li>
                                                        </ul>

                                                        <hr />

                                                        <div class="text-right">
                                                                <a href="#" class="view-more">View All</a>
                                                        </div>
                                                </div>
                                        </div>
                                </li>
                                <li>
                                        <a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
                                                <i class="fa fa-bell"></i>
                                                <span class="badge">3</span>
                                        </a>

                                        <div class="dropdown-menu notification-menu">
                                                <div class="notification-title">
                                                        <span class="pull-right label label-default">3</span>
                                                        Alerts
                                                </div>

                                                <div class="content">
                                                        <ul>
                                                                <li>
                                                                        <a href="#" class="clearfix">
                                                                                <div class="image">
                                                                                        <i class="fa fa-thumbs-down bg-danger"></i>
                                                                                </div>
                                                                                <span class="title">Server is Down!</span>
                                                                                <span class="message">Just now</span>
                                                                        </a>
                                                                </li>
                                                                <li>
                                                                        <a href="#" class="clearfix">
                                                                                <div class="image">
                                                                                        <i class="fa fa-lock bg-warning"></i>
                                                                                </div>
                                                                                <span class="title">User Locked</span>
                                                                                <span class="message">15 minutes ago</span>
                                                                        </a>
                                                                </li>
                                                                <li>
                                                                        <a href="#" class="clearfix">
                                                                                <div class="image">
                                                                                        <i class="fa fa-signal bg-success"></i>
                                                                                </div>
                                                                                <span class="title">Connection Restaured</span>
                                                                                <span class="message">10/10/2014</span>
                                                                        </a>
                                                                </li>
                                                        </ul>

                                                        <hr />

                                                        <div class="text-right">
                                                                <a href="#" class="view-more">View All</a>
                                                        </div>
                                                </div>
                                        </div>
                                </li>
                        </ul>

                        <span class="separator"></span>

                        <div id="userbox" class="userbox">
                                <a href="#" data-toggle="dropdown">
                                        <figure class="profile-picture">
                                                <img src="assets/images/!logged-user.jpg" alt="Joseph Doe" class="img-circle" data-lock-picture="assets/images/!logged-user.jpg" />
                                        </figure>
                                        <div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
                                                <span class="name">John Doe Junior</span>
                                                <span class="role">administrator</span>
                                        </div>

                                        <i class="fa custom-caret"></i>
                                </a>

                                <div class="dropdown-menu">
                                        <ul class="list-unstyled">
                                                <li class="divider"></li>
                                                <li>
                                                        <a role="menuitem" tabindex="-1" href="pages-user-profile.html"><i class="fa fa-user"></i> My Profile</a>
                                                </li>
                                                <li>
                                                        <a role="menuitem" tabindex="-1" href="#" data-lock-screen="true"><i class="fa fa-lock"></i> Lock Screen</a>
                                                </li>
                                                <li>
                                                        <a role="menuitem" tabindex="-1" href="pages-signin.html"><i class="fa fa-power-off"></i> Logout</a>
                                                </li>
                                        </ul>
                                </div>
                        </div>
                </div>
                <!-- end: search & user box -->
        </header>
        <!-- end: header -->

        <div class="inner-wrapper">
                <!-- start: sidebar -->
                <aside id="sidebar-left" class="sidebar-left">

                        <div class="sidebar-header">
                                <div class="sidebar-title">
                                        Navigation
                                </div>
                                <div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
                                        <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
                                </div>
                        </div>

                        <div class="nano">
                                <div class="nano-content">
                                        <nav id="menu" class="nav-main" role="navigation">
                                                <ul class="nav nav-main">
                                                        <li>
                                                                <a href="index.html">
                                                                        <i class="fa fa-home" aria-hidden="true"></i>
                                                                        <span>Dashboard</span>
                                                                </a>
                                                        </li>
                                                        <li>
                                                                <a href="mailbox-folder.html">
                                                                        <span class="pull-right label label-primary">182</span>
                                                                        <i class="fa fa-envelope" aria-hidden="true"></i>
                                                                        <span>Mailbox</span>
                                                                </a>
                                                        </li>
                                                        <li class="nav-parent">
                                                                <a>
                                                                        <i class="fa fa-copy" aria-hidden="true"></i>
                                                                        <span>Pages</span>
                                                                </a>
                                                                <ul class="nav nav-children">
                                                                        <li>
                                                                                <a href="pages-signup.html">
                                                                                         Sign Up
                                                                                </a>
                                                                        </li>
                                                                        <li>
                                                                                <a href="pages-signin.html">
                                                                                         Sign In
                                                                                </a>
                                                                        </li>
                                                                        <li>
                                                                                <a href="pages-recover-password.html">
                                                                                         Recover Password
                                                                                </a>
                                                                        </li>
                                                                        <li>
                                                                                <a href="pages-lock-screen.html">
                                                                                         Locked Screen
                                                                                </a>
                                                                        </li>
                                                                        <li>
                                                                                <a href="pages-user-profile.html">
                                                                                         User Profile
                                                                                </a>
                                                                        </li>
                                                                        <li>
                                                                                <a href="pages-session-timeout.html">
                                                                                         Session Timeout
                                                                                </a>
                                                                        </li>
                                                                        <li>
                                                                                <a href="pages-calendar.html">
                                                                                         Calendar
                                                                                </a>
                                                                        </li>
                                                                        <li>
                                                                                <a href="pages-timeline.html">
                                                                                         Timeline
                                                                                </a>
                                                                        </li>
                                                                        <li>
                                                                                <a href="pages-media-gallery.html">
                                                                                         Media Gallery
                                                                                </a>
                                                                        </li>
                                                                        <li>
                                                                                <a href="pages-invoice.html">
                                                                                         Invoice
                                                                                </a>
                                                                        </li>
                                                                        <li>
                                                                                <a href="pages-blank.html">
                                                                                         Blank Page
                                                                                </a>
                                                                        </li>
                                                                        <li>
                                                                                <a href="pages-404.html">
                                                                                         404
                                                                                </a>
                                                                        </li>
                                                                        <li>
                                                                                <a href="pages-500.html">
                                                                                         500
                                                                                </a>
                                                                        </li>
                                                                        <li>
                                                                                <a href="pages-log-viewer.html">
                                                                                         Log Viewer
                                                                                </a>
                                                                        </li>
                                                                        <li>
                                                                                <a href="pages-search-results.html">
                                                                                         Search Results
                                                                                </a>
                                                                        </li>
                                                                </ul>
                                                        </li>
                                                        <li class="nav-parent">
                                                                <a>
                                                                        <i class="fa fa-tasks" aria-hidden="true"></i>
                                                                        <span>UI Elements</span>
                                                                </a>
                                                                <ul class="nav nav-children">
                                                                        <li>
                                                                                <a href="ui-elements-typography.html">
                                                                                         Typography
                                                                                </a>
                                                                        </li>
                                                                        <li class="nav-parent">
                                                                                <a>
                                                                                        Icons
                                                                                </a>
                                                                                <ul class="nav nav-children">
                                                                                        <li>
                                                                                                <a href="ui-elements-icons-elusive.html">
                                                                                                        Elusive
                                                                                                </a>
                                                                                        </li>
                                                                                        <li>
                                                                                                <a href="ui-elements-icons-font-awesome.html">
                                                                                                        Font Awesome
                                                                                                </a>
                                                                                        </li>
                                                                                        <li>
                                                                                                <a href="ui-elements-icons-glyphicons.html">
                                                                                                        Glyphicons
                                                                                                </a>
                                                                                        </li>
                                                                                        <li>
                                                                                                <a href="ui-elements-icons-line-icons.html">
                                                                                                        Line Icons
                                                                                                </a>
                                                                                        </li>
                                                                                        <li>
                                                                                                <a href="ui-elements-icons-meteocons.html">
                                                                                                        Meteocons
                                                                                                </a>
                                                                                        </li>
                                                                                </ul>
                                                                        </li>
                                                                        <li>
                                                                                <a href="ui-elements-tabs.html">
                                                                                         Tabs
                                                                                </a>
                                                                        </li>
                                                                        <li>
                                                                                <a href="ui-elements-panels.html">
                                                                                         Panels
                                                                                </a>
                                                                        </li>
                                                                        <li>
                                                                                <a href="ui-elements-widgets.html">
                                                                                         Widgets
                                                                                </a>
                                                                        </li>
                                                                        <li>
                                                                                <a href="ui-elements-portlets.html">
                                                                                         Portlets
                                                                                </a>
                                                                        </li>
                                                                        <li>
                                                                                <a href="ui-elements-buttons.html">
                                                                                         Buttons
                                                                                </a>
                                                                        </li>
                                                                        <li>
                                                                                <a href="ui-elements-alerts.html">
                                                                                         Alerts
                                                                                </a>
                                                                        </li>
                                                                        <li>
                                                                                <a href="ui-elements-notifications.html">
                                                                                         Notifications
                                                                                </a>
                                                                        </li>
                                                                        <li>
                                                                                <a href="ui-elements-modals.html">
                                                                                         Modals
                                                                                </a>
                                                                        </li>
                                                                        <li>
                                                                                <a href="ui-elements-lightbox.html">
                                                                                         Lightbox
                                                                                </a>
                                                                        </li>
                                                                        <li>
                                                                                <a href="ui-elements-progressbars.html">
                                                                                         Progress Bars
                                                                                </a>
                                                                        </li>
                                                                        <li>
                                                                                <a href="ui-elements-sliders.html">
                                                                                         Sliders
                                                                                </a>
                                                                        </li>
                                                                        <li>
                                                                                <a href="ui-elements-carousels.html">
                                                                                         Carousels
                                                                                </a>
                                                                        </li>
                                                                        <li>
                                                                                <a href="ui-elements-accordions.html">
                                                                                         Accordions
                                                                                </a>
                                                                        </li>
                                                                        <li>
                                                                                <a href="ui-elements-nestable.html">
                                                                                         Nestable
                                                                                </a>
                                                                        </li>
                                                                        <li>
                                                                                <a href="ui-elements-tree-view.html">
                                                                                         Tree View
                                                                                </a>
                                                                        </li>
                                                                        <li>
                                                                                <a href="ui-elements-scrollable.html">
                                                                                         Scrollable
                                                                                </a>
                                                                        </li>
                                                                        <li>
                                                                                <a href="ui-elements-grid-system.html">
                                                                                         Grid System
                                                                                </a>
                                                                        </li>
                                                                        <li>
                                                                                <a href="ui-elements-charts.html">
                                                                                         Charts
                                                                                </a>
                                                                        </li>
                                                                        <li class="nav-parent">
                                                                                <a>
                                                                                        Animations
                                                                                </a>
                                                                                <ul class="nav nav-children">
                                                                                        <li>
                                                                                                <a href="ui-elements-animations-appear.html">
                                                                                                        Appear
                                                                                                </a>
                                                                                        </li>
                                                                                        <li>
                                                                                                <a href="ui-elements-animations-hover.html">
                                                                                                        Hover
                                                                                                </a>
                                                                                        </li>
                                                                                </ul>
                                                                        </li>
                                                                        <li class="nav-parent">
                                                                                <a>
                                                                                        Loading
                                                                                </a>
                                                                                <ul class="nav nav-children">
                                                                                        <li>
                                                                                                <a href="ui-elements-loading-overlay.html">
                                                                                                        Overlay
                                                                                                </a>
                                                                                        </li>
                                                                                        <li>
                                                                                                <a href="ui-elements-loading-progress.html">
                                                                                                        Progress
                                                                                                </a>
                                                                                        </li>
                                                                                </ul>
                                                                        </li>
                                                                        <li>
                                                                                <a href="ui-elements-extra.html">
                                                                                         Extra
                                                                                </a>
                                                                        </li>
                                                                </ul>
                                                        </li>
                                                        <li class="nav-parent">
                                                                <a>
                                                                        <i class="fa fa-list-alt" aria-hidden="true"></i>
                                                                        <span>Forms</span>
                                                                </a>
                                                                <ul class="nav nav-children">
                                                                        <li>
                                                                                <a href="forms-basic.html">
                                                                                         Basic
                                                                                </a>
                                                                        </li>
                                                                        <li>
                                                                                <a href="forms-advanced.html">
                                                                                         Advanced
                                                                                </a>
                                                                        </li>
                                                                        <li>
                                                                                <a href="forms-validation.html">
                                                                                         Validation
                                                                                </a>
                                                                        </li>
                                                                        <li>
                                                                                <a href="forms-layouts.html">
                                                                                         Layouts
                                                                                </a>
                                                                        </li>
                                                                        <li>
                                                                                <a href="forms-wizard.html">
                                                                                         Wizard
                                                                                </a>
                                                                        </li>
                                                                        <li>
                                                                                <a href="forms-code-editor.html">
                                                                                         Code Editor
                                                                                </a>
                                                                        </li>
                                                                </ul>
                                                        </li>
                                                        <li class="nav-parent nav-expanded nav-active">
                                                                <a>
                                                                        <i class="fa fa-table" aria-hidden="true"></i>
                                                                        <span>Tables</span>
                                                                </a>
                                                                <ul class="nav nav-children">
                                                                        <li>
                                                                                <a href="tables-basic.html">
                                                                                         Basic
                                                                                </a>
                                                                        </li>
                                                                        <li class="nav-active">
                                                                                <a href="tables-advanced.html">
                                                                                         Advanced
                                                                                </a>
                                                                        </li>
                                                                        <li>
                                                                                <a href="tables-responsive.html">
                                                                                         Responsive
                                                                                </a>
                                                                        </li>
                                                                        <li>
                                                                                <a href="tables-editable.html">
                                                                                         Editable
                                                                                </a>
                                                                        </li>
                                                                        <li>
                                                                                <a href="tables-ajax.html">
                                                                                         Ajax
                                                                                </a>
                                                                        </li>
                                                                        <li>
                                                                                <a href="tables-pricing.html">
                                                                                         Pricing
                                                                                </a>
                                                                        </li>
                                                                </ul>
                                                        </li>
                                                        <li class="nav-parent">
                                                                <a>
                                                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                                        <span>Maps</span>
                                                                </a>
                                                                <ul class="nav nav-children">
                                                                        <li>
                                                                                <a href="maps-google-maps.html">
                                                                                         Basic
                                                                                </a>
                                                                        </li>
                                                                        <li>
                                                                                <a href="maps-google-maps-builder.html">
                                                                                         Map Builder
                                                                                </a>
                                                                        </li>
                                                                        <li>
                                                                                <a href="maps-vector.html">
                                                                                         Vector
                                                                                </a>
                                                                        </li>
                                                                </ul>
                                                        </li>
                                                        <li class="nav-parent">
                                                                <a>
                                                                        <i class="fa fa-columns" aria-hidden="true"></i>
                                                                        <span>Layouts</span>
                                                                </a>
                                                                <ul class="nav nav-children">
                                                                        <li>
                                                                                <a href="layouts-default.html">
                                                                                         Default
                                                                                </a>
                                                                        </li>
                                                                        <li>
                                                                                <a href="layouts-boxed.html">
                                                                                         Boxed
                                                                                </a>
                                                                        </li>
                                                                        <li>
                                                                                <a href="layouts-menu-collapsed.html">
                                                                                         Menu Collapsed
                                                                                </a>
                                                                        </li>
                                                                        <li>
                                                                                <a href="layouts-scroll.html">
                                                                                         Scroll
                                                                                </a>
                                                                        </li>
                                                                </ul>
                                                        </li>
                                                        <li class="nav-parent">
                                                                <a>
                                                                        <i class="fa fa-asterisk" aria-hidden="true"></i>
                                                                        <span>Extra</span>
                                                                </a>
                                                                <ul class="nav nav-children">
                                                                        <li>
                                                                                <a href="extra-changelog.html">
                                                                                         Changelog
                                                                                </a>
                                                                        </li>
                                                                        <li>
                                                                                <a href="extra-ajax-made-easy.html">
                                                                                         Ajax Made Easy
                                                                                </a>
                                                                        </li>
                                                                </ul>
                                                        </li>
                                                        <li>
                                                                <a href="http://themeforest.net/item/porto-responsive-html5-template/4106987?ref=Okler" target="_blank">
                                                                        <i class="fa fa-external-link" aria-hidden="true"></i>
                                                                        <span>Front-End <em class="not-included">(Not Included)</em></span>
                                                                </a>
                                                        </li>
                                                        <li class="nav-parent">
                                                                <a>
                                                                        <i class="fa fa-align-left" aria-hidden="true"></i>
                                                                        <span>Menu Levels</span>
                                                                </a>
                                                                <ul class="nav nav-children">
                                                                        <li>
                                                                                <a>First Level</a>
                                                                        </li>
                                                                        <li class="nav-parent">
                                                                                <a>Second Level</a>
                                                                                <ul class="nav nav-children">
                                                                                        <li class="nav-parent">
                                                                                                <a>Third Level</a>
                                                                                                <ul class="nav nav-children">
                                                                                                        <li>
                                                                                                                <a>Third Level Link #1</a>
                                                                                                        </li>
                                                                                                        <li>
                                                                                                                <a>Third Level Link #2</a>
                                                                                                        </li>
                                                                                                </ul>
                                                                                        </li>
                                                                                        <li>
                                                                                                <a>Second Level Link #1</a>
                                                                                        </li>
                                                                                        <li>
                                                                                                <a>Second Level Link #2</a>
                                                                                        </li>
                                                                                </ul>
                                                                        </li>
                                                                </ul>
                                                        </li>
                                                </ul>
                                        </nav>

                                        <hr class="separator" />

                                        <div class="sidebar-widget widget-tasks">
                                                <div class="widget-header">
                                                        <h6>Projects</h6>
                                                        <div class="widget-toggle">+</div>
                                                </div>
                                                <div class="widget-content">
                                                        <ul class="list-unstyled m-none">
                                                                <li><a href="#">Porto HTML5 Template</a></li>
                                                                <li><a href="#">Tucson Template</a></li>
                                                                <li><a href="#">Porto Admin</a></li>
                                                        </ul>
                                                </div>
                                        </div>

                                        <hr class="separator" />

                                        <div class="sidebar-widget widget-stats">
                                                <div class="widget-header">
                                                        <h6>Company Stats</h6>
                                                        <div class="widget-toggle">+</div>
                                                </div>
                                                <div class="widget-content">
                                                        <ul>
                                                                <li>
                                                                        <span class="stats-title">Stat 1</span>
                                                                        <span class="stats-complete">85%</span>
                                                                        <div class="progress">
                                                                                <div class="progress-bar progress-bar-primary progress-without-number" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;">
                                                                                        <span class="sr-only">85% Complete</span>
                                                                                </div>
                                                                        </div>
                                                                </li>
                                                                <li>
                                                                        <span class="stats-title">Stat 2</span>
                                                                        <span class="stats-complete">70%</span>
                                                                        <div class="progress">
                                                                                <div class="progress-bar progress-bar-primary progress-without-number" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                                                                                        <span class="sr-only">70% Complete</span>
                                                                                </div>
                                                                        </div>
                                                                </li>
                                                                <li>
                                                                        <span class="stats-title">Stat 3</span>
                                                                        <span class="stats-complete">2%</span>
                                                                        <div class="progress">
                                                                                <div class="progress-bar progress-bar-primary progress-without-number" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100" style="width: 2%;">
                                                                                        <span class="sr-only">2% Complete</span>
                                                                                </div>
                                                                        </div>
                                                                </li>
                                                        </ul>
                                                </div>
                                        </div>
                                </div>

                        </div>

                </aside>
                <!-- end: sidebar -->

                <section role="main" class="content-body">
                        <header class="page-header">
                                <h2>Advanced Tables</h2>

                                <div class="right-wrapper pull-right">
                                        <ol class="breadcrumbs">
                                                <li>
                                                        <a href="index.html">
                                                                <i class="fa fa-home"></i>
                                                        </a>
                                                </li>
                                                <li><span>Tables</span></li>
                                                <li><span>Advanced</span></li>
                                        </ol>

                                        <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
                                </div>
                        </header>

                        <!-- start: page -->
                                <section class="panel">
                                        <header class="panel-heading">
                                                <div class="panel-actions">
                                                        <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                                                        <a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
                                                </div>

                                                <h2 class="panel-title">Basic</h2>
                                        </header>
                                        <div class="panel-body">
                                                <table class="table table-bordered table-striped mb-none" id="datatable-default">
                                                        <thead>
                                                                <tr>
                                                                        <th>Rendering engine</th>
                                                                        <th>Browser</th>
                                                                        <th>Platform(s)</th>
                                                                        <th class="hidden-phone">Engine version</th>
                                                                        <th class="hidden-phone">CSS grade</th>
                                                                </tr>
                                                        </thead>
                                                        <tbody>
                                                                <tr class="gradeX">
                                                                        <td>Trident</td>
                                                                        <td>Internet
                                                                                Explorer 4.0
                                                                        </td>
                                                                        <td>Win 95+</td>
                                                                        <td class="center hidden-phone">4</td>
                                                                        <td class="center hidden-phone">X</td>
                                                                </tr>
                                                                <tr class="gradeC">
                                                                        <td>Trident</td>
                                                                        <td>Internet
                                                                                Explorer 5.0
                                                                        </td>
                                                                        <td>Win 95+</td>
                                                                        <td class="center hidden-phone">5</td>
                                                                        <td class="center hidden-phone">C</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Trident</td>
                                                                        <td>Internet
                                                                                Explorer 5.5
                                                                        </td>
                                                                        <td>Win 95+</td>
                                                                        <td class="center hidden-phone">5.5</td>
                                                                        <td class="center hidden-phone">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Trident</td>
                                                                        <td>Internet
                                                                                Explorer 6
                                                                        </td>
                                                                        <td>Win 98+</td>
                                                                        <td class="center hidden-phone">6</td>
                                                                        <td class="center hidden-phone">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Trident</td>
                                                                        <td>Internet Explorer 7</td>
                                                                        <td>Win XP SP2+</td>
                                                                        <td class="center hidden-phone">7</td>
                                                                        <td class="center hidden-phone">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Trident</td>
                                                                        <td>AOL browser (AOL desktop)</td>
                                                                        <td>Win XP</td>
                                                                        <td class="center hidden-phone">6</td>
                                                                        <td class="center hidden-phone">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Gecko</td>
                                                                        <td>Firefox 1.0</td>
                                                                        <td>Win 98+ / OSX.2+</td>
                                                                        <td class="center hidden-phone">1.7</td>
                                                                        <td class="center hidden-phone">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Gecko</td>
                                                                        <td>Firefox 1.5</td>
                                                                        <td>Win 98+ / OSX.2+</td>
                                                                        <td class="center hidden-phone">1.8</td>
                                                                        <td class="center hidden-phone">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Gecko</td>
                                                                        <td>Firefox 2.0</td>
                                                                        <td>Win 98+ / OSX.2+</td>
                                                                        <td class="center hidden-phone">1.8</td>
                                                                        <td class="center hidden-phone">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Gecko</td>
                                                                        <td>Firefox 3.0</td>
                                                                        <td>Win 2k+ / OSX.3+</td>
                                                                        <td class="center hidden-phone">1.9</td>
                                                                        <td class="center hidden-phone">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Gecko</td>
                                                                        <td>Camino 1.0</td>
                                                                        <td>OSX.2+</td>
                                                                        <td class="center hidden-phone">1.8</td>
                                                                        <td class="center hidden-phone">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Gecko</td>
                                                                        <td>Camino 1.5</td>
                                                                        <td>OSX.3+</td>
                                                                        <td class="center hidden-phone">1.8</td>
                                                                        <td class="center hidden-phone">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Gecko</td>
                                                                        <td>Netscape 7.2</td>
                                                                        <td>Win 95+ / Mac OS 8.6-9.2</td>
                                                                        <td class="center hidden-phone">1.7</td>
                                                                        <td class="center hidden-phone">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Gecko</td>
                                                                        <td>Netscape Browser 8</td>
                                                                        <td>Win 98SE+</td>
                                                                        <td class="center hidden-phone">1.7</td>
                                                                        <td class="center hidden-phone">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Gecko</td>
                                                                        <td>Netscape Navigator 9</td>
                                                                        <td>Win 98+ / OSX.2+</td>
                                                                        <td class="center hidden-phone">1.8</td>
                                                                        <td class="center hidden-phone">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Gecko</td>
                                                                        <td>Mozilla 1.0</td>
                                                                        <td>Win 95+ / OSX.1+</td>
                                                                        <td class="center hidden-phone">1</td>
                                                                        <td class="center hidden-phone">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Gecko</td>
                                                                        <td>Mozilla 1.1</td>
                                                                        <td>Win 95+ / OSX.1+</td>
                                                                        <td class="center hidden-phone">1.1</td>
                                                                        <td class="center hidden-phone">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Gecko</td>
                                                                        <td>Mozilla 1.2</td>
                                                                        <td>Win 95+ / OSX.1+</td>
                                                                        <td class="center hidden-phone">1.2</td>
                                                                        <td class="center hidden-phone">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Gecko</td>
                                                                        <td>Mozilla 1.3</td>
                                                                        <td>Win 95+ / OSX.1+</td>
                                                                        <td class="center hidden-phone">1.3</td>
                                                                        <td class="center hidden-phone">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Gecko</td>
                                                                        <td>Mozilla 1.4</td>
                                                                        <td>Win 95+ / OSX.1+</td>
                                                                        <td class="center hidden-phone">1.4</td>
                                                                        <td class="center hidden-phone">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Gecko</td>
                                                                        <td>Mozilla 1.5</td>
                                                                        <td>Win 95+ / OSX.1+</td>
                                                                        <td class="center hidden-phone">1.5</td>
                                                                        <td class="center hidden-phone">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Gecko</td>
                                                                        <td>Mozilla 1.6</td>
                                                                        <td>Win 95+ / OSX.1+</td>
                                                                        <td class="center hidden-phone">1.6</td>
                                                                        <td class="center hidden-phone">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Gecko</td>
                                                                        <td>Mozilla 1.7</td>
                                                                        <td>Win 98+ / OSX.1+</td>
                                                                        <td class="center hidden-phone">1.7</td>
                                                                        <td class="center hidden-phone">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Gecko</td>
                                                                        <td>Mozilla 1.8</td>
                                                                        <td>Win 98+ / OSX.1+</td>
                                                                        <td class="center hidden-phone">1.8</td>
                                                                        <td class="center hidden-phone">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Gecko</td>
                                                                        <td>Seamonkey 1.1</td>
                                                                        <td>Win 98+ / OSX.2+</td>
                                                                        <td class="center hidden-phone">1.8</td>
                                                                        <td class="center hidden-phone">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Gecko</td>
                                                                        <td>Epiphany 2.20</td>
                                                                        <td>Gnome</td>
                                                                        <td class="center hidden-phone">1.8</td>
                                                                        <td class="center hidden-phone">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Webkit</td>
                                                                        <td>Safari 1.2</td>
                                                                        <td>OSX.3</td>
                                                                        <td class="center hidden-phone">125.5</td>
                                                                        <td class="center hidden-phone">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Webkit</td>
                                                                        <td>Safari 1.3</td>
                                                                        <td>OSX.3</td>
                                                                        <td class="center hidden-phone">312.8</td>
                                                                        <td class="center hidden-phone">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Webkit</td>
                                                                        <td>Safari 2.0</td>
                                                                        <td>OSX.4+</td>
                                                                        <td class="center hidden-phone">419.3</td>
                                                                        <td class="center hidden-phone">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Webkit</td>
                                                                        <td>Safari 3.0</td>
                                                                        <td>OSX.4+</td>
                                                                        <td class="center hidden-phone">522.1</td>
                                                                        <td class="center hidden-phone">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Webkit</td>
                                                                        <td>OmniWeb 5.5</td>
                                                                        <td>OSX.4+</td>
                                                                        <td class="center hidden-phone">420</td>
                                                                        <td class="center hidden-phone">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Webkit</td>
                                                                        <td>iPod Touch / iPhone</td>
                                                                        <td>iPod</td>
                                                                        <td class="center hidden-phone">420.1</td>
                                                                        <td class="center hidden-phone">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Webkit</td>
                                                                        <td>S60</td>
                                                                        <td>S60</td>
                                                                        <td class="center hidden-phone">413</td>
                                                                        <td class="center hidden-phone">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Presto</td>
                                                                        <td>Opera 7.0</td>
                                                                        <td>Win 95+ / OSX.1+</td>
                                                                        <td class="center hidden-phone">-</td>
                                                                        <td class="center hidden-phone">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Presto</td>
                                                                        <td>Opera 7.5</td>
                                                                        <td>Win 95+ / OSX.2+</td>
                                                                        <td class="center hidden-phone">-</td>
                                                                        <td class="center hidden-phone">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Presto</td>
                                                                        <td>Opera 8.0</td>
                                                                        <td>Win 95+ / OSX.2+</td>
                                                                        <td class="center hidden-phone">-</td>
                                                                        <td class="center hidden-phone">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Presto</td>
                                                                        <td>Opera 8.5</td>
                                                                        <td>Win 95+ / OSX.2+</td>
                                                                        <td class="center hidden-phone">-</td>
                                                                        <td class="center hidden-phone">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Presto</td>
                                                                        <td>Opera 9.0</td>
                                                                        <td>Win 95+ / OSX.3+</td>
                                                                        <td class="center hidden-phone">-</td>
                                                                        <td class="center hidden-phone">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Presto</td>
                                                                        <td>Opera 9.2</td>
                                                                        <td>Win 88+ / OSX.3+</td>
                                                                        <td class="center hidden-phone">-</td>
                                                                        <td class="center hidden-phone">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Presto</td>
                                                                        <td>Opera 9.5</td>
                                                                        <td>Win 88+ / OSX.3+</td>
                                                                        <td class="center hidden-phone">-</td>
                                                                        <td class="center hidden-phone">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Presto</td>
                                                                        <td>Opera for Wii</td>
                                                                        <td>Wii</td>
                                                                        <td class="center hidden-phone">-</td>
                                                                        <td class="center hidden-phone">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Presto</td>
                                                                        <td>Nokia N800</td>
                                                                        <td>N800</td>
                                                                        <td class="center hidden-phone">-</td>
                                                                        <td class="center hidden-phone">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Presto</td>
                                                                        <td>Nintendo DS browser</td>
                                                                        <td>Nintendo DS</td>
                                                                        <td class="center hidden-phone">8.5</td>
                                                                        <td class="center hidden-phone">C/A<sup>1</sup></td>
                                                                </tr>
                                                                <tr class="gradeC">
                                                                        <td>KHTML</td>
                                                                        <td>Konqureror 3.1</td>
                                                                        <td>KDE 3.1</td>
                                                                        <td class="center hidden-phone">3.1</td>
                                                                        <td class="center hidden-phone">C</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>KHTML</td>
                                                                        <td>Konqureror 3.3</td>
                                                                        <td>KDE 3.3</td>
                                                                        <td class="center hidden-phone">3.3</td>
                                                                        <td class="center hidden-phone">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>KHTML</td>
                                                                        <td>Konqureror 3.5</td>
                                                                        <td>KDE 3.5</td>
                                                                        <td class="center hidden-phone">3.5</td>
                                                                        <td class="center hidden-phone">A</td>
                                                                </tr>
                                                                <tr class="gradeX">
                                                                        <td>Tasman</td>
                                                                        <td>Internet Explorer 4.5</td>
                                                                        <td>Mac OS 8-9</td>
                                                                        <td class="center hidden-phone">-</td>
                                                                        <td class="center hidden-phone">X</td>
                                                                </tr>
                                                                <tr class="gradeC">
                                                                        <td>Tasman</td>
                                                                        <td>Internet Explorer 5.1</td>
                                                                        <td>Mac OS 7.6-9</td>
                                                                        <td class="center hidden-phone">1</td>
                                                                        <td class="center hidden-phone">C</td>
                                                                </tr>
                                                                <tr class="gradeC">
                                                                        <td>Tasman</td>
                                                                        <td>Internet Explorer 5.2</td>
                                                                        <td>Mac OS 8-X</td>
                                                                        <td class="center hidden-phone">1</td>
                                                                        <td class="center hidden-phone">C</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Misc</td>
                                                                        <td>NetFront 3.1</td>
                                                                        <td>Embedded devices</td>
                                                                        <td class="center hidden-phone">-</td>
                                                                        <td class="center hidden-phone">C</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Misc</td>
                                                                        <td>NetFront 3.4</td>
                                                                        <td>Embedded devices</td>
                                                                        <td class="center hidden-phone">-</td>
                                                                        <td class="center hidden-phone">A</td>
                                                                </tr>
                                                                <tr class="gradeX">
                                                                        <td>Misc</td>
                                                                        <td>Dillo 0.8</td>
                                                                        <td>Embedded devices</td>
                                                                        <td class="center hidden-phone">-</td>
                                                                        <td class="center hidden-phone">X</td>
                                                                </tr>
                                                                <tr class="gradeX">
                                                                        <td>Misc</td>
                                                                        <td>Links</td>
                                                                        <td>Text only</td>
                                                                        <td class="center hidden-phone">-</td>
                                                                        <td class="center hidden-phone">X</td>
                                                                </tr>
                                                                <tr class="gradeX">
                                                                        <td>Misc</td>
                                                                        <td>Lynx</td>
                                                                        <td>Text only</td>
                                                                        <td class="center hidden-phone">-</td>
                                                                        <td class="center hidden-phone">X</td>
                                                                </tr>
                                                                <tr class="gradeC">
                                                                        <td>Misc</td>
                                                                        <td>IE Mobile</td>
                                                                        <td>Windows Mobile 6</td>
                                                                        <td class="center hidden-phone">-</td>
                                                                        <td class="center hidden-phone">C</td>
                                                                </tr>
                                                                <tr class="gradeC">
                                                                        <td>Misc</td>
                                                                        <td>PSP browser</td>
                                                                        <td>PSP</td>
                                                                        <td class="center hidden-phone">-</td>
                                                                        <td class="center hidden-phone">C</td>
                                                                </tr>
                                                                <tr class="gradeU">
                                                                        <td>Other browsers</td>
                                                                        <td>All others</td>
                                                                        <td>-</td>
                                                                        <td class="center hidden-phone">-</td>
                                                                        <td class="center hidden-phone">U</td>
                                                                </tr>
                                                        </tbody>
                                                </table>
                                        </div>
                                </section>

                                <section class="panel">
                                        <header class="panel-heading">
                                                <div class="panel-actions">
                                                        <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                                                        <a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
                                                </div>

                                                <h2 class="panel-title">Basic with Table Tools</h2>
                                        </header>
                                        <div class="panel-body">
                                                <table class="table table-bordered table-striped mb-none" id="datatable-tabletools" data-swf-path="assets/vendor/jquery-datatables/extras/TableTools/swf/copy_csv_xls_pdf.swf">
                                                        <thead>
                                                                <tr>
                                                                        <th>Rendering engine</th>
                                                                        <th>Browser</th>
                                                                        <th>Platform(s)</th>
                                                                        <th class="hidden-phone">Engine version</th>
                                                                        <th class="hidden-phone">CSS grade</th>
                                                                </tr>
                                                        </thead>
                                                        <tbody>
                                                                <tr class="gradeX">
                                                                        <td>Trident</td>
                                                                        <td>Internet
                                                                                Explorer 4.0
                                                                        </td>
                                                                        <td>Win 95+</td>
                                                                        <td class="center hidden-phone">4</td>
                                                                        <td class="center hidden-phone">X</td>
                                                                </tr>
                                                                <tr class="gradeC">
                                                                        <td>Trident</td>
                                                                        <td>Internet
                                                                                Explorer 5.0
                                                                        </td>
                                                                        <td>Win 95+</td>
                                                                        <td class="center hidden-phone">5</td>
                                                                        <td class="center hidden-phone">C</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Trident</td>
                                                                        <td>Internet
                                                                                Explorer 5.5
                                                                        </td>
                                                                        <td>Win 95+</td>
                                                                        <td class="center hidden-phone">5.5</td>
                                                                        <td class="center hidden-phone">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Trident</td>
                                                                        <td>Internet
                                                                                Explorer 6
                                                                        </td>
                                                                        <td>Win 98+</td>
                                                                        <td class="center hidden-phone">6</td>
                                                                        <td class="center hidden-phone">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Trident</td>
                                                                        <td>Internet Explorer 7</td>
                                                                        <td>Win XP SP2+</td>
                                                                        <td class="center hidden-phone">7</td>
                                                                        <td class="center hidden-phone">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Trident</td>
                                                                        <td>AOL browser (AOL desktop)</td>
                                                                        <td>Win XP</td>
                                                                        <td class="center hidden-phone">6</td>
                                                                        <td class="center hidden-phone">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Gecko</td>
                                                                        <td>Firefox 1.0</td>
                                                                        <td>Win 98+ / OSX.2+</td>
                                                                        <td class="center hidden-phone">1.7</td>
                                                                        <td class="center hidden-phone">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Gecko</td>
                                                                        <td>Firefox 1.5</td>
                                                                        <td>Win 98+ / OSX.2+</td>
                                                                        <td class="center hidden-phone">1.8</td>
                                                                        <td class="center hidden-phone">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Gecko</td>
                                                                        <td>Firefox 2.0</td>
                                                                        <td>Win 98+ / OSX.2+</td>
                                                                        <td class="center hidden-phone">1.8</td>
                                                                        <td class="center hidden-phone">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Gecko</td>
                                                                        <td>Firefox 3.0</td>
                                                                        <td>Win 2k+ / OSX.3+</td>
                                                                        <td class="center hidden-phone">1.9</td>
                                                                        <td class="center hidden-phone">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Gecko</td>
                                                                        <td>Camino 1.0</td>
                                                                        <td>OSX.2+</td>
                                                                        <td class="center hidden-phone">1.8</td>
                                                                        <td class="center hidden-phone">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Gecko</td>
                                                                        <td>Camino 1.5</td>
                                                                        <td>OSX.3+</td>
                                                                        <td class="center hidden-phone">1.8</td>
                                                                        <td class="center hidden-phone">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Gecko</td>
                                                                        <td>Netscape 7.2</td>
                                                                        <td>Win 95+ / Mac OS 8.6-9.2</td>
                                                                        <td class="center hidden-phone">1.7</td>
                                                                        <td class="center hidden-phone">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Gecko</td>
                                                                        <td>Netscape Browser 8</td>
                                                                        <td>Win 98SE+</td>
                                                                        <td class="center hidden-phone">1.7</td>
                                                                        <td class="center hidden-phone">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Gecko</td>
                                                                        <td>Netscape Navigator 9</td>
                                                                        <td>Win 98+ / OSX.2+</td>
                                                                        <td class="center hidden-phone">1.8</td>
                                                                        <td class="center hidden-phone">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Gecko</td>
                                                                        <td>Mozilla 1.0</td>
                                                                        <td>Win 95+ / OSX.1+</td>
                                                                        <td class="center hidden-phone">1</td>
                                                                        <td class="center hidden-phone">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Gecko</td>
                                                                        <td>Mozilla 1.1</td>
                                                                        <td>Win 95+ / OSX.1+</td>
                                                                        <td class="center hidden-phone">1.1</td>
                                                                        <td class="center hidden-phone">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Gecko</td>
                                                                        <td>Mozilla 1.2</td>
                                                                        <td>Win 95+ / OSX.1+</td>
                                                                        <td class="center hidden-phone">1.2</td>
                                                                        <td class="center hidden-phone">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Gecko</td>
                                                                        <td>Mozilla 1.3</td>
                                                                        <td>Win 95+ / OSX.1+</td>
                                                                        <td class="center hidden-phone">1.3</td>
                                                                        <td class="center hidden-phone">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Gecko</td>
                                                                        <td>Mozilla 1.4</td>
                                                                        <td>Win 95+ / OSX.1+</td>
                                                                        <td class="center hidden-phone">1.4</td>
                                                                        <td class="center hidden-phone">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Gecko</td>
                                                                        <td>Mozilla 1.5</td>
                                                                        <td>Win 95+ / OSX.1+</td>
                                                                        <td class="center hidden-phone">1.5</td>
                                                                        <td class="center hidden-phone">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Gecko</td>
                                                                        <td>Mozilla 1.6</td>
                                                                        <td>Win 95+ / OSX.1+</td>
                                                                        <td class="center hidden-phone">1.6</td>
                                                                        <td class="center hidden-phone">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Gecko</td>
                                                                        <td>Mozilla 1.7</td>
                                                                        <td>Win 98+ / OSX.1+</td>
                                                                        <td class="center hidden-phone">1.7</td>
                                                                        <td class="center hidden-phone">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Gecko</td>
                                                                        <td>Mozilla 1.8</td>
                                                                        <td>Win 98+ / OSX.1+</td>
                                                                        <td class="center hidden-phone">1.8</td>
                                                                        <td class="center hidden-phone">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Gecko</td>
                                                                        <td>Seamonkey 1.1</td>
                                                                        <td>Win 98+ / OSX.2+</td>
                                                                        <td class="center hidden-phone">1.8</td>
                                                                        <td class="center hidden-phone">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Gecko</td>
                                                                        <td>Epiphany 2.20</td>
                                                                        <td>Gnome</td>
                                                                        <td class="center hidden-phone">1.8</td>
                                                                        <td class="center hidden-phone">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Webkit</td>
                                                                        <td>Safari 1.2</td>
                                                                        <td>OSX.3</td>
                                                                        <td class="center hidden-phone">125.5</td>
                                                                        <td class="center hidden-phone">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Webkit</td>
                                                                        <td>Safari 1.3</td>
                                                                        <td>OSX.3</td>
                                                                        <td class="center hidden-phone">312.8</td>
                                                                        <td class="center hidden-phone">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Webkit</td>
                                                                        <td>Safari 2.0</td>
                                                                        <td>OSX.4+</td>
                                                                        <td class="center hidden-phone">419.3</td>
                                                                        <td class="center hidden-phone">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Webkit</td>
                                                                        <td>Safari 3.0</td>
                                                                        <td>OSX.4+</td>
                                                                        <td class="center hidden-phone">522.1</td>
                                                                        <td class="center hidden-phone">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Webkit</td>
                                                                        <td>OmniWeb 5.5</td>
                                                                        <td>OSX.4+</td>
                                                                        <td class="center hidden-phone">420</td>
                                                                        <td class="center hidden-phone">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Webkit</td>
                                                                        <td>iPod Touch / iPhone</td>
                                                                        <td>iPod</td>
                                                                        <td class="center hidden-phone">420.1</td>
                                                                        <td class="center hidden-phone">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Webkit</td>
                                                                        <td>S60</td>
                                                                        <td>S60</td>
                                                                        <td class="center hidden-phone">413</td>
                                                                        <td class="center hidden-phone">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Presto</td>
                                                                        <td>Opera 7.0</td>
                                                                        <td>Win 95+ / OSX.1+</td>
                                                                        <td class="center hidden-phone">-</td>
                                                                        <td class="center hidden-phone">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Presto</td>
                                                                        <td>Opera 7.5</td>
                                                                        <td>Win 95+ / OSX.2+</td>
                                                                        <td class="center hidden-phone">-</td>
                                                                        <td class="center hidden-phone">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Presto</td>
                                                                        <td>Opera 8.0</td>
                                                                        <td>Win 95+ / OSX.2+</td>
                                                                        <td class="center hidden-phone">-</td>
                                                                        <td class="center hidden-phone">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Presto</td>
                                                                        <td>Opera 8.5</td>
                                                                        <td>Win 95+ / OSX.2+</td>
                                                                        <td class="center hidden-phone">-</td>
                                                                        <td class="center hidden-phone">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Presto</td>
                                                                        <td>Opera 9.0</td>
                                                                        <td>Win 95+ / OSX.3+</td>
                                                                        <td class="center hidden-phone">-</td>
                                                                        <td class="center hidden-phone">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Presto</td>
                                                                        <td>Opera 9.2</td>
                                                                        <td>Win 88+ / OSX.3+</td>
                                                                        <td class="center hidden-phone">-</td>
                                                                        <td class="center hidden-phone">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Presto</td>
                                                                        <td>Opera 9.5</td>
                                                                        <td>Win 88+ / OSX.3+</td>
                                                                        <td class="center hidden-phone">-</td>
                                                                        <td class="center hidden-phone">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Presto</td>
                                                                        <td>Opera for Wii</td>
                                                                        <td>Wii</td>
                                                                        <td class="center hidden-phone">-</td>
                                                                        <td class="center hidden-phone">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Presto</td>
                                                                        <td>Nokia N800</td>
                                                                        <td>N800</td>
                                                                        <td class="center hidden-phone">-</td>
                                                                        <td class="center hidden-phone">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Presto</td>
                                                                        <td>Nintendo DS browser</td>
                                                                        <td>Nintendo DS</td>
                                                                        <td class="center hidden-phone">8.5</td>
                                                                        <td class="center hidden-phone">C/A<sup>1</sup></td>
                                                                </tr>
                                                                <tr class="gradeC">
                                                                        <td>KHTML</td>
                                                                        <td>Konqureror 3.1</td>
                                                                        <td>KDE 3.1</td>
                                                                        <td class="center hidden-phone">3.1</td>
                                                                        <td class="center hidden-phone">C</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>KHTML</td>
                                                                        <td>Konqureror 3.3</td>
                                                                        <td>KDE 3.3</td>
                                                                        <td class="center hidden-phone">3.3</td>
                                                                        <td class="center hidden-phone">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>KHTML</td>
                                                                        <td>Konqureror 3.5</td>
                                                                        <td>KDE 3.5</td>
                                                                        <td class="center hidden-phone">3.5</td>
                                                                        <td class="center hidden-phone">A</td>
                                                                </tr>
                                                                <tr class="gradeX">
                                                                        <td>Tasman</td>
                                                                        <td>Internet Explorer 4.5</td>
                                                                        <td>Mac OS 8-9</td>
                                                                        <td class="center hidden-phone">-</td>
                                                                        <td class="center hidden-phone">X</td>
                                                                </tr>
                                                                <tr class="gradeC">
                                                                        <td>Tasman</td>
                                                                        <td>Internet Explorer 5.1</td>
                                                                        <td>Mac OS 7.6-9</td>
                                                                        <td class="center hidden-phone">1</td>
                                                                        <td class="center hidden-phone">C</td>
                                                                </tr>
                                                                <tr class="gradeC">
                                                                        <td>Tasman</td>
                                                                        <td>Internet Explorer 5.2</td>
                                                                        <td>Mac OS 8-X</td>
                                                                        <td class="center hidden-phone">1</td>
                                                                        <td class="center hidden-phone">C</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Misc</td>
                                                                        <td>NetFront 3.1</td>
                                                                        <td>Embedded devices</td>
                                                                        <td class="center hidden-phone">-</td>
                                                                        <td class="center hidden-phone">C</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Misc</td>
                                                                        <td>NetFront 3.4</td>
                                                                        <td>Embedded devices</td>
                                                                        <td class="center hidden-phone">-</td>
                                                                        <td class="center hidden-phone">A</td>
                                                                </tr>
                                                                <tr class="gradeX">
                                                                        <td>Misc</td>
                                                                        <td>Dillo 0.8</td>
                                                                        <td>Embedded devices</td>
                                                                        <td class="center hidden-phone">-</td>
                                                                        <td class="center hidden-phone">X</td>
                                                                </tr>
                                                                <tr class="gradeX">
                                                                        <td>Misc</td>
                                                                        <td>Links</td>
                                                                        <td>Text only</td>
                                                                        <td class="center hidden-phone">-</td>
                                                                        <td class="center hidden-phone">X</td>
                                                                </tr>
                                                                <tr class="gradeX">
                                                                        <td>Misc</td>
                                                                        <td>Lynx</td>
                                                                        <td>Text only</td>
                                                                        <td class="center hidden-phone">-</td>
                                                                        <td class="center hidden-phone">X</td>
                                                                </tr>
                                                                <tr class="gradeC">
                                                                        <td>Misc</td>
                                                                        <td>IE Mobile</td>
                                                                        <td>Windows Mobile 6</td>
                                                                        <td class="center hidden-phone">-</td>
                                                                        <td class="center hidden-phone">C</td>
                                                                </tr>
                                                                <tr class="gradeC">
                                                                        <td>Misc</td>
                                                                        <td>PSP browser</td>
                                                                        <td>PSP</td>
                                                                        <td class="center hidden-phone">-</td>
                                                                        <td class="center hidden-phone">C</td>
                                                                </tr>
                                                                <tr class="gradeU">
                                                                        <td>Other browsers</td>
                                                                        <td>All others</td>
                                                                        <td>-</td>
                                                                        <td class="center hidden-phone">-</td>
                                                                        <td class="center hidden-phone">U</td>
                                                                </tr>
                                                        </tbody>
                                                </table>
                                        </div>
                                </section>

                                <section class="panel">
                                        <header class="panel-heading">
                                                <div class="panel-actions">
                                                        <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                                                        <a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
                                                </div>

                                                <h2 class="panel-title">Rows with Details</h2>
                                        </header>
                                        <div class="panel-body">
                                                <table class="table table-bordered table-striped mb-none" id="datatable-details">
                                                        <thead>
                                                                <tr>
                                                                        <th>Rendering engine</th>
                                                                        <th>Browser</th>
                                                                        <th>Platform(s)</th>
                                                                        <th>Engine version</th>
                                                                        <th>CSS grade</th>
                                                                </tr>
                                                        </thead>
                                                        <tbody>
                                                                <tr class="gradeX">
                                                                        <td>Trident</td>
                                                                        <td>Internet
                                                                                 Explorer 4.0</td>
                                                                        <td>Win 95+</td>
                                                                        <td class="center">4</td>
                                                                        <td class="center">X</td>
                                                                </tr>
                                                                <tr class="gradeC">
                                                                        <td>Trident</td>
                                                                        <td>Internet
                                                                                 Explorer 5.0</td>
                                                                        <td>Win 95+</td>
                                                                        <td class="center">5</td>
                                                                        <td class="center">C</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Trident</td>
                                                                        <td>Internet
                                                                                 Explorer 5.5</td>
                                                                        <td>Win 95+</td>
                                                                        <td class="center">5.5</td>
                                                                        <td class="center">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Trident</td>
                                                                        <td>Internet
                                                                                 Explorer 6</td>
                                                                        <td>Win 98+</td>
                                                                        <td class="center">6</td>
                                                                        <td class="center">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Trident</td>
                                                                        <td>Internet Explorer 7</td>
                                                                        <td>Win XP SP2+</td>
                                                                        <td class="center">7</td>
                                                                        <td class="center">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Trident</td>
                                                                        <td>AOL browser (AOL desktop)</td>
                                                                        <td>Win XP</td>
                                                                        <td class="center">6</td>
                                                                        <td class="center">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Gecko</td>
                                                                        <td>Firefox 1.0</td>
                                                                        <td>Win 98+ / OSX.2+</td>
                                                                        <td class="center">1.7</td>
                                                                        <td class="center">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Gecko</td>
                                                                        <td>Firefox 1.5</td>
                                                                        <td>Win 98+ / OSX.2+</td>
                                                                        <td class="center">1.8</td>
                                                                        <td class="center">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Gecko</td>
                                                                        <td>Firefox 2.0</td>
                                                                        <td>Win 98+ / OSX.2+</td>
                                                                        <td class="center">1.8</td>
                                                                        <td class="center">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Gecko</td>
                                                                        <td>Firefox 3.0</td>
                                                                        <td>Win 2k+ / OSX.3+</td>
                                                                        <td class="center">1.9</td>
                                                                        <td class="center">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Gecko</td>
                                                                        <td>Camino 1.0</td>
                                                                        <td>OSX.2+</td>
                                                                        <td class="center">1.8</td>
                                                                        <td class="center">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Gecko</td>
                                                                        <td>Camino 1.5</td>
                                                                        <td>OSX.3+</td>
                                                                        <td class="center">1.8</td>
                                                                        <td class="center">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Gecko</td>
                                                                        <td>Netscape 7.2</td>
                                                                        <td>Win 95+ / Mac OS 8.6-9.2</td>
                                                                        <td class="center">1.7</td>
                                                                        <td class="center">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Gecko</td>
                                                                        <td>Netscape Browser 8</td>
                                                                        <td>Win 98SE+</td>
                                                                        <td class="center">1.7</td>
                                                                        <td class="center">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Gecko</td>
                                                                        <td>Netscape Navigator 9</td>
                                                                        <td>Win 98+ / OSX.2+</td>
                                                                        <td class="center">1.8</td>
                                                                        <td class="center">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Gecko</td>
                                                                        <td>Mozilla 1.0</td>
                                                                        <td>Win 95+ / OSX.1+</td>
                                                                        <td class="center">1</td>
                                                                        <td class="center">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Gecko</td>
                                                                        <td>Mozilla 1.1</td>
                                                                        <td>Win 95+ / OSX.1+</td>
                                                                        <td class="center">1.1</td>
                                                                        <td class="center">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Gecko</td>
                                                                        <td>Mozilla 1.2</td>
                                                                        <td>Win 95+ / OSX.1+</td>
                                                                        <td class="center">1.2</td>
                                                                        <td class="center">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Gecko</td>
                                                                        <td>Mozilla 1.3</td>
                                                                        <td>Win 95+ / OSX.1+</td>
                                                                        <td class="center">1.3</td>
                                                                        <td class="center">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Gecko</td>
                                                                        <td>Mozilla 1.4</td>
                                                                        <td>Win 95+ / OSX.1+</td>
                                                                        <td class="center">1.4</td>
                                                                        <td class="center">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Gecko</td>
                                                                        <td>Mozilla 1.5</td>
                                                                        <td>Win 95+ / OSX.1+</td>
                                                                        <td class="center">1.5</td>
                                                                        <td class="center">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Gecko</td>
                                                                        <td>Mozilla 1.6</td>
                                                                        <td>Win 95+ / OSX.1+</td>
                                                                        <td class="center">1.6</td>
                                                                        <td class="center">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Gecko</td>
                                                                        <td>Mozilla 1.7</td>
                                                                        <td>Win 98+ / OSX.1+</td>
                                                                        <td class="center">1.7</td>
                                                                        <td class="center">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Gecko</td>
                                                                        <td>Mozilla 1.8</td>
                                                                        <td>Win 98+ / OSX.1+</td>
                                                                        <td class="center">1.8</td>
                                                                        <td class="center">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Gecko</td>
                                                                        <td>Seamonkey 1.1</td>
                                                                        <td>Win 98+ / OSX.2+</td>
                                                                        <td class="center">1.8</td>
                                                                        <td class="center">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Gecko</td>
                                                                        <td>Epiphany 2.20</td>
                                                                        <td>Gnome</td>
                                                                        <td class="center">1.8</td>
                                                                        <td class="center">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Webkit</td>
                                                                        <td>Safari 1.2</td>
                                                                        <td>OSX.3</td>
                                                                        <td class="center">125.5</td>
                                                                        <td class="center">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Webkit</td>
                                                                        <td>Safari 1.3</td>
                                                                        <td>OSX.3</td>
                                                                        <td class="center">312.8</td>
                                                                        <td class="center">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Webkit</td>
                                                                        <td>Safari 2.0</td>
                                                                        <td>OSX.4+</td>
                                                                        <td class="center">419.3</td>
                                                                        <td class="center">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Webkit</td>
                                                                        <td>Safari 3.0</td>
                                                                        <td>OSX.4+</td>
                                                                        <td class="center">522.1</td>
                                                                        <td class="center">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Webkit</td>
                                                                        <td>OmniWeb 5.5</td>
                                                                        <td>OSX.4+</td>
                                                                        <td class="center">420</td>
                                                                        <td class="center">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Webkit</td>
                                                                        <td>iPod Touch / iPhone</td>
                                                                        <td>iPod</td>
                                                                        <td class="center">420.1</td>
                                                                        <td class="center">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Webkit</td>
                                                                        <td>S60</td>
                                                                        <td>S60</td>
                                                                        <td class="center">413</td>
                                                                        <td class="center">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Presto</td>
                                                                        <td>Opera 7.0</td>
                                                                        <td>Win 95+ / OSX.1+</td>
                                                                        <td class="center">-</td>
                                                                        <td class="center">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Presto</td>
                                                                        <td>Opera 7.5</td>
                                                                        <td>Win 95+ / OSX.2+</td>
                                                                        <td class="center">-</td>
                                                                        <td class="center">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Presto</td>
                                                                        <td>Opera 8.0</td>
                                                                        <td>Win 95+ / OSX.2+</td>
                                                                        <td class="center">-</td>
                                                                        <td class="center">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Presto</td>
                                                                        <td>Opera 8.5</td>
                                                                        <td>Win 95+ / OSX.2+</td>
                                                                        <td class="center">-</td>
                                                                        <td class="center">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Presto</td>
                                                                        <td>Opera 9.0</td>
                                                                        <td>Win 95+ / OSX.3+</td>
                                                                        <td class="center">-</td>
                                                                        <td class="center">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Presto</td>
                                                                        <td>Opera 9.2</td>
                                                                        <td>Win 88+ / OSX.3+</td>
                                                                        <td class="center">-</td>
                                                                        <td class="center">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Presto</td>
                                                                        <td>Opera 9.5</td>
                                                                        <td>Win 88+ / OSX.3+</td>
                                                                        <td class="center">-</td>
                                                                        <td class="center">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Presto</td>
                                                                        <td>Opera for Wii</td>
                                                                        <td>Wii</td>
                                                                        <td class="center">-</td>
                                                                        <td class="center">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Presto</td>
                                                                        <td>Nokia N800</td>
                                                                        <td>N800</td>
                                                                        <td class="center">-</td>
                                                                        <td class="center">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Presto</td>
                                                                        <td>Nintendo DS browser</td>
                                                                        <td>Nintendo DS</td>
                                                                        <td class="center">8.5</td>
                                                                        <td class="center">C/A<sup>1</sup></td>
                                                                </tr>
                                                                <tr class="gradeC">
                                                                        <td>KHTML</td>
                                                                        <td>Konqureror 3.1</td>
                                                                        <td>KDE 3.1</td>
                                                                        <td class="center">3.1</td>
                                                                        <td class="center">C</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>KHTML</td>
                                                                        <td>Konqureror 3.3</td>
                                                                        <td>KDE 3.3</td>
                                                                        <td class="center">3.3</td>
                                                                        <td class="center">A</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>KHTML</td>
                                                                        <td>Konqureror 3.5</td>
                                                                        <td>KDE 3.5</td>
                                                                        <td class="center">3.5</td>
                                                                        <td class="center">A</td>
                                                                </tr>
                                                                <tr class="gradeX">
                                                                        <td>Tasman</td>
                                                                        <td>Internet Explorer 4.5</td>
                                                                        <td>Mac OS 8-9</td>
                                                                        <td class="center">-</td>
                                                                        <td class="center">X</td>
                                                                </tr>
                                                                <tr class="gradeC">
                                                                        <td>Tasman</td>
                                                                        <td>Internet Explorer 5.1</td>
                                                                        <td>Mac OS 7.6-9</td>
                                                                        <td class="center">1</td>
                                                                        <td class="center">C</td>
                                                                </tr>
                                                                <tr class="gradeC">
                                                                        <td>Tasman</td>
                                                                        <td>Internet Explorer 5.2</td>
                                                                        <td>Mac OS 8-X</td>
                                                                        <td class="center">1</td>
                                                                        <td class="center">C</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Misc</td>
                                                                        <td>NetFront 3.1</td>
                                                                        <td>Embedded devices</td>
                                                                        <td class="center">-</td>
                                                                        <td class="center">C</td>
                                                                </tr>
                                                                <tr class="gradeA">
                                                                        <td>Misc</td>
                                                                        <td>NetFront 3.4</td>
                                                                        <td>Embedded devices</td>
                                                                        <td class="center">-</td>
                                                                        <td class="center">A</td>
                                                                </tr>
                                                                <tr class="gradeX">
                                                                        <td>Misc</td>
                                                                        <td>Dillo 0.8</td>
                                                                        <td>Embedded devices</td>
                                                                        <td class="center">-</td>
                                                                        <td class="center">X</td>
                                                                </tr>
                                                                <tr class="gradeX">
                                                                        <td>Misc</td>
                                                                        <td>Links</td>
                                                                        <td>Text only</td>
                                                                        <td class="center">-</td>
                                                                        <td class="center">X</td>
                                                                </tr>
                                                                <tr class="gradeX">
                                                                        <td>Misc</td>
                                                                        <td>Lynx</td>
                                                                        <td>Text only</td>
                                                                        <td class="center">-</td>
                                                                        <td class="center">X</td>
                                                                </tr>
                                                                <tr class="gradeC">
                                                                        <td>Misc</td>
                                                                        <td>IE Mobile</td>
                                                                        <td>Windows Mobile 6</td>
                                                                        <td class="center">-</td>
                                                                        <td class="center">C</td>
                                                                </tr>
                                                                <tr class="gradeC">
                                                                        <td>Misc</td>
                                                                        <td>PSP browser</td>
                                                                        <td>PSP</td>
                                                                        <td class="center">-</td>
                                                                        <td class="center">C</td>
                                                                </tr>
                                                                <tr class="gradeU">
                                                                        <td>Other browsers</td>
                                                                        <td>All others</td>
                                                                        <td>-</td>
                                                                        <td class="center">-</td>
                                                                        <td class="center">U</td>
                                                                </tr>
                                                        </tbody>
                                                </table>
                                        </div>
                                </section>
                        <!-- end: page -->
                </section>
        </div>

        <aside id="sidebar-right" class="sidebar-right">
                <div class="nano">
                        <div class="nano-content">
                                <a href="#" class="mobile-close visible-xs">
                                        Collapse <i class="fa fa-chevron-right"></i>
                                </a>

                                <div class="sidebar-right-wrapper">

                                        <div class="sidebar-widget widget-calendar">
                                                <h6>Upcoming Tasks</h6>
                                                <div data-plugin-datepicker data-plugin-skin="dark" ></div>

                                                <ul>
                                                        <li>
                                                                <time datetime="2014-04-19T00:00+00:00">04/19/2014</time>
                                                                <span>Company Meeting</span>
                                                        </li>
                                                </ul>
                                        </div>

                                        <div class="sidebar-widget widget-friends">
                                                <h6>Friends</h6>
                                                <ul>
                                                        <li class="status-online">
                                                                <figure class="profile-picture">
                                                                        <img src="assets/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
                                                                </figure>
                                                                <div class="profile-info">
                                                                        <span class="name">Joseph Doe Junior</span>
                                                                        <span class="title">Hey, how are you?</span>
                                                                </div>
                                                        </li>
                                                        <li class="status-online">
                                                                <figure class="profile-picture">
                                                                        <img src="assets/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
                                                                </figure>
                                                                <div class="profile-info">
                                                                        <span class="name">Joseph Doe Junior</span>
                                                                        <span class="title">Hey, how are you?</span>
                                                                </div>
                                                        </li>
                                                        <li class="status-offline">
                                                                <figure class="profile-picture">
                                                                        <img src="assets/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
                                                                </figure>
                                                                <div class="profile-info">
                                                                        <span class="name">Joseph Doe Junior</span>
                                                                        <span class="title">Hey, how are you?</span>
                                                                </div>
                                                        </li>
                                                        <li class="status-offline">
                                                                <figure class="profile-picture">
                                                                        <img src="assets/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
                                                                </figure>
                                                                <div class="profile-info">
                                                                        <span class="name">Joseph Doe Junior</span>
                                                                        <span class="title">Hey, how are you?</span>
                                                                </div>
                                                        </li>
                                                </ul>
                                        </div>

                                </div>
                        </div>
                </div>
        </aside>
</section>'
. '';

