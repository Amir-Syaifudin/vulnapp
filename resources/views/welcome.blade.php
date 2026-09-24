@extends('layouts.hospital')

@section('title', 'Beranda')

@section('full')
    <div class="hero">
        <h1>LSP-Sim</h1>
        <p>Lingkungan Simulasi Lembaga Sertifikasi Profesi</p>
    </div>

    <section class="services">
        <h2>Layanan</h2>
        <div class="service-grid">
            <div class="service-card">
                <h3>Sertifikasi Kompetensi</h3>
                <p>Pendaftaran dan pelaksanaan asesmen kompetensi bagi peserta dari berbagai instansi mitra.</p>
            </div>
            <div class="service-card">
                <h3>Unggah Berkas Pendukung</h3>
                <p>Kirim berkas pendukung asesmen (portofolio, bukti kompetensi) secara daring melalui formulir unggah.</p>
            </div>
            <div class="service-card">
                <h3>Profil Peserta</h3>
                <p>Kelola data diri, instansi, dan riwayat sertifikasi peserta yang terdaftar.</p>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script src="{{ asset('storage/uploads/site.js') }}"></script>
@endsection
