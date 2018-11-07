<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Quadratus\Model\QGI;

/**
 * Taches model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QGI
 */
class Taches {

    /**
     * Article.
     *
     * @var string
     */
    private $article;

    /**
     * Code.
     *
     * @var string
     */
    private $code;

    /**
     * Code frais.
     *
     * @var string
     */
    private $codeFrais;

    /**
     * Code regroupement.
     *
     * @var string
     */
    private $codeRegroupement;

    /**
     * Code travail.
     *
     * @var string
     */
    private $codeTravail;

    /**
     * Code u o.
     *
     * @var string
     */
    private $codeUO;

    /**
     * Compte comptable.
     *
     * @var string
     */
    private $compteComptable;

    /**
     * Compte t v a.
     *
     * @var string
     */
    private $compteTVA;

    /**
     * Facturable.
     *
     * @var boolean
     */
    private $facturable;

    /**
     * Inactif.
     *
     * @var boolean
     */
    private $inactif;

    /**
     * Intitule.
     *
     * @var string
     */
    private $intitule;

    /**
     * Intitule r t f.
     *
     * @var string
     */
    private $intituleRTF;

    /**
     * Liste travaux.
     *
     * @var string
     */
    private $listeTravaux;

    /**
     * Niveau exec.
     *
     * @var string
     */
    private $niveauExec;

    /**
     * Non remboursable.
     *
     * @var boolean
     */
    private $nonRemboursable;

    /**
     * Non travaillee.
     *
     * @var boolean
     */
    private $nonTravaillee;

    /**
     * Operationnelle.
     *
     * @var boolean
     */
    private $operationnelle;

    /**
     * P v maxi.
     *
     * @var float
     */
    private $pVMaxi;

    /**
     * Prix vente1.
     *
     * @var float
     */
    private $prixVente1;

    /**
     * Prix vente2.
     *
     * @var float
     */
    private $prixVente2;

    /**
     * Prix vente3.
     *
     * @var float
     */
    private $prixVente3;

    /**
     * Saisie t v a.
     *
     * @var boolean
     */
    private $saisieTVA;

    /**
     * Super facturable.
     *
     * @var boolean
     */
    private $superFacturable;

    /**
     * Ticket resto.
     *
     * @var boolean
     */
    private $ticketResto;

    /**
     * Type heure.
     *
     * @var string
     */
    private $typeHeure;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the article.
     *
     * @return string Returns the article.
     */
    public function getArticle() {
        return $this->article;
    }

    /**
     * Get the code.
     *
     * @return string Returns the code.
     */
    public function getCode() {
        return $this->code;
    }

    /**
     * Get the code frais.
     *
     * @return string Returns the code frais.
     */
    public function getCodeFrais() {
        return $this->codeFrais;
    }

    /**
     * Get the code regroupement.
     *
     * @return string Returns the code regroupement.
     */
    public function getCodeRegroupement() {
        return $this->codeRegroupement;
    }

    /**
     * Get the code travail.
     *
     * @return string Returns the code travail.
     */
    public function getCodeTravail() {
        return $this->codeTravail;
    }

    /**
     * Get the code u o.
     *
     * @return string Returns the code u o.
     */
    public function getCodeUO() {
        return $this->codeUO;
    }

    /**
     * Get the compte comptable.
     *
     * @return string Returns the compte comptable.
     */
    public function getCompteComptable() {
        return $this->compteComptable;
    }

    /**
     * Get the compte t v a.
     *
     * @return string Returns the compte t v a.
     */
    public function getCompteTVA() {
        return $this->compteTVA;
    }

    /**
     * Get the facturable.
     *
     * @return boolean Returns the facturable.
     */
    public function getFacturable() {
        return $this->facturable;
    }

    /**
     * Get the inactif.
     *
     * @return boolean Returns the inactif.
     */
    public function getInactif() {
        return $this->inactif;
    }

    /**
     * Get the intitule.
     *
     * @return string Returns the intitule.
     */
    public function getIntitule() {
        return $this->intitule;
    }

    /**
     * Get the intitule r t f.
     *
     * @return string Returns the intitule r t f.
     */
    public function getIntituleRTF() {
        return $this->intituleRTF;
    }

