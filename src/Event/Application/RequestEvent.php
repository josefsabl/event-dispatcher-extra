<?php declare(strict_types = 1);

namespace Contributte\Events\Extra\Event\Application;

use Nette\Application\Application;
use Nette\Application\Request;
use Symfony\Component\EventDispatcher\Event;

class RequestEvent extends Event
{

	public const NAME = ApplicationEvents::ON_REQUEST;

	/** @var Application */
	private $application;

	/** @var Request */
	private $request;

	public function __construct(Application $application, Request $request)
	{
		$this->application = $application;
		$this->request = $request;
	}

	public function getApplication(): Application
	{
		return $this->application;
	}

	public function getRequest(): Request
	{
		return $this->request;
	}

}
