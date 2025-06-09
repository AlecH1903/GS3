<?php
// Buscar informações do usuário
$cpf = $_SESSION['cpf'];
$sqlUser = "SELECT * FROM usuarios WHERE cpf='$cpf'";
$resultUser = mysqli_query($conexao, $sqlUser);
$user = mysqli_fetch_assoc($resultUser);

// Buscar compras do usuário
$sqlCompras = "SELECT * FROM compras WHERE id_usuario='$cpf'";
$resultCompras = mysqli_query($conexao, $sqlCompras);
$compras = [];
while ($compra = mysqli_fetch_assoc($resultCompras)) {
    $compras[] = $compra;
}

// Mapeamento de modelos para informações detalhadas
$carrosInfo = [
    'rwd3' => [
        'nome' => 'Model 3 RWD',
        'imagem' => 'm3/vendam3.jpg',
        'descricao' => 'Sedã elétrico de alto desempenho com design moderno e eficiência energética.',
        'potencia' => '283 HP',
        'vel_max' => '140 mph',
        'combustivel' => 'Elétrico',
        'transmissao' => 'Automático',
        'ano' => '2023'
    ],
    'long_range3' => [
        'nome' => 'Model 3 Long Range',
        'imagem' => 'm3/vendam3.jpg',
        'descricao' => 'Versão com maior autonomia do sedã elétrico mais popular.',
        'potencia' => '353 HP',
        'vel_max' => '145 mph',
        'combustivel' => 'Elétrico',
        'transmissao' => 'Automático',
        'ano' => '2023'
    ],
    'performance3' => [
        'nome' => 'Model 3 Performance',
        'imagem' => 'm3/vendam3.jpg',
        'descricao' => 'Versão esportiva com aceleração impressionante e desempenho de track.',
        'potencia' => '450 HP',
        'vel_max' => '162 mph',
        'combustivel' => 'Elétrico',
        'transmissao' => 'Automático',
        'ano' => '2023'
    ],
    'rwds' => [
        'nome' => 'Model S RWD',
        'imagem' => 'ms/carroms.jpg',
        'descricao' => 'Sedã de luxo com tecnologia avançada e desempenho excepcional.',
        'potencia' => '870HP',
        'vel_max' => '155 mph',
        'combustivel' => 'Elétrico',
        'transmissao' => 'Automático',
        'ano' => '2023'
    ],
    'long_ranges' => [
        'nome' => 'Model S Long Range',
        'imagem' => 'ms/carroms.jpg',
        'descricao' => 'Versão com maior autonomia do sedã premium de alto desempenho.',
        'potencia' => '1,080 HP',
        'vel_max' => '163 mph',
        'combustivel' => 'Elétrico',
        'transmissao' => 'Automático',
        'ano' => '2023'
    ],
    'performances' => [
        'nome' => 'Model S Plaid',
        'imagem' => 'ms/carroms.jpg',
        'descricao' => 'A versão mais potente com tecnologia de ponta e aceleração recorde.',
        'potencia' => '1,200 HP',
        'vel_max' => '200 mph',
        'combustivel' => 'Elétrico',
        'transmissao' => 'Automático',
        'ano' => '2023'
    ],
    'rwdX' => [
        'nome' => 'Model X RWD',
        'imagem' => 'mx/carrox.jpg',
        'descricao' => 'SUV elétrico com portas Falcon Wing e espaço amplo para família.',
        'potencia' => '670 HP',
        'vel_max' => '155 mph',
        'combustivel' => 'Elétrico',
        'transmissao' => 'Automático',
        'ano' => '2023'
    ],
    'long_rangeX' => [
        'nome' => 'Model X Long Range',
        'imagem' => 'mx/carrox.jpg',
        'descricao' => 'Versão com maior autonomia do SUV premium com tecnologia avançada.',
        'potencia' => '750 HP',
        'vel_max' => '163 mph',
        'combustivel' => 'Elétrico',
        'transmissao' => 'Automático',
        'ano' => '2023'
    ],
    'performanceX' => [
        'nome' => 'Model X Plaid',
        'imagem' => 'mx/carrox.jpg',
        'descricao' => 'SUV mais rápido do mundo com desempenho e tecnologia incomparáveis.',
        'potencia' => '1,020 HP',
        'vel_max' => '163 mph',
        'combustivel' => 'Elétrico',
        'transmissao' => 'Automático',
        'ano' => '2023'
    ],
    'rwdY' => [
        'nome' => 'Model Y RWD',
        'imagem' => 'my/carromy.jpg',
        'descricao' => 'SUV compacto elétrico com espaço versátil e eficiência energética.',
        'potencia' => '283 HP',
        'vel_max' => '135 mph',
        'combustivel' => 'Elétrico',
        'transmissao' => 'Automático',
        'ano' => '2023'
    ],
    'long_rangeY' => [
        'nome' => 'Model Y Long Range',
        'imagem' => 'my/carromy.jpg',
        'descricao' => 'Versão com maior autonomia do SUV compacto mais vendido.',
        'potencia' => '353 HP',
        'vel_max' => '145 mph',
        'combustivel' => 'Elétrico',
        'transmissao' => 'Automático',
        'ano' => '2023'
    ],
    'performanceY' => [
        'nome' => 'Model Y Performance',
        'imagem' => 'my/carromy.jpg',
        'descricao' => 'SUV compacto com desempenho esportivo e tecnologia avançada.',
        'potencia' => '450 HP',
        'vel_max' => '155 mph',
        'combustivel' => 'Elétrico',
        'transmissao' => 'Automático',
        'ano' => '2023'
    ],
];

// Contar coleções completas (exemplo simplificado)
$colecoesCompletas = 0;
$modelosComprados = [];
foreach ($compras as $compra) {
    $modeloBase = substr($compra['modelo'], 0, -1);
    if (!in_array($modeloBase, $modelosComprados)) {
        $modelosComprados[] = $modeloBase;
        $colecoesCompletas++;
    }
}
$colecoesCompletas = min($colecoesCompletas, 3); // Limite máximo de 3 para o exemplo
?>