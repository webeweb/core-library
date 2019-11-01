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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\TauxRetraite;

/**
 * Taux retraite test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class TauxRetraiteTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new TauxRetraite();

        $this->assertNull($obj->getCategCadre());
        $this->assertNull($obj->getCodeCentre());
        $this->assertNull($obj->getCodeEtablissement());
        $this->assertNull($obj->getCodeOrganisme());
        $this->assertNull($obj->getIndiceContrat());
        $this->assertNull($obj->getLibelleBul());
        $this->assertNull($obj->getNumDossier());
        $this->assertNull($obj->getSousDossier());
        $this->assertNull($obj->getTauxPatTrA());
        $this->assertNull($obj->getTauxPatTrB());
        $this->assertNull($obj->getTauxPatTrC());
        $this->assertNull($obj->getTauxSalTrA());
        $this->assertNull($obj->getTauxSalTrB());
        $this->assertNull($obj->getTauxSalTrC());
    }
}
