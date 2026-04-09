{{ $slot }}

<form action={{ route('site.contato') }} method="post">
    @csrf <!--Usado para criar um token invisivel dentro do formulario para evitar ataques CSRF -->
    <input name='nome' value="{{ old('nome') }}" type="text" placeholder="Nome" class={{ $classe }}>
    <br>
    <input name='telefone' value="{{ old('telefone') }}" type="text" placeholder="Telefone" class={{ $classe }}>
    <br>
    <input name='email' value="{{ old('email') }}" type="text" placeholder="E-mail" class={{ $classe }}>
    <br>
    <select name='motivo_contato' class={{ $classe }}>
        <option value="">Qual o motivo do contato?</option>
        @foreach ($motivos_contatos as $motivo_contato)
            <option value="{{ $motivo_contato->id }}" {{ old('motivo_contato') == $motivo_contato->id ? 'selected' : '' }}>{{ $motivo_contato->motivo_contato }}</option>
        @endforeach    
    </select>
    <br>
    <textarea name='mensagem' class={{ $classe }}>{{ old('mensagem') ? old('mensagem') : 'Preencha aqui a sua mensagem' }}</textarea>
    <br>
    <button type="submit" class={{ $classe }}>ENVIAR</button>
</form>

{{-- Verificando se existem erros de validação e exibindo-os, variavel erros é automaticamente disponibilizada pelo Laravel --}}
@if ($errors->any())
    <div class="alert alert-danger" style="color: red; list-style: none;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif