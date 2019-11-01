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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\OrgaGeneriques;

/**
 * Orga generiques test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class OrgaGeneriquesTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new OrgaGeneriques();

        $this->assertNull($obj->getADeclarerDsnNeant());
        $this->assertNull($obj->getAgrementMinisteriel());
        $this->assertNull($obj->getAppliquerCpn220());
        $this->assertNull($obj->getArrondirBase());
        $this->assertNull($obj->getArrondirCotis());
        $this->assertNull($obj->getAssietteSpecifAgff());
        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getCodeAssietteSit2());
        $this->assertNull($obj->getCodeAssietteSit2Agff());
        $this->assertNull($obj->getCodeAssietteSitb());
        $this->assertNull($obj->getCodeAssietteSitbagff());
        $this->assertNull($obj->getCodeAssietteSitc());
        $this->assertNull($obj->getCodeCaisseMsa());
        $this->assertNull($obj->getCodeOrganismeAssuranceDadsu());
        $this->assertNull($obj->getCodeOrganismeMutuelleDadsu());
        $this->assertNull($obj->getDetailArrco());
        $this->assertNull($obj->getGroupeCrc());
        $this->assertNull($obj->getIdInstitution());
        $this->assertNull($obj->getIntitSousTotalAgffAgirc());
        $this->assertNull($obj->getIntitSousTotalAgffArrco());
        $this->assertNull($obj->getIntitSousTotalApec());
        $this->assertNull($obj->getIntitule());
        $this->assertNull($obj->getLienFicParamDsn());
        $this->assertNull($obj->getRegroupementSi());
        $this->assertNull($obj->getSousTotalAgff());
        $this->assertNull($obj->getSousTotalApec());
        $this->assertNull($obj->getSousTotalCaisse());
        $this->assertNull($obj->getTraitementDadsu());
        $this->assertNull($obj->getTypeDeclaration());
        $this->assertNull($obj->getTypeOrganisme());
        $this->assertNull($obj->getUtilise());
    }
}
