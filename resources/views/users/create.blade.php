@extends('templates.default')

@section('content')
<div class="intro-y flex items-center mt-12">
    <h2 class="text-lg font-medium mr-auto mb-2">Tambah Data User</h2>
</div>
<div class="grid grid-cols-12 gap-6 mt-">
    <div class="intro-y col-span-12 lg:col-span-6">
        <!-- BEGIN: Input -->
        <form class="box p-5" method="POST" action="{{ route('users.store') }}">
            @csrf

            <!-- Name -->
            <div class="mt-3">
                <label for="name" class="form-label">Nama</label>
                <x-text-input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <label for="email" class="form-label">Email</label>
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <label for="password" class="form-label">Password</label>

                <x-text-input id="password" class="form-control"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <label for="password_confirmation" class="form-label">Konfirmasi Password</label>

                <x-text-input id="password_confirmation" class="form-control"
                                type="password"
                                name="password_confirmation" required />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-primary-button class="ml-4">
                    {{ __('Simpan') }}
                </x-primary-button>
            </div>
        </form>
    <!-- END: Input -->
    </div>
</div>
@endsection
