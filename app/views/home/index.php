<?php 
$title = "Inicio";
$currentPage = "home";
$metaDescription = "AgroConecta - Conecta con agricultores locales y disfruta de productos frescos y naturales directo del campo a tu mesa";
$metaKeywords = "agricultura, productos frescos, verduras, frutas, orgánicos, local, campo, natural";
$additionalCSS = ['home.css'];
$additionalJS = ['home.js'];

ob_start();
?>

<!-- Hero Section -->
<section class="hero-section">
    <div class="hero-carousel">
        <div class="hero-slide active" style="background-image: url('<?= asset('img/hero/slide1.jpg') ?>');">
            <div class="hero-overlay"></div>
            <div class="container">
                <div class="hero-content">
                    <h1 class="hero-title fade-in">
                        Productos Frescos
                        <span class="text-primary">Directo del Campo</span>
                    </h1>
                    <p class="hero-subtitle fade-in">
                        Conectamos agricultores locales con tu mesa. 
                        Descubre la frescura y calidad de productos cultivados con amor.
                    </p>
                    <div class="hero-actions fade-in">
                        <a href="<?= url('/productos') ?>" class="btn btn-primary btn-lg">
                            <i class="fas fa-shopping-basket"></i> Ver Productos
                        </a>
                        <a href="#como-funciona" class="btn btn-outline btn-lg">
                            <i class="fas fa-play"></i> Cómo Funciona
                        </a>
                    </div>
                    <div class="hero-stats fade-in">
                        <div class="stat-item">
                            <span class="stat-number" data-count="<?= $stats['productosActivos'] ?? 250 ?>">0</span>
                            <span class="stat-label">Productos Frescos</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number" data-count="<?= $stats['agricultoresActivos'] ?? 50 ?>">0</span>
                            <span class="stat-label">Agricultores</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number" data-count="<?= $stats['clientesSatisfechos'] ?? 1200 ?>">0</span>
                            <span class="stat-label">Clientes Felices</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="hero-slide" style="background-image: url('<?= asset('img/hero/slide2.jpg') ?>');">
            <div class="hero-overlay"></div>
            <div class="container">
                <div class="hero-content">
                    <h1 class="hero-title">
                        Agricultura Sostenible
                        <span class="text-primary">Para un Futuro Mejor</span>
                    </h1>
                    <p class="hero-subtitle">
                        Apoyamos prácticas agrícolas responsables que cuidan nuestro planeta 
                        y garantizan alimentos saludables para las generaciones futuras.
                    </p>
                    <div class="hero-actions">
                        <a href="<?= url('/productos/categoria/organicos') ?>" class="btn btn-primary btn-lg">
                            <i class="fas fa-leaf"></i> Productos Orgánicos
                        </a>
                        <a href="<?= url('/sobre-nosotros') ?>" class="btn btn-outline btn-lg">
                            <i class="fas fa-users"></i> Conoce Más
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="hero-slide" style="background-image: url('<?= asset('img/hero/slide3.jpg') ?>');">
            <div class="hero-overlay"></div>
            <div class="container">
                <div class="hero-content">
                    <h1 class="hero-title">
                        Entrega Rápida
                        <span class="text-primary">a Domicilio</span>
                    </h1>
                    <p class="hero-subtitle">
                        Recibe tus productos favoritos en la comodidad de tu hogar. 
                        Entregas el mismo día en área metropolitana.
                    </p>
                    <div class="hero-actions">
                        <a href="<?= url('/registro') ?>" class="btn btn-primary btn-lg">
                            <i class="fas fa-user-plus"></i> Únete Ahora
                        </a>
                        <a href="<?= url('/politicas/envio') ?>" class="btn btn-outline btn-lg">
                            <i class="fas fa-truck"></i> Info de Envío
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Hero Navigation -->
    <div class="hero-nav">
        <button class="hero-nav-btn prev" aria-label="Slide anterior">
            <i class="fas fa-chevron-left"></i>
        </button>
        <button class="hero-nav-btn next" aria-label="Siguiente slide">
            <i class="fas fa-chevron-right"></i>
        </button>
    </div>
    
    <!-- Hero Indicators -->
    <div class="hero-indicators">
        <button class="indicator active" data-slide="0"></button>
        <button class="indicator" data-slide="1"></button>
        <button class="indicator" data-slide="2"></button>
    </div>
</section>

