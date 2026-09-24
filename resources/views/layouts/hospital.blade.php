<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Beranda') - LSP-Sim</title>
    <style>
        * { box-sizing: border-box; }
        body { margin: 0; font-family: Arial, Helvetica, sans-serif; color: #1f2937; background: #f8fafc; }

        .sim-badge { background: #fef3c7; color: #92400e; text-align: center; padding: 6px 12px; font-size: 12px; font-weight: bold; }

        header.nav {
            background: #164e63; color: #fff; padding: 16px 24px;
            display: flex; flex-wrap: wrap; gap: 8px 24px; justify-content: space-between; align-items: center;
        }
        header.nav .brand { font-size: 20px; font-weight: bold; }
        header.nav .brand a { color: #fff; text-decoration: none; }
        header.nav nav { display: flex; flex-wrap: wrap; gap: 4px 20px; }
        header.nav nav a { color: #fff; text-decoration: none; font-size: 14px; }
        header.nav nav a:hover { text-decoration: underline; }

        .hero {
            width: 100%; background: #164e63; color: #fff; text-align: center;
            padding: 64px 24px;
        }
        .hero h1 { margin: 0 0 8px; font-size: 28px; }
        .hero p { margin: 0; font-size: 14px; color: #cbd5e1; }

        .services { max-width: 960px; margin: 40px auto; padding: 0 24px; }
        .services h2 { color: #164e63; }
        .service-grid { display: flex; gap: 16px; flex-wrap: wrap; margin-top: 16px; }
        .service-card { flex: 1 1 220px; background: #fff; border: 1px solid #e2e8f0; border-radius: 8px; padding: 20px; }
        .service-card h3 { margin-top: 0; color: #0f766e; font-size: 16px; }

        .page { max-width: 640px; margin: 40px auto; padding: 0 24px; }
        .page h1 { color: #164e63; font-size: 22px; }
        .page p.lead { color: #475569; font-size: 14px; }

        .card { background: #fff; border: 1px solid #e2e8f0; border-radius: 8px; padding: 24px; margin-top: 16px; }
        label { display: block; font-size: 13px; font-weight: bold; color: #334155; margin-top: 14px; margin-bottom: 4px; }
        input[type=text], input[type=email], input[type=file], textarea {
            width: 100%; padding: 8px 10px; border: 1px solid #cbd5e1; border-radius: 6px;
            font-size: 14px; font-family: inherit;
        }
        textarea { min-height: 100px; resize: vertical; }
        button {
            margin-top: 20px; background: #0f766e; color: #fff; border: none;
            padding: 10px 20px; border-radius: 6px; font-size: 14px; cursor: pointer;
        }
        button:hover { background: #0c5c56; }

        .result { margin-top: 16px; padding: 12px; border-radius: 6px; font-size: 13px; font-family: monospace; white-space: pre-wrap; word-break: break-word; }
        .result.ok { background: #ecfdf5; border: 1px solid #a7f3d0; color: #065f46; }
        .result.err { background: #fef2f2; border: 1px solid #fecaca; color: #991b1b; }

        footer { text-align: center; padding: 24px; color: #64748b; font-size: 13px; }

        @media (max-width: 480px) {
            header.nav { padding: 12px 16px; }
            .services, .page { padding: 0 16px; margin: 24px auto; }
        }
    </style>
</head>
<body>
    <div class="sim-badge">LINGKUNGAN SIMULASI - BUKAN SITUS RESMI - KHUSUS LAB PENTEST KSI</div>
    <header class="nav">
        <div class="brand"><a href="/">LSP-Sim</a></div>
        <nav>
            <a href="/">Beranda</a>
            <a href="/upload">Unggah Berkas</a>
        </nav>
    </header>

    @yield('full')

    <div class="page">
        @yield('content')
    </div>

    <footer>
        &copy; {{ date('Y') }} LSP-Sim. Lingkungan Simulasi - Lab Pentest KSI, bukan sistem produksi.
    </footer>

    @yield('scripts')
</body>
</html>
