<div class="welcome-container">
    <h1>Welcome, Rudini</h1>

    <a href="<?= base_url('index/about'); ?>" class="btn">About Me</a>
    <a href="<?= base_url('users'); ?>" class="btn">List of Users</a>
    <a href="<?= base_url('products'); ?>" class="btn">List of Products</a>
</div>

<style>
    .welcome-container {
        background: rgba(255, 255, 255, 0.05);
        border-radius: 15px;
        padding: 30px;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.5);
        max-width: 600px;
        width: 100%;
        text-align: center;
        margin: 50px auto;
        transition: transform 0.3s ease;
        backdrop-filter: blur(10px);
    }

    .welcome-container:hover {
        transform: translateY(-5px);
    }

    h1 {
        font-size: 36px;
        margin-bottom: 30px;
        color: #f0f0f0;
        font-weight: 700;
        letter-spacing: 3px;
    }

    /* Button Styling */
    .btn {
        display: inline-block;
        padding: 12px 25px;
        background-color: #0b8793;
        color: #fff;
        font-size: 16px;
        text-decoration: none;
        text-transform: uppercase;
        border-radius: 30px;
        margin: 10px;
        transition: background-color 0.3s ease, box-shadow 0.3s ease;
        box-shadow: 0 4px 10px rgba(11, 135, 147, 0.5);
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
        background-color: #1d1f27;
        color: #eaeaea;
        display: flex;
        justify-content: center;
        align-items: flex-start;
        min-height: 100vh;
    }

    @media only screen and (max-width: 768px) {
        h1 {
            font-size: 28px;
        }

        .btn {
            font-size: 14px;
            padding: 10px 20px;
        }

        .welcome-container {
            padding: 20px;
        }
    }
</style>
