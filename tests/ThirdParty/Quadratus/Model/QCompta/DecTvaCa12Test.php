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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\DecTvaCa12;

/**
 * Dec tva ca12 test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class DecTvaCa12Test extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new DecTvaCa12();

        $this->assertNull($obj->getDateCession());
        $this->assertNull($obj->getPeriode());
        $this->assertNull($obj->getTxImposition());
        $this->assertNull($obj->getTypeCa12());
        $this->assertNull($obj->getz0008());
        $this->assertNull($obj->getz0018());
        $this->assertNull($obj->getz0019());
        $this->assertNull($obj->getz0020());
        $this->assertNull($obj->getz0028());
        $this->assertNull($obj->getz0030b());
        $this->assertNull($obj->getz0058());
        $this->assertNull($obj->getz0704());
        $this->assertNull($obj->getz0709());
        $this->assertNull($obj->getz0970());
        $this->assertNull($obj->getz0970b());
        $this->assertNull($obj->getz0980());
        $this->assertNull($obj->getz0980b());
        $this->assertNull($obj->getz0981());
        $this->assertNull($obj->getz0981b());
        $this->assertNull($obj->getz0982());
        $this->assertNull($obj->getz0983());
        $this->assertNull($obj->getz3240());
        $this->assertNull($obj->getz32Code());
        $this->assertNull($obj->getz32Libelle());
        $this->assertNull($obj->getz32Taxe());
        $this->assertNull($obj->getz35BCode());
        $this->assertNull($obj->getz35BLibelle());
        $this->assertNull($obj->getz35BTaxe());
        $this->assertNull($obj->getz35Code());
        $this->assertNull($obj->getz35Libelle());
        $this->assertNull($obj->getz35Taxe());
        $this->assertNull($obj->getz4202());
        $this->assertNull($obj->getz4213());
        $this->assertNull($obj->getz4216());
        $this->assertNull($obj->getz4217());
        $this->assertNull($obj->getz4218());
        $this->assertNull($obj->getz4220());
        $this->assertNull($obj->getz45Ca12());
        $this->assertNull($obj->getz45Ca12Code());
        $this->assertNull($obj->getz45Ca12Libelle());
        $this->assertNull($obj->getz47Ca12());
        $this->assertNull($obj->getz47Ca12Code());
        $this->assertNull($obj->getz47Ca12Libelle());
        $this->assertNull($obj->getz4Aca12());
        $this->assertNull($obj->getz4Aca12Code());
        $this->assertNull($obj->getz4Aca12Libelle());
        $this->assertNull($obj->getz4Bca12());
        $this->assertNull($obj->getz4Bca12Code());
        $this->assertNull($obj->getz4Bca12Libelle());
        $this->assertNull($obj->getz4Cca12());
        $this->assertNull($obj->getz4Cca12Code());
        $this->assertNull($obj->getz4Cca12Libelle());
        $this->assertNull($obj->getz5bCode());
        $this->assertNull($obj->getz5bHt());
        $this->assertNull($obj->getz5bLibelle());
        $this->assertNull($obj->getz5bTaxe());
        $this->assertNull($obj->getz7bCode());
        $this->assertNull($obj->getz7bHt());
        $this->assertNull($obj->getz7bLibelle());
        $this->assertNull($obj->getz7bTaxe());
        $this->assertNull($obj->getz8004());
        $this->assertNull($obj->getzAcompteDeduit1());
        $this->assertNull($obj->getzAcompteDeduit2());
        $this->assertNull($obj->getzAcompteDeduit3());
        $this->assertNull($obj->getzAcompteDeduit4());
        $this->assertNull($obj->getzAnneeAcompte1());
        $this->assertNull($obj->getzAnneeAcompte2());
        $this->assertNull($obj->getzAnneeAcompte3());
        $this->assertNull($obj->getzAnneeAcompte4());
        $this->assertNull($obj->getzCol1Acompte1());
        $this->assertNull($obj->getzCol1Acompte2());
        $this->assertNull($obj->getzCol1Acompte3());
        $this->assertNull($obj->getzCol1Acompte4());
        $this->assertNull($obj->getzCol2Acompte1());
        $this->assertNull($obj->getzCol2Acompte2());
        $this->assertNull($obj->getzCol2Acompte3());
        $this->assertNull($obj->getzCol2Acompte4());
        $this->assertNull($obj->getzExcedentVersement());
        $this->assertNull($obj->getzNomDemandeurRbt());
        $this->assertNull($obj->getzNumMsa());
        $this->assertNull($obj->getzRbtbic());
        $this->assertNull($obj->getzRbtiban());
        $this->assertNull($obj->getzRbtQualite());
        $this->assertNull($obj->getzRbtrib());
        $this->assertNull($obj->getzRbtVille());
        $this->assertNull($obj->getzRbtDemande());
        $this->assertNull($obj->getzSoldeAPayer());
        $this->assertNull($obj->getzSurfaceAgr());
        $this->assertNull($obj->getzTaxesFiscales());
        $this->assertNull($obj->getzYaDemandeRbt());
    }
}
