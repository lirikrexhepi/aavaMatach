<div class="flex justify-between items-center mb-6">
    <h2 class="text-2xl font-semibold">Create New Job Listing</h2>
    <button onclick="hideAddJobModal()" class="text-gray-500 hover:text-gray-700">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
    </button>
</div>

<form id="createJobForm" class="space-y-6">
    <!-- Form fields from job-listings.html -->
    <?php include BASE_PATH . '/includes/job_form_fields.php'; ?>
</form>
