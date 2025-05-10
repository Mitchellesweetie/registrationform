{{--<!DOCTYPE html>--}}
{{--<html>--}}
{{--<head>--}}
{{--    <meta charset="utf-8">--}}
{{--    <title>Invitation Letter</title>--}}
{{--    <style>--}}
{{--        body { font-family: DejaVu Sans, sans-serif; font-size: 12px; line-height: 1.6; color: #000; }--}}
{{--        .header { display: flex; align-items: center; justify-content: space-between; border-bottom: 1px solid #ccc; padding-bottom: 10px; margin-bottom: 20px; }--}}
{{--        .logo { height: 70px; }--}}
{{--        .contact-info { text-align: right; font-size: 11px; line-height: 1.4; }--}}
{{--        .signature { height: 60px; margin-top: 40px; }--}}
{{--    </style>--}}
{{--</head>--}}
{{--<body>--}}

{{-- HEADER SECTION --}}
{{--<div class="header">--}}
{{--    <div>--}}
{{--        --}}
{{--        https://jdl.co.ke/PSASBNBI/wp-content/uploads/2020/09/logo.jpg--}}
{{--        <img src="{{ public_path($settings->logo_path) }}" alt="Organization Logo" class="logo">--}}
{{--        <img src="data:image/png;base64,{{ $logoBase64 }}" alt="Logo" height="60">--}}
{{--        @if(file_exists(public_path($settings->logo_path)))--}}
{{--            <p>Logo exists ✅</p>--}}
{{--        @else--}}
{{--            <p>Logo missing ❌,{{$settings->logo_path}}</p>--}}
{{--            <img src="{{ asset($settings->logo_path) }}" alt="Logo" height="60">--}}

{{--        @endif--}}

{{--    </div>--}}
{{--    <div class="contact-info">--}}
{{--        <strong>{{ $settings->name }}</strong><br>--}}
{{--        {{ $settings->address }}<br>--}}
{{--        Email: info@psasb.go.ke | Phone: (+254) 020 251 1557<br>--}}
{{--        Website: www.psasb.go.ke--}}
{{--    </div>--}}
{{--</div>--}}




{{-- BODY CONTENT --}}
{{--<p>{{ $registration->salutation }} {{ $registration->name }},</p>--}}

{{--<p>We are pleased to confirm your registration for the event:</p>--}}

{{--<p><strong>{{ $event->name }}</strong><br>--}}
{{--    Date: {{ \Carbon\Carbon::parse($event->event_start_date)->format('F j, Y') }}<br>--}}
{{--    Venue: {{ $event->venue ?? 'To be communicated' }}--}}
{{--</p>--}}

{{--<p><strong>Institution:</strong> {{ $registration->institution_name }}<br>--}}
{{--    <strong>Accounting Officer:</strong> {{ $registration->accounting_officer }}</p>--}}

{{--<p>We look forward to your participation.</p>--}}

{{-- SIGNATURE SECTION --}}
{{--<p>Yours faithfully,</p>--}}

{{--<img class="signature" src="{{ public_path($ceo->signature_path) }}" alt="CEO Signature">--}}
{{--<img class="signature" src="data:image/png;base64,{{ $signatureBase64 }}" alt="CEO Signature" height="80">--}}
{{--<p><strong>{{ $ceo->name }}</strong><br>--}}
{{--   {{$ceo->title}}</p>--}}

{{--</body>--}}
{{--</html>--}}



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Invitation Letter</title>
    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
            font-size: 12px;
            line-height: 1.6;
            color: #000;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 2px solid #2D3382;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }
        .logo {
            height: 60px;
        }
        .contact-info {
            text-align: right;
            font-size: 11px;
        }
        .title {
            color: #2D3382;
            font-weight: bold;
            margin-top: 20px;
        }
        .section {
            margin-bottom: 15px;
        }
        ol {
            padding-left: 1.2rem;
        }
        .signature {
            height: 60px;
            margin-top: 40px;
        }
    </style>
</head>
<body>

{{-- Header --}}
<div class="header">
    {{-- @if($logoBase64)
        <img src="data:image/png;base64,{{ $logoBase64 }}" alt="Logo" class="logo">
    @endif --}}

</div>


<div class="section">
    Dear {{ $data['fistname'] }},

    We cordially invite you to attend our upcoming event, which promises to be a momentous occasion. Your presence would be a great honor to us.
    
   
    
    Please confirm your attendance by [RSVP Deadline].
    
    We look forward to welcoming you.
    
    Warm regards,
    CEO
    ICT Authority
</div>

{{-- Sign off --}}
<p>Yours faithfully,</p>

{{-- @if($signatureBase64)
    <img src="data:image/png;base64,{{ $signatureBase64 }}" alt="CEO Signature" class="signature">
@endif

<p><strong>{{ $ceo->name }}</strong><br>
    {{ $ceo->title }}</p> --}}

</body>
</html>
