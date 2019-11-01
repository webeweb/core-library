<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta;

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolAppliquerRegroupementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolEditerEnCfaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolLibellePlusDe30CaracTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolLienSaiImmosTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolPublicationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolRelanceAdresseCptTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\BoolUtiliseQuantite2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateCalculProvCpTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDatePublicationTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateRazEcrituresTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDsDateRetourTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDsDateSortieTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeRffDateLotEcrTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatDads1LivrePaieTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatDads1PaieTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatDads1RemuMoinsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatDads1RemuPlusTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatEcartMaxiLettrageAutoTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatEcartMiniCtrlTvaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbJourBaseCpTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatProvMiniTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatRffDecouvertsAvancesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatRffInteretsEmpruntsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatRffLimiteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatRffMttRegulTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatRffMttRffTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntCombiLettrageAutoTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntDiffLettrageFolioTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntIncrementCompteAutoTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntLongueurPieceLettrageTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbComptesRazTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbEcrAFacturerClotureTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntNbEcrituresRazTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntPositionPieceLettrageTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntProchainLotEcritTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntProchainLotFactorTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntProchainNumEcrEcoTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntProchainNumLotVmpTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntQimg2CptEncoursTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntQimg2CptEnvoiTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntRffNumLotEcrTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntRffTypeTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringAnneeRecolteTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCcaMemoTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringClasse4ClientDebutTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringClasse4ClientFinTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringClasse4FrnDebutTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringClasse4FrnFinTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodifClasse0SeuleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodifClasse0Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodifClasse9SeuleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodifClasse9Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCollectifClientDebutTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCollectifClientDefautTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCollectifClientFinTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCollectifFrnDebutTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCollectifFrnDefautTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCollectifFrnFinTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCollectifSocDebutTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCollectifSocFinTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCommentaireDossierTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringControlSalaireCptExTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringControlSalaireObsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDernierCompteClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDernierCompteFrnTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDiffLettrageCodeJournalTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDiffLettrageCodeLibelleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDiffLettrageGainsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDiffLettrageLibelleTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDiffLettragePertesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringDsCodeCollabTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEtatProvCpObsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringFaireControleLettrageTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNbDecimalesMtTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNivRuptClasse0Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNivRuptClasse1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNivRuptClasse2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNivRuptClasse3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNivRuptClasse4Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNivRuptClasse5Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNivRuptClasse6Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNivRuptClasse7Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNivRuptClasse8Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNivRuptClasse9Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringProvCpCptBrutTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringProvCpCptCapChTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringProvCpCptCapcpTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringProvCpCptChargesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRappDads1ObsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRffCptExploitantTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRffCptInteretsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringRffCptRegulTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTexteRelance0Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTexteRelance1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTexteRelance2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTexteRelance3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTexteRelance4Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTresoComptesAExclureTrait;

/**
 * Dossier2.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class Dossier2 {

    use StringAnneeRecolteTrait;
    use BoolAppliquerRegroupementTrait;
    use StringCcaMemoTrait;
    use StringClasse4ClientDebutTrait;
    use StringClasse4ClientFinTrait;
    use StringClasse4FrnDebutTrait;
    use StringClasse4FrnFinTrait;
    use StringCodifClasse0Trait;
    use StringCodifClasse0SeuleTrait;
    use StringCodifClasse9Trait;
    use StringCodifClasse9SeuleTrait;
    use StringCollectifClientDebutTrait;
    use StringCollectifClientDefautTrait;
    use StringCollectifClientFinTrait;
    use StringCollectifFrnDebutTrait;
    use StringCollectifFrnDefautTrait;
    use StringCollectifFrnFinTrait;
    use StringCollectifSocDebutTrait;
    use StringCollectifSocFinTrait;
    use IntCombiLettrageAutoTrait;
    use StringCommentaireDossierTrait;
    use StringControlSalaireCptExTrait;
    use StringControlSalaireObsTrait;
    use FloatDads1LivrePaieTrait;
    use FloatDads1PaieTrait;
    use FloatDads1RemuMoinsTrait;
    use FloatDads1RemuPlusTrait;
    use StringDsCodeCollabTrait;
    use DateTimeDsDateRetourTrait;
    use DateTimeDsDateSortieTrait;
    use DateTimeDateCalculProvCpTrait;
    use DateTimeDatePublicationTrait;
    use DateTimeDateRazEcrituresTrait;
    use StringDernierCompteClientTrait;
    use StringDernierCompteFrnTrait;
    use StringDiffLettrageCodeJournalTrait;
    use StringDiffLettrageCodeLibelleTrait;
    use IntDiffLettrageFolioTrait;
    use StringDiffLettrageGainsTrait;
    use StringDiffLettrageLibelleTrait;
    use StringDiffLettragePertesTrait;
    use FloatEcartMaxiLettrageAutoTrait;
    use FloatEcartMiniCtrlTvaTrait;
    use BoolEditerEnCfaTrait;
    use StringEtatProvCpObsTrait;
    use StringFaireControleLettrageTrait;
    use IntIncrementCompteAutoTrait;
    use BoolLibellePlusDe30CaracTrait;
    use BoolLienSaiImmosTrait;
    use IntLongueurPieceLettrageTrait;
    use IntNbComptesRazTrait;
    use StringNbDecimalesMtTrait;
    use IntNbEcrAFacturerClotureTrait;
    use IntNbEcrituresRazTrait;
    use FloatNbJourBaseCpTrait;
    use StringNivRuptClasse0Trait;
    use StringNivRuptClasse1Trait;
    use StringNivRuptClasse2Trait;
    use StringNivRuptClasse3Trait;
    use StringNivRuptClasse4Trait;
    use StringNivRuptClasse5Trait;
    use StringNivRuptClasse6Trait;
    use StringNivRuptClasse7Trait;
    use StringNivRuptClasse8Trait;
    use StringNivRuptClasse9Trait;
    use IntPositionPieceLettrageTrait;
    use IntProchainLotEcritTrait;
    use IntProchainLotFactorTrait;
    use IntProchainNumEcrEcoTrait;
    use IntProchainNumLotVmpTrait;
    use StringProvCpCptBrutTrait;
    use StringProvCpCptCapcpTrait;
    use StringProvCpCptCapChTrait;
    use StringProvCpCptChargesTrait;
    use FloatProvMiniTrait;
    use BoolPublicationTrait;
    use IntQimg2CptEncoursTrait;
    use IntQimg2CptEnvoiTrait;
    use StringRffCptExploitantTrait;
    use StringRffCptInteretsTrait;
    use StringRffCptRegulTrait;
    use DateTimeRffDateLotEcrTrait;
    use FloatRffDecouvertsAvancesTrait;
    use FloatRffInteretsEmpruntsTrait;
    use FloatRffLimiteTrait;
    use FloatRffMttRffTrait;
    use FloatRffMttRegulTrait;
    use IntRffNumLotEcrTrait;
    use IntRffTypeTrait;
    use StringRappDads1ObsTrait;
    use BoolRelanceAdresseCptTrait;
    use StringTexteRelance0Trait;
    use StringTexteRelance1Trait;
    use StringTexteRelance2Trait;
    use StringTexteRelance3Trait;
    use StringTexteRelance4Trait;
    use StringTresoComptesAExclureTrait;
    use BoolUtiliseQuantite2Trait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
