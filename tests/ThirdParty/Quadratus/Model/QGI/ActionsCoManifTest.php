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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\ActionsCoManif;

/**
 * Actions co manif test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class ActionsCoManifTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new ActionsCoManif();

        $this->assertNull($obj->getCodeAction());
        $this->assertNull($obj->getCodeManif());
        $this->assertNull($obj->getContact());
        $this->assertNull($obj->getDateDeb());
        $this->assertNull($obj->getDateFin());
        $this->assertNull($obj->getDuree());
        $this->assertNull($obj->getDureeDbl());
        $this->assertNull($obj->getIndiceAff());
        $this->assertNull($obj->getIsMontantHt());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getLibelleMemo());
        $this->assertNull($obj->getLieuBtq());
        $this->assertNull($obj->getLieuBureauDistributeur());
        $this->assertNull($obj->getLieuCodePostal());
        $this->assertNull($obj->getLieuComplement());
        $this->assertNull($obj->getLieuEmail());
        $this->assertNull($obj->getLieuFax());
        $this->assertNull($obj->getLieuNom());
        $this->assertNull($obj->getLieuNomVoie());
        $this->assertNull($obj->getLieuNumVoie());
        $this->assertNull($obj->getLieuPj());
        $this->assertNull($obj->getLieuTel());
        $this->assertNull($obj->getMontantCheque());
        $this->assertNull($obj->getNbSeances());
        $this->assertNull($obj->getNomFormateur());
        $this->assertNull($obj->getTypeFormation());
        $this->assertNull($obj->getYaFeuillePresence());
    }
}
