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

use DateTime;

/**
 * Dec tva3514.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class DecTva3514 {

    /**
     * 02 base ht196.
     *
     * @var float
     */
    private $_02BaseHt196;

    /**
     * 02 taxe due196.
     *
     * @var float
     */
    private $_02TaxeDue196;

    /**
     * 03 base ht55.
     *
     * @var float
     */
    private $_03BaseHt55;

    /**
     * 03 taxe due55.
     *
     * @var float
     */
    private $_03TaxeDue55;

    /**
     * 04 base ht85.
     *
     * @var float
     */
    private $_04BaseHt85;

    /**
     * 04 taxe due85.
     *
     * @var float
     */
    private $_04TaxeDue85;

    /**
     * 05 base ht21.
     *
     * @var float
     */
    private $_05BaseHt21;

    /**
     * 05 taxe due21.
     *
     * @var float
     */
    private $_05TaxeDue21;

    /**
     * 06 base ht anc taux.
     *
     * @var float
     */
    private $_06BaseHtAncTaux;

    /**
     * 06 taxe due anc taux.
     *
     * @var float
     */
    private $_06TaxeDueAncTaux;

    /**
     * 07 base ht taux part.
     *
     * @var float
     */
    private $_07BaseHtTauxPart;

    /**
     * 07 taxe due taux part.
     *
     * @var float
     */
    private $_07TaxeDueTauxPart;

    /**
     * 08 base httv aa reverser.
     *
     * @var float
     */
    private $_08BaseHttvAaReverser;

    /**
     * 08 taxe due tv aa reverser.
     *
     * @var float
     */
    private $_08TaxeDueTvAaReverser;

    /**
     * 09 total tva brute.
     *
     * @var float
     */
    private $_09TotalTvaBrute;

    /**
     * 10 biens immos.
     *
     * @var float
     */
    private $_10BiensImmos;

    /**
     * 11 autres biens.
     *
     * @var float
     */
    private $_11AutresBiens;

    /**
     * 12 omission.
     *
     * @var float
     */
    private $_12Omission;

    /**
     * 13 total tva deduc.
     *
     * @var float
     */
    private $_13TotalTvaDeduc;

    /**
     * 14 a.
     *
     * @var float
     */
    private $_14A;

    /**
     * 15 b.
     *
     * @var float
     */
    private $_15B;

    /**
     * 16 rembours tva.
     *
     * @var float
     */
    private $_16RemboursTva;

    /**
     * 18 credit tvaca12.
     *
     * @var float
     */
    private $_18CreditTvaca12;

    /**
     * 1 mtt augmentation.
     *
     * @var float
     */
    private $_1MttAugmentation;

    /**
     * 20 acompte ta1.
     *
     * @var float
     */
    private $_20AcompteTa1;

    /**
     * 20 acompte ta2.
     *
     * @var float
     */
    private $_20AcompteTa2;

    /**
     * 21 acompte tot1.
     *
     * @var float
     */
    private $_21AcompteTot1;

    /**
     * 21 acompte tot2.
     *
     * @var float
     */
    private $_21AcompteTot2;

    /**
     * 2 b base ht7.
     *
     * @var float
     */
    private $_2BBaseHt7;

    /**
     * 2 b taxe due7.
     *
     * @var float
     */
    private $_2BTaxeDue7;

    /**
     * 2 mtt credit prec.
     *
     * @var float
     */
    private $_2MttCreditPrec;

    /**
     * 2 mtt diminution.
     *
     * @var float
     */
    private $_2MttDiminution;

    /**
     * 3 mtt diminution.
     *
     * @var float
     */
    private $_3MttDiminution;

    /**
     * 3 suspension.
     *
     * @var int
     */
    private $_3Suspension;

    /**
     * 4 has diminution.
     *
     * @var bool
     */
    private $_4HasDiminution;

    /**
     * 4 mtt diminution.
     *
     * @var float
     */
    private $_4MttDiminution;

    /**
     * Acompte du.
     *
     * @var DateTime|null
     */
    private $acompteDu;

    /**
     * Date dec.
     *
     * @var DateTime|null
     */
    private $dateDec;

    /**
     * Date limite dec.
     *
     * @var DateTime|null
     */
    private $dateLimiteDec;

    /**
     * Det code ta.
     *
     * @var string
     */
    private $detCodeTa;

    /**
     * Det ta1.
     *
     * @var string
     */
    private $detTa1;

    /**
     * Det ta2.
     *
     * @var string
     */
    private $detTa2;

    /**
     * Det ta3.
     *
     * @var string
     */
    private $detTa3;

    /**
     * Det ta4.
     *
     * @var string
     */
    private $detTa4;

    /**
     * Exigible le.
     *
     * @var DateTime|null
     */
    private $exigibleLe;

    /**
     * Mtt a payer.
     *
     * @var float
     */
    private $mttAPayer;

    /**
     * Mtt det ta1.
     *
     * @var float
     */
    private $mttDetTa1;

    /**
     * Mtt det ta2.
     *
     * @var float
     */
    private $mttDetTa2;

    /**
     * Mtt det ta3.
     *
     * @var float
     */
    private $mttDetTa3;

    /**
     * Mtt det ta4.
     *
     * @var float
     */
    private $mttDetTa4;

    /**
     * Mtt dont taxes assim.
     *
     * @var float
     */
    private $mttDontTaxesAssim;

    /**
     * Mtt dont tva.
     *
     * @var float
     */
    private $mttDontTva;

    /**
     * Periode.
     *
     * @var DateTime|null
     */
    private $periode;

    /**
     * z0151.
     *
     * @var float
     */
    private $z0151;

    /**
     * z0207.
     *
     * @var float
     */
    private $z0207;

    /**
     * z ha.
     *
     * @var float
     */
    private $zHa;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the 02 base ht196.
     *
     * @return float Returns the 02 base ht196.
     */
    public function get02BaseHt196() {
        return $this->_02BaseHt196;
    }

    /**
     * Get the 02 taxe due196.
     *
     * @return float Returns the 02 taxe due196.
     */
    public function get02TaxeDue196() {
        return $this->_02TaxeDue196;
    }

    /**
     * Get the 03 base ht55.
     *
     * @return float Returns the 03 base ht55.
     */
    public function get03BaseHt55() {
        return $this->_03BaseHt55;
    }

    /**
     * Get the 03 taxe due55.
     *
     * @return float Returns the 03 taxe due55.
     */
    public function get03TaxeDue55() {
        return $this->_03TaxeDue55;
    }

    /**
     * Get the 04 base ht85.
     *
     * @return float Returns the 04 base ht85.
     */
    public function get04BaseHt85() {
        return $this->_04BaseHt85;
    }

    /**
     * Get the 04 taxe due85.
     *
     * @return float Returns the 04 taxe due85.
     */
    public function get04TaxeDue85() {
        return $this->_04TaxeDue85;
    }

    /**
     * Get the 05 base ht21.
     *
     * @return float Returns the 05 base ht21.
     */
    public function get05BaseHt21() {
        return $this->_05BaseHt21;
    }

    /**
     * Get the 05 taxe due21.
     *
     * @return float Returns the 05 taxe due21.
     */
    public function get05TaxeDue21() {
        return $this->_05TaxeDue21;
    }

    /**
     * Get the 06 base ht anc taux.
     *
     * @return float Returns the 06 base ht anc taux.
     */
    public function get06BaseHtAncTaux() {
        return $this->_06BaseHtAncTaux;
    }

    /**
     * Get the 06 taxe due anc taux.
     *
     * @return float Returns the 06 taxe due anc taux.
     */
    public function get06TaxeDueAncTaux() {
        return $this->_06TaxeDueAncTaux;
    }

    /**
     * Get the 07 base ht taux part.
     *
     * @return float Returns the 07 base ht taux part.
     */
    public function get07BaseHtTauxPart() {
        return $this->_07BaseHtTauxPart;
    }

    /**
     * Get the 07 taxe due taux part.
     *
     * @return float Returns the 07 taxe due taux part.
     */
    public function get07TaxeDueTauxPart() {
        return $this->_07TaxeDueTauxPart;
    }

    /**
     * Get the 08 base httv aa reverser.
     *
     * @return float Returns the 08 base httv aa reverser.
     */
    public function get08BaseHttvAaReverser() {
        return $this->_08BaseHttvAaReverser;
    }

    /**
     * Get the 08 taxe due tv aa reverser.
     *
     * @return float Returns the 08 taxe due tv aa reverser.
     */
    public function get08TaxeDueTvAaReverser() {
        return $this->_08TaxeDueTvAaReverser;
    }

    /**
     * Get the 09 total tva brute.
     *
     * @return float Returns the 09 total tva brute.
     */
    public function get09TotalTvaBrute() {
        return $this->_09TotalTvaBrute;
    }

    /**
     * Get the 10 biens immos.
     *
     * @return float Returns the 10 biens immos.
     */
    public function get10BiensImmos() {
        return $this->_10BiensImmos;
    }

    /**
     * Get the 11 autres biens.
     *
     * @return float Returns the 11 autres biens.
     */
    public function get11AutresBiens() {
        return $this->_11AutresBiens;
    }

    /**
     * Get the 12 omission.
     *
     * @return float Returns the 12 omission.
     */
    public function get12Omission() {
        return $this->_12Omission;
    }

    /**
     * Get the 13 total tva deduc.
     *
     * @return float Returns the 13 total tva deduc.
     */
    public function get13TotalTvaDeduc() {
        return $this->_13TotalTvaDeduc;
    }

    /**
     * Get the 14 a.
     *
     * @return float Returns the 14 a.
     */
    public function get14A() {
        return $this->_14A;
    }

    /**
     * Get the 15 b.
     *
     * @return float Returns the 15 b.
     */
    public function get15B() {
        return $this->_15B;
    }

    /**
     * Get the 16 rembours tva.
     *
     * @return float Returns the 16 rembours tva.
     */
    public function get16RemboursTva() {
        return $this->_16RemboursTva;
    }

    /**
     * Get the 18 credit tvaca12.
     *
     * @return float Returns the 18 credit tvaca12.
     */
    public function get18CreditTvaca12() {
        return $this->_18CreditTvaca12;
    }

    /**
     * Get the 1 mtt augmentation.
     *
     * @return float Returns the 1 mtt augmentation.
     */
    public function get1MttAugmentation() {
        return $this->_1MttAugmentation;
    }

    /**
     * Get the 20 acompte ta1.
     *
     * @return float Returns the 20 acompte ta1.
     */
    public function get20AcompteTa1() {
        return $this->_20AcompteTa1;
    }

    /**
     * Get the 20 acompte ta2.
     *
     * @return float Returns the 20 acompte ta2.
     */
    public function get20AcompteTa2() {
        return $this->_20AcompteTa2;
    }

    /**
     * Get the 21 acompte tot1.
     *
     * @return float Returns the 21 acompte tot1.
     */
    public function get21AcompteTot1() {
        return $this->_21AcompteTot1;
    }

    /**
     * Get the 21 acompte tot2.
     *
     * @return float Returns the 21 acompte tot2.
     */
    public function get21AcompteTot2() {
        return $this->_21AcompteTot2;
    }

    /**
     * Get the 2 b base ht7.
     *
     * @return float Returns the 2 b base ht7.
     */
    public function get2BBaseHt7() {
        return $this->_2BBaseHt7;
    }

    /**
     * Get the 2 b taxe due7.
     *
     * @return float Returns the 2 b taxe due7.
     */
    public function get2BTaxeDue7() {
        return $this->_2BTaxeDue7;
    }

    /**
     * Get the 2 mtt credit prec.
     *
     * @return float Returns the 2 mtt credit prec.
     */
    public function get2MttCreditPrec() {
        return $this->_2MttCreditPrec;
    }

    /**
     * Get the 2 mtt diminution.
     *
     * @return float Returns the 2 mtt diminution.
     */
    public function get2MttDiminution() {
        return $this->_2MttDiminution;
    }

    /**
     * Get the 3 mtt diminution.
     *
     * @return float Returns the 3 mtt diminution.
     */
    public function get3MttDiminution() {
        return $this->_3MttDiminution;
    }

    /**
     * Get the 3 suspension.
     *
     * @return int Returns the 3 suspension.
     */
    public function get3Suspension() {
        return $this->_3Suspension;
    }

    /**
     * Get the 4 has diminution.
     *
     * @return bool Returns the 4 has diminution.
     */
    public function get4HasDiminution() {
        return $this->_4HasDiminution;
    }

    /**
     * Get the 4 mtt diminution.
     *
     * @return float Returns the 4 mtt diminution.
     */
    public function get4MttDiminution() {
        return $this->_4MttDiminution;
    }

    /**
     * Get the acompte du.
     *
     * @return DateTime|null Returns the acompte du.
     */
    public function getAcompteDu() {
        return $this->acompteDu;
    }

    /**
     * Get the date dec.
     *
     * @return DateTime|null Returns the date dec.
     */
    public function getDateDec() {
        return $this->dateDec;
    }

    /**
     * Get the date limite dec.
     *
     * @return DateTime|null Returns the date limite dec.
     */
    public function getDateLimiteDec() {
        return $this->dateLimiteDec;
    }

    /**
     * Get the det code ta.
     *
     * @return string Returns the det code ta.
     */
    public function getDetCodeTa() {
        return $this->detCodeTa;
    }

    /**
     * Get the det ta1.
     *
     * @return string Returns the det ta1.
     */
    public function getDetTa1() {
        return $this->detTa1;
    }

    /**
     * Get the det ta2.
     *
     * @return string Returns the det ta2.
     */
    public function getDetTa2() {
        return $this->detTa2;
    }

    /**
     * Get the det ta3.
     *
     * @return string Returns the det ta3.
     */
    public function getDetTa3() {
        return $this->detTa3;
    }

    /**
     * Get the det ta4.
     *
     * @return string Returns the det ta4.
     */
    public function getDetTa4() {
        return $this->detTa4;
    }

    /**
     * Get the exigible le.
     *
     * @return DateTime|null Returns the exigible le.
     */
    public function getExigibleLe() {
        return $this->exigibleLe;
    }

    /**
     * Get the mtt a payer.
     *
     * @return float Returns the mtt a payer.
     */
    public function getMttAPayer() {
        return $this->mttAPayer;
    }

    /**
     * Get the mtt det ta1.
     *
     * @return float Returns the mtt det ta1.
     */
    public function getMttDetTa1() {
        return $this->mttDetTa1;
    }

    /**
     * Get the mtt det ta2.
     *
     * @return float Returns the mtt det ta2.
     */
    public function getMttDetTa2() {
        return $this->mttDetTa2;
    }

    /**
     * Get the mtt det ta3.
     *
     * @return float Returns the mtt det ta3.
     */
    public function getMttDetTa3() {
        return $this->mttDetTa3;
    }

    /**
     * Get the mtt det ta4.
     *
     * @return float Returns the mtt det ta4.
     */
    public function getMttDetTa4() {
        return $this->mttDetTa4;
    }

    /**
     * Get the mtt dont taxes assim.
     *
     * @return float Returns the mtt dont taxes assim.
     */
    public function getMttDontTaxesAssim() {
        return $this->mttDontTaxesAssim;
    }

    /**
     * Get the mtt dont tva.
     *
     * @return float Returns the mtt dont tva.
     */
    public function getMttDontTva() {
        return $this->mttDontTva;
    }

    /**
     * Get the periode.
     *
     * @return DateTime|null Returns the periode.
     */
    public function getPeriode() {
        return $this->periode;
    }

    /**
     * Get the z0151.
     *
     * @return float Returns the z0151.
     */
    public function getz0151() {
        return $this->z0151;
    }

    /**
     * Get the z0207.
     *
     * @return float Returns the z0207.
     */
    public function getz0207() {
        return $this->z0207;
    }

    /**
     * Get the z ha.
     *
     * @return float Returns the z ha.
     */
    public function getzHa() {
        return $this->zHa;
    }

    /**
     * Set the 02 base ht196.
     *
     * @param float $_02BaseHt196 The 02 base ht196.
     * @return DecTva3514 Returns this Dec tva3514.
     */
    public function set02BaseHt196($_02BaseHt196) {
        $this->_02BaseHt196 = $_02BaseHt196;
        return $this;
    }

    /**
     * Set the 02 taxe due196.
     *
     * @param float $_02TaxeDue196 The 02 taxe due196.
     * @return DecTva3514 Returns this Dec tva3514.
     */
    public function set02TaxeDue196($_02TaxeDue196) {
        $this->_02TaxeDue196 = $_02TaxeDue196;
        return $this;
    }

    /**
     * Set the 03 base ht55.
     *
     * @param float $_03BaseHt55 The 03 base ht55.
     * @return DecTva3514 Returns this Dec tva3514.
     */
    public function set03BaseHt55($_03BaseHt55) {
        $this->_03BaseHt55 = $_03BaseHt55;
        return $this;
    }

    /**
     * Set the 03 taxe due55.
     *
     * @param float $_03TaxeDue55 The 03 taxe due55.
     * @return DecTva3514 Returns this Dec tva3514.
     */
    public function set03TaxeDue55($_03TaxeDue55) {
        $this->_03TaxeDue55 = $_03TaxeDue55;
        return $this;
    }

    /**
     * Set the 04 base ht85.
     *
     * @param float $_04BaseHt85 The 04 base ht85.
     * @return DecTva3514 Returns this Dec tva3514.
     */
    public function set04BaseHt85($_04BaseHt85) {
        $this->_04BaseHt85 = $_04BaseHt85;
        return $this;
    }

    /**
     * Set the 04 taxe due85.
     *
     * @param float $_04TaxeDue85 The 04 taxe due85.
     * @return DecTva3514 Returns this Dec tva3514.
     */
    public function set04TaxeDue85($_04TaxeDue85) {
        $this->_04TaxeDue85 = $_04TaxeDue85;
        return $this;
    }

    /**
     * Set the 05 base ht21.
     *
     * @param float $_05BaseHt21 The 05 base ht21.
     * @return DecTva3514 Returns this Dec tva3514.
     */
    public function set05BaseHt21($_05BaseHt21) {
        $this->_05BaseHt21 = $_05BaseHt21;
        return $this;
    }

    /**
     * Set the 05 taxe due21.
     *
     * @param float $_05TaxeDue21 The 05 taxe due21.
     * @return DecTva3514 Returns this Dec tva3514.
     */
    public function set05TaxeDue21($_05TaxeDue21) {
        $this->_05TaxeDue21 = $_05TaxeDue21;
        return $this;
    }

    /**
     * Set the 06 base ht anc taux.
     *
     * @param float $_06BaseHtAncTaux The 06 base ht anc taux.
     * @return DecTva3514 Returns this Dec tva3514.
     */
    public function set06BaseHtAncTaux($_06BaseHtAncTaux) {
        $this->_06BaseHtAncTaux = $_06BaseHtAncTaux;
        return $this;
    }

    /**
     * Set the 06 taxe due anc taux.
     *
     * @param float $_06TaxeDueAncTaux The 06 taxe due anc taux.
     * @return DecTva3514 Returns this Dec tva3514.
     */
    public function set06TaxeDueAncTaux($_06TaxeDueAncTaux) {
        $this->_06TaxeDueAncTaux = $_06TaxeDueAncTaux;
        return $this;
    }

    /**
     * Set the 07 base ht taux part.
     *
     * @param float $_07BaseHtTauxPart The 07 base ht taux part.
     * @return DecTva3514 Returns this Dec tva3514.
     */
    public function set07BaseHtTauxPart($_07BaseHtTauxPart) {
        $this->_07BaseHtTauxPart = $_07BaseHtTauxPart;
        return $this;
    }

    /**
     * Set the 07 taxe due taux part.
     *
     * @param float $_07TaxeDueTauxPart The 07 taxe due taux part.
     * @return DecTva3514 Returns this Dec tva3514.
     */
    public function set07TaxeDueTauxPart($_07TaxeDueTauxPart) {
        $this->_07TaxeDueTauxPart = $_07TaxeDueTauxPart;
        return $this;
    }

    /**
     * Set the 08 base httv aa reverser.
     *
     * @param float $_08BaseHttvAaReverser The 08 base httv aa reverser.
     * @return DecTva3514 Returns this Dec tva3514.
     */
    public function set08BaseHttvAaReverser($_08BaseHttvAaReverser) {
        $this->_08BaseHttvAaReverser = $_08BaseHttvAaReverser;
        return $this;
    }

    /**
     * Set the 08 taxe due tv aa reverser.
     *
     * @param float $_08TaxeDueTvAaReverser The 08 taxe due tv aa reverser.
     * @return DecTva3514 Returns this Dec tva3514.
     */
    public function set08TaxeDueTvAaReverser($_08TaxeDueTvAaReverser) {
        $this->_08TaxeDueTvAaReverser = $_08TaxeDueTvAaReverser;
        return $this;
    }

    /**
     * Set the 09 total tva brute.
     *
     * @param float $_09TotalTvaBrute The 09 total tva brute.
     * @return DecTva3514 Returns this Dec tva3514.
     */
    public function set09TotalTvaBrute($_09TotalTvaBrute) {
        $this->_09TotalTvaBrute = $_09TotalTvaBrute;
        return $this;
    }

    /**
     * Set the 10 biens immos.
     *
     * @param float $_10BiensImmos The 10 biens immos.
     * @return DecTva3514 Returns this Dec tva3514.
     */
    public function set10BiensImmos($_10BiensImmos) {
        $this->_10BiensImmos = $_10BiensImmos;
        return $this;
    }

    /**
     * Set the 11 autres biens.
     *
     * @param float $_11AutresBiens The 11 autres biens.
     * @return DecTva3514 Returns this Dec tva3514.
     */
    public function set11AutresBiens($_11AutresBiens) {
        $this->_11AutresBiens = $_11AutresBiens;
        return $this;
    }

    /**
     * Set the 12 omission.
     *
     * @param float $_12Omission The 12 omission.
     * @return DecTva3514 Returns this Dec tva3514.
     */
    public function set12Omission($_12Omission) {
        $this->_12Omission = $_12Omission;
        return $this;
    }

    /**
     * Set the 13 total tva deduc.
     *
     * @param float $_13TotalTvaDeduc The 13 total tva deduc.
     * @return DecTva3514 Returns this Dec tva3514.
     */
    public function set13TotalTvaDeduc($_13TotalTvaDeduc) {
        $this->_13TotalTvaDeduc = $_13TotalTvaDeduc;
        return $this;
    }

    /**
     * Set the 14 a.
     *
     * @param float $_14A The 14 a.
     * @return DecTva3514 Returns this Dec tva3514.
     */
    public function set14A($_14A) {
        $this->_14A = $_14A;
        return $this;
    }

    /**
     * Set the 15 b.
     *
     * @param float $_15B The 15 b.
     * @return DecTva3514 Returns this Dec tva3514.
     */
    public function set15B($_15B) {
        $this->_15B = $_15B;
        return $this;
    }

    /**
     * Set the 16 rembours tva.
     *
     * @param float $_16RemboursTva The 16 rembours tva.
     * @return DecTva3514 Returns this Dec tva3514.
     */
    public function set16RemboursTva($_16RemboursTva) {
        $this->_16RemboursTva = $_16RemboursTva;
        return $this;
    }

    /**
     * Set the 18 credit tvaca12.
     *
     * @param float $_18CreditTvaca12 The 18 credit tvaca12.
     * @return DecTva3514 Returns this Dec tva3514.
     */
    public function set18CreditTvaca12($_18CreditTvaca12) {
        $this->_18CreditTvaca12 = $_18CreditTvaca12;
        return $this;
    }

    /**
     * Set the 1 mtt augmentation.
     *
     * @param float $_1MttAugmentation The 1 mtt augmentation.
     * @return DecTva3514 Returns this Dec tva3514.
     */
    public function set1MttAugmentation($_1MttAugmentation) {
        $this->_1MttAugmentation = $_1MttAugmentation;
        return $this;
    }

    /**
     * Set the 20 acompte ta1.
     *
     * @param float $_20AcompteTa1 The 20 acompte ta1.
     * @return DecTva3514 Returns this Dec tva3514.
     */
    public function set20AcompteTa1($_20AcompteTa1) {
        $this->_20AcompteTa1 = $_20AcompteTa1;
        return $this;
    }

    /**
     * Set the 20 acompte ta2.
     *
     * @param float $_20AcompteTa2 The 20 acompte ta2.
     * @return DecTva3514 Returns this Dec tva3514.
     */
    public function set20AcompteTa2($_20AcompteTa2) {
        $this->_20AcompteTa2 = $_20AcompteTa2;
        return $this;
    }

    /**
     * Set the 21 acompte tot1.
     *
     * @param float $_21AcompteTot1 The 21 acompte tot1.
     * @return DecTva3514 Returns this Dec tva3514.
     */
    public function set21AcompteTot1($_21AcompteTot1) {
        $this->_21AcompteTot1 = $_21AcompteTot1;
        return $this;
    }

    /**
     * Set the 21 acompte tot2.
     *
     * @param float $_21AcompteTot2 The 21 acompte tot2.
     * @return DecTva3514 Returns this Dec tva3514.
     */
    public function set21AcompteTot2($_21AcompteTot2) {
        $this->_21AcompteTot2 = $_21AcompteTot2;
        return $this;
    }

    /**
     * Set the 2 b base ht7.
     *
     * @param float $_2BBaseHt7 The 2 b base ht7.
     * @return DecTva3514 Returns this Dec tva3514.
     */
    public function set2BBaseHt7($_2BBaseHt7) {
        $this->_2BBaseHt7 = $_2BBaseHt7;
        return $this;
    }

    /**
     * Set the 2 b taxe due7.
     *
     * @param float $_2BTaxeDue7 The 2 b taxe due7.
     * @return DecTva3514 Returns this Dec tva3514.
     */
    public function set2BTaxeDue7($_2BTaxeDue7) {
        $this->_2BTaxeDue7 = $_2BTaxeDue7;
        return $this;
    }

    /**
     * Set the 2 mtt credit prec.
     *
     * @param float $_2MttCreditPrec The 2 mtt credit prec.
     * @return DecTva3514 Returns this Dec tva3514.
     */
    public function set2MttCreditPrec($_2MttCreditPrec) {
        $this->_2MttCreditPrec = $_2MttCreditPrec;
        return $this;
    }

    /**
     * Set the 2 mtt diminution.
     *
     * @param float $_2MttDiminution The 2 mtt diminution.
     * @return DecTva3514 Returns this Dec tva3514.
     */
    public function set2MttDiminution($_2MttDiminution) {
        $this->_2MttDiminution = $_2MttDiminution;
        return $this;
    }

    /**
     * Set the 3 mtt diminution.
     *
     * @param float $_3MttDiminution The 3 mtt diminution.
     * @return DecTva3514 Returns this Dec tva3514.
     */
    public function set3MttDiminution($_3MttDiminution) {
        $this->_3MttDiminution = $_3MttDiminution;
        return $this;
    }

    /**
     * Set the 3 suspension.
     *
     * @param int $_3Suspension The 3 suspension.
     * @return DecTva3514 Returns this Dec tva3514.
     */
    public function set3Suspension($_3Suspension) {
        $this->_3Suspension = $_3Suspension;
        return $this;
    }

    /**
     * Set the 4 has diminution.
     *
     * @param bool $_4HasDiminution The 4 has diminution.
     * @return DecTva3514 Returns this Dec tva3514.
     */
    public function set4HasDiminution($_4HasDiminution) {
        $this->_4HasDiminution = $_4HasDiminution;
        return $this;
    }

    /**
     * Set the 4 mtt diminution.
     *
     * @param float $_4MttDiminution The 4 mtt diminution.
     * @return DecTva3514 Returns this Dec tva3514.
     */
    public function set4MttDiminution($_4MttDiminution) {
        $this->_4MttDiminution = $_4MttDiminution;
        return $this;
    }

    /**
     * Set the acompte du.
     *
     * @param DateTime|null $acompteDu The acompte du.
     * @return DecTva3514 Returns this Dec tva3514.
     */
    public function setAcompteDu(DateTime $acompteDu = null) {
        $this->acompteDu = $acompteDu;
        return $this;
    }

    /**
     * Set the date dec.
     *
     * @param DateTime|null $dateDec The date dec.
     * @return DecTva3514 Returns this Dec tva3514.
     */
    public function setDateDec(DateTime $dateDec = null) {
        $this->dateDec = $dateDec;
        return $this;
    }

    /**
     * Set the date limite dec.
     *
     * @param DateTime|null $dateLimiteDec The date limite dec.
     * @return DecTva3514 Returns this Dec tva3514.
     */
    public function setDateLimiteDec(DateTime $dateLimiteDec = null) {
        $this->dateLimiteDec = $dateLimiteDec;
        return $this;
    }

    /**
     * Set the det code ta.
     *
     * @param string $detCodeTa The det code ta.
     * @return DecTva3514 Returns this Dec tva3514.
     */
    public function setDetCodeTa($detCodeTa) {
        $this->detCodeTa = $detCodeTa;
        return $this;
    }

    /**
     * Set the det ta1.
     *
     * @param string $detTa1 The det ta1.
     * @return DecTva3514 Returns this Dec tva3514.
     */
    public function setDetTa1($detTa1) {
        $this->detTa1 = $detTa1;
        return $this;
    }

    /**
     * Set the det ta2.
     *
     * @param string $detTa2 The det ta2.
     * @return DecTva3514 Returns this Dec tva3514.
     */
    public function setDetTa2($detTa2) {
        $this->detTa2 = $detTa2;
        return $this;
    }

    /**
     * Set the det ta3.
     *
     * @param string $detTa3 The det ta3.
     * @return DecTva3514 Returns this Dec tva3514.
     */
    public function setDetTa3($detTa3) {
        $this->detTa3 = $detTa3;
        return $this;
    }

    /**
     * Set the det ta4.
     *
     * @param string $detTa4 The det ta4.
     * @return DecTva3514 Returns this Dec tva3514.
     */
    public function setDetTa4($detTa4) {
        $this->detTa4 = $detTa4;
        return $this;
    }

    /**
     * Set the exigible le.
     *
     * @param DateTime|null $exigibleLe The exigible le.
     * @return DecTva3514 Returns this Dec tva3514.
     */
    public function setExigibleLe(DateTime $exigibleLe = null) {
        $this->exigibleLe = $exigibleLe;
        return $this;
    }

    /**
     * Set the mtt a payer.
     *
     * @param float $mttAPayer The mtt a payer.
     * @return DecTva3514 Returns this Dec tva3514.
     */
    public function setMttAPayer($mttAPayer) {
        $this->mttAPayer = $mttAPayer;
        return $this;
    }

    /**
     * Set the mtt det ta1.
     *
     * @param float $mttDetTa1 The mtt det ta1.
     * @return DecTva3514 Returns this Dec tva3514.
     */
    public function setMttDetTa1($mttDetTa1) {
        $this->mttDetTa1 = $mttDetTa1;
        return $this;
    }

    /**
     * Set the mtt det ta2.
     *
     * @param float $mttDetTa2 The mtt det ta2.
     * @return DecTva3514 Returns this Dec tva3514.
     */
    public function setMttDetTa2($mttDetTa2) {
        $this->mttDetTa2 = $mttDetTa2;
        return $this;
    }

    /**
     * Set the mtt det ta3.
     *
     * @param float $mttDetTa3 The mtt det ta3.
     * @return DecTva3514 Returns this Dec tva3514.
     */
    public function setMttDetTa3($mttDetTa3) {
        $this->mttDetTa3 = $mttDetTa3;
        return $this;
    }

    /**
     * Set the mtt det ta4.
     *
     * @param float $mttDetTa4 The mtt det ta4.
     * @return DecTva3514 Returns this Dec tva3514.
     */
    public function setMttDetTa4($mttDetTa4) {
        $this->mttDetTa4 = $mttDetTa4;
        return $this;
    }

    /**
     * Set the mtt dont taxes assim.
     *
     * @param float $mttDontTaxesAssim The mtt dont taxes assim.
     * @return DecTva3514 Returns this Dec tva3514.
     */
    public function setMttDontTaxesAssim($mttDontTaxesAssim) {
        $this->mttDontTaxesAssim = $mttDontTaxesAssim;
        return $this;
    }

    /**
     * Set the mtt dont tva.
     *
     * @param float $mttDontTva The mtt dont tva.
     * @return DecTva3514 Returns this Dec tva3514.
     */
    public function setMttDontTva($mttDontTva) {
        $this->mttDontTva = $mttDontTva;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime|null $periode The periode.
     * @return DecTva3514 Returns this Dec tva3514.
     */
    public function setPeriode(DateTime $periode = null) {
        $this->periode = $periode;
        return $this;
    }

    /**
     * Set the z0151.
     *
     * @param float $z0151 The z0151.
     * @return DecTva3514 Returns this Dec tva3514.
     */
    public function setz0151($z0151) {
        $this->z0151 = $z0151;
        return $this;
    }

    /**
     * Set the z0207.
     *
     * @param float $z0207 The z0207.
     * @return DecTva3514 Returns this Dec tva3514.
     */
    public function setz0207($z0207) {
        $this->z0207 = $z0207;
        return $this;
    }

    /**
     * Set the z ha.
     *
     * @param float $zHa The z ha.
     * @return DecTva3514 Returns this Dec tva3514.
     */
    public function setzHa($zHa) {
        $this->zHa = $zHa;
        return $this;
    }
}
