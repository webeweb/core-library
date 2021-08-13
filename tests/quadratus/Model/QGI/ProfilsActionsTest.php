<?php

/*
 * This file is part of the core-library-package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QGI;

use WBW\Library\Quadratus\Model\QGI\ProfilsActions;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Profils actions test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class ProfilsActionsTest extends AbstractTestCase {

    /**
     * Tests the setCodeProfil() method.
     *
     * @return void
     */
    public function testSetCodeProfil(): void {

        $obj = new ProfilsActions();

        $obj->setCodeProfil("codeProfil");
        $this->assertEquals("codeProfil", $obj->getCodeProfil());
    }

    /**
     * Tests the setIntitule() method.
     *
     * @return void
     */
    public function testSetIntitule(): void {

        $obj = new ProfilsActions();

        $obj->setIntitule("intitule");
        $this->assertEquals("intitule", $obj->getIntitule());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new ProfilsActions();

        $this->assertNull($obj->getCodeProfil());
        $this->assertNull($obj->getIntitule());
    }
}
