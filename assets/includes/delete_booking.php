<?php
    session_start();
    require_once __DIR__ . '/db_connect.php';

    // Only admin can delete
    if (!isset($_SESSION['user_role']) || $_SESSION['user_role'] !== 'admin') {
        echo json_encode(["success" => false, "message" => "Unauthorized"]);
        exit;
    }

    if (!isset($_POST['id'])) {
        echo json_encode(["success" => false, "message" => "Invalid request"]);
        exit;
    }

    $bookingId = intval($_POST['id']);

    try {
        $stmt = $conn->prepare("DELETE FROM bookings WHERE id = ?");
        $stmt->execute([$bookingId]);

        echo json_encode(["success" => true]);
    } catch (PDOException $e) {
        echo json_encode(["success" => false, "message" => $e->getMessage()]);
    }
?>
