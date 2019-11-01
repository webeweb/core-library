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
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\FichesControlesEntetes;

/**
 * Fiches controles entetes test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class FichesControlesEntetesTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new FichesControlesEntetes();

        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeChantier());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeCollaborateur());
        $this->assertNull($obj->getCommentaire());
        $this->assertNull($obj->getControleur());
        $this->assertNull($obj->getDateControle());
        $this->assertNull($obj->getDateCtrlPrevue());
        $this->assertNull($obj->getDateTransfert());
        $this->assertNull($obj->getFicheContradictoire());
        $this->assertNull($obj->getFicheSignee());
        $this->assertNull($obj->getHeureDebut());
        $this->assertNull($obj->getHeureFin());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getLienDocument());
        $this->assertNull($obj->getLocal());
        $this->assertNull($obj->getLocalPere());
        $this->assertNull($obj->getNoteGlobale());
        $this->assertNull($obj->getNoteObjectif());
        $this->assertNull($obj->getNumeroFiche());
        $this->assertNull($obj->getNumeroNoeudLocal());
        $this->assertNull($obj->getSatisfactionGenerale());
        $this->assertNull($obj->getTypeControle());
        $this->assertNull($obj->getUniqIdBlocage());
        $this->assertNull($obj->getUniqIdNoeud());
    }
}
