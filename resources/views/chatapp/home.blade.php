@extends('chatapp.layout.master')


@section('content')
    <div class="chat-container">
        <div class="chat-list-container">
            <div class="chat-list-options">
                <div class="chat-search">
                    <input type="text" placeholder="Search...">
                </div>
                <div class="chat-options">
                    <button class="new-chat">
                        <span class="fa-solid fa-plus"></span>
                    </button>
                </div>
            </div>

            <div class="chat-lists">
                <div class="chat-item-container">
                    <span class="chat-img">
                        <img src="{{ asset('assets/img/profile.png') }}" />
                    </span>
                    <div class="chat-item">
                        <div class="chat-item-info">
                            <span class="chat-name">Deepak Play</span>
                            <span class="chat-last-msg">24/01/2024</span>
                        </div>
                        <span class="chat-item-msg">
                            This is the sample message from deepak play
                        </span>
                    </div>
                </div>
                <div class="chat-item-container">
                    <span class="chat-img">
                        <img src="{{ asset('assets/img/profile.png') }}" />
                    </span>
                    <div class="chat-item">
                        <div class="chat-item-info">
                            <span class="chat-name">Deepak Play</span>
                            <span class="chat-last-msg">24/01/2024</span>
                        </div>
                        <span class="chat-item-msg">
                            This is the sample message from deepak play This is the sample message from deepak play
                        </span>
                    </div>
                </div>
                <div class="chat-item-container">
                    <span class="chat-img">
                        <img src="{{ asset('assets/img/profile.png') }}" />
                    </span>
                    <div class="chat-item">
                        <div class="chat-item-info">
                            <span class="chat-name">Deepak Play</span>
                            <span class="chat-last-msg">24/01/2024</span>
                        </div>
                        <span class="chat-item-msg">
                            This is the sample message from deepak play This is the sample message from deepak play
                        </span>
                    </div>
                </div>
                <div class="chat-item-container">
                    <span class="chat-img">
                        <img src="{{ asset('assets/img/profile.png') }}" />
                    </span>
                    <div class="chat-item">
                        <div class="chat-item-info">
                            <span class="chat-name">Deepak Play</span>
                            <span class="chat-last-msg">24/01/2024</span>
                        </div>
                        <span class="chat-item-msg">
                            This is the sample message from deepak play This is the sample message from deepak play
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="chat-msg-container">

            Welcome, {{ $user->name }}
        </div>
    </div>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/chat.css') }}">
@endpush
