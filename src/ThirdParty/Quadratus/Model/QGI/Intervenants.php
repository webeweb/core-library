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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolAutoriserAccesInternetTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolGestJuriTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolPersonnePhysiqueTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolTravailADomicileTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeCreationSocieteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateCreatTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateDebActiviteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateDivorceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateInstallationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateMariageTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateModifTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateNaissanceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeInscriptionRcTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeInscriptionRmTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCapitalTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbKmTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntCompteurLiensTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNombreActionsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAdresseSiteClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAdresseTranspacTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAgeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringBicTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringBtq2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringBtqTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringBureauDistributeur2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringBureauDistributeurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCapitalMonnaieTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCategorieJuridiqueTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCiviliteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeEpouxTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeInseeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeNaf2008Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeNafTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeOfficielCommune2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeOfficielCommuneTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodePaysIsoNaissTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodePaysIsoTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodePostal2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodePostalMariageTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodePostalNaissanceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodePostalRcTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodePostalRmTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodePostalTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeResponsableTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringComplement2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringComplementSuiteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringComplementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringContactTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDonneesAppelTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDroitCollabVisuDocumentsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDureeSocieteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEmail2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEmailTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEnseigneTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringFax2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringFaxTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringFrpCleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringFrpDossierTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringFrpRecetteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringIbanTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringIdentifiantInternetTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringIdentifiantTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringIdentTvaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringIsClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringIsFournisseurTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringMdpInternetTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringMissionPrincipaleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNationaliteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNbEnfantsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNie1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNie2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNirTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomMaritalTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomMereTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomPereTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomSuiteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomVille2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomVilleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomVoie2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNomVoieTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumAgrementCgaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumVoie2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumVoieTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringPaysNaissanceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringPaysTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringPortable12Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringPortable1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringPortable22Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringPortable2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringPrenomTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringQualiteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRcCodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRcTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRegimeMatrimonialeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRegimeMatrimonialTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRibTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRmCodeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRmTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringSalarieIndependantTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringSiretTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringSituationFamTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTel12Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTel1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTel22Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTel2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTelex2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTelexTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTelVoiture2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTelVoitureTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeSocieteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringVilleMariageTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringVilleNaissanceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringVilleRcTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringVilleRmTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringZipCodeTrait;

/**
 * Intervenants.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class Intervenants {

    use StringAdresseSiteClientTrait;
    use StringAdresseTranspacTrait;
    use StringAgeTrait;
    use BoolAutoriserAccesInternetTrait;
    use StringBicTrait;
    use StringBtqTrait;
    use StringBtq2Trait;
    use StringBureauDistributeurTrait;
    use StringBureauDistributeur2Trait;
    use FloatCapitalTrait;
    use StringCapitalMonnaieTrait;
    use StringCategorieJuridiqueTrait;
    use StringCiviliteTrait;
    use StringCodeTrait;
    use StringCodeEpouxTrait;
    use StringCodeInseeTrait;
    use StringCodeNafTrait;
    use StringCodeNaf2008Trait;
    use StringCodeOfficielCommuneTrait;
    use StringCodeOfficielCommune2Trait;
    use StringCodePaysIsoTrait;
    use StringCodePaysIsoNaissTrait;
    use StringCodePostalTrait;
    use StringCodePostal2Trait;
    use StringCodePostalMariageTrait;
    use StringCodePostalNaissanceTrait;
    use StringCodePostalRcTrait;
    use StringCodePostalRmTrait;
    use StringCodeResponsableTrait;
    use StringComplementTrait;
    use StringComplement2Trait;
    use StringComplementSuiteTrait;
    use IntCompteurLiensTrait;
    use StringContactTrait;
    use DateTimeCreationSocieteTrait;
    use DateTimeDateCreatTrait;
    use DateTimeDateDebActiviteTrait;
    use DateTimeDateDivorceTrait;
    use DateTimeDateInstallationTrait;
    use DateTimeDateMariageTrait;
    use DateTimeDateModifTrait;
    use DateTimeDateNaissanceTrait;
    use StringDonneesAppelTrait;
    use StringDroitCollabVisuDocumentsTrait;
    use StringDureeSocieteTrait;
    use StringEmailTrait;
    use StringEmail2Trait;
    use StringEnseigneTrait;
    use StringFrpCleTrait;
    use StringFrpDossierTrait;
    use StringFrpRecetteTrait;
    use StringFaxTrait;
    use StringFax2Trait;
    use BoolGestJuriTrait;
    use StringIbanTrait;
    use StringIdentTvaTrait;
    use StringIdentifiantTrait;
    use StringIdentifiantInternetTrait;
    use DateTimeInscriptionRcTrait;
    use DateTimeInscriptionRmTrait;
    use StringIsClientTrait;
    use StringIsFournisseurTrait;
    use StringMdpInternetTrait;
    use StringMissionPrincipaleTrait;
    use StringNie1Trait;
    use StringNie2Trait;
    use StringNirTrait;
    use StringNationaliteTrait;
    use StringNbEnfantsTrait;
    use FloatNbKmTrait;
    use StringNomTrait;
    use StringNomMaritalTrait;
    use StringNomMereTrait;
    use StringNomPereTrait;
    use StringNomSuiteTrait;
    use StringNomVilleTrait;
    use StringNomVille2Trait;
    use StringNomVoieTrait;
    use StringNomVoie2Trait;
    use IntNombreActionsTrait;
    use StringNumAgrementCgaTrait;
    use StringNumVoieTrait;
    use StringNumVoie2Trait;
    use StringPaysTrait;
    use StringPaysNaissanceTrait;
    use BoolPersonnePhysiqueTrait;
    use StringPortable1Trait;
    use StringPortable12Trait;
    use StringPortable2Trait;
    use StringPortable22Trait;
    use StringPrenomTrait;
    use StringQualiteTrait;
    use StringRcTrait;
    use StringRcCodeTrait;
    use StringRibTrait;
    use StringRmTrait;
    use StringRmCodeTrait;
    use StringRegimeMatrimonialTrait;
    use StringRegimeMatrimonialeTrait;
    use StringSalarieIndependantTrait;
    use StringSiretTrait;
    use StringSituationFamTrait;
    use StringTel1Trait;
    use StringTel12Trait;
    use StringTel2Trait;
    use StringTel22Trait;
    use StringTelVoitureTrait;
    use StringTelVoiture2Trait;
    use StringTelexTrait;
    use StringTelex2Trait;
    use BoolTravailADomicileTrait;
    use StringTypeTrait;
    use StringTypeSocieteTrait;
    use StringVilleMariageTrait;
    use StringVilleNaissanceTrait;
    use StringVilleRcTrait;
    use StringVilleRmTrait;
    use StringZipCodeTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
