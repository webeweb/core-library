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
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\Affaires;

/**
 * Affaires test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class AffairesTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Affaires();

        $this->assertNull($obj->getBtq());
        $this->assertNull($obj->getBureauDistributeur());
        $this->assertNull($obj->getCaStatAnnuel());
        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeAnalytique());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeCommercial());
        $this->assertNull($obj->getCodeFactor());
        $this->assertNull($obj->getCodePays());
        $this->assertNull($obj->getCodePostal());
        $this->assertNull($obj->getCodeRegMarge());
        $this->assertNull($obj->getCodeTva());
        $this->assertNull($obj->getCodeVentilCompta());
        $this->assertNull($obj->getComplement());
        $this->assertNull($obj->getDateCreat());
        $this->assertNull($obj->getDateDebAffaire());
        $this->assertNull($obj->getDateDebAffaireDebMois());
        $this->assertNull($obj->getDateFinAffaire());
        $this->assertNull($obj->getDateFinAffaireFinMois());
        $this->assertNull($obj->getDateModif());
        $this->assertNull($obj->getDateVente());
        $this->assertNull($obj->getFactureIsolee());
        $this->assertNull($obj->getGroupeSousTraite());
        $this->assertNull($obj->getNomAdresse());
        $this->assertNull($obj->getNomAffaire());
        $this->assertNull($obj->getNomSuite());
        $this->assertNull($obj->getNomVoie());
        $this->assertNull($obj->getNumVoie());
        $this->assertNull($obj->getReferenceFacture());
        $this->assertNull($obj->getReferenceFacture2());
    }
}
