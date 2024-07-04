<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Companies') }}
        </h2>
    </header>

    <!-- Company listing -->
    <ul>
        @foreach($companies as $company)
            <li>{{ $company->name }}</li>
        @endforeach
    </ul>
</section>