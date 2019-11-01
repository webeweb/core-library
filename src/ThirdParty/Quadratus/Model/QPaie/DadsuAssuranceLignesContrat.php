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
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeLibelleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeOrganismeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodePorteurRisqueTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDesignationCommercialeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRefContratTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringUniteGestionTrait;

/**
 * Dadsu assurance lignes contrat.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class DadsuAssuranceLignesContrat {

    use IntCodeEtablissementTrait;
    use StringCodeLibelleTrait;
    use StringCodeOrganismeTrait;
    use StringCodePorteurRisqueTrait;
    use StringDesignationCommercialeTrait;
    use StringRefContratTrait;
    use StringUniteGestionTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
