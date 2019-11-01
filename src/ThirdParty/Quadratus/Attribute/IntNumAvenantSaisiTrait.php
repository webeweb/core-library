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
 * Num avenant saisi trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNumAvenantSaisiTrait {

    /**
     * Num avenant saisi.
     *
     * @var int
     */
    private $numAvenantSaisi;

    /**
     * Get the num avenant saisi.
     *
     * @return int Returns the num avenant saisi.
     */
    public function getNumAvenantSaisi() {
        return $this->numAvenantSaisi;
    }

    /**
     * Set the num avenant saisi.
     *
     * @param int $numAvenantSaisi The num avenant saisi.
     */
    public function setNumAvenantSaisi($numAvenantSaisi) {
        $this->numAvenantSaisi = $numAvenantSaisi;
        return $this;
    }
}
