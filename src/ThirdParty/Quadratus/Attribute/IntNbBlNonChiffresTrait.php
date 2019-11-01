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
 * Nb bl non chiffres trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbBlNonChiffresTrait {

    /**
     * Nb bl non chiffres.
     *
     * @var int
     */
    private $nbBlNonChiffres;

    /**
     * Get the nb bl non chiffres.
     *
     * @return int Returns the nb bl non chiffres.
     */
    public function getNbBlNonChiffres() {
        return $this->nbBlNonChiffres;
    }

    /**
     * Set the nb bl non chiffres.
     *
     * @param int $nbBlNonChiffres The nb bl non chiffres.
     */
    public function setNbBlNonChiffres($nbBlNonChiffres) {
        $this->nbBlNonChiffres = $nbBlNonChiffres;
        return $this;
    }
}