<!-- Categories Section -->
<section class="categories-section">
    <div class="container">
        <div class="section-header text-center">
            <h2 class="section-title">
                <i class="fas fa-list"></i>
                Explora Nuestras Categorías
            </h2>
            <p class="section-subtitle">
                Encuentra exactamente lo que necesitas organizizado por categorías
            </p>
        </div>
        
        <div class="categories-grid">
            <?php 
            $categorias = [
                ['slug' => 'vegetales', 'nombre' => 'Vegetales', 'icon' => '🥕', 'descripcion' => 'Vegetales frescos y nutritivos', 'productos_count' => $categoryCounts['vegetales'] ?? 0],
                ['slug' => 'frutas', 'nombre' => 'Frutas', 'icon' => '🍎', 'descripcion' => 'Frutas de temporada y exóticas', 'productos_count' => $categoryCounts['frutas'] ?? 0],
                ['slug' => 'granos', 'nombre' => 'Granos', 'icon' => '🌾', 'descripcion' => 'Granos integrales y cereales', 'productos_count' => $categoryCounts['granos'] ?? 0],
                ['slug' => 'hierbas', 'nombre' => 'Hierbas', 'icon' => '🌿', 'descripcion' => 'Hierbas aromáticas y medicinales', 'productos_count' => $categoryCounts['hierbas'] ?? 0],
                ['slug' => 'organicos', 'nombre' => 'Orgánicos', 'icon' => '🌱', 'descripcion' => 'Productos 100% orgánicos certificados', 'productos_count' => $categoryCounts['organicos'] ?? 0],
                ['slug' => 'especias', 'nombre' => 'Especias', 'icon' => '🌶️', 'descripcion' => 'Especias naturales y aromáticas', 'productos_count' => $categoryCounts['especias'] ?? 0]
            ];
            ?>
            
            <?php foreach($categorias as $categoria): ?>
                <div class="category-card">
                    <a href="<?= url("/productos/categoria/{$categoria['slug']}") ?>" class="category-link">
                        <div class="category-icon">
                            <span class="icon"><?= $categoria['icon'] ?></span>
                        </div>
                        <div class="category-content">
                            <h3 class="category-name"><?= $categoria['nombre'] ?></h3>
                            <p class="category-description"><?= $categoria['descripcion'] ?></p>
                            <div class="category-meta">
                                <span class="product-count"><?= $categoria['productos_count'] ?> productos</span>
                                <span class="view-more">Ver más <i class="fas fa-arrow-right"></i></span>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Featured Products Section -->
<section class="featured-section">
    <div class="container">
        <div class="section-header text-center">
            <h2 class="section-title">
                <i class="fas fa-star"></i>
                Productos Destacados
            </h2>
            <p class="section-subtitle">
                Los productos más populares y mejor valorados por nuestros clientes
            </p>
        </div>
        
        <div class="products-carousel">
            <div class="carousel-nav">
                <button class="carousel-btn prev" aria-label="Productos anteriores">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button class="carousel-btn next" aria-label="Siguientes productos">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
            
            <div class="products-slider">
                <?php if(isset($productoDestacados) && !empty($productoDestacados)): ?>
                    <?php foreach($productoDestacados as $producto): ?>
                        <div class="product-slide">
                            <?php include APP_PATH . '/views/components/product-card.php'; ?>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <!-- Productos de ejemplo si no hay datos -->
                    <div class="product-slide">
                        <div class="product-card">
                            <div class="product-image-container">
                                <img src="<?= asset('img/products/tomate-cherry.jpg') ?>" alt="Tomate Cherry" class="product-image">
                                <div class="product-badge sale">Oferta</div>
                                <div class="product-actions">
                                    <button class="action-btn wishlist" title="Agregar a favoritos">
                                        <i class="far fa-heart"></i>
                                    </button>
                                    <button class="action-btn quick-view" title="Vista rápida">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3 class="product-title">Tomate Cherry Orgánico</h3>
                                <p class="product-description">Tomates cherry orgánicos, perfectos para ensaladas y snacks saludables.</p>
                                <div class="product-rating">
                                    <div class="stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <span class="rating-count">(25 reviews)</span>
                                </div>
                                <div class="product-price">
                                    <span class="current-price">$45.00</span>
                                    <span class="original-price">$60.00</span>
                                    <span class="discount">-25%</span>
                                </div>
                                <div class="product-actions-bottom">
                                    <button class="btn btn-primary add-to-cart" data-product-id="1">
                                        <i class="fas fa-shopping-cart"></i> Agregar al Carrito
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Más productos de ejemplo... -->
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<!-- How It Works Section -->
<section id="como-funciona" class="how-it-works-section">
    <div class="container">
        <div class="section-header text-center">
            <h2 class="section-title">
                <i class="fas fa-cogs"></i>
                ¿Cómo Funciona AgroConecta?
            </h2>
            <p class="section-subtitle">
                Es muy fácil disfrutar de productos frescos del campo
            </p>
        </div>
        
        <div class="steps-container">
            <div class="step-item">
                <div class="step-icon">
                    <span class="step-number">1</span>
                    <i class="fas fa-search"></i>
                </div>
                <div class="step-content">
                    <h3 class="step-title">Explora y Elige</h3>
                    <p class="step-description">
                        Navega por nuestra amplia selección de productos frescos 
                        organizados por categorías. Encuentra exactamente lo que buscas.
                    </p>
                </div>
            </div>
            
            <div class="step-connector"></div>
            
            <div class="step-item">
                <div class="step-icon">
                    <span class="step-number">2</span>
                    <i class="fas fa-shopping-cart"></i>
                </div>
                <div class="step-content">
                    <h3 class="step-title">Agrega al Carrito</h3>
                    <p class="step-description">
                        Selecciona las cantidades que necesitas y agrega los productos 
                        a tu carrito de compras. Revisa y modifica cuando gustes.
                    </p>
                </div>
            </div>
            
            <div class="step-connector"></div>
            
            <div class="step-item">
                <div class="step-icon">
                    <span class="step-number">3</span>
                    <i class="fas fa-credit-card"></i>
                </div>
                <div class="step-content">
                    <h3 class="step-title">Paga Seguro</h3>
                    <p class="step-description">
                        Procede al checkout y realiza tu pago de forma segura 
                        con múltiples opciones: tarjeta, transferencia o efectivo.
                    </p>
                </div>
            </div>
            
            <div class="step-connector"></div>
            
            <div class="step-item">
                <div class="step-icon">
                    <span class="step-number">4</span>
                    <i class="fas fa-truck"></i>
                </div>
                <div class="step-content">
                    <h3 class="step-title">Recibe en Casa</h3>
                    <p class="step-description">
                        Recibe tus productos frescos en la comodidad de tu hogar. 
                        Entregas rápidas y productos en perfecto estado.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Benefits Section -->
<section class="benefits-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="benefits-image">
                    <img src="<?= asset('img/farmer-vegetables.jpg') ?>" alt="Agricultor con vegetales" class="img-fluid">
                    <div class="image-overlay">
                        <div class="play-button">
                            <i class="fas fa-play"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="benefits-content">
                    <h2 class="section-title">
                        ¿Por Qué Elegir AgroConecta?
                    </h2>
                    <p class="section-subtitle">
                        Más que una plataforma de compras, somos una comunidad 
                        comprometida con la agricultura sostenible y la alimentación saludable.
                    </p>
                    
                    <div class="benefits-list">
                        <div class="benefit-item">
                            <div class="benefit-icon">
                                <i class="fas fa-leaf"></i>
                            </div>
                            <div class="benefit-content">
                                <h4>100% Natural</h4>
                                <p>Productos libres de químicos dañinos, cultivados con métodos tradicionales y sostenibles.</p>
                            </div>
                        </div>
                        
                        <div class="benefit-item">
                            <div class="benefit-icon">
                                <i class="fas fa-handshake"></i>
                            </div>
                            <div class="benefit-content">
                                <h4>Comercio Justo</h4>
                                <p>Apoyamos directamente a los agricultores, garantizando precios justos y relaciones duraderas.</p>
                            </div>
                        </div>
                        
                        <div class="benefit-item">
                            <div class="benefit-icon">
                                <i class="fas fa-shipping-fast"></i>
                            </div>
                            <div class="benefit-content">
                                <h4>Entrega Rápida</h4>
                                <p>Entregas el mismo día en área metropolitana, garantizando la máxima frescura.</p>
                            </div>
                        </div>
                        
                        <div class="benefit-item">
                            <div class="benefit-icon">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                            <div class="benefit-content">
                                <h4>Garantía de Calidad</h4>
                                <p>Si no estás satisfecho, te devolvemos tu dinero. Tu satisfacción es nuestra prioridad.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="benefits-action">
                        <a href="<?= url('/sobre-nosotros') ?>" class="btn btn-primary">
                            <i class="fas fa-users"></i> Conoce Nuestra Historia
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="testimonials-section">
    <div class="container">
        <div class="section-header text-center">
            <h2 class="section-title">
                <i class="fas fa-quote-left"></i>
                Lo Que Dicen Nuestros Clientes
            </h2>
            <p class="section-subtitle">
                Miles de familias confían en AgroConecta para su alimentación diaria
            </p>
        </div>
        
        <div class="testimonials-carousel">
            <?php 
            $testimonios = [
                [
                    'nombre' => 'María González',
                    'ubicacion' => 'Ciudad de México',
                    'avatar' => 'customer1.jpg',
                    'rating' => 5,
                    'testimonio' => 'Excelente calidad en todos los productos. Mi familia y yo estamos encantados con la frescura y sabor. ¡Definitivamente recomendado!'
                ],
                [
                    'nombre' => 'Carlos Rodríguez',
                    'ubicacion' => 'Guadalajara',
                    'avatar' => 'customer2.jpg',
                    'rating' => 5,
                    'testimonio' => 'El servicio de entrega es impecable y los precios son muy justos. Es genial poder apoyar a los agricultores locales.'
                ],
                [
                    'nombre' => 'Ana Martínez',
                    'ubicacion' => 'Monterrey',
                    'avatar' => 'customer3.jpg',
                    'rating' => 5,
                    'testimonio' => 'Llevo 6 meses comprando aquí y cada producto llega fresco y en perfecto estado. La plataforma es muy fácil de usar.'
                ]
            ];
            ?>
            
            <?php foreach($testimonios as $testimonio): ?>
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <div class="testimonial-text">
                            <i class="fas fa-quote-left quote-icon"></i>
                            <p><?= $testimonio['testimonio'] ?></p>
                        </div>
                        <div class="testimonial-rating">
                            <?php for($i = 1; $i <= 5; $i++): ?>
                                <i class="fas fa-star <?= $i <= $testimonio['rating'] ? 'active' : '' ?>"></i>
                            <?php endfor; ?>
                        </div>
                    </div>
                    <div class="testimonial-author">
                        <img src="<?= asset("img/customers/{$testimonio['avatar']}") ?>" alt="<?= $testimonio['nombre'] ?>" class="author-avatar">
                        <div class="author-info">
                            <h4 class="author-name"><?= $testimonio['nombre'] ?></h4>
                            <p class="author-location">
                                <i class="fas fa-map-marker-alt"></i>
                                <?= $testimonio['ubicacion'] ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Newsletter Section -->
<section class="newsletter-cta-section">
    <div class="newsletter-overlay"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="newsletter-content">
                    <h2 class="newsletter-title">
                        <i class="fas fa-envelope"></i>
                        ¡Mantente Informado!
                    </h2>
                    <p class="newsletter-description">
                        Suscríbete a nuestro newsletter y recibe ofertas exclusivas, 
                        recetas deliciosas y tips de alimentación saludable.
                    </p>
                    <ul class="newsletter-benefits">
                        <li><i class="fas fa-check"></i> Ofertas exclusivas para suscriptores</li>
                        <li><i class="fas fa-check"></i> Recetas con productos de temporada</li>
                        <li><i class="fas fa-check"></i> Tips de alimentación saludable</li>
                        <li><i class="fas fa-check"></i> Noticias del mundo agrícola</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="newsletter-form-container">
                    <form action="<?= url('/newsletter/suscribir') ?>" method="POST" class="newsletter-form" id="newsletterForm">
                        <?= csrf_field() ?>
                        <h3 class="form-title">Únete a Nuestra Comunidad</h3>
                        <div class="form-group">
                            <input type="text" name="nombre" class="form-control" placeholder="Tu nombre" required>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Tu correo electrónico" required>
                        </div>
                        <div class="form-group">
                            <label class="form-check">
                                <input type="checkbox" name="acepto_terminos" class="form-check-input" required>
                                <span class="form-check-label">
                                    Acepto recibir comunicaciones de AgroConecta y he leído la 
                                    <a href="<?= url('/politicas/privacidad') ?>" target="_blank">política de privacidad</a>
                                </span>
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">
                            <i class="fas fa-paper-plane"></i> 
                            Suscribirse Gratis
                        </button>
                        <p class="form-note">
                            <i class="fas fa-shield-alt"></i>
                            No compartimos tu información. Puedes cancelar cuando quieras.
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php 
$content = ob_get_clean();
include APP_PATH . '/views/layouts/main.php';
?>