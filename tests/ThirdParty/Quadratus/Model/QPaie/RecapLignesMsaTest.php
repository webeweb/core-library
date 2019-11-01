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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\RecapLignesMsa;

/**
 * Recap lignes msa test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class RecapLignesMsaTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new RecapLignesMsa();

        $this->assertNull($obj->getAdresseMsa());
        $this->assertNull($obj->getCCollect());
        $this->assertNull($obj->getCodeActivite());
        $this->assertNull($obj->getCodeEtablissement());
        $this->assertNull($obj->getCodeUnite());
        $this->assertNull($obj->getDateReglement());
        $this->assertNull($obj->getEffectifCice());
        $this->assertNull($obj->getFaitA());
        $this->assertNull($obj->getFaitLe());
        $this->assertNull($obj->getFinPer());
        $this->assertNull($obj->getIntituleCodeUnite());
        $this->assertNull($obj->getListeServices());
        $this->assertNull($obj->getMtCsg());
        $this->assertNull($obj->getMtCsgrdsrrImp());
        $this->assertNull($obj->getMtCsgrdsrrNonImp());
        $this->assertNull($obj->getMtElemCalcul57());
        $this->assertNull($obj->getMtElemCalcul58());
        $this->assertNull($obj->getMtElemCalcul59());
        $this->assertNull($obj->getMtElemCalcul60());
        $this->assertNull($obj->getMtElemCalcul61());
        $this->assertNull($obj->getMtElemCalcul62());
        $this->assertNull($obj->getMtElemCalcul63());
        $this->assertNull($obj->getMtElemCalcul65());
        $this->assertNull($obj->getMtElemCalcul66());
        $this->assertNull($obj->getMtElemCalcul67());
        $this->assertNull($obj->getMtElemCalcul68());
        $this->assertNull($obj->getMtElemCalcul69());
        $this->assertNull($obj->getMtElemCalcul70());
        $this->assertNull($obj->getMtElemCalcul71());
        $this->assertNull($obj->getMtElemCalcul72());
        $this->assertNull($obj->getMtElemCalcul73());
        $this->assertNull($obj->getMtElemCalcul74());
        $this->assertNull($obj->getMtElemCalcul75());
        $this->assertNull($obj->getMtElemCalcul76());
        $this->assertNull($obj->getMtElemCalcul77());
        $this->assertNull($obj->getMtElemCalcul78());
        $this->assertNull($obj->getMtElemCalcul79());
        $this->assertNull($obj->getMtElemCalcul97());
        $this->assertNull($obj->getMtElemCalcul98());
        $this->assertNull($obj->getMtTcp());
        $this->assertNull($obj->getPerDebCice());
        $this->assertNull($obj->getPerFinCice());
        $this->assertNull($obj->getPeriodeDecla());
        $this->assertNull($obj->getPersonneContact());
        $this->assertNull($obj->getPremMois());
        $this->assertNull($obj->getSiren());
        $this->assertNull($obj->getSiret());
        $this->assertNull($obj->getSalariesDe());
        $this->assertNull($obj->getSelectionService());
        $this->assertNull($obj->getSuiviPar());
        $this->assertNull($obj->getTelPersonne());
        $this->assertNull($obj->getTriDeclMsa());
    }
}
