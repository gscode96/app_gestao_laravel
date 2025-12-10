<h3>Fornecedores</h3>


@php


@endphp


{{-- Utilizando sintaxe do blade --}}
{{--  @dd(fornecedores) print o array  --}}     
@if(count($fornecedores) > 0 && count($fornecedores) < 10)
    <h4>Existem alguns fornecedores cadastrados</h4>
@elseif(count($fornecedores) >= 10)
    <h4>Existem muitos fornecedores cadastrados</h4>
@else
    <h4>Não existem fornecedores cadastrados</h4>
@endif