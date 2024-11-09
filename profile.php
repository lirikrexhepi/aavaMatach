<?php
session_start();
require_once 'config/db.php';

// Fetch user's profile picture
$stmt = $pdo->prepare("SELECT profile_picture FROM user_data WHERE id = ?");
$stmt->execute([$_SESSION['user_id']]);
$userData = $stmt->fetch();

// Remove the leading slash if it exists
$profilePicture = $userData['profile_picture'] 
    ? ltrim($userData['profile_picture'], '\\') // Remove leading slash
    : 'assets\\default-profile.jpg';  // Also removed leading slash from default path
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profile Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://api.fontshare.com/v2/css?f[]=general-sans@500,600&display=swap"
      rel="stylesheet"
    />
    <style>
      body {
        font-family: "General Sans", sans-serif;
        background: #ffffff;
        margin: 0;
        padding: 70px 0;
        position: relative;
        overflow-x: hidden;
      }

      .main-content {
        display: flex;
        margin-top: 20px;
      }

      .profile-header {
        background-color: #e0e0e0;
        height: 200px;
        position: relative;
        display: flex;
        align-items: flex-end;
      }

      .profile-picture {
        width: 150px !important;
        height: 150px !important;
        max-width: none !important;
        border-radius: 50%;
        border: 3px solid white;
        position: absolute;
        bottom: -50px;
        left: 20px;
        object-fit: cover;
      }

      .profile-container {
        max-width: 800px;
        margin: 2rem auto;
        padding: 2rem;
        background: white;
        border-radius: 20px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
        position: relative;
        z-index: 1;
      }

      .profile-name {
        font-size: 24px;
        font-weight: bold;
        margin: 0;
        margin-top: 60px;
      }

      .profile-headline {
        font-size: 16px;
        color: #444;
        margin: 5px 0;
      }

      .profile-info {
        font-size: 14px;
        color: #333;
        margin-bottom: 20px;
      }

      .profile-buttons {
        display: flex;
        gap: 10px;
        margin-bottom: 20px;
      }

      .button {
        background-color: #444;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        text-align: center;
      }

      .button-outline {
        background-color: transparent;
        color: #444;
        padding: 10px 20px;
        border: 2px solid #444;
        border-radius: 5px;
        cursor: pointer;
        text-align: center;
      }

      .profile-summary {
        background-color: #f3f2ef;
        padding: 10px;
        border-radius: 5px;
      }

      .sidebar {
        width: 300px;
        background: #ffffff;
        border: 1px solid rgba(0, 0, 0, 0.08);
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.02), 0 1px 3px rgba(0, 0, 0, 0.05);
        border-radius: 8px;
        padding: 20px;
      }

      .sidebar-box {
        background-color: #f9f9f9;
        border: 1px solid #ddd;
        border-radius: 5px;
        padding: 15px;
        margin-bottom: 20px;
      }

      /* Modal styles */
      .modal {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        justify-content: center;
        align-items: center;
        z-index: 1000;
      }

      .modal-content {
        background: white;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        width: 400px;
        max-width: 90%;
      }

      .close-modal {
        background: none;
        border: none;
        font-size: 24px;
        color: #666;
        cursor: pointer;
        float: right;
      }

      /* Navigation Styles */
      .top-nav {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        border-bottom: 1px solid rgba(0, 0, 0, 0.05);
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(10px);
        z-index: 100;
      }

      .nav-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 2rem 4rem;
        display: flex;
        justify-content: space-between;
        align-items: center;
        position: relative;
      }

      .logo {
        font-family: "General Sans", sans-serif;
        font-weight: 600;
        font-size: 1.5rem;
        letter-spacing: -0.02em;
        color: #000;
        text-decoration: none;
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
      }

      .bottom-nav {
        position: fixed;
        bottom: 0;
        left: 0;
        right: 0;
        background: white;
        display: flex;
        justify-content: space-around;
        padding: 12px 0;
        box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.05);
        z-index: 1000;
      }

      .bottom-nav-link {
        flex: 1;
        display: flex;
        flex-direction: column;
        align-items: center;
        text-decoration: none;
        color: #666;
        font-family: "General Sans", sans-serif;
        font-size: 12px;
        gap: 4px;
        transition: color 0.2s ease;
      }

      .bottom-nav-link:hover {
        color: #000;
      }

      .nav-icon {
        width: 24px;
        height: 24px;
      }

      /* Background Elements */
      .background-shapes {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        pointer-events: none;
        z-index: -1;
        overflow: hidden;
      }

      .shape {
        position: absolute;
        opacity: 0.1;
        animation: float 20s infinite linear;
        transition: all 0.3s ease;
      }

      .shape-1 {
        top: 15%;
        left: 10%;
        width: 150px;
        height: 150px;
        border: 3px solid #000;
        border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
        background: rgba(0, 0, 0, 0.02);
      }

      .shape-2 {
        top: 75%;
        right: 15%;
        width: 180px;
        height: 180px;
        border: 3px solid #000;
        border-radius: 50%;
        background: rgba(0, 0, 0, 0.02);
      }

      .shape-3 {
        top: 30%;
        right: 25%;
        width: 120px;
        height: 120px;
        background: rgba(0, 0, 0, 0.05);
        clip-path: polygon(50% 0%, 100% 50%, 50% 100%, 0% 50%);
      }

      .shape-4 {
        bottom: 20%;
        left: 20%;
        width: 130px;
        height: 130px;
        background: rgba(0, 0, 0, 0.05);
        clip-path: polygon(
          25% 0%,
          75% 0%,
          100% 50%,
          75% 100%,
          25% 100%,
          0% 50%
        );
      }

      .grid-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: linear-gradient(
            rgba(0, 0, 0, 0.03) 1px,
            transparent 1px
          ),
          linear-gradient(90deg, rgba(0, 0, 0, 0.03) 1px, transparent 1px);
        background-size: 50px 50px;
        pointer-events: none;
        z-index: -1;
        overflow: hidden;
      }

      @keyframes float {
        0% {
          transform: translate(0, 0) rotate(0deg) scale(1);
        }
        33% {
          transform: translate(15px, 15px) rotate(5deg) scale(1.05);
        }
        66% {
          transform: translate(-15px, 10px) rotate(-5deg) scale(0.95);
        }
        100% {
          transform: translate(0, 0) rotate(0deg) scale(1);
        }
      }
    </style>
  </head>
  <body>
    <!-- Top Navigation -->
    <nav class="top-nav">
      <div class="nav-container">
        <div class="nav-spacer"></div>
        <a href="#" class="logo">aava match.</a>
        <div class="nav-spacer"></div>
      </div>
    </nav>

    <div class="profile-container">
      <div class="profile-header">
        <div class="relative cursor-pointer" id="profile-pic-container">
            <img src="<?php echo htmlspecialchars($profilePicture); ?>" 
                 alt="Profile Picture" 
                 class="profile-picture" 
                 id="profile-picture" />
        </div>
      </div>
      <h1 class="profile-name" id="profile-name"></h1>
      <p class="profile-headline" id="profile-headline"></p>
      <p class="profile-info" id="profile-info"></p>
      <div class="profile-buttons">
        <button class="button">Open to</button>
        <button class="button-outline">Add profile section</button>
        <button class="button-outline">Enhance profile</button>
        <button class="button-outline" id="edit-profile-btn">
          Edit Profile
        </button>
      </div>
      <div class="profile-summary mt-4 text-sm">
        <div class="grid grid-cols-2 gap-x-6 gap-y-1">
            <div>Environment: <span class="text-gray-600" id="environment">Hybrid</span></div>
            <div>Hours: <span class="text-gray-600" id="workhours">Fixed</span></div>
            <div>Company: <span class="text-gray-600" id="company-size">Medium</span></div>
            <div>Pace: <span class="text-gray-600" id="work-pace">Fast</span></div>
            <div>Style: <span class="text-gray-600" id="communication-style">Formal</span></div>
            <div>Team: <span class="text-gray-600" id="team-dynamic">Collaborative</span></div>
            <div>Balance: <span class="text-gray-600" id="work-life">Strict</span></div>
            <div>Support: <span class="text-gray-600" id="mental-support">Essential</span></div>
        </div>
        <div class="mt-2">
            <div>Benefits: <span class="text-gray-600" id="benefits">Mental Health, Professional Dev, Remote Work</span></div>
            <div>Goals: <span class="text-gray-600" id="goals">Work Life</span></div>
        </div>
      </div>
    </div>

    <!-- Modal for editing profile -->
    <div class="modal" id="edit-profile-modal">
      <div class="modal-content">
        <button class="close-modal" id="close-modal-btn">&times;</button>
        <h2>Edit Profile</h2>
        <form>
          <label for="name">Name:</label>
          <input
            type="text"
            id="name"
            name="name"
            class="w-full mb-4 p-2 border rounded"
            value="Your Name"
          />

          <label for="headline">Headline:</label>
          <input
            type="text"
            id="headline"
            name="headline"
            class="w-full mb-4 p-2 border rounded"
            value="Full Stack Developer"
          />

          <label for="info">Info:</label>
          <input
            type="text"
            id="info"
            name="info"
            class="w-full mb-4 p-2 border rounded"
            value="Industry | Experience"
          />

          <button type="submit" class="button">Save Changes</button>
        </form>
      </div>
    </div>

    <!-- Bottom Navigation -->
    <div class="bottom-nav">
      <a href="./swipe.html" class="bottom-nav-link">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="nav-icon"
          viewBox="0 0 24 24"
          fill="none"
          stroke="currentColor"
          stroke-width="2"
        >
          <path d="M9 3L5 7M5 7L9 11M5 7H19M15 21L19 17M19 17L15 13M19 17H5" />
        </svg>
        Swipe
      </a>
      <a href="./match.html" class="bottom-nav-link">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="nav-icon"
          viewBox="0 0 24 24"
          fill="none"
          stroke="currentColor"
          stroke-width="2"
        >
          <path
            d="M21 3H3C2 3 1 4 1 5V19C1 20 2 21 3 21H21C22 21 23 20 23 19V5C23 4 22 3 21 3ZM12 18L3 11V5H21V11L12 18Z"
          />
        </svg>
        Matches
      </a>
      <a href="./review.html" class="bottom-nav-link">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="nav-icon"
          viewBox="0 0 24 24"
          fill="none"
          stroke="currentColor"
          stroke-width="2"
        >
          <path
            d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z"
          />
        </svg>
        Review
      </a>
      <a href="#" class="bottom-nav-link" style="color: #000">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="nav-icon"
          viewBox="0 0 24 24"
          fill="none"
          stroke="currentColor"
          stroke-width="2"
        >
          <path
            d="M20 21V19C20 17.9391 19.5786 16.9217 18.8284 16.1716C18.0783 15.4214 17.0609 15 16 15H8C6.93913 15 5.92172 15.4214 5.17157 16.1716C4.42143 16.9217 4 17.9391 4 19V21"
          />
          <path
            d="M12 11C14.2091 11 16 9.20914 16 7C16 4.79086 14.2091 3 12 3C9.79086 3 8 4.79086 8 7C8 9.20914 9.79086 11 12 11Z"
          />
        </svg>
        Profile
      </a>
    </div>

    <!-- Hidden file input -->
    <input type="file" id="profile-pic-input" accept="image/*" class="hidden" />

    <script>
      const editProfileBtn = document.getElementById("edit-profile-btn");
      const editProfileModal = document.getElementById("edit-profile-modal");
      const closeModalBtn = document.getElementById("close-modal-btn");

      // Fetch and display profile data
      async function loadProfileData() {
        try {
          const response = await fetch('includes/get_profile_data.php');
          const data = await response.json();
          
          if (data.success) {
            const userData = data.data;
            
            // Basic profile info
            document.getElementById('profile-name').textContent = userData.fullname;
            document.getElementById('profile-headline').textContent = userData.role || 'No headline set';
            
            // Industry and Experience
            const industry = userData.industry 
                ? userData.industry.charAt(0).toUpperCase() + userData.industry.slice(1) 
                : 'Industry not set';
            let experience = 'Experience not set';
            if (userData.experience) {
                experience = userData.experience.charAt(0).toUpperCase() + userData.experience.slice(1);
                if (/\d/.test(experience)) {
                    experience += ' years';
                }
            }
            document.getElementById('profile-info').textContent = `${industry} | ${experience}`;

            // Work Preferences
            document.getElementById('environment').textContent = `Environment: ${capitalize(userData.environment || 'Not specified')}`;
            document.getElementById('workhours').textContent = `Working Hours: ${capitalize(userData.workhours || 'Not specified')}`;
            document.getElementById('company-size').textContent = `Preferred Company Size: ${capitalize(userData.prefered_company_size || 'Not specified')}`;
            document.getElementById('work-pace').textContent = `Work Pace: ${capitalize(userData.work_pace || 'Not specified')}`;

            // Communication & Team
            document.getElementById('communication-style').textContent = `Communication Style: ${capitalize(userData.communication || 'Not specified')}`;
            document.getElementById('team-dynamic').textContent = `Team Dynamic: ${capitalize(userData.team_dynamic || 'Not specified')}`;
            document.getElementById('work-life').textContent = `Work-Life Balance: ${capitalize(userData.work_life_balance || 'Not specified')}`;

            // Wellness & Benefits
            document.getElementById('mental-support').textContent = `Mental Health Support: ${capitalize(userData.mental_support || 'Not specified')}`;
            document.getElementById('wellness-program').textContent = `Wellness Program: ${capitalize(userData.wellness_program || 'Not specified')}`;
            
            // Format benefits as a list if they exist
            const benefits = userData.benefits ? userData.benefits.split(',').map(b => capitalize(b.replace(/_/g, ' '))).join(', ') : 'Not specified';
            document.getElementById('benefits').textContent = `Benefits: ${benefits}`;

            // Goals
            document.getElementById('goals').textContent = `Primary Goals: ${capitalize(userData.goals?.replace(/_/g, ' ') || 'Not specified')}`;

            // Profile picture
            const profilePicture = document.getElementById('profile-picture');
            if (userData.profile_picture) {
                profilePicture.src = userData.profile_picture;
            } else {
                profilePicture.src = '/assets/default-profile.jpg';
            }
          }
        } catch (error) {
          console.error('Error loading profile data:', error);
        }
      }

      // Load profile data when page loads
      document.addEventListener('DOMContentLoaded', loadProfileData);

      // Modal event listeners
      editProfileBtn.addEventListener("click", () => {
        editProfileModal.style.display = "flex";
      });

      closeModalBtn.addEventListener("click", () => {
        editProfileModal.style.display = "none";
      });

      window.addEventListener("click", (event) => {
        if (event.target === editProfileModal) {
          editProfileModal.style.display = "none";
        }
      });

      // Handle form submission
      document.querySelector('.modal-content form').addEventListener('submit', async (e) => {
        e.preventDefault();
        
        const formData = new FormData(e.target);
        
        try {
          const response = await fetch('includes/update_profile.php', {
            method: 'POST',
            body: formData
          });
          
          const data = await response.json();
          
          if (data.success) {
            editProfileModal.style.display = "none";
            loadProfileData(); // Reload profile data
          } else {
            alert(data.message || 'Error updating profile');
          }
        } catch (error) {
          console.error('Error updating profile:', error);
          alert('Error updating profile');
        }
      });

      // Helper function to capitalize strings
      function capitalize(str) {
        return str.split(' ')
            .map(word => word.charAt(0).toUpperCase() + word.slice(1))
            .join(' ');
      }

      document.addEventListener('DOMContentLoaded', function() {
        const profilePicContainer = document.getElementById('profile-pic-container');
        const profilePicInput = document.getElementById('profile-pic-input');
        const profilePicture = document.getElementById('profile-picture');

        // Handle click on profile picture
        profilePicContainer.addEventListener('click', () => {
            profilePicInput.click();
        });

        // Handle file selection
        profilePicInput.addEventListener('change', async (e) => {
            if (e.target.files && e.target.files[0]) {
                const file = e.target.files[0];
                
                if (!file.type.startsWith('image/')) {
                    alert('Please select an image file');
                    return;
                }

                const formData = new FormData();
                formData.append('profile_picture', file);

                try {
                    const response = await fetch('includes/upload_profile_picture.php', {
                        method: 'POST',
                        body: formData
                    });

                    const data = await response.json();

                    if (data.success) {
                        // Update profile picture with the returned path
                        profilePicture.src = data.path;
                        alert('Profile picture updated successfully');
                    } else {
                        alert(data.message || 'Failed to upload profile picture');
                    }
                } catch (error) {
                    console.error('Error:', error);
                    alert('Error uploading profile picture');
                }
            }
        });

        // Update the loadProfileData function to handle profile picture
        async function loadProfileData() {
            try {
                const response = await fetch('includes/get_profile_data.php');
                const data = await response.json();
                
                if (data.success) {
                    const userData = data.data;
                    
                    // Update profile picture
                    const profilePicture = document.getElementById('profile-picture');
                    if (userData.profile_picture) {
                        // Use the path directly from the database
                        profilePicture.src = userData.profile_picture;
                    } else {
                        profilePicture.src = '/assets/default-profile.jpg';
                    }

                    // ... rest of your existing loadProfileData code ...
                }
            } catch (error) {
                console.error('Error loading profile data:', error);
            }
        }
      });
    </script>

    <!-- Background Elements -->
    <div class="background-shapes">
      <div class="shape shape-1"></div>
      <div class="shape shape-2"></div>
      <div class="shape shape-3"></div>
      <div class="shape shape-4"></div>
    </div>
    <div class="grid-overlay"></div>
  </body>
</html>
