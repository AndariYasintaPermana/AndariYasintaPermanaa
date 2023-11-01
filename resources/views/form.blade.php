@extends ('template')

@section('form')

<div class="isi">
    <form method="POST" action="/profile">
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" aria-describedby="nama">
            <div id="nama" class="form-text"></div>
        </div>
        <div class="mb-3">
            <label for="NPM" class="form-label">NPM</label>
            <input type="number" class="form-control" id="npm" aria-describedby="npm">
            <div id="npm" class="form-text"></div>
        </div>
        <div class="mb-3">
            <label for="nilai" class="form-label">Nilai</label>
            <input type="number" class="form-control" id="nilai" aria-describedby="nilai">
            <div id="nilai" class="form-text"></div>
        </div>
        <button type="submit" class="btn btn-primary">Kirim</button>
    </form>
</div>
<br/>
@endsection