<h3>Fornecedores</h3>


@php

# if (!empty($fornecedores)) { } // executa quando o retorno for true

@endphp


{{-- Utilizando sintaxe do blade --}}
{{--  @dd(fornecedores) print o array  --}}     
{{--  @unless executa quando o retorno for false  --}}     


@isset($fornecedores) <!-- executa quando for true -->
    Fornecedor: {{ $fornecedores[2]['nome'] }}
    <br>
    Status: {{ $fornecedores[2]['status'] }}
    <br>
    CNPJ: {{ $fornecedores[2]['cnpj'] ?? '' }}
    <br>
    Telefone: ({{ $fornecedores[2]['ddd'] ?? '' }}) {{ $fornecedores[2]['telefone'] ?? '' }}
    @switch($fornecedores[2]['ddd'])
        @case('11')
            <p style="color: green">São Paulo - SP</p>
            @break
        @case('32')
            <p style="color: green">Juiz de fora - MG</p>
            @break
        @case('85')
            <p style="color: green">Fortaleza - CE</p>
            @break
        @default
            <p style="color: red">Fornecedor com DDD desconhecido</p>
    @endswitch
@endisset
