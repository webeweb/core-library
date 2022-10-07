<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Tests\Service;

use WBW\Library\Symfony\Service\PhantomJSService;
use WBW\Library\Symfony\Tests\AbstractTestCase;

/**
 * PhantomJS service test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Service
 */
class PhantomJSServiceTest extends AbstractTestCase {

    /**
     * Binary path.
     *
     * @var string
     */
    private $binaryPath;

    /**
     * Output path.
     *
     * @var string
     */
    private $outputPath;

    /**
     * Scripts path.
     *
     * @var string
     */
    private $scriptsPath;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void {
        parent::setUp();

        // Set a Binary path mock.
        $this->binaryPath = realpath(__DIR__ . "/../Fixtures/bin/phantomjs");

        // Set an Output path mock.
        $this->outputPath = realpath(__DIR__ . "/../Fixtures/app/var/phantomjs/output");

        // Set a Scripts path mock.
        $this->scriptsPath = realpath(__DIR__ . "/../Fixtures/app/var/phantomjs/scripts");
    }

    /**
     * Tests getCommand()
     *
     * @return void.
     */
    public function testGetCommand(): void {

        $obj = new PhantomJSService($this->binaryPath, $this->scriptsPath, $this->outputPath);

        $exp = $this->binaryPath;
        if ("\\" === DIRECTORY_SEPARATOR) {
            $exp .= ".exe";
        }

        $this->assertEquals($exp, $obj->getCommand());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("wbw.core.service.phantomjs", PhantomJSService::SERVICE_NAME);

        $obj = new PhantomJSService($this->binaryPath, $this->scriptsPath, $this->outputPath);

        $this->assertEquals($this->binaryPath, $obj->getBinaryPath());
        $this->assertEquals($this->outputPath, $obj->getOutputPath());
        $this->assertEquals($this->scriptsPath, $obj->getScriptsPath());
    }
}
