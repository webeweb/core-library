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

/**
 * Taches.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
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
     * Code uo.
     *
     * @var string
     */
    private $codeUo;

    /**
     * Compte comptable.
     *
     * @var string
     */
    private $compteComptable;

    /**
     * Compte tva.
     *
     * @var string
     */
    private $compteTva;

    /**
     * Facturable.
     *
     * @var bool
     */
    private $facturable;

    /**
     * Inactif.
     *
     * @var bool
     */
    private $inactif;

    /**
     * Intitule.
     *
     * @var string
     */
    private $intitule;

    /**
     * Intitule rtf.
     *
     * @var string
     */
    private $intituleRtf;

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
     * @var bool
     */
    private $nonRemboursable;

    /**
     * Non travaillee.
     *
     * @var bool
     */
    private $nonTravaillee;

    /**
     * Operationnelle.
     *
     * @var bool
     */
    private $operationnelle;

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
     * Pv maxi.
     *
     * @var float
     */
    private $pvMaxi;

    /**
     * Saisie tva.
     *
     * @var bool
     */
    private $saisieTva;

    /**
     * Super facturable.
     *
     * @var bool
     */
    private $superFacturable;

    /**
     * Ticket resto.
     *
     * @var bool
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
     * Get the code uo.
     *
     * @return string Returns the code uo.
     */
    public function getCodeUo() {
        return $this->codeUo;
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
     * Get the compte tva.
     *
     * @return string Returns the compte tva.
     */
    public function getCompteTva() {
        return $this->compteTva;
    }

    /**
     * Get the facturable.
     *
     * @return bool Returns the facturable.
     */
    public function getFacturable() {
        return $this->facturable;
    }

    /**
     * Get the inactif.
     *
     * @return bool Returns the inactif.
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
     * Get the intitule rtf.
     *
     * @return string Returns the intitule rtf.
     */
    public function getIntituleRtf() {
        return $this->intituleRtf;
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
     * @return bool Returns the non remboursable.
     */
    public function getNonRemboursable() {
        return $this->nonRemboursable;
    }

    /**
     * Get the non travaillee.
     *
     * @return bool Returns the non travaillee.
     */
    public function getNonTravaillee() {
        return $this->nonTravaillee;
    }

    /**
     * Get the operationnelle.
     *
     * @return bool Returns the operationnelle.
     */
    public function getOperationnelle() {
        return $this->operationnelle;
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
     * Get the pv maxi.
     *
     * @return float Returns the pv maxi.
     */
    public function getPvMaxi() {
        return $this->pvMaxi;
    }

    /**
     * Get the saisie tva.
     *
     * @return bool Returns the saisie tva.
     */
    public function getSaisieTva() {
        return $this->saisieTva;
    }

    /**
     * Get the super facturable.
     *
     * @return bool Returns the super facturable.
     */
    public function getSuperFacturable() {
        return $this->superFacturable;
    }

    /**
     * Get the ticket resto.
     *
     * @return bool Returns the ticket resto.
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
     * @return Taches Returns this Taches.
     */
    public function setArticle($article) {
        $this->article = $article;
        return $this;
    }

    /**
     * Set the code.
     *
     * @param string $code The code.
     * @return Taches Returns this Taches.
     */
    public function setCode($code) {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the code frais.
     *
     * @param string $codeFrais The code frais.
     * @return Taches Returns this Taches.
     */
    public function setCodeFrais($codeFrais) {
        $this->codeFrais = $codeFrais;
        return $this;
    }

    /**
     * Set the code regroupement.
     *
     * @param string $codeRegroupement The code regroupement.
     * @return Taches Returns this Taches.
     */
    public function setCodeRegroupement($codeRegroupement) {
        $this->codeRegroupement = $codeRegroupement;
        return $this;
    }

    /**
     * Set the code travail.
     *
     * @param string $codeTravail The code travail.
     * @return Taches Returns this Taches.
     */
    public function setCodeTravail($codeTravail) {
        $this->codeTravail = $codeTravail;
        return $this;
    }

    /**
     * Set the code uo.
     *
     * @param string $codeUo The code uo.
     * @return Taches Returns this Taches.
     */
    public function setCodeUo($codeUo) {
        $this->codeUo = $codeUo;
        return $this;
    }

    /**
     * Set the compte comptable.
     *
     * @param string $compteComptable The compte comptable.
     * @return Taches Returns this Taches.
     */
    public function setCompteComptable($compteComptable) {
        $this->compteComptable = $compteComptable;
        return $this;
    }

    /**
     * Set the compte tva.
     *
     * @param string $compteTva The compte tva.
     * @return Taches Returns this Taches.
     */
    public function setCompteTva($compteTva) {
        $this->compteTva = $compteTva;
        return $this;
    }

    /**
     * Set the facturable.
     *
     * @param bool $facturable The facturable.
     * @return Taches Returns this Taches.
     */
    public function setFacturable($facturable) {
        $this->facturable = $facturable;
        return $this;
    }

    /**
     * Set the inactif.
     *
     * @param bool $inactif The inactif.
     * @return Taches Returns this Taches.
     */
    public function setInactif($inactif) {
        $this->inactif = $inactif;
        return $this;
    }

    /**
     * Set the intitule.
     *
     * @param string $intitule The intitule.
     * @return Taches Returns this Taches.
     */
    public function setIntitule($intitule) {
        $this->intitule = $intitule;
        return $this;
    }

    /**
     * Set the intitule rtf.
     *
     * @param string $intituleRtf The intitule rtf.
     * @return Taches Returns this Taches.
     */
    public function setIntituleRtf($intituleRtf) {
        $this->intituleRtf = $intituleRtf;
        return $this;
    }

    /**
     * Set the liste travaux.
     *
     * @param string $listeTravaux The liste travaux.
     * @return Taches Returns this Taches.
     */
    public function setListeTravaux($listeTravaux) {
        $this->listeTravaux = $listeTravaux;
        return $this;
    }

    /**
     * Set the niveau exec.
     *
     * @param string $niveauExec The niveau exec.
     * @return Taches Returns this Taches.
     */
    public function setNiveauExec($niveauExec) {
        $this->niveauExec = $niveauExec;
        return $this;
    }

    /**
     * Set the non remboursable.
     *
     * @param bool $nonRemboursable The non remboursable.
     * @return Taches Returns this Taches.
     */
    public function setNonRemboursable($nonRemboursable) {
        $this->nonRemboursable = $nonRemboursable;
        return $this;
    }

    /**
     * Set the non travaillee.
     *
     * @param bool $nonTravaillee The non travaillee.
     * @return Taches Returns this Taches.
     */
    public function setNonTravaillee($nonTravaillee) {
        $this->nonTravaillee = $nonTravaillee;
        return $this;
    }

    /**
     * Set the operationnelle.
     *
     * @param bool $operationnelle The operationnelle.
     * @return Taches Returns this Taches.
     */
    public function setOperationnelle($operationnelle) {
        $this->operationnelle = $operationnelle;
        return $this;
    }

    /**
     * Set the prix vente1.
     *
     * @param float $prixVente1 The prix vente1.
     * @return Taches Returns this Taches.
     */
    public function setPrixVente1($prixVente1) {
        $this->prixVente1 = $prixVente1;
        return $this;
    }

    /**
     * Set the prix vente2.
     *
     * @param float $prixVente2 The prix vente2.
     * @return Taches Returns this Taches.
     */
    public function setPrixVente2($prixVente2) {
        $this->prixVente2 = $prixVente2;
        return $this;
    }

    /**
     * Set the prix vente3.
     *
     * @param float $prixVente3 The prix vente3.
     * @return Taches Returns this Taches.
     */
    public function setPrixVente3($prixVente3) {
        $this->prixVente3 = $prixVente3;
        return $this;
    }

    /**
     * Set the pv maxi.
     *
     * @param float $pvMaxi The pv maxi.
     * @return Taches Returns this Taches.
     */
    public function setPvMaxi($pvMaxi) {
        $this->pvMaxi = $pvMaxi;
        return $this;
    }

    /**
     * Set the saisie tva.
     *
     * @param bool $saisieTva The saisie tva.
     * @return Taches Returns this Taches.
     */
    public function setSaisieTva($saisieTva) {
        $this->saisieTva = $saisieTva;
        return $this;
    }

    /**
     * Set the super facturable.
     *
     * @param bool $superFacturable The super facturable.
     * @return Taches Returns this Taches.
     */
    public function setSuperFacturable($superFacturable) {
        $this->superFacturable = $superFacturable;
        return $this;
    }

    /**
     * Set the ticket resto.
     *
     * @param bool $ticketResto The ticket resto.
     * @return Taches Returns this Taches.
     */
    public function setTicketResto($ticketResto) {
        $this->ticketResto = $ticketResto;
        return $this;
    }

    /**
     * Set the type heure.
     *
     * @param string $typeHeure The type heure.
     * @return Taches Returns this Taches.
     */
    public function setTypeHeure($typeHeure) {
        $this->typeHeure = $typeHeure;
        return $this;
    }
}
