<?php

class UnitOfWork
{

	private $db;

	function preventInjection($input)
	{
		$input = str_replace('\'', '', $input);
		$input = str_replace('`', '', $input);
		return $input;
	}

	function __construct()
	{
		$this->db = new MyDB();
		if (!$this->db)
			throw new Exception($this->db->lastErrorMsg());
		return $this->db;
	}

	function __destruct()
	{
		$this->db->close();
	}

	function selectAllTransactions()
	{
		$sql = <<<EOF
			SELECT * FROM TRANSACTIONS ORDER BY `DATE` DESC;
		EOF;

		$output = [];

		$ret = $this->db->query($sql);
		while ($row = $ret->fetchArray(SQLITE3_ASSOC))
			array_push($output, $row);

		return $output;
	}

	function selectTransactionById($id)
	{
		$id = $this->preventInjection($id);

		$sql = <<<EOF
			SELECT * FROM TRANSACTIONS WHERE `ID`=$id;
		EOF;

		$ret = $this->db->query($sql);
		return $ret->fetchArray(SQLITE3_ASSOC);

		return $output;
	}

	function insertTransactions($inputs)
	{
		foreach ($inputs as $key => $value)
			$this->preventInjection($value);

		$title = $this->preventInjection($inputs['TITLE']);
		$body = $this->preventInjection($inputs['BODY']);
		$date = $this->preventInjection($inputs['DATE']);

		$sql = <<<EOF
			INSERT INTO TRANSACTIONS (TITLE,DATE,BODY)
			VALUES ('$title', '$date', '$body');
		EOF;

		$ret = $this->db->exec($sql);
		if (!$ret)
			throw new Exception($this->db->lastErrorMsg());
	}

	function updateTransactionById($inputs)
	{

		$id = $this->preventInjection($inputs['ID']);
		$title = $this->preventInjection($inputs['TITLE']);
		$body = $this->preventInjection($inputs['BODY']);
		$date = $this->preventInjection($inputs['DATE']);

		$sql = <<<EOF
			UPDATE TRANSACTIONS SET `TITLE`='$title', `DATE`='$date', `BODY`='$body'
			WHERE `ID`=$id
		EOF;

		$ret = $this->db->exec($sql);
		if (!$ret)
			throw new Exception($this->db->lastErrorMsg());
	}

	function deleteTransactionById($id)
	{
		$id = $this->preventInjection($id);

		$sql = <<<EOF
			DELETE FROM TRANSACTIONS WHERE `ID`=$id
		EOF;

		$ret = $this->db->exec($sql);
		if (!$ret)
			throw new Exception($this->db->lastErrorMsg());
	}
}

?>