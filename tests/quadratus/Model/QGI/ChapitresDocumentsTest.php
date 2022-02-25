<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QGI;

use WBW\Library\Quadratus\Model\QGI\ChapitresDocuments;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Chapitres documents test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class ChapitresDocumentsTest extends AbstractTestCase {

    /**
     * Tests setCode()
     *
     * @return void
     */
    public function testSetCode(): void {

        $obj = new ChapitresDocuments();

        $obj->setCode("code");
        $this->assertEquals("code", $obj->getCode());
    }

    /**
     * Tests setNomRepertoire()
     *
     * @return void
     */
    public function testSetNomRepertoire(): void {

        $obj = new ChapitresDocuments();

        $obj->setNomRepertoire("nomRepertoire");
        $this->assertEquals("nomRepertoire", $obj->getNomRepertoire());
    }

    /**
     * Tests setPosition()
     *
     * @return void
     */
    public function testSetPosition(): void {

        $obj = new ChapitresDocuments();

        $obj->setPosition(10);
        $this->assertEquals(10, $obj->getPosition());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new ChapitresDocuments();

        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getNomRepertoire());
        $this->assertNull($obj->getPosition());
    }
}
