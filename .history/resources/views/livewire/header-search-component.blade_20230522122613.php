<div class="search-style-1">
    <form action="{{ route('animal.search') }}">
        <input type="text" name="q" placeholder="Rechercher des animaux..." value="{{$q}}">
    </form>
</div>
