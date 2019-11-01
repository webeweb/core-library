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
 * Nb jour repos recup trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbJourReposRecupTrait {

    /**
     * Nb jour repos recup.
     *
     * @var float
     */
    private $nbJourReposRecup;

    /**
     * Get the nb jour repos recup.
     *
     * @return float Returns the nb jour repos recup.
     */
    public function getNbJourReposRecup() {
        return $this->nbJourReposRecup;
    }

    /**
     * Set the nb jour repos recup.
     *
     * @param float $nbJourReposRecup The nb jour repos recup.
     */
    public function setNbJourReposRecup($nbJourReposRecup) {
        $this->nbJourReposRecup = $nbJourReposRecup;
        return $this;
    }
}
