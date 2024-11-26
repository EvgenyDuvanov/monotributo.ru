<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MONOTRIBUTO.RU</title>
    
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" >
    
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();
   for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
   k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(99042590, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/99042590" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

    <div class="container">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show position-fixed bottom-0 end-0 m-3" style="z-index: 1050; width: 300px;" role="alert" id="success-alert">
                {{ session('success') }}
            </div>
        @endif
    </div>


    <div class="d-flex flex-column justify-content-between min-vh-100 text-center">
        @include('includes.header')

        <main>
            @yield('content')
        </main>

        @include('includes.footer')
    </div>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
    <script>
        
        document.addEventListener("DOMContentLoaded", function () {
            var successAlert = document.getElementById('success-alert');
            if (successAlert) {
                setTimeout(function () {
                    successAlert.classList.remove('show');
                }, 5000); // 5 секунд
            }
        });
        
        document.addEventListener("DOMContentLoaded", function() {
        const sections = document.querySelectorAll('.fade-in-section');

        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, { threshold: 0.1 });

        sections.forEach(section => {
            observer.observe(section);
        });
    });
    </script>

<style>
    #scrollToTopBtn {
    position: fixed;
    bottom: 40px;
    right: 40px;
    display: none;
    z-index: 1000;
    cursor: pointer;
}

.full-width-image img {
    width: 100%;
    height: auto; /* Сохраняет пропорции изображения */
    display: block; /* Убирает нижние отступы */
}

body {
    margin: 0;
    padding: 0;
}

section {
    position: relative;
    width: 100%;
    height: auto;
    display: flex;
    justify-content: center;
    align-items: center;
    /* font-size: 5em;
    font-weight: 800; */
}

.back-grey {
        background-color: rgba(245, 245, 250);
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }


    .service-card {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        text-align: center;
        padding: 20px;
        border-radius: 10px;
        background-color: #f9f9f9;
        box-shadow: 0 4px 6px rgba(218, 222, 223, 0.909);
        transition: transform 0.3s ease;
        height: 100%;
    }
    .service-card:hover {
        transform: scale(1.05);
    }
    .service-icon {
        font-size: 5rem;
        color: #53bde0;
        margin-bottom: 1rem;
    }
    .service-title {
        font-size: 1.25rem;
        margin-bottom: 0.5rem;
    }
    .btn-details {
        margin-top: 1rem;
    }
    .col-md-3 {
        display: flex;
    }
    .service-card {
        flex: 1;
    }

.review-photo {
    width: 120px; /* Задаем фиксированную ширину для контейнера с фото */
    height: 120px; /* Задаем фиксированную высоту для контейнера с фото */
    display: flex;
    align-items: center;
    justify-content: center;
}

.default-photo {
    width: 100%;
    height: 100%;
    background-color: #ffffff; /* Голубой фон */
    color: #30e4ee; /* Цвет иконки */
    border-radius: 50%;
}

.default-photo svg {
    width: 50%;
    height: 50%;
}



    /* .contact-card {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        padding: 20px;
        border-radius: 10px;
        background-color: #f9f9f9;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        height: 90%;
        transition: transform 0.3s ease;
    } */
    /* .contact-card:hover {
        transform: scale(1.05);
    } */
    .contact-icon {
        font-size: 3rem;
        color: #0dbdfd;
        /* margin-bottom: 1rem; */
    }
    .contact-name {
        font-size: 1.25rem;
        margin-bottom: 0.5rem;
    }
    .contact-link {
        color: #0dbdfd;
        text-decoration: none;
    }
    /* .contact-link:hover {
        text-decoration: underline;
    } */





    .review-photo img {
    width: 120px; /* Задает одинаковую ширину */
    height: 120px; /* Задает одинаковую высоту */
    object-fit: cover; /* Обеспечивает заполнение контейнера без искажения */
    border-radius: 50%; /* Убедитесь, что изображение круговое */
}


.fade-in-section {
    opacity: 0;
    transform: translateY(20px);
    transition: opacity 2s ease-out, transform 2s ease-out;
}

.fade-in-section.visible {
    opacity: 1;
    transform: translateY(0);
}

</style>
</body>
</html>