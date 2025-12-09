<x-layout>
    <h2>users</h2>
        <span class="border-r-2 pr-2">
            Hi there, {{ Auth::user()->name }}
        </span>
</x-layout>