<header class="bg-white border-b border-gray-100 sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <!-- Left side -->
            <div class="flex items-center">
                <!-- Menu button (visible only on mobile) -->
                <button id="menu-toggle" class="lg:hidden p-2 rounded-md text-gray-600 hover:text-gray-900 hover:bg-gray-100">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>

            <!-- Right side -->
            <div class="flex items-center space-x-4">
                <!-- Notifications -->
                <button class="p-2 text-gray-600 hover:text-gray-900 rounded-full hover:bg-gray-100">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                    </svg>
                </button>

                <!-- Profile Dropdown -->
                <div class="relative">
                    <button class="flex items-center space-x-3 p-2 rounded-lg hover:bg-gray-100">
                        <img src="https://ui-avatars.com/api/?name=Company+Name" alt="Profile" class="h-8 w-8 rounded-full">
                        <div class="hidden md:block text-left">
                            <div class="text-sm font-medium text-gray-900">Company Name</div>
                            <div class="text-xs text-gray-500">Admin</div>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>

                    <!-- Dropdown Menu (Initially Hidden) -->
                    <div class="hidden absolute right-0 mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5" id="profile-dropdown">
                        <div class="py-1">
                            <a href="?section=company_profile" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Company Profile</a> <a href="settings" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Settings</a>
                            <div class="border-t border-gray-100"></div>
                            <a href="logout" class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100">Sign out</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const profileButton = document.querySelector('button:has(img)');
        const dropdown = document.getElementById('profile-dropdown');

        profileButton.addEventListener('click', () => {
            dropdown.classList.toggle('hidden');
        });

        // Close dropdown when clicking outside
        document.addEventListener('click', (e) => {
            if (!profileButton.contains(e.target) && !dropdown.contains(e.target)) {
                dropdown.classList.add('hidden');
            }
        });
    });
</script>

<!-- Edit Profile Modal -->
<div id="editProfileModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
    <div class="bg-white rounded-xl p-8 max-w-4xl w-full mx-4 max-h-[90vh] overflow-y-auto">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-semibold">Edit Company Profile</h2>
            <button onclick="hideEditProfileModal()" class="text-gray-500 hover:text-gray-700">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <form id="editProfileForm" class="space-y-8">
            <!-- Basic Information -->
            <div class="space-y-6">
                <h3 class="text-lg font-medium text-gray-900">Basic Information</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Company Name</label>
                        <input type="text" name="company_name" id="edit-company-name"
                            class="w-full px-4 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Industry</label>
                        <input type="text" name="industry" id="edit-company-industry"
                            class="w-full px-4 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Location</label>
                        <input type="text" name="location" id="edit-company-location"
                            class="w-full px-4 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Company Size</label>
                        <select name="company_size" id="edit-company-size"
                            class="w-full px-4 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500">
                            <option value="1-10">1-10 employees</option>
                            <option value="11-50">11-50 employees</option>
                            <option value="51-200">51-200 employees</option>
                            <option value="201-500">201-500 employees</option>
                            <option value="501+">501+ employees</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Founded Year</label>
                        <input type="number" name="founded" id="edit-company-founded"
                            class="w-full px-4 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Website</label>
                        <input type="url" name="website" id="edit-company-website"
                            class="w-full px-4 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500">
                    </div>
                </div>
            </div>

            <!-- About Section -->
            <div class="space-y-6">
                <h3 class="text-lg font-medium text-gray-900">About Company</h3>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Company Description</label>
                    <textarea name="description" id="edit-company-description" rows="4"
                        class="w-full px-4 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500"></textarea>
                </div>
            </div>

            <!-- Work Environment -->
            <div class="space-y-6">
                <h3 class="text-lg font-medium text-gray-900">Work Environment</h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Work Model</label>
                        <select name="work_model" id="edit-work-model"
                            class="w-full px-4 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500">
                            <option value="remote">Remote</option>
                            <option value="hybrid">Hybrid</option>
                            <option value="onsite">On-site</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Working Hours</label>
                        <select name="working_hours" id="edit-working-hours"
                            class="w-full px-4 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500">
                            <option value="flexible">Flexible</option>
                            <option value="fixed">Fixed</option>
                            <option value="shifts">Shifts</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Company Culture</label>
                        <select name="company_culture" id="edit-company-culture"
                            class="w-full px-4 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500">
                            <option value="startup">Fast-paced & Innovative</option>
                            <option value="corporate">Professional & Structured</option>
                            <option value="casual">Casual & Collaborative</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Benefits Section -->
            <div class="space-y-6">
                <h3 class="text-lg font-medium text-gray-900">Benefits & Perks</h3>
                <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                    <label class="flex items-center space-x-3">
                        <input type="checkbox" name="benefits[]" value="health_insurance"
                            class="h-5 w-5 rounded border-gray-300 text-blue-600">
                        <span class="text-gray-700">Health Insurance</span>
                    </label>
                    <label class="flex items-center space-x-3">
                        <input type="checkbox" name="benefits[]" value="dental_vision"
                            class="h-5 w-5 rounded border-gray-300 text-blue-600">
                        <span class="text-gray-700">Dental & Vision</span>
                    </label>
                    <label class="flex items-center space-x-3">
                        <input type="checkbox" name="benefits[]" value="paid_time_off"
                            class="h-5 w-5 rounded border-gray-300 text-blue-600">
                        <span class="text-gray-700">Paid Time Off</span>
                    </label>
                    <label class="flex items-center space-x-3">
                        <input type="checkbox" name="benefits[]" value="remote_work"
                            class="h-5 w-5 rounded border-gray-300 text-blue-600">
                        <span class="text-gray-700">Remote Work</span>
                    </label>
                    <label class="flex items-center space-x-3">
                        <input type="checkbox" name="benefits[]" value="professional_development"
                            class="h-5 w-5 rounded border-gray-300 text-blue-600">
                        <span class="text-gray-700">Professional Development</span>
                    </label>
                    <label class="flex items-center space-x-3">
                        <input type="checkbox" name="benefits[]" value="401k"
                            class="h-5 w-5 rounded border-gray-300 text-blue-600">
                        <span class="text-gray-700">401(k) Match</span>
                    </label>
                </div>
            </div>

            <!-- Form Actions -->
            <div class="flex justify-end gap-4 pt-6 border-t">
                <button type="button" onclick="hideEditProfileModal()"
                    class="px-4 py-2 text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50">
                    Cancel
                </button>
                <button type="submit"
                    class="px-4 py-2 text-white bg-blue-600 rounded-lg hover:bg-blue-700">
                    Save Changes
                </button>
            </div>
        </form>
    </div>
</div>

<script>
    function showEditProfileModal() {
        const modal = document.getElementById('editProfileModal');
        modal.style.display = 'flex';

        // Fetch current profile data and populate form
        fetch('get_company_profile.php')
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    const profile = data.data;
                    document.getElementById('edit-company-name').value = profile.name || '';
                    document.getElementById('edit-company-industry').value = profile.industry || '';
                    document.getElementById('edit-company-location').value = profile.location || '';
                    document.getElementById('edit-company-size').value = profile.size || '';
                    document.getElementById('edit-company-founded').value = profile.founded || '';
                    document.getElementById('edit-company-website').value = profile.website || '';
                    document.getElementById('edit-company-description').value = profile.description || '';
                    document.getElementById('edit-work-model').value = profile.work_model || '';
                    document.getElementById('edit-working-hours').value = profile.working_hours || '';
                    document.getElementById('edit-company-culture').value = profile.culture || '';

                    // Handle benefits checkboxes
                    if (profile.benefits) {
                        const benefitsInputs = document.querySelectorAll('input[name="benefits[]"]');
                        benefitsInputs.forEach(input => {
                            input.checked = profile.benefits.includes(input.value);
                        });
                    }
                }
            })
            .catch(error => console.error('Error fetching profile:', error));
    }

    function hideEditProfileModal() {
        const modal = document.getElementById('editProfileModal');
        modal.style.display = 'none';
    }

    // Handle form submission
    document.getElementById('editProfileForm').addEventListener('submit', function(e) {
        e.preventDefault();

        const formData = new FormData(this);

        fetch('update_company_profile.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    hideEditProfileModal();
                    // Refresh the profile data on the page
                    window.location.reload();
                } else {
                    alert(data.message || 'Error updating profile');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('An error occurred while updating the profile');
            });
    });

    // Close modal when clicking outside
    document.getElementById('editProfileModal').addEventListener('click', function(e) {
        if (e.target === this) {
            hideEditProfileModal();
        }
    });
</script>

<!-- Enhance Profile Modal -->
<div id="enhanceProfileModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
    <div class="bg-white rounded-xl p-8 max-w-4xl w-full mx-4 max-h-[90vh] overflow-y-auto">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-semibold">Enhance Your Company Profile</h2>
            <button onclick="hideEnhanceProfileModal()" class="text-gray-500 hover:text-gray-700">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <div class="space-y-8">
            <!-- Progress Overview -->
            <div class="bg-gray-50 rounded-lg p-6">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-lg font-medium text-gray-900">Profile Strength</h3>
                    <span class="text-sm font-medium text-gray-500" id="profile-completion">75% Complete</span>
                </div>
                <div class="w-full bg-gray-200 rounded-full h-2">
                    <div class="bg-blue-600 h-2 rounded-full" style="width: 75%"></div>
                </div>
            </div>

            <!-- Enhancement Tasks -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Company Logo -->
                <div class="border rounded-lg p-6">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-lg font-medium text-gray-900">Upload Company Logo</h4>
                            <p class="text-sm text-gray-500">Add your company logo to increase brand visibility</p>
                        </div>
                    </div>
                    <button onclick="handleLogoUpload()" class="w-full px-4 py-2 bg-white border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50">
                        Upload Logo
                    </button>
                </div>

                <!-- Company Description -->
                <div class="border rounded-lg p-6">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-lg font-medium text-gray-900">Improve Description</h4>
                            <p class="text-sm text-gray-500">Enhance your company description with AI suggestions</p>
                        </div>
                    </div>
                    <button onclick="improveDescription()" class="w-full px-4 py-2 bg-white border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50">
                        Get Suggestions
                    </button>
                </div>

                <!-- Benefits -->
                <div class="border rounded-lg p-6">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-lg font-medium text-gray-900">Add Benefits</h4>
                            <p class="text-sm text-gray-500">Highlight your company benefits to attract talent</p>
                        </div>
                    </div>
                    <button onclick="showEditProfileModal('benefits')" class="w-full px-4 py-2 bg-white border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50">
                        Update Benefits
                    </button>
                </div>

                <!-- Work Culture -->
                <div class="border rounded-lg p-6">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-lg font-medium text-gray-900">Work Culture</h4>
                            <p class="text-sm text-gray-500">Showcase your company culture and values</p>
                        </div>
                    </div>
                    <button onclick="showEditProfileModal('culture')" class="w-full px-4 py-2 bg-white border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50">
                        Update Culture
                    </button>
                </div>
            </div>

            <!-- Pro Tips -->
            <div class="bg-blue-50 rounded-lg p-6">
                <h3 class="text-lg font-medium text-blue-900 mb-4">Profile Enhancement Tips</h3>
                <ul class="space-y-3 text-sm text-blue-800">
                    <li class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        Companies with complete profiles receive 4x more applications
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        Adding a company logo increases profile views by 50%
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        Detailed company culture information attracts better-fit candidates
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
    function showEnhanceProfileModal() {
        const modal = document.getElementById('enhanceProfileModal');
        modal.style.display = 'flex';
        updateProfileCompletion();
    }

    function hideEnhanceProfileModal() {
        const modal = document.getElementById('enhanceProfileModal');
        modal.style.display = 'none';
    }

    function updateProfileCompletion() {
        // Calculate profile completion percentage based on filled fields
        fetch('get_profile_completion.php')
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    document.getElementById('profile-completion').textContent = `${data.percentage}% Complete`;
                    document.querySelector('#enhanceProfileModal .bg-blue-600').style.width = `${data.percentage}%`;
                }
            })
            .catch(error => console.error('Error:', error));
    }

    function handleLogoUpload() {
        const input = document.createElement('input');
        input.type = 'file';
        input.accept = 'image/*';
        input.onchange = (e) => {
            const file = e.target.files[0];
            if (file) {
                const formData = new FormData();
                formData.append('logo', file);

                fetch('upload_company_logo.php', {
                        method: 'POST',
                        body: formData
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            // Update logo in UI
                            document.getElementById('company-logo').src = data.logo_url;
                            updateProfileCompletion();
                        }
                    })
                    .catch(error => console.error('Error:', error));
            }
        };
        input.click();
    }

    function improveDescription() {
        fetch('get_description_suggestions.php')
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Show suggestions in a new modal or update the description field
                    document.getElementById('edit-company-description').value = data.suggestion;
                    showEditProfileModal('description');
                }
            })
            .catch(error => console.error('Error:', error));
    }

    // Close modal when clicking outside
    document.getElementById('enhanceProfileModal').addEventListener('click', function(e) {
        if (e.target === this) {
            hideEnhanceProfileModal();
        }
    });
</script>