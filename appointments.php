<!DOCTYPE html>
<html>
    <head>
        <meta charset=UTF-8>
        <title>Book Appointment - FamilyCare Medical Center</title>
    </head>
    <body>
        <header>
            <?php include "header.html"; ?>
        </header>
        <main>
            <h3 style='color: dodgerblue; text-align: center;'>Book an Appointment</h3>

            <div style='width: 350px; margin: 0 auto;'>
                <form action="appointments.php" method="post">
                    <p>Full Name:<br/><input type='text' style='width: 100%;' name="fullName"/></p>
                    <p>Phone Number:<br/><input type='tel' style='width: 100%;' name="telNo"/></p>
                    <p>Email Address:<br/><input type='email' style='width: 100%;' name="email"/></p>
                    <p>Preferred Date:<br/><input type='date' style='width: 100%;' name="date"/></p>
                    <p>Preferred Time:<br/><input type='time' style='width: 100%;' name="time"/></p>

                    <label for='service'>Service Needed:</label><br/>
                    <select id='service' name='service' style='width: 100%;'>
                        <option value='select service'>-- Select Service --</option>
                        <option value='consult'>General Consultation</option>
                        <option value='ecg'>ECG</option>
                        <option value='lab'>Lab Testing</option>
                        <option value='call'>Call a Doctor</option>
                        <option value='care'>Elderly Care</option>
                        <option value='clinic'>Family Clinic (5-9 PM)</option>
                    </select>

                    <p>Additional Message (optional):<br/><textarea rows='10' style='width: 100%;' name="msg"></textarea></p>
                    <p><input type='submit' style='width: 200px; display: block; margin: 0 auto;'/></p>
                </form>
            </div>

            <?php
                $fullName = $_POST["fullName"];
                $telNo = $_POST["telNo"];
                $email = $_POST["email"];
                $date = $_POST["date"];
                $time = $_POST["time"];
                $service = $_POST["service"];
                $msg = $_POST["msg"];

            ?>
            <br><br>
            <?= $fullName ?>
            <br>
            <?= $telNo ?>
            <br>
            <?= $email ?>
            <br>
            <?= $date ?>
            <br>
            <?= $time ?>
            <br>
            <?= $service ?>
            <br>
            <?= $msg ?>
            <br>
        </main>
        <footer>
            <?php include "footer.html"; ?>
        </footer>
    </body>
</html>
