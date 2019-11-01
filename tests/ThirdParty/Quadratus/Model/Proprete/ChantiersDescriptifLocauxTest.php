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
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\ChantiersDescriptifLocaux;

/**
 * Chantiers descriptif locaux test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class ChantiersDescriptifLocauxTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new ChantiersDescriptifLocaux();

        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeChantier());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeCollaborateur());
        $this->assertNull($obj->getCodeCritere1());
        $this->assertNull($obj->getCoefficient());
        $this->assertNull($obj->getDateTransfert());
        $this->assertNull($obj->getFamilleElements());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getLibelleCritere1());
        $this->assertNull($obj->getNiveauNoeud());
        $this->assertNull($obj->getNoeudLocal());
        $this->assertNull($obj->getNoteObjectif());
        $this->assertNull($obj->getNumeroNoeud());
        $this->assertNull($obj->getPoste());
        $this->assertNull($obj->getUniqIdBlocage());
        $this->assertNull($obj->getUniqIdNoeud());
    }
}
