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
 * Nb max gamme trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbMaxGammeTrait {

    /**
     * Nb max gamme.
     *
     * @var int
     */
    private $nbMaxGamme;

    /**
     * Get the nb max gamme.
     *
     * @return int Returns the nb max gamme.
     */
    public function getNbMaxGamme() {
        return $this->nbMaxGamme;
    }

    /**
     * Set the nb max gamme.
     *
     * @param int $nbMaxGamme The nb max gamme.
     */
    public function setNbMaxGamme($nbMaxGamme) {
        $this->nbMaxGamme = $nbMaxGamme;
        return $this;
    }
}
