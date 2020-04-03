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
 * Dec tva3519.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class DecTva3519 {

    /**
     * Autres ope1.
     *
     * @var float
     */
    private $autresOpe1;

    /**
     * Autres ope2.
     *
     * @var float
     */
    private $autresOpe2;

    /**
     * Autres ope3.
     *
     * @var float
     */
    private $autresOpe3;

    /**
     * Autres ope4.
     *
     * @var float
     */
    private $autresOpe4;

    /**
     * Autres ope total.
     *
     * @var float
     */
    private $autresOpeTotal;

    /**
     * Bic.
     *
     * @var string
     */
    private $bic;

    /**
     * Commentaires1.
     *
     * @var string
     */
    private $commentaires1;

    /**
     * Commentaires2.
     *
     * @var string
     */
    private $commentaires2;

    /**
     * Commentaires3.
     *
     * @var string
     */
    private $commentaires3;

    /**
     * Commentaires4.
     *
     * @var string
     */
    private $commentaires4;

    /**
     * Commentaires5.
     *
     * @var string
     */
    private $commentaires5;

    /**
     * Credit compte.
     *
     * @var bool
     */
    private $creditCompte;

    /**
     * Credit imputer.
     *
     * @var bool
     */
    private $creditImputer;

    /**
     * Credit non remb.
     *
     * @var float
     */
    private $creditNonRemb;

    /**
     * Date cession.
     *
     * @var DateTime|null
     */
    private $dateCession;

    /**
     * Date creation.
     *
     * @var DateTime|null
     */
    private $dateCreation;

    /**
     * Date demande.
     *
     * @var DateTime|null
     */
    private $dateDemande;

    /**
     * Exp biens1.
     *
     * @var float
     */
    private $expBiens1;

    /**
     * Exp biens2.
     *
     * @var float
     */
    private $expBiens2;

    /**
     * Exp biens3.
     *
     * @var float
     */
    private $expBiens3;

    /**
     * Exp biens4.
     *
     * @var float
     */
    private $expBiens4;

    /**
     * Exp biens total.
     *
     * @var float
     */
    private $expBiensTotal;

    /**
     * Exp periodes.
     *
     * @var string
     */
    private $expPeriodes;

    /**
     * Iban.
     *
     * @var string
     */
    private $iban;

    /**
     * Intracom1.
     *
     * @var float
     */
    private $intracom1;

    /**
     * Intracom2.
     *
     * @var float
     */
    private $intracom2;

    /**
     * Intracom3.
     *
     * @var float
     */
    private $intracom3;

    /**
     * Intracom4.
     *
     * @var float
     */
    private $intracom4;

    /**
     * Intracom total.
     *
     * @var float
     */
    private $intracomTotal;

    /**
     * Mois1.
     *
     * @var int
     */
    private $mois1;

    /**
     * Mois2.
     *
     * @var int
     */
    private $mois2;

    /**
     * Mois3.
     *
     * @var int
     */
    private $mois3;

    /**
     * Montant1.
     *
     * @var float
     */
    private $montant1;

    /**
     * Montant2.
     *
     * @var float
     */
    private $montant2;

    /**
     * Montant3.
     *
     * @var float
     */
    private $montant3;

    /**
     * Montant rbt.
     *
     * @var float
     */
    private $montantRbt;

    /**
     * Nationalite.
     *
     * @var int
     */
    private $nationalite;

    /**
     * Nom prenom.
     *
     * @var string
     */
    private $nomPrenom;

    /**
     * Periode.
     *
     * @var DateTime|null
     */
    private $periode;

    /**
     * Plafond rbt.
     *
     * @var float
     */
    private $plafondRbt;

    /**
     * Qualite.
     *
     * @var string
     */
    private $qualite;

    /**
     * Rbt demande.
     *
     * @var float
     */
    private $rbtDemande;

    /**
     * Report credit.
     *
     * @var float
     */
    private $reportCredit;

    /**
     * Rib.
     *
     * @var string
     */
    private $rib;

    /**
     * Taux tva1.
     *
     * @var float
     */
    private $tauxTva1;

    /**
     * Taux tva2.
     *
     * @var float
     */
    private $tauxTva2;

    /**
     * Taux tva3.
     *
     * @var float
     */
    private $tauxTva3;

    /**
     * Taux tva4.
     *
     * @var float
     */
    private $tauxTva4;

    /**
     * Total colonne1.
     *
     * @var float
     */
    private $totalColonne1;

    /**
     * Total colonne2.
     *
     * @var float
     */
    private $totalColonne2;

    /**
     * Total colonne3.
     *
     * @var float
     */
    private $totalColonne3;

    /**
     * Total colonne4.
     *
     * @var float
     */
    private $totalColonne4;

    /**
     * Total colonne5.
     *
     * @var float
     */
    private $totalColonne5;

    /**
     * Tva fictive1.
     *
     * @var float
     */
    private $tvaFictive1;

    /**
     * Tva fictive2.
     *
     * @var float
     */
    private $tvaFictive2;

    /**
     * Tva fictive3.
     *
     * @var float
     */
    private $tvaFictive3;

    /**
     * Tva fictive4.
     *
     * @var float
     */
    private $tvaFictive4;

    /**
     * Tva fictive5.
     *
     * @var float
     */
    private $tvaFictive5;

    /**
     * Tva fictive prec.
     *
     * @var float
     */
    private $tvaFictivePrec;

    /**
     * Tva fictive pres.
     *
     * @var float
     */
    private $tvaFictivePres;

    /**
     * Type demande.
     *
     * @var int
     */
    private $typeDemande;

    /**
     * Ville.
     *
     * @var string
     */
    private $ville;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the autres ope1.
     *
     * @return float Returns the autres ope1.
     */
    public function getAutresOpe1() {
        return $this->autresOpe1;
    }

    /**
     * Get the autres ope2.
     *
     * @return float Returns the autres ope2.
     */
    public function getAutresOpe2() {
        return $this->autresOpe2;
    }

    /**
     * Get the autres ope3.
     *
     * @return float Returns the autres ope3.
     */
    public function getAutresOpe3() {
        return $this->autresOpe3;
    }

    /**
     * Get the autres ope4.
     *
     * @return float Returns the autres ope4.
     */
    public function getAutresOpe4() {
        return $this->autresOpe4;
    }

    /**
     * Get the autres ope total.
     *
     * @return float Returns the autres ope total.
     */
    public function getAutresOpeTotal() {
        return $this->autresOpeTotal;
    }

    /**
     * Get the bic.
     *
     * @return string Returns the bic.
     */
    public function getBic() {
        return $this->bic;
    }

    /**
     * Get the commentaires1.
     *
     * @return string Returns the commentaires1.
     */
    public function getCommentaires1() {
        return $this->commentaires1;
    }

    /**
     * Get the commentaires2.
     *
     * @return string Returns the commentaires2.
     */
    public function getCommentaires2() {
        return $this->commentaires2;
    }

    /**
     * Get the commentaires3.
     *
     * @return string Returns the commentaires3.
     */
    public function getCommentaires3() {
        return $this->commentaires3;
    }

    /**
     * Get the commentaires4.
     *
     * @return string Returns the commentaires4.
     */
    public function getCommentaires4() {
        return $this->commentaires4;
    }

    /**
     * Get the commentaires5.
     *
     * @return string Returns the commentaires5.
     */
    public function getCommentaires5() {
        return $this->commentaires5;
    }

    /**
     * Get the credit compte.
     *
     * @return bool Returns the credit compte.
     */
    public function getCreditCompte() {
        return $this->creditCompte;
    }

    /**
     * Get the credit imputer.
     *
     * @return bool Returns the credit imputer.
     */
    public function getCreditImputer() {
        return $this->creditImputer;
    }

    /**
     * Get the credit non remb.
     *
     * @return float Returns the credit non remb.
     */
    public function getCreditNonRemb() {
        return $this->creditNonRemb;
    }

    /**
     * Get the date cession.
     *
     * @return DateTime|null Returns the date cession.
     */
    public function getDateCession() {
        return $this->dateCession;
    }

    /**
     * Get the date creation.
     *
     * @return DateTime|null Returns the date creation.
     */
    public function getDateCreation() {
        return $this->dateCreation;
    }

    /**
     * Get the date demande.
     *
     * @return DateTime|null Returns the date demande.
     */
    public function getDateDemande() {
        return $this->dateDemande;
    }

    /**
     * Get the exp biens1.
     *
     * @return float Returns the exp biens1.
     */
    public function getExpBiens1() {
        return $this->expBiens1;
    }

    /**
     * Get the exp biens2.
     *
     * @return float Returns the exp biens2.
     */
    public function getExpBiens2() {
        return $this->expBiens2;
    }

    /**
     * Get the exp biens3.
     *
     * @return float Returns the exp biens3.
     */
    public function getExpBiens3() {
        return $this->expBiens3;
    }

    /**
     * Get the exp biens4.
     *
     * @return float Returns the exp biens4.
     */
    public function getExpBiens4() {
        return $this->expBiens4;
    }

    /**
     * Get the exp biens total.
     *
     * @return float Returns the exp biens total.
     */
    public function getExpBiensTotal() {
        return $this->expBiensTotal;
    }

    /**
     * Get the exp periodes.
     *
     * @return string Returns the exp periodes.
     */
    public function getExpPeriodes() {
        return $this->expPeriodes;
    }

    /**
     * Get the iban.
     *
     * @return string Returns the iban.
     */
    public function getIban() {
        return $this->iban;
    }

    /**
     * Get the intracom1.
     *
     * @return float Returns the intracom1.
     */
    public function getIntracom1() {
        return $this->intracom1;
    }

    /**
     * Get the intracom2.
     *
     * @return float Returns the intracom2.
     */
    public function getIntracom2() {
        return $this->intracom2;
    }

    /**
     * Get the intracom3.
     *
     * @return float Returns the intracom3.
     */
    public function getIntracom3() {
        return $this->intracom3;
    }

    /**
     * Get the intracom4.
     *
     * @return float Returns the intracom4.
     */
    public function getIntracom4() {
        return $this->intracom4;
    }

    /**
     * Get the intracom total.
     *
     * @return float Returns the intracom total.
     */
    public function getIntracomTotal() {
        return $this->intracomTotal;
    }

    /**
     * Get the mois1.
     *
     * @return int Returns the mois1.
     */
    public function getMois1() {
        return $this->mois1;
    }

    /**
     * Get the mois2.
     *
     * @return int Returns the mois2.
     */
    public function getMois2() {
        return $this->mois2;
    }

    /**
     * Get the mois3.
     *
     * @return int Returns the mois3.
     */
    public function getMois3() {
        return $this->mois3;
    }

    /**
     * Get the montant1.
     *
     * @return float Returns the montant1.
     */
    public function getMontant1() {
        return $this->montant1;
    }

    /**
     * Get the montant2.
     *
     * @return float Returns the montant2.
     */
    public function getMontant2() {
        return $this->montant2;
    }

    /**
     * Get the montant3.
     *
     * @return float Returns the montant3.
     */
    public function getMontant3() {
        return $this->montant3;
    }

    /**
     * Get the montant rbt.
     *
     * @return float Returns the montant rbt.
     */
    public function getMontantRbt() {
        return $this->montantRbt;
    }

    /**
     * Get the nationalite.
     *
     * @return int Returns the nationalite.
     */
    public function getNationalite() {
        return $this->nationalite;
    }

    /**
     * Get the nom prenom.
     *
     * @return string Returns the nom prenom.
     */
    public function getNomPrenom() {
        return $this->nomPrenom;
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
     * Get the plafond rbt.
     *
     * @return float Returns the plafond rbt.
     */
    public function getPlafondRbt() {
        return $this->plafondRbt;
    }

    /**
     * Get the qualite.
     *
     * @return string Returns the qualite.
     */
    public function getQualite() {
        return $this->qualite;
    }

    /**
     * Get the rbt demande.
     *
     * @return float Returns the rbt demande.
     */
    public function getRbtDemande() {
        return $this->rbtDemande;
    }

    /**
     * Get the report credit.
     *
     * @return float Returns the report credit.
     */
    public function getReportCredit() {
        return $this->reportCredit;
    }

    /**
     * Get the rib.
     *
     * @return string Returns the rib.
     */
    public function getRib() {
        return $this->rib;
    }

    /**
     * Get the taux tva1.
     *
     * @return float Returns the taux tva1.
     */
    public function getTauxTva1() {
        return $this->tauxTva1;
    }

    /**
     * Get the taux tva2.
     *
     * @return float Returns the taux tva2.
     */
    public function getTauxTva2() {
        return $this->tauxTva2;
    }

    /**
     * Get the taux tva3.
     *
     * @return float Returns the taux tva3.
     */
    public function getTauxTva3() {
        return $this->tauxTva3;
    }

    /**
     * Get the taux tva4.
     *
     * @return float Returns the taux tva4.
     */
    public function getTauxTva4() {
        return $this->tauxTva4;
    }

    /**
     * Get the total colonne1.
     *
     * @return float Returns the total colonne1.
     */
    public function getTotalColonne1() {
        return $this->totalColonne1;
    }

    /**
     * Get the total colonne2.
     *
     * @return float Returns the total colonne2.
     */
    public function getTotalColonne2() {
        return $this->totalColonne2;
    }

    /**
     * Get the total colonne3.
     *
     * @return float Returns the total colonne3.
     */
    public function getTotalColonne3() {
        return $this->totalColonne3;
    }

    /**
     * Get the total colonne4.
     *
     * @return float Returns the total colonne4.
     */
    public function getTotalColonne4() {
        return $this->totalColonne4;
    }

    /**
     * Get the total colonne5.
     *
     * @return float Returns the total colonne5.
     */
    public function getTotalColonne5() {
        return $this->totalColonne5;
    }

    /**
     * Get the tva fictive1.
     *
     * @return float Returns the tva fictive1.
     */
    public function getTvaFictive1() {
        return $this->tvaFictive1;
    }

    /**
     * Get the tva fictive2.
     *
     * @return float Returns the tva fictive2.
     */
    public function getTvaFictive2() {
        return $this->tvaFictive2;
    }

    /**
     * Get the tva fictive3.
     *
     * @return float Returns the tva fictive3.
     */
    public function getTvaFictive3() {
        return $this->tvaFictive3;
    }

    /**
     * Get the tva fictive4.
     *
     * @return float Returns the tva fictive4.
     */
    public function getTvaFictive4() {
        return $this->tvaFictive4;
    }

    /**
     * Get the tva fictive5.
     *
     * @return float Returns the tva fictive5.
     */
    public function getTvaFictive5() {
        return $this->tvaFictive5;
    }

    /**
     * Get the tva fictive prec.
     *
     * @return float Returns the tva fictive prec.
     */
    public function getTvaFictivePrec() {
        return $this->tvaFictivePrec;
    }

    /**
     * Get the tva fictive pres.
     *
     * @return float Returns the tva fictive pres.
     */
    public function getTvaFictivePres() {
        return $this->tvaFictivePres;
    }

    /**
     * Get the type demande.
     *
     * @return int Returns the type demande.
     */
    public function getTypeDemande() {
        return $this->typeDemande;
    }

    /**
     * Get the ville.
     *
     * @return string Returns the ville.
     */
    public function getVille() {
        return $this->ville;
    }

    /**
     * Set the autres ope1.
     *
     * @param float $autresOpe1 The autres ope1.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setAutresOpe1($autresOpe1) {
        $this->autresOpe1 = $autresOpe1;
        return $this;
    }

    /**
     * Set the autres ope2.
     *
     * @param float $autresOpe2 The autres ope2.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setAutresOpe2($autresOpe2) {
        $this->autresOpe2 = $autresOpe2;
        return $this;
    }

    /**
     * Set the autres ope3.
     *
     * @param float $autresOpe3 The autres ope3.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setAutresOpe3($autresOpe3) {
        $this->autresOpe3 = $autresOpe3;
        return $this;
    }

    /**
     * Set the autres ope4.
     *
     * @param float $autresOpe4 The autres ope4.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setAutresOpe4($autresOpe4) {
        $this->autresOpe4 = $autresOpe4;
        return $this;
    }

    /**
     * Set the autres ope total.
     *
     * @param float $autresOpeTotal The autres ope total.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setAutresOpeTotal($autresOpeTotal) {
        $this->autresOpeTotal = $autresOpeTotal;
        return $this;
    }

    /**
     * Set the bic.
     *
     * @param string $bic The bic.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setBic($bic) {
        $this->bic = $bic;
        return $this;
    }

    /**
     * Set the commentaires1.
     *
     * @param string $commentaires1 The commentaires1.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setCommentaires1($commentaires1) {
        $this->commentaires1 = $commentaires1;
        return $this;
    }

    /**
     * Set the commentaires2.
     *
     * @param string $commentaires2 The commentaires2.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setCommentaires2($commentaires2) {
        $this->commentaires2 = $commentaires2;
        return $this;
    }

    /**
     * Set the commentaires3.
     *
     * @param string $commentaires3 The commentaires3.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setCommentaires3($commentaires3) {
        $this->commentaires3 = $commentaires3;
        return $this;
    }

    /**
     * Set the commentaires4.
     *
     * @param string $commentaires4 The commentaires4.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setCommentaires4($commentaires4) {
        $this->commentaires4 = $commentaires4;
        return $this;
    }

    /**
     * Set the commentaires5.
     *
     * @param string $commentaires5 The commentaires5.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setCommentaires5($commentaires5) {
        $this->commentaires5 = $commentaires5;
        return $this;
    }

    /**
     * Set the credit compte.
     *
     * @param bool $creditCompte The credit compte.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setCreditCompte($creditCompte) {
        $this->creditCompte = $creditCompte;
        return $this;
    }

    /**
     * Set the credit imputer.
     *
     * @param bool $creditImputer The credit imputer.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setCreditImputer($creditImputer) {
        $this->creditImputer = $creditImputer;
        return $this;
    }

    /**
     * Set the credit non remb.
     *
     * @param float $creditNonRemb The credit non remb.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setCreditNonRemb($creditNonRemb) {
        $this->creditNonRemb = $creditNonRemb;
        return $this;
    }

    /**
     * Set the date cession.
     *
     * @param DateTime|null $dateCession The date cession.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setDateCession(DateTime $dateCession = null) {
        $this->dateCession = $dateCession;
        return $this;
    }

    /**
     * Set the date creation.
     *
     * @param DateTime|null $dateCreation The date creation.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setDateCreation(DateTime $dateCreation = null) {
        $this->dateCreation = $dateCreation;
        return $this;
    }

    /**
     * Set the date demande.
     *
     * @param DateTime|null $dateDemande The date demande.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setDateDemande(DateTime $dateDemande = null) {
        $this->dateDemande = $dateDemande;
        return $this;
    }

    /**
     * Set the exp biens1.
     *
     * @param float $expBiens1 The exp biens1.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setExpBiens1($expBiens1) {
        $this->expBiens1 = $expBiens1;
        return $this;
    }

    /**
     * Set the exp biens2.
     *
     * @param float $expBiens2 The exp biens2.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setExpBiens2($expBiens2) {
        $this->expBiens2 = $expBiens2;
        return $this;
    }

    /**
     * Set the exp biens3.
     *
     * @param float $expBiens3 The exp biens3.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setExpBiens3($expBiens3) {
        $this->expBiens3 = $expBiens3;
        return $this;
    }

    /**
     * Set the exp biens4.
     *
     * @param float $expBiens4 The exp biens4.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setExpBiens4($expBiens4) {
        $this->expBiens4 = $expBiens4;
        return $this;
    }

    /**
     * Set the exp biens total.
     *
     * @param float $expBiensTotal The exp biens total.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setExpBiensTotal($expBiensTotal) {
        $this->expBiensTotal = $expBiensTotal;
        return $this;
    }

    /**
     * Set the exp periodes.
     *
     * @param string $expPeriodes The exp periodes.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setExpPeriodes($expPeriodes) {
        $this->expPeriodes = $expPeriodes;
        return $this;
    }

    /**
     * Set the iban.
     *
     * @param string $iban The iban.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setIban($iban) {
        $this->iban = $iban;
        return $this;
    }

    /**
     * Set the intracom1.
     *
     * @param float $intracom1 The intracom1.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setIntracom1($intracom1) {
        $this->intracom1 = $intracom1;
        return $this;
    }

    /**
     * Set the intracom2.
     *
     * @param float $intracom2 The intracom2.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setIntracom2($intracom2) {
        $this->intracom2 = $intracom2;
        return $this;
    }

    /**
     * Set the intracom3.
     *
     * @param float $intracom3 The intracom3.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setIntracom3($intracom3) {
        $this->intracom3 = $intracom3;
        return $this;
    }

    /**
     * Set the intracom4.
     *
     * @param float $intracom4 The intracom4.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setIntracom4($intracom4) {
        $this->intracom4 = $intracom4;
        return $this;
    }

    /**
     * Set the intracom total.
     *
     * @param float $intracomTotal The intracom total.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setIntracomTotal($intracomTotal) {
        $this->intracomTotal = $intracomTotal;
        return $this;
    }

    /**
     * Set the mois1.
     *
     * @param int $mois1 The mois1.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setMois1($mois1) {
        $this->mois1 = $mois1;
        return $this;
    }

    /**
     * Set the mois2.
     *
     * @param int $mois2 The mois2.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setMois2($mois2) {
        $this->mois2 = $mois2;
        return $this;
    }

    /**
     * Set the mois3.
     *
     * @param int $mois3 The mois3.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setMois3($mois3) {
        $this->mois3 = $mois3;
        return $this;
    }

    /**
     * Set the montant1.
     *
     * @param float $montant1 The montant1.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setMontant1($montant1) {
        $this->montant1 = $montant1;
        return $this;
    }

    /**
     * Set the montant2.
     *
     * @param float $montant2 The montant2.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setMontant2($montant2) {
        $this->montant2 = $montant2;
        return $this;
    }

    /**
     * Set the montant3.
     *
     * @param float $montant3 The montant3.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setMontant3($montant3) {
        $this->montant3 = $montant3;
        return $this;
    }

    /**
     * Set the montant rbt.
     *
     * @param float $montantRbt The montant rbt.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setMontantRbt($montantRbt) {
        $this->montantRbt = $montantRbt;
        return $this;
    }

    /**
     * Set the nationalite.
     *
     * @param int $nationalite The nationalite.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setNationalite($nationalite) {
        $this->nationalite = $nationalite;
        return $this;
    }

    /**
     * Set the nom prenom.
     *
     * @param string $nomPrenom The nom prenom.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setNomPrenom($nomPrenom) {
        $this->nomPrenom = $nomPrenom;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime|null $periode The periode.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setPeriode(DateTime $periode = null) {
        $this->periode = $periode;
        return $this;
    }

    /**
     * Set the plafond rbt.
     *
     * @param float $plafondRbt The plafond rbt.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setPlafondRbt($plafondRbt) {
        $this->plafondRbt = $plafondRbt;
        return $this;
    }

    /**
     * Set the qualite.
     *
     * @param string $qualite The qualite.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setQualite($qualite) {
        $this->qualite = $qualite;
        return $this;
    }

    /**
     * Set the rbt demande.
     *
     * @param float $rbtDemande The rbt demande.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setRbtDemande($rbtDemande) {
        $this->rbtDemande = $rbtDemande;
        return $this;
    }

    /**
     * Set the report credit.
     *
     * @param float $reportCredit The report credit.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setReportCredit($reportCredit) {
        $this->reportCredit = $reportCredit;
        return $this;
    }

    /**
     * Set the rib.
     *
     * @param string $rib The rib.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setRib($rib) {
        $this->rib = $rib;
        return $this;
    }

    /**
     * Set the taux tva1.
     *
     * @param float $tauxTva1 The taux tva1.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setTauxTva1($tauxTva1) {
        $this->tauxTva1 = $tauxTva1;
        return $this;
    }

    /**
     * Set the taux tva2.
     *
     * @param float $tauxTva2 The taux tva2.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setTauxTva2($tauxTva2) {
        $this->tauxTva2 = $tauxTva2;
        return $this;
    }

    /**
     * Set the taux tva3.
     *
     * @param float $tauxTva3 The taux tva3.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setTauxTva3($tauxTva3) {
        $this->tauxTva3 = $tauxTva3;
        return $this;
    }

    /**
     * Set the taux tva4.
     *
     * @param float $tauxTva4 The taux tva4.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setTauxTva4($tauxTva4) {
        $this->tauxTva4 = $tauxTva4;
        return $this;
    }

    /**
     * Set the total colonne1.
     *
     * @param float $totalColonne1 The total colonne1.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setTotalColonne1($totalColonne1) {
        $this->totalColonne1 = $totalColonne1;
        return $this;
    }

    /**
     * Set the total colonne2.
     *
     * @param float $totalColonne2 The total colonne2.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setTotalColonne2($totalColonne2) {
        $this->totalColonne2 = $totalColonne2;
        return $this;
    }

    /**
     * Set the total colonne3.
     *
     * @param float $totalColonne3 The total colonne3.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setTotalColonne3($totalColonne3) {
        $this->totalColonne3 = $totalColonne3;
        return $this;
    }

    /**
     * Set the total colonne4.
     *
     * @param float $totalColonne4 The total colonne4.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setTotalColonne4($totalColonne4) {
        $this->totalColonne4 = $totalColonne4;
        return $this;
    }

    /**
     * Set the total colonne5.
     *
     * @param float $totalColonne5 The total colonne5.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setTotalColonne5($totalColonne5) {
        $this->totalColonne5 = $totalColonne5;
        return $this;
    }

    /**
     * Set the tva fictive1.
     *
     * @param float $tvaFictive1 The tva fictive1.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setTvaFictive1($tvaFictive1) {
        $this->tvaFictive1 = $tvaFictive1;
        return $this;
    }

    /**
     * Set the tva fictive2.
     *
     * @param float $tvaFictive2 The tva fictive2.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setTvaFictive2($tvaFictive2) {
        $this->tvaFictive2 = $tvaFictive2;
        return $this;
    }

    /**
     * Set the tva fictive3.
     *
     * @param float $tvaFictive3 The tva fictive3.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setTvaFictive3($tvaFictive3) {
        $this->tvaFictive3 = $tvaFictive3;
        return $this;
    }

    /**
     * Set the tva fictive4.
     *
     * @param float $tvaFictive4 The tva fictive4.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setTvaFictive4($tvaFictive4) {
        $this->tvaFictive4 = $tvaFictive4;
        return $this;
    }

    /**
     * Set the tva fictive5.
     *
     * @param float $tvaFictive5 The tva fictive5.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setTvaFictive5($tvaFictive5) {
        $this->tvaFictive5 = $tvaFictive5;
        return $this;
    }

    /**
     * Set the tva fictive prec.
     *
     * @param float $tvaFictivePrec The tva fictive prec.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setTvaFictivePrec($tvaFictivePrec) {
        $this->tvaFictivePrec = $tvaFictivePrec;
        return $this;
    }

    /**
     * Set the tva fictive pres.
     *
     * @param float $tvaFictivePres The tva fictive pres.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setTvaFictivePres($tvaFictivePres) {
        $this->tvaFictivePres = $tvaFictivePres;
        return $this;
    }

    /**
     * Set the type demande.
     *
     * @param int $typeDemande The type demande.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setTypeDemande($typeDemande) {
        $this->typeDemande = $typeDemande;
        return $this;
    }

    /**
     * Set the ville.
     *
     * @param string $ville The ville.
     * @return DecTva3519 Returns this Dec tva3519.
     */
    public function setVille($ville) {
        $this->ville = $ville;
        return $this;
    }
}
