<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Provider\Tests\Serializer;

use DOMDocument;
use WBW\Library\Provider\Serializer\XmlDeserializerHelper;
use WBW\Library\Provider\Tests\AbstractTestCase;

/**
 * XML deserializer helper test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Provider\Tests\Serializer
 */
class XmlDeserializerHelperTest extends AbstractTestCase {

    /**
     * DOM document.
     *
     * @var DOMDocument
     */
    private $document;

    /**
     * Filename.
     *
     * @var string
     */
    private $filename;

    /**
     * {@inheritDoc}
     */
    protected function setUp(): void {
        parent::setUp();

        // Set a filename mock.
        $this->filename = realpath(__DIR__ . "/../Serializer/XmlSerializerHelperTest.xml");

        $content = XmlDeserializerHelper::xmlEntities($this->filename);

        // Set a DOM document mock.
        $this->document = new DOMDocument();
        $this->document->loadXml($content);
    }

    /**
     * Tests the getChildDomNodeAttribute() method.
     *
     * @return void
     */
    public function testGetChildDomNodeTextContent(): void {

        $this->assertEquals("text & content", XmlDeserializerHelper::getChildDomNodeTextContent($this->document->documentElement, "children"));
        $this->assertNull(XmlDeserializerHelper::getChildDomNodeTextContent($this->document->documentElement, "child"));
    }

    /**
     * Tests the getDomNodeAttributeValue() method.
     *
     * @return void
     */
    public function testGetDomNodeAttributeValue(): void {

        $this->assertEquals("value", XmlDeserializerHelper::getDomNodeAttributeValue($this->document->documentElement, "attribute"));
        $this->assertNull(XmlDeserializerHelper::getDomNodeAttributeValue($this->document->documentElement->childNodes->item(0), "attribute"));
    }

    /**
     * Tests the getDomNodeByName() method.
     *
     * @return void
     */
    public function testGetDomNodeByName(): void {

        $this->assertNotNull(XmlDeserializerHelper::getDomNodeByName("children", $this->document->documentElement->childNodes));
        $this->assertNull(XmlDeserializerHelper::getDomNodeByName("child", $this->document->documentElement->childNodes));
    }

    /**
     * Tests the getDomNodesByName() method.
     *
     * @return void
     */
    public function testGetDomNodesByName(): void {

        $this->assertCount(2, XmlDeserializerHelper::getDomNodesByName("child", $this->document->documentElement->childNodes));
        $this->assertCount(0, XmlDeserializerHelper::getDomNodesByName("child"));
    }

    /**
     * Tests the log() method.
     *
     * @return void
     */
    public function testLog(): void {

        XmlDeserializerHelper::setLogger($this->logger);
        $this->assertNull(XmlDeserializerHelper::log($this->document->documentElement));
    }

    /**
     * Tests the log() method.
     *
     * @return void
     */
    public function testLogWithoutLogger(): void {

        XmlDeserializerHelper::setLogger(null);
        $this->assertNull(XmlDeserializerHelper::log($this->document->documentElement));
    }
}