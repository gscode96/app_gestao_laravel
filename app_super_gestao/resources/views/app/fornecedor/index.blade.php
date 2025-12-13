<h3>Fornecedores</h3>


@php

# if (!empty($fornecedores)) { } // executa quando o retorno for true

@endphp


{{-- Utilizando sintaxe do blade --}}
{{--  @dd(fornecedores) print o array  --}}     
{{--  @unless executa quando o retorno for false  --}}     


@isset($fornecedores) <!-- executa quando for true -->
Fornecedor: {{ $fornecedores[0]['nome'] }}
<br>
Status: {{ $fornecedores[0]['status'] }}
<br>
Status: {{ $fornecedores[0]['cnpj'] }}
<br>
Status: {{ $fornecedores[1]['nome'] }}
<br>
Status: {{ $fornecedores[1]['status'] }}
<br>
@isset($fornecedores[1]['cnpj'])
    Status: {{ $fornecedores[1]['cnpj'] }}
@endisset
<br>

@endisset

<br>