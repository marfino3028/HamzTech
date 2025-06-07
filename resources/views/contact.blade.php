@extends('layouts.app')

@section('content')
<h1 class="text-3xl font-bold mb-4">Kontak Saya</h1>

<form action="https://api.whatsapp.com/send" method="get" target="_blank" class="space-y-4">
    <input type="hidden" name="phone" value="628626312680">
    <div>
        <label>Nama</label>
        <input type="text" name="nama" class="w-full border rounded p-2" required>
    </div>
    <div>
        <label>Pesan</label>
        <textarea name="text" rows="4" class="w-full border rounded p-2" required></textarea>
    </div>
    <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">
        Kirim ke WhatsApp
    </button>
</form>
@endsection