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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolActifTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolBloqueTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolClientPerduTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolEcheanceFinDecadeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolFactureEurosTrait;
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
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbBlTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbFactureTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntPaiementNombreDeJoursTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntTypeFactureTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCleAlphaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeAnalytiqueTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeClientFactTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeDeviseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeLangueDesignationArticleTrait;
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
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRibTrait;

/**
 * Groupes client.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class GroupesClient {

    use BoolActifTrait;
    use BoolBloqueTrait;
    use StringCleAlphaTrait;
    use BoolClientPerduTrait;
    use StringCodeAnalytiqueTrait;
    use StringCodeClientTrait;
    use StringCodeClientFactTrait;
    use StringCodeDeviseTrait;
    use StringCodeLangueDesignationArticleTrait;
    use StringCodeReglementTrait;
    use StringCodeTvaTrait;
    use StringCodeVentilComptaTrait;
    use StringCollectifTrait;
    use DateTimeDateEntreeTrait;
    use DateTimeDateSortieTrait;
    use StringDomiciliationBancaire1Trait;
    use StringDomiciliationBancaire2Trait;
    use BoolEcheanceFinDecadeTrait;
    use BoolFactureEurosTrait;
    use StringGroupeTrait;
    use IntNbBlTrait;
    use IntNbFactureTrait;
    use StringNombreEcheancesTrait;
    use StringNumeroCompteTrait;
    use StringPaiementDepartLeTrait;
    use StringPaiementLeTrait;
    use IntPaiementNombreDeJoursTrait;
    use StringRibTrait;
    use FloatRemiseLigne1Trait;
    use FloatRemiseLigne2Trait;
    use FloatRemiseLigne3Trait;
    use FloatRemisePiedTrait;
    use FloatRemisePied2Trait;
    use FloatRemisePied3Trait;
    use BoolSoumisEscompteTrait;
    use FloatTauxEscompteTrait;
    use IntTypeFactureTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
