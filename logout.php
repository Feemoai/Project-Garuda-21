<?php
    // Inisialisasi session
    session_start();
    
    // Hapus semua data session
    session_destroy();
    
    // Redirect ke halaman landing page
    header("Location: Landing_Page.html");
    exit;
?>