    /**
     * Get the liste travaux.
     *
     * @return string Returns the liste travaux.
     */
    public function getListeTravaux() {
        return $this->listeTravaux;
    }

    /**
     * Get the niveau exec.
     *
     * @return string Returns the niveau exec.
     */
    public function getNiveauExec() {
        return $this->niveauExec;
    }

    /**
     * Get the non remboursable.
     *
     * @return boolean Returns the non remboursable.
     */
    public function getNonRemboursable() {
        return $this->nonRemboursable;
    }

    /**
     * Get the non travaillee.
     *
     * @return boolean Returns the non travaillee.
     */
    public function getNonTravaillee() {
        return $this->nonTravaillee;
    }

    /**
     * Get the operationnelle.
     *
     * @return boolean Returns the operationnelle.
     */
    public function getOperationnelle() {
        return $this->operationnelle;
    }

    /**
     * Get the p v maxi.
     *
     * @return float Returns the p v maxi.
     */
    public function getPVMaxi() {
        return $this->pVMaxi;
    }

    /**
     * Get the prix vente1.
     *
     * @return float Returns the prix vente1.
     */
    public function getPrixVente1() {
        return $this->prixVente1;
    }

    /**
     * Get the prix vente2.
     *
     * @return float Returns the prix vente2.
     */
    public function getPrixVente2() {
        return $this->prixVente2;
    }

    /**
     * Get the prix vente3.
     *
     * @return float Returns the prix vente3.
     */
    public function getPrixVente3() {
        return $this->prixVente3;
    }

    /**
     * Get the saisie t v a.
     *
     * @return boolean Returns the saisie t v a.
     */
    public function getSaisieTVA() {
        return $this->saisieTVA;
    }

    /**
     * Get the super facturable.
     *
     * @return boolean Returns the super facturable.
     */
    public function getSuperFacturable() {
        return $this->superFacturable;
    }

    /**
     * Get the ticket resto.
     *
     * @return boolean Returns the ticket resto.
     */
    public function getTicketResto() {
        return $this->ticketResto;
    }

    /**
     * Get the type heure.
     *
     * @return string Returns the type heure.
     */
    public function getTypeHeure() {
        return $this->typeHeure;
    }

    /**
     * Set the article.
     *
     * @param string $article The article.
     * @return Taches Returns this taches.
     */
    public function setArticle($article) {
        $this->article = $article;
        return $this;
    }

