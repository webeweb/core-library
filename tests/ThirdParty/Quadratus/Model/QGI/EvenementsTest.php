<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\Evenements;

/**
 * Evenements test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class EvenementsTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Evenements();

        $this->assertNull($obj->getArchive());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeCollab());
        $this->assertNull($obj->getContenu1());
        $this->assertNull($obj->getContenu2());
        $this->assertNull($obj->getContenu3());
        $this->assertNull($obj->getContenu4());
        $this->assertNull($obj->getDateEvt());
        $this->assertNull($obj->getEmplacementFichier());
        $this->assertNull($obj->getEtatIsActif());
        $this->assertNull($obj->getFsCompta());
        $this->assertNull($obj->getFsComptaDateAlerte());
        $this->assertNull($obj->getFsComptaYaAlerte());
        $this->assertNull($obj->getFsComptaCollArch());
        $this->assertNull($obj->getFsComptaDateArch());
        $this->assertNull($obj->getFsFiscal());
        $this->assertNull($obj->getFsFiscalCollArch());
        $this->assertNull($obj->getFsFiscalDateArch());
        $this->assertNull($obj->getFsgi());
        $this->assertNull($obj->getFsgiCollArch());
        $this->assertNull($obj->getFsgiDateArch());
        $this->assertNull($obj->getFsJuridique());
        $this->assertNull($obj->getFsJuridiqueCollArch());
        $this->assertNull($obj->getFsJuridiqueDateArch());
        $this->assertNull($obj->getFsSocial());
        $this->assertNull($obj->getFsSocialDateAlerte());
        $this->assertNull($obj->getFsSocialYaAlerte());
        $this->assertNull($obj->getFsSocialCollArch());
        $this->assertNull($obj->getFsSocialDateArch());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getNumero());
        $this->assertNull($obj->getQualifiant1());
        $this->assertNull($obj->getQualifiant2());
        $this->assertNull($obj->getQualifiant3());
        $this->assertNull($obj->getRacineCpt());
        $this->assertNull($obj->getRegle());
        $this->assertNull($obj->getTitre());
        $this->assertNull($obj->getTypeEvt());
        $this->assertNull($obj->getUniqId());
    }
}
