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

@include('profile.profile-header')

<main class="container" style="margin-top:120px">

    <div class="profile-wrapper">

        <div class="profile-title">EDIT PROFILE</div>

        <div class="profile-info-card mt-4">

            <!-- ✅ FORM UPDATED -->
            <form method="POST" action="{{ route('profile.update') }}">
                @csrf
                @method('PUT')

                <div class="row g-3">

                    <div class="col-md-6">
                        <label>Name</label>
                        <input type="text"
                               name="name"
                               class="form-control"
                               value="{{ old('name', $user->name) }}"
                               required>
                    </div>

                    <div class="col-md-6">
                        <label>Email</label>
                        <input type="email"
                               name="email"
                               class="form-control"
                               value="{{ old('email', $user->email) }}"
                               required>
                    </div>

                    <div class="col-md-6">
                        <label>Matric No</label>
                        <input type="text"
                               class="form-control"
                               value="{{ $user->matric_no }}"
                               readonly>
                    </div>

                    <div class="col-md-6">
                        <label>New Password</label>
                        <input type="password"
                               name="password"
                               class="form-control"
                               placeholder="Leave blank if unchanged">
                    </div>

                    <div class="col-md-6">
                        <label>Confirm Password</label>
                        <input type="password"
                               name="password_confirmation"
                               class="form-control"
                               placeholder="Confirm new password">
                    </div>

                </div>

                <!-- ACTION BUTTONS -->
                <div class="mt-4">
                    <button type="submit" class="btn btn-success">
                        SAVE
                    </button>

                    <a href="{{ route('profile') }}" class="btn btn-secondary">
                        CANCEL
                    </a>
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
