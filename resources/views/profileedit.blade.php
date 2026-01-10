<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="{{ asset('logis/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('logis/assets/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/profile.css') }}" rel="stylesheet">
</head>

<body>

@include('profile.profile-header') {{-- optional if you later extract --}}

<main class="container" style="margin-top:120px">

    <div class="profile-wrapper">

        <div class="profile-title">EDIT PROFILE</div>

        <div class="profile-info-card mt-4">

            <form>
                <div class="row g-3">
                    <div class="col-md-6">
                        <label>Name</label>
                        <input type="text" class="form-control" value="{{ $user->name }}">
                    </div>

                    <div class="col-md-6">
                        <label>Email</label>
                        <input type="email" class="form-control" value="{{ $user->email }}">
                    </div>

                    <div class="col-md-6">
                        <label>Matric No</label>
                        <input type="text" class="form-control" value="{{ $user->matric_no }}">
                    </div>

                    <div class="col-md-6">
                        <label>New Password</label>
                        <input type="password" class="form-control">
                    </div>
                </div>

                <div class="mt-4">
                    <button class="btn btn-success">SAVE</button>
                    <a href="{{ route('profile') }}" class="btn btn-secondary">CANCEL</a>
                </div>
            </form>

        </div>
    </div>

</main>

<footer id="footer" class="footer">
    <div class="container">
        <div class="copyright">
            © ShareAMeal | admin.shareameal@gmail.com
        </div>
    </div>
</footer>

<script src="{{ asset('logis/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
