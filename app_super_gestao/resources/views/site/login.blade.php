@extends('site.layouts.basico')
@section('titulo', $titulo)
@section('conteudo')

    <div class="conteudo-pagina">
        <div class="titulo-pagina">
            <h1>Login</h1>
        </div>
        <div class="informacao-pagina">
            <div style="width: 30%; margin-left: auto; margin-right: auto;">
           <form action="{{ route('site.login') }}" method="post">
                @csrf
                <input name="email" value="{{ old('email') }}" type="text" placeholder="E-mail" class="borda-preta">
                {{ $errors->has('email') ? $errors->first('email') : '' }}
                <input name="password" value="{{ old('password') }}" type="password" placeholder="Senha" class="borda-preta">
                {{ $errors->has('password') ? $errors->first('password') : '' }}
                <button type="submit" class="borda-preta">Acessar</button>
            </form>
            </div>   
        </div>  
    </div>
   
@endsection