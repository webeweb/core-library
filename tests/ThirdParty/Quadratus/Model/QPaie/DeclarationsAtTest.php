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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\DeclarationsAt;

/**
 * Declarations at test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class DeclarationsAtTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new DeclarationsAt();

        $this->assertNull($obj->getAdresse());
        $this->assertNull($obj->getCategorie());
        $this->assertNull($obj->getCodeEtablissement());
        $this->assertNull($obj->getCodePostal());
        $this->assertNull($obj->getCommune());
        $this->assertNull($obj->getComplement());
        $this->assertNull($obj->getDateNaissance());
        $this->assertNull($obj->getDeductForfait());
        $this->assertNull($obj->getDtAccouchement());
        $this->assertNull($obj->getDtDebAt());
        $this->assertNull($obj->getDtDebConges());
        $this->assertNull($obj->getDtEmbauche());
        $this->assertNull($obj->getDtFinConges());
        $this->assertNull($obj->getDtFinContrat());
        $this->assertNull($obj->getDtFinPreavis());
        $this->assertNull($obj->getEtblNom());
        $this->assertNull($obj->getEtblResponsable());
        $this->assertNull($obj->getEtblSiret());
        $this->assertNull($obj->getEtblSignature());
        $this->assertNull($obj->getEtblTel());
        $this->assertNull($obj->getLienDocument());
        $this->assertNull($obj->getMemoAccident());
        $this->assertNull($obj->getMemoCorrespondance());
        $this->assertNull($obj->getMotifAt());
        $this->assertNull($obj->getMtSalaireBrut());
        $this->assertNull($obj->getNir());
        $this->assertNull($obj->getNom());
        $this->assertNull($obj->getNumDat());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getPrenom());
        $this->assertNull($obj->getSignDate());
        $this->assertNull($obj->getTypeDat());
    }
}
