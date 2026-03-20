<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Panel Administrador</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family: "Poppins", sans-serif;
}

body{
    display:flex;
    height:100vh;
    background:#271d0f;
    overflow:hidden;
}

.sidebar{
    width:260px;
    background: rgba(15, 32, 39, 0.95);
    color:white;
    padding:20px;
    display:flex;
    flex-direction:column;
}

.sidebar h3{
    text-align:center;
    margin-bottom:12px;
}

.sidebar ul{
    list-style:none;
    flex:1;
}

.sidebar ul li{
    padding:14px;
    margin-bottom:12px;
    border-radius:12px;
    cursor:pointer;
    display:flex;
    align-items:center;
    gap:15px;
    transition:0.3s;
}

.sidebar ul li i{
    min-width:12px;
    font-size:15px;
}

.sidebar ul li:hover{
    background:rgba(0, 195, 255, 0.2);
    transform:translateX(6px);
}

.sidebar ul li:hover i{
    color:#00c3ff;
    transform:scale(1.2);
}

.logout{
    background:rgba(255,255,255,0.1);
    padding:10px;
    border-radius:12px;
    display:flex;
    align-items:center;
    justify-content:center;
    gap:8px;
    cursor:pointer;
    transition:0.3s;
}

.logout:hover{
    background:#ff4d4d;
}

.main{
    flex:1;
    background:url("https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d") no-repeat center center/cover;
    display:flex;
    justify-content:center;
    align-items:center;
    position:relative;
}

.overlay{
    position:absolute;
    width:100%;
    height:100%;
    background:rgba(0,0,0,0.6);
}

.content{
    position:relative;
    text-align:center;
    color:white;
}

.content h1{
    font-size:30px;
    margin-bottom:15px;
}

.content h2{
    font-size:45px;
    color:#d9ecf1;
}
</style>
</head>

<body>

<div class="sidebar">
    <h3>Rol administrador</h3>

    <ul>
        <li><i class="fas fa-users"></i><span>Administrar usuarios</span></li>
        <li><i class="fas fa-store"></i><span>Puntos de venta</span></li>
        <li><i class="fas fa-warehouse"></i><span>Bodega principal</span></li>
        <li><i class="fas fa-industry"></i><span>Producción interna</span></li>
        <li><i class="fas fa-truck"></i><span> Proveedores </span></li>
        <li><i class="fas fa-boxes"></i><span>Administrar inventarios</span></li>
        <li><i class="fas fa-chart-line"></i><span>Informes</span></li>
        <li><i class="fas fa-book"></i><span>Manuales</span></li>
        <li><i class="fas fa-headset"></i><span>Soporte técnico</span></li>
    </ul>

      <div class="logout" onclick="confirmarSalida()">
    <i class="fas fa-sign-out-alt"></i> Salir
</div>
    
</div>
</div>

<div class="main">
    <div class="overlay"></div>
    <div class="content">
        <h1>Bienvenido(a) al panel de administración</h1>
        <h2>¿Qué deseas hacer hoy?</h2>
    </div>
</div>

<script>
function confirmarSalida() {
    let confirmar = confirm("¿Deseas salir del panel de administración?");
    
    if (confirmar) {
        window.location.href = "logout.php";
    }
}
</script>

</body>
</html>