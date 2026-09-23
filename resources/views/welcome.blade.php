<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>STIS HOSPITAL - Sistem Manajemen Rumah Sakit</title>
    <style>
        body { margin: 0; font-family: Arial, Helvetica, sans-serif; color: #1f2937; background: #f8fafc; }
        header.nav { background: #164e63; color: #fff; padding: 16px 32px; display: flex; justify-content: space-between; align-items: center; }
        header.nav .brand { font-size: 20px; font-weight: bold; }
        header.nav nav a { color: #fff; text-decoration: none; margin-left: 24px; font-size: 14px; }
        .banner { width: 100%; display: block; }
        .services { max-width: 960px; margin: 40px auto; padding: 0 24px; }
        .services h2 { color: #164e63; }
        .service-grid { display: flex; gap: 16px; flex-wrap: wrap; margin-top: 16px; }
        .service-card { flex: 1 1 220px; background: #fff; border: 1px solid #e2e8f0; border-radius: 8px; padding: 20px; }
        .service-card h3 { margin-top: 0; color: #0f766e; font-size: 16px; }
        footer { text-align: center; padding: 24px; color: #64748b; font-size: 13px; }
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

    <img class="banner" src="{{ asset('storage/uploads/banner.jpg') }}" alt="STIS Hospital Banner">

    <section class="services">
        <h2>Layanan Kami</h2>
        <div class="service-grid">
            <div class="service-card">
                <h3>Poliklinik Umum</h3>
                <p>Pemeriksaan kesehatan harian untuk pasien rawat jalan dengan tenaga medis berpengalaman.</p>
            </div>
            <div class="service-card">
                <h3>Unggah Rujukan Pasien</h3>
                <p>Kirim berkas rujukan dari fasilitas kesehatan lain secara daring melalui formulir unggah.</p>
            </div>
            <div class="service-card">
                <h3>Layanan Darurat</h3>
                <p>Siaga 24 jam untuk penanganan kondisi medis yang memerlukan tindakan segera.</p>
            </div>
        </div>
    </section>

    <footer>
        &copy; {{ date('Y') }} STIS HOSPITAL. Sistem Manajemen Rumah Sakit - Lingkungan Lab Pentest KSI.
    </footer>

    <script src="{{ asset('storage/uploads/site.js') }}"></script>
</body>
</html>
