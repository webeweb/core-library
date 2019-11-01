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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolPasActiveTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntCategSalarieTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntIndiceCategTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCategSalarieEquivTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeActiviteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeMetierTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeOrganismeAgircTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeOrganismeArrcoTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeOrganismeCccaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeOrganismeFraisSanteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeOrganismePrevCompTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeOrganismePrevTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringIdInstitutionAgircTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringIdInstitutionArrcoTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringIdInstitutionCccaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringIdInstitutionFraisSanteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringIdInstitutionPrevCompTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringIdInstitutionPrevTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringIntituleTrait;

/**
 * Caisses retraite metier.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class CaissesRetraiteMetier {

    use IntCategSalarieTrait;
    use StringCategSalarieEquivTrait;
    use StringCodeActiviteTrait;
    use StringCodeMetierTrait;
    use StringCodeOrganismeAgircTrait;
    use StringCodeOrganismeArrcoTrait;
    use StringCodeOrganismeCccaTrait;
    use StringCodeOrganismeFraisSanteTrait;
    use StringCodeOrganismePrevTrait;
    use StringCodeOrganismePrevCompTrait;
    use StringIdInstitutionAgircTrait;
    use StringIdInstitutionArrcoTrait;
    use StringIdInstitutionCccaTrait;
    use StringIdInstitutionFraisSanteTrait;
    use StringIdInstitutionPrevTrait;
    use StringIdInstitutionPrevCompTrait;
    use IntIndiceCategTrait;
    use StringIntituleTrait;
    use BoolPasActiveTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
