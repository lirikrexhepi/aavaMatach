<?php
// Add any PHP logic/initialization here
?>

<!-- Main container with subtle background -->
<div class="min-h-screen bg-gray-50/50 rounded-m p-6 lg:p-8">
    <div class="max-w-7xl mx-auto">
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
            <!-- Job listings will be dynamically inserted here -->
        </div>
    </div>
</div>

<!-- Include the modal -->
<?php include BASE_PATH . '/includes/job_modal.php'; ?>

<!-- Include the job listings JavaScript -->
<?php include BASE_PATH . '/includes/job_listings_script.php'; ?>