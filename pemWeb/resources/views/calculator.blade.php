<!DOCTYPE html>
    <head>
        <title> Kalkulator Sederhana </title>
        <style>
        body {
font-family: Arial, sans-serif;
text-align: center;
background-color: #f0f0f0;
}
h1 {
color: #333;
}
form {
background-color: #fff;
padding: 20px;
border-radius: 10px;
box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
max-width: 300px;
margin: 0 auto;
}
input[type="text"], select {
width: 90%;
padding: 10px;
margin: 5px 0;
border: 1px solid #ccc;
border-radius: 5px;
}
select {
border-radius: 5px;
}
button {
width: 100%;
background-color: #007BFF;
color: #fff;
border: none;
padding: 10px;
margin-top: 10px;
border-radius: 5px;
cursor: pointer;
}
p {
margin-top: 10px;
font-weight: bold;
}
button:hover {
background-color: #0056b3;
}
        </style>

    </head>
    <body>
        <h1> Kalkulator Sederhana </h1>
        @if (session('error'))
            <p style="color: red;">{{ session('error') }}</p>
        @endif
        <form method="post" action="/calculate">
            @csrf
            <input type="text" name="num1" placeholder="Angka pertama" required>
            <select name="operator">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>
        <input type="text" name="num2" placeholder="Angka kedua" required>
        <button type="submit">Hitung</button>
        </form>
        <p>Hasil: {{ $result ?? '' }}</p>
    </body>
</html>
