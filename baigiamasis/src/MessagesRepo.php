<?php

namespace KCS;

class MessagesRepo
{
    private \PDO $conn;

    public function __construct()
    {
        $this->conn = (new DB())->getConnection();
    }

    public function insert(string $vardas, string $elpastas, string $zinute): void
    {
        $sql = "INSERT INTO messages (name, email, message) VALUES (:vardas, :el_pastas , :zinute)";

        $stmt = $this->conn->prepare($sql);

        $stmt->bindParam(':zinute', $zinute);
        $stmt->bindParam(':el_pastas', $elpastas);
        $stmt->bindParam(':vardas', $vardas);

        $stmt->execute();
    }

    public function lastInsertId()
    {
        return $this->conn->lastInsertId();
    }

//duomenu nuskaitymas
public function getAll()
    {
        $sql = "SELECT * FROM messages";

        $stmt = $this->conn->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function lastInsertId()
    {
        return $this->conn->lastInsertId();
    }

    public function delete($id): void
    {
        $sql = "DELETE FROM messages WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }

    public function update($id, $vardas, $elpastas, $msg): void
    {
        $sql = "UPDATE messages
                SET name=:vardas, email=:el_pastas, message=:zinute
                WHERE id=:id";

        $stmt = $this->conn->prepare($sql);

        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':zinute', $msg);
        $stmt->bindParam(':el_pastas', $elpastas);
        $stmt->bindParam(':vardas', $vardas);

        $stmt->execute();
}



}



 ?>
