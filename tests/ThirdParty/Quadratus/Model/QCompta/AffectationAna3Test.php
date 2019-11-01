<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\AffectationAna3;

/**
 * Affectation ana3 test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class AffectationAna3Test extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new AffectationAna3();

        $this->assertNull($obj->getAnneeRecolte());
        $this->assertNull($obj->getCodeCentre());
        $this->assertNull($obj->getCodeNature());
        $this->assertNull($obj->getMontant());
        $this->assertNull($obj->getNumCompte());
        $this->assertNull($obj->getPourcentage());
        $this->assertNull($obj->getQuantite1());
        $this->assertNull($obj->getQuantite2());
        $this->assertNull($obj->getSens());
    }
}
