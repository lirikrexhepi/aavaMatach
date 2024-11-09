<aside class="sidebar">
    <div class="p-6">
        <a href="#" class="text-xl font-semibold">aava match.</a>
    </div>
    <nav class="mt-6">
        <div class="px-4 py-2 text-sm font-medium text-gray-400">Main Menu</div>
        <ul class="space-y-1">
            <?php
            $menu_items = [
                'dashboard' => ['icon' => 'M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6', 'text' => 'Dashboard'],
                'analytics' => ['icon' => 'M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z', 'text' => 'Analytics'],
                'job_listings' => ['icon' => 'M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z', 'text' => 'Job Listings'],
                'applications' => ['icon' => 'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2', 'text' => 'Applications']
            ];

            foreach ($menu_items as $key => $item) {
                $active = ($section === $key) ? 'text-black bg-gray-50' : 'text-gray-600 hover:text-black hover:bg-gray-50';
                echo "<li>
                    <a href='?section={$key}' class='flex items-center gap-3 px-6 py-3 {$active}'>
                        <svg xmlns='http://www.w3.org/2000/svg' class='h-5 w-5' fill='none' viewBox='0 0 24 24' stroke='currentColor'>
                            <path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='{$item['icon']}' />
                        </svg>
                        {$item['text']}
                    </a>
                </li>";
            }
            ?>
        </ul>
    </nav>
</aside>