<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Laboratory Form</h1>

    @if (isset($laboratory))
    <form action="{{ route('form.update', ['form' => $laboratory->id]) }}"  enctype="multipart/form-data" method="POST" class="d-flex flex-column gap-3">
        @method('PUT')
        @csrf
        {{-- <select name="item_type" required id="item_type">
            <option value="" disabled>Select Item Type</option>
            @foreach($itemtype as $item)
                <option value="{{ $item->id }}" {{ $laboratory->item_type == $item->id ? 'selected' : '' }}>{{ $item->item_type }}</option>
            @endforeach
        </select> --}}
        {{-- <select name="item_cond" required id="item_cond">
            <option value="" disabled>Select Item Condition</option>
            @foreach($itemcond as $cond)
                <option value="{{ $cond->id }}" {{ $laboratory->item_cond == $cond->id ? 'selected' : '' }}>{{ $cond->condition_name }}</option>
            @endforeach
        </select> --}}
        <input type="text" name="item_type" placeholder="Item Type" value="{{$laboratory->item_type}}" required/>
        <input type="text" name="item_cond" placeholder="Item Condition" value="{{$laboratory->item_cond}}"required/>
        <input type="text" name="description" placeholder="Description" value="{{$laboratory->description}}" required/>
        <input type="text" name="defects" placeholder="Defects" value="{{$laboratory->defects}}"/>
        <input type="text" name="quantity"  step="1"placeholder="Quantity" value="{{$laboratory->quantity}}" required/>
        <input type="file" name="file" placeholder="File" value="{{$laboratory->file}}" required accept=".jpg, .jpeg, .png"/>
        <button type="submit">Save</button>
    </form> 
    @else
    <form action="{{ route('form.store') }}" method="post" enctype="multipart/form-data" class="d-flex flex-column gap-3">
        @csrf
        {{-- <select name="item_type" required id="item_type">
            <option value="" disabled>Select Item Type</option>
            @foreach($itemtype as $item)
                <option value="{{ $item->id }}" {{ $laboratory->item_type == $item->id ? 'selected' : '' }}>{{ $item->item_type }}</option>
            @endforeach
        </select> --}}
        {{-- <select name="item_cond" required id="item_cond">
            <option value="" disabled>Select Item Condition</option>
            @foreach($itemcond as $cond)
                <option value="{{ $cond->id }}" {{ $laboratory->item_cond == $cond->id ? 'selected' : '' }}>{{ $cond->condition_name }}</option>
            @endforeach
        </select> --}}
        <input type="text" name="item_type" placeholder="Item Type" required/>
        <input type="text" name="item_cond" placeholder="Item Condition" required/>
        <input type="text" name="description" placeholder="Description" required/>
        <input type="text" name="defects" placeholder="Defects" />
        <input type="text" name="quantity"  step="1" placeholder="Quantity" required/>
        <input type="file" name="file" placeholder="File" required accept=".jpg, .jpeg, .png"/>
        <button type="submit">Save</button>
    </form>
    @endif
</body>
</html>