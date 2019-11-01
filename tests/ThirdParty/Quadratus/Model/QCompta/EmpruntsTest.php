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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\Emprunts;

/**
 * Emprunts test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class EmpruntsTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Emprunts();

        $this->assertNull($obj->getAEchoirEchu());
        $this->assertNull($obj->getCategorie());
        $this->assertNull($obj->getCentreAnalytique());
        $this->assertNull($obj->getCodeJournal());
        $this->assertNull($obj->getCptAssuranceEmprunt());
        $this->assertNull($obj->getCptEmprunt());
        $this->assertNull($obj->getCptInteretEmprunt());
        $this->assertNull($obj->getDateOuverture());
        $this->assertNull($obj->getDatePremiereEcheance());
        $this->assertNull($obj->getDiffere());
        $this->assertNull($obj->getDuree());
        $this->assertNull($obj->getEmpruntEnFrancs());
        $this->assertNull($obj->getIdentification());
        $this->assertNull($obj->getMoisAnnee());
        $this->assertNull($obj->getMontantAssurance());
        $this->assertNull($obj->getMontantEmprunte());
        $this->assertNull($obj->getMtCapitalFixeRemb());
        $this->assertNull($obj->getNature());
        $this->assertNull($obj->getNatureAnalytique());
        $this->assertNull($obj->getNumero());
        $this->assertNull($obj->getNumeroPj());
        $this->assertNull($obj->getOrganisme());
        $this->assertNull($obj->getPeriodicite());
        $this->assertNull($obj->getTauxAssurance());
        $this->assertNull($obj->getTauxInteret());
        $this->assertNull($obj->getTypeInFine());
    }
}
