<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\XmlTv\Tests\Provider;

use Psr\Log\LoggerInterface;
use Throwable;
use WBW\Library\XmlTv\Model\Channel;
use WBW\Library\XmlTv\Model\Programme;
use WBW\Library\XmlTv\Model\Tv;
use WBW\Library\XmlTv\Provider\XmlProvider;
use WBW\Library\XmlTv\Tests\AbstractTestCase;

/**
 * XML provider test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\XmlTv\Tests\Provider
 */
class XmlProviderTest extends AbstractTestCase {

    /**
     * Input.
     *
     * @var string|null
     */
    private $input;

    /**
     * Output.
     *
     * @var string|null
     */
    private $output;

    /**
     * {@inheritDoc}
     */
    protected function setUp(): void {
        parent::setUp();

        // Set an input mock.
        $this->input = __DIR__ . "/../../../../var/cache/XmlProvider.testGetXML.xml";

        // Set an output mock.
        $this->output = __DIR__ . "/../../../../var/cache/XmlProvider.testWriteXML.xml";

        $this->tearDown();
    }

    /**
     * {@inheritDoc}
     */
    protected function tearDown(): void {
        parent::tearDown();

        if (true === file_exists($this->input)) {
            unlink($this->input);
        }

        if (true === file_exists($this->output)) {
            unlink($this->output);
        }
    }

    /**
     * Test getXml()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testGetXml(): void {

        // Set a Logger mock.
        $logger = $this->getMockBuilder(LoggerInterface::class)->getMock();

        // Set an URL mock.
        $url = "https://raw.githubusercontent.com/webeweb/core-library/master/tests/Fixtures/xmltv.xml";

        $res = XmlProvider::getXml($url, $this->input, $logger);
        $this->assertInstanceOf(Tv::class, $res);
    }

    /**
     * Test readXml()
     *
     * @return void
     */
    public function testReadXml(): void {

        $res = XmlProvider::readXml($this->filename);
        $this->assertInstanceOf(Tv::class, $res);

        $this->assertInstanceOf(Channel::class, $res->getChannels()[0]);
        $this->assertEquals("generator-info-name", $res->getGeneratorInfoName());
        $this->assertEquals("generator-info-url", $res->getGeneratorInfoUrl());
        $this->assertInstanceOf(Programme::class, $res->getProgrammes()[0]);
        $this->assertEquals("source-data-url", $res->getSourceDataUrl());
        $this->assertEquals("source-info-name", $res->getSourceInfoName());
        $this->assertEquals("source-info-url", $res->getSourceInfoUrl());
    }

    /**
     * Test statXml()
     *
     * @return void
     */
    public function testStatXml(): void {

        $res = XmlProvider::statXml($this->filename);
        $this->assertCount(85, $res);
    }

    /**
     * Test writeXml()
     *
     * @return void
     */
    public function testWriteXml(): void {

        // Set a Logger mock.
        $logger = $this->getMockBuilder(LoggerInterface::class)->getMock();

        // Set a Tv mock.
        $tv = XmlProvider::readXml($this->filename);

        XmlProvider::writeXml($tv, $this->output, $logger);
        $this->assertFileExists($this->output);

        $this->assertEquals(preg_replace("/\ {4}/", "  ", file_get_contents($this->filename)), file_get_contents($this->output));
    }
}
