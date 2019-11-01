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
 * Nb j repo recup pris trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbJRepoRecupPrisTrait {

    /**
     * Nb j repo recup pris.
     *
     * @var float
     */
    private $nbJRepoRecupPris;

    /**
     * Get the nb j repo recup pris.
     *
     * @return float Returns the nb j repo recup pris.
     */
    public function getNbJRepoRecupPris() {
        return $this->nbJRepoRecupPris;
    }

    /**
     * Set the nb j repo recup pris.
     *
     * @param float $nbJRepoRecupPris The nb j repo recup pris.
     */
    public function setNbJRepoRecupPris($nbJRepoRecupPris) {
        $this->nbJRepoRecupPris = $nbJRepoRecupPris;
        return $this;
    }
}
