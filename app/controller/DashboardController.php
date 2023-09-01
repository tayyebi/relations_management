<?php

class DashboardController extends Controller {

<<<<<<< HEAD
	public $uow;

	function __construct()
	{
		$uow = new UnitOfWork();
	}

=======
>>>>>>> 2410a16 (first commit)
	function Auth() {
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

    function IndexGET() {
<<<<<<< HEAD
	$this->Auth();
=======
		$this->Auth();
>>>>>>> 2410a16 (first commit)
        $this->Render('Index', [
            'Title' => _AppName . ' | Dashboard'
        ]);
    }

	function ContentsGET() {
		$this->Auth();

		$uow = new UnitOfWork();
		$rows = $uow->selectAllContents();

        $this->Render('Contents', [
            'Title' => _AppName . ' | Content',
			'Rows' => $rows
        ]);
    }

	function ContentGET($id = null) {
		$this->Auth();
		
<<<<<<< HEAD
		if ($id)
			$row = $this->uow->selectContentById($id);
=======
		$uow = new UnitOfWork();
		if ($id)
			$row = $uow->selectContentById($id);
>>>>>>> 2410a16 (first commit)

        $this->Render('Content', [
            'Title' => _AppName . ' | Post',
			'Row' => $row
        ]);
    }

	function ContentPOST() {
		$this->Auth();
		
		$uow = new UnitOfWork();

		if (isset($_POST['delete']) && isset($_POST['id']))
		{
			$uow->deleteContentById($_POST['id']);
		}
		else if (!isset($_POST['delete']) && isset($_POST['id']))
		{
			$uow->updateContentById([
				'ID' => $_POST['id'],
				'TITLE' => $_POST['title'],
				'BODY' => $_POST['body'],
				'DATE' => $_POST['date']
			]);
		}
		else
		{	
			$uow->insertContent([
				'TITLE' => $_POST['title'],
				'BODY' => $_POST['body'],
				'DATE' => $_POST['date']
			]);
		}
        $this->RedirectResponse(_Root . 'Dashboard/Contents');
    }

	function LogoutGET() {
		$this->Render('Logout', null, true);
		unset($_SERVER['PHP_AUTH_USER']);
		$this->Auth();
	}

<<<<<<< HEAD
}
=======
}
>>>>>>> 2410a16 (first commit)
