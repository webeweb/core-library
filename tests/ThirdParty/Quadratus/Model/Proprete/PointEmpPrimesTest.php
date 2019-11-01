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
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\PointEmpPrimes;

/**
 * Point emp primes test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class PointEmpPrimesTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new PointEmpPrimes();

        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeChantier());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeCollaboValid());
        $this->assertNull($obj->getCodeCollaborateur());
        $this->assertNull($obj->getCodeEmploye());
        $this->assertNull($obj->getCodePrime());
        $this->assertNull($obj->getCodeTache());
        $this->assertNull($obj->getCodeTacheTypeBt());
        $this->assertNull($obj->getDateApplication());
        $this->assertNull($obj->getDateValidationSynchro());
        $this->assertNull($obj->getDefaut());
        $this->assertNull($obj->getEtat());
        $this->assertNull($obj->getNbHeureMajoration());
        $this->assertNull($obj->getNombrePrime());
        $this->assertNull($obj->getNumBt());
        $this->assertNull($obj->getNumeroPrime());
        $this->assertNull($obj->getPeriode());
        $this->assertNull($obj->getTauxPrime());
        $this->assertNull($obj->getTypeMajo());
        $this->assertNull($obj->getTypePrime());
        $this->assertNull($obj->getUniqIdSynchro());
    }
}
