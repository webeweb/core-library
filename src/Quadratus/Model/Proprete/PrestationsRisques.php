<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Quadratus\Model\Proprete;

/**
 * Prestations risques model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\Proprete
 */
class PrestationsRisques {

    /**
     * Code article.
     *
     * @var string
     */
    private $codeArticle;

    /**
     * Code tache.
     *
     * @var string
     */
    private $codeTache;

    /**
     * Taux exposition.
     *
     * @var float
     */
    private $tauxExposition;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the code article.
     *
     * @return string Returns the code article.
     */
    public function getCodeArticle() {
        return $this->codeArticle;
    }

    /**
     * Get the code tache.
     *
     * @return string Returns the code tache.
     */
    public function getCodeTache() {
        return $this->codeTache;
    }

    /**
     * Get the taux exposition.
     *
     * @return float Returns the taux exposition.
     */
    public function getTauxExposition() {
        return $this->tauxExposition;
    }

    /**
     * Set the code article.
     *
     * @param string $codeArticle The code article.
     * @return PrestationsRisques Returns this prestations risques.
     */
    public function setCodeArticle($codeArticle) {
        $this->codeArticle = $codeArticle;
        return $this;
    }

    /**
     * Set the code tache.
     *
     * @param string $codeTache The code tache.
     * @return PrestationsRisques Returns this prestations risques.
     */
    public function setCodeTache($codeTache) {
        $this->codeTache = $codeTache;
        return $this;
    }

    /**
     * Set the taux exposition.
     *
     * @param float $tauxExposition The taux exposition.
     * @return PrestationsRisques Returns this prestations risques.
     */
    public function setTauxExposition($tauxExposition) {
        $this->tauxExposition = $tauxExposition;
        return $this;
    }

}
