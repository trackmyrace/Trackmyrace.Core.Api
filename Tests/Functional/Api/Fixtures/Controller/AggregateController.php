<?php
namespace Trackmyrace\Core\Tests\Functional\Api\Fixtures\Controller;

use Trackmyrace\Core\Api\Controller\AbstractRestController;
use Trackmyrace\Core\Tests\Functional\Api\Fixtures\Domain\Model\AggregateRoot;

class AggregateController extends AbstractRestController
{
	protected static $RESOURCE_ENTITY_CLASS = AggregateRoot::class;

	/**
	 * An action that will throw an exception in order to test JSON error responses from API calls.
	 *
	 * @throws \TYPO3\Flow\Exception
	 */
	public function exceptionalAction()
	{
		throw new ApplicationException('This is an exception thrown in the application. It\'s over 9000!', 9001);
	}
}