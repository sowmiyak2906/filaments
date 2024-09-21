<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <style>
        .sidebar {
            min-height: 100vh;
            background-color: #343a40;
            padding-top: 20px;
        }
        .sidebar a {
            color: white;
            text-decoration: none;
            display: block;
            padding: 10px;
        }
        .sidebar a:hover {
            background-color: #495057;
        }
        .content {
            padding: 20px;
        }
        .form-container {
            display: none;
        }

       

    .form-container {
        max-width: 600px;
        margin: 0 auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    }

    h2 {
        text-align: center;
        
        color: #333;
        font-size: 28px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
       
        display: block;
        margin-bottom: 8px;
        color: #555;
    }

    .form-group input,
    .form-group select,
    .form-group textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 16px;
        box-shadow: inset 0px 1px 3px rgba(0, 0, 0, 0.1);
        transition: border-color 0.3s ease;
    }

    .form-group input:focus,
    .form-group select:focus,
    .form-group textarea:focus {
        border-color: #007bff;
    }

    .form-group textarea {
        resize: vertical;
        height: 120px;
    }

    .radio-group {
        display: flex;
        gap: 20px;
        align-items: center;
    }

    .radio-group input[type="radio"] {
        margin-right: 8px;
    }

    .btn-submit {
        display: block;
       
        padding: 12px;
        background-color: #007bff;
        color: #fff;
        font-size: 18px;
        font-weight: bold;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .btn-submit:hover {
        background-color: #0056b3;
    }
    </style>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-md-2 sidebar">
   
    <a href="#" onclick="showForm('contact-form')">
        <i class="fas fa-envelope"></i> Contact
    </a>
    <a href="#" onclick="showForm('enquiry-form')">
        <i class="fas fa-question-circle"></i> Enquiry
    </a>
    
</div>


        <!-- Main Content -->
        <div class="col-md-9 content">
            <!-- Contact Form -->
            <div id="contact-form" class="form-container">
                <h2>Contact Form</h2>
                <form action="/submit-contact" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message" name="message" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>

        <div id="enquiry-form" class="form-container">
    <h2>Enquiry Form</h2>
    <form action="/submit-enquiry" method="POST">
        @csrf
        <!-- Name Field -->
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" required>
        </div>

        <!-- Email Field -->
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
        </div>

        <!-- Phone Number Field -->
        <div class="form-group">
            <label for="phone">Phone Number</label>
            <input type="tel" id="phone" name="phone" required>
        </div>

        <!-- Enquiry Type Dropdown -->
        <div class="form-group">
            <label for="enquiry-type">Enquiry Type</label>
            <select id="enquiry-type" name="enquiry_type" required>
                <option value="" disabled selected>Select an option</option>
                <option value="product_inquiry">Product Inquiry</option>
                <option value="service_request">Service Request</option>
                <option value="pricing_question">Pricing Question</option>
                <option value="technical_support">Technical Support</option>
                <option value="general_query">General Query</option>
            </select>
        </div>

        <!-- Enquiry Field (Textarea) -->
        <div class="form-group">
            <label for="enquiry">Enquiry</label>
            <textarea id="enquiry" name="enquiry" required></textarea>
        </div>

       

        <!-- Submit Button -->
        <button type="submit" class="btn-submit">Submit</button>
    </form>
</div>



          
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

<!-- JavaScript to Toggle Forms -->
<script>
    function showForm(formId) {
        const forms = document.querySelectorAll('.form-container');
        forms.forEach(form => form.style.display = 'none');
        document.getElementById(formId).style.display = 'block';
    }

    // Show contact form by default
    document.addEventListener('DOMContentLoaded', function() {
        showForm('contact-form');
    });
</script>
</body>
</html>
