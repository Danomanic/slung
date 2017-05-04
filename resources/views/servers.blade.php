@extends('layouts.app')

@section('title', 'Slung > Servers')

@section('content')



<div class="container">
  <div class="row">
    @include('servers.tree')
    <div class="col-md-9">
      <div class="panel panel-default">
        <div class="panel-heading">Server #1</div>

        <div class="panel-body">
          <div>

            <!-- Nav tabs -->
            <ul class="nav nav-tabs nav-justified" role="tablist">
              <li role="presentation" class="active"><a href="#overview" aria-controls="overview" role="tab" data-toggle="tab">Overview</a></li>
              <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li>
              <li role="presentation"><a href="#usage" aria-controls="usage" role="tab" data-toggle="tab">Usage</a></li>
              <li role="presentation"><a href="#logs" aria-controls="logs" role="tab" data-toggle="tab">Logs</a></li>
            </ul>


            <!-- Tab panes -->
            <div class="tab-content">
              @include('servers.gauges')
              <div role="tabpanel" class="tab-pane" id="settings">2...</div>
              <div role="tabpanel" class="tab-pane" id="usage">3...</div>
              <div role="tabpanel" class="tab-pane" id="logs">4...</div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
