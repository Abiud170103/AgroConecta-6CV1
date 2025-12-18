<?php
/**
 * Configuración de rutas para AgroConecta
 * Define las rutas del sistema y sus controladores correspondientes
 * 
 * @author Equipo AgroConecta 6CV1
 * @version 1.0
 */

// Rutas del sistema
$routes = [
    // Rutas principales
    '' => 'HomeController@index',
    'home' => 'HomeController@index',
    'buscar' => 'HomeController@buscar',
    
    // Rutas de autenticación
    'login' => 'AuthController@login',
    'logout' => 'AuthController@logout',
    'registro' => 'AuthController@registro',
    'registro/cliente' => 'AuthController@registroCliente',
    'registro/vendedor' => 'AuthController@registroVendedor',
    'recuperar-password' => 'AuthController@recuperarPassword',
    'reset-password' => 'AuthController@resetPassword',
    
    // Rutas del cliente
    'cliente/dashboard' => 'ClienteController@dashboard',
    'cliente/perfil' => 'ClienteController@perfil',
    'cliente/pedidos' => 'ClienteController@pedidos',
    'cliente/carrito' => 'ClienteController@carrito',
    'cliente/checkout' => 'ClienteController@checkout',
    'cliente/direcciones' => 'ClienteController@direcciones',
    
    // Rutas del vendedor
    'vendedor/dashboard' => 'VendedorController@dashboard',
    'vendedor/perfil' => 'VendedorController@perfil',
    'vendedor/productos' => 'VendedorController@productos',
    'vendedor/productos/agregar' => 'VendedorController@agregarProducto',
    'vendedor/productos/editar' => 'VendedorController@editarProducto',
    'vendedor/productos/eliminar' => 'VendedorController@eliminarProducto',
    'vendedor/pedidos' => 'VendedorController@pedidos',
    'vendedor/inventario' => 'VendedorController@inventario',
    
    // Rutas de productos
    'productos' => 'ProductoController@index',
    'producto' => 'ProductoController@detalle',
    'productos/categoria' => 'ProductoController@porCategoria',
    
    // Rutas de carrito y pagos
    'carrito/agregar' => 'CarritoController@agregar',
    'carrito/actualizar' => 'CarritoController@actualizar',
    'carrito/eliminar' => 'CarritoController@eliminar',
    'carrito/vaciar' => 'CarritoController@vaciar',
    'pago/procesar' => 'PagoController@procesar',
    'pago/confirmacion' => 'PagoController@confirmacion',
    'pago/webhook' => 'PagoController@webhook',
    
    // Rutas de pedidos
    'pedido/crear' => 'PedidoController@crear',
    'pedido/detalle' => 'PedidoController@detalle',
    'pedido/actualizar-estado' => 'PedidoController@actualizarEstado',
    'pedido/cancelar' => 'PedidoController@cancelar',
    
    // Rutas de API (para AJAX)
    'api/productos/buscar' => 'ApiController@buscarProductos',
    'api/carrito/cantidad' => 'ApiController@cantidadCarrito',
    'api/upload/imagen' => 'ApiController@subirImagen',
    'api/direccion/validar' => 'ApiController@validarDireccion',
    
    // Rutas adicionales
    'acerca' => 'HomeController@acerca',
    'contacto' => 'HomeController@contacto',
    'terminos' => 'HomeController@terminos',
    'privacidad' => 'HomeController@privacidad',
    'error' => 'HomeController@error',
    
    // Rutas de administración (futuras)
    'admin' => 'AdminController@index',
    'admin/usuarios' => 'AdminController@usuarios',
    'admin/reportes' => 'AdminController@reportes',
];

// Rutas que requieren autenticación
$protected_routes = [
    'cliente/*',
    'vendedor/*',
    'carrito/*',
    'pedido/*',
    'admin/*'
];

// Rutas específicas para roles
$role_routes = [
    'cliente' => [
        'cliente/*',
        'carrito/*',
        'pago/*'
    ],
    'vendedor' => [
        'vendedor/*',
        'pedido/actualizar-estado'
    ],
    'admin' => [
        'admin/*'
    ]
];

// Métodos HTTP permitidos por ruta
$route_methods = [
    'login' => ['GET', 'POST'],
    'registro/cliente' => ['GET', 'POST'],
    'registro/vendedor' => ['GET', 'POST'],
    'recuperar-password' => ['GET', 'POST'],
    'carrito/agregar' => ['POST'],
    'carrito/actualizar' => ['POST'],
    'carrito/eliminar' => ['POST'],
    'pago/procesar' => ['POST'],
    'pago/webhook' => ['POST'],
    'api/*' => ['GET', 'POST', 'PUT', 'DELETE']
];
?>