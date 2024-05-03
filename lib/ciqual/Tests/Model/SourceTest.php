<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Ciqual\Tests\Model;

use JsonSerializable;
use WBW\Library\Ciqual\Model\Source;
use WBW\Library\Ciqual\Tests\AbstractTestCase;

/**
 * Source test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Ciqual\Tests\Model
 */
class SourceTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $obj = new Source();

        $this->assertIsArray($obj->jsonSerialize());
    }

    /**
     * Test setCitationRef()
     *
     * @return void
     */
    public function testSetCitationRef(): void {

        $obj = new Source();

        $obj->setCitationRef("citationRef");
        $this->assertEquals("citationRef", $obj->getCitationRef());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("SOURCES", Source::DOM_NODE_NAME);

        $obj = new Source();
        $this->assertInstanceOf(JsonSerializable::class, $obj);

        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getCitationRef());
    }
}
