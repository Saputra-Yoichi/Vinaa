<?php
$nama_pasangan = "Vinaaa";
$pesan_tambahan = "Dari sekian banyak kebetulan di hidupku, kamu adalah yang paling indah. Dan aku nggak mau kehilangan itu";
$teks_cinta = "I really loveeee youuuu more than you think"; 

setlocale(LC_TIME, 'id_ID.utf8', 'id_ID', 'id_ID.UTF-8', 'Indonesian');
$tanggal_hari_ini = date("d F Y"); 
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For <?php echo $nama_pasangan; ?> ❤️</title>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Poppins:wght@300;600&family=Dosis:wght@500&display=swap" rel="stylesheet">
    
    <style>
        body {
            margin: 0;
            padding: 0;
            background: #000;
            height: 100vh;
            overflow: hidden;
            font-family: 'Poppins', sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .main-content {
            position: relative;
            z-index: 100; 
            text-align: center;
            background: rgba(0, 0, 0, 0.2); 
            padding: 40px;
            border-radius: 30px;
            backdrop-filter: blur(1px); 
            border: 1px solid rgba(255, 255, 255, 0.15);
            pointer-events: none; 
            max-width: 85%;
        }

        .big-heart {
            position: relative;
            width: 80px;
            height: 80px;
            background: #ff4d6d;
            transform: rotate(45deg);
            margin: 0 auto 60px;
            animation: beat 1.2s infinite cubic-bezier(0.215, 0.61, 0.355, 1);
            filter: drop-shadow(0 0 20px #ff4d6d);
        }
        .big-heart::before, .big-heart::after {
            content: "";
            position: absolute;
            width: 80px;
            height: 80px;
            background: inherit;
            border-radius: 50%;
        }
        .big-heart::before { top: -40px; left: 0; }
        .big-heart::after { left: -40px; top: 0; }

        h1 {
            font-family: 'Dancing Script', cursive;
            font-size: 3.5em;
            color: #fff;
            margin: 10px 0;
            text-shadow: 0 0 15px rgba(234, 128, 176, 0.8);
        }

        .love-text {
            font-size: 1.1em;
            letter-spacing: 3px;
            color: #00f5d4;
            font-weight: 600;
            text-transform: uppercase;
            animation: glowText 2s infinite alternate;
        }

        .date-today {
            font-size: 0.85em;
            color: #fff;
            margin: 15px 0;
            letter-spacing: 2px;
            opacity: 0.9;
        }

        @keyframes glowText {
            from { text-shadow: 0 0 5px #00f5d4; }
            to { text-shadow: 0 0 15px #00f5d4, 0 0 25px #9b5de5; }
        }

        /* BACKGROUND ANIMASI */
        #ui {
            position: absolute;
            width: 100%;
            height: 100%;
            z-index: 1;
        }

        #ui .love {
            position: absolute;
            top: 50%;
            left: 50%;
            margin: -225px 0 0 -225px;
        }

        #ui .love_word {
            color: rgba(234, 128, 176, 0.7); /* Tambah sedikit opacity */
            font-size: 1.4rem;
            transform: translateY(-100%) rotateZ(-30deg);
            font-family: "Dosis", sans-serif;
            text-shadow: 0 0 5px #fff;
            letter-spacing: 2px;
            white-space: nowrap;
        }

        #ui .love:last-child .love_word {
            color: #fff;
            font-size: 2.2rem;
            text-shadow: 0 0 15px #ea80b0;
        }

        #ui .love_horizontal {
            animation: horizontal 10000ms infinite alternate ease-in-out;
        }

        #ui .love_vertical {
            animation: vertical 20000ms infinite linear;
        }

        .div_btn {
            position: fixed;
            cursor: pointer;
            width: 55px;
            height: 55px;
            border: 3px solid #fff;
            border-radius: 50%;
            font-size: 1.5em;
            line-height: 55px;
            text-align: center;
            z-index: 999;
            color: white;
            text-decoration: none;
            background-color: rgba(0, 0, 0, 0.3);
        }

        #btn-make { bottom: 200px; right: 30px; }
        #div_support { bottom: 80px; right: 20px; }

        @keyframes horizontal {
            from { transform: translateX(0px); }
            to { transform: translateX(450px); }
        }

        @keyframes vertical {
            0% { transform: translateY(180px); }
            10% { transform: translateY(45px); }
            18% { transform: translateY(0px); }
            25% { transform: translateY(112.5px); }
            32% { transform: translateY(0px); }
            50% { transform: translateY(180px); }
            75% { transform: translateY(450px); }
            100% { transform: translateY(180px); }
        }

        @keyframes beat {
            0% { transform: rotate(45deg) scale(1); }
            20% { transform: rotate(45deg) scale(1.2); }
            40% { transform: rotate(45deg) scale(1); }
        }
    </style>
</head>
<body>

    <div id="ui">
        <?php for($i = 1; $i <= 100; $i++): ?>
            <div class="love" style="animation-delay: -<?php echo $i * 300; ?>ms">
                <div class="love_horizontal" style="animation-delay: -<?php echo $i * 300; ?>ms">
                    <div class="love_vertical" style="animation-delay: -<?php echo $i * 300; ?>ms">
                        <div class="love_word">I Love You <?php echo $nama_pasangan; ?></div>
                    </div>
                </div>
            </div>
        <?php endfor; ?>
    </div>

    <div class="main-content">
        <div class="big-heart"></div>
        <h1>For <?php echo $nama_pasangan; ?></h1>
        <div class="love-text"><?php echo $teks_cinta; ?></div>
        
        <div class="date-today">✨ <?php echo $tanggal_hari_ini; ?> ✨</div>

        <p style="color: #fff; margin-top: 20px; font-style: italic; line-height: 1.6; opacity: 0.9;">
            <?php echo $pesan_tambahan; ?>
        </p>
    </div>

    <a href="#" class="div_btn" id="btn-make">❤️</a>
    <div class="div_btn" id="div_support">✨</div>
</body>
</html>
