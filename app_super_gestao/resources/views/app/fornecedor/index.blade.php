<h3>Fornecedores</h3>


@php

# if (!empty($fornecedores)) { } // executa quando o retorno for true

@endphp


{{-- Utilizando sintaxe do blade --}}
{{--  @dd(fornecedores) print o array  --}}     
{{--  @unless executa quando o retorno for false  --}}     


@isset($fornecedores) <!-- executa quando for true -->
    @foreach ($fornecedores as $value => $fornecedor)
        Fornecedor: {{ $fornecedor['nome'] }}
        <br>
        Status: {{ $fornecedor['status'] }}
        <br>
        CNPJ: {{ $fornecedor['cnpj'] ?? '' }}
        <br>
        Telefone: ({{ $fornecedor['ddd'] ?? '' }}) {{ $fornecedor['telefone'] ?? '' }}
        <hr>
    @endforeach
@endisset


