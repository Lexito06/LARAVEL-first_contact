<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Juego</title>
    <link rel="stylesheet" href="{{ asset('css/show.css') }}">
    <!-- Iconos de Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>
    <div class="stars" id="stars"></div>

    <div class="container">
        <div class="back-button-div">
            <a href="{{ route('tienda') }}" class="back-button"><i class="fas fa-bag-shopping"></i> Tienda</a>
            <a href="{{ route('juego.index') }}" class="back-button"><i class="fas fa-house"></i> Página principal</a>
            @auth
                <a href="{{ route('biblioteca') }}" class="back-button"><i class="fas fa-book-open"></i> Mi
                    Biblioteca</a>
            @endauth
        </div>
        <div class="game-card">
            <div class="game-header">
                @php
                    $imgPath = null;
                    $basePath = public_path('img/juego' . $juego->id);
                    $extensiones = ['.jpeg', '.jpg', '.png', '.webp'];
                    foreach ($extensiones as $ext) {
                        if (file_exists($basePath . $ext)) {
                            $imgPath = 'img/juego' . $juego->id . $ext;
                            break;
                        }
                    }
                @endphp
                <img src="{{ asset($imgPath ?? 'img/default.jpg') }}" alt="Imagen del juego" class="game-image">

                <div class="game-info">
                    <h1 class="game-title">{{ $juego->nombre }}</h1>

                    <div class="game-meta">

                        <div class="meta-item">
                            <div class="meta-label">Fecha de lanzamiento</div>
                            <div class="meta-value">{{ $juego->created_at->format('d/m/Y') }}</div>
                        </div>

                        <div class="meta-item">
                            <div class="meta-label">Categoría</div>
                            <div class="meta-value">{{ $juego->categoria->nombre }}</div>
                        </div>

                    </div>
                    <div class="meta-item">
                        <div class="meta-label">Precio</div>
                        <div class="price">{{ $juego->precio }}€</div>
                    </div>

                    @auth
                        @if (!$enBiblioteca)
                            <form action="{{ route('biblioteca.agregar', $juego->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="buy-button">Comprar ahora</button>
                            </form>
                        @endif
                    @endauth
                </div>
            </div>

            <div class="description-section">
                <h2 class="section-title">Descripción</h2>
                <p class="description">{{ $juego->descripcion }}</p>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/show.js') }}"></script>
</body>

</html>
