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
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\DevisProgLignes;

/**
 * Devis prog lignes test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class DevisProgLignesTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new DevisProgLignes();

        $this->assertNull($obj->getAou());
        $this->assertNull($obj->getAvr());
        $this->assertNull($obj->getCodeEchelle());
        $this->assertNull($obj->getCodeOperation());
        $this->assertNull($obj->getCoefficient());
        $this->assertNull($obj->getDec());
        $this->assertNull($obj->getDimanche());
        $this->assertNull($obj->getFev());
        $this->assertNull($obj->getJan());
        $this->assertNull($obj->getJeudi());
        $this->assertNull($obj->getJuil());
        $this->assertNull($obj->getJuin());
        $this->assertNull($obj->getLundi());
        $this->assertNull($obj->getMai());
        $this->assertNull($obj->getMar());
        $this->assertNull($obj->getMardi());
        $this->assertNull($obj->getMercredi());
        $this->assertNull($obj->getNoteResultat());
        $this->assertNull($obj->getNov());
        $this->assertNull($obj->getNumDevis());
        $this->assertNull($obj->getNumLigne());
        $this->assertNull($obj->getNumProgramme());
        $this->assertNull($obj->getOccurrence());
        $this->assertNull($obj->getOct());
        $this->assertNull($obj->getPeriodicite());
        $this->assertNull($obj->getSamedi());
        $this->assertNull($obj->getSep());
        $this->assertNull($obj->getVendredi());
        $this->assertNull($obj->getVitesseReelle());
        $this->assertNull($obj->getVitesseTheorique());
    }
}
