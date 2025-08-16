<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\XmlTv\Tests\Model;

use WBW\Library\XmlTv\Model\Tv;
use WBW\Library\XmlTv\Tests\AbstractTestCase;

/**
 * TV test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\XmlTv\Tests\Model
 */
class TvTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $obj = new Tv();
        $obj->setDate("date");
        $obj->setGeneratorInfoName("generatorInfoName");
        $obj->setGeneratorInfoURL("generatorInfoUrl");
        $obj->setSourceDataUrl("sourceDataUrl");
        $obj->setSourceInfoName("sourceInfoName");
        $obj->setSourceInfoUrl("sourceInfoUrl");
        $obj->addChannel($this->channel);
        $obj->addProgramme($this->programme);

        $res = $obj->jsonSerialize();
        $this->assertCount(8, $res);

        $this->assertArrayHasKey("date", $res);
        $this->assertArrayHasKey("generatorInfoName", $res);
        $this->assertArrayHasKey("generatorInfoUrl", $res);
        $this->assertArrayHasKey("sourceDataUrl", $res);
        $this->assertArrayHasKey("sourceInfoName", $res);
        $this->assertArrayHasKey("sourceInfoUrl", $res);
        $this->assertArrayHasKey("channels", $res);
        $this->assertArrayHasKey("programmes", $res);
    }

    /**
     * Test setDate()
     *
     * @return void
     */
    public function testSetDate(): void {

        $obj = new Tv();

        $obj->setDate("date");
        $this->assertEquals("date", $obj->getDate());
    }

    /**
     * Test setGeneratorInfoName()
     *
     * @return void
     */
    public function testSetGeneratorInfoName(): void {

        $obj = new Tv();

        $obj->setGeneratorInfoName("generatorInfoName");
        $this->assertEquals("generatorInfoName", $obj->getGeneratorInfoName());
    }

    /**
     * Test setGeneratorInfoURL()
     *
     * @return void
     */
    public function testSetGeneratorInfoURL(): void {

        $obj = new Tv();

        $obj->setGeneratorInfoUrl("generatorInfoUrl");
        $this->assertEquals("generatorInfoUrl", $obj->getGeneratorInfoUrl());
    }

    /**
     * Test setSourceDataURL()
     *
     * @return void
     */
    public function testSetSourceDataURL(): void {

        $obj = new Tv();

        $obj->setSourceDataUrl("sourceDataUrl");
        $this->assertEquals("sourceDataUrl", $obj->getSourceDataUrl());
    }

    /**
     * Test setSourceInfoName()
     *
     * @return void
     */
    public function testSetSourceInfoName(): void {

        $obj = new Tv();

        $obj->setSourceInfoName("sourceInfoName");
        $this->assertEquals("sourceInfoName", $obj->getSourceInfoName());
    }

    /**
     * Test setSourceInfoURL()
     *
     * @return void
     */
    public function testSetSourceInfoURL(): void {

        $obj = new Tv();

        $obj->setSourceInfoUrl("sourceInfoUrl");
        $this->assertEquals("sourceInfoUrl", $obj->getSourceInfoUrl());
    }

    /**
     * Test xmlSerialize()
     *
     * @return void
     */
    public function testXmlSerialize(): void {

        $obj = new Tv();
        $obj->setDate("date");
        $obj->setGeneratorInfoName("generatorInfoName");
        $obj->setGeneratorInfoURL("generatorInfoUrl");
        $obj->setSourceDataUrl("sourceDataUrl");
        $obj->setSourceInfoName("sourceInfoName");
        $obj->setSourceInfoUrl("sourceInfoUrl");
        $obj->addChannel($this->channel);
        $obj->addProgramme($this->programme);

        $res = '<tv date="date" generator-info-name="generatorInfoName" generator-info-url="generatorInfoUrl" source-data-url="sourceDataUrl" source-info-name="sourceInfoName" source-info-url="sourceInfoUrl"><channel></channel><programme></programme></tv>';
        $this->assertEquals($res, $obj->xmlSerialize());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("tv", Tv::DOM_NODE_NAME);

        $obj = new Tv();

        $this->assertEquals([], $obj->getChannels());
        $this->assertNull($obj->getDate());
        $this->assertNull($obj->getGeneratorInfoName());
        $this->assertNull($obj->getGeneratorInfoUrl());
        $this->assertEquals([], $obj->getProgrammes());
        $this->assertNull($obj->getSourceDataUrl());
        $this->assertNull($obj->getSourceInfoName());
        $this->assertNull($obj->getSourceInfoUrl());
    }
}
