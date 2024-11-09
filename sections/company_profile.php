<div class="min-h-screen bg-gray-50/50 rounded-m p-6 lg:p-8">
    <div class="max-w-7xl mx-auto">
        <!-- Header with navigation -->
        <div class="flex items-center justify-between mb-8">
            <div>
                <h1 class="text-2xl font-semibold mb-2 text-gray-900">Company Profile</h1>
                <p class="text-gray-600">Manage and enhance your company information</p>
            </div>
            <div class="flex items-center gap-4">
                <button onclick="showEditProfileModal()" class="px-4 py-2 text-sm bg-white border border-gray-200 rounded-lg hover:bg-gray-50 shadow-sm text-gray-700">
                    Edit Profile
                </button>
                <button onclick="showEnhanceProfileModal()" class="px-4 py-2 text-sm bg-blue-600 text-white rounded-lg hover:bg-blue-700 shadow-sm">
                    Enhance Profile
                </button>
            </div>
        </div>

        <!-- Company Information -->
        <div class="bg-white rounded-xl border border-gray-200 p-6 shadow-sm">
            <div class="flex items-start gap-6">
                <div class="w-32 h-32 rounded-lg border-2 border-gray-200 flex items-center justify-center bg-gray-50">
                    <img id="company-logo" src="https://ui-avatars.com/api/?name=Company+Name" alt="Company Logo" class="w-full h-full object-cover rounded-lg">
                </div>
                <div class="flex-1">
                    <h2 class="text-xl font-semibold text-gray-900" id="company-name">Company Name</h2>
                    <p class="text-gray-600 mt-1" id="company-industry">Industry</p>
                    <div class="mt-4 grid grid-cols-2 gap-4">
                        <div>
                            <span class="text-sm text-gray-500">Location</span>
                            <p class="text-gray-900" id="company-location">City, Country</p>
                        </div>
                        <div>
                            <span class="text-sm text-gray-500">Company Size</span>
                            <p class="text-gray-900" id="company-size">50-100 employees</p>
                        </div>
                        <div>
                            <span class="text-sm text-gray-500">Founded</span>
                            <p class="text-gray-900" id="company-founded">2020</p>
                        </div>
                        <div>
                            <span class="text-sm text-gray-500">Website</span>
                            <a href="#" class="text-blue-600 hover:text-blue-700" id="company-website">www.company.com</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-8">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">About Us</h3>
                <p class="text-gray-600" id="company-description">
                    Company description goes here...
                </p>
            </div>

            <div class="mt-8">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">Work Environment</h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div class="border rounded-lg p-4">
                        <span class="text-sm text-gray-500">Work Model</span>
                        <p class="text-gray-900 mt-1" id="work-model">Hybrid</p>
                    </div>
                    <div class="border rounded-lg p-4">
                        <span class="text-sm text-gray-500">Working Hours</span>
                        <p class="text-gray-900 mt-1" id="working-hours">Flexible</p>
                    </div>
                    <div class="border rounded-lg p-4">
                        <span class="text-sm text-gray-500">Culture</span>
                        <p class="text-gray-900 mt-1" id="company-culture">Fast-paced & Innovative</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Benefits Section -->
        <div class="bg-white rounded-xl border border-gray-200 p-6 shadow-sm mt-6">
            <h3 class="text-lg font-semibold text-gray-900 mb-4">Benefits & Perks</h3>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4" id="benefits-list">
                <div class="border rounded-lg p-4">
                    <svg class="w-6 h-6 text-blue-600 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span class="text-gray-900">Health Insurance</span>
                </div>
                <!-- Add more benefits as needed -->
            </div>
        </div>
    </div>
</div>

<!-- Edit Profile Modal -->
<div id="editProfileModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
    <div class="bg-white rounded-xl p-8 max-w-2xl w-full mx-4">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-semibold">Edit Company Profile</h2>
            <button onclick="hideEditProfileModal()" class="text-gray-500 hover:text-gray-700">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <form id="editProfileForm" class="space-y-6">
            <!-- Form fields will go here -->
        </form>
    </div>
</div>

<script>
    function showEditProfileModal() {
        const modal = document.getElementById('editProfileModal');
        modal.style.display = 'flex';
    }

    function hideEditProfileModal() {
        const modal = document.getElementById('editProfileModal');
        modal.style.display = 'none';
    }

    // Close modal when clicking outside
    document.getElementById('editProfileModal').addEventListener('click', function(e) {
        if (e.target === this) {
            hideEditProfileModal();
        }
    });
</script> 