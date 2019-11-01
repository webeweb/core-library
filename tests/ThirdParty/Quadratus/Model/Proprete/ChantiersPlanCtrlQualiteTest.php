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
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\ChantiersPlanCtrlQualite;

/**
 * Chantiers plan ctrl qualite test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class ChantiersPlanCtrlQualiteTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new ChantiersPlanCtrlQualite();

        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeChantier());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeCollaboValid());
        $this->assertNull($obj->getCodeCollaborateur());
        $this->assertNull($obj->getCommentaire());
        $this->assertNull($obj->getDatePrevue());
        $this->assertNull($obj->getDateReelle());
        $this->assertNull($obj->getDateValidationSynchro());
        $this->assertNull($obj->getEtat());
        $this->assertNull($obj->getNoteGlobale());
        $this->assertNull($obj->getNumeroReclam());
        $this->assertNull($obj->getRealiseParFcq());
        $this->assertNull($obj->getTypeControle());
        $this->assertNull($obj->getUniqIdSynchro());
        $this->assertNull($obj->getUniqIdNoeud());
    }
}
