<!DOCTYPE html>
<html lang="en">
  <head>
    <title>{$title}</title>
    <meta charset="utf-8">

    <link rel="apple-touch-icon" sizes="152x152" href="/templates/default/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/templates/default/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/templates/default/favicon/favicon-16x16.png">
    <link rel="manifest" href="/templates/default/favicon/site.webmanifest">
    <link rel="mask-icon" href="/templates/default/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <script src="/data/js/jquery-3.4.1.min.js"></script>
    <script src="/data/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/data/js/common.js"></script>
    {if $localfiles}
      {foreach from=$localfiles.scripts item=i key=k}
        <script src="/templates/default/{$localfiles.template}/{$i}"></script>
      {/foreach}
      {foreach from=$localfiles.css item=i key=k}
        {* <script src="/templates/default/"></script> *}
      {/foreach}
    {/if}

    {literal}
    <style>html {opacity:0;}</style>
    {/literal}
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light" id = "navbar">
      <a class="navbar-brand" href="/index.php">Calendar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-nav-bar" aria-controls="main-nav-bar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="main-nav-bar">
        <hr class="d-xl-none d-lg-none d-sm-block d-md-block">
        <ul class="navbar-nav ml-auto">
          <li class='mr-2'><a data-class="modal-lg" data-href="/user" onclick="show_modalpage(this)"><span class="badge badge-pill badge-primary shadow p-2"><i class="fas fa-user mr-2"></i>{$smarty.session.person}</span></a></li>
          <li><a data-class="modal-lg" data-href="/addevent" onclick="show_modalpage(this)"><span class="badge badge-pill badge-primary shadow p-2"><i class="fas fa-plus-circle mr-2"></i>Создать встречу</span></a></li>
        </ul>
      </div>
    </nav>
    <div class="bb mb-4 mr-5 ml-5" id='bb'></div>