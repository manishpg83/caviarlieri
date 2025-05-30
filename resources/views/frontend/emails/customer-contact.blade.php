<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Contact Request</title>
</head>

<body style="font-family: Helvetica, Arial, sans-serif; font-size: 14px; color: #222; margin: 0; padding: 20px; background-color: #fff; line-height: 1.6;">
    <div class="container" style="max-width: 800px; margin: 0 auto; padding: 15px;">

        <div style="text-align: center; margin-bottom: 30px;">
            <img src="{{ asset('admin/assets/img/caviarlieri-logo.png') }}"
                alt="Caviarlieri Logo" style="display: block; margin: 0 auto; max-width: 200px; width: 80%;">
        </div>

        <div class="header" style="text-align: left; font-size: 14px; line-height: 1.5;color: #666;">
  
            <!-- Greeting -->
            <p style="margin-bottom: 20px;">Dear Administrator,</p>
            <p style="margin-bottom: 20px;">You have received a new contact request. Below are the details:</p>
        </div>

        <!-- Contact Details -->
        <table style="width: 100%; border-collapse: collapse;">
            <tr>
                <td style="padding: 8px; font-weight: bold; width: 150px;">Name:</td>
                <td style="padding: 8px;">{{ $name }}</td>
            </tr>
            <tr>
                <td style="padding: 8px; font-weight: bold; width: 150px;">Phone:</td>
                <td style="padding: 8px;">{{ $phone }}</td>
            </tr>
            <tr>
                <td style="padding: 8px; font-weight: bold;">Email:</td>
                <td style="padding: 8px;"><a href="mailto:{{ $email }}" style="color: #0066cc;">{{ $email }}</a></td>
            </tr>
            <tr>
                <td style="padding: 8px; font-weight: bold; vertical-align: top;">Message:</td>
                <td style="padding: 8px; white-space: pre-wrap;">{{ $userMessage }}</td>
            </tr>
        </table>

        <div class="signature" style="margin-top: 30px; font-weight: bold;">
            Yours sincerely,<br>
            SwissCaviarlieri Team
        </div>

        <div style="margin-top: 30px; text-align: center; width: 100%;">
            <img src="{{ asset('frontend/images/email_banner.jpeg') }}" alt="SwissCaviarlieri Banner"
                style="max-width: 100%; width: 100%; height: auto; display: block;">
        </div>
    </div>
</body>
</html>

