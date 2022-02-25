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

use WBW\Library\Quadratus\Model\QGI\LiaisonsDestinatairesTypesEnvois;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Liaisons destinataires types envois test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class LiaisonsDestinatairesTypesEnvoisTest extends AbstractTestCase {

    /**
     * Tests setCodeDestinataire()
     *
     * @return void
     */
    public function testSetCodeDestinataire(): void {

        $obj = new LiaisonsDestinatairesTypesEnvois();

        $obj->setCodeDestinataire("codeDestinataire");
        $this->assertEquals("codeDestinataire", $obj->getCodeDestinataire());
    }

    /**
     * Tests setCodeTypeEnvoi()
     *
     * @return void
     */
    public function testSetCodeTypeEnvoi(): void {

        $obj = new LiaisonsDestinatairesTypesEnvois();

        $obj->setCodeTypeEnvoi("codeTypeEnvoi");
        $this->assertEquals("codeTypeEnvoi", $obj->getCodeTypeEnvoi());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new LiaisonsDestinatairesTypesEnvois();

        $this->assertNull($obj->getCodeDestinataire());
        $this->assertNull($obj->getCodeTypeEnvoi());
    }
}
