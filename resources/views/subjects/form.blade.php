@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form
    action="
        @if (isset($subject))
            {{route('subjects.update',$subject) }}
        @else
            {{ route('subjects.store') }}
        @endif
        "
    method="post"
>
    @csrf
    @if (isset($subject))
        @method('PUT')
    @endif
    <input type="text" name="name" placeholder="name" value="{{ isset($subject) ? $subject->name : '' }}">

    <textarea name="description" placeholder="description">
        {{ isset($subject) ? $subject->description : '' }}
    </textarea>

    <input type="number" name="score" placeholder="score" value="{{ isset($subject) ? $subject->score : '' }}">

    Status
    <select name="status">
        <option value="0" {{ isset($subject) ? $subject->status === 0 ? 'selected' :'' : ''}}>false</option>
        <option value="1"
        @if (isset($subject))
            @if ($subject->status === 1)
                selected
            @endif
        @endif
        >true</option>
    </select>

    @if (isset($subject))
        <button type="submit">Update</button>
    @else
        <button type="submit">Create</button>
    @endif
</form>
