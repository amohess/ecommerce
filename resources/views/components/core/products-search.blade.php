<form action="{{ route('store.index') }}" method="GET">

    <div class="input-group mb-3" style="width: 200%;">
        <input type="text" class="form-control" placeholder="Search" name="search" value="{{ old('search') }}">
        <div class="input-group-append">
            <button class="btn btn-black py-3 px-5" type="submit">Search</button>
        </div>
    </div>

</form>
