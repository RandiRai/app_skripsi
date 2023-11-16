<!DOCTYPE html>
<html>
<head>
    <title>Implementasi Metode Hybrid Scan dan Pengujian Sistem</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <h1>Implementasi Metode Hybrid Scan dan Pengujian Sistem</h1>
    <form action="{{route('hasil_process')}}" method="POST">
        @csrf
        <label for="domain">Domain Target:</label>
        <input type="text" id="domain" name="domain" required>

        <label>Pilihan Perintah:</label>
        <label for="perintah1">
            <input type="checkbox" id="perintah1" name="perintah[]" value="Perintah 1"> Sub Domain Enumeration
        </label>
        <label for="perintah2">
            <input type="checkbox" id="perintah2" name="perintah[]" value="Perintah 2"> Reverse IP
        </label>
        <label for="perintah3">
            <input type="checkbox" id="perintah3" name="perintah[]" value="Perintah 3"> Page Link Extraction
        </label>
        <label for="perintah4">
            <input type="checkbox" id="perintah4" name="perintah[]" value="Perintah 4"> Check Live Host
        </label>
        <label for="perintah5">
            <input type="checkbox" id="perintah5" name="perintah[]" value="Perintah 5"> Convert Domain to IP
        </label>
        <label for="perintah6">
            <input type="checkbox" id="perintah6" name="perintah[]" value="Perintah 6"> OS Version
        </label>
        <label for="perintah7">
            <input type="checkbox" id="perintah7" name="perintah[]" value="Perintah 7"> Web Technologi
        </label>
        <label for="perintah8">
            <input type="checkbox" id="perintah8" name="perintah[]" value="Perintah 8"> Load Balancing Detector
        </label>
        <label for="perintah9">
            <input type="checkbox" id="perintah9" name="perintah[]" value="Perintah 9"> Port Scanning
        </label>
        <label for="perintah10">
            <input type="checkbox" id="perintah10" name="perintah[]" value="Perintah 10"> SQL Injection
        </label>

        <input type="submit" value="Start" name="submit">
    </form>
</body>
</html>
