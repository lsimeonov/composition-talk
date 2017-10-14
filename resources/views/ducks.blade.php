<div class="duck-wrapper">
    @forelse($ducks as $duck)
        <div class="duck-item">
            <h3>Duck #{{$loop->iteration}}</h3>
            <p>Fly: {{$duck->fly()}}</p>
            <p>Quack: {{$duck->quack()}}</p>
        </div>
    @empty
        <p>No ducks.</p>
    @endforelse
</div>