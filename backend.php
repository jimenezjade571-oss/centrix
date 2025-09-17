<?php
session_start();
include "dbcon.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $action = $_POST['action'];

    // ================= SIGNUP =================
    if ($action === "signup") {
        $fname   = trim($_POST['fname']);
        $email   = trim($_POST['email']);
        $snumber = trim($_POST['snumber']);
        $section = trim($_POST['section']);
        $pass    = $_POST['pass'];
        $confirm = $_POST['confirm'];

        // Check if passwords match
        if ($pass !== $confirm) {
            echo "<script>alert('Passwords do not match!'); window.history.back();</script>";
            exit();
        }

        // Check if student number or email exists
        $check = $conn->prepare("SELECT id FROM students WHERE snumber = ? OR email = ?");
        $check->bind_param("ss", $snumber, $email);
        $check->execute();
        $check->store_result();

        if ($check->num_rows > 0) {
            echo "<script>alert('Student Number or Email already exists!'); window.history.back();</script>";
            exit();
        }
        $check->close();

        // Hash password
        $hashed_pass = password_hash($pass, PASSWORD_DEFAULT);

        // Insert student
        $stmt = $conn->prepare("INSERT INTO students (fname, email, snumber, section, pass) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $fname, $email, $snumber, $section, $hashed_pass);

        if ($stmt->execute()) {
            echo "<script>alert('Account created successfully! Please log in.'); window.location='login.php';</script>";
        } else {
            echo "<script>alert('Error creating account!'); window.history.back();</script>";
        }

        $stmt->close();
    }

    // ================= LOGIN =================
    elseif ($action === "login") {
        $snumber = trim($_POST['snumber']);
        $pass    = $_POST['pass'];

        $stmt = $conn->prepare("SELECT id, fname, snumber, section, pass FROM students WHERE snumber = ?");
        $stmt->bind_param("s", $snumber);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            $row = $result->fetch_assoc();

            if (password_verify($pass, $row['pass'])) {
                // Set session variables
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['fname']   = $row['fname'];
                $_SESSION['snumber'] = $row['snumber'];
                $_SESSION['section'] = $row['section'];

                header("Location: dashboard.php");
                exit();
            } else {
                echo "<script>alert('Invalid password!'); window.history.back();</script>";
            }
        } else {
            echo "<script>alert('Student Number not found. Please sign up first.'); window.location='login.php';</script>";
        }

        $stmt->close();
    }
}

$conn->close();
?>

<script>
const studentData = {
    name: "<?php echo $_SESSION['fname']; ?>",
    snumber: "<?php echo $_SESSION['snumber']; ?>",
    section: "<?php echo $_SESSION['section']; ?>"
};
</script>
