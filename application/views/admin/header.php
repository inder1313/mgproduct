<?php
    if($this->session->userdata['log']!='abcd')
    {
        redirect("admin/log");
    }
?>
<style>
  @media  screen and (max-width: 991px){
    .simple-text{color: #a9afbb!important;}
    .mobile_text{color: #a9afbb;}
  }
</style>
<div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white">
      <div class="logo">
        <a href="" class="simple-text logo-normal">
          Admin Panel
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="<?=site_url('admin')?>">
              <i class="material-icons">dashboard</i>
              <p class="mobile_text">Dashboard</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?=site_url('admin/imgset')?>">
              <i class="material-icons">photo_library</i>
              <p class="mobile_text">Image Settings</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?=site_url('admin/account')?>">
              <i class="material-icons">account_box</i>
              <p class="mobile_text">Account Setting</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= site_url('admin/query_manager')?>">
              <i class="material-icons">question_answer</i>
              <p class="mobile_text">Queries</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?=site_url('admin/logout')?>">
              <i class="material-icons">power_settings_new</i>
              <p class="mobile_text">Logout</p>
            </a>
          </li>
          <!-- your sidebar here -->
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top">
        <div class="container-fluid">
          <div class="logo text-center">
            <h3 class="simple-text logo-normal">
              <a href="<?=site_url('admin/frontend');?>">M.G. Products</a>
            </h3>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
         
        </div>
      </nav>