<?php

    const IMDB_PATH = "../sqlite/imdb.db";

    class SQLiteConnection {
        private $db;

        public function connect() {
            if ($this->db == null) {
                $this->db = new PDO('sqlite:' . IMDB_PATH);
            }

            return $this->db;
        }
    }

?>
