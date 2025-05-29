<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administración</title>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <!-- Iconos de Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <div class="container">
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="back-arrow">
                <a href="{{ route('juego.index') }}" class="back-link">
                    <i class="fas fa-arrow-left"></i> Volver al Inicio
                </a>
            </div>
            <div class="logo">
                <a href="{{ asset('juego') }}">
                    <img src="{{ asset('img/logoblanco.png') }}" alt="Logo de la web">
                </a>
            </div>
            <div class="nav-item active" data-section="dashboard">
                <i class="fas fa-tachometer-alt"></i>
                <span>Reciente</span>
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
                <div class="avatar"><i class="fas fa-user"></i></div>
                <span>{{ Auth::user()->name }}</span>
            </div>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <!-- Recientes Section -->
            <div class="section active" id="dashboard">
                <div class="header">
                    <h1>Reciente</h1>

                </div>

                <div class="metrics">
                    <div class="metric-card">
                        <div class="metric-label">Total Usuarios</div>
                        <div class="metric-value">{{ $usuarios->count() }}</div>
                        <div class="metric-stats">+{{ $usuariosRecientes->count() }} nuevos usuarios</div>
                    </div>
                    <div class="metric-card">
                        <div class="metric-label">Total Juegos</div>
                        <div class="metric-value">{{ $juegos->count() }}</div>
                        <div class="metric-stats">+{{ $juegosRecientes->count() }} nuevos juegos</div>
                    </div>
                    <div class="metric-card">
                        <div class="metric-label">Pedidos Hechos</div>
                        <div class="metric-value">{{ $pedidos->count() }}</div>
                        <div class="metric-stats">+{{ $pedidosRecientes->count() }} nuevos pedidos</div>
                    </div>
                    <div class="metric-card">
                        <div class="metric-label">Categorías</div>
                        <div class="metric-value">{{ $categorias->count() }}</div>
                        <div class="metric-stats">+{{ $categoriasRecientes->count() }} nuevas categorías</div>
                    </div>
                </div>

            </div>

            <!-- Users Section -->
            <div class="section" id="users">
                <div class="header">
                    <h1>Gestión de Usuarios</h1>
                </div>

                <div class="table-container">
                    <table class="data-table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Email</th>
                                <th>Rol</th>
                                <th>Fecha registro</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody id="users-table-body">
                            @foreach ($usuarios as $usuario)
                                <tr>
                                    <td>{{ $usuario->id }}</td>
                                    <td class="td-name">{{ $usuario->name }}</td>
                                    <td class="td-email">{{ $usuario->email }}</td>
                                    <td class="td-rol">{{ $usuario->rol->nombre }}</td>
                                    <td>{{ $usuario->created_at->format('d/m/Y') }}</td>
                                    <td class="action-cell">
                                        <a href="{{ route('editUsuario', $usuario) }}">
                                            <button class="action-btn edit"><i class="fas fa-edit"></i></button>
                                        </a>
                                        <form action="{{ route('destroyUsuario', $usuario) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="action-btn delete"><i
                                                    class="fas fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Games Section -->
            <div class="section" id="games">
                <div class="header">
                    <h1>Gestión de Juegos</h1>
                </div>

                <div class="table-container">
                    <table class="data-table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Descripción</th>
                                <th>Precio</th>
                                <th>nota</th>
                                <th>Categoría</th>
                                <th>Fecha lanzamiento</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody id="games-table-body">
                            @foreach ($juegos as $juego)
                                <tr>
                                    <td>{{ $juego->id }}</td>
                                    <td>{{ $juego->nombre }}</td>
                                    <td>{{ Str::limit($juego->descripcion, 30) }}</td>
                                    <td>{{ $juego->precio }}€</td>
                                    <td><i class="fas fa-star"></i>{{ $juego->nota }}</td>
                                    <td>{{ $juego->categoria->nombre ?? 'Sin categoría' }}</td>
                                    <td>{{ $juego->created_at->format('d/m/Y') }}</td>
                                    <td class="action-cell">
                                        <a href="{{ route('editJuego', $juego) }}">
                                            <button class="action-btn edit"><i class="fas fa-edit"></i></button>
                                        </a>
                                        <form action="{{ route('destroyJuego', $juego) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="action-btn delete"><i
                                                    class="fas fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- Categories Section -->
            <div class="section" id="categories">
                <div class="header">
                    <h1>Gestión de Categorías</h1>
                    <div class="actions">
                        <a href="{{ route('createCategoria') }}" class="library-btn">
                            <button class="btn btn-primary" id="add-category-btn">
                                <i class="fas fa-plus"></i> Nueva Categoría
                            </button>
                        </a>
                    </div>
                </div>

                <div class="table-container">
                    <table class="data-table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Fecha de creación</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody id="categories-table-body">
                            @foreach ($categorias as $categoria)
                                <tr>
                                    <td>{{ $categoria->id }}</td>
                                    <td>{{ $categoria->nombre }}</td>
                                    <td>{{ $categoria->created_at->format('d/m/Y') }}</td>
                                    <td class="action-cell">
                                        <a href="{{ route('editCategoria', $categoria) }}">
                                            <button class="action-btn edit"><i class="fas fa-edit"></i></button>
                                        </a>
                                        <form action="{{ route('destroyCategoria', $categoria) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="action-btn delete"><i
                                                    class="fas fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- Orders Section -->
            <div class="section" id="orders">
                <div class="header">
                    <h1>Lista de Pedidos</h1>
                    <div class="actions">
                    </div>
                </div>

                <div class="table-container">
                    <table class="data-table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Usuario</th>
                                <th>Juego</th>
                                <th>Precio</th>
                                <th>Fecha</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody id="orders-table-body">
                            @foreach ($pedidos as $pedido)
                                <tr>
                                    <td>{{ $pedido->id }}</td>
                                    <td>{{ $pedido->usuario->name }}</td>
                                    <td>{{ $pedido->juego->nombre }}</td>
                                    <td>{{ $pedido->precio }}€</td>
                                    <td>{{ $pedido->created_at->format('d/m/Y') }}</td>
                                    <td class="action-cell">
                                        <form action="{{ route('destroyPedido', $pedido) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="action-btn delete"><i
                                                    class="fas fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>

    <script src="{{ asset('js/admin.js') }}"></script>

</body>

</html>
