<div>
    <label class="block text-sm font-medium text-gray-700 mb-1">Job Title</label>
    <input type="text" name="employment" class="w-full px-4 py-2 border rounded-lg" required>
</div>

<div>
    <label class="block text-sm font-medium text-gray-700 mb-1">Location</label>
    <input type="text" name="location" class="w-full px-4 py-2 border rounded-lg" required>
</div>

<div>
    <label class="block text-sm font-medium text-gray-700 mb-1">Employment Type</label>
    <select name="employment_type" class="w-full px-4 py-2 border rounded-lg" required>
        <option value="">Select Type</option>
        <option value="Full-time">Full-time</option>
        <option value="Part-time">Part-time</option>
        <option value="Contract">Contract</option>
        <option value="Freelance">Freelance</option>
    </select>
</div>

<div>
    <label class="block text-sm font-medium text-gray-700 mb-1">Salary Range</label>
    <input type="text" name="salary" class="w-full px-4 py-2 border rounded-lg" required>
</div>

<div>
    <label class="block text-sm font-medium text-gray-700 mb-1">Description</label>
    <textarea name="description" rows="4" class="w-full px-4 py-2 border rounded-lg" required></textarea>
</div>

<div class="flex justify-end gap-4">
    <button type="button" onclick="hideAddJobModal()" class="px-4 py-2 border rounded-lg hover:bg-gray-50">
        Cancel
    </button>
    <button type="submit" class="px-4 py-2 bg-black text-white rounded-lg hover:bg-gray-800">
        Create Listing
    </button>
</div> 