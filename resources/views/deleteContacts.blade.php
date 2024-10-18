<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Contacts</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Delete Contacts</h1>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('show.delete.contacts') }}" method="GET" class="mb-3">
            <input type="text" name="search" placeholder="Search Contacts" class="form-control" value="{{ request('search') }}">
            <button type="submit" class="btn btn-primary mt-2">Search</button>
        </form>

        @if($noResults)
            <div class="alert alert-warning text-center">No matching contacts found.</div>
        @endif

        @if($contacts->isNotEmpty())
            <form action="{{ route('delete.contacts') }}" method="POST">
                @csrf
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Select</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($contacts as $contact)
                            <tr>
                                <td>
                                    <input type="checkbox" name="contacts[]" value="{{ $contact->id }}">
                                </td>
                                <td>{{ $contact->name }}</td>
                                <td>{{ $contact->email }}</td>
                                <td>{{ $contact->phone }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <button type="submit" class="btn btn-danger">Delete Selected</button>
            </form>
        @endif

        <div class="text-center mt-3">
            <a href="{{ route('list.contacts') }}" class="btn btn-secondary">Back to List</a>
        </div>
    </div>
</body>
</html>