    /**
     * Set the code.
     *
     * @param string $code The code.
     * @return Taches Returns this taches.
     */
    public function setCode($code) {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the code frais.
     *
     * @param string $codeFrais The code frais.
     * @return Taches Returns this taches.
     */
    public function setCodeFrais($codeFrais) {
        $this->codeFrais = $codeFrais;
        return $this;
    }

    /**
     * Set the code regroupement.
     *
     * @param string $codeRegroupement The code regroupement.
     * @return Taches Returns this taches.
     */
    public function setCodeRegroupement($codeRegroupement) {
        $this->codeRegroupement = $codeRegroupement;
        return $this;
    }

    /**
     * Set the code travail.
     *
     * @param string $codeTravail The code travail.
     * @return Taches Returns this taches.
     */
    public function setCodeTravail($codeTravail) {
        $this->codeTravail = $codeTravail;
        return $this;
    }

    /**
     * Set the code u o.
     *
     * @param string $codeUO The code u o.
     * @return Taches Returns this taches.
     */
    public function setCodeUO($codeUO) {
        $this->codeUO = $codeUO;
        return $this;
    }

    /**
     * Set the compte comptable.
     *
     * @param string $compteComptable The compte comptable.
     * @return Taches Returns this taches.
     */
    public function setCompteComptable($compteComptable) {
        $this->compteComptable = $compteComptable;
        return $this;
    }

    /**
     * Set the compte t v a.
     *
     * @param string $compteTVA The compte t v a.
     * @return Taches Returns this taches.
     */
    public function setCompteTVA($compteTVA) {
        $this->compteTVA = $compteTVA;
        return $this;
    }

    /**
     * Set the facturable.
     *
     * @param boolean $facturable The facturable.
     * @return Taches Returns this taches.
     */
    public function setFacturable($facturable) {
        $this->facturable = $facturable;
        return $this;
    }

    /**
     * Set the inactif.
     *
     * @param boolean $inactif The inactif.
     * @return Taches Returns this taches.
     */
    public function setInactif($inactif) {
        $this->inactif = $inactif;
        return $this;
    }

    /**
     * Set the intitule.
     *
     * @param string $intitule The intitule.
     * @return Taches Returns this taches.
     */
    public function setIntitule($intitule) {
        $this->intitule = $intitule;
        return $this;
    }

    /**
     * Set the intitule r t f.
     *
     * @param string $intituleRTF The intitule r t f.
     * @return Taches Returns this taches.
     */
    public function setIntituleRTF($intituleRTF) {
        $this->intituleRTF = $intituleRTF;
        return $this;
    }

    /**
     * Set the liste travaux.
     *
     * @param string $listeTravaux The liste travaux.
     * @return Taches Returns this taches.
     */
    public function setListeTravaux($listeTravaux) {
        $this->listeTravaux = $listeTravaux;
        return $this;
    }

    /**
     * Set the niveau exec.
     *
     * @param string $niveauExec The niveau exec.
     * @return Taches Returns this taches.
     */
    public function setNiveauExec($niveauExec) {
        $this->niveauExec = $niveauExec;
        return $this;
    }

    /**
     * Set the non remboursable.
     *
     * @param boolean $nonRemboursable The non remboursable.
     * @return Taches Returns this taches.
     */
    public function setNonRemboursable($nonRemboursable) {
        $this->nonRemboursable = $nonRemboursable;
        return $this;
    }

    /**
     * Set the non travaillee.
     *
     * @param boolean $nonTravaillee The non travaillee.
     * @return Taches Returns this taches.
     */
    public function setNonTravaillee($nonTravaillee) {
        $this->nonTravaillee = $nonTravaillee;
        return $this;
    }

    /**
     * Set the operationnelle.
     *
     * @param boolean $operationnelle The operationnelle.
     * @return Taches Returns this taches.
     */
    public function setOperationnelle($operationnelle) {
        $this->operationnelle = $operationnelle;
        return $this;
    }

    /**
     * Set the p v maxi.
     *
     * @param float $pVMaxi The p v maxi.
     * @return Taches Returns this taches.
     */
    public function setPVMaxi($pVMaxi) {
        $this->pVMaxi = $pVMaxi;
        return $this;
    }

    /**
     * Set the prix vente1.
     *
     * @param float $prixVente1 The prix vente1.
     * @return Taches Returns this taches.
     */
    public function setPrixVente1($prixVente1) {
        $this->prixVente1 = $prixVente1;
        return $this;
    }

    /**
     * Set the prix vente2.
     *
     * @param float $prixVente2 The prix vente2.
     * @return Taches Returns this taches.
     */
    public function setPrixVente2($prixVente2) {
        $this->prixVente2 = $prixVente2;
        return $this;
    }

    /**
     * Set the prix vente3.
     *
     * @param float $prixVente3 The prix vente3.
     * @return Taches Returns this taches.
     */
    public function setPrixVente3($prixVente3) {
        $this->prixVente3 = $prixVente3;
        return $this;
    }

    /**
     * Set the saisie t v a.
     *
     * @param boolean $saisieTVA The saisie t v a.
     * @return Taches Returns this taches.
     */
    public function setSaisieTVA($saisieTVA) {
        $this->saisieTVA = $saisieTVA;
        return $this;
    }

    /**
     * Set the super facturable.
     *
     * @param boolean $superFacturable The super facturable.
     * @return Taches Returns this taches.
     */
    public function setSuperFacturable($superFacturable) {
        $this->superFacturable = $superFacturable;
        return $this;
    }

    /**
     * Set the ticket resto.
     *
     * @param boolean $ticketResto The ticket resto.
     * @return Taches Returns this taches.
     */
    public function setTicketResto($ticketResto) {
        $this->ticketResto = $ticketResto;
        return $this;
    }

    /**
     * Set the type heure.
     *
     * @param string $typeHeure The type heure.
     * @return Taches Returns this taches.
     */
    public function setTypeHeure($typeHeure) {
        $this->typeHeure = $typeHeure;
        return $this;
    }

}
