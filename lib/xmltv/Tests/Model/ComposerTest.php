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

use WBW\Library\XmlTv\Model\Composer;
use WBW\Library\XmlTv\Tests\AbstractTestCase;

/**
 * Composer test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\XmlTv\Tests\Model
 */
class ComposerTest extends AbstractTestCase {

    /**
     * Test xmlSerialize()
     *
     * @return void
     */
    public function testXmlSerialize(): void {

        $obj = new Composer();
        $obj->setContent("content");

        $res = '<composer>content</composer>';
        $this->assertEquals($res, $obj->xmlSerialize());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("composer", Composer::DOM_NODE_NAME);

        $obj = new Composer();

        $this->assertNull($obj->getContent());
    }
}
