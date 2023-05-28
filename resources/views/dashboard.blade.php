<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                        <br>
                            @auth
                                @if (session('api_token') !== null)
                                    <div>
                                        <br>
                                            API Token: {{ session('api_token') }}
                                        <br>
                                    </div>
                                        <div class="mt-4">
                                            <br>
                                                <h3 class="text-lg font-semibold text-center">{{ __('Sending Requests') }}</h3>
                                                <div class="text-center">
                                                    <br>
                                                        <pre class="bg-black p-4 rounded-md text-sm language-bash">curl -H "Authorization: Bearer {{ session('api_token') }}" {{ config('app.app_api_url') }}</pre>
                                                    <br>
                                                </div>
                                                <p class="text-sm text-gray-600 mt-2 text-center">{{ __('Replace') }} <code>{{ config('app.app_api_url') }}</code> {{ __('with the appropriate API endpoint URL.') }}</p>
                                            <br>
                                        </div>
                                    <br>
                                @else
                                    <div>
                                        <br>
                                            No API token available.
                                        <br>
                                    </div>
                                @endif
                            @endauth
                        <br>
                            @auth
                                @if (auth()->user()->canAccessFilament())
                                    <div>
                                        <a href="{{ config('app.admin_panel_url') }}" style="color:red;"><u>Admin Panel</u></a>
                                    </div>
                                @else
                                    <div>
                                        API available.
                                    </div>
                                @endif
                            @endauth
                        <br>
                    <br>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
