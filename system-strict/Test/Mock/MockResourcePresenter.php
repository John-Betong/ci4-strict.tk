<?php DECLARE(STRICT_TYPES=1); ?>
<?php namespace CodeIgniter\Test\Mock;

use CodeIgniter\RESTful\ResourcePresenter;

class MockResourcePresenter extends ResourcePresenter
{

	public function getModel()
	{
		return $this->model;
	}

	public function getModelName()
	{
		return $this->modelName;
	}

	public function getFormat()
	{
		return $this->format;
	}

}
