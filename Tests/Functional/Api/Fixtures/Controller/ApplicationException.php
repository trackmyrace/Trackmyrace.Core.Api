<?php
namespace Trackmyrace\Core\Tests\Functional\Api\Fixtures\Controller;

class ApplicationException extends \TYPO3\Flow\Exception
{
	public function __construct($message, $code)
	{
		$this->statusCode = $code;
		parent::__construct($message, $code);
	}
}