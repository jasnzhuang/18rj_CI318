<!DOCTYPE html>
<html lang="en">
<head>
    	<meta charset="UTF-8">
        <title>18rj_ci318</title>
        <link type="text/css" rel="stylesheet" href="<? echo base_url("css/bootstrap.css"); ?>">
        <link type="text/css" rel="stylesheet" href="<? echo base_url("css/blog.css"); ?>">
        <script type="text/javascript" src="<? echo base_url("js/bootstrap.js"); ?>"></script>
        <style>
            /* Sticky footer styles
-------------------------------------------------- */
            html {
                position: relative;
                min-height: 100%;
            }
            body {
                margin-bottom: 60px; /* Margin bottom by footer height */
            }
            .footer {
                position: absolute;
                bottom: 0;
                width: 100%;
                height: 60px; /* Set the fixed height of the footer here */
                line-height: 60px; /* Vertically center the text there */
                background-color: #f5f5f5;
            }
        </style>
    </head>
    <body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
    <a class="navbar-brand" href="#">18rj_CI318</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url('Home'); ?>">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url('news'); ?>">News </a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url('categories'); ?>">Categories </a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url('users/list'); ?>">Users </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('about'); ?>">About</a>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <?php if(!$this->session->userdata('logged_in')) : ?>
                <li><a class="nav-link" href="<?php echo base_url('users/login'); ?>">Login</a></li>
                <li><a class="nav-link" href="<?php echo base_url('users/register'); ?>">Register</a></li>
            <?php endif; ?>
            <?php if($this->session->userdata('logged_in')) : ?>
                <li><a href="<?php echo base_url('users/info'); ?>" class="nav-link">欢迎回来，<?php echo $this->session->userdata('username') ?></a></li>
                <li><a class="nav-link" href="<?php echo base_url('news/create'); ?>">Create News</a></li>
                <li><a class="nav-link" href="<?php echo base_url('categories/create'); ?>">Create Category</a></li>
                <li><a class="nav-link" href="<?php echo base_url('users/logout'); ?>">Logout</a></li>
            <?php endif; ?>
        </ul>

    </div>
    </div>
</nav>

<div class="container">
