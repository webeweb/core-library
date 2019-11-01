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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatValeurCotisInitialeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatValeurCotisTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeDelegGestionTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeLibelleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeOptionTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeOrganismeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodePopulationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringIntituleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringPeriodeAffectationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringQualificationFraisSanteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRefContratTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeCotisTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypePopulationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringUniteDateAncienBrancheTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringUniteDateAncienCollegeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringUniteDateAncienPosteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringUnitePremDateEntreeTrait;

/**
 * Dadsu prevoyance lignes contrat.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class DadsuPrevoyanceLignesContrat {

    use StringCodeDelegGestionTrait;
    use StringCodeLibelleTrait;
    use StringCodeOptionTrait;
    use StringCodeOrganismeTrait;
    use StringCodePopulationTrait;
    use StringIntituleTrait;
    use StringPeriodeAffectationTrait;
    use StringQualificationFraisSanteTrait;
    use StringRefContratTrait;
    use StringTypeCotisTrait;
    use StringTypePopulationTrait;
    use StringUniteDateAncienBrancheTrait;
    use StringUniteDateAncienCollegeTrait;
    use StringUniteDateAncienPosteTrait;
    use StringUnitePremDateEntreeTrait;
    use FloatValeurCotisTrait;
    use FloatValeurCotisInitialeTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
