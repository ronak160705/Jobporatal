<?php 
$title = "Home";
include 'header.php'; 
?>
<section class="hero">
    <h1>Find Your Dream Job Today</h1>
    <p>Connecting job seekers with top employers</p>
    <div class="search-bar">
        <input type="text" placeholder="Search for jobs...">
        <button>Get Started</button>
    </div>
</section>

<section class="featured-jobs">
    <h2>Featured Jobs</h2>
    <div class="job-listings">
        <div class="job-card">
            <h3>Software Engineer</h3>
            <p>Company: Tech Solutions</p>
            <p>Location: New York, NY</p>
            <p>Brief description of the job...</p>
        </div>
        <div class="job-card">
            <h3>Marketing Manager</h3>
            <p>Company: Creative Agency</p>
            <p>Location: San Francisco, CA</p>
            <p>Brief description of the job...</p>
        </div>
        <!-- Add more job cards as needed -->
    </div>
</section>

<section class="how-it-works">
    <h2>How It Works</h2>
    <div class="steps">
        <div class="step">
            <h3>1. Create an Account</h3>
            <p>Sign up and create your profile</p>
        </div>
        <div class="step">
            <h3>2. Upload Resume</h3>
            <p>Upload your resume and get noticed</p>
        </div>
        <div class="step">
            <h3>3. Search for Jobs</h3>
            <p>Find jobs that match your skills</p>
        </div>
        <div class="step">
            <h3>4. Apply</h3>
            <p>Submit applications with a click</p>
        </div>
    </div>
</section>

<section class="testimonials">
    <h2>What Our Users Say</h2>
    <div class="testimonial">
        <p>"This portal helped me find my dream job!"</p>
        <p>- John Doe</p>
    </div>
    <div class="testimonial">
        <p>"Excellent platform for job seekers!"</p>
        <p>- Jane Smith</p>
    </div>
    <!-- Add more testimonials as needed -->
</section>
<?php include 'footer.php'; ?>
