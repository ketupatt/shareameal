@extends('layout')

@section('title', 'Edit Profile')

@section('content')
<div class="container" style="margin-top:120px">

    <div class="profile-wrapper">

        <!-- Page Title -->
        <div class="profile-title text-center mb-4">
            EDIT PROFILE
        </div>

        <div class="profile-info-card">
            <!-- Form -->
            <form method="POST" action="{{ route('profile.update') }}">
                @csrf
                @method('PUT')

                <div class="row g-3">

                    <!-- Full Name -->
                    <div class="col-md-6">
                        <label class="form-label">Full Name</label>
                        <input type="text" 
                               class="form-control" 
                               name="name" 
                               value="{{ old('name', $user->name) }}" 
                               required>
                    </div>

                    <!-- Email -->
                    <div class="col-md-6">
                        <label class="form-label">Email</label>
                        <input type="email" 
                               class="form-control" 
                               name="email" 
                               value="{{ old('email', $user->email) }}" 
                               required>
                    </div>

                    <!-- Phone -->
                    <div class="col-md-6">
                        <label class="form-label">Phone</label>
                        <input type="text" 
                               class="form-control" 
                               name="phone" 
                               value="{{ old('phone', $user->phone) }}">
                    </div>

                    <!-- New Password -->
                    <div class="col-md-6">
                        <label class="form-label">New Password</label>
                        <input type="password" 
                               class="form-control" 
                               name="password" 
                               placeholder="Leave blank if unchanged">
                    </div>

                    <!-- Confirm Password -->
                    <div class="col-md-6">
                        <label class="form-label">Confirm Password</label>
                        <input type="password" 
                               class="form-control" 
                               name="password_confirmation" 
                               placeholder="Confirm new password">
                    </div>

                    <!-- Action Buttons -->
                    <div class="col-12 d-flex gap-3 mt-3">
                        <button type="submit" class="btn btn-success flex-fill">
                            SAVE
                        </button>

                        <a href="{{ route('profile') }}" class="btn btn-secondary flex-fill">
                            CANCEL
                        </a>
                    </div>

                </div>
            </form>
        </div>

    </div>

</div>
@endsection

