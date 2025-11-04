<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mengirim data dengan semua method</title>
</head>
<body>
    <h1>Kirim Data</h1>
    <h3> Method GET</h3>
    <a href="/send-get?message=saya nogding" target="_blank">Kirim Get Method</a>

    <h2>POST </h2>
    <form action="/send-post" method="POST">
        @csrf
        <label for="message">Masukkan Pesan:</label>
        <input type="text" name="message" id="message" placeholder="Input pesan">
        <button type="submit">Kirim Post Method</button>
    </form>


    <h2>PUT </h2>
    <form action="/send-put" method="POST">
        @csrf
        @method('PUT')
        <label for="message">Pesan:</label>
        <input type="text" name="message" id="message" placeholder="Input pesan">
        <button type="submit">Kirim Put Method</button>
    </form>

    <h2>DELETE </h2>
    <form action="/send-delete" method="POST">
        @csrf
        @method('DELETE')
        <label for="message">Pesan:</label>
        <input type="text" name="message" id="message" placeholder="Input pesan">
        <button type="submit">Kirim Delete Method</button>
</body>
</html>