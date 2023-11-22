<div>
    <p>Solicitar este servicio</p>
    @if(session()->has('mensaje'))
    <div>
        {{session('mensaje')}}
    </div>
    @else
    <form wire:submit.prevent="solicitar">
        <button type="submit">Solicitar</button>
    </form>
    @endif
  
</div>
