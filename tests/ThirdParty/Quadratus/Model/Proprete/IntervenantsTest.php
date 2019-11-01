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
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\Intervenants;

/**
 * Intervenants test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class IntervenantsTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Intervenants();

        $this->assertNull($obj->getApe());
        $this->assertNull($obj->getBtq());
        $this->assertNull($obj->getBureauDistributeur());
        $this->assertNull($obj->getCivilite());
        $this->assertNull($obj->getCodeOfficielCommune());
        $this->assertNull($obj->getCodePostal());
        $this->assertNull($obj->getComplement());
        $this->assertNull($obj->getDateCreat());
        $this->assertNull($obj->getDateModif());
        $this->assertNull($obj->getFax());
        $this->assertNull($obj->getId());
        $this->assertNull($obj->getIdentTva());
        $this->assertNull($obj->getNom());
        $this->assertNull($obj->getNomMarital());
        $this->assertNull($obj->getNomResponsable());
        $this->assertNull($obj->getNomSuite());
        $this->assertNull($obj->getNomVille());
        $this->assertNull($obj->getNomVoie());
        $this->assertNull($obj->getNumVoie());
        $this->assertNull($obj->getPortable1());
        $this->assertNull($obj->getPortable2());
        $this->assertNull($obj->getPrenom());
        $this->assertNull($obj->getQualite());
        $this->assertNull($obj->getRc());
        $this->assertNull($obj->getSiret());
        $this->assertNull($obj->getTel1());
        $this->assertNull($obj->getTel2());
        $this->assertNull($obj->getTelVoiture());
        $this->assertNull($obj->getTelex());
    }
}
