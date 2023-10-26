<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1> Laboratory Data </h1>

    <form action="{{ route('form.create') }}">
        <button type="submit">Add Laboratory Data</button>
    </form>

    <table class="table">
        <thead>
            <tr>
                <th>Item Type</th>
                <th>Item Condition</th>
                <th>Description</th>
                <th>Defects</th>
                <th>Quantity</th>
                <th>Email</th>
                <th>File</th>
            </tr>
        </thead>
        <tbody>
            @foreach($laboratories as $laboratory)
            <tr>
                <td>{{ $laboratory->item_type }}</td>
                <td>{{ $laboratory->item_cond }}</td>
                <td>{{ $laboratory->description }}</td>
                <td>{{ $laboratory->defects }}</td>
                <td>{{ $laboratory->quantity }}</td>
                <td>{{ $laboratory->file }}</td>
                <td>
                    <form action="{{ route('form.edit', $laboratory->id) }}">
                        @method('PUT')
                        @csrf
                        <button type="submit">Edit</button>
                    </form>
                    <form action="{{ route('form.destroy', $laboratory->id) }}" method="post">
                    @method('DELETE')
                    @csrf
                    <button type="submit">Delete</button>
                    </form>
                    
                </td>
            </tr>
            @endforeach
        </tbody>
</body>
</html>