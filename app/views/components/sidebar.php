<?php
/**
 * Componente: Sidebar de Navegación Moderno
 * Sidebar principal con categorías, ofertas y productos populares
 */

// Configuración por defecto
$sidebarConfig = [
    'showCategories' => $showCategories ?? true,
    'showOffers' => $showOffers ?? true,
    'showPopular' => $showPopular ?? true,
    'currentCategory' => $currentCategory ?? '',
];

// Datos de categorías (normalmente vendrían de la base de datos)
$categories = [
    [
        'name' => 'Vegetales',
        'slug' => 'vegetales',
        'icon' => '🥕',
        'count' => 45
    ],
    [
        'name' => 'Frutas',
        'slug' => 'frutas', 
        'icon' => '🍎',
        'count' => 32
    ],
    [
        'name' => 'Granos',
        'slug' => 'granos',
        'icon' => '🌾',
        'count' => 18
    ],
    [
        'name' => 'Hierbas',
        'slug' => 'hierbas',
        'icon' => '🌿',
        'count' => 24
    ],
    [
        'name' => 'Orgánicos',
        'slug' => 'organicos',
        'icon' => '🌱',
        'count' => 67
    ]
];

// Productos populares (ejemplo)
$popularProducts = [
    [
        'name' => 'Tomates Cherry Orgánicos',
        'price' => 45.00,
        'image' => 'tomates-cherry.jpg'
    ],
    [
        'name' => 'Aguacates Hass Premium',
        'price' => 120.00,
        'image' => 'aguacates-hass.jpg'
    ],
    [
        'name' => 'Espinacas Frescas',
        'price' => 25.00,
        'image' => 'espinacas.jpg'
    ]
];
?>

<!-- Sidebar Principal -->
<aside class="main-sidebar fade-in">
    <?php if($sidebarConfig['showCategories']): ?>
        <!-- Header del Sidebar -->
        <div class="sidebar-header">
            <h3>
                <i class="fas fa-list"></i>
                Categorías
            </h3>
        </div>
        
        <!-- Navegación de Categorías -->
        <nav class="category-navigation">
            <ul class="category-nav">
                <li>
                    <a href="<?= url('/productos') ?>" class="<?= empty($sidebarConfig['currentCategory']) ? 'active' : '' ?>">
                        <span class="category-icon">🛒</span>
                        <span class="category-name">Todos los productos</span>
                        <span class="category-count"><?= array_sum(array_column($categories, 'count')) ?></span>
                    </a>
                </li>
                <?php foreach($categories as $category): ?>
                <li>
                    <a href="<?= url('/productos/categoria/' . $category['slug']) ?>" 
                       class="<?= $sidebarConfig['currentCategory'] === $category['slug'] ? 'active' : '' ?>">
                        <span class="category-icon"><?= $category['icon'] ?></span>
                        <span class="category-name"><?= $category['name'] ?></span>
                        <span class="category-count"><?= $category['count'] ?></span>
                    </a>
                </li>
                <?php endforeach; ?>
            </ul>
        </nav>
    <?php endif; ?>
    
    <?php if($sidebarConfig['showOffers']): ?>
        <!-- Sección de Ofertas -->
        <div class="offers-section">
            <h4 class="offers-title">
                <i class="fas fa-fire"></i>
                ¡Ofertas Especiales!
            </h4>
            <p class="offers-text">
                Descuentos de hasta 30% en productos seleccionados
            </p>
            <a href="<?= url('/productos/ofertas') ?>" class="offers-btn">
                <i class="fas fa-tag"></i>
                Ver Ofertas
            </a>
        </div>
    <?php endif; ?>
    
    <?php if($sidebarConfig['showPopular'] && !empty($popularProducts)): ?>
        <!-- Widget de Productos Populares -->
        <div class="popular-products-widget">
            <h4 class="widget-title">
                <i class="fas fa-star"></i>
                Más Populares
            </h4>
            
            <?php foreach($popularProducts as $product): ?>
                <div class="popular-product interactive">
                    <img src="<?= asset('img/products/' . ($product['image'] ?? 'placeholder.jpg')) ?>" 
                         alt="<?= htmlspecialchars($product['name']) ?>" 
                         class="product-thumb">
                    <div class="product-info">
                        <h5><?= htmlspecialchars($product['name']) ?></h5>
                        <div class="product-price">$<?= number_format($product['price'], 2) ?></div>
                    </div>
                </div>
            <?php endforeach; ?>
            
            <a href="<?= url('/productos/populares') ?>" class="btn btn-outline btn-sm" style="width: 100%; margin-top: var(--spacing-md);">
                <i class="fas fa-arrow-right"></i>
                Ver Más Populares
            </a>
        </div>
    <?php endif; ?>
</aside>

<!-- CSS específico del sidebar -->
<link rel="stylesheet" href="<?= asset('css/sidebar-modern.css') ?>">

<script>
// JavaScript para mejorar la interactividad del sidebar
document.addEventListener('DOMContentLoaded', function() {
    // Animación para los elementos del sidebar
    const sidebarItems = document.querySelectorAll('.category-nav a, .popular-product');
    
    // Observador de intersección para animaciones
    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry, index) => {
            if (entry.isIntersecting) {
                setTimeout(() => {
                    entry.target.classList.add('slide-in');
                }, index * 100);
            }
        });
    });
    
    sidebarItems.forEach(item => observer.observe(item));
    
    // Efecto de hover suave para productos populares
    const popularProducts = document.querySelectorAll('.popular-product');
    popularProducts.forEach(product => {
        product.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-3px) scale(1.02)';
        });
        
        product.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0) scale(1)';
        });
    });
    
    // Smooth scroll para enlaces internos
    const internalLinks = document.querySelectorAll('.category-nav a');
    internalLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            // Agregar clase de carga temporal
            this.classList.add('loading');
            setTimeout(() => {
                this.classList.remove('loading');
            }, 1000);
        });
    });
});
</script>