<h3>Pricipal!(view)</h3>

<!--em vez de href="/sobre-nos" usamos a rota nomeada -->
<ul>
    <li><a href="{{ route('site.index') }}">Principal</a></li>
    <li><a href="{{ route('site.sobreNos') }}">Sobre Nós</a></li>
    <li><a href="{{ route('site.contato') }}">Contato</a></li>
</ul>