<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>


<body style="background: linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1))">

    <div class="container mt-5">
        <div class="row">
            <div class="col-4">
            </div>
            <div class="col-4 p-4 shadow-lg rounded-3" style="background: white;">
                <form method="POST" action="{{url('/')}}/question2">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Enter Name</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Enter Registration Number</label>
                        <input type="number" class="form-control" name="registrationnumber">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Enter CGPA</label>
                        <input type="number" step="any" class="form-control" name="cgpa">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Specialization</label>
                        <input type="text" class="form-control" name="specialization">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Upload Resume</label>
                        <input type="file" class="form-control" name="file">
                    </div>

                    @error('file')
                    <div>{{$message}}</div>
                    @enderror

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="col-4">

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>