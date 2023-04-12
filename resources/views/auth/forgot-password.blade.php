@extends('layouts.master')

@section('content')
    <div class="bg-gray-100 min-h-screen flex flex-col justify-center py-12 sm:px-6 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-md">
            <div class="text-center">
                <a href="/">
                    <x-application-logo class="mx-auto h-12 w-auto text-indigo-600" />
                </a>
                <h2 class="mt-6 text-center text-3xl leading-9 font-extrabold text-gray-900">
                    {{ __('Confirm Password') }}
                </h2>
                <p class="mt-2 text-center text-sm leading-5 text-gray-600 max-w">
                    {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
                </p>
            </div>
        </div>

        <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
            <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
                <x-auth-validation-errors class="mb-4" :errors="$errors" />

                <form method="POST" action="{{ route('password.confirm') }}">
                    @csrf

                    <div>
                        <label for="password" class="block text-sm font-medium leading-5 text-gray-700">
                            {{ __('Password') }}
                        </label>
                        <div class="mt-1 rounded-md shadow-sm">
                            <input id="password" name="password" type="password" required autocomplete="current-password" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5"/>
                        </div>
                    </div>

                    <div class="mt-6 flex justify-end">
                    <span class="inline-flex rounded-md shadow-sm">
                        <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                            {{ __('Confirm') }}
                        </button>
                    </span>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
