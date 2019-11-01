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
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\HistoPrepPaie;

/**
 * Histo prep paie test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class HistoPrepPaieTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new HistoPrepPaie();

        $this->assertNull($obj->getCodeEmploye());
        $this->assertNull($obj->getContingentHSupReposComp());
        $this->assertNull($obj->getDroitCp());
        $this->assertNull($obj->getEtat());
        $this->assertNull($obj->getHabs0());
        $this->assertNull($obj->getHabs1());
        $this->assertNull($obj->getHabs2());
        $this->assertNull($obj->getHabs3());
        $this->assertNull($obj->getHabs4());
        $this->assertNull($obj->getHabs5());
        $this->assertNull($obj->getHabs6());
        $this->assertNull($obj->getHabs7());
        $this->assertNull($obj->getHabs8());
        $this->assertNull($obj->getHabs9());
        $this->assertNull($obj->getHacp());
        $this->assertNull($obj->getHc());
        $this->assertNull($obj->getHPrev());
        $this->assertNull($obj->getHRempl());
        $this->assertNull($obj->getHs1());
        $this->assertNull($obj->getHs2());
        $this->assertNull($obj->getHs3());
        $this->assertNull($obj->getHs35Heures());
        $this->assertNull($obj->getHSurcroit());
        $this->assertNull($obj->getHeuresRcAcquises());
        $this->assertNull($obj->getHeuresRrAcquises());
        $this->assertNull($obj->getJacp());
        $this->assertNull($obj->getJoursRttAcquis());
        $this->assertNull($obj->getMensualisation());
        $this->assertNull($obj->getMtPrime1Chantier());
        $this->assertNull($obj->getMtPrime2Chantier());
        $this->assertNull($obj->getMtPrime3Chantier());
        $this->assertNull($obj->getMtPrimeForfait());
        $this->assertNull($obj->getNbHeuresRs());
        $this->assertNull($obj->getNbHeuresTp());
        $this->assertNull($obj->getNbPaniers());
        $this->assertNull($obj->getPeriode());
        $this->assertNull($obj->getPrime1());
        $this->assertNull($obj->getPrime10());
        $this->assertNull($obj->getPrime1Mai());
        $this->assertNull($obj->getPrime2());
        $this->assertNull($obj->getPrime3());
        $this->assertNull($obj->getPrime4());
        $this->assertNull($obj->getPrime5());
        $this->assertNull($obj->getPrime6());
        $this->assertNull($obj->getPrime7());
        $this->assertNull($obj->getPrime8());
        $this->assertNull($obj->getPrime9());
        $this->assertNull($obj->getPrimeHComplMaj());
        $this->assertNull($obj->getPrimeHDim2Normal());
        $this->assertNull($obj->getPrimeHDimExcept());
        $this->assertNull($obj->getPrimeHDimNormal());
        $this->assertNull($obj->getPrimeHNuit2Normal());
        $this->assertNull($obj->getPrimeHNuitExcept());
        $this->assertNull($obj->getPrimeHNuitNormal());
        $this->assertNull($obj->getPrimeJf2Normal());
        $this->assertNull($obj->getPrimeJfExcept());
        $this->assertNull($obj->getPrimeJfNormal());
        $this->assertNull($obj->getTempsPasse());
        $this->assertNull($obj->getTotalHAnal());
        $this->assertNull($obj->getTxHoraireRs());
        $this->assertNull($obj->getTxHoraireTp());
        $this->assertNull($obj->getYaEuSaisieManuelle());
    }
}
