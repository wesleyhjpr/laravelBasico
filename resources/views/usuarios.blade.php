{{'Bem vindo:'. $texto}}

@if($checagem == true)

    checagem true
@else
    checagem false
@endif
<br>

<br>
{{$parametro}}
<br>

<br>
<br>
@foreach($usuarios as $ua)
      {{$ua}}
    <br>
@endforeach




