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

	// === TRANSACTIONS === \\\

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

	function insertTransaction($inputs)
	{
		foreach ($inputs as $key => $value)
			$this->preventInjection($value);

		$date = $this->preventInjection($inputs['DATE']);
		$notes = $this->preventInjection($inputs['NOTES']);
		$credit = $this->preventInjection($inputs['CREDIT_ACCOUNT_ID']);
		$debit = $this->preventInjection($inputs['DEBIT_ACCOUNT_ID']);
		$amount = $this->preventInjection($inputs['AMOUNT']);

		$sql = <<<EOF
			INSERT INTO TRANSACTIONS (DATE,CREDIT_ACCOUNT_ID,DEBIT_ACCOUNT_ID,NOTES,AMOUNT)
			VALUES ('$date', '$credit', '$debit', '$notes', $amount);
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

	// === ACCOUNTS === \\\
	function selectAllAccounts()
	{
		$sql = <<<EOF
			SELECT * FROM ACCOUNTS ORDER BY `ID` DESC;
		EOF;

		$output = [];

		$ret = $this->db->query($sql);
		while ($row = $ret->fetchArray(SQLITE3_ASSOC))
			array_push($output, $row);

		return $output;
	}

	function selectAccountById($id)
	{
		$id = $this->preventInjection($id);

		$sql = <<<EOF
			SELECT * FROM ACCOUNTS WHERE `ID`=$id;
		EOF;

		$ret = $this->db->query($sql);
		return $ret->fetchArray(SQLITE3_ASSOC);

		return $output;
	}

	function selectAccountBySecret($secret)
	{
		$id = $this->preventInjection($secret);

		$sql = <<<EOF
			SELECT ID, NAME, PROJECT_LINK,
			(SELECT SUM(AMOUNT) FROM TRANSACTIONS WHERE DEBIT_ACCOUNT_ID=ACCOUNTS.ID) AS DEBIT,
			(SELECT SUM(AMOUNT) FROM TRANSACTIONS WHERE CREDIT_ACCOUNT_ID=ACCOUNTS.ID) AS CREDIT
			FROM ACCOUNTS
			WHERE `SECRET`='$secret';
		EOF;

		$ret = $this->db->query($sql);
		return $ret->fetchArray(SQLITE3_ASSOC);

		return $output;
	}

	function insertAccount($inputs)
	{
		foreach ($inputs as $key => $value)
			$this->preventInjection($value);

		$name = $this->preventInjection($inputs['NAME']);
		$project = $this->preventInjection($inputs['PROJECT_LINK']);
		$secret = $this->preventInjection($inputs['SECRET']);

		$sql = <<<EOF
			INSERT INTO ACCOUNTS (NAME,PROJECT_LINK,SECRET)
			VALUES ('$name', '$project', '$secret');
		EOF;

		$ret = $this->db->exec($sql);
		if (!$ret)
			throw new Exception($this->db->lastErrorMsg());
	}

	function updateAccountById($inputs)
	{

		$id = $this->preventInjection($inputs['ID']);
		$name = $this->preventInjection($inputs['NAME']);
		$project = $this->preventInjection($inputs['PROJECT_LINK']);
		$secret = $this->preventInjection($inputs['SECRET']);

		$sql = <<<EOF
			UPDATE ACCOUNTS SET `TITLE`='$title', `DATE`='$date', `BODY`='$body'
			WHERE `ID`=$id
		EOF;

		$ret = $this->db->exec($sql);
		if (!$ret)
			throw new Exception($this->db->lastErrorMsg());
	}

	function deleteAccountById($id)
	{
		$id = $this->preventInjection($id);

		$sql = <<<EOF
			DELETE FROM ACCOUNTS WHERE `ID`=$id
		EOF;

		$ret = $this->db->exec($sql);
		if (!$ret)
			throw new Exception($this->db->lastErrorMsg());
	}

}

?>