<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAFETERÍA ITCA</title>
    
</head>
<style>
    body, html {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    height: 100%;
}

.container {
    display: flex;
    height: 100%;
}

.sidebar {
    width: 250px;
    background-color: #f0f0f0;
    padding: 20px;
    display: flex;
    flex-direction: column;
}

.logo {
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 30px;
}

nav ul {
    list-style-type: none;
    padding: 0;
}

nav ul li {
    margin-bottom: 15px;
}

nav ul li a, .user-actions a {
    text-decoration: none;
    color: #333;
    display: flex;
    align-items: center;
}

.icon {
    margin-right: 10px;
}

.user-actions {
    margin-top: auto;
    margin-bottom: 20px;
}

.user-actions a {
    display: block;
    margin-bottom: 10px;
}

.panel {
    border-top: 1px solid #ccc;
    padding-top: 20px;
}

.panel h3 {
    margin-top: 0;
}

.content {
    flex-grow: 1;
    background-color: #fff;
}

header {
    background-color: #b7472a;
    color: white;
    padding: 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

h1 {
    margin: 0;
}

.search-bar {
    display: flex;
    align-items: center;
}

.search-bar input {
    padding: 10px;
    border: none;
    border-radius: 20px 0 0 20px;
    width: 300px;
}

.search-bar button {
    padding: 10px 15px;
    border: none;
    background-color: white;
    border-radius: 0 20px 20px 0;
    cursor: pointer;
}

.user-info {
    display: flex;
    align-items: center;
}

.avatar {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    margin-right: 10px;
}

.main-content {
    padding: 20px;
}


</style>
<body>
    <div class="container">
        <aside class="sidebar">
            <div class="logo">ITCA FEPADE</div>
            <nav>
                <ul>
                    <li><a href="{{ route('products.index') }}"><span class="icon">📦</span> Productos</a></li>
                    <li><a href="#"><span class="icon">🏷️</span> Categorías</a></li>
                    <li><a href="#"><span class="icon">🍽️</span> Recetas</a></li>
                    <li><a href="#"><span class="icon">📋</span> Menu</a></li>
                    <li><a href="#"><span class="icon">📅</span> Reservas</a></li>
                    <li><a href="#"><span class="icon">👥</span> Usuarios</a></li>
                </ul>
            </nav>
            <div class="user-actions">
                <a href="#"><span class="icon">👤</span> Ver Perfil</a>
                <a href="#"><span class="icon">🚪</span> Cerrar Sesión</a>
            </div>
            <div class="panel">
                <h3>PANEL DE REPORTES</h3>
                <ul>
                    <li><a href="#"><span class="icon">📊</span> Historial Productos</a></li>
                    <li><a href="#"><span class="icon">💰</span> Historial Ingresos</a></li>
                    <li><a href="#"><span class="icon">📜</span> Historial Recetas</a></li>
                </ul>
            </div>
        </aside>
        <main class="content">
            <header>
                <h1>CAFETERÍA ITCA</h1>
                <div class="search-bar">
                    <input type="text" placeholder="Search">
                    <button type="submit">🔍</button>
                </div>
                <div class="user-info">
                    <img src="https://via.placeholder.com/40" alt="User Avatar" class="avatar">
                    <span>Julissa Diaz</span>
                </div>
            </header>
            <div class="main-content">
                <!-- Aquí iría el contenido principal -->
            </div>
        </main>
    </div>
</body>
</html>

