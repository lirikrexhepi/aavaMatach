<!-- Header Section -->
<div class="flex justify-between items-center mb-8">
    <div>
        <h1 class="text-2xl font-semibold mb-2">Job Listings</h1>
        <p class="text-gray-600">Manage and track your job postings</p>
    </div>
    <div class="flex gap-4">
        <button class="flex items-center gap-2 px-4 py-2 border rounded-lg hover:bg-gray-50">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M3 3a1 1 0 011-1h12a1 1 0 011 1v3a1 1 0 01-.293.707L12 11.414V15a1 1 0 01-.293.707l-2 2A1 1 0 018 17v-5.586L3.293 6.707A1 1 0 013 6V3z" clip-rule="evenodd" />
            </svg>
            Filter
        </button>
        <button onclick="showAddJobModal()" class="bg-black text-white px-4 py-2 rounded-lg text-sm font-medium hover:bg-gray-800 transition-colors">
            Create Listing
        </button>
    </div>
</div>

<!-- Job Listings Grid -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6" id="job-listings">
    <?php
    // Sample job listings data
    $jobListings = [
        [
            'title' => 'Senior Software Engineer',
            'company' => 'TechCorp Solutions',
            'location' => 'San Francisco, CA',
            'type' => 'Full-time',
            'status' => 'Published',
            'date' => '2024-01-15',
            'applicants' => 24
        ],
        [
            'title' => 'Product Designer',
            'company' => 'Creative Minds Agency',
            'location' => 'New York, NY',
            'type' => 'Full-time',
            'status' => 'Draft',
            'date' => '2024-01-14',
            'applicants' => 12
        ]
    ];

    foreach ($jobListings as $job) {
        $statusClass = $job['status'] === 'Published' ? 'bg-green-100 text-green-800' : 'bg-gray-100 text-gray-800';
        echo "
        <div class='job-card bg-white p-6 rounded-xl border shadow-sm'>
            <div class='flex justify-between items-start mb-4'>
                <div>
                    <h3 class='font-semibold text-lg mb-1'>{$job['title']}</h3>
                    <p class='text-gray-600 text-sm'>{$job['company']}</p>
                </div>
                <span class='px-3 py-1 rounded-full text-xs font-medium {$statusClass}'>{$job['status']}</span>
            </div>
            <div class='space-y-3'>
                <div class='flex items-center text-sm text-gray-500'>
                    <svg class='h-4 w-4 mr-2' fill='none' stroke='currentColor' viewBox='0 0 24 24'>
                        <path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z' />
                        <path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M15 11a3 3 0 11-6 0 3 3 0 016 0z' />
                    </svg>
                    {$job['location']}
                </div>
                <div class='flex items-center text-sm text-gray-500'>
                    <svg class='h-4 w-4 mr-2' fill='none' stroke='currentColor' viewBox='0 0 24 24'>
                        <path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z' />
                    </svg>
                    {$job['type']}
                </div>
                <div class='flex items-center text-sm text-gray-500'>
                    <svg class='h-4 w-4 mr-2' fill='none' stroke='currentColor' viewBox='0 0 24 24'>
                        <path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z' />
                    </svg>
                    {$job['applicants']} applicants
                </div>
            </div>
            <div class='mt-4 pt-4 border-t flex justify-end'>
                <button class='text-sm text-gray-600 hover:text-black'>Edit</button>
            </div>
        </div>";
    }
    ?>
</div>

<style>
.job-card {
    transition: all 0.2s ease-in-out;
}

.job-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
}
</style> 