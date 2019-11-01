<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie;

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntCodeEtablissementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeOrganismeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringIntituleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringMailContactTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomContactTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTelContactTrait;

/**
 * Dadsu retraite entete.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class DadsuRetraiteEntete {

    use IntCodeEtablissementTrait;
    use StringCodeOrganismeTrait;
    use StringIntituleTrait;
    use StringMailContactTrait;
    use StringNomContactTrait;
    use StringTelContactTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
