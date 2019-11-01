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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\AffaireParamFrais;

/**
 * Affaire param frais test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class AffaireParamFraisTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new AffaireParamFrais();

        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeAvenant());
        $this->assertNull($obj->getCodeFraisFixe());
        $this->assertNull($obj->getCodePhase());
        $this->assertNull($obj->getComptesComptables());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getMontant());
        $this->assertNull($obj->getMtFg1());
        $this->assertNull($obj->getMtFg2());
        $this->assertNull($obj->getPeriode());
        $this->assertNull($obj->getPourcentage());
        $this->assertNull($obj->getPrctFg1());
        $this->assertNull($obj->getPrctFg2());
        $this->assertNull($obj->getType());
    }
}
