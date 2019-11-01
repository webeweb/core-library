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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCotAssedicParUrssafTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolCotitelTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolEditionDucsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolGestionPaieDecaleeOcTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolPaiementEdiVluTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolPasTraiterEdiTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolTelepaiementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntCodeEtablissementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCentrePayeurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeCatCadreTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeCentreTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeNonCadreTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeOrganismeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCompteChargeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCompteTiersTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDossCadreTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDossNonCadreTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringGroupeInterneTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringIdIntervenantTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringJourExigibleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringJourLimiteDepotTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringJourReglementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringMensTrimTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNoAffiliationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringOptiqueDucsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRibTrait;

/**
 * Organismes.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class Organismes {

    use StringCentrePayeurTrait;
    use StringCodeCatCadreTrait;
    use StringCodeCentreTrait;
    use IntCodeEtablissementTrait;
    use StringCodeNonCadreTrait;
    use StringCodeOrganismeTrait;
    use StringCompteChargeTrait;
    use StringCompteTiersTrait;
    use BoolCotAssedicParUrssafTrait;
    use BoolCotitelTrait;
    use StringDossCadreTrait;
    use StringDossNonCadreTrait;
    use BoolEditionDucsTrait;
    use BoolGestionPaieDecaleeOcTrait;
    use StringGroupeInterneTrait;
    use StringIdIntervenantTrait;
    use StringJourExigibleTrait;
    use StringJourLimiteDepotTrait;
    use StringJourReglementTrait;
    use StringMensTrimTrait;
    use StringNoAffiliationTrait;
    use StringOptiqueDucsTrait;
    use BoolPaiementEdiVluTrait;
    use BoolPasTraiterEdiTrait;
    use StringRibTrait;
    use BoolTelepaiementTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
