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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\ConstantesEntreprise2;

/**
 * Constantes entreprise2 test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class ConstantesEntreprise2Test extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new ConstantesEntreprise2();

        $this->assertNull($obj->getDateApplicationFsLisse());
        $this->assertNull($obj->getDateApplicationForfaitSocial8());
        $this->assertNull($obj->getGereEvtFinContratLot());
        $this->assertNull($obj->getGerePrevNormeDsn());
        $this->assertNull($obj->getGestionDsn());
        $this->assertNull($obj->getNEvenementDsn());
        $this->assertNull($obj->getNePasActiverPrimeAnnuelleProprete());
        $this->assertNull($obj->getRegimeMixteMsa());
        $this->assertNull($obj->getTauxPrimeAnnuellePropreteMoins20Ans());
        $this->assertNull($obj->getTauxPrimeAnnuellePropretePlus20Ans());
    }
}
