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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\DeclarationCafat;

/**
 * Declaration cafat test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class DeclarationCafatTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new DeclarationCafat();

        $this->assertNull($obj->getAdresse1());
        $this->assertNull($obj->getAdresse2());
        $this->assertNull($obj->getAdresse3());
        $this->assertNull($obj->getCodeCotis());
        $this->assertNull($obj->getCodeEtablissement());
        $this->assertNull($obj->getDateDeclaration());
        $this->assertNull($obj->getLienDocument());
        $this->assertNull($obj->getMtAutreDeduction());
        $this->assertNull($obj->getMtDeductionAcompte());
        $this->assertNull($obj->getMtDeductionAcompte1());
        $this->assertNull($obj->getMtDeductionAcompte2());
        $this->assertNull($obj->getNbSalaries());
        $this->assertNull($obj->getNoCotisant());
        $this->assertNull($obj->getOrganisme());
        $this->assertNull($obj->getPasDePersonnel());
        $this->assertNull($obj->getPasDeReembauche());
        $this->assertNull($obj->getPeriodeDecla());
        $this->assertNull($obj->getPlafond1RuammTr2());
        $this->assertNull($obj->getPlafond2RuammTr2());
        $this->assertNull($obj->getPlafondAutreRegime());
        $this->assertNull($obj->getPlafondFsh());
        $this->assertNull($obj->getPlafondMaladie());
        $this->assertNull($obj->getPlafondSalaire());
        $this->assertNull($obj->getRid());
        $this->assertNull($obj->getRaisonSociale());
        $this->assertNull($obj->getSecteur());
        $this->assertNull($obj->getTauxAt());
        $this->assertNull($obj->getTauxAutreRegime());
        $this->assertNull($obj->getTauxCcs());
        $this->assertNull($obj->getTauxFsh());
        $this->assertNull($obj->getTauxMaladie());
        $this->assertNull($obj->getTauxRuammTr2());
        $this->assertNull($obj->getTotalCotisAutreRegime());
        $this->assertNull($obj->getTotalCotisCcs());
        $this->assertNull($obj->getTotalCotisFsh());
        $this->assertNull($obj->getTotalCotisMaladie());
        $this->assertNull($obj->getTotalCotisRuammTr2());
        $this->assertNull($obj->getTotalRuammTr2());
        $this->assertNull($obj->getTotalRemuneration());
        $this->assertNull($obj->getTotalSalaireAutreRegime());
        $this->assertNull($obj->getTotalSalaireCcs());
        $this->assertNull($obj->getTotalSalaireFsh());
        $this->assertNull($obj->getTotalSalaireMaladie());
    }
}
