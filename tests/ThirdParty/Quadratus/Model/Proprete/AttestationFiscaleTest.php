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
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\AttestationFiscale;

/**
 * Attestation fiscale test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class AttestationFiscaleTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new AttestationFiscale();

        $this->assertNull($obj->getAnnee());
        $this->assertNull($obj->getCodeArticle1());
        $this->assertNull($obj->getCodeArticle10());
        $this->assertNull($obj->getCodeArticle2());
        $this->assertNull($obj->getCodeArticle3());
        $this->assertNull($obj->getCodeArticle4());
        $this->assertNull($obj->getCodeArticle5());
        $this->assertNull($obj->getCodeArticle6());
        $this->assertNull($obj->getCodeArticle7());
        $this->assertNull($obj->getCodeArticle8());
        $this->assertNull($obj->getCodeArticle9());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getDureeAnnuelle());
        $this->assertNull($obj->getEtat());
        $this->assertNull($obj->getFamille1());
        $this->assertNull($obj->getFamille10());
        $this->assertNull($obj->getFamille2());
        $this->assertNull($obj->getFamille3());
        $this->assertNull($obj->getFamille4());
        $this->assertNull($obj->getFamille5());
        $this->assertNull($obj->getFamille6());
        $this->assertNull($obj->getFamille7());
        $this->assertNull($obj->getFamille8());
        $this->assertNull($obj->getFamille9());
        $this->assertNull($obj->getLienDocument());
        $this->assertNull($obj->getModeReglement());
        $this->assertNull($obj->getMontantTes());
        $this->assertNull($obj->getMontantTtc());
    }
}
