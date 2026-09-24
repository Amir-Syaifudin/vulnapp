@extends('layouts.hospital')

@section('title', 'Unggah Berkas')

@section('content')
    <h1>Unggah Berkas Pendukung Asesmen</h1>
    <p class="lead">Kirim berkas pendukung (portofolio, bukti kompetensi) dalam format gambar/scan untuk diproses oleh tim admin LSP-Sim.</p>

    <div class="card">
        <form id="upload-form" enctype="multipart/form-data">
            @csrf
            <label for="files">Berkas Pendukung (JPG/PNG)</label>
            <input type="file" name="files[]" id="files">

            <button type="submit">Unggah Berkas</button>
        </form>
        <div id="upload-result"></div>
    </div>

    <script>
        document.getElementById('upload-form').addEventListener('submit', function (e) {
            e.preventDefault();
            const resultBox = document.getElementById('upload-result');
            resultBox.className = '';
            resultBox.textContent = 'Mengunggah...';

            fetch('/upload', {
                method: 'POST',
                body: new FormData(this),
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
