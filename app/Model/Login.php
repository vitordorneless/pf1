<?php
    class Login {
    public function Logar($user, $pass) {
        include_once '../config/database_mysql.php';
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT COUNT(1) AS contar FROM usuarios where status in (1) and login = ? AND senha = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($user, $pass));
        $data = $q->fetch(PDO::FETCH_ASSOC);
        $logando = $data['contar'] == 1 ? TRUE : FALSE;        
        session_start();
        $_SESSION['user'] = $user;        
        Database::disconnect();
        return $logando;
    }
}
