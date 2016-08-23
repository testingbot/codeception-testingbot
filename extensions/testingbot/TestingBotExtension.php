<?php
namespace Codeception\Extension;

require_once 'vendor/autoload.php';


/**
 * Class TestingBotExtension
 *
 * @author TestingBot <info@testingbot.com>
 * @license MIT
 */
class TestingBotExtension extends \Codeception\Platform\Extension {
	static $events = array(
		'test.before' => 'beforeTest',
		'test.fail' => 'testFailed',
		'test.error' => 'testFailed',
		'test.success' => 'testSuccess',
	);

	public function beforeTest(\Codeception\Event\TestEvent $e) {
	}

	public function testFailed(\Codeception\Event\FailEvent $e) {
	}

	public function testSuccess(\Codeception\Event\TestEvent $e) {
		$current = $e->getTest()->getMetadata()->getCurrent();
		var_dump($current["modules"]["\TestingBotWebDriver"]["webDriver"]);
	}
}