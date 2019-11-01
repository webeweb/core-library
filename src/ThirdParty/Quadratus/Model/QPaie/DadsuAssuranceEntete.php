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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateApplicationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateEmissionTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntCodeEtablissementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeOrganismeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodePeriodiciteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringIntituleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringMailContactTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringMoisAnnivTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomContactTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTelContactTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringUniteGestionTrait;

/**
 * Dadsu assurance entete.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class DadsuAssuranceEntete {

    use IntCodeEtablissementTrait;
    use StringCodeOrganismeTrait;
    use StringCodePeriodiciteTrait;
    use DateTimeDateApplicationTrait;
    use DateTimeDateEmissionTrait;
    use StringIntituleTrait;
    use StringMailContactTrait;
    use StringMoisAnnivTrait;
    use StringNomContactTrait;
    use StringTelContactTrait;
    use StringUniteGestionTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
