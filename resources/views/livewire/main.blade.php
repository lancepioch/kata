<div class="container">
    <div class="row">
        <div class="card col-5" style="width: 18rem;">
            <img src="http://placekitten.com/500/300" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Quote of the Day</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{ $dailyAuthor }}</h6>
                <p class="card-text">{{ $dailyText }}</p>
                <a wire:click="daily" class="btn btn-primary">Daily</a>
            </div>
        </div>
        <div class="col-2"><!-- Buffer --></div>
        <div class="card col-5" style="width: 18rem;">
            <img src="http://placekitten.com/500/300?" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Random Quote</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{ $randomText }}</h6>
                <p class="card-text">{{ $randomAuthor }}</p>
                <a wire:click="random" class="btn btn-primary">Randomize</a>
            </div>
        </div>
    </div>
</div>
