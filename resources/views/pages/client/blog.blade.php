@extends('pages.adminMasterPage')

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
                <h1>{{ $c->post_title }}</h1>

                <blockquote>
                    <p>{{ $c->content }}</p>

                </blockquote>

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
