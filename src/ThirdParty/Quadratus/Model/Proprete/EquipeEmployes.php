<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete;

/**
 * Equipe employes.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class EquipeEmployes {

    /**
     * Code employe.
     *
     * @var string
     */
    private $codeEmploye;

    /**
     * Code equipe.
     *
     * @var string
     */
    private $codeEquipe;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the code employe.
     *
     * @return string Returns the code employe.
     */
    public function getCodeEmploye() {
        return $this->codeEmploye;
    }

    /**
     * Get the code equipe.
     *
     * @return string Returns the code equipe.
     */
    public function getCodeEquipe() {
        return $this->codeEquipe;
    }

    /**
     * Set the code employe.
     *
     * @param string $codeEmploye The code employe.
     */
    public function setCodeEmploye($codeEmploye) {
        $this->codeEmploye = $codeEmploye;
        return $this;
    }

    /**
     * Set the code equipe.
     *
     * @param string $codeEquipe The code equipe.
     */
    public function setCodeEquipe($codeEquipe) {
        $this->codeEquipe = $codeEquipe;
        return $this;
    }
}
