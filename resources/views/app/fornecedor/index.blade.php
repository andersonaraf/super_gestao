<h3>Fornecedor</h3>

@isset($fornecedores)
    @forelse($fornecedores as $key=>$fornecedor)
        Interação Atual: {{$loop->iteration}}<br>
        Fornecedor: {{$fornecedor['nome']}}<br>
        Status: {{$fornecedor['status']}}<br>
        CNPJ: {{$fornecedor['cnpj']}}<br>
        Telefone: {{$fornecedor['telefone']}}<br>
        {{$loop->first ? 'Primeira interação' : ''}}<br>
        {{$loop->last ? 'Última interação' : ''}}<br>
        {{'Total de registros: ' . $loop->count}}<br>
        <hr>
    @empty
        Não existem fornecedores cadastrados!!!
    @endforelse
@endisset
{{----}}
