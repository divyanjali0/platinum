<?php
    header('Content-Type: application/json');

    // Check if file is uploaded
    if (!isset($_FILES['invoice']) || $_FILES['invoice']['error'] !== UPLOAD_ERR_OK) {
        echo json_encode(['status' => 'error', 'message' => 'No invoice file uploaded']);
        exit;
    }

    $booking_number = isset($_POST['booking_number']) ? trim($_POST['booking_number']) : uniqid('BOOK_');

    $project_root = realpath(__DIR__ . '/../../..');

    $target_dir = $project_root . '/uploads/invoices/';
    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0777, true);
    }

    // Build file name and destination
    $ext = pathinfo($_FILES['invoice']['name'], PATHINFO_EXTENSION);
    $invoice_filename = 'invoice_' . $booking_number . '.' . $ext;
    $target_file = $target_dir . $invoice_filename;

    error_log('Upload target: ' . $target_file);

    if (move_uploaded_file($_FILES['invoice']['tmp_name'], $target_file)) {

        // ✅ Build the public URL (for DB reference)
        $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off'
                    || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
        $domain = $_SERVER['HTTP_HOST'];
        $invoice_url = $protocol . $domain . '/platinum/uploads/invoices/' . $invoice_filename;

        echo json_encode([
            'status' => 'success',
            'file' => $invoice_url
        ]);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Failed to move uploaded file']);
    }
?>
