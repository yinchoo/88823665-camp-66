<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Multiplication Table</h1>

        <form action="{{ url('mycontroller') }}" method="POST" class="mt-4">
            @csrf
            <div class="mb-3">
                <label for="multiplication_number" class="form-label">Enter a Number</label>
                <input type="number" name="multiplication_number" id="multiplication_number" class="form-control" placeholder="Enter a number to generate table" required>
            </div>
            <button type="submit" class="btn btn-primary">Generate Table</button>
        </form>

        @if(isset($number))
            <h2 class="mt-5">Multiplication Table for {{ $number }}</h2>
            <table class="table table-bordered mt-3">
                <thead class="table-dark">
                    <tr>
                        <th>Multiplier</th>
                        <th>Result</th>
                    </tr>
                </thead>
                <tbody>
                    @for($i = 1; $i <= 12; $i++)
                        <tr>
                            <td>{{ $number }} x {{ $i }}</td>
                            <td>{{ $number * $i }}</td>
                        </tr>
                    @endfor
                </tbody>
            </table>
        @endif
    </div>
</body>
</html>
