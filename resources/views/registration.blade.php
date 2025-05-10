<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    {{-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Registration Form</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: #f7f8fc;
            color: #333;
            line-height: 1.6;
            padding: 20px;
        }
        
        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            padding: 30px;
        }
        
        h1 {
            text-align: center;
            color: #4f46e5;
            margin-bottom: 30px;
            font-weight: 700;
        }
        
        .form-section {
            margin-bottom: 20px;
            border: 1px solid #e5e7eb;
            border-radius: 8px;
            overflow: hidden;
        }
        
        .section-header {
            background-color: #f3f4f6;
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        
        .section-header:hover {
            background-color: #eef2ff;
        }
        
        .section-header.active {
            background-color: #eef2ff;
        }
        
        .section-title {
            display: flex;
            align-items: center;
            font-size: 18px;
            font-weight: 600;
        }
        
        .section-icon {
            background-color: #e0e7ff;
            width: 36px;
            height: 36px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
        }
        
        .section-icon svg {
            width: 20px;
            height: 20px;
            fill: #4f46e5;
        }
        
        .chevron {
            width: 20px;
            height: 20px;
            transition: transform 0.3s ease;
        }
        
        .section-header.active .chevron {
            transform: rotate(90deg);
        }
        
        .section-content {
            padding: 20px;
            border-top: 1px solid #e5e7eb;
            display: none;
        }
        
        .section-content.active {
            display: block;
        }
        
        .form-row {
            display: flex;
            flex-wrap: wrap;
            margin: 0 -10px;
            margin-bottom: 15px;
        }
        
        .form-group {
            flex: 1 1 calc(50% - 20px);
            margin: 0 10px 15px;
            min-width: 250px;
        }
        
        .form-group.full-width {
            flex: 1 1 calc(100% - 20px);
        }
        
        label {
            display: block;
            margin-bottom: 5px;
            font-size: 14px;
            font-weight: 500;
            color: #4b5563;
        }
        
        input, select {
            width: 100%;
            padding: 10px 15px;
            border: 1px solid #d1d5db;
            border-radius: 6px;
            font-size: 15px;
            transition: border-color 0.3s, box-shadow 0.3s;
        }
        
        input:focus, select:focus {
            outline: none;
            border-color: #4f46e5;
            box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.2);
        }
        
        input::placeholder {
            color: #9ca3af;
        }
        
        .submit-button {
            display: flex;
            justify-content: center;
            margin-top: 30px;
        }
        
        button {
            background-color: #4f46e5;
            color: white;
            border: none;
            border-radius: 8px;
            padding: 12px 30px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s;
            display: flex;
            align-items: center;
            box-shadow: 0 4px 6px rgba(79, 70, 229, 0.2);
        }
        
        button:hover {
            background-color: #4338ca;
        }
        
        button svg {
            width: 18px;
            height: 18px;
            margin-right: 8px;
        }
        
        @media (max-width: 768px) {
            .container {
                padding: 20px;
            }
            
            .form-group {
                flex: 1 1 calc(100% - 20px);
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Registration Form</h1>
        
        <form id="registrationForm" method="POST" action="{{ route ('authregistration')}}">
            @csrf
            <div class="form-section">
                <div class="section-header active" onclick="toggleSection(this)">
                    <div class="section-title">
                        <div class="section-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"></path>
                            </svg>
                        </div>
                        <span>Personal Details</span>
                    </div>
                    <svg class="chevron" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6-6-6z"></path>
                    </svg>
                </div>
                <div class="section-content active">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="firstName">First Name</label>
                            <input type="text" id="firstName" placeholder="John" required name="fistname">
                        </div>
                        <div class="form-group">
                            <label for="lastName">Other Names</label>
                            <input type="text" id="lastName" placeholder="Doe" required name="othernames">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" id="email" placeholder="name@example.com" name="email" required >
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="number" id="phone" placeholder="0712345678" name="phonenumber" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group full-width">
                            <label for="address">Country</label>
                            {{-- <input type="text" id="address" placeholder="123 Main St, City, State, Zip" required> --}}
                            <select id="country" name="country" required>
                                <option value="" disabled selected>Select Country</option>
                                <option value="technology">Kenya</option>
                                <option value="finance">Uganda</option>
                                <option value="healthcare">Ethopia</option>
                                <option value="education">Somali</option>
                            </select>
                        </div>

                    </div>
                </div>
            </div>
            
            <!-- Company Details Section -->
            <div class="form-section">
                <div class="section-header" onclick="toggleSection(this)">
                    <div class="section-title">
                        <div class="section-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M12 7V3H2v18h20V7H12zM6 19H4v-2h2v2zm0-4H4v-2h2v2zm0-4H4V9h2v2zm0-4H4V5h2v2zm4 12H8v-2h2v2zm0-4H8v-2h2v2zm0-4H8V9h2v2zm0-4H8V5h2v2zm10 12h-8v-2h2v-2h-2v-2h2v-2h-2V9h8v10zm-2-8h-2v2h2v-2zm0 4h-2v2h2v-2z"></path>
                            </svg>
                        </div>
                        <span>Company Details</span>
                    </div>
                    <svg class="chevron" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6-6-6z"></path>
                    </svg>
                </div>
                <div class="section-content">
                    <div class="form-row">
                        <div class="form-group full-width">
                            <label for="companyName">Company Name</label>
                            <input type="text" id="companyName" placeholder="Acme Corporation" name="companyname" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="industry">Industry</label>
                            <select id="industry" name="industry" required>
                                <option value="" disabled selected>Select Industry</option>
                                <option value="technology">Technology</option>
                                <option value="finance">Finance</option>
                                <option value="healthcare">Healthcare</option>
                                <option value="education">Education</option>
                                {{-- <option value="other">Other</option> --}}
                            </select>
                        </div>
                        {{-- <div class="form-group">
                            <label for="companySize">Company Size</label>
                            <select id="companySize" required>
                                <option value="" disabled selected>Select Size</option>
                                <option value="1-10">1-10 employees</option>
                                <option value="11-50">11-50 employees</option>
                                <option value="51-200">51-200 employees</option>
                                <option value="201-500">201-500 employees</option>
                                <option value="500+">500+ employees</option>
                            </select>
                        </div> --}}
                    </div>
                    <div class="form-row">
                        <div class="form-group full-width">
                            <label for="companyAddress">Designation</label>
                            <input type="text" id="companyAddress" placeholder="Accountant"  name="designation"required>
                        </div>
                    </div>
                    <div class="form-row">
                        {{-- <div class="form-group">
                            <label for="taxId">Tax ID / EIN</label>
                            <input type="text" id="taxId" placeholder="XX-XXXXXXX" required>
                        </div> --}}
                        <div class="form-group">
                            <label for="website">Website</label>
                            <input type="url" id="website" placeholder="https://www.example.com" name="website">
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Bank Details Section -->
            <div class="form-section">
                <div class="section-header" onclick="toggleSection(this)">
                    <div class="section-title">
                        <div class="section-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M20 4H4c-1.11 0-1.99.89-1.99 2L2 18c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V6c0-1.11-.89-2-2-2zm0 14H4v-6h16v6zm0-10H4V6h16v2z"></path>
                            </svg>
                        </div>
                        <span>Bank Details</span>
                    </div>
                    <svg class="chevron" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6-6-6z"></path>
                    </svg>
                </div>
                <div class="section-content">
                    <div class="form-row">
                        <div class="form-group full-width">
                            <label for="bankName">Bank Name</label>
                            <input type="text" id="bankName" placeholder="International Bank" name="bankname" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="accountHolder">Account Holder Name</label>
                            <input type="text" id="accountHolder" placeholder="John Doe " name="accountholdername" required>
                        </div>
                        {{-- <div class="form-group">
                            <label for="accountType">Account Type</label>
                            <select id="accountType" required>
                                <option value="" disabled selected>Select Account Type</option>
                                <option value="checking">Checking</option>
                                <option value="savings">Savings</option>
                                <option value="business">Business</option>
                            </select>
                        </div> --}}
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="accountNumber">Account Number</label>
                            <input type="number" id="accountNumber" placeholder="XXXXXXXX" name="accountnumber" required>
                        </div>
                        {{-- <div class="form-group">
                            <label for="routingNumber">Routing Number</label>
                            <input type="text" id="routingNumber" placeholder="XXXXXXXXX" required>
                        </div> --}}
                    </div>
                    <div class="form-row">
                        <div class="form-group full-width">
                            <label for="branchAddress">Bank Branch</label>
                            <input type="text" id="branchAddress"  name="branchaddress" required>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Submit Button -->
            <div class="submit-button">
                <button type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white">
                        <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41L9 16.17z"></path>
                    </svg>
                    Submit Registration
                </button>
            </div>
        </form>
    </div>

    <script>
        function toggleSection(element) {
            // Toggle active class for the header
            element.classList.toggle('active');
            
            // Find the next sibling (section content) and toggle its visibility
            const content = element.nextElementSibling;
            content.classList.toggle('active');
        }
        
        // document.getElementById('registrationForm').addEventListener('submit', function(e) {
        //     e.preventDefault();
        //     // Form submission logic would go here
        //     alert('Form submitted successfully!');
        // });
    </script>
        
<!-- Include jQuery and SweetAlert2 if not already loaded -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
$(document).ready(function () {
    $('#registrationForm').on('submit', function (e) {
        e.preventDefault(); // Prevent the default form submission

        let form = $(this);
        let formData = new FormData(this);

        $.ajax({
            type: "POST",
            url: form.attr('action'),
            data: formData,
            contentType: false,
            processData: false,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // CSRF protection
            },
            success: function (response) {
                console.log("AJAX Success:", response);
                if (response.success) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Success',
                        text: response.message,
                        confirmButtonColor: '#3085d6'
                    }).then(() => {
                        form[0].reset(); // Reset form on success
                    });
                }
            },
            error: function (xhr) {
                console.error("Validation Error:", xhr.responseJSON);
                if (xhr.status === 422) {
                    let errors = xhr.responseJSON.errors;
                    let errorMessages = Object.values(errors).map(msg => msg[0]).join('\n');

                    Swal.fire({
                        icon: 'error',
                        title: 'Validation Error',
                        text: errorMessages,
                        confirmButtonColor: '#d33'
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Server Error',
                        text: 'Something went wrong. Please try again later.',
                        confirmButtonColor: '#d33'
                    });
                }
            }
        });
    });
});
</script>



</body>
</html>