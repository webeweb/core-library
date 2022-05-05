<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Serializer\Tests\Helper;

use DOMDocument;
use WBW\Library\Serializer\Helper\XmlDeserializerHelper;
use WBW\Library\Serializer\Tests\AbstractTestCase;

/**
 * XML deserializer helper test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Serializer\Tests\Helper
 */
class XmlDeserializerHelperTest extends AbstractTestCase {

    /**
     * DOM document.
     *
     * @var DOMDocument
     */
    private $document;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void {
        parent::setUp();

        // Set a filename mock.
        $filename = realpath(__DIR__ . "/XmlSerializerHelperTest.xml");

        $content = XmlDeserializerHelper::xmlEntities($filename);

        // Set a DOM document mock.
        $this->document = new DOMDocument();
        $this->document->loadXml($content);
    }

    /**
     * Tests getChildDomNodeAttribute()
     *
     * @return void
     */
    public function testGetChildDomNodeTextContent(): void {

        $this->assertEquals("text & content", XmlDeserializerHelper::getChildDomNodeTextContent($this->document->documentElement, "children"));
        $this->assertNull(XmlDeserializerHelper::getChildDomNodeTextContent($this->document->documentElement, "child"));
    }

    /**
     * Tests getDomNodeAttributeValue()
     *
     * @return void
     */
    public function testGetDomNodeAttributeValue(): void {

        $this->assertEquals("value", XmlDeserializerHelper::getDomNodeAttributeValue($this->document->documentElement, "attribute"));
        $this->assertNull(XmlDeserializerHelper::getDomNodeAttributeValue($this->document->documentElement->childNodes->item(0), "attribute"));
    }

    /**
     * Tests getDomNodeByName()
     *
     * @return void
     */
    public function testGetDomNodeByName(): void {

        $this->assertNotNull(XmlDeserializerHelper::getDomNodeByName("children", $this->document->documentElement->childNodes));
        $this->assertNull(XmlDeserializerHelper::getDomNodeByName("child", $this->document->documentElement->childNodes));
    }

    /**
     * Tests getDomNodesByName()
     *
     * @return void
     */
    public function testGetDomNodesByName(): void {

        $this->assertCount(2, XmlDeserializerHelper::getDomNodesByName("child", $this->document->documentElement->childNodes));
        $this->assertCount(0, XmlDeserializerHelper::getDomNodesByName("child"));
    }

    /**
     * Tests log()
     *
     * @return void
     */
    public function testLog(): void {

        XmlDeserializerHelper::setLogger($this->logger);
        $this->assertNull(XmlDeserializerHelper::log($this->document->documentElement));
    }

    /**
     * Tests log()
     *
     * @return void
     */
    public function testLogWithoutLogger(): void {

        XmlDeserializerHelper::setLogger(null);
        $this->assertNull(XmlDeserializerHelper::log($this->document->documentElement));
    }
}
