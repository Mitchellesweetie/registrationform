<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <h1>Registration Details</h1>
    
        <!-- Personal Details -->
        <div class="form-section">
            <div class="section-header active">
                <div class="section-title">
                    {{-- <div class="section-icon">
                        👤
                    </div> --}}
                    <span>Personal Details</span>
                </div>
            </div>
            <div class="section-content active">
                <p><strong>First Name:</strong> {{ $data['fistname'] }}</p>
                <p><strong>Other Names:</strong> {{ $data['othernames'] }}</p>
                <p><strong>Email:</strong> {{ $data['email'] }}</p>
                <p><strong>Phone Number:</strong> {{ $data['phonenumber'] }}</p>
                <p><strong>Country:</strong> {{ $data['country'] }}</p>
            </div>
        </div>
    
        <!-- Company Details -->
        <div class="form-section">
            <div class="section-header active">
                <div class="section-title">
                    {{-- <div class="section-icon">
                        🏢
                    </div> --}}
                    <span>Company Details</span>
                </div>
            </div>
            <div class="section-content active">
                <p><strong>Company Name:</strong> {{ $data['companyname'] }}</p>
                <p><strong>Industry:</strong> {{ $data['industry'] }}</p>
                <p><strong>Designation:</strong> {{ $data['designation'] }}</p>
                <p><strong>Website:</strong> <a href="{{ $data['website'] }}" target="_blank">{{ $data['website'] }}</a></p>
            </div>
        </div>
    
        <!-- Bank Details -->
        <div class="form-section">
            <div class="section-header active">
                <div class="section-title">
                    {{-- <div class="section-icon">
                        🏦
                    </div> --}}
                    <span>Bank Details</span>
                </div>
            </div>
            <div class="section-content active">
                <p><strong>Bank Name:</strong> {{ $data['bankname'] }}</p>
                <p><strong>Account Holder:</strong> {{ $data['accountholdername'] }}</p>
                <p><strong>Account Number:</strong> {{ $data['accountnumber'] }}</p>
                <p><strong>Branch Address:</strong> {{ $data['branchaddress'] }}</p>
            </div>
        </div>
    </div>

  


</body>
</html>