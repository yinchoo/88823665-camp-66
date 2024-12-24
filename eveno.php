<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">เลขคู่ เลขคี่</h1>
        <table class="table table-bordered">
            <thead>
                <tr><th class="text-center">เลข</th><th class="text-center">ประเภท</th></tr>
            </thead>
            <tbody>
                <?php
                for ($i = $_POST['detailstart']; $i <= $_POST['detailend']; $i++) {
                    echo "<tr><td class='text-center'>$i</td><td class='text-center'>" . ($i % 2 == 0 ? "เลขคู่" : "เลขคี่") . "</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
