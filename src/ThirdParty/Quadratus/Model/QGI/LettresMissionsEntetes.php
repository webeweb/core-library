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

use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateEntretienTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDateSignatureTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeDebutMissionTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\DateTimeFinMissionTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatCaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatHonoPrevTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbrActesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbrBulletinsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbrEcrituresBqTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbrEcrituresDepensesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbrEcrituresOdTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbrEcrituresRecettesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatNbrEmployesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatPrix1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatPrix2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatPrix3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatPrix4Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatPrix5Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatPrix6Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\FloatPrix7Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\IntPremierExerciceTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeClientTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringCodeRegroupementTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringComment1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringComment2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringComment3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringComment4Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringComment5Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringComment6Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringComment7Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringEtatTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringExerciceCourantTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLibelle1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLibelle2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLibelle3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLibelle4Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLibelle5Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLibelle6Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringLibelle7Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNbDeplacementsTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringNumeroLettreTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringPolice1Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringPolice2Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringPolice3Trait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeActionnairesAssociesTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeCaTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeMissionTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeSystemeInfoTrait;
use WBW\Library\Core\ThirdParty\Quadratus\Attribute\StringTypeVolumeTrait;

/**
 * Lettres missions entetes.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class LettresMissionsEntetes {

    use FloatCaTrait;
    use StringCodeClientTrait;
    use StringCodeRegroupementTrait;
    use StringComment1Trait;
    use StringComment2Trait;
    use StringComment3Trait;
    use StringComment4Trait;
    use StringComment5Trait;
    use StringComment6Trait;
    use StringComment7Trait;
    use DateTimeDateEntretienTrait;
    use DateTimeDateSignatureTrait;
    use DateTimeDebutMissionTrait;
    use StringEtatTrait;
    use StringExerciceCourantTrait;
    use DateTimeFinMissionTrait;
    use FloatHonoPrevTrait;
    use StringLibelle1Trait;
    use StringLibelle2Trait;
    use StringLibelle3Trait;
    use StringLibelle4Trait;
    use StringLibelle5Trait;
    use StringLibelle6Trait;
    use StringLibelle7Trait;
    use StringNbDeplacementsTrait;
    use FloatNbrActesTrait;
    use FloatNbrBulletinsTrait;
    use FloatNbrEcrituresBqTrait;
    use FloatNbrEcrituresDepensesTrait;
    use FloatNbrEcrituresOdTrait;
    use FloatNbrEcrituresRecettesTrait;
    use FloatNbrEmployesTrait;
    use StringNumeroLettreTrait;
    use StringPolice1Trait;
    use StringPolice2Trait;
    use StringPolice3Trait;
    use IntPremierExerciceTrait;
    use FloatPrix1Trait;
    use FloatPrix2Trait;
    use FloatPrix3Trait;
    use FloatPrix4Trait;
    use FloatPrix5Trait;
    use FloatPrix6Trait;
    use FloatPrix7Trait;
    use StringTypeActionnairesAssociesTrait;
    use StringTypeCaTrait;
    use StringTypeMissionTrait;
    use StringTypeSystemeInfoTrait;
    use StringTypeVolumeTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }
}
