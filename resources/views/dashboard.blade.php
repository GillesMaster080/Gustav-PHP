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

                    @auth
                        @if (session('api_token') !== null)
                            <div>
                                API Token: {{ session('api_token') }}
                            </div>
                        @else
                            <div>
                                No API token available.
                            </div>
                        @endif
                    @endauth

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
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
