<?php

class UnitOfWork {

	private $db;

	function preventInjection($input) {
		$input = str_replace('\'', '', $input);
		$input = str_replace('`', '', $input);
		return $input;
	}

	function __construct() {
		$this->db = new MyDB();
		if(!$this->db)
			throw new Exception($this->db->lastErrorMsg());
		return $this->db;
	}

	function __destruct() {
		$this->db->close();
	}

<<<<<<< HEAD
=======
	function init() {
		  $sql =<<<EOF
			CREATE TABLE CONTENTS
			(ID INTEGER PRIMARY KEY AUTOINCREMENT,
			TITLE           TEXT    NOT NULL,
			DATE            TEXT    NOT NULL,
			BODY        	TEXT	);
		EOF;

		$ret = $this->db->exec($sql);
		if(!$ret)
			throw new Exception($this->db->lastErrorMsg());
	}

>>>>>>> 2410a16 (first commit)
	function selectAllContents() {
		 $sql =<<<EOF
			SELECT * FROM CONTENTS ORDER BY `DATE` DESC;
		EOF;

		$output = [];

		$ret = $this->db->query($sql);
		while($row = $ret->fetchArray(SQLITE3_ASSOC))
			array_push($output, $row);

		return $output;
	}

	function selectContentById($id) {
		$id = $this->preventInjection($id);

		$sql =<<<EOF
			SELECT * FROM CONTENTS WHERE `ID`=$id;
		EOF;

		$ret = $this->db->query($sql);
		return $ret->fetchArray(SQLITE3_ASSOC);

		return $output;
	}

	function insertContent($inputs) {
		foreach ($inputs as $key=>$value)
			$this->preventInjection($value);

		$title = $this->preventInjection($inputs['TITLE']);
		$body = $this->preventInjection($inputs['BODY']);
		$date = $this->preventInjection($inputs['DATE']);

		$sql =<<<EOF
			INSERT INTO CONTENTS (TITLE,DATE,BODY)
			VALUES ('$title', '$date', '$body');
		EOF;

		$ret = $this->db->exec($sql);
		if(!$ret)
			throw new Exception($this->db->lastErrorMsg());
	}

	function updateContentById($inputs) {

		$id = $this->preventInjection($inputs['ID']);
		$title = $this->preventInjection($inputs['TITLE']);
		$body = $this->preventInjection($inputs['BODY']);
		$date = $this->preventInjection($inputs['DATE']);

		$sql =<<<EOF
			UPDATE CONTENTS SET `TITLE`='$title', `DATE`='$date', `BODY`='$body'
			WHERE `ID`=$id
		EOF;

		$ret = $this->db->exec($sql);
		if(!$ret)
			throw new Exception($this->db->lastErrorMsg());
	}

	function deleteContentById($id) {
		$id = $this->preventInjection($id);

		$sql =<<<EOF
			DELETE FROM CONTENTS WHERE `ID`=$id
		EOF;

		$ret = $this->db->exec($sql);
		if(!$ret)
			throw new Exception($this->db->lastErrorMsg());
	}
}

?>