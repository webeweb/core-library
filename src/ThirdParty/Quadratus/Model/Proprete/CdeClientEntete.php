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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolEcheanceForceeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolFactureEurosTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolSaisirAdresseLivraisonTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolSaisirAdresseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolSoumisEscompteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolSoumisTaxe1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolSoumisTaxe2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolSoumisTaxe3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateCreationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateEcheanceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateModificationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDatePieceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateReceptionPrevueTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantAcompteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatPoidsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatRemisePied2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatRemisePied3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatRemisePiedTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTauxCommissionTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTauxDeviseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTxEscompteVenteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntEditionTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbColisTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNombreEcheancesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumeroPjTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntPaiementDepartLeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntPaiementLeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntPaiementNombreDeJoursTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntTransfertTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringBtq2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringBtqTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringBureauDistributeur2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringBureauDistributeurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeAffaireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeChantierTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeDeviseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeOfficielCommune2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeOfficielCommuneTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodePostal2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodePostalTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeReglementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeRegroupementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeRepresentantTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTvaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeVentilComptaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringComplement2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringComplementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNom2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomSuite2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomSuiteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomVille2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomVilleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomVoie2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomVoieTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNoPieceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumVoie2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumVoieTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringReference1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringReference2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringReference3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringReference4Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTransporteurTrait;

/**
 * Cde client entete.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class CdeClientEntete {

    use StringBtqTrait;
    use StringBtq2Trait;
    use StringBureauDistributeurTrait;
    use StringBureauDistributeur2Trait;
    use StringCodeAffaireTrait;
    use StringCodeChantierTrait;
    use StringCodeClientTrait;
    use StringCodeDeviseTrait;
    use StringCodeOfficielCommuneTrait;
    use StringCodeOfficielCommune2Trait;
    use StringCodePostalTrait;
    use StringCodePostal2Trait;
    use StringCodeReglementTrait;
    use StringCodeRegroupementTrait;
    use StringCodeRepresentantTrait;
    use StringCodeTvaTrait;
    use StringCodeVentilComptaTrait;
    use StringComplementTrait;
    use StringComplement2Trait;
    use DateTimeDateCreationTrait;
    use DateTimeDateEcheanceTrait;
    use DateTimeDateModificationTrait;
    use DateTimeDatePieceTrait;
    use DateTimeDateReceptionPrevueTrait;
    use BoolEcheanceForceeTrait;
    use IntEditionTrait;
    use BoolFactureEurosTrait;
    use FloatMontantAcompteTrait;
    use IntNbColisTrait;
    use StringNoPieceTrait;
    use StringNomTrait;
    use StringNom2Trait;
    use StringNomSuiteTrait;
    use StringNomSuite2Trait;
    use StringNomVilleTrait;
    use StringNomVille2Trait;
    use StringNomVoieTrait;
    use StringNomVoie2Trait;
    use IntNombreEcheancesTrait;
    use StringNumVoieTrait;
    use StringNumVoie2Trait;
    use IntNumeroPjTrait;
    use IntPaiementDepartLeTrait;
    use IntPaiementLeTrait;
    use IntPaiementNombreDeJoursTrait;
    use FloatPoidsTrait;
    use StringReference1Trait;
    use StringReference2Trait;
    use StringReference3Trait;
    use StringReference4Trait;
    use FloatRemisePiedTrait;
    use FloatRemisePied2Trait;
    use FloatRemisePied3Trait;
    use BoolSaisirAdresseTrait;
    use BoolSaisirAdresseLivraisonTrait;
    use BoolSoumisEscompteTrait;
    use BoolSoumisTaxe1Trait;
    use BoolSoumisTaxe2Trait;
    use BoolSoumisTaxe3Trait;
    use FloatTauxCommissionTrait;
    use FloatTauxDeviseTrait;
    use IntTransfertTrait;
    use StringTransporteurTrait;
    use FloatTxEscompteVenteTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
