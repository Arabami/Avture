<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AVTURE</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }
        header {
            background: #fff;
            color: #fff;
            padding-top: 30px;
        }
        .logo h1 {
            margin: 0;
            font-size: 1.5rem;
        }
        .about {
            padding: 40px 0;
            background-color: #fff;
        }
        .about h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }
        .about p {
            font-size: 1.1rem;
            line-height: 1.8;
        }
        .social-icons {
            display: flex;
            gap: 10px;
            margin-top: 20px;
        }
        .social-icons a {
            color: #333;
            text-decoration: none;
        }
        .social-icons svg {
            width: 24px;
            height: 24px;
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <div class="logo">
                <h1>AVTURE</h1>
            </div>
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="/">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/products">Products</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="/about">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/contact">Complaint</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="user-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg>
            </div>
        </div>
    </header>

    <section class="about">
        <div class="container">
            <p>Avture tidak hanya sebuah toko furniture; ia adalah cermin dari perjalanan panjang yang dimulai dari cinta akan keindahan dan keinginan untuk memberikan nilai yang sejati kepada setiap pelanggan. Berawal dari visi untuk menciptakan ruang yang indah dan berfungsi dengan baik, Avture didirikan oleh sekelompok pengusaha yang memiliki pengalaman luas dalam industri furnitur.

Cerita dimulai dari sebuah workshop kecil di sudut kota, di mana pengrajin berbakat berkumpul untuk menciptakan karya seni dari kayu dan logam. Inspirasi dari seni tradisional dan teknik modern menyatu dalam setiap produk yang diproduksi, memberikan identitas unik kepada setiap furnitur yang keluar dari Avture.

Dengan semangat untuk menyediakan lebih dari sekadar barang, tim di Avture berusaha keras untuk memastikan setiap produk tidak hanya indah secara visual, tetapi juga kuat secara struktural dan nyaman digunakan. Ini adalah komitmen kami untuk menghadirkan pengalaman belanja yang mengesankan dan solusi furnitur yang berumur panjang.

Avture terus tumbuh dan berkembang, tetapi nilai-nilai inti seperti kualitas, keberlanjutan, dan kepuasan pelanggan tetap menjadi fokus utama dalam setiap langkah kami. Kami berharap dapat terus membagikan keindahan dan kenyamanan melalui setiap produk yang kami tawarkan, dan menjadi bagian dari perjalanan Anda dalam menciptakan ruang yang sempurna.</p>
            <div class="social-icons">
                <a href="https://www.instagram.com" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 2.16c3.2 0 3.584 0 4.847.07 1.254.07 2.092.29 2.724.614a5.387 5.387 0 0 1 1.94 1.23 5.387 5.387 0 0 1 1.23 1.94c.324.632.544 1.47.614 2.724.07 1.263.07 1.647.07 4.847s0 3.584-.07 4.847c-.07 1.254-.29 2.092-.614 2.724a5.387 5.387 0 0 1-1.23 1.94 5.387 5.387 0 0 1-1.94 1.23c-.632.324-1.47.544-2.724.614-1.263.07-1.647.07-4.847.07s-3.584 0-4.847-.07c-1.254-.07-2.092-.29-2.724-.614a5.387 5.387 0 0 1-1.94-1.23 5.387 5.387 0 0 1-1.23-1.94c-.324-.632-.544-1.47-.614-2.724-.07-1.263-.07-1.647-.07-4.847s0-3.584.07-4.847c.07-1.254.29-2.092.614-2.724a5.387 5.387 0 0 1 1.23-1.94 5.387 5.387 0 0 1 1.94-1.23c.632-.324 1.47-.544 2.724-.614 1.263-.07 1.647-.07 4.847-.07m0-2.16c-3.288 0-3.697 0-4.978.071-1.308.072-2.211.327-2.984.702a7.452 7.452 0 0 0-2.71 1.758 7.452 7.452 0 0 0-1.758 2.71c-.375.773-.63 1.676-.702 2.984-.071 1.281-.071 1.69-.071 4.978s0 3.697.071 4.978c.072 1.308.327 2.211.702 2.984a7.452 7.452 0 0 0 1.758 2.71 7.452 7.452 0 0 0 2.71 1.758c.773.375 1.676.63 2.984.702 1.281.071 1.69.071 4.978.071s3.697 0 4.978-.071c1.308-.072 2.211-.327 2.984-.702a7.452 7.452 0 0 0 2.71-1.758 7.452 7.452 0 0 0 1.758-2.71c.375-.773.63-1.676.702-2.984.071-1.281.071-1.69.071-4.978s0-3.697-.071-4.978c-.072-1.308-.327-2.211-.702-2.984a7.452 7.452 0 0 0-1.758-2.71 7.452 7.452 0 0 0-2.71-1.758c-.773-.375-1.676-.63-2.984-.702-1.281-.071-1.69-.071-4.978-.071zM12 5.838a6.162 6.162 0 1 0 6.162 6.162A6.162 6.162 0 0 0 12 5.838zm0 10.155a3.993 3.993 0 1 1 3.993-3.993A3.993 3.993 0 0 1 12 15.993zm6.406-11.845a1.44 1.44 0 1 0 1.44 1.44 1.44 1.44 0 0 0-1.44-1.44z"/></svg>
                </a>
                <a href="https://www.facebook.com" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M22.676 0H1.324C.593 0 0 .593 0 1.324v21.352C0 23.407.593 24 1.324 24H12v-9.293H9.293V12H12V9.293c0-2.677 2.09-4.867 4.667-4.867 1.29 0 2.515.193 2.515.193v2.76H17.09c-1.241 0-1.607.77-1.607 1.563V12H18.8l-.734 2.707H15.48V24h7.196c.73 0 1.324-.593 1.324-1.324V1.324C24 .593 23.407 0 22.676 0z"/></svg>
                </a>
                <a href="https://www.whatsapp.com" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12.002 0c-6.627 0-12 5.373-12 12 0 2.12.55 4.116 1.606 5.915L0 24l6.135-1.598c1.779 1.028 3.74 1.568 5.865 1.568 6.627 0 12-5.373 12-12s-5.373-12-12-12zm0 21.56c-1.795 0-3.517-.487-5.027-1.408l-.36-.215-3.639.948.97-3.544-.235-.373c-.946-1.506-1.446-3.232-1.446-5.002 0-5.14 4.196-9.335 9.335-9.335 5.14 0 9.335 4.196 9.335 9.335s-4.195 9.335-9.335 9.335zm5.594-6.653l-1.614-.755c-.217-.102-.473-.16-.738-.102-.19.043-.424.153-.677.484-.206.275-.396.56-.555.585-.158.025-.393-.1-.628-.236-1.148-.648-2.247-1.453-3.183-3.33-.31-.592-.557-1.24-.704-1.514-.147-.274-.03-.425.11-.561.115-.111.257-.287.388-.438.128-.146.256-.311.384-.46.125-.147.27-.326.428-.516.135-.162.093-.316.066-.439-.027-.125-.272-.68-.527-1.053-.273-.402-.553-.84-.79-1.008-.2-.142-.446-.211-.707-.211-.322 0-.62.047-.886.14-.277.1-.526.243-.756.416-.193.143-.548.535-.8.941-.103.169-.183.338-.252.51-.068.174-.123.355-.173.538-.034.114-.086.257-.155.435-.065.167-.14.348-.217.528-.162.378-.307.788-.424 1.221-.137.507-.255 1.066-.348 1.676-.115.739-.196 1.447-.258 2.115-.034.369-.063.751-.089 1.121-.031.425-.042.847-.042 1.255 0 .246.014.489.042.726.054.451.107.885.16 1.293.058.452.118.886.183 1.303.065.422.124.82.177 1.189.073.463.143.844.212 1.148.138.605.309 1.179.51 1.707.191.497.411.984.643 1.443.227.445.49.873.767 1.27.274.393.566.753.874 1.08.308.325.648.622 1.015.888.361.261.754.499 1.186.696.43.196.878.34 1.352.426.478.086.971.13 1.487.13.594 0 1.142-.03 1.65-.094.598-.074 1.168-.222 1.69-.447.53-.226.985-.493 1.364-.804.377-.309.695-.646.954-1.004.257-.356.485-.735.683-1.128.197-.395.37-.797.508-1.207.144-.441.271-.885.375-1.33.101-.436.19-.884.273-1.331.089-.468.157-.943.207-1.42.048-.468.086-.937.111-1.407.048-872-.267-1.686-.444-2.297-.093-.306-.198-.604-.314-.896-.13-.32-.272-.632-.426-.931-.162-.32-.344-.625-.546-.914-.208-.299-.431-.573-.67-.82-.24-.248-.504-.464-.788-.652-.274-.179-.564-.331-.868-.456z"/></svg>
                </a>
            </div>
        </div>
    </section>

    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
