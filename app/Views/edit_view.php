<div class="form-container">
    <h3>Edit User Details</h3>
    <div class="d-flex align-items-center justify-content-center">
        <div class="col col-md-6">
            <form action="<?= base_url('users/edit/'.$user['id']); ?>" method="post">
                <div class="form-group mb-2">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" name="username" id="username" class="form-control" value="<?= $user['username']; ?>">
                </div>
                <div class="form-group mb-2">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="password" class="form-control">
                </div>
                <div class="form-group mb-2">
                    <label for="confpassword" class="form-label">Confirm Password</label>
                    <input type="password" name="confpassword" id="confpassword" class="form-control">
                </div>
                <div class="form-group mb-2">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control" value="<?= $user['email']; ?>">
                </div>
                <div class="form-group mb-2">
                    <label for="fullname" class="form-label">Fullname</label>
                    <input type="text" name="fullname" id="fullname" class="form-control" value="<?= $user['fullname']; ?>">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Save Changes</button>
                    <a href="<?= base_url('users'); ?>" class="btn btn-danger">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>

<style>
    .form-container {
        background: rgba(255, 255, 255, 0.05);
        border-radius: 15px;
        padding: 30px;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.5);
        max-width: 800px; /* Set a max width for the form container */
        width: 100%;
        text-align: center;
        margin: 50px auto; /* Center the container */
        transition: transform 0.3s ease;
        backdrop-filter: blur(10px); /* Adds a futuristic glass effect */
    }

    .form-container:hover {
        transform: translateY(-5px);
    }

    h3 {
        font-size: 36px;
        margin-bottom: 20px;
        color: #f0f0f0; /* Title color */
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 3px;
        border-bottom: 2px solid #f0f0f0; /* Underline for title */
        padding-bottom: 10px;
    }

    .form-group {
        margin-bottom: 15px;
    }

    .form-control {
        padding: 10px; /* Add padding to the input fields */
        border-radius: 5px; /* Rounded corners for input fields */
        border: 1px solid #ccc; /* Light border color */
        background-color: #fff; /* White background for input fields */
    }

    /* Button Styling */
    .btn {
        display: inline-block;
        padding: 12px 25px;
        background-color: #0b8793; /* Consistent button color */
        color: #fff; /* Button text color */
        font-size: 16px;
        text-decoration: none;
        text-transform: uppercase;
        border-radius: 30px;
        transition: background-color 0.3s ease, box-shadow 0.3s ease;
        box-shadow: 0 4px 10px rgba(11, 135, 147, 0.5);
        margin: 10px 0; /* Adds spacing between buttons */
    }

    .btn:hover {
        background-color: #065d6c;
        box-shadow: 0 6px 15px rgba(6, 93, 108, 0.6);
    }

    /* Body Background */
    body {
        font-family: 'Arial', sans-serif;
        margin: 0;
        padding: 0;
        background-color: #1d1f27; /* Overall body background */
        color: #eaeaea; /* Default text color */
        display: flex;
        justify-content: center;
        align-items: flex-start;
        min-height: 100vh;
    }

    /* Responsive Design */
    @media only screen and (max-width: 768px) {
        h3 {
            font-size: 28px; /* Smaller title font size for mobile */
        }
        .form-container {
            padding: 20px; /* Smaller padding for mobile */
        }
        .form-control {
            font-size: 14px; /* Smaller input font size for mobile */
        }
    }
</style>
