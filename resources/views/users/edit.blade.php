@extends('templates.default')

@section('content')
<div class="intro-y flex items-center mt-12">
    <h2 class="text-lg font-medium mr-auto mb-2">Tambah Data User</h2>
</div>
<div class="grid grid-cols-12 gap-6">
    <div class="intro-y col-span-12 lg:col-span-6">
        <!-- BEGIN: Input -->
        <form class="box p-5" method="POST" action="{{ route('users.update', $user->id) }}">
            @csrf
            @method('PUT')
            <!-- Name -->
            <div class="mt-3">
                <label for="name" class="form-label">Nama</label>
                <x-text-input id="name" class="form-control" type="text" name="name" value="{{ $user->name }}" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <label for="email" class="form-label">Email</label>
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" value="{{ $user->email }}" required />
            </div>

            <div>
                <x-input-label for="current_password" :value="__('Password Saat ini')" />
                <x-text-input id="current_password" name="current_password" type="password" class="mt-1 block w-full" autocomplete="current-password" />
                <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
            </div>
    
            <div>
                <x-input-label for="password" :value="__('Password Baru')" />
                <x-text-input id="password" name="password" type="password" class="mt-1 block w-full" autocomplete="new-password" />
                <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
            </div>
    
            <div>
                <x-input-label for="password_confirmation" :value="__('Konfirmasi Password')" />
                <x-text-input id="password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full" autocomplete="new-password" />
                <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
            </div>
    
            <div class="flex items-center gap-4">
                <x-primary-button>{{ __('Simpan') }}</x-primary-button>
    
                @if (session('status') === 'password-updated')
                    <p
                        x-data="{ show: true }"
                        x-show="show"
                        x-transition
                        x-init="setTimeout(() => show = false, 2000)"
                        class="text-sm text-gray-600"
                    >{{ __('Tersimpan.') }}</p>
                @endif
            </div>
        </form>
    <!-- END: Input -->
    </div>
</div>
@endsection
