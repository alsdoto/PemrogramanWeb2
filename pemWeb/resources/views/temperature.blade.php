<!DOCTYPE html>
<html>
<head>
    <title>Temperature Calculator</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h2 class="text-center">Temperature Calculator</h2>
            </div>
            <div class="card-body">
                <form action="/temperature" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="temperature">Temperature</label>
                        <div class="input-group">
                            <input type="text" name="temperature" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="from_unit">Dari suhu</label>
                        <select name="from_unit" class="form-control">
                            <option value="Celsius">Celsius (&#8451;)</option>
                            <option value="Fahrenheit">Fahrenheit (&#8457;)</option>
                            <option value="Kelvin">Kelvin (K)</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="to_unit">Ke Suhu</label>
                        <select name="to_unit" class="form-control">
                            <option value="Celsius">Celsius (&#8451;)</option>
                            <option value="Fahrenheit">Fahrenheit (&#8457;)</option>
                            <option value="Kelvin">Kelvin (K)</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Calculate</button>
                </form>
                @if(isset($result))
                    <div class="mt-3">
                        <p class="text-center h4">Result: {{ $result }} {{ $toUnitSymbol }}</p>
                    </div>
                @endif
            </div>
        </div>
    </div>
</body>
</html>
