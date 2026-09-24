<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kontak - STIS HOSPITAL</title>
    <style>
        body { margin: 0; font-family: Arial, Helvetica, sans-serif; color: #1f2937; background: #f8fafc; }
        header.nav { background: #164e63; color: #fff; padding: 16px 32px; display: flex; justify-content: space-between; align-items: center; }
        header.nav .brand { font-size: 20px; font-weight: bold; }
        header.nav nav a { color: #fff; text-decoration: none; margin-left: 24px; font-size: 14px; }
        .container { max-width: 600px; margin: 40px auto; padding: 24px; background: #fff; border-radius: 8px; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1); }
        .form-group { margin-bottom: 16px; }
        label { display: block; margin-bottom: 8px; font-weight: bold; }
        input[type="text"], input[type="email"], textarea { width: 100%; padding: 10px; border: 1px solid #d1d5db; border-radius: 4px; box-sizing: border-box; }
        button { background: #0f766e; color: #fff; border: none; padding: 10px 20px; border-radius: 4px; cursor: pointer; font-weight: bold; }
        button:hover { background: #0d9488; }
    </style>
</head>
<body>
    <header class="nav">
        <div class="brand">STIS HOSPITAL</div>
        <nav>
            <a href="/">Beranda</a>
            <a href="/upload">Unggah Rujukan Pasien</a>
            <a href="/contact">Kontak</a>
        </nav>
    </header>

    <div class="container">
        <h2>Hubungi Kami</h2>
        <p>Silakan tinggalkan pesan melalui formulir di bawah ini.</p>
        
        <form action="/contact" method="POST">
            @csrf
            <div class="form-group">
                <label for="email">Alamat Email:</label>
                <input type="text" id="email" name="email" required placeholder="email@contoh.com">
            </div>
            <div class="form-group">
                <label for="message">Pesan:</label>
                <textarea id="message" name="message" rows="5" required></textarea>
            </div>
            <button type="submit">Kirim Pesan</button>
        </form>
    </div>
</body>
</html>
