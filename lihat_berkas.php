<?php
if (isset($_GET['filename'])) {
    $filename = $_GET['filename'];

    // Pastikan Anda memvalidasi nama file untuk keamanan
    
        // Lakukan penanganan sesuai kebutuhan, misalnya, mengirimkan file untuk diunduh
        $fileDir = 'siswa/FileBerkas/'; // Ganti dengan lokasi penyimpanan file .rar
        $filePath = $fileDir . $filename;

        if (file_exists($filePath)) {
            // Atur header untuk mengaktifkan unduhan
            header('Content-Type: application/x-rar-compressed'); // Tipe MIME untuk file .rar
            header('Content-Disposition: attachment; filename="' . $filename . '"');
            header('Content-Length: ' . filesize($filePath));

            // Baca dan kirim file
            readfile($filePath);
        } else {
            echo "File tidak ditemukan.";
        } 
} else {
    echo "File tidak ditemukan.";
}
?>
