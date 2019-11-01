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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\EmpDadsuCalcul;

/**
 * Emp dadsu calcul test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class EmpDadsuCalculTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new EmpDadsuCalcul();

        $this->assertNull($obj->getAnciennBtp());
        $this->assertNull($obj->getAnneeSommeIsol());
        $this->assertNull($obj->getAnneeSommeIsol2());
        $this->assertNull($obj->getAnneeSommeIsol3());
        $this->assertNull($obj->getAnneeSommeIsol4());
        $this->assertNull($obj->getAnneeSommeIsol5());
        $this->assertNull($obj->getBtpSalMoyen());
        $this->assertNull($obj->getBaseBruteCpbtp());
        $this->assertNull($obj->getBaseBruteCotCcpbtp());
        $this->assertNull($obj->getBaseBruteCotOppbtp());
        $this->assertNull($obj->getBenefAssedic());
        $this->assertNull($obj->getBrutIrcantec());
        $this->assertNull($obj->getCodeClassBtp());
        $this->assertNull($obj->getCodeDureeTrav());
        $this->assertNull($obj->getCodeEtablissement());
        $this->assertNull($obj->getCodeLibBPlaf());
        $this->assertNull($obj->getCodeLibBPlaf2());
        $this->assertNull($obj->getCodeLibBPlaf3());
        $this->assertNull($obj->getCodeLibBPlaf4());
        $this->assertNull($obj->getCodeLibBPlaf5());
        $this->assertNull($obj->getCodeLibBrut());
        $this->assertNull($obj->getCodeLibBrut2());
        $this->assertNull($obj->getCodeLibBrut3());
        $this->assertNull($obj->getCodeLibBrut4());
        $this->assertNull($obj->getCodeLibBrut5());
        $this->assertNull($obj->getCodeLibCsg());
        $this->assertNull($obj->getCodeLibIrc1());
        $this->assertNull($obj->getCodeLibIrc2());
        $this->assertNull($obj->getCodeLibIrc3());
        $this->assertNull($obj->getCodeLibSomme());
        $this->assertNull($obj->getCodeLibSomme2());
        $this->assertNull($obj->getCodeLibSomme3());
        $this->assertNull($obj->getCodeLibSomme4());
        $this->assertNull($obj->getCodeLibSomme5());
        $this->assertNull($obj->getCodeMetierBtp());
        $this->assertNull($obj->getCodeTypeBPlaf());
        $this->assertNull($obj->getCodeTypeBPlaf2());
        $this->assertNull($obj->getCodeTypeBPlaf3());
        $this->assertNull($obj->getCodeTypeBPlaf4());
        $this->assertNull($obj->getCodeTypeBPlaf5());
        $this->assertNull($obj->getCodeTypeBrut());
        $this->assertNull($obj->getCodeTypeBrut2());
        $this->assertNull($obj->getCodeTypeBrut3());
        $this->assertNull($obj->getCodeTypeBrut4());
        $this->assertNull($obj->getCodeTypeBrut5());
        $this->assertNull($obj->getCodeTypeSomme());
        $this->assertNull($obj->getCodeTypeSomme2());
        $this->assertNull($obj->getCodeTypeSomme3());
        $this->assertNull($obj->getCodeTypeSomme4());
        $this->assertNull($obj->getCodeTypeSomme5());
        $this->assertNull($obj->getCsgSpecif());
        $this->assertNull($obj->getDureeTrav());
        $this->assertNull($obj->getExoHCode1());
        $this->assertNull($obj->getExoHCode2());
        $this->assertNull($obj->getExoHCode3());
        $this->assertNull($obj->getExoHCode4());
        $this->assertNull($obj->getExoHCode5());
        $this->assertNull($obj->getExoHMnt1());
        $this->assertNull($obj->getExoHMnt2());
        $this->assertNull($obj->getExoHMnt3());
        $this->assertNull($obj->getExoHMnt4());
        $this->assertNull($obj->getExoHMnt5());
        $this->assertNull($obj->getExoHMntDeducCotPat1());
        $this->assertNull($obj->getExoHMntDeducCotPat2());
        $this->assertNull($obj->getExoHMntDeducCotPat3());
        $this->assertNull($obj->getExoHMntDeducCotPat4());
        $this->assertNull($obj->getExoHMntDeducCotPat5());
        $this->assertNull($obj->getExoHMntDeducCotPatTot());
        $this->assertNull($obj->getExoHMntReducCotSal1());
        $this->assertNull($obj->getExoHMntReducCotSal2());
        $this->assertNull($obj->getExoHMntReducCotSal3());
        $this->assertNull($obj->getExoHMntReducCotSal4());
        $this->assertNull($obj->getExoHMntReducCotSal5());
        $this->assertNull($obj->getExoHMntReducCotSalTot());
        $this->assertNull($obj->getExoHNbHj1());
        $this->assertNull($obj->getExoHNbHj2());
        $this->assertNull($obj->getExoHNbHj3());
        $this->assertNull($obj->getExoHNbHj4());
        $this->assertNull($obj->getExoHNbHj5());
        $this->assertNull($obj->getFormaProBase());
        $this->assertNull($obj->getFormaProBaseCdd());
        $this->assertNull($obj->getIndCp());
        $this->assertNull($obj->getIndIntemp());
        $this->assertNull($obj->getMontantBPlaf());
        $this->assertNull($obj->getMontantBPlaf2());
        $this->assertNull($obj->getMontantBPlaf3());
        $this->assertNull($obj->getMontantBPlaf4());
        $this->assertNull($obj->getMontantBPlaf5());
        $this->assertNull($obj->getMontantBrut());
        $this->assertNull($obj->getMontantBrut2());
        $this->assertNull($obj->getMontantBrut3());
        $this->assertNull($obj->getMontantBrut4());
        $this->assertNull($obj->getMontantBrut5());
        $this->assertNull($obj->getMontantSommeIsolBrut());
        $this->assertNull($obj->getMontantSommeIsolBrut2());
        $this->assertNull($obj->getMontantSommeIsolBrut3());
        $this->assertNull($obj->getMontantSommeIsolBrut4());
        $this->assertNull($obj->getMontantSommeIsolBrut5());
        $this->assertNull($obj->getMontantSommeIsolPlaf());
        $this->assertNull($obj->getMontantSommeIsolPlaf2());
        $this->assertNull($obj->getMontantSommeIsolPlaf3());
        $this->assertNull($obj->getMontantSommeIsolPlaf4());
        $this->assertNull($obj->getMontantSommeIsolPlaf5());
        $this->assertNull($obj->getMtJRtt2007());
        $this->assertNull($obj->getNbJRtt2007());
        $this->assertNull($obj->getNbPeriode());
        $this->assertNull($obj->getNbhChomPartiel());
        $this->assertNull($obj->getNbhSemIrcantec());
        $this->assertNull($obj->getNumero());
        $this->assertNull($obj->getNumeroOrdre());
        $this->assertNull($obj->getPlafIrcantec());
        $this->assertNull($obj->getQualifUniteTemps());
        $this->assertNull($obj->getSupplFam());
        $this->assertNull($obj->getTaxeApprentissageBase());
        $this->assertNull($obj->getTaxeSalaire());
        $this->assertNull($obj->getTrAIrcantec());
        $this->assertNull($obj->getTrBIrcantec());
    }
}
