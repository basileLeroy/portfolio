<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New contact message</title>
</head>

<body style="background-color: #080e18; margin: 0; padding: 20px; font-family: Arial, sans-serif; color: #1D71B8;">
    <table width="100%" cellpadding="0" cellspacing="0" border="0" align="center" style="max-width: 600px; margin: auto; background-color: #080e18;">
        <!-- Header -->
        <tr>
            <td style="text-align: center; padding: 20px 0;">
                <img src="{{ asset('storage/banner.png') }}" alt="Banner image for Basile Leroy" style="max-width: 100%; height: auto;">
            </td>
        </tr>

        <!-- Main Content -->
        <tr>
            <td style="background-color: #0c1525; border-radius: 10px; padding: 30px; color: #1D71B8; text-align: center;">
                <h1 style="color: #1D71B8; margin-bottom: 20px;">New contact message!</h1>
                <p style="color: #dadae0; line-height: 1.5;">From: {{ $data["name"] }}</p>
                <div style="border: 2px solid #1D71B8; padding: 20px; margin: 30px 0; text-align: left; color: #dadae0;">
                    <h2 style="color: #1D71B8; margin-bottom: 10px;">On [{{ $data["timestamp"] }}], you received:</h2>
                    <p style="line-height: 1.5;">{{ $data["message"] }}</p>
                </div>
            </td>
        </tr>

        <!-- Footer -->
        <tr>
            <td style="text-align: center; padding: 20px;">
                <div style="margin-bottom: 15px;">
                    <a href="https://www.linkedin.com/in/basile-leroy/" style="text-decoration: none;">
                        <img src="https://via.placeholder.com/40/15537C/ffffff?text=IN" alt="LinkedIn" style="margin-right: 15px;">
                    </a>
                    <a href="https://github.com/basileLeroy" style="text-decoration: none;">
                        <img src="https://via.placeholder.com/40/15537C/ffffff?text=GH" alt="GitHub">
                    </a>
                </div>
                <ul style="list-style: none; padding: 0; margin: 0; text-align: center;">
                    <li style="display: inline; margin: 0 10px;">
                        <a href="{{ route('about') }}" style="color: #dadae0; text-decoration: none;">Home</a>
                    </li>
                    <li style="display: inline; margin: 0 10px;">
                        <a href="{{ route('projects') }}" style="color: #dadae0; text-decoration: none;">Showcase</a>
                    </li>
                    <li style="display: inline; margin: 0 10px;">
                        <a href="{{ route('contact') }}" style="color: #dadae0; text-decoration: none;">Contact me</a>
                    </li>
                    <li style="display: inline; margin: 0 10px;">
                        <a href="{{ route('terms') }}" style="color: #dadae0; text-decoration: none;">Terms & Services</a>
                    </li>
                </ul>
            </td>
        </tr>
    </table>
</body>

</html>
