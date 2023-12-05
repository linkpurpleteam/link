<div>
    <p>Solicitar este servicio</p>
    @if(session()->has('mensaje'))
    <div>
        {{session('mensaje')}}
    </div>
    @else
    <form wire:submit.prevent="solicitar">
        <button style="border-radius: 10px; padding-inline: 20px; border: 2px solid var(--blanco); background-color: var(--naranja); color: var(--blanco);" type="submit">Solicitar</button>
    </form>
    @endif
  
</div>
