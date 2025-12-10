<h3>Fornecedores</h3>


@php

# if (!empty($fornecedores)) { } // executa quando o retorno for true

@endphp


{{-- Utilizando sintaxe do blade --}}
{{--  @dd(fornecedores) print o array  --}}     
{{--  @unless executa quando o retorno for false  --}}     

Fornecedor: {{ $fornecedores[0]['nome'] }}
<br>
Status: {{ $fornecedores[0]['status'] }}

@if ($fornecedores[0]['status'] == 'N')
<br>
    Fornecedor Inativo
    
@endif
<br>
@unless($fornecedores[0]['status'] == 'S') <!-- executa quando for false -->
Fornecedor Inativo (unless)
@endunless
<br>