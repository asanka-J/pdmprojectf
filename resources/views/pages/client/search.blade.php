@extends('pages.adminMasterPage1')

@section('styleSheets')
    <link rel="stylesheet" href="{{asset('admin/dist/css/search.css')}}">
@stop

@section('CONTENT_HEADER')
    <h1>Search Content </h1>
@stop

@section('CONTENT')
    <div class="container">

        <div class="row">
            <div class="col-md-12">

                <div class="box">
                                        <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Member</th>
                                <th>Date</th>
                                <th>Title</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $d)
                            <tr>
                                <td>{{ $d->member_name }}</td>
                                <td>{{ $d->posted_date }}</td>
                                <td>{{ $d->post_title }}</td>
                                <td>
                                    <form method="post" action="{{ url('view_blog') }}">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="hidden" name="ID" value="{{ $d->id }}">
                                        <button type="submit" class="btn btn-primary">View</button>
                                    </form>
                                </td>
                            </tr>
                                @endforeach

                            </tbody>

                        </table>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->

                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="table table-bordered table-hover dataTable" id="tbl">
                    <thead>
                        <tr>
                            <th>

                            </th>
                        </tr>
                    </thead>
                </div>
            </div>
        </div>
    </div>


    <script>
        $(function () {
            $("#example1").DataTable();
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false
            });
        });
    </script>

@stop




<script>

    var sections = {
        'member': 'name',
        'title': 'title'

    };

    var selection = function(select) {

        for(i in sections)
            document.getElementById(sections[i]).style.display = "none";

        document.getElementById(sections[select.value]).style.display = "block";

    }
</script>
