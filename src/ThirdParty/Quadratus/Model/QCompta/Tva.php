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

/**
 * Tva.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class Tva {

    /**
     * Code.
     *
     * @var string
     */
    private $code;

    /**
     * Compte tva achat.
     *
     * @var string
     */
    private $compteTvaAchat;

    /**
     * Compte tva immo.
     *
     * @var string
     */
    private $compteTvaImmo;

    /**
     * Compte tva vente.
     *
     * @var string
     */
    private $compteTvaVente;

    /**
     * Compte ventilation.
     *
     * @var string
     */
    private $compteVentilation;

    /**
     * Taux tva.
     *
     * @var float
     */
    private $tauxTva;

    /**
     * Type autoliquidation.
     *
     * @var string
     */
    private $typeAutoliquidation;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
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
     * Get the compte tva achat.
     *
     * @return string Returns the compte tva achat.
     */
    public function getCompteTvaAchat() {
        return $this->compteTvaAchat;
    }

    /**
     * Get the compte tva immo.
     *
     * @return string Returns the compte tva immo.
     */
    public function getCompteTvaImmo() {
        return $this->compteTvaImmo;
    }

    /**
     * Get the compte tva vente.
     *
     * @return string Returns the compte tva vente.
     */
    public function getCompteTvaVente() {
        return $this->compteTvaVente;
    }

    /**
     * Get the compte ventilation.
     *
     * @return string Returns the compte ventilation.
     */
    public function getCompteVentilation() {
        return $this->compteVentilation;
    }

    /**
     * Get the taux tva.
     *
     * @return float Returns the taux tva.
     */
    public function getTauxTva() {
        return $this->tauxTva;
    }

    /**
     * Get the type autoliquidation.
     *
     * @return string Returns the type autoliquidation.
     */
    public function getTypeAutoliquidation() {
        return $this->typeAutoliquidation;
    }

    /**
     * Set the code.
     *
     * @param string $code The code.
     */
    public function setCode($code) {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the compte tva achat.
     *
     * @param string $compteTvaAchat The compte tva achat.
     */
    public function setCompteTvaAchat($compteTvaAchat) {
        $this->compteTvaAchat = $compteTvaAchat;
        return $this;
    }

    /**
     * Set the compte tva immo.
     *
     * @param string $compteTvaImmo The compte tva immo.
     */
    public function setCompteTvaImmo($compteTvaImmo) {
        $this->compteTvaImmo = $compteTvaImmo;
        return $this;
    }

    /**
     * Set the compte tva vente.
     *
     * @param string $compteTvaVente The compte tva vente.
     */
    public function setCompteTvaVente($compteTvaVente) {
        $this->compteTvaVente = $compteTvaVente;
        return $this;
    }

    /**
     * Set the compte ventilation.
     *
     * @param string $compteVentilation The compte ventilation.
     */
    public function setCompteVentilation($compteVentilation) {
        $this->compteVentilation = $compteVentilation;
        return $this;
    }

    /**
     * Set the taux tva.
     *
     * @param float $tauxTva The taux tva.
     */
    public function setTauxTva($tauxTva) {
        $this->tauxTva = $tauxTva;
        return $this;
    }

    /**
     * Set the type autoliquidation.
     *
     * @param string $typeAutoliquidation The type autoliquidation.
     */
    public function setTypeAutoliquidation($typeAutoliquidation) {
        $this->typeAutoliquidation = $typeAutoliquidation;
        return $this;
    }
}
