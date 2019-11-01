<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QGI;

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolFactureEurosTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolFournisseurPerduTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolSoumisEscompteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateEntreeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateSortieTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatRemiseLigne1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatRemiseLigne2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatRemiseLigne3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatRemisePied2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatRemisePied3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatRemisePiedTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTauxEscompteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntDelaiLeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntDelaiNombreTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntDelaiTypeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntPaiementNombreDeJoursTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeFournisseurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeImputationAnalytiqueTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeReglementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTvaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeVentilComptaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCollectifTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDomiciliationBancaire1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDomiciliationBancaire2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringGroupeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNombreEcheancesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroCompteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringPaiementDepartLeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringPaiementLeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringReferencePieceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRibTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTransporteurTrait;

/**
 * Groupes fournisseur.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class GroupesFournisseur {

    use StringCodeFournisseurTrait;
    use StringCodeImputationAnalytiqueTrait;
    use StringCodeReglementTrait;
    use StringCodeTvaTrait;
    use StringCodeVentilComptaTrait;
    use StringCollectifTrait;
    use DateTimeDateEntreeTrait;
    use DateTimeDateSortieTrait;
    use IntDelaiLeTrait;
    use IntDelaiNombreTrait;
    use IntDelaiTypeTrait;
    use StringDomiciliationBancaire1Trait;
    use StringDomiciliationBancaire2Trait;
    use BoolFactureEurosTrait;
    use BoolFournisseurPerduTrait;
    use StringGroupeTrait;
    use StringNombreEcheancesTrait;
    use StringNumeroCompteTrait;
    use StringPaiementDepartLeTrait;
    use StringPaiementLeTrait;
    use IntPaiementNombreDeJoursTrait;
    use StringRibTrait;
    use StringReferencePieceTrait;
    use FloatRemiseLigne1Trait;
    use FloatRemiseLigne2Trait;
    use FloatRemiseLigne3Trait;
    use FloatRemisePiedTrait;
    use FloatRemisePied2Trait;
    use FloatRemisePied3Trait;
    use BoolSoumisEscompteTrait;
    use FloatTauxEscompteTrait;
    use StringTransporteurTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
