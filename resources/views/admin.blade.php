<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administración</title>
    <style>
        :root {
            --primary: #1a2980;
            --secondary: #26d0ce;
            --accent: #4a69bd;
            --text: #f1f2f6;
            --dark: #0c2461;
            --light: #dfe4ea;
            --danger: #eb2f06;
            --success: #009432;
            --warning: #ffa502;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background: linear-gradient(to bottom, #0f0c29, #302b63, #24243e);
            color: var(--text);
            min-height: 100vh;
            position: relative;
            overflow-x: hidden;
        }

        /* Fondo estrellado */
        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: radial-gradient(white, rgba(255, 255, 255, 0.2) 2px, transparent 2px);
            background-size: 50px 50px;
            z-index: -1;
            opacity: 0.2;
        }

        .container {
            display: flex;
            min-height: 100vh;
        }

        /* Sidebar */
        .sidebar {
            width: 250px;
            background: rgba(15, 12, 41, 0.95);
            border-right: 1px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
            display: flex;
            flex-direction: column;
            position: fixed;
            height: 100vh;
            z-index: 10;
        }

        .logo {
            padding: 20px;
            text-align: center;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            margin-bottom: 20px;
        }

        .logo h2 {
            color: var(--secondary);
            font-weight: 600;
            letter-spacing: 1px;
        }

        .nav-item {
            padding: 15px 20px;
            display: flex;
            align-items: center;
            color: var(--light);
            cursor: pointer;
            transition: all 0.3s ease;
            margin: 5px 0;
            border-left: 3px solid transparent;
        }

        .nav-item:hover {
            background: rgba(74, 105, 189, 0.2);
            border-left: 3px solid var(--secondary);
        }

        .nav-item.active {
            background: rgba(74, 105, 189, 0.3);
            border-left: 3px solid var(--secondary);
            color: var(--secondary);
        }

        .nav-item i {
            margin-right: 15px;
            font-size: 18px;
        }

        .user-info {
            margin-top: auto;
            padding: 15px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            display: flex;
            align-items: center;
        }

        .avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: var(--accent);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 10px;
            font-weight: bold;
        }

        /* Main Content */
        .main-content {
            flex: 1;
            margin-left: 250px;
            padding: 20px;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .header h1 {
            font-size: 28px;
            font-weight: 600;
            color: var(--secondary);
        }

        .actions {
            display: flex;
            gap: 15px;
        }

        .search-box {
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 5px;
            padding: 8px 15px;
            color: var(--text);
            width: 250px;
            font-size: 14px;
        }

        .btn {
            padding: 8px 20px;
            border-radius: 5px;
            border: none;
            color: var(--text);
            cursor: pointer;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 5px;
            transition: all 0.3s ease;
        }

        .btn-primary {
            background: var(--accent);
        }

        .btn-primary:hover {
            background: var(--primary);
        }

        .btn-success {
            background: var(--success);
        }

        .btn-danger {
            background: var(--danger);
        }

        .section {
            padding: 20px;
            background: rgba(26, 41, 128, 0.2);
            border-radius: 10px;
            backdrop-filter: blur(5px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            margin-bottom: 30px;
            display: none;
        }

        .section.active {
            display: block;
        }

        .section-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .metrics {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }

        .metric-card {
            background: rgba(26, 41, 128, 0.4);
            border-radius: 10px;
            padding: 20px;
            display: flex;
            flex-direction: column;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .metric-value {
            font-size: 32px;
            font-weight: 600;
            margin: 10px 0;
            color: var(--secondary);
        }

        .metric-label {
            color: var(--light);
            font-size: 14px;
        }

        /* Tables */
        .data-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .data-table th,
        .data-table td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .data-table th {
            background: rgba(26, 41, 128, 0.4);
            color: var(--secondary);
            font-weight: 500;
        }

        .data-table tr:hover {
            background: rgba(26, 41, 128, 0.3);
        }

        .action-cell {
            display: flex;
            gap: 10px;
        }

        .action-btn {
            background: none;
            border: none;
            color: var(--text);
            cursor: pointer;
            font-size: 16px;
            transition: all 0.2s;
        }

        .action-btn.edit:hover {
            color: var(--warning);
        }

        .action-btn.delete:hover {
            color: var(--danger);
        }

        /* Forms */
        .form-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.7);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 100;
            visibility: hidden;
            opacity: 0;
            transition: all 0.3s ease;
        }

        .form-overlay.active {
            visibility: visible;
            opacity: 1;
        }

        .form-container {
            width: 500px;
            max-width: 90%;
            background: linear-gradient(135deg, #1a2980, #26d0ce);
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            position: relative;
        }

        .form-title {
            margin-bottom: 20px;
            color: white;
            font-size: 22px;
            font-weight: 600;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-label {
            display: block;
            margin-bottom: 8px;
            color: var(--light);
            font-weight: 500;
        }

        .form-input {
            width: 100%;
            padding: 10px 15px;
            border-radius: 5px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            background: rgba(255, 255, 255, 0.1);
            color: white;
            font-size: 14px;
        }

        .form-select {
            width: 100%;
            padding: 10px 15px;
            border-radius: 5px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            background: rgba(255, 255, 255, 0.1);
            color: white;
            font-size: 14px;
        }

        .form-actions {
            display: flex;
            justify-content: flex-end;
            gap: 15px;
            margin-top: 30px;
        }

        .close-form {
            position: absolute;
            top: 15px;
            right: 15px;
            background: none;
            border: none;
            color: white;
            font-size: 20px;
            cursor: pointer;
        }

        .badge {
            padding: 5px 10px;
            border-radius: 12px;
            font-size: 12px;
            font-weight: 500;
        }

        .badge-primary {
            background: var(--primary);
            color: white;
        }

        .badge-success {
            background: var(--success);
            color: white;
        }

        .badge-warning {
            background: var(--warning);
            color: var(--dark);
        }

        .badge-danger {
            background: var(--danger);
            color: white;
        }

        .pagination {
            display: flex;
            justify-content: center;
            margin-top: 20px;
            gap: 5px;
        }

        .pagination button {
            width: 35px;
            height: 35px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            color: var(--text);
            border-radius: 5px;
            cursor: pointer;
            transition: all 0.3s;
        }

        .pagination button:hover,
        .pagination button.active {
            background: var(--accent);
        }

        .status-indicator {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            display: inline-block;
            margin-right: 5px;
        }

        .status-online {
            background: var(--success);
        }

        .status-offline {
            background: var(--danger);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .sidebar {
                width: 70px;
                overflow: hidden;
            }

            .sidebar .logo h2,
            .sidebar .nav-item span,
            .sidebar .user-info span {
                display: none;
            }

            .nav-item {
                justify-content: center;
                padding: 15px 0;
            }

            .nav-item i {
                margin: 0;
                font-size: 20px;
            }

            .main-content {
                margin-left: 70px;
            }

            .metrics {
                grid-template-columns: 1fr;
            }
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <div class="container">
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="logo">
                <h2>GameAdmin</h2>
            </div>
            <div class="nav-item active" data-section="dashboard">
                <i class="fas fa-tachometer-alt"></i>
                <span>Dashboard</span>
            </div>
            <div class="nav-item" data-section="users">
                <i class="fas fa-users"></i>
                <span>Usuarios</span>
            </div>
            <div class="nav-item" data-section="games">
                <i class="fas fa-gamepad"></i>
                <span>Juegos</span>
            </div>
            <div class="nav-item" data-section="categories">
                <i class="fas fa-tags"></i>
                <span>Categorías</span>
            </div>
            <div class="nav-item" data-section="orders">
                <i class="fas fa-shopping-cart"></i>
                <span>Pedidos</span>
            </div>
            <div class="user-info">
                <div class="avatar">A</div>
                <span>Admin</span>
            </div>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <!-- Dashboard Section -->
            <div class="section active" id="dashboard">
                <div class="header">
                    <h1>Dashboard</h1>
                    <div class="actions">
                        <input type="text" class="search-box" placeholder="Buscar...">
                    </div>
                </div>

                <div class="metrics">
                    <div class="metric-card">
                        <div class="metric-label">Total Usuarios</div>
                        <div class="metric-value">1,249</div>
                        <div class="metric-stats">+12% este mes</div>
                    </div>
                    <div class="metric-card">
                        <div class="metric-label">Total Juegos</div>
                        <div class="metric-value">354</div>
                        <div class="metric-stats">+8 nuevos juegos</div>
                    </div>
                    <div class="metric-card">
                        <div class="metric-label">Pedidos Recientes</div>
                        <div class="metric-value">87</div>
                        <div class="metric-stats">+23% este mes</div>
                    </div>
                    <div class="metric-card">
                        <div class="metric-label">Categorías</div>
                        <div class="metric-value">28</div>
                        <div class="metric-stats">+3 nuevas categorías</div>
                    </div>
                </div>

                <div class="section-header">
                    <h2>Actividad Reciente</h2>
                </div>

                <table class="data-table">
                    <thead>
                        <tr>
                            <th>Usuario</th>
                            <th>Acción</th>
                            <th>Fecha</th>
                            <th>Detalles</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Mario Gonzalez</td>
                            <td>Compró un juego</td>
                            <td>Hoy, 14:32</td>
                            <td>Call of Duty: Modern Warfare</td>
                        </tr>
                        <tr>
                            <td>Laura Pérez</td>
                            <td>Registrado</td>
                            <td>Hoy, 12:08</td>
                            <td>Usuario nuevo</td>
                        </tr>
                        <tr>
                            <td>Admin</td>
                            <td>Añadió un juego</td>
                            <td>Ayer, 18:45</td>
                            <td>FIFA 2025</td>
                        </tr>
                        <tr>
                            <td>Carlos Ruiz</td>
                            <td>Modificó perfil</td>
                            <td>Ayer, 16:22</td>
                            <td>Actualización de email</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Users Section -->
            <div class="section" id="users">
                <div class="header">
                    <h1>Gestión de Usuarios</h1>
                    <div class="actions">
                        <input type="text" class="search-box" placeholder="Buscar usuarios...">
                        <button class="btn btn-primary" id="add-user-btn"><i class="fas fa-plus"></i> Nuevo
                            Usuario</button>
                    </div>
                </div>

                <table class="data-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Rol</th>
                            <th>Fecha registro</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Ana Martínez</td>
                            <td>ana@example.com</td>
                            <td><span class="badge badge-primary">Usuario</span></td>
                            <td>15/03/2025</td>
                            <td><span class="status-indicator status-online"></span> Activo</td>
                            <td class="action-cell">
                                <button class="action-btn edit"><i class="fas fa-edit"></i></button>
                                <button class="action-btn delete"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Juan García</td>
                            <td>juan@example.com</td>
                            <td><span class="badge badge-success">Administrador</span></td>
                            <td>22/01/2025</td>
                            <td><span class="status-indicator status-online"></span> Activo</td>
                            <td class="action-cell">
                                <button class="action-btn edit"><i class="fas fa-edit"></i></button>
                                <button class="action-btn delete"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Lucía Rodríguez</td>
                            <td>lucia@example.com</td>
                            <td><span class="badge badge-primary">Usuario</span></td>
                            <td>05/04/2025</td>
                            <td><span class="status-indicator status-online"></span> Activo</td>
                            <td class="action-cell">
                                <button class="action-btn edit"><i class="fas fa-edit"></i></button>
                                <button class="action-btn delete"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Pedro López</td>
                            <td>pedro@example.com</td>
                            <td><span class="badge badge-primary">Usuario</span></td>
                            <td>18/02/2025</td>
                            <td><span class="status-indicator status-offline"></span> Inactivo</td>
                            <td class="action-cell">
                                <button class="action-btn edit"><i class="fas fa-edit"></i></button>
                                <button class="action-btn delete"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <div class="pagination">
                    <button><i class="fas fa-angle-left"></i></button>
                    <button class="active">1</button>
                    <button>2</button>
                    <button>3</button>
                    <button><i class="fas fa-angle-right"></i></button>
                </div>
            </div>

            <!-- Games Section -->
            <div class="section" id="games">
                <div class="header">
                    <h1>Gestión de Juegos</h1>
                    <div class="actions">
                        <input type="text" class="search-box" placeholder="Buscar juegos...">
                        <button class="btn btn-primary" id="add-game-btn"><i class="fas fa-plus"></i> Nuevo
                            Juego</button>
                    </div>
                </div>

                <table class="data-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Título</th>
                            <th>Categoría</th>
                            <th>Precio</th>
                            <th>Stock</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>The Last of Us Part II</td>
                            <td>Acción, Aventura</td>
                            <td>59.99 €</td>
                            <td>45</td>
                            <td><span class="badge badge-success">Disponible</span></td>
                            <td class="action-cell">
                                <button class="action-btn edit"><i class="fas fa-edit"></i></button>
                                <button class="action-btn delete"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Cyberpunk 2077</td>
                            <td>RPG, Sci-Fi</td>
                            <td>49.99 €</td>
                            <td>23</td>
                            <td><span class="badge badge-success">Disponible</span></td>
                            <td class="action-cell">
                                <button class="action-btn edit"><i class="fas fa-edit"></i></button>
                                <button class="action-btn delete"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>FIFA 2025</td>
                            <td>Deportes</td>
                            <td>69.99 €</td>
                            <td>78</td>
                            <td><span class="badge badge-success">Disponible</span></td>
                            <td class="action-cell">
                                <button class="action-btn edit"><i class="fas fa-edit"></i></button>
                                <button class="action-btn delete"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Assassin's Creed: Valhalla</td>
                            <td>Acción, RPG</td>
                            <td>39.99 €</td>
                            <td>0</td>
                            <td><span class="badge badge-danger">Agotado</span></td>
                            <td class="action-cell">
                                <button class="action-btn edit"><i class="fas fa-edit"></i></button>
                                <button class="action-btn delete"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <div class="pagination">
                    <button><i class="fas fa-angle-left"></i></button>
                    <button class="active">1</button>
                    <button>2</button>
                    <button>3</button>
                    <button><i class="fas fa-angle-right"></i></button>
                </div>
            </div>

            <!-- Categories Section -->
            <div class="section" id="categories">
                <div class="header">
                    <h1>Gestión de Categorías</h1>
                    <div class="actions">
                        <input type="text" class="search-box" placeholder="Buscar categorías...">
                        <button class="btn btn-primary" id="add-category-btn"><i class="fas fa-plus"></i> Nueva
                            Categoría</button>
                    </div>
                </div>

                <table class="data-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th>Total Juegos</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Acción</td>
                            <td>Juegos de acción y combate</td>
                            <td>45</td>
                            <td class="action-cell">
                                <button class="action-btn edit"><i class="fas fa-edit"></i></button>
                                <button class="action-btn delete"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Aventura</td>
                            <td>Juegos basados en historia y exploración</td>
                            <td>32</td>
                            <td class="action-cell">
                                <button class="action-btn edit"><i class="fas fa-edit"></i></button>
                                <button class="action-btn delete"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>RPG</td>
                            <td>Juegos de rol</td>
                            <td>27</td>
                            <td class="action-cell">
                                <button class="action-btn edit"><i class="fas fa-edit"></i></button>
                                <button class="action-btn delete"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Deportes</td>
                            <td>Juegos de simulación deportiva</td>
                            <td>18</td>
                            <td class="action-cell">
                                <button class="action-btn edit"><i class="fas fa-edit"></i></button>
                                <button class="action-btn delete"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Orders Section -->
            <div class="section" id="orders">
                <div class="header">
                    <h1>Gestión de Pedidos</h1>
                    <div class="actions">
                        <input type="text" class="search-box" placeholder="Buscar pedidos...">
                    </div>
                </div>

                <table class="data-table">
                    <thead>
                        <tr>
                            <th>ID Pedido</th>
                            <th>Cliente</th>
                            <th>Fecha</th>
                            <th>Total</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>#ORD-2025-001</td>
                            <td>Ana Martínez</td>
                            <td>18/05/2025</td>
                            <td>59.99 €</td>
                            <td><span class="badge badge-warning">Pendiente</span></td>
                            <td class="action-cell">
                                <button class="action-btn edit"><i class="fas fa-eye"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>#ORD-2025-002</td>
                            <td>Pedro López</td>
                            <td>17/05/2025</td>
                            <td>119.98 €</td>
                            <td><span class="badge badge-success">Completado</span></td>
                            <td class="action-cell">
                                <button class="action-btn edit"><i class="fas fa-eye"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>#ORD-2025-003</td>
                            <td>Lucía Rodríguez</td>
                            <td>16/05/2025</td>
                            <td>69.99 €</td>
                            <td><span class="badge badge-primary">Enviado</span></td>
                            <td class="action-cell">
                                <button class="action-btn edit"><i class="fas fa-eye"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>#ORD-2025-004</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script></script>
</body>

</html>
