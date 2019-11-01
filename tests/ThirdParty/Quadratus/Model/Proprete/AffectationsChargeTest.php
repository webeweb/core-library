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

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\AffectationsCharge;

/**
 * Affectations charge test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class AffectationsChargeTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new AffectationsCharge();

        $this->assertNull($obj->getAjoutCharge());
        $this->assertNull($obj->getAou());
        $this->assertNull($obj->getAvr());
        $this->assertNull($obj->getChargeMensualisee());
        $this->assertNull($obj->getChargeQFact());
        $this->assertNull($obj->getChargeValidee());
        $this->assertNull($obj->getChefEquipe());
        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeChantier());
        $this->assertNull($obj->getCodeCharge());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeInspecteur());
        $this->assertNull($obj->getCodeTache());
        $this->assertNull($obj->getCommentaire());
        $this->assertNull($obj->getDec());
        $this->assertNull($obj->getFev());
        $this->assertNull($obj->getJan());
        $this->assertNull($obj->getJuil());
        $this->assertNull($obj->getJuin());
        $this->assertNull($obj->getMai());
        $this->assertNull($obj->getMar());
        $this->assertNull($obj->getMontant());
        $this->assertNull($obj->getNov());
        $this->assertNull($obj->getOct());
        $this->assertNull($obj->getOrigineChargeMens());
        $this->assertNull($obj->getPeriodeDeb());
        $this->assertNull($obj->getPeriodeFin());
        $this->assertNull($obj->getSep());
        $this->assertNull($obj->getUniqId());
    }
}
