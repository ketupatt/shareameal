@extends('layout')

@section('title', 'Edit Profile')

@section('content')
<div class="container" style="margin-top:120px">

    <div class="profile-wrapper">

        <div class="profile-title text-center mb-4">
            EDIT PROFILE
        </div>

        <div class="profile-info-card">
            <form method="POST" action="{{ route('profile.update') }}">
                @csrf

                <div class="row g-3">

                    <div class="col-md-6">
                        <label class="form-label">Full Name</label>
                        <input type="text" class="form-control" name="name" value="{{ auth()->user()->name }}">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" value="{{ auth()->user()->email }}">
                    </div>

                    <div class="col-12">
                        <label class="form-label">Phone</label>
                        <input type="text" class="form-control" name="phone">
                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn btn-primary w-100 mt-3">
                            Update Profile
                        </button>
                    </div>

                </div>
            </form>
        </div>

    </div>

</div>
@endsection
