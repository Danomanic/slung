@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
          <div class="panel panel-default">
              <div class="panel-heading">Servers</div>

              <div class="panel-body">
                  <div id="tree" class=""></div>
              </div>
          </div>
        </div>
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
                      <div role="tabpanel" class="tab-pane active" id="overview">
                        <p>
                          <div class="row">
                            <div class="col-md-4">
                              <div id="cpugauge"></div>
                            </div>
                            <div class="col-md-4">
                              <div id="ramgauge"></div>
                            </div>
                            <div class="col-md-4">
                              <div id="netgauge"></div>
                            </div>
                          </div>
                        </p>

                      </div>
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

@section('scripts')
<script src="{{ asset('js/bootstrap-treeview.min.js') }}"></script>
<script src="https://cdn3.devexpress.com/jslib/16.2.6/js/dx.all.js"></script>
@stop
@section('inline-scripts')
<script type="text/javascript">

var tree = [
          {
            text: 'Datacentre 1',
            href: '#parent1',
            tags: ['4'],
            nodes: [
              {
                text: 'Host 1',
                href: '#child1',
                tags: ['2'],
                nodes: [
                  {
                    text: 'Server 1',
                    href: '#grandchild1',
                    tags: ['0']
                  },
                  {
                    text: 'Server 2',
                    href: '#grandchild2',
                    tags: ['0']
                  }
                ]
              },
              {
                text: 'Host 2',
                href: '#child2',
                tags: ['0']
              }
            ]
          },
          {
            text: 'Datacentre 2',
            href: '#parent2',
            tags: ['0']
          }

        ];

        $('#tree').treeview({data: tree, levels: 1, enableLinks:true, showBorder:false});

        var dataSource = [{
            name: 'CPU',
            mean: 35,
            min: 28,
            max: 38
        },
        {
            name: 'RAM',
            mean: 70,
            min: 80,
            max: 55
        },
        {
            name: 'Network',
            mean: 10,
            min: 5,
            max: 10
        }];

        $(function(){
            var cpugauge = $("#cpugauge").dxCircularGauge({
                scale: {
                    startValue: 0,
                    endValue: 100,
                    tickInterval: 5,
                    label: {
                        customizeText: function (arg) {
                            return arg.valueText + " %";
                        }
                    }
                },
                rangeContainer: {
                    ranges: [
                        { startValue: 0, endValue: 30, color: "#77DD77" },
                        { startValue: 30, endValue: 60, color: "#E6E200" },
                        { startValue: 60, endValue: 100, color: "#E24A37" }
                    ]
                },
                tooltip: { enabled: true },
                title: {
                    text: "CPU",
                    font: { size: 28 }
                },
                value : dataSource[0].mean,
                subvalues : [dataSource[0].min, dataSource[0].max]
            }).dxCircularGauge("instance");

            var ramgauge = $("#ramgauge").dxCircularGauge({
                scale: {
                    startValue: 0,
                    endValue: 100,
                    tickInterval: 5,
                    label: {
                        customizeText: function (arg) {
                            return arg.valueText + " %";
                        }
                    }
                },
                rangeContainer: {
                    ranges: [
                        { startValue: 0, endValue: 30, color: "#77DD77" },
                        { startValue: 30, endValue: 60, color: "#E6E200" },
                        { startValue: 60, endValue: 100, color: "#E24A37" }
                    ]
                },
                tooltip: { enabled: true },
                title: {
                    text: "RAM",
                    font: { size: 28 }
                },
                value : dataSource[1].mean,
                subvalues : [dataSource[1].min, dataSource[1].max]
            }).dxCircularGauge("instance");

            var netgauge = $("#netgauge").dxCircularGauge({
                scale: {
                    startValue: 0,
                    endValue: 100,
                    tickInterval: 5,
                    label: {
                        customizeText: function (arg) {
                            return arg.valueText + " %";
                        }
                    }
                },
                rangeContainer: {
                    ranges: [
                        { startValue: 0, endValue: 30, color: "#77DD77" },
                        { startValue: 30, endValue: 60, color: "#E6E200" },
                        { startValue: 60, endValue: 100, color: "#E24A37" }
                    ]
                },
                tooltip: { enabled: true },
                title: {
                    text: "NETWORK",
                    font: { size: 28 }
                },
                value : dataSource[2].mean,
                subvalues : [dataSource[2].min, dataSource[2].max]
            }).dxCircularGauge("instance");


        });

</script>
@stop
@endsection
