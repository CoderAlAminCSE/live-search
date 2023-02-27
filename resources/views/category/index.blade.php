@extends('welcome')

@section('content')
    <div class="container mt-5">


        <input style="border:1px blue solid" type="text" id="search" placeholder="Search...">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Parent</th>
                    <th scope="col">Satuts</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody id="table-body">
                @foreach ($categories as $category)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $category->name }}</td>
                        <td>{{ parentCategory($category->parent_id) }}</td>
                        {{-- <td>{{ $category->parent_id }}</td> --}}
                        <td>{{ $category->status }}</td>
                        <td>Delete</td>
                    </tr>
                @endforeach

            </tbody>
        </table>

    </div>


    {{-- <script>
        $(document).ready(function() {
            $('#search').on('keyup', function() {
                var query = $(this).val();
                $.ajax({
                    url: "{{ route('search') }}",
                    method: 'GET',
                    data: {
                        query: query
                    },
                    success: function(data) {
                        console.log(data);

                        var tbody = $('#table-body');
                        tbody.empty();
                        $.each(data, function(index, user) {
                            var tr = $('<tr>');
                            tr.append('<td>' + user.id + '</td>');
                            // tr.append('<td>' + user_name(user.id) + '</td>'); // to show the other table info using relationship, not sure it will work or not, just collected from chat GTP
                            tr.append( '<td><img src="' + user.image + '" width="50" ></td>');
                            tr.append('<td>' + user.title + '</td>');
                            tr.append('<td>' + user.email + '</td>');
                            tbody.append(tr);
                        });
                    }
                });
            });
        });
    </script> --}}
@endsection
