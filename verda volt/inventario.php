<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Garagem | Inventário de Carros</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        :root {
            --primary: #1a1a2e;
            --secondary: #16213e;
            --accent: #0f3460;
            --highlight: #e94560;
            --light: #f1f1f1;
        }
        
        body {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: var(--light);
            min-height: 100vh;
            padding-bottom: 50px;
        }
        
        .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        header {
            background-color: rgba(10, 10, 20, 0.8);
            padding: 20px 0;
            position: sticky;
            top: 0;
            z-index: 100;
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .logo {
            display: flex;
            align-items: center;
            gap: 15px;
        }
        
        .logo i {
            font-size: 2.5rem;
            color: var(--highlight);
        }
        
        .logo h1 {
            font-size: 1.8rem;
            font-weight: 600;
        }
        
        .user-info {
            display: flex;
            align-items: center;
            gap: 15px;
        }
        
        .user-info img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            border: 2px solid var(--highlight);
        }
        
        .stats {
            display: flex;
            gap: 30px;
            padding: 25px 0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .stat-card {
            background: rgba(255, 255, 255, 0.05);
            border-radius: 12px;
            padding: 20px;
            flex: 1;
            display: flex;
            align-items: center;
            gap: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease;
        }
        
        .stat-card:hover {
            transform: translateY(-5px);
        }
        
        .stat-card i {
            font-size: 2.2rem;
            color: var(--highlight);
        }
        
        .stat-info h3 {
            font-size: 1.5rem;
            margin-bottom: 5px;
        }
        
        .stat-info p {
            color: #aaa;
            font-size: 0.9rem;
        }
        
        .garage-title {
            padding: 30px 0 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .garage-title h2 {
            font-size: 2rem;
            position: relative;
        }
        
        .garage-title h2::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 60px;
            height: 3px;
            background-color: var(--highlight);
        }
        
        .filters {
            display: flex;
            gap: 15px;
        }
        
        .filter-btn {
            background: rgba(255, 255, 255, 0.08);
            border: none;
            color: var(--light);
            padding: 10px 20px;
            border-radius: 30px;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .filter-btn:hover, .filter-btn.active {
            background: var(--highlight);
        }
        
        .inventory-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
            gap: 30px;
            margin-top: 30px;
        }
        
        .car-card {
            background: linear-gradient(145deg, rgba(22, 33, 62, 0.7), rgba(26, 26, 46, 0.7));
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            transition: all 0.3s ease;
            position: relative;
        }
        
        .car-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.4);
        }
        
        .car-image {
            height: 220px;
            overflow: hidden;
            position: relative;
        }
        
        .car-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        
        .car-card:hover .car-image img {
            transform: scale(1.1);
        }
        
        .car-badge {
            position: absolute;
            top: 15px;
            right: 15px;
            background: var(--highlight);
            color: white;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 0.9rem;
            font-weight: 600;
        }
        
        .car-content {
            padding: 25px;
        }
        
        .car-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
        }
        
        .car-model {
            font-size: 1.6rem;
            font-weight: 700;
        }
        
        .car-year {
            background: var(--accent);
            color: #ddd;
            padding: 5px 12px;
            border-radius: 15px;
            font-size: 0.9rem;
        }
        
        .car-specs {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
            margin: 20px 0;
        }
        
        .spec {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .spec i {
            color: var(--highlight);
            font-size: 1.2rem;
        }
        
        .car-actions {
            display: flex;
            gap: 10px;
            margin-top: 20px;
        }
        
        .action-btn {
            flex: 1;
            padding: 12px;
            border: none;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .action-btn.primary {
            background: var(--highlight);
            color: white;
        }
        
        .action-btn.secondary {
            background: rgba(255, 255, 255, 0.1);
            color: white;
        }
        
        .action-btn:hover {
            opacity: 0.9;
            transform: scale(1.03);
        }
        
        .no-cars {
            grid-column: 1 / -1;
            text-align: center;
            padding: 50px;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 15px;
            margin-top: 20px;
        }
        
        .no-cars i {
            font-size: 3rem;
            color: var(--highlight);
            margin-bottom: 20px;
        }
        
        .no-cars h3 {
            font-size: 1.8rem;
            margin-bottom: 15px;
        }
        
        @media (max-width: 768px) {
            .stats {
                flex-direction: column;
            }
            
            .garage-title {
                flex-direction: column;
                align-items: flex-start;
                gap: 20px;
            }
            
            .filters {
                width: 100%;
                overflow-x: auto;
                padding-bottom: 10px;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <div class="header-content">
                <div class="logo">
                    <i class="fas fa-car-garage"></i>
                    <h1>Minha Garagem</h1>
                </div>
                <div class="user-info">
                    <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="User Profile">
                    <div>
                        <h3>Carlos Silva</h3>
                        <p>Membro Premium</p>
                    </div>
                </div>
            </div>
        </div>
    </header>
    
    <main class="container">
        <div class="stats">
            <div class="stat-card">
                <i class="fas fa-car"></i>
                <div class="stat-info">
                    <h3>7</h3>
                    <p>Carros na Garagem</p>
                </div>
            </div>
            <div class="stat-card">
                <i class="fas fa-trophy"></i>
                <div class="stat-info">
                    <h3>3</h3>
                    <p>Coleções Completas</p>
                </div>
            </div>
            <div class="stat-card">
                <i class="fas fa-star"></i>
                <div class="stat-info">
                    <h3>24</h3>
                    <p>Conquistas</p>
                </div>
            </div>
        </div>
        
        <div class="garage-title">
            <h2>Meu Inventário</h2>
            <div class="filters">
                <button class="filter-btn active">Todos</button>
                <button class="filter-btn">Esportivos</button>
                <button class="filter-btn">SUV</button>
                <button class="filter-btn">Clássicos</button>
                <button class="filter-btn">Elétricos</button>
            </div>
        </div>
        
        <div class="inventory-grid">
            <!-- Carro 1 -->
            <div class="car-card">
                <div class="car-image">
                    <img src="https://images.unsplash.com/photo-1544829099-b9a0c07fad1a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=80" alt="Porsche 911">
                    <div class="car-badge">Coleção Esportiva</div>
                </div>
                <div class="car-content">
                    <div class="car-header">
                        <h3 class="car-model">Porsche 911</h3>
                        <span class="car-year">2023</span>
                    </div>
                    <p>O lendário esportivo alemão com design atemporal e desempenho excepcional.</p>
                    
                    <div class="car-specs">
                        <div class="spec">
                            <i class="fas fa-horse-head"></i>
                            <span>450 HP</span>
                        </div>
                        <div class="spec">
                            <i class="fas fa-tachometer-alt"></i>
                            <span>293 km/h</span>
                        </div>
                        <div class="spec">
                            <i class="fas fa-gas-pump"></i>
                            <span>Gasolina</span>
                        </div>
                        <div class="spec">
                            <i class="fas fa-cogs"></i>
                            <span>Automático</span>
                        </div>
                    </div>
                    
                    <div class="car-actions">
                        <button class="action-btn primary">Detalhes</button>
                        <button class="action-btn secondary">Vender</button>
                    </div>
                </div>
            </div>
            
            <!-- Carro 2 -->
            <div class="car-card">
                <div class="car-image">
                    <img src="https://images.unsplash.com/photo-1605559424843-9e4c228bf1c2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=80" alt="Range Rover">
                    <div class="car-badge">Coleção Luxo</div>
                </div>
                <div class="car-content">
                    <div class="car-header">
                        <h3 class="car-model">Range Rover Velar</h3>
                        <span class="car-year">2022</span>
                    </div>
                    <p>SUV de luxo britânico que combina elegância sofisticada com capacidade off-road.</p>
                    
                    <div class="car-specs">
                        <div class="spec">
                            <i class="fas fa-horse-head"></i>
                            <span>340 HP</span>
                        </div>
                        <div class="spec">
                            <i class="fas fa-tachometer-alt"></i>
                            <span>250 km/h</span>
                        </div>
                        <div class="spec">
                            <i class="fas fa-gas-pump"></i>
                            <span>Diesel</span>
                        </div>
                        <div class="spec">
                            <i class="fas fa-cogs"></i>
                            <span>Automático</span>
                        </div>
                    </div>
                    
                    <div class="car-actions">
                        <button class="action-btn primary">Detalhes</button>
                        <button class="action-btn secondary">Vender</button>
                    </div>
                </div>
            </div>
            
            <!-- Carro 3 -->
            <div class="car-card">
                <div class="car-image">
                    <img src="https://images.unsplash.com/photo-1553440569-bcc63803a83d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=80" alt="Mustang">
                </div>
                <div class="car-content">
                    <div class="car-header">
                        <h3 class="car-model">Ford Mustang GT</h3>
                        <span class="car-year">2021</span>
                    </div>
                    <p>O ícone americano com motor V8 e design agressivo que domina as estradas.</p>
                    
                    <div class="car-specs">
                        <div class="spec">
                            <i class="fas fa-horse-head"></i>
                            <span>480 HP</span>
                        </div>
                        <div class="spec">
                            <i class="fas fa-tachometer-alt"></i>
                            <span>260 km/h</span>
                        </div>
                        <div class="spec">
                            <i class="fas fa-gas-pump"></i>
                            <span>Gasolina</span>
                        </div>
                        <div class="spec">
                            <i class="fas fa-cogs"></i>
                            <span>Manual</span>
                        </div>
                    </div>
                    
                    <div class="car-actions">
                        <button class="action-btn primary">Detalhes</button>
                        <button class="action-btn secondary">Vender</button>
                    </div>
                </div>
            </div>
            
            <!-- Carro 4 -->
            <div class="car-card">
                <div class="car-image">
                    <img src="https://images.unsplash.com/photo-1592198084033-aade902d1aae?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=80" alt="Tesla">
                    <div class="car-badge">Elétrico</div>
                </div>
                <div class="car-content">
                    <div class="car-header">
                        <h3 class="car-model">Tesla Model S</h3>
                        <span class="car-year">2023</span>
                    </div>
                    <p>O sedan elétrico de alto desempenho que redefine o conceito de carro do futuro.</p>
                    
                    <div class="car-specs">
                        <div class="spec">
                            <i class="fas fa-bolt"></i>
                            <span>1,020 HP</span>
                        </div>
                        <div class="spec">
                            <i class="fas fa-tachometer-alt"></i>
                            <span>322 km/h</span>
                        </div>
                        <div class="spec">
                            <i class="fas fa-plug"></i>
                            <span>Elétrico</span>
                        </div>
                        <div class="spec">
                            <i class="fas fa-road"></i>
                            <span>640 km</span>
                        </div>
                    </div>
                    
                    <div class="car-actions">
                        <button class="action-btn primary">Detalhes</button>
                        <button class="action-btn secondary">Vender</button>
                    </div>
                </div>
            </div>
            
            <!-- Carro 5 -->
            <div class="car-card">
                <div class="car-image">
                    <img src="https://images.unsplash.com/photo-1617814076231-2c2fabd166ea?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=80" alt="BMW">
                </div>
                <div class="car-content">
                    <div class="car-header">
                        <h3 class="car-model">BMW M5 Competition</h3>
                        <span class="car-year">2022</span>
                    </div>
                    <p>Sedan esportivo alemão que combina luxo, conforto e desempenho de supercarro.</p>
                    
                    <div class="car-specs">
                        <div class="spec">
                            <i class="fas fa-horse-head"></i>
                            <span>625 HP</span>
                        </div>
                        <div class="spec">
                            <i class="fas fa-tachometer-alt"></i>
                            <span>305 km/h</span>
                        </div>
                        <div class="spec">
                            <i class="fas fa-gas-pump"></i>
                            <span>Gasolina</span>
                        </div>
                        <div class="spec">
                            <i class="fas fa-cogs"></i>
                            <span>Automático</span>
                        </div>
                    </div>
                    
                    <div class="car-actions">
                        <button class="action-btn primary">Detalhes</button>
                        <button class="action-btn secondary">Vender</button>
                    </div>
                </div>
            </div>
            
            <!-- Carro 6 -->
            <div class="car-card">
                <div class="car-image">
                    <img src="https://images.unsplash.com/photo-1603584173870-7f23fdae1b7a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=80" alt="Mercedes">
                    <div class="car-badge">Coleção Clássica</div>
                </div>
                <div class="car-content">
                    <div class="car-header">
                        <h3 class="car-model">Mercedes 300SL</h3>
                        <span class="car-year">1957</span>
                    </div>
                    <p>O lendário "Gullwing" com portas asa de gaivota, um ícone do design automotivo.</p>
                    
                    <div class="car-specs">
                        <div class="spec">
                            <i class="fas fa-horse-head"></i>
                            <span>215 HP</span>
                        </div>
                        <div class="spec">
                            <i class="fas fa-tachometer-alt"></i>
                            <span>250 km/h</span>
                        </div>
                        <div class="spec">
                            <i class="fas fa-gas-pump"></i>
                            <span>Gasolina</span>
                        </div>
                        <div class="spec">
                            <i class="fas fa-cogs"></i>
                            <span>Manual</span>
                        </div>
                    </div>
                    
                    <div class="car-actions">
                        <button class="action-btn primary">Detalhes</button>
                        <button class="action-btn secondary">Vender</button>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script>
        // Simulação de interatividade com os botões de filtro
        document.querySelectorAll('.filter-btn').forEach(button => {
            button.addEventListener('click', function() {
                document.querySelectorAll('.filter-btn').forEach(btn => {
                    btn.classList.remove('active');
                });
                this.classList.add('active');
            });
        });
        
        // Simulação de interatividade com os botões de ação
        document.querySelectorAll('.action-btn.primary').forEach(button => {
            button.addEventListener('click', function() {
                const carModel = this.closest('.car-card').querySelector('.car-model').textContent;
                alert(`Detalhes do ${carModel} serão exibidos!`);
            });
        });
        
        document.querySelectorAll('.action-btn.secondary').forEach(button => {
            button.addEventListener('click', function() {
                const carModel = this.closest('.car-card').querySelector('.car-model').textContent;
                if(confirm(`Tem certeza que deseja vender seu ${carModel}?`)) {
                    alert(`${carModel} colocado à venda!`);
                }
            });
        });
    </script>
</body>
</html>