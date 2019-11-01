<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\LignesAta;

/**
 * Lignes ata test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class LignesAtaTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new LignesAta();

        $this->assertNull($obj->getAvantagesEuroOuFranc());
        $this->assertNull($obj->getCsEuroOuFranc());
        $this->assertNull($obj->getDateEcheance());
        $this->assertNull($obj->getFraisPsEuroOuFranc());
        $this->assertNull($obj->getFraisProSoumis());
        $this->assertNull($obj->getIndemnitesEuroOuFranc());
        $this->assertNull($obj->getMontant());
        $this->assertNull($obj->getMontantAvantages());
        $this->assertNull($obj->getMontantCotis());
        $this->assertNull($obj->getMontantEuroOuFranc());
        $this->assertNull($obj->getMontantIndemnites());
        $this->assertNull($obj->getNbHTrav());
        $this->assertNull($obj->getNumLigne());
        $this->assertNull($obj->getNumeroAttestation());
        $this->assertNull($obj->getPeriodeDeb());
        $this->assertNull($obj->getPeriodeFin());
        $this->assertNull($obj->getTauxDedSup());
    }
}
