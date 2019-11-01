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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolIndemnAutreTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolIndemnLegaleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolIndemnLicTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolIndemnSuppTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolLienParenteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolPreavisNonEffectuePayeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolStatutCadreTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateNaissanceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateNotificationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDatePaiementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDtDebPreavisEffectueTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDtDebPreavisNonEffectueTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDtDebutEmploiTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDtDernJourTravTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDtFinEmploiTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDtFinPreavisEffectueTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDtFinPreavisNonEffectueTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePeriodeEmploiDebTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimePeriodeEmploiFinTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeSignDateTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMtIndemnAutreTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMtIndemnLegaleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMtIndemnLicTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMtIndemnSuppTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatMtSalaireBrutTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbHeureMensTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntCodeEtablissementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntEtblEffectifTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntSignQualiteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntStatutParticulierTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntTypeContratTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntTypeHoraireTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAdresseEmployeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAutreContratTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAutreStatutTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeMotifRuptureTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodePostalTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDernierEmploiTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDernLieuTravailTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEtblAdrTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEtblCacmTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEtblFaxTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEtblMailTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEtblNafTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEtblSiretTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEtblTelTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLienDocumentTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringMotifPreavisNonPayeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringMotifRuptureTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNiveauQualifTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNoCacmTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNoCssmTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomMaritalTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomNaissanceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroAttestationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroEmployeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringOrganismeCacmTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringPrenomTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringSignAutreTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringSignFormJuridiqueTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringSignMotifRuptureTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringSignNomTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringSignPrenomTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringSignRaisonSocialeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringStatutJuridiqueTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTitreLienParenteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTitreTrait;

/**
 * Attestation cacm.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class AttestationCacm {

    use StringAdresseEmployeTrait;
    use StringAutreContratTrait;
    use StringAutreStatutTrait;
    use IntCodeEtablissementTrait;
    use StringCodeMotifRuptureTrait;
    use StringCodePostalTrait;
    use DateTimeDateNaissanceTrait;
    use DateTimeDateNotificationTrait;
    use DateTimeDatePaiementTrait;
    use StringDernLieuTravailTrait;
    use StringDernierEmploiTrait;
    use DateTimeDtDebPreavisEffectueTrait;
    use DateTimeDtDebPreavisNonEffectueTrait;
    use DateTimeDtDebutEmploiTrait;
    use DateTimeDtDernJourTravTrait;
    use DateTimeDtFinEmploiTrait;
    use DateTimeDtFinPreavisEffectueTrait;
    use DateTimeDtFinPreavisNonEffectueTrait;
    use StringEtblAdrTrait;
    use StringEtblCacmTrait;
    use IntEtblEffectifTrait;
    use StringEtblFaxTrait;
    use StringEtblMailTrait;
    use StringEtblNafTrait;
    use StringEtblSiretTrait;
    use StringEtblTelTrait;
    use BoolIndemnAutreTrait;
    use BoolIndemnLegaleTrait;
    use BoolIndemnLicTrait;
    use BoolIndemnSuppTrait;
    use StringLienDocumentTrait;
    use BoolLienParenteTrait;
    use StringMotifPreavisNonPayeTrait;
    use StringMotifRuptureTrait;
    use FloatMtIndemnAutreTrait;
    use FloatMtIndemnLegaleTrait;
    use FloatMtIndemnLicTrait;
    use FloatMtIndemnSuppTrait;
    use FloatMtSalaireBrutTrait;
    use FloatNbHeureMensTrait;
    use StringNiveauQualifTrait;
    use StringNoCacmTrait;
    use StringNoCssmTrait;
    use StringNomMaritalTrait;
    use StringNomNaissanceTrait;
    use StringNumeroAttestationTrait;
    use StringNumeroEmployeTrait;
    use StringOrganismeCacmTrait;
    use DateTimePeriodeEmploiDebTrait;
    use DateTimePeriodeEmploiFinTrait;
    use BoolPreavisNonEffectuePayeTrait;
    use StringPrenomTrait;
    use StringSignAutreTrait;
    use DateTimeSignDateTrait;
    use StringSignFormJuridiqueTrait;
    use StringSignMotifRuptureTrait;
    use StringSignNomTrait;
    use StringSignPrenomTrait;
    use IntSignQualiteTrait;
    use StringSignRaisonSocialeTrait;
    use BoolStatutCadreTrait;
    use StringStatutJuridiqueTrait;
    use IntStatutParticulierTrait;
    use StringTitreTrait;
    use StringTitreLienParenteTrait;
    use IntTypeContratTrait;
    use IntTypeHoraireTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
