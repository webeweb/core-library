<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete;

use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\CorrespondanceFamArtQFactChargesQProp;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Correspondance fam art q fact charges q prop model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class CorrespondanceFamArtQFactChargesQPropTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new CorrespondanceFamArtQFactChargesQProp();

        $this->assertNull($obj->getCodeCharge());
        $this->assertNull($obj->getCodeFamArt());
    }

    /**
     * Tests the setCodeCharge() method.
     *
     * @return void
     */
    public function testSetCodeCharge() {

        $obj = new CorrespondanceFamArtQFactChargesQProp();

        $obj->setCodeCharge("codeCharge");
        $this->assertEquals("codeCharge", $obj->getCodeCharge());
    }

    /**
     * Tests the setCodeFamArt() method.
     *
     * @return void
     */
    public function testSetCodeFamArt() {

        $obj = new CorrespondanceFamArtQFactChargesQProp();

        $obj->setCodeFamArt("codeFamArt");
        $this->assertEquals("codeFamArt", $obj->getCodeFamArt());
    }
}
