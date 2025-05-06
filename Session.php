<?php
class Session {
    public $sessionId;
    public $userId;
    public $role;

    public function __construct($sessionId, $userId, $role) {
        $this->sessionId = $sessionId;
        $this->userId = $userId;
        $this->role = $role;
    }

    public static function createSession($userId, $role) {
        return new Session(uniqid(), $userId, $role);
    }
}
?>
