<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supermercado Carbajal</title>
    <link rel="icon" href="{{ asset('images/carbajal_icon.ico') }}" type="image/x-icon"> 
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <header>
        <div class="logo">
            <img src="{{ asset('images/carbajal_icon.png') }}" alt="Logo" class="logo-img">
            <h1>Supermercado Carbajal</h1>
        </div>
        <div class="contactanos">
            <button type="button" id="whatsappButton"><i class="fab fa-whatsapp"></i>Contactános</button>          
        </div>  
    </header>
    <div class="eslogan">
        <h2>Distribuidora y Supermercados Carbajal ¡SIEMPRE LOS MEJORES PRECIOS!</h2>
    </div>
    <div class="carousel">
        <div class="carousel-container">
            <img src="{{ asset('images/Ejemplo1.jpg') }}" alt="1" class="carousel-image">
            <img src="{{ asset('images/Ejemplo2.jpg') }}" alt="2" class="carousel-image">
            <img src="{{ asset('images/Ejemplo3.jpg') }}" alt="3" class="carousel-image">
            <img src="{{ asset('images/Ejemplo4.jpg') }}" alt="4" class="carousel-image">
        </div>
    </div>
    <div class="conocenos">
        <h1>SOBRE NOSOTROS</h1>
    </div>
    <div class="container"> 
        <div class="box"> 
            <div class="icon-container">
                <i class="fas fa-bullseye icon"></i> 
                </div>
            <div class="title"> 
                <h2>MISIÓN</h2> 
            </div> 
            <p>Somos proveedores de abarrotería,
                 productos de cuidado personal y
                  del hogar y alimentos en general
                   con los mejores precios, servicio 
                   y variedad en la zona centro sur del país, 
                   garantizando la satisfacción de proveedores,
                    clientes, consumidores, colaboradores y accionistas.</p> 
                </div> 
                <div class="box"> 
                    <div class="icon-container">
                        <i class="fas fa-eye icon"></i> 
                        </div>
                    <div class="title"> 
                        <h2>VISIÓN</h2> 
                    </div> 
                    <p>Para el año 2023 ser la proveedora de abarrotería, 
                        productos de consumo personal, para el hogar y
                         alimentos en general referente en Honduras por su solidez,
                          eficiencia y prácticas de Clase Mundial, sustentado en la 
                          preferencia de los grupos de interés.</p> 
                        </div> 
                        <div class="box">
                            <div class="icon-container">
                                <i class="fas fa-hand-holding-heart icon"></i> 
                                </div>
                             <div class="title">
                                 <h2>VALORES</h2> 
                                </div> 
                                <p>Nuestros valores son la base de nuestra operación
                                     y nos guían en nuestras interacciones con proveedores, 
                                     clientes y colaboradores.</p> 
                                    </div> 
                                    <div class="box"> 
                                        <div class="icon-container">
                                            <i class="fas fa-box icon"></i> 
                                            </div>
                                        <div class="title">
                                             <h2>PRODUCTOS Y SERVICIOS</h2> 
                                            </div> 
                                             <p>Ofrecemos una amplia variedad de productos de
                                                 abarrotería, cuidado personal, para el hogar
                                                  y alimentos, garantizando calidad y buen servicio.</p>
                                                 </div> 
                                                </div>
    <footer>
        <div class="redes-sociales">
            <h2>Síguenos en nuestras redes sociales</h2>
            <a href="https://www.facebook.com/share/15vD3AqUNe/?mibextid=wwXIfr" target="_blank">
                <i class="fab fa-facebook-f"></i> Facebook
            </a>
            <a href="https://www.instagram.com/carbajal.hn?igsh=MXBrOHB3OHpxZnFmMw==" target="_blank">
                <i class="fab fa-instagram"></i> Instagram
            </a>
            <a href="https://carbajal-hn.com/" target="_blank">
                <i class="fas fa-globe"></i> Sitio Web
            </a>
        </div>
    </footer>
                                      
    <main>

    </main>
</body>

<script>
 document.getElementById('whatsappButton').addEventListener('click', function () {
     let phoneNumber = '50499316131'; // Reemplaza con el número de teléfono al que deseas enviar el mensaje 
     let message = 'Hola. Quiero consultarles algo ¿Pueden ayudarme?'; 
     let whatsappUrl = `https://wa.me/${phoneNumber}?text=${encodeURIComponent(message)}`;
      window.location.href = whatsappUrl; 
    });

    let currentSlide = 0;

    function autoSlide() {
        const container = document.querySelector('.carousel-container');
        const slides = document.querySelectorAll('.carousel-image');
        const totalSlides = slides.length;

        // Cambia al siguiente slide
        currentSlide = (currentSlide + 1) % totalSlides;
        container.style.transform = `translateX(-${currentSlide * 100}%)`;
    }

    // Ejecuta el cambio de slide cada 5 segundos
    setInterval(autoSlide, 5000);
</script>

</html>