<script>
    window.onload = function() {
        const jobListingsContainer = document.getElementById('job-listings');
        
        fetch('fetch_job_listings.php')
            .then(response => response.json())
            .then(result => {
                if (!result.success) {
                    throw new Error(result.error || 'Failed to fetch job listings');
                }

                const listings = result.data;
                
                if (!listings || listings.length === 0) {
                    jobListingsContainer.innerHTML = `
                        <div class="col-span-full text-center py-8">
                            No job listings found
                        </div>
                    `;
                    return;
                }

                jobListingsContainer.innerHTML = '';
                listings.forEach(job => {
                    const jobCard = `
                        <div class="bg-white rounded-xl border p-6 job-card">
                            <div class="flex justify-between items-start mb-4">
                                <div>
                                    <h3 class="text-lg font-semibold">${job.employment || 'No Title'}</h3>
                                    <p class="text-gray-600">${job.company_name || 'Company Name'}</p>
                                </div>
                                <span class="bg-green-50 text-green-700 text-xs px-2 py-1 rounded-full">Active</span>
                            </div>
                            
                            <div class="space-y-2">
                                <!-- Location -->
                                <div class="flex items-center text-gray-600">
                                    <svg class="h-5 w-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    </svg>
                                    ${job.location || 'Location not specified'}
                                </div>
                                
                                <!-- Employment Type -->
                                <div class="flex items-center text-gray-600">
                                    <svg class="h-5 w-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                    </svg>
                                    ${job.employment_type || 'Employment type not specified'}
                                </div>
                                
                                <!-- Salary -->
                                <div class="flex items-center text-gray-600">
                                    <svg class="h-5 w-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                    ${job.salary || 'Salary not specified'}
                                </div>
                            </div>
                            
                            <p class="mt-4 text-gray-600 line-clamp-2">${job.description || 'No description available'}</p>
                            
                            <div class="mt-4 pt-4 border-t flex justify-end">
                                <button class="text-sm text-gray-600 hover:text-black">View Details</button>
                            </div>
                        </div>
                    `;
                    jobListingsContainer.innerHTML += jobCard;
                });
            })
            .catch(error => {
                console.error('Error:', error);
                jobListingsContainer.innerHTML = `
                    <div class="col-span-full text-center py-8 text-red-500">
                        Error: ${error.message}
                    </div>
                `;
            });
    };

    function showAddJobModal() {
        const modal = document.getElementById('createJobModal');
        modal.style.display = 'flex';
    }

    function hideAddJobModal() {
        const modal = document.getElementById('createJobModal');
        modal.style.display = 'none';
    }

    // Form submission handler
    document.getElementById('createJobForm').addEventListener('submit', function(e) {
        e.preventDefault();
        
        const formData = new FormData(this);
        
        // Show loading state
        const submitButton = this.querySelector('button[type="submit"]');
        const originalButtonText = submitButton.innerHTML;
        submitButton.innerHTML = 'Creating...';
        submitButton.disabled = true;

        fetch('create_job_listings.php', {
            method: 'POST',
            body: formData
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(data => {
            if (data.success) {
                window.location.reload();
            } else {
                throw new Error(data.message || 'Failed to create job listing');
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Error: ' + error.message);
        })
        .finally(() => {
            // Reset button state
            submitButton.innerHTML = originalButtonText;
            submitButton.disabled = false;
        });
    });

    // Close modal when clicking outside
    document.getElementById('createJobModal').addEventListener('click', function(e) {
        if (e.target === this) {
            hideAddJobModal();
        }
    });
</script> 