<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\LiaisonsDestinatairesTypesEnvois;

/**
 * Liaisons destinataires types envois test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class LiaisonsDestinatairesTypesEnvoisTest extends AbstractTestCase {

    /**
     * Tests the setCodeDestinataire() method.
     *
     * @return void
     */
    public function testSetCodeDestinataire() {

        $obj = new LiaisonsDestinatairesTypesEnvois();

        $obj->setCodeDestinataire("codeDestinataire");
        $this->assertEquals("codeDestinataire", $obj->getCodeDestinataire());
    }

    /**
     * Tests the setCodeTypeEnvoi() method.
     *
     * @return void
     */
    public function testSetCodeTypeEnvoi() {

        $obj = new LiaisonsDestinatairesTypesEnvois();

        $obj->setCodeTypeEnvoi("codeTypeEnvoi");
        $this->assertEquals("codeTypeEnvoi", $obj->getCodeTypeEnvoi());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new LiaisonsDestinatairesTypesEnvois();

        $this->assertNull($obj->getCodeDestinataire());
        $this->assertNull($obj->getCodeTypeEnvoi());
    }
}
