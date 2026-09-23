<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Beranda') - STIS HOSPITAL</title>
    <style>
        body { margin: 0; font-family: Arial, Helvetica, sans-serif; color: #1f2937; background: #f8fafc; }
        header.nav { background: #164e63; color: #fff; padding: 16px 32px; display: flex; justify-content: space-between; align-items: center; }
        header.nav .brand { font-size: 20px; font-weight: bold; }
        header.nav .brand a { color: #fff; text-decoration: none; }
        header.nav nav a { color: #fff; text-decoration: none; margin-left: 24px; font-size: 14px; }
        .banner { width: 100%; display: block; }
        .page { max-width: 640px; margin: 40px auto; padding: 0 24px; }
        .page h1 { color: #164e63; font-size: 22px; }
        .page p.lead { color: #475569; font-size: 14px; }
        .card { background: #fff; border: 1px solid #e2e8f0; border-radius: 8px; padding: 24px; margin-top: 16px; }
        label { display: block; font-size: 13px; font-weight: bold; color: #334155; margin-top: 14px; margin-bottom: 4px; }
        input[type=text], input[type=email], input[type=file], textarea {
            width: 100%; padding: 8px 10px; border: 1px solid #cbd5e1; border-radius: 6px;
            font-size: 14px; box-sizing: border-box; font-family: inherit;
        }
        textarea { min-height: 100px; resize: vertical; }
        button {
            margin-top: 20px; background: #0f766e; color: #fff; border: none;
            padding: 10px 20px; border-radius: 6px; font-size: 14px; cursor: pointer;
        }
        button:hover { background: #0c5c56; }
        .result { margin-top: 16px; padding: 12px; border-radius: 6px; font-size: 13px; font-family: monospace; white-space: pre-wrap; }
        .result.ok { background: #ecfdf5; border: 1px solid #a7f3d0; color: #065f46; }
        .result.err { background: #fef2f2; border: 1px solid #fecaca; color: #991b1b; }
        footer { text-align: center; padding: 24px; color: #64748b; font-size: 13px; }
    </style>
</head>
<body>
    <header class="nav">
        <div class="brand"><a href="/">STIS HOSPITAL</a></div>
        <nav>
            <a href="/">Beranda</a>
            <a href="/upload">Unggah Rujukan Pasien</a>
        </nav>
    </header>

    <div class="page">
        @yield('content')
    </div>

    <footer>
        &copy; {{ date('Y') }} STIS HOSPITAL. Sistem Manajemen Rumah Sakit - Lingkungan Lab Pentest KSI.
    </footer>
</body>
</html>
