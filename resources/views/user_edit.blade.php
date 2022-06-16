<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BlieBlue Dashboard - Edit Item</title>

    <link rel="stylesheet" href="{{asset('library/bootstrap.min.css')}}">
</head>
<body>
    @if ($users->count())
        <?php $user = $users[0];
            $user_id = $user->user_id;
            $user_fullname = $user->user_fullname;
            $user_name = $user->user_name;
            $password = $user->password;
            $user_role = $user->user_role;
        ?>

        <div class="my-5 container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header d-inline-flex">
                            <a class="btn btn-primary me-3" href="/dashboard/users" role="button">Back</a>
                            <h3>Edit User</h3>
                        </div>
                        <div class="card-body">
                            <h5 class="mb-3">User ID :{{$user_id}} </h5>
                            <form action="/dashboard/users/update/{{$user_id}}" method="post">
                                @csrf
                                <div class="form-group mb-3">
                                    <label for="user_fullname">User Fullname</label>
                                    <input type="text" class="form-control" id="user_fullname" name="user_fullname" placeholder="User Fullame" value="{{$user_name}}">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="user_name">User Name</label>
                                    <input type="text" class="form-control" id="user_name" name="user_name" placeholder="User Name" value="{{$user_name}}">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="password">Password</label>
                                    <input type="text" class="form-control" id="password" name="password" placeholder="Password" value="{{$password}}">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="user_role">User Role</label>
                                    <input type="text" class="form-control" id="user_role" name="user_role" placeholder="User Role" value="{{$user_role}}">
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="text-center my-5">
            <h1 class="h3 m-5 text-gray-800">User not found</h1>
            <p class="lead text-gray-800 mb-1">Go back to user dashboard</p>
            <a class="btn btn-primary" href="/dashboard/users" role="button">User Dashboard</a>
        </div>
    @endif
</body>
</html>