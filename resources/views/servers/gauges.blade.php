<div role="tabpanel" class="tab-pane active" id="overview">
  <p>
    <div class="row">
      <div class="col-md-4">
        <div style="background-color: #f5f5f5" id="cpugauge"></div>
      </div>
      <div class="col-md-4">
        <div id="ramgauge"></div>
      </div>
      <div class="col-md-4">
        <div style="background-color: #f5f5f5" id="netgauge"></div>
      </div>
    </div>
  </p>
</div>


@section('scripts') @parent
<script src="https://cdn3.devexpress.com/jslib/16.2.6/js/dx.all.js"></script>
@stop @section('inline-scripts') @parent
<script type="text/javascript">
  $(function() {

    var dataSource = [{
        "mean": 10
      },
      {
        "mean": 40
      },
      {
        "mean": 67
      }
    ]

    var cpugauge = $("#cpugauge").dxCircularGauge({
      scale: {
        startValue: 0,
        endValue: 100,
        tickInterval: 5,
        label: {
          customizeText: function(arg) {
            return arg.valueText + " %";
          }
        }
      },
      rangeContainer: {
        ranges: [{
            startValue: 0,
            endValue: 30,
            color: "#77DD77"
          },
          {
            startValue: 30,
            endValue: 70,
            color: "#E6E200"
          },
          {
            startValue: 70,
            endValue: 100,
            color: "#E24A37"
          }
        ]
      },
      tooltip: {
        enabled: true
      },
      title: {
        text: "CPU",
        font: {
          size: 28
        }
      },
      value: dataSource[0].mean,
    }).dxCircularGauge("instance");

    var ramgauge = $("#ramgauge").dxCircularGauge({
      scale: {
        startValue: 0,
        endValue: 100,
        tickInterval: 5,
        label: {
          customizeText: function(arg) {
            return arg.valueText + " %";
          }
        }
      },
      rangeContainer: {
        ranges: [{
            startValue: 0,
            endValue: 30,
            color: "#77DD77"
          },
          {
            startValue: 30,
            endValue: 70,
            color: "#E6E200"
          },
          {
            startValue: 70,
            endValue: 100,
            color: "#E24A37"
          }
        ]
      },
      tooltip: {
        enabled: true
      },
      title: {
        text: "RAM",
        font: {
          size: 28
        }
      },
      value: dataSource[1].mean,
    }).dxCircularGauge("instance");

    var netgauge = $("#netgauge").dxCircularGauge({
      scale: {
        startValue: 0,
        endValue: 100,
        tickInterval: 5,
        label: {
          customizeText: function(arg) {
            return arg.valueText + " %";
          }
        }
      },
      rangeContainer: {
        ranges: [{
            startValue: 0,
            endValue: 30,
            color: "#77DD77"
          },
          {
            startValue: 30,
            endValue: 70,
            color: "#E6E200"
          },
          {
            startValue: 70,
            endValue: 100,
            color: "#E24A37"
          }
        ]
      },
      tooltip: {
        enabled: true
      },
      title: {
        text: "NETWORK",
        font: {
          size: 28
        }
      },
      value: dataSource[2].mean,
    }).dxCircularGauge("instance");


  });
</script>
@stop
