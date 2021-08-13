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

use WBW\Library\Quadratus\Model\QGI\LignesProfilsActions;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Lignes profils actions test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class LignesProfilsActionsTest extends AbstractTestCase {

    /**
     * Tests the setCodeAction() method.
     *
     * @return void
     */
    public function testSetCodeAction(): void {

        $obj = new LignesProfilsActions();

        $obj->setCodeAction("codeAction");
        $this->assertEquals("codeAction", $obj->getCodeAction());
    }

    /**
     * Tests the setCodeProfil() method.
     *
     * @return void
     */
    public function testSetCodeProfil(): void {

        $obj = new LignesProfilsActions();

        $obj->setCodeProfil("codeProfil");
        $this->assertEquals("codeProfil", $obj->getCodeProfil());
    }

    /**
     * Tests the setNumLigne() method.
     *
     * @return void
     */
    public function testSetNumLigne(): void {

        $obj = new LignesProfilsActions();

        $obj->setNumLigne(10);
        $this->assertEquals(10, $obj->getNumLigne());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new LignesProfilsActions();

        $this->assertNull($obj->getCodeAction());
        $this->assertNull($obj->getCodeProfil());
        $this->assertNull($obj->getNumLigne());
    }
}
