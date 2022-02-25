<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\Proprete;

use WBW\Library\Quadratus\Model\Proprete\CorrespondanceFamArtQFactChargesQProp;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Correspondance fam art q fact charges q prop test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class CorrespondanceFamArtQFactChargesQPropTest extends AbstractTestCase {

    /**
     * Tests setCodeCharge()
     *
     * @return void
     */
    public function testSetCodeCharge(): void {

        $obj = new CorrespondanceFamArtQFactChargesQProp();

        $obj->setCodeCharge("codeCharge");
        $this->assertEquals("codeCharge", $obj->getCodeCharge());
    }

    /**
     * Tests setCodeFamArt()
     *
     * @return void
     */
    public function testSetCodeFamArt(): void {

        $obj = new CorrespondanceFamArtQFactChargesQProp();

        $obj->setCodeFamArt("codeFamArt");
        $this->assertEquals("codeFamArt", $obj->getCodeFamArt());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new CorrespondanceFamArtQFactChargesQProp();

        $this->assertNull($obj->getCodeCharge());
        $this->assertNull($obj->getCodeFamArt());
    }
}
