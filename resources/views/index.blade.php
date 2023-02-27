@extends('welcome')

@section('content')
    <div class="container mt-5">


        <input style="border:1px blue solid" type="text" id="search" placeholder="Search...">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Image</th>
                    <th scope="col">Title</th>
                    <th scope="col">Category</th>
                    <th scope="col">Email</th>
                </tr>
            </thead>
            <tbody id="table-body">
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>
                            <img src=" {{ $post->image }}" width="50">
                        </td>
                        <td>{{ $post->title }}</td>
                        
                        <td>
                        @foreach ($post->categories as $category)
                            <span>{{ $category->name }}</span>,
                        @endforeach    
                        </td>

                        <td>{{ $post->email }}</td>
                    </tr>
                @endforeach

            </tbody>
        </table>{{ $posts->links() }}

    </div>


    <script>
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
                        $.each(data.data, function(index, user) {
                            var tr = $('<tr>');
                            tr.append('<td>' + user.id + '</td>');
                            tr.append( '<td><img src="' + user.image + '" width="50" ></td>');
                            tr.append('<td>' + user.title + '</td>');
      
                            tr.append(function() {
                                if(user.categories) {
                                    return `<td>${user.categories.map((item)=>item.name)}</td>`;
                                }
                            });

                            tr.append('<td>' + user.email + '</td>');
                            tbody.append(tr);
                        });
                    }
                });
            });
        });
    </script>
@endsection
