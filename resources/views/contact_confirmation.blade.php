<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact Confirmation</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet">
    <style>
        @media only screen and (min-width: 720px) {
            .container {
                width: 40%;
            }
        }
        * {
            font-family: "Lato", sans-serif;
        }
    </style>
</head>
<body style="background-image: linear-gradient(90deg, #b743ae, #ed429e);">
    <div class="container my-5">
        <div class="py-5 px-md-5 px-1  rounded-1 mx-md-5" style="background-color: #fffffff2;">
            <h2 class="fw-bold fs-1 mb-3 pb-2 text-center">Contact Confirmation</h2>
            <div class="form-group mb-3 row">
                <label class="form-label col-md-2 fw-bold text-md-end">Name:</label>
                <div class="col-md-10">
                    <p>{{ $data['name'] }}</p>
                </div>
            </div>
            <div class="form-group mb-3 row">
                <label class="form-label col-md-2 fw-bold text-md-end">Email:</label>
                <div class="col-md-10">
                    <p>{{ $data['email'] }}</p>
                </div>
            </div>
            <div class="form-group mb-3 row">
                <label class="form-label col-md-2 fw-bold text-md-end">Subject:</label>
                <div class="col-md-10">
                    <p>{{ $data['subject'] }}</p>
                </div>
            </div>
            <div class="form-group mb-3 row">
                <label class="form-label col-12 fw-bold">Message:</label>
                <div class="col-12">
                    <p>{{ $data['message'] }}</p>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</html>
