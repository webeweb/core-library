<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QPaie;

use WBW\Library\Quadratus\Model\QPaie\ConventionsColGrillesAnc;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Conventions col grilles anc test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class ConventionsColGrillesAncTest extends AbstractTestCase {

    /**
     * Tests setCodeConvention()
     *
     * @return void
     */
    public function testSetCodeConvention(): void {

        $obj = new ConventionsColGrillesAnc();

        $obj->setCodeConvention("codeConvention");
        $this->assertEquals("codeConvention", $obj->getCodeConvention());
    }

    /**
     * Tests setCodeGrille()
     *
     * @return void
     */
    public function testSetCodeGrille(): void {

        $obj = new ConventionsColGrillesAnc();

        $obj->setCodeGrille("codeGrille");
        $this->assertEquals("codeGrille", $obj->getCodeGrille());
    }

    /**
     * Tests setIntitule()
     *
     * @return void
     */
    public function testSetIntitule(): void {

        $obj = new ConventionsColGrillesAnc();

        $obj->setIntitule("intitule");
        $this->assertEquals("intitule", $obj->getIntitule());
    }

    /**
     * Tests setTypeGrille()
     *
     * @return void
     */
    public function testSetTypeGrille(): void {

        $obj = new ConventionsColGrillesAnc();

        $obj->setTypeGrille(10);
        $this->assertEquals(10, $obj->getTypeGrille());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new ConventionsColGrillesAnc();

        $this->assertNull($obj->getCodeConvention());
        $this->assertNull($obj->getCodeGrille());
        $this->assertNull($obj->getIntitule());
        $this->assertNull($obj->getTypeGrille());
    }
}
