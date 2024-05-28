<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Common\Tests\Serializer;

use DOMDocument;
use Psr\Log\LoggerInterface;
use WBW\Library\Common\Serializer\XmlDeserializer;
use WBW\Library\Common\Tests\AbstractTestCase;

/**
 * XML deserializer helper test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Helper
 */
class XmlDeserializerTest extends AbstractTestCase {

    /**
     * DOM document.
     *
     * @var DOMDocument
     */
    private $document;

    /**
     * {@inheritDoc}
     */
    protected function setUp(): void {
        parent::setUp();

        // Set a filename mock.
        $filename = realpath(__DIR__ . "/../Fixtures/Serializer/XmlDeserializerTest.xml");

        $content = XmlDeserializer::xmlEntities($filename);

        // Set a DOM document mock.
        $this->document = new DOMDocument();
        $this->document->loadXml($content);
    }

    /**
     * Test getChildDomNodeAttribute()
     *
     * @return void
     */
    public function testGetChildDomNodeTextContent(): void {

        $this->assertEquals("text & content", XmlDeserializer::getChildDomNodeTextContent($this->document->documentElement, "children"));
        $this->assertNull(XmlDeserializer::getChildDomNodeTextContent($this->document->documentElement, "child"));
    }

    /**
     * Test getDomNodeAttributeValue()
     *
     * @return void
     */
    public function testGetDomNodeAttributeValue(): void {

        $this->assertEquals("value", XmlDeserializer::getDomNodeAttributeValue($this->document->documentElement, "attribute"));
        $this->assertNull(XmlDeserializer::getDomNodeAttributeValue($this->document->documentElement->childNodes->item(0), "attribute"));
    }

    /**
     * Test getDomNodeByName()
     *
     * @return void
     */
    public function testGetDomNodeByName(): void {

        $this->assertNotNull(XmlDeserializer::getDomNodeByName("children", $this->document->documentElement->childNodes));
        $this->assertNull(XmlDeserializer::getDomNodeByName("child", $this->document->documentElement->childNodes));
    }

    /**
     * Test getDomNodesByName()
     *
     * @return void
     */
    public function testGetDomNodesByName(): void {

        $this->assertCount(2, XmlDeserializer::getDomNodesByName("child", $this->document->documentElement->childNodes));
        $this->assertCount(0, XmlDeserializer::getDomNodesByName("child"));
    }

    /**
     * Test log()
     *
     * @return void
     */
    public function testLog(): void {

        // Set a Logger mock.
        $logger = $this->getMockBuilder(LoggerInterface::class)->getMock();

        XmlDeserializer::setLogger($logger);

        XmlDeserializer::log($this->document->documentElement);
        $this->assertNull(null);
    }

    /**
     * Test log()
     *
     * @return void
     */
    public function testLogWithoutLogger(): void {

        XmlDeserializer::setLogger(null);

        XmlDeserializer::log($this->document->documentElement);
        $this->assertNull(null);
    }
}
