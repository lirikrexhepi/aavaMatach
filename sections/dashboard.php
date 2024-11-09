<div class="min-h-screen bg-gray-50/50 rounded-m p-6 lg:p-8">
    <div class="max-w-7xl mx-auto">
        <!-- Header with navigation -->
        <div class="flex items-center justify-between mb-8">
            <div>
                <h1 class="text-2xl font-semibold mb-2 text-gray-900">Dashboard</h1>
                <p class="text-gray-600">Overview of your matching analytics</p>
            </div>
            <div class="flex items-center gap-4">
                <button class="px-4 py-2 text-sm bg-white border border-gray-200 rounded-lg hover:bg-gray-50 shadow-sm text-gray-700">Last 30 days ▾</button>
                <button class="px-4 py-2 text-sm bg-white border border-gray-200 rounded-lg hover:bg-gray-50 shadow-sm text-gray-700">Desktop ▾</button>
                <button class="px-4 py-2 text-sm bg-white border border-gray-200 rounded-lg hover:bg-gray-50 shadow-sm text-gray-700">United States ▾</button>
            </div>
        </div>

        <!-- Panels -->
        <div class="space-y-6">
            <!-- Matching Analytics Panel -->
            <div class="bg-white rounded-xl border border-gray-200 p-6 shadow-sm hover:border-blue-200 transition-colors">
                <div class="flex items-center justify-between mb-6">
                    <h2 class="text-lg font-semibold text-gray-900">Matching Analytics</h2>
                    <span class="text-sm text-gray-500">Updated: 2 hours ago</span>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Match Score -->
                    <div class="bg-gray-50/50 border border-gray-200 rounded-lg p-4 hover:border-blue-200 transition-colors">
                        <div class="flex items-center justify-between">
                            <span class="text-gray-600 font-medium">Match Score</span>
                            <span class="text-xs text-green-600 bg-green-50 px-2 py-1 rounded-full font-medium">↑ 4%</span>
                        </div>
                        <div class="mt-2">
                            <span class="text-3xl font-semibold text-blue-600">82</span>
                            <span class="text-gray-400 text-sm">/100</span>
                        </div>
                    </div>

                    <!-- Daily Matches -->
                    <div class="bg-gray-50/50 border border-gray-200 rounded-lg p-4 hover:border-blue-200 transition-colors">
                        <div class="flex items-center justify-between">
                            <span class="text-gray-600 font-medium">Daily Matches</span>
                            <span class="text-xs text-green-600 bg-green-50 px-2 py-1 rounded-full font-medium">↑ 2.1%</span>
                        </div>
                        <div class="mt-2">
                            <span class="text-3xl font-semibold text-gray-900">156</span>
                        </div>
                    </div>

                    <!-- Active Users -->
                    <div class="bg-gray-50/50 border border-gray-200 rounded-lg p-4 hover:border-blue-200 transition-colors">
                        <div class="flex items-center justify-between">
                            <span class="text-gray-600 font-medium">Active Users</span>
                            <span class="text-xs text-red-600 bg-red-50 px-2 py-1 rounded-full font-medium">↓ 1.2%</span>
                        </div> 
                        <div class="mt-2">
                            <span class="text-3xl font-semibold text-gray-900">428</span>
                        </div>
                    </div>

                    <!-- Success Rate -->
                    <div class="bg-gray-50/50 border border-gray-200 rounded-lg p-4 hover:border-blue-200 transition-colors">
                        <div class="flex items-center justify-between">
                            <span class="text-gray-600 font-medium">Success Rate</span>
                            <span class="text-xs text-green-600 bg-green-50 px-2 py-1 rounded-full font-medium">↑ 1.5%</span>
                        </div>
                        <div class="mt-2">
                            <span class="text-3xl font-semibold text-gray-900">64%</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Match Quality Tracking -->
            <div class="bg-white rounded-xl border border-gray-200 p-6 shadow-sm hover:border-blue-200 transition-colors">
                <div class="flex items-center justify-between mb-6">
                    <h2 class="text-lg font-semibold text-gray-900">Match Quality Tracking</h2>
                    <button class="text-sm text-blue-600 hover:text-blue-700 font-medium">View full report →</button>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Match Quality Graph -->
                    <div class="bg-gray-50/50 border border-gray-200 rounded-lg p-4">
                        <div class="h-48 bg-gray-100/50 rounded-lg flex items-center justify-center text-gray-500">
                            [Match Quality Graph Placeholder]
                        </div>
                    </div>

                    <!-- Top Matching Categories -->
                    <div class="bg-gray-50/50 border border-gray-200 rounded-lg p-4">
                        <table class="w-full">
                            <thead>
                                <tr class="text-sm text-gray-500">
                                    <th class="text-left pb-3 font-medium">Category</th>
                                    <th class="text-left pb-3 font-medium">Match Rate</th>
                                    <th class="text-left pb-3 font-medium">Change</th>
                                </tr>
                            </thead>
                            <tbody class="text-sm">
                                <tr class="border-t border-gray-100">
                                    <td class="py-3 text-gray-900 font-medium">Tech Roles</td>
                                    <td class="py-3 text-gray-600">92%</td>
                                    <td class="py-3"><span class="text-green-600 bg-green-50 px-2 py-1 rounded-full text-xs font-medium">↑ 2.3%</span></td>
                                </tr>
                                <tr class="border-t border-gray-100">
                                    <td class="py-3 text-gray-900 font-medium">Marketing</td>
                                    <td class="py-3 text-gray-600">88%</td>
                                    <td class="py-3"><span class="text-green-600 bg-green-50 px-2 py-1 rounded-full text-xs font-medium">↑ 1.7%</span></td>
                                </tr>
                                <tr class="border-t border-gray-100">
                                    <td class="py-3 text-gray-900 font-medium">Sales</td>
                                    <td class="py-3 text-gray-600">85%</td>
                                    <td class="py-3"><span class="text-red-600 bg-red-50 px-2 py-1 rounded-full text-xs font-medium">↓ 0.5%</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Match Health Score -->
            <div class="bg-white rounded-xl border p-6">
                <div class="flex items-center justify-between mb-4">
                    <h2 class="text-lg font-semibold">Match Health Score</h2>
                    <span class="text-sm text-gray-500">Updated: Mon, Dec 25, 2023</span>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <!-- Health Score Chart -->
                    <div class="col-span-1">
                        <div class="relative h-48 flex items-center justify-center">
                            <div class="text-center">
                                <div class="text-4xl font-bold text-blue-600">77%</div>
                                <div class="text-sm text-gray-500">Overall Health</div>
                            </div>
                        </div>
                    </div>

                    <!-- Health Metrics -->
                    <div class="col-span-2">
                        <div class="grid grid-cols-2 gap-4">
                            <div class="border rounded-lg p-4">
                                <div class="text-sm text-gray-600">Failed Matches</div>
                                <div class="text-2xl font-semibold text-red-600">204</div>
                            </div>
                            <div class="border rounded-lg p-4">
                                <div class="text-sm text-gray-600">Warnings</div>
                                <div class="text-2xl font-semibold text-orange-600">2986</div>
                            </div>
                            <div class="border rounded-lg p-4">
                                <div class="text-sm text-gray-600">Active Profiles</div>
                                <div class="text-2xl font-semibold">200</div>
                            </div>
                            <div class="border rounded-lg p-4">
                                <div class="text-sm text-gray-600">Match Accuracy</div>
                                <div class="text-2xl font-semibold text-green-600">95%</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- New Section: Competitive Analysis -->
            <div class="bg-white rounded-xl border border-gray-200 p-6 shadow-sm hover:border-blue-200 transition-colors mt-6">
                <div class="flex items-center justify-between mb-6">
                    <h2 class="text-lg font-semibold text-gray-900">Competitive Analysis</h2>
                    <button class="text-sm text-blue-600 hover:text-blue-700 font-medium">View detailed report →</button>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <!-- Market Position -->
                    <div class="border rounded-lg p-6">
                        <h3 class="text-md font-semibold mb-4">Market Differentiators</h3>
                        <div class="space-y-4">
                            <div class="flex items-center justify-between">
                                <span class="text-gray-600">Your Company</span>
                                <span class="text-sm font-medium">AI-Powered Matching</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-gray-600">LinkedIn</span>
                                <span class="text-sm font-medium">Professional Network</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-gray-600">Indeed</span>
                                <span class="text-sm font-medium">Job Aggregation</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-gray-600">ZipRecruiter</span>
                                <span class="text-sm font-medium">1-Click Apply</span>
                            </div>
                        </div>
                    </div>

                    <!-- Areas for Improvement -->
                    <div class="border rounded-lg p-6">
                        <h3 class="text-md font-semibold mb-4">Growth Opportunities</h3>
                        <div class="space-y-3">
                            <div class="flex items-center gap-3">
                                <div class="w-2 h-2 bg-red-500 rounded-full"></div>
                                <span class="text-gray-700">Expand skill assessment features</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <div class="w-2 h-2 bg-orange-500 rounded-full"></div>
                                <span class="text-gray-700">Implement video interviewing platform</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <div class="w-2 h-2 bg-yellow-500 rounded-full"></div>
                                <span class="text-gray-700">Develop mobile app presence</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                                <span class="text-gray-700">Enhanced analytics for employers</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- New Section: Business Improvement Recommendations -->
            <div class="bg-white rounded-xl border border-gray-200 p-6 shadow-sm hover:border-blue-200 transition-colors mt-6">
                <div class="flex items-center justify-between mb-6">
                    <h2 class="text-lg font-semibold text-gray-900">Business Improvement Strategy</h2>
                    <span class="text-sm text-gray-500">Priority-based recommendations</span>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <!-- Short-term Goals -->
                    <div class="border rounded-lg p-4">
                        <h3 class="font-semibold text-gray-900 mb-3">Short-term (0-3 months)</h3>
                        <ul class="space-y-2">
                            <li class="flex items-center gap-2">
                                <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                                <span class="text-sm">Improve user onboarding flow</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                                <span class="text-sm">Enhance match algorithm accuracy</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                                <span class="text-sm">Implement basic analytics</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Mid-term Goals -->
                    <div class="border rounded-lg p-4">
                        <h3 class="font-semibold text-gray-900 mb-3">Mid-term (3-6 months)</h3>
                        <ul class="space-y-2">
                            <li class="flex items-center gap-2">
                                <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                                <span class="text-sm">Launch mobile application</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                                <span class="text-sm">Integrate skill assessments</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                                <span class="text-sm">Expand employer features</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Long-term Goals -->
                    <div class="border rounded-lg p-4">
                        <h3 class="font-semibold text-gray-900 mb-3">Long-term (6+ months)</h3>
                        <ul class="space-y-2">
                            <li class="flex items-center gap-2">
                                <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                                <span class="text-sm">AI-powered interview prep</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                                <span class="text-sm">Global market expansion</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                                <span class="text-sm">Enterprise solutions launch</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Company Progress & Tasks -->
            <div class="bg-white rounded-xl border border-gray-200 p-6 shadow-sm hover:border-blue-200 transition-colors mt-6">
                <div class="flex items-center justify-between mb-6">
                    <div>
                        <h2 class="text-lg font-semibold text-gray-900">Business Growth Tasks</h2>
                        <p class="text-sm text-gray-500">Complete tasks to improve your company's performance</p>
                    </div>
                    <div class="text-right">
                        <div class="text-2xl font-bold text-blue-600">385</div>
                        <div class="text-sm text-gray-500">Growth Points</div>
                    </div>
                </div>

                <div class="space-y-6">
                    <!-- Progress Overview -->
                    <div class="bg-gray-50 rounded-lg p-4">
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-sm font-medium text-gray-700">Business Level Progress</span>
                            <span class="text-sm font-medium text-blue-600">Level 3</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2.5">
                            <div class="bg-blue-600 h-2.5 rounded-full" style="width: 65%"></div>
                        </div>
                        <div class="flex justify-between mt-1">
                            <span class="text-xs text-gray-500">385/500 points to Level 4</span>
                            <span class="text-xs text-gray-500">500 points</span>
                        </div>
                    </div>

                    <!-- Active Tasks -->
                    <div class="space-y-4">
                        <!-- Incomplete Tasks -->
                        <div class="border rounded-lg divide-y">
                            <div class="p-4">
                                <div class="flex items-center justify-between mb-1">
                                    <h3 class="font-semibold text-gray-900">Profile Completion</h3>
                                    <span class="text-sm text-blue-600">+50 points</span>
                                </div>
                                <p class="text-sm text-gray-600 mb-3">Complete your company profile with all required information</p>
                                <div class="flex justify-between items-center">
                                    <div class="flex items-center gap-2">
                                        <div class="w-full bg-gray-200 rounded-full h-2 w-24">
                                            <div class="bg-blue-600 h-2 rounded-full" style="width: 75%"></div>
                                        </div>
                                        <span class="text-xs text-gray-500">75%</span>
                                    </div>
                                    <button onclick="showTaskModal('profile-completion')" class="text-sm text-white bg-blue-600 px-3 py-1 rounded-lg hover:bg-blue-700">
                                        Continue
                                    </button>
                                </div>
                            </div>

                            <div class="p-4">
                                <div class="flex items-center justify-between mb-1">
                                    <h3 class="font-semibold text-gray-900">Job Description Enhancement</h3>
                                    <span class="text-sm text-blue-600">+30 points</span>
                                </div>
                                <p class="text-sm text-gray-600 mb-3">Improve 5 job descriptions with better details and requirements</p>
                                <div class="flex justify-between items-center">
                                    <div class="flex items-center gap-2">
                                        <div class="w-full bg-gray-200 rounded-full h-2 w-24">
                                            <div class="bg-blue-600 h-2 rounded-full" style="width: 40%"></div>
                                        </div>
                                        <span class="text-xs text-gray-500">2/5</span>
                                    </div>
                                    <button onclick="showTaskModal('job-description')" class="text-sm text-white bg-blue-600 px-3 py-1 rounded-lg hover:bg-blue-700">
                                        Continue
                                    </button>
                                </div>
                            </div>

                            <div class="p-4">
                                <div class="flex items-center justify-between mb-1">
                                    <h3 class="font-semibold text-gray-900">Response Time Improvement</h3>
                                    <span class="text-sm text-blue-600">+45 points</span>
                                </div>
                                <p class="text-sm text-gray-600 mb-3">Maintain a response time under 24 hours for one week</p>
                                <div class="flex justify-between items-center">
                                    <div class="flex items-center gap-2">
                                        <div class="w-full bg-gray-200 rounded-full h-2 w-24">
                                            <div class="bg-blue-600 h-2 rounded-full" style="width: 20%"></div>
                                        </div>
                                        <span class="text-xs text-gray-500">1.4/7 days</span>
                                    </div>
                                    <button onclick="showTaskModal('response-time')" class="text-sm text-white bg-blue-600 px-3 py-1 rounded-lg hover:bg-blue-700">
                                        View Details
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Completed Tasks -->
                        <div class="border rounded-lg divide-y bg-gray-50">
                            <div class="p-4">
                                <h3 class="text-sm font-medium text-gray-700 mb-3">Recently Completed</h3>
                                <div class="space-y-3">
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center gap-2">
                                            <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            <span class="text-sm text-gray-600">Company Logo Upload</span>
                                        </div>
                                        <span class="text-sm text-gray-500">+25 points</span>
                                    </div>
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center gap-2">
                                            <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            <span class="text-sm text-gray-600">Email Verification</span>
                                        </div>
                                        <span class="text-sm text-gray-500">+15 points</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Upcoming Tasks -->
                    <div class="border rounded-lg p-4">
                        <h3 class="text-sm font-medium text-gray-700 mb-3">Upcoming Tasks</h3>
                        <div class="space-y-3">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-2">
                                    <div class="w-2 h-2 bg-gray-300 rounded-full"></div>
                                    <span class="text-sm text-gray-600">Implement Video Interviews</span>
                                </div>
                                <span class="text-sm text-gray-500">+100 points</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-2">
                                    <div class="w-2 h-2 bg-gray-300 rounded-full"></div>
                                    <span class="text-sm text-gray-600">Create Skill Assessment Tests</span>
                                </div>
                                <span class="text-sm text-gray-500">+75 points</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-2">
                                    <div class="w-2 h-2 bg-gray-300 rounded-full"></div>
                                    <span class="text-sm text-gray-600">Set Up Employee Referral Program</span>
                                </div>
                                <span class="text-sm text-gray-500">+60 points</span>
                            </div>
                        </div>
                    </div>

                    <!-- Level Benefits -->
                    <div class="bg-blue-50 rounded-lg p-4">
                        <h3 class="text-sm font-medium text-blue-900 mb-3">Level 4 Benefits Preview</h3>
                        <ul class="space-y-2">
                            <li class="flex items-center gap-2 text-sm text-blue-800">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span>Featured company listing for 1 month</span>
                            </li>
                            <li class="flex items-center gap-2 text-sm text-blue-800">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span>Priority matching with candidates</span>
                            </li>
                            <li class="flex items-center gap-2 text-sm text-blue-800">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span>Advanced analytics dashboard</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div id="createJobModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
    <div class="bg-white rounded-xl p-8 max-w-2xl w-full mx-4">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-semibold">Create New Job Listing</h2>
            <button onclick="hideAddJobModal()" class="text-gray-500 hover:text-gray-700">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <form id="createJobForm" class="space-y-6">
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
        </form>
    </div>
</div>

<!-- Add Task Details Modal -->
<div id="taskModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
    <div class="bg-white rounded-xl p-8 max-w-2xl w-full mx-4 max-h-[90vh] overflow-y-auto">
        <!-- Modal Header -->
        <div class="flex justify-between items-center mb-6">
            <h2 id="taskModalTitle" class="text-2xl font-semibold">Task Details</h2>
            <button onclick="hideTaskModal()" class="text-gray-500 hover:text-gray-700">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <!-- Task Content -->
        <div id="taskModalContent" class="space-y-6">
            <!-- Content will be dynamically inserted here -->
        </div>

        <!-- Modal Footer -->
        <div class="flex justify-between items-center mt-8 pt-6 border-t">
            <div class="flex items-center gap-2">
                <div class="text-sm font-medium text-gray-700">Completion Status:</div>
                <div id="taskModalProgress" class="text-sm font-medium text-blue-600">75% Complete</div>
            </div>
            <div class="flex gap-4">
                <button onclick="hideTaskModal()" class="px-4 py-2 text-sm border rounded-lg hover:bg-gray-50">
                    Close
                </button>
                <button id="taskModalAction" class="px-4 py-2 text-sm bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                    Continue Task
                </button>
            </div>
        </div>
    </div>
</div>

<script>
    function showAddJobModal() {
        const modal = document.getElementById('createJobModal');
        modal.style.display = 'flex';
    }

    function hideAddJobModal() {
        const modal = document.getElementById('createJobModal');
        modal.style.display = 'none';
    }

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
                alert('Job listing created successfully!');
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

    // Task details data object
    const taskDetails = {
        'profile-completion': {
            title: 'Complete Company Profile',
            points: 50,
            progress: 75,
            content: `
                <div class="space-y-6">
                    <div>
                        <h3 class="text-lg font-medium text-gray-900 mb-2">Task Overview</h3>
                        <p class="text-gray-600">Complete your company profile to improve visibility and attract better candidates.</p>
                    </div>

                    <div class="space-y-4">
                        <h3 class="text-lg font-medium text-gray-900">Required Steps</h3>
                        <div class="space-y-3">
                            <div class="flex items-center gap-3">
                                <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                <span class="text-gray-600">Upload company logo</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                <span class="text-gray-600">Add company description</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <div class="w-5 h-5 border-2 border-gray-300 rounded"></div>
                                <span class="text-gray-600">Upload company culture photos</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <div class="w-5 h-5 border-2 border-gray-300 rounded"></div>
                                <span class="text-gray-600">Add employee benefits information</span>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h3 class="text-lg font-medium text-gray-900 mb-2">Benefits</h3>
                        <ul class="list-disc pl-5 space-y-2 text-gray-600">
                            <li>Improved visibility in search results</li>
                            <li>Higher candidate engagement</li>
                            <li>Better company branding</li>
                            <li>Increased application rates</li>
                        </ul>
                    </div>

                    <div class="bg-blue-50 rounded-lg p-4">
                        <h3 class="text-sm font-medium text-blue-900 mb-2">Pro Tip</h3>
                        <p class="text-sm text-blue-800">Companies with complete profiles receive 4x more applications and have a 50% higher chance of finding the right candidate.</p>
                    </div>
                </div>
            `
        },
        'job-description': {
            title: 'Enhance Job Descriptions',
            points: 30,
            progress: 40,
            content: `
                <div class="space-y-6">
                    <div>
                        <h3 class="text-lg font-medium text-gray-900 mb-2">Task Overview</h3>
                        <p class="text-gray-600">Improve your job descriptions to attract more qualified candidates.</p>
                    </div>

                    <div class="space-y-4">
                        <h3 class="text-lg font-medium text-gray-900">Progress (2/5 Complete)</h3>
                        <div class="space-y-3">
                            <div class="flex items-center gap-3">
                                <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                <span class="text-gray-600">Software Engineer Position</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                <span class="text-gray-600">Marketing Manager Position</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <div class="w-5 h-5 border-2 border-gray-300 rounded"></div>
                                <span class="text-gray-600">Product Designer Position</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <div class="w-5 h-5 border-2 border-gray-300 rounded"></div>
                                <span class="text-gray-600">Sales Representative Position</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <div class="w-5 h-5 border-2 border-gray-300 rounded"></div>
                                <span class="text-gray-600">Customer Support Position</span>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h3 class="text-lg font-medium text-gray-900 mb-2">Requirements</h3>
                        <ul class="list-disc pl-5 space-y-2 text-gray-600">
                            <li>Clear job responsibilities</li>
                            <li>Specific requirements and qualifications</li>
                            <li>Salary range information</li>
                            <li>Company benefits details</li>
                            <li>Growth opportunities</li>
                        </ul>
                    </div>
                </div>
            `
        },
        'response-time': {
            title: 'Improve Response Time',
            points: 45,
            progress: 20,
            content: `
                <div class="space-y-6">
                    <div>
                        <h3 class="text-lg font-medium text-gray-900 mb-2">Task Overview</h3>
                        <p class="text-gray-600">Maintain quick response times to candidate applications and messages.</p>
                    </div>

                    <div>
                        <h3 class="text-lg font-medium text-gray-900 mb-2">Current Statistics</h3>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="border rounded-lg p-4">
                                <div class="text-sm text-gray-600">Average Response Time</div>
                                <div class="text-2xl font-semibold text-blue-600">32 hours</div>
                                <div class="text-xs text-gray-500">Target: < 24 hours</div>
                            </div>
                            <div class="border rounded-lg p-4">
                                <div class="text-sm text-gray-600">Response Rate</div>
                                <div class="text-2xl font-semibold text-blue-600">85%</div>
                                <div class="text-xs text-gray-500">Target: > 95%</div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h3 class="text-lg font-medium text-gray-900 mb-2">Weekly Progress</h3>
                        <div class="space-y-3">
                            <div class="flex items-center justify-between">
                                <span class="text-sm text-gray-600">Monday</span>
                                <span class="text-sm text-green-600">✓ Achieved</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-sm text-gray-600">Tuesday</span>
                                <span class="text-sm text-red-600">× Missed</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-sm text-gray-600">Wednesday</span>
                                <span class="text-sm text-red-600">× Missed</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-sm text-gray-600">Thursday - Sunday</span>
                                <span class="text-sm text-gray-600">Pending</span>
                            </div>
                        </div>
                    </div>

                    <div class="bg-blue-50 rounded-lg p-4">
                        <h3 class="text-sm font-medium text-blue-900 mb-2">Impact</h3>
                        <p class="text-sm text-blue-800">Companies with faster response times are 3x more likely to secure their preferred candidates.</p>
                    </div>
                </div>
            `
        }
    };

    function showTaskModal(taskId) {
        const modal = document.getElementById('taskModal');
        const task = taskDetails[taskId];
        
        if (task) {
            document.getElementById('taskModalTitle').textContent = task.title;
            document.getElementById('taskModalContent').innerHTML = task.content;
            document.getElementById('taskModalProgress').textContent = `${task.progress}% Complete`;
        }
        
        modal.style.display = 'flex';
    }

    function hideTaskModal() {
        const modal = document.getElementById('taskModal');
        modal.style.display = 'none';
    }

    // Close modal when clicking outside
    document.getElementById('taskModal').addEventListener('click', function(e) {
        if (e.target === this) {
            hideTaskModal();
        }
    });
</script>