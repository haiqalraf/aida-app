<form wire:submit="submit">
    <div class="input-group">
        <input list="search" type="text" wire:model.debounce.500ms="search" placeholder="Search"
            class="form-control border-0 rounded-3 bg-light">
        <input list="search" type="text" name="search" value="{{ $this->search }}" placeholder="Search"
            class="form-control border-0 rounded-3 bg-light" hidden>
        <div class="input-group-append">
            <button id="button-addon1" type="submit" class="btn btn-link text-primary rounded-3"><i
                    class="fa fa-search"></i></button>
        </div>
    </div>
    <div class="position-relative list-group data-table">
        @if ($this->search !== null && $this->search !== '')
            <div class="list-group position-absolute w-100">
                @forelse ($this->articles as $article)
                    <a href="{{ route('search.result.data', $article) }}" class="list-group-item list-group-item-action">
                        {{ $article->title }}
                    </a>
                @empty
                    <a href="#" class="list-group-item list-group-item-action">
                        Not Found
                    </a>
        @endforelse
    </div>
    @endif
    </div>
</form>
