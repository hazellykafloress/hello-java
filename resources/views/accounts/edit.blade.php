@extends('layouts/authenticated')

@section('title')
    <title>{{ _('Update Account') }}</title>
@endsection

@section('section-title')
    {{ _('Update Account') }}
@endsection

@section('section-content')
    <form action="{{ route('accounts.update', ['account' => $user]) }}" method="post">
        @csrf
        @method('PUT')
        <div class="flex gap-2 mb-2">
            <button type="submit"
                class="px-4 py-2 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-green-600 border border-transparent rounded-lg  hover:bg-green-700 focus:outline-none focus:ring ml-auto">
                Update
            </button>
        </div>

        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
            <section class="flex flex-col gap-3">
                <div>
                    <label for="username" class="block mb-2 text-sm text-gray-700 font-medium">
                        Username <span class="text-red-500">*</span>
                    </label>
                    <input type="text" id="username" value="{{ $user->username }}"
                        class="py-3 px-4 block w-full bg-gray-100 border-blue-500 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                    @error('username')
                        <small class="text-red-500">{{ $message }}</small>
                    @enderror
                </div>
                <div>
                    <label for="email" class="block mb-2 text-sm text-gray-700 font-medium">
                        Email <span class="text-red-500">*</span>
                    </label>
                    <input type="email" id="email" value="{{ $user->email }}"
                        class="py-3 px-4 block w-full bg-gray-100 border-blue-500 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                    @error('email')
                        <small class="text-red-500">{{ $message }}</small>
                    @enderror
                </div>
                <div>
                    <label for="first_name" class="block mb-2 text-sm text-gray-700 font-medium">
                        First Name <span class="text-red-500">*</span>
                    </label>
                    <input type="text" id="first_name" value="{{ $user->first_name }}"
                        class="py-3 px-4 block w-full bg-gray-100 border-blue-500 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                    @error('first_name')
                        <small class="text-red-500">{{ $message }}</small>
                    @enderror
                </div>
                <div>
                    <label for="middle_name" class="block mb-2 text-sm text-gray-700 font-medium">
                        Middle Name
                    </label>
                    <input type="text" id="middle_name" value="{{ $user->middle_name }}"
                        class="py-3 px-4 block w-full bg-gray-100 border-blue-500 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                </div>
                <div>
                    <label for="last_name" class="block mb-2 text-sm text-gray-700 font-medium">
                        Last Name <span class="text-red-500">*</span>
                    </label>
                    <input type="text" id="last_name" value="{{ $user->last_name }}"
                        class="py-3 px-4 block w-full bg-gray-100 border-blue-500 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                    @error('last_name')
                        <small class="text-red-500">{{ $message }}</small>
                    @enderror
                </div>
                <div>
                    <label for="suffix" class="block mb-2 text-sm text-gray-700 font-medium">
                        Suffix
                    </label>
                    <input type="text" id="suffix" value="{{ $user->suffix }}"
                        class="py-3 px-4 block w-full bg-gray-100 border-blue-500 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                    @error('suffix')
                        <small class="text-red-500">{{ $message }}</small>
                    @enderror
                </div>
            </section>
        </div>

    </form>
@endsection
