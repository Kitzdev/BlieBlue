<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BlieBlue Dashboard - Add User</title>

    <link rel="stylesheet" href="{{asset('library/bootstrap.min.css')}}">
</head>
<body>
    <div class="my-5 container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-inline-flex">
                        <a class="btn btn-primary me-3" href="/dashboard/users" role="button">Back</a>
                        <h3>Register Item</h3>
                    </div>
                    <div class="card-body">
                        <form action="/dashboard/users/add/submit" method="post">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="user_fullname">User fullname</label>
                                <input type="text" class="form-control" id="user_fullname" name="user_fullname" placeholder="User fullname">
                            </div>
                            <div class="form-group mb-3">
                                <label for="user_name">User name</label>
                                <input type="text" class="form-control" id="user_name" name="user_name" placeholder="User name">
                            </div>
                            <div class="form-group mb-3">
                                <label for="password">Password</label>
                                <input type="text" class="form-control" id="password" name="password" placeholder="Password">
                            </div>
                            <div class="form-group mb-3">
                                <label for="user_role">User role</label>
                                <input type="text" class="form-control" id="user_role" name="user_role" placeholder="User role">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>