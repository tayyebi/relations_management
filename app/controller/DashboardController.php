<?php

class DashboardController extends Controller
{

	function Auth()
	{
		if (
			isset($_SERVER['PHP_AUTH_USER'])
			and ($_SERVER['PHP_AUTH_USER'] == 'root'
				and ($_SERVER['PHP_AUTH_PW'] == _RootPassword))
		)
			return;

		header('WWW-Authenticate: Basic realm="My Realm"');
		header('HTTP/1.0 401 Unauthorized');
		exit;
	}

	function IndexGET()
	{
		$uow = new UnitOfWork();
		$row = $uow->overallReport();

		$this->Auth();
		$this->Render('Index', [
			'Title' => _AppName . ' | Dashboard',
			'Row' => $row
		]);
	}

	// === TRANSACTIONS === \\\

	function TransactionsGET()
	{
		$this->Auth();

		$uow = new UnitOfWork();
		$rows = $uow->selectAllTransactions();
		$this->Render('Transactions', [
			'Title' => _AppName . ' | Transaction',
			'Rows' => $rows
		]);
	}

	function TransactionGET($id = null)
	{
		$this->Auth();
		
		$uow = new UnitOfWork();

		if ($id)
			$row = $uow->selectTransactionById($id);

		$accnts = $uow->selectAllAccounts();

		$this->Render('Transaction', [
			'Title' => _AppName . ' | Transaction',
			'Row' => $row,
			'Accounts' => $accnts
		]);
	}

	function TransactionPOST()
	{
		$this->Auth();

		$uow = new UnitOfWork();

		if (isset($_POST['delete']) && isset($_POST['id'])) {
			$uow->deleteTransactionById($_POST['id']);
		} else if (!isset($_POST['delete']) && isset($_POST['id'])) {
			$uow->updateTransactionById([
				'ID' => $_POST['id'],
				'DATE' => $_POST['date'],
				'NOTES' => $_POST['notes'],
				'CREDIT_ACCOUNT_ID' => $_POST['credit'],
				'DEBIT_ACCOUNT_ID' => $_POST['debit'],
				'AMOUNT' => $_POST['amount']
			]);
		} else {
			$uow->insertTransaction([
				'DATE' => $_POST['date'],
				'NOTES' => $_POST['notes'],
				'CREDIT_ACCOUNT_ID' => $_POST['credit'],
				'DEBIT_ACCOUNT_ID' => $_POST['debit'],
				'AMOUNT' => $_POST['amount']
			]);
		}
		$this->RedirectResponse(_Root . 'Dashboard/Transactions');
	}
	
	// === ACCOUNTS === \\\

	function AccountsGET()
	{
		$this->Auth();

		$uow = new UnitOfWork();
		$rows = $uow->selectAllAccounts();

		$this->Render('Accounts', [
			'Title' => _AppName . ' | Accounts',
			'Rows' => $rows
		]);
	}

	function AccountGET($id = null)
	{
		$this->Auth();
		
		$uow = new UnitOfWork();

		if ($id)
			$row = $uow->selectAccountById($id);

		$this->Render('Account', [
			'Title' => _AppName . ' | Account',
			'Row' => $row
		]);
	}

	function AccountPOST()
	{
		$this->Auth();

		$uow = new UnitOfWork();

		if (isset($_POST['delete']) && isset($_POST['id'])) {
			$uow->deleteAccountById($_POST['id']);
		} else if (!isset($_POST['delete']) && isset($_POST['id'])) {
			$uow->updateAccountById([
				'ID' => $_POST['id'],
				'NAME' => $_POST['name'],
				'SECRET' => $_POST['secret'],
				'PROJECT_LINK' => $_POST['project']
			]);
		} else {
			$uow->insertAccount([
				'NAME' => $_POST['name'],
				'SECRET' => $_POST['secret'],
				'PROJECT_LINK' => $_POST['project']
			]);
		}
		$this->RedirectResponse(_Root . 'Dashboard/Accounts');
	}

	function LogoutGET()
	{
		$this->Render('Logout', null, true);
		unset($_SERVER['PHP_AUTH_USER']);
		$this->Auth();
	}

}