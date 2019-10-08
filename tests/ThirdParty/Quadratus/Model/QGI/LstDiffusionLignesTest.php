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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\LstDiffusionLignes;

/**
 * Lst diffusion lignes model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class LstDiffusionLignesTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new LstDiffusionLignes();

        $this->assertNull($obj->getCodeCollaborateur());
        $this->assertNull($obj->getCodeGroupe());
        $this->assertNull($obj->getNumLig());
        $this->assertNull($obj->getType());
    }

    /**
     * Tests the setCodeCollaborateur() method.
     *
     * @return void
     */
    public function testSetCodeCollaborateur() {

        $obj = new LstDiffusionLignes();

        $obj->setCodeCollaborateur("codeCollaborateur");
        $this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
    }

    /**
     * Tests the setCodeGroupe() method.
     *
     * @return void
     */
    public function testSetCodeGroupe() {

        $obj = new LstDiffusionLignes();

        $obj->setCodeGroupe("codeGroupe");
        $this->assertEquals("codeGroupe", $obj->getCodeGroupe());
    }

    /**
     * Tests the setNumLig() method.
     *
     * @return void
     */
    public function testSetNumLig() {

        $obj = new LstDiffusionLignes();

        $obj->setNumLig(10);
        $this->assertEquals(10, $obj->getNumLig());
    }

    /**
     * Tests the setType() method.
     *
     * @return void
     */
    public function testSetType() {

        $obj = new LstDiffusionLignes();

        $obj->setType(10);
        $this->assertEquals(10, $obj->getType());
    }
}
