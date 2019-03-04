<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Antorium - Kontakt | Masz pytania lub sugestie? Zapraszamy do kontaktu!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0,  maximum-scale=1.0 shrink-to-fit=no"/>
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    
    <!-- Fonts and icons -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:500&amp;subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,600&amp;subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    
    <!-- Styles -->
    <link rel="stylesheet" href="styles/predefined.css">
    <link rel="stylesheet" href="styles/master.css">
    <link rel="stylesheet" href="styles/media.css">
    
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
    
<!-- SITE HTML CODE START -->
    
    <?php include("included/top-bar.php"); ?>
    
    <!-- Map -->
    <section class="w-100 border-bottom" style="height: 400px;">
        <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.openstreetmap.org/export/embed.html?bbox=23.219110965728763%2C50.25536860001923%2C23.24305772781372%2C50.26362691876817&amp;layer=mapnik&amp;marker=50.2594979383533%2C23.23108434677124"></iframe>
    </section>
    
    <div class="container py-5 contact">
        <div class="row">
            <section class="col-lg-6">
                <h5 class="m-0 text-uppercase font-weight-bold">Dane kontaktowe</h5>
                <hr class="col-1 d-inline-block">
                
                <address class="mb-4">
                    <p><b>Antorium</b></p>
                    <p><i class="fas fa-map-marker-alt"></i>Dąbrówka 8, 37-611 Cieszanów</p>
                        <span class="d-block mt-4"></span>
                    <p><i class="fas fa-info-circle"></i>NIP: 793-128-42-02</p>
                    <p><i class="fas fa-info-circle"></i>REGON: 360175663</p>
                </address>
                
                <hr class="col-1 d-inline-block">
                
                <h5 class="mb-3" style="font-size: 1.12rem;">Godziny otwarcia</h5>
                <p><i class="fas fa-clock"></i> Poniedziałek-piątek: 08:30 - 16:30</p>
                <p><i class="fas fa-clock"></i> Soboty: 10:00 - 14:00</p>
                <p><i class="fas fa-clock"></i> Niedziela: Nieczynne</p>
                
                <p class="mt-3">Dodatkowo w sezonie (maj-czerwiec)</p>
                <p><i class="fas fa-clock"></i> Wypożyczalnia: 12:00-14:00</p>
            </section>
            <section class="col-lg-6">
                <h5 class="m-0 text-uppercase font-weight-bold">Masz pytania? Napisz do nas!</h5>
                <hr class="col-1 d-inline-block">
                
                <form action="scripts/send-message.php" method="POST" id="contact-form">
                    <input type="text" name="user-name" class="form-control px-1" placeholder="Imię i nazwisko *" maxlength="256">
                    <input type="email" name="user-email" class="form-control mt-3 px-1" placeholder="Twój email *" maxlength="256">
                    <input type="text" name="message-title" class="form-control mt-3 px-1" placeholder="Temat *" maxlength="256">
                    
                    <textarea class="form-control mt-3 px-1" name="message" id="message" cols="30" rows="3" style="min-height: 80px; max-height: 320px;" placeholder="Treść wiadomości *" maxlength="2048"></textarea>
                    
                    <label>
                        <input type="checkbox" name="rules" class="mt-4">  <p class="text-justify d-inline" style="font-size: .68rem; padding-left: 5px;">Firma Krysiak Sp. z o.o. z siedzibą w Baranowie, ul. Rolna 6, wpisana do Rejestru Przedsiębiorców KRS prowadzonego przez Sąd Rejonowy Poznań-Nowe Miasto i Wilda w Poznaniu, VIII Wydział Gospodarczy KRS pod numerem KRS: 0000533051, NIP: 781-190-36-79, REGON: 360175663, posiadająca kapitał zakładowy w kwocie: 5.000.000 PLN. Jako administrator danych, informuje Pana/ Panią, iż podanie danych jest dobrowolne, lecz niezbędne w celu prawnie uzasadnionego interesu administratora danych, jakim jest odpowiedź na Państwa zapytanie. Dane osobowe będą przechowywane przez okres niezbędny do prawidłowej realizacji odpowiedzi na zapytanie, a także zgodnie z innymi/powiązanymi przepisami prawa. Posiada Pani/Pan prawo dostępu do treści swoich danych - ich sprostowania, usunięcia, ograniczenia przetwarzania, prawo do przenoszenia danych, prawo do cofnięcia zgody w dowolnym momencie bez wpływu na zgodność z prawem przetwarzania. Dane mogą być udostępniane podmiotom upoważnionym na podstawie odrębnych przepisów prawa. Podane dane będą przetwarzane na zasadzie dobrowolności ich podania - zgodnie z treścią ogólnego rozporządzenia o ochronie danych. Ma Pan/Pani prawo wniesienia skargi do organu nadzorczego gdy uzna Pani/Pan, iż przetwarzanie danych osobowych Pani/Pana dotyczących, narusza przepisy ogólnego rozporządzenia o ochronie danych osobowych z dnia 27 kwietnia 2016 r.</p>
                    </label>
                    
                    <div class="row mt-3 mx-1 d-flex justify-content-between align-items-center">
                        <div class="g-recaptcha" data-sitekey="6LdxZpUUAAAAAK7vlaE1ouBW8xZOz2fULSXuEW_q"></div>
                        
                        <div>
                            <input type="submit" value="Wyślij!" class="btn btn-primary d-block text-uppercase">
                        </div>
                    </div>
                </form>
            </section>
        </div>
    </div>
    
    <?php include("included/footer.php"); ?>
    
<!-- SITE HTML CODE END -->

    <!-- JQuery, Popper, Boostrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
  
</body>
</html>