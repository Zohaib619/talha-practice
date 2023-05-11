<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <h1>User Form</h1>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">

                        <form action="{{ url('update-user') }}" method="POST" >
                            @csrf
                            <input type="hidden" value="{{ $user->id }}" name="user_id">
                            <div class="mb-3">
                                <h6>Name</h6>
                                <input type="text" value="{{ $user->name }}" class="form-control" name="name">
                            </div>
                            <div class="mb-3">
                                <h6>Email</h6>
                                <input type="email" value="{{ $user->email }}" class="form-control" name="email">
                            </div>
                            <div class="mb-3">
                                <h6>Password</h6>
                                <input type="password" value="{{ $user->password }}" class="form-control" name="password">
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js">
    </script>
</body>

</html>
