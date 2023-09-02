<?php

class ReportController extends Controller
{

	function Auth()
	{
		if (
            true // check secret with database
		)
			return;
        else
        {
		    header('HTTP/1.0 401 Unauthorized');
		    exit;
        }
	}

	function IndexGET($secret)
	{
		$this->Auth();

		$uow = new UnitOfWork();
		$row = $uow->selectAccountBySecret($secret);

		$this->Render('Index', [
			'Title' => _AppName . ' | Report',
			'Row' => $row
		]);
	}
}