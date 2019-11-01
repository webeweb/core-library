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
 * Num regroupement trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNumRegroupementTrait {

    /**
     * Num regroupement.
     *
     * @var int
     */
    private $numRegroupement;

    /**
     * Get the num regroupement.
     *
     * @return int Returns the num regroupement.
     */
    public function getNumRegroupement() {
        return $this->numRegroupement;
    }

    /**
     * Set the num regroupement.
     *
     * @param int $numRegroupement The num regroupement.
     */
    public function setNumRegroupement($numRegroupement) {
        $this->numRegroupement = $numRegroupement;
        return $this;
    }
}
