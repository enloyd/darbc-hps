<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Add your other meta tags, stylesheets, and scripts here -->
    <style>

        body {
           background-color: #e0e4e5; /* Set your desired background color */
            /*background-image: url('../img/background.jpg');  Set the path to your background image */
            background-size: cover; /* Cover the entire background */
            background-position: center; /* Center the background image */
            font-family: Arial, sans-serif; /* Choose a suitable font family */
        }


        .logo-container {
            margin-top: 15%; /* Adjust the margin-top value to center the logo vertically */
            text-align: center; /* Center align the content within the logo-container */
        }

        .logo {
            max-width: 70%; /* Make sure the logo doesn't exceed 70% of the width of its container */
            height: auto; /* Maintain the aspect ratio of the logo */
        }

        .page-header {
            margin-top: 20px; /* Adjust the margin-top value to give space between logo and heading */
            display: flex;
            justify-content: space-between; /* Align items to the left and right */
            align-items: center; /* Center items vertically */
            padding: 0 20px;
        }

        .dashboard-header {
            font-size: 34px; /* Set a larger font size for the Dashboard header */
        }

        .time-date-container {
            text-align: center; /* Center align the time and date trackers */
        }

        .time-tracker,
        .date-tracker {
            font-size: 30px; /* Set the font size for time tracker and date tracker */
        }

        .date-tracker {
            font-size: 20px; /* Set a slightly smaller font size for the date tracker */
            margin-left: 5px; /* Add a small margin between date and time trackers */
        }

        .time-tracker{
            margin-top: 15px;
        }
    </style>
</head>
<body>

    <div class="row">
        <div class="col-lg-12">
            <div class="page-header">
                <div class="dashboard-header">Dashboard</div>
                <div class="time-date-container">
                    <div class="time-tracker" id="timeTracker"></div>
                    <div class="date-tracker" id="dateTracker"></div>
                </div>
            </div>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <div class="logo-container" style="position: relative;">
    <img src="\darbchps\img\darbc_logo.png" alt="Darbc" class="logo" style="max-width: 100%; height: auto; border-radius: 5px; animation: spin 5s linear infinite alternate;">

</div>

<style>
    @keyframes spin {
        0% { transform: rotateY(0deg); }
        100% { transform: rotateY(360deg); }
    }
</style>

    <!-- Your existing content goes here -->

    <!-- Add your scripts or other HTML elements as needed -->

    <script>
        // Update the time and date every second
        function updateDateTime() {
            const now = new Date();
            const hours = (now.getHours() % 12 || 12).toString().padStart(2, '0'); // Convert to 12-hour format
            const minutes = now.getMinutes().toString().padStart(2, '0');
            const seconds = now.getSeconds().toString().padStart(2, '0');
            const ampm = now.getHours() >= 12 ? 'PM' : 'AM';
            const timeString = `${hours}:${minutes}:${seconds} ${ampm}`;
            
            const dateOptions = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
            const dateString = now.toLocaleDateString('en-US', dateOptions);

            document.getElementById('timeTracker').innerText = timeString;
            document.getElementById('dateTracker').innerText = dateString;
        }

        setInterval(updateDateTime, 1000);
        updateDateTime(); // Initial call to display the time and date immediately
    </script>
</body>
</html>
