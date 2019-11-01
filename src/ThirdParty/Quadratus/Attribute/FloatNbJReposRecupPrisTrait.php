<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Attribute;

/**
 * Nb j repos recup pris trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbJReposRecupPrisTrait {

    /**
     * Nb j repos recup pris.
     *
     * @var float
     */
    private $nbJReposRecupPris;

    /**
     * Get the nb j repos recup pris.
     *
     * @return float Returns the nb j repos recup pris.
     */
    public function getNbJReposRecupPris() {
        return $this->nbJReposRecupPris;
    }

    /**
     * Set the nb j repos recup pris.
     *
     * @param float $nbJReposRecupPris The nb j repos recup pris.
     */
    public function setNbJReposRecupPris($nbJReposRecupPris) {
        $this->nbJReposRecupPris = $nbJReposRecupPris;
        return $this;
    }
}
