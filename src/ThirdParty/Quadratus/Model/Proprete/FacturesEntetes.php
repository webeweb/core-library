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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolDateLimiteForceeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolEcheanceForceeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolFactureEurosTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolFactureVmTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolSaisirAdresseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolSoumisEscompteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolSoumisTaxeDeeeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateEcheanceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateFactureTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateLimiteResiliationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantAcompteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantHtpxTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantHtvmTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMontantTtcTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTauxDeviseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTauxEscompteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTauxRemise1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatTauxRemise2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntEcheanceNbJoursTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumeroPjTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNumMandatTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAdIntBtqTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAdIntBureauDistributeurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAdIntCodePaysTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAdIntCodePostalTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAdIntComplementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAdIntNomTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAdIntNomVoieTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAdIntNumVoieTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringBtqTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringBureauDistributeurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCiviliteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeAffaireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeAnalClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeChantierTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeClientFactTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeDeviseTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeFactorTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeLangueDesignationArticleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeModeReglementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodePaysTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodePostalTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeRegroupementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeRepresentantTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTvaClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeVentilClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringComplementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEcheanceDepartTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEcheanceLeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEtatTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringFonctionCommercialTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringInterlocuteurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLibelleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLibelleTransfCptaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLibTransfCptaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLienDocDossCptaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLienDocumentTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringMentionLibreTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNombreEcheancesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomSuite2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomSuite3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomSuiteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomVoieTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroCommandeWebFtTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroCompteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroDevisTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroFactureTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumVoieTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringPrestationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringReference1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringReference2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringReference3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringReference4Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRumTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringValeurIcsTrait;

/**
 * Factures entetes.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class FacturesEntetes {

    use StringAdIntBtqTrait;
    use StringAdIntBureauDistributeurTrait;
    use StringAdIntCodePaysTrait;
    use StringAdIntCodePostalTrait;
    use StringAdIntComplementTrait;
    use StringAdIntNomTrait;
    use StringAdIntNomVoieTrait;
    use StringAdIntNumVoieTrait;
    use StringBtqTrait;
    use StringBureauDistributeurTrait;
    use StringCiviliteTrait;
    use StringCodeAffaireTrait;
    use StringCodeAnalClientTrait;
    use StringCodeChantierTrait;
    use StringCodeClientTrait;
    use StringCodeClientFactTrait;
    use StringCodeDeviseTrait;
    use StringCodeFactorTrait;
    use StringCodeLangueDesignationArticleTrait;
    use StringCodeModeReglementTrait;
    use StringCodePaysTrait;
    use StringCodePostalTrait;
    use StringCodeRegroupementTrait;
    use StringCodeRepresentantTrait;
    use StringCodeTvaClientTrait;
    use StringCodeVentilClientTrait;
    use StringComplementTrait;
    use DateTimeDateEcheanceTrait;
    use DateTimeDateFactureTrait;
    use BoolDateLimiteForceeTrait;
    use DateTimeDateLimiteResiliationTrait;
    use StringEcheanceDepartTrait;
    use BoolEcheanceForceeTrait;
    use StringEcheanceLeTrait;
    use IntEcheanceNbJoursTrait;
    use StringEtatTrait;
    use BoolFactureEurosTrait;
    use BoolFactureVmTrait;
    use StringFonctionCommercialTrait;
    use StringInterlocuteurTrait;
    use StringLibTransfCptaTrait;
    use StringLibelleTrait;
    use StringLibelleTransfCptaTrait;
    use StringLienDocDossCptaTrait;
    use StringLienDocumentTrait;
    use StringMentionLibreTrait;
    use FloatMontantAcompteTrait;
    use FloatMontantHtpxTrait;
    use FloatMontantHtvmTrait;
    use FloatMontantTtcTrait;
    use StringNomClientTrait;
    use StringNomSuiteTrait;
    use StringNomSuite2Trait;
    use StringNomSuite3Trait;
    use StringNomVoieTrait;
    use StringNombreEcheancesTrait;
    use IntNumMandatTrait;
    use StringNumVoieTrait;
    use StringNumeroCommandeWebFtTrait;
    use StringNumeroCompteTrait;
    use StringNumeroDevisTrait;
    use StringNumeroFactureTrait;
    use IntNumeroPjTrait;
    use StringPrestationTrait;
    use StringRumTrait;
    use StringReference1Trait;
    use StringReference2Trait;
    use StringReference3Trait;
    use StringReference4Trait;
    use BoolSaisirAdresseTrait;
    use BoolSoumisEscompteTrait;
    use BoolSoumisTaxeDeeeTrait;
    use FloatTauxDeviseTrait;
    use FloatTauxEscompteTrait;
    use FloatTauxRemise1Trait;
    use FloatTauxRemise2Trait;
    use StringValeurIcsTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
