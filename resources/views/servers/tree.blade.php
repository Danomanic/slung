<div class="col-md-3">
  <div class="panel panel-default">
    <div class="panel-heading">Servers</div>

    <div class="panel-body">
      <div id="tree" class=""></div>
    </div>
  </div>
</div>

@section('scripts') @parent
<script src="{{ asset('js/bootstrap-treeview.min.js') }}"></script>
@stop @section('inline-scripts') @parent
<script type="text/javascript">
  var tree = [{
      text: 'Datacentre 1',
      href: '#parent1',
      tags: ['4'],
      nodes: [{
          text: 'Host 1',
          href: '#child1',
          tags: ['2'],
          nodes: [{
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

  $('#tree').treeview({
    data: tree,
    levels: 1,
    enableLinks: true,
    showBorder: false
  });
</script>
@stop
