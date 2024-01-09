<div class="box">
    {{-- Do your work, then step back. --}}
    {{-- <input type="text" id="search" name="" placeholder="Enter to search here...">
    <i class="fa fa-search" aria-hidden="true"></i>
    <div id="search-results"></div> --}}

    <input type="text" wire:model.live="query" wire.keydown.escape="reset" placeholder="Enter to search here..." autofocus>
    <i class="fa fa-search" aria-hidden="true"></i>


    @if ($query)

        <div class="search-results">
            @if (count($results))
                <ul class="search-list">
                    @foreach ($results as $result)
                        <a href="#"><li class="search-list-item">{{ $result->name }} <span>({{ $result->category }})</span></li></a>
                    @endforeach
                </ul>
            @else
                <div style="text-align: center;">No results found.</div>
            @endif
        </div>

    @endif

</div>
