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
 * Nb j repo recup dus trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbJRepoRecupDusTrait {

    /**
     * Nb j repo recup dus.
     *
     * @var float
     */
    private $nbJRepoRecupDus;

    /**
     * Get the nb j repo recup dus.
     *
     * @return float Returns the nb j repo recup dus.
     */
    public function getNbJRepoRecupDus() {
        return $this->nbJRepoRecupDus;
    }

    /**
     * Set the nb j repo recup dus.
     *
     * @param float $nbJRepoRecupDus The nb j repo recup dus.
     */
    public function setNbJRepoRecupDus($nbJRepoRecupDus) {
        $this->nbJRepoRecupDus = $nbJRepoRecupDus;
        return $this;
    }
}
