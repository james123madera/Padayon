<div class="product-detail-container">
    <h3>Product Details</h3>
    <div class="d-flex align-items-center justify-content-center">
        <div class="col col-md-6">
            <form action="" method="post">
                <div class="form-group mb-2">
                    <label for="barcode" class="form-label">Barcode</label>
                    <input type="text" name="barcode" id="barcode" class="form-control" value="<?= $products['barcode']; ?>" readonly>
                </div>
                
                <div class="form-group mb-2">
                    <label for="productname" class="form-label">Product Name</label>
                    <input type="text" name="productname" id="productname" class="form-control" value="<?= $products['productname']; ?>" readonly>
                </div>

                <div class="form-group mb-2">
                    <label for="description" class="form-label">Description</label>
                    <input type="text" name="description" id="description" class="form-control" value="<?= $products['description']; ?>" readonly>
                </div>

                <div class="form-group mb-2">
                    <label for="unit" class="form-label">Unit</label>
                    <input type="text" name="unit" id="unit" class="form-control" value="<?= $products['unit']; ?>" readonly>
                </div>

                <div class="form-group mb-2">
                    <label for="purchaseprice" class="form-label">Purchase Price</label>
                    <input type="text" name="purchaseprice" id="purchaseprice" class="form-control" value="<?= $products['purchaseprice']; ?>" readonly>
                </div>

                <div class="form-group mb-2">
                    <label for="sellingprice" class="form-label">Selling Price</label>
                    <input type="text" name="sellingprice" id="sellingprice" class="form-control" value="<?= $products['sellingprice']; ?>" readonly>
                </div>

                <div class="form-group mb-2">
                    <label for="wholesaleprice" class="form-label">Wholesale Price</label>
                    <input type="text" name="wholesaleprice" id="wholesaleprice" class="form-control" value="<?= $products['wholesaleprice']; ?>" readonly>
                </div>

                <div class="form-group mb-2">
                    <label for="deliverydate" class="form-label">Delivery Date</label>
                    <input type="date" name="deliverydate" id="deliverydate" class="form-control" value="<?= $products['deliverydate']; ?>" readonly>
                </div>

                <div class="form-group mb-2">
                    <label for="supplier" class="form-label">Supplier</label>
                    <input type="text" name="supplier" id="supplier" class="form-control" value="<?= $products['supplier']; ?>" readonly>
                </div>

                <div class="form-group">
                    <a href="<?= base_url('products'); ?>" class="btn btn-danger">Back</a>
                </div>
            </form>
        </div>
    </div>
</div>

<style>
    .product-detail-container {
        background: rgba(255, 255, 255, 0.05);
        border-radius: 15px;
        padding: 30px;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.5);
        max-width: 800px; /* Set a max width for the container */
        width: 100%;
        text-align: center;
        margin: 50px auto; /* Center the container */
        transition: transform 0.3s ease;
        backdrop-filter: blur(10px); /* Adds a futuristic glass effect */
    }

    .product-detail-container:hover {
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
        color: #666; /* Gray text color for readonly inputs */
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
        .product-detail-container {
            padding: 20px; /* Smaller padding for mobile */
        }
        .form-control {
            font-size: 14px; /* Smaller input font size for mobile */
        }
    }
</style>
