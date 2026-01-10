@extends('layout') {{-- Using master layout --}}

@section('title', 'Profile - ShareAMeal')
@section('body-class', 'profile-page')

@section('content')
<main class="container profile-wrapper">

    <!-- PROFILE TITLE -->
    <div class="profile-title">PROFILE</div>

    <div class="row mt-4">

        <!-- LEFT COLUMN -->
        <div class="col-md-4 profile-left">

            <!-- Avatar -->
            <div class="profile-avatar-card">
                <svg viewBox="0 0 240 240">
                    <circle cx="120" cy="120" r="50" fill="#f4d4ba" />
                    <circle cx="102" cy="115" r="5" fill="#2b2b2b" />
                    <circle cx="138" cy="115" r="5" fill="#2b2b2b" />
                    <path d="M102 140 q18 14 36 0" stroke="#2b2b2b" stroke-width="4" fill="none" stroke-linecap="round"/>
                </svg>
            </div>

            <!-- Streak -->
            <div class="streak-card mt-3">
                <img src="https://img.freepik.com/free-psd/star-cup-3d-icon-illustration-background_56104-2821.jpg?semt=ais_hybrid&w=740&q=80" alt="trophy">
                <div class="streak-text">
                    <h5>Streak</h5>
                    <h2>5</h2>
                </div>
            </div>

            <!-- Update Button -->
            <a href="{{ route('profile.edit') }}" class="btn-update mt-3">UPDATE</a>

        </div>

        <!-- RIGHT COLUMN -->
        <div class="col-md-8 profile-right">

            <div class="profile-info-card">

                <!-- Name + Date -->
                <div class="profile-info-row">
                    <div class="profile-name">🔍 {{ $user->name }}</div>
                    <div class="profile-date">Thu, 9 Dec 2025</div>
                </div>

                <!-- Form Fields -->
                <div class="profile-form row g-3">

                    <div class="col-md-6">
                        <label>Matric No</label>
                        <input type="text" class="readonly-input" value="{{ $user->matric_no }}" readonly>
                    </div>

                    <div class="col-md-6">
                        <label>Password</label>
                        <input type="password" class="readonly-input" value="password" readonly>
                    </div>

                    <div class="col-md-6">
                        <label>Email</label>
                        <input type="email" class="readonly-input" value="{{ $user->email }}" readonly>
                    </div>

                    <div class="col-md-6">
                        <label>Notification</label>
                        <div class="notify-wrapper">
                            <button class="notify-btn" id="notifyToggle">
                                🔔 Click here
                                <span class="arrow">▼</span>
                            </button>

                            <div class="notify-menu" id="notifyMenu">
                                <div class="toggle-row">
                                    <span>Email when my post is claimed</span>
                                    <label class="switch">
                                        <input type="checkbox">
                                        <span class="slider"></span>
                                    </label>
                                </div>
                                <div class="toggle-row">
                                    <span>Email when admin sends warning</span>
                                    <label class="switch">
                                        <input type="checkbox">
                                        <span class="slider"></span>
                                    </label>
                                </div>
                                <div class="toggle-row">
                                    <span>Email for expiring post</span>
                                    <label class="switch">
                                        <input type="checkbox">
                                        <span class="slider"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <!-- Action Buttons -->
            <div class="profile-actions mt-4">
                <button class="btn-delete" onclick="showConfirm()">DELETE ACCOUNT</button>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="btn-logout">LOG OUT</button>
                </form>
            </div>

        </div>

    </div>
</main>

<!-- Confirmation Box -->
<div class="confirm-box" id="confirmBox">
    <div class="confirm-content">
        <p>Are you sure you want to delete your account?</p>
        <div class="confirm-buttons">
            <button class="cancel-btn" onclick="hideConfirm()">Cancel</button>
            <button class="delete-btn" onclick="deleteAccount()">Delete</button>
        </div>
    </div>
</div>
@endsection
