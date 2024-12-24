<!DOCTYPE html>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </head>

    <body>
        <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
            <div class="container text-center">
                <h1 class="text-center mb-4">เลขคู่ เลขคี่</h1>
                <form method="post" action="eveno.php">  
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">กรอกเลขตัวแรก</label> <br>
                        <input type="text" name="detailstart" class="form-control w-50 mx-auto" id="exampleFormControlTextarea1" style="width: 200px;">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea2" class="form-label">กรอกเลขตัวสุดท้าย</label> <br>
                        <input type="text" name="detailend" class="form-control w-50 mx-auto" id="exampleFormControlTextarea2" style="width: 200px;">
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-success" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
