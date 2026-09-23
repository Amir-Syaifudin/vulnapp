@extends('layouts.hospital')

@section('title', 'Kontak')

@section('content')
    <h1>Hubungi Kami</h1>
    <p class="lead">Ada pertanyaan seputar layanan STIS HOSPITAL? Kirim pesan Anda, tim kami akan membalas melalui email.</p>

    <div class="card">
        <form id="contact-form">
            @csrf
            <label for="name">Nama Lengkap</label>
            <input type="text" name="name" id="name" placeholder="Nama Anda">

            <label for="email">Alamat Email</label>
            <input type="text" name="email" id="email" placeholder="nama@email.com">

            <label for="message">Pesan</label>
            <textarea name="message" id="message" placeholder="Tulis pesan Anda di sini..."></textarea>

            <button type="submit">Kirim Pesan</button>
        </form>
        <div id="contact-result"></div>
    </div>

    <script>
        document.getElementById('contact-form').addEventListener('submit', function (e) {
            e.preventDefault();
            const resultBox = document.getElementById('contact-result');
            resultBox.className = '';
            resultBox.textContent = 'Mengirim...';

            const formData = new FormData(this);
            fetch('/contact', {
                method: 'POST',
                body: formData,
                headers: { 'Accept': 'application/json' },
            })
                .then((res) => res.json().then((data) => ({ ok: res.ok, data })))
                .then(({ ok, data }) => {
                    resultBox.className = 'result ' + (ok ? 'ok' : 'err');
                    resultBox.textContent = JSON.stringify(data, null, 2);
                })
                .catch((err) => {
                    resultBox.className = 'result err';
                    resultBox.textContent = String(err);
                });
        });
    </script>
@endsection
