<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        table {
            width: 100%;
            max-width: 600px;
            margin: 20px auto;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        td {
            background-color: white;
        }

        th {
            background-color: #4CAF50;
            color: white;
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
        }

        img {
            max-width: 100%;
            height: auto;
        }

        .contact-details {
            margin-top: 20px;
        }

        .contact-details p {
            margin: 5px 0;
        }
    </style>
</head>

<body>
    <table style="width: 100%;">
        <thead>
            <tr>
                <th colspan="2" style="text-align: center; padding: 10px; background-color: #cee4ff; color: white; border-top-left-radius: 15px; border-top-right-radius: 15px;">
                    <img style="width: 20%;" src="{{asset('assets/images/logo.svg')}}" alt="">
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="padding-top: 15px;"><b>Subject:</b></td>
                <td style="padding-top: 15px;">{{ $data['subject_en'] ?? $data['subject_ind'] }}</td>
            </tr>
            <tr>
                <td><b>Name:</b></td>
                <td>{{ $data['fname_en'] ?? $data['fname_ind'] }} {{ $data['lname_en'] ?? $data['lname_ind'] }}</td>
            </tr>
            <tr>
                <td><b>Email:</b></td>
                <td>{{ $data['email_en'] ?? $data['email_ind'] }}</td>
            </tr>
            <tr>
                <td style="display: flex;"><b>Message:</b></td>
                <td>{{ $data['comment_en'] ?? $data['comment_ind'] }}</td>
            </tr>
        </tbody>
    </table>
</body>

</html>