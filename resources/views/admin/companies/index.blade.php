@extends('adminlte::page')

@section('title', 'Companies')

@section('content_header')
    <h1>Companies</h1>
@stop

@section('content')
    <!-- /.box-header -->
    <div class="box-body">
      <table id="example2" class="table table-bordered table-hover">
        <thead>
          <tr>
            <th>#</th>
            <th>Company Name</th>
            <th>Email</th>
            <th>Logo</th>
            <th>Site</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
        @foreach($companies as $company)
          <tr>
            <td>{{$company->id}}</td>
            <td>{{$company->company_name}}</td>
            <td>{{$company->company_email}}</td>
            <td><a href="#" data-toggle='tooltip' title='<img src="{{asset('storage/logos/'.$company->company_logo)}}" width="50" class="margin"/>'>{{$company->company_name}}</a></td>
            <td>{{$company->company_website}}</td>
            <td><a href="#" class="text-green" alt="Edit" title="Edit"><i class="fa fa-fw fa-edit"></i></a> | <a href="#" class="text-red" alt="Delete" title="Delete"><i class="fa fa-fw fa-trash"></i></a></td>
          </tr>
        @endforeach
        </tbody>
        <tfoot>
          <tr>
              <th>#</th>
              <th>Company Name</th>
              <th>Email</th>
              <th>Logo</th>
              <th>Site</th>
              <th>Actions</th>
          </tr>
        </tfoot>
      </table>
    </div>
    <!-- /.box-body -->
@stop

@section('page-script')
    <script>
        (function( $ ) {

          $(function() {

            $('[data-toggle="tooltip"]').tooltip({
                animated: 'fade',
                placement: 'auto',
                html: true
            }); 

            $('#example2').DataTable( {
                "order": [[ 2, "desc" ]],
                language: {
                  url: '//cdn.datatables.net/plug-ins/1.10.16/i18n/Portuguese-Brasil.json'
                }
            })

          });

        })(jQuery);
    </script>
@stop