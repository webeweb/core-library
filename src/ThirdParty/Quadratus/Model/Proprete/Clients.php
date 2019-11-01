<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete;

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolActifTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolBloqueTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolFactureEurosTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolProspectTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolSoumisEscompteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateCreatTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateEntreeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateModifTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateSortieTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatRemiseLigne1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatRemiseLigne2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatRemiseLigne3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatRemisePied1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatRemisePied2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatRemisePied3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTauxEscompteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntCollectifComptableTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntDerniereAnneeFactureeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntEcheanceDepartTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntEcheanceLeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntEcheanceNbJoursTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbBlTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbFactureTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNombreEcheancesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntPremiereAnneeFactureeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntTypeFactureTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCleAlphaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeAnalytiqueTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeCategorieClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeClientFactTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeDepotTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeDeviseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeFamilleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeGeoTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeLangueDesignationArticleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeModeReglementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeOrigineTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeRegroupementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeRepresentantTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeRevisionTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeSousFamilleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeSousTourneeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTourneeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTvaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeVentilComptaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCommentaireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDomiciliationBancaire1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDomiciliationBancaire2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringIdTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumCptCollectifTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumCptComptableTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRibTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTransporteurTrait;

/**
 * Clients.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class Clients {

    use BoolActifTrait;
    use BoolBloqueTrait;
    use StringCleAlphaTrait;
    use StringCodeAnalytiqueTrait;
    use StringCodeCategorieClientTrait;
    use StringCodeClientFactTrait;
    use StringCodeDepotTrait;
    use StringCodeDeviseTrait;
    use StringCodeFamilleTrait;
    use StringCodeGeoTrait;
    use StringCodeLangueDesignationArticleTrait;
    use StringCodeModeReglementTrait;
    use StringCodeOrigineTrait;
    use StringCodeRegroupementTrait;
    use StringCodeRepresentantTrait;
    use StringCodeRevisionTrait;
    use StringCodeSousFamilleTrait;
    use StringCodeSousTourneeTrait;
    use StringCodeTvaTrait;
    use StringCodeTourneeTrait;
    use StringCodeVentilComptaTrait;
    use IntCollectifComptableTrait;
    use StringCommentaireTrait;
    use DateTimeDateCreatTrait;
    use DateTimeDateEntreeTrait;
    use DateTimeDateModifTrait;
    use DateTimeDateSortieTrait;
    use IntDerniereAnneeFactureeTrait;
    use StringDomiciliationBancaire1Trait;
    use StringDomiciliationBancaire2Trait;
    use IntEcheanceDepartTrait;
    use IntEcheanceLeTrait;
    use IntEcheanceNbJoursTrait;
    use BoolFactureEurosTrait;
    use StringIdTrait;
    use IntNbBlTrait;
    use IntNbFactureTrait;
    use IntNombreEcheancesTrait;
    use StringNumCptCollectifTrait;
    use StringNumCptComptableTrait;
    use IntPremiereAnneeFactureeTrait;
    use BoolProspectTrait;
    use StringRibTrait;
    use FloatRemiseLigne1Trait;
    use FloatRemiseLigne2Trait;
    use FloatRemiseLigne3Trait;
    use FloatRemisePied1Trait;
    use FloatRemisePied2Trait;
    use FloatRemisePied3Trait;
    use BoolSoumisEscompteTrait;
    use FloatTauxEscompteTrait;
    use StringTransporteurTrait;
    use IntTypeFactureTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
