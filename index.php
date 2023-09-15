<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Emre KORKMAZ- Yazılım Mühendisi</title>
    <link rel="icon" type="image/x-icon" href="assets/ek.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
      <style>
        body {
            background-color: #f8f9fa;
        }
        .navbar {
            background-color: #343a40;
        }
        .navbar brab
        .navbar-dark .navbar-toggler-icon {
            background-color: #343a40;
        }
        .navbar-dark .navbar-toggler:focus, .navbar-dark .navbar-toggler:hover {
            background-color: #343a40;
        }
        .navbar-nav .nav-link {
            color: #fff;
            font-weight: bold;
        }
        .navbar-nav .nav-link.active {
            color: #17a2b8;
        }
        header {
            background-image: url('c.jpg');
            background-size: cover;
            background-position: center;
            color: #fff;
            text-align: center;
            padding: 100px 0;
        }
        footer{
            background-color: #343a40;
        }
        header h1 {
            font-size: 36px;
        }
        header p {
            font-size: 20px;
        }
        .feature {
            font-size: 48px;
        }
        .feature-bg {
            background-color: #007bff;
        }
        .btn-feature {
            background-color: #007bff;
            color: #fff;
            border: none;
        }
        .btn-feature:hover {
            background-color: #0056b3;
        }
       
        @keyframes cardPulse {
            0% {
                transform: scale(1);
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            }
            50% {
                transform: scale(1.02);
                box-shadow: 0 8px 12px rgba(0, 0, 0, 0.2);
            }
            100% {
                transform: scale(1);
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            }
        }

        .yorum-card,
        .reply {
            background-color: #fff;
            border: 1px solid #eaeaea;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
            animation: cardPulse 2s infinite; 
        }

        .yorum-card:hover,
        .reply:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 8px rgba(0, 0, 0, 0.2);
            animation: none; 
        }

        .yorum-card .bi {
            font-size: 24px; 
            color: #007bff; 
        }

        .yorum-card h5.card-title, .yorum-card p.card-text, .yorum-card p.yorum-tarih-saat {
            margin-top: 10px; 
        }

        .yorum-card .btn-like, .yorum-card .btn-comment {
            font-size: 16px;
            color: #333;
            text-decoration: none;
            cursor: pointer;
            transition: color 0.2s ease-in-out;
        }
        .yorum-card .btn-like:hover{
            color: #ff6b6b;
        }

        .yorum-card .btn-comment:hover {
            color: #007bff;
        }

        [data-aos] {
            opacity: 0;
            transition-property: opacity;
        }

        [data-aos].fade-in {
            opacity: 1;
        }

        [data-aos].aos-animate {
            opacity: 1;
        }
        .typed {
            display: inline-block;
            transform: translateY(0px);
            transition: opacity 0.3s, transform 0.3s;
            font-size: 24px;
            font-weight: bold;
            color: #f8f9fa; 
        }

        .typed-text {
            display: inline-block;
            font-size: 24px;
            font-weight: bold;
            color: #fff; 
        }
        
        /* Yanıt tasarımı */
        .replies {
            margin-top: 20px;
            padding-top: 20px;
            border-top: 1px solid #eaeaea;
        }

        .reply {
            border: 1px solid #eaeaea;
            border-radius: 10px;
            padding: 10px;
            margin: 10px 0;
            background-color: #f8f9fa;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .reply p {
            margin: 5px 0;
            font-size: 14px;
            color: #333;
        }

        .reply .bi {
            font-size: 18px; 
            color: #007bff;
        }

        #yanit-formu {
            display: none;
            margin-top: 20px;
            background-color: #f8f9fa;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: opacity 0.3s, transform 0.3s;
        }

        #yanit-formu input,
        #yanit-formu textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        #yanit-formu button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        #yanit-formu button:hover {
            background-color: #0056b3;
        }

        .static {
        font-weight: normal; 
        }

        .typed {
        display: inline;
        border-bottom: 3px solid #fff; 
        animation: underline 0.7s steps(20) infinite;
        }

        .cursor {
        font-weight: bold;
        animation: blink 0.7s infinite;
        transform: rotate(90deg);
        }

        @keyframes blink {
        0%, 100% {
            opacity: 0;
        }
        50% {
            opacity: 1;
        }
        }

        @keyframes underline {
        to {
            border-color: transparent;
        }
        }

    </style>
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
        <a class="navbar-brand" href="index.php">
                <img src="assets/ek.ico" alt="E|K" style="width: 40px; height: 40px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Ana Sayfa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="yeteneklerim.html">Yeteneklerim</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="kurs.html">Sertifika ve Kurslar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="hakkımda.html">Hakkımda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="iletisim.html">İletişim</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <button id="scrollTopButton" class="scroll-top-button"><i class="bi bi-arrow-up"></i></button>

    <header>
        <div class="container px-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-6">
                    <div class="text-center my-5">
                        <img src="ben.png" alt="Emre Korkmaz" class="img-fluid rounded-circle" style="width: 200px; height: 200px;">
                        <div class="hero-container" data-aos="fade-in" data-aos-duration="1000">
                            <h1>Emre KORKMAZ</h1>
                            <p class="typed-text"><span class="static">Ben </span><span class="typed"></span><span class="cursor">|</span></p>
                        </div>
                        <div class="d-grid gap-3 d-sm-flex justify-content-sm-center">
                            <a class="btn btn-primary btn-lg px-4 me-sm-3" href="#features">Kariyerim</a>
                            <a class="btn btn-outline-light btn-lg px-4" href="#message">Hakkımda Yorum Yap</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Features section-->
    <section class="py-5 border-bottom" id="features" data-aos="fade-up" data-aos-duration="1000">
        <div class="container px-5 my-5">
            <div class="row gx-5">
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-collection"></i></div>
                    <h2 class="h4 fw-bolder">Aldığım Eğitimler</h2>
                    <p>Eğitim aldığım bütün kaynak ve okullara göz atmak için buraya bakabilirisiniz.</p>
                    <a class="btn btn-primary btn-feature" href="egitim.html">Daha Fazla <i class="bi bi-arrow-right"></i></a>
                </div>
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-building"></i></div>
                    <h2 class="h4 fw-bolder">İş Deneyimlerim</h2>
                    <p>Mezun olduktan sonrasında ki staj ve iş deneyimlerime göz atmak için buraya bakabilirsiniz.</p>
                    <a class="btn btn-primary btn-feature" href="is.html">Daha Fazla <i class="bi bi-arrow-right"></i></a>
                </div>
                <div class="col-lg-4">
                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-toggles2"></i></div>
                    <h2 class="h4 fw-bolder">Projelerim</h2>
                    <p>Öğrenim hayatım ve sonrasında geliştirmiş olduğum projelere göz atmak için buraya bakabilirsiniz.</p>
                    <a class="btn btn-primary btn-feature" href="proje.html">Daha Fazla <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Yorum section-->
    <section class="py-5 border-bottom" id="yorum" data-aos="fade-up" data-aos-duration="1000">
        <div class="container px-5 my-5 px-5" id="yorum">
            <div class="text-center mb-5">
                <h2 class="fw-bolder">Hakkımda Yapılan Akademik Yorumlar</h2>
            </div>
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-6">
                <!-- Yorum kartları -->
                <div id="yorumListesi">
                    <?php
                    include('db.php'); 

                    $sql = "SELECT * FROM yorum";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo '<div class="card mb-3 yorum-card">';
                            echo '<div class="card-body">';
                            echo '<h5 class="card-title"><i class="bi bi-person"></i> ' . $row["mevki"] . " " . $row["name"] .'</h5>';
                            echo '<p class="card-text"><i class="bi bi-envelope"></i> ' . $row["eMail"] . '</p>';
                            echo '<p class="card-text"><i class="bi bi-briefcase"></i> ' . $row["konum"] . '</p>';
                            echo '<p class="card-text"><i class="bi bi-chat-dots"></i> ' . $row["mesaj"] . '</p>';
                            echo '<p class="card-text"><i class="bi bi-clock"></i> Yorum Tarihi: ' . $row["tarih_saat"] . '</p>'; // Tarih ve saat bilgisi
                            echo '<div class="d-flex justify-content-between align-items-center">';
                            // Beğeni butonu ve sayısı
                            echo '<button class="btn btn-link btn-like" data-comment-id="' . $row["id"] . '" id="likeBtn' . $row["id"] . '"><i class="bi bi-heart"></i> Beğen <span class="like-count">' . $row["begeni"] . '</span></button>';
                            // Yorum yapma butonu
                            echo '<button class="btn btn-link btn-comment" data-comment-id="' . $row["id"] . '"><i class="bi bi-chat-dots"></i> Yanıtla</button>';
                            echo '</div>';
                            echo '</div>';
                            // Yanıt formu
                            echo '<div class="reply-form" style="display: none;">';
                            echo '<form id="yanit-form' . $row["id"] . '">';
                            echo '<input class="form-control" type="text" placeholder="Adınız ve Soyadınız" required>';
                            echo '<input class="form-control" type="text" placeholder="Şirket / Okul" required>';
                            echo '<textarea class="form-control" placeholder="Yanıtınız veya Mesajınız" style="height: 10rem" required></textarea>';
                            echo '<button type="submit" class="btn btn-primary">Yanıtı Gönder</button>';
                            echo '</form>';
                            echo '</div>';
                            // Yanıtları listeleme bölümü
                            echo '<div class="replies">';
                            displayReplies($row["id"]);
                            echo '</div>';
                            echo '</div>';
                        }
                    } else {
                        echo "<p class='text-muted'>Henüz yorum yok.</p>";
                    }
                    $conn->close();
                    ?>
                </div>
                    <!-- Yanıt formu -->
                    <div id="yanit-formu" style="display: none;">
                        <form id="yanit-form">
                            <!-- Yanıt metni girişi -->
                            <input class="form-control" id="isim" type="text" placeholder="Adınız ve Soyadınız" data-sb-validations="required" name="namee" />
                            <input class="form-control" id="sirket" type="text" placeholder="Şirket / Okul" data-sb-validations="required" name="companyy" />
                            <input class="form-control" id="pozis" type="text" placeholder="Pozisyon / Mevki" data-sb-validations="required" name="pozisy" />
                            <input class="form-control" id="ePosta" type="text" placeholder="E-posta adresiniz" data-sb-validations="required" name="epost" />
                            <textarea class="form-control" id="yanit-metni" type="text" placeholder="Yanıtınız veya Mesajınız" style="height: 10rem" data-sb-validations="required" name="messaj"></textarea>
                            <!-- Yanıt gönderme butonu -->
                            <button type="submit" id="yolla-button">Yolla</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-light py-5" id="message" data-aos="fade-up" data-aos-duration="1000">
        <div class="container px-5 my-5 px-5">
            <div class="text-center mb-5">
                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div>
                <h2 class="fw-bolder">Benim hakkımda yorum yapmak için aşağıdaki alanları doldurabilirsiniz.</h2>
                <p class="lead mb-0">Yorumlarınız için şimdiden teşekkürler.</p>
            </div>
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-6">
                    <form id="contactForm" action="submit.php" method="POST">
                        <div class="form-floating mb-3">
                            <input class="form-control" id="name" type="text" placeholder="Adınız ve Soyadınız" data-sb-validations="required" name="name" />
                            <label class="small text-muted" for="name">İsim Soyisim</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" name="email" />
                            <label class="small text-muted" for="email">E-posta adresiniz</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="mevki" type="text" placeholder="Pozisyon veya Mevki" data-sb-validations="required" name="position" />
                            <label class="small text-muted" for="mevki">Pozisyon veya Mevkiniz</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="konum" type="text" placeholder="Şirket veya Okul" data-sb-validations="required" name="company" />
                            <label class="small text-muted" for="konum">Şirket veya Okul Adı</label>
                        </div>
                        <div class="form-floating mb-3">
                            <textarea class="form-control" id="mesaj" type="text" placeholder="Yorumunuz veya Mesajınız" style="height: 10rem" data-sb-validations="required" name="message"></textarea>
                            <label class="small text-muted" for="mesaj">Yorumunuz veya Mesajınız</label>
                        </div>
                        <div class="d-grid">
                            <button class="btn btn-primary btn-lg" id="submitButton" type="submit">Gönder</button>
                        </div>
                        <div id="successMessage" style="display: none;" class="alert alert-success">
                            Yorum başarıyla kaydedildi.
                        </div>
                        <div class="d-none" id="submitSuccessMessage">
                            <div class="text-center mb-3">
                                <div class="fw-bolder">Mesajınız başarıyla gönderildi. Teşekkür ederiz!</div>
                            </div>
                        </div>
                        <div class="d-none" id="submitErrorMessage">
                            <div class="text-center text-danger mb-3">Form gönderilirken bir hata meydana geldi. Lütfen daha sonra tekrar deneyin.</div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer class="py-5 bg" id="footers">
        <div class="container px-5"><p class="m-0 text-center text-white">Copyright &copy; Emre Korkmaz 2023</p></div>
    </footer>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
        const form = document.getElementById("contactForm");
        const nameInput = document.getElementById("name");
        const emailInput = document.getElementById("email");
        const positionInput = document.getElementById("mevki");
        const companyInput = document.getElementById("konum");
        const messageInput = document.getElementById("mesaj");
        const successMessage = document.getElementById("successMessage");

        form.addEventListener("submit", function(event) {
            let isValid = true;

            if (nameInput.value.trim() === "") {
                isValid = false;
                alert("Lütfen adınızı ve soyadınızı girin.");
            }

            const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
            if (!emailPattern.test(emailInput.value)) {
                isValid = false;
                alert("Geçerli bir e-posta adresi girin.");
            }

            if (positionInput.value.trim() === "") {
                isValid = false;
                alert("Lütfen bir pozisyon veya mevki girin.");
            }

            if (companyInput.value.trim() === "") {
                isValid = false;
                alert("Lütfen bir şirket veya okul adı girin.");
            }

            if (messageInput.value.trim() === "") {
                isValid = false;
                alert("Lütfen bir yorum veya mesaj girin.");
            }

            if (!isValid) {
                event.preventDefault(); 
            } else {
                successMessage.style.display = "block";
            }
        });
    });

    const scrollTopButton = document.getElementById('scrollTopButton');

    function toggleScrollTopButton() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            scrollTopButton.style.display = 'block';
        } else {
            scrollTopButton.style.display = 'none';
        }
    }

    window.onload = toggleScrollTopButton;
    window.onscroll = toggleScrollTopButton;

    scrollTopButton.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });

    </script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>

        AOS.init();
        AOS.refresh();

        document.addEventListener("DOMContentLoaded", function() {
        const typedSpan = document.querySelector(".typed");
        const cursor = document.querySelector(".cursor");
        const textArray = ["Mühendisim", "Programcıyım", "Yazılımcıyım", "Tasarımcıyım"];
        let textIndex = 0;
        let charIndex = 0;

        function type() {
            if (charIndex < textArray[textIndex].length) {
                typedSpan.innerHTML += textArray[textIndex][charIndex];
                charIndex++;
                setTimeout(type, 100); 
            } else {
                setTimeout(erase, 1000); 
            }
        }

        function erase() {
            if (charIndex > 0) {
                typedSpan.innerHTML = textArray[textIndex].substring(0, charIndex - 1);
                charIndex--;
                setTimeout(erase, 50); 
            } else {
                textIndex = (textIndex + 1) % textArray.length;
                setTimeout(type, 1000); 
            }
        }

        setTimeout(type, 1000);

        setTimeout(() => {
            cursor.style.display = "inline";
        }, 2000); 
    });

        document.addEventListener("DOMContentLoaded", function() {
            const likeButtons = document.querySelectorAll(".btn-like");

            likeButtons.forEach(function(likeButton) {
                likeButton.addEventListener("click", function() {
                    const commentId = this.getAttribute("data-comment-id");

                    const likedComments = JSON.parse(localStorage.getItem("likedComments")) || [];

                    if (likedComments.includes(commentId)) {
                        alert("Bu yorumu zaten beğendiniz!");
                        return;
                    }

                    const xhr = new XMLHttpRequest();
                    xhr.open("POST", "update_likes.php", true);
                    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                    xhr.onreadystatechange = function() {
                        if (xhr.readyState === 4 && xhr.status === 200) {
                            const likeCountElement = document.querySelector("#likeBtn" + commentId + " .like-count");
                            const currentLikes = parseInt(likeCountElement.textContent);
                            likeCountElement.textContent = currentLikes + 1;

                            likedComments.push(commentId);
                            localStorage.setItem("likedComments", JSON.stringify(likedComments));
                        }
                    };
                    
                    xhr.send("comment_id=" + commentId);
                });
            });
        });

        document.addEventListener("DOMContentLoaded", function() {
            const commentButtons = document.querySelectorAll(".btn-comment");
            const yanitFormu = document.getElementById("yanit-formu");
            const yanitMetni = document.getElementById("yanit-metni");
            const yanitİsim =document.getElementById("isim");
            const yanitSirket =document.getElementById("sirket");
            const yanitPozisyon = document.getElementById("pozis");
            const yanitEpost =document.getElementById("ePosta");


        commentButtons.forEach(function(button) {
            button.addEventListener("click", function() {
                const commentId = this.getAttribute("data-comment-id");
                if (yanitFormu.style.display === "block" && yanitMetni.dataset.commentId === commentId) {
                    yanitFormu.style.display = "none";
                } else {
                    yanitFormu.style.display = "block";
                    yanitMetni.dataset.commentId = commentId;
                    yanitFormu.scrollIntoView({ behavior: "smooth" });
                }
            });
        });

        const yanitForm = document.getElementById("yanit-form");
        yanitForm.addEventListener("submit", function(event) {
            event.preventDefault();
            
            const commentId = yanitForm.querySelector("#yanit-metni").dataset.commentId;
            const yanitMetniValue = yanitForm.querySelector("#yanit-metni").value;
            const yanitİsimValue = yanitForm.querySelector("#isim").value;
            const yanitSirketValue = yanitForm.querySelector("#sirket").value;
            const yanitEpostValue = yanitForm.querySelector("#ePosta").value;
            const yanitPozisyonValue = yanitForm.querySelector("#pozis").value;

            if (
                yanitMetniValue.trim() === "" ||
                yanitİsimValue.trim() === "" ||
                yanitSirketValue.trim() === "" ||
                yanitEpostValue.trim() === "" ||
                yanitPozisyonValue.trim() === ""
            ) {
                alert("Lütfen tüm alanları doldurun.");
                return;
            } else {
                alert("Yanıtınız başarıyla gönderilmiştir!");
                location.reload();
            }

            const xhr = new XMLHttpRequest();
            xhr.open("POST", "yanit.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function() {   
                if (xhr.readyState === 4 && xhr.status === 200) {
                    alert("Yanıt başarıyla gönderildi.");
                }
            };
            
            xhr.send("comment_id=" + commentId + "&messaj=" + encodeURIComponent(yanitMetniValue) + "&namee=" + encodeURIComponent(yanitİsimValue) + "&companyy=" + encodeURIComponent(yanitSirketValue) + "&epost=" + encodeURIComponent(yanitEpostValue) + "&pozisy=" + encodeURIComponent(yanitPozisyonValue));
        });
    });

    <?php 
    function displayReplies($commentId) {
        include('db.php'); 
        $sql = "SELECT * FROM yanit WHERE yorum_id = $commentId";
        $result = $conn->query($sql);
        echo "<p>Yapılan Yanıtlar</p>";
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<div class="reply">'; 
                echo '<p><i class="bi bi-person"></i>' . " " . $row["mevki"] . " " . $row["isim_soyisim"] .'</p>';
                echo '<p><i class="bi bi-briefcase"></i>' . " " . $row["sirket"] . '</p>';
                echo '<p><i class="bi bi-envelope"></i>' . " " . $row["ePosta"] . '</p>';
                echo '<p><i class="bi bi-chat-dots"></i>' . " " . $row["yorum_metni"] . '</p>';
                echo '<p><i class="bi bi-clock"></i> Yanıt Tarihi: ' . $row["tarih_saat"] . '</p>';
                echo '</div>';
            }
        } else {
            echo "<p class='text-muted'>Henüz bu yorum için yanıt yok.</p>";
        }
        $conn->close();
    }
    ?>
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
