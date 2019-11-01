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
 * Prix mini trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPrixMiniTrait {

    /**
     * Prix mini.
     *
     * @var float
     */
    private $prixMini;

    /**
     * Get the prix mini.
     *
     * @return float Returns the prix mini.
     */
    public function getPrixMini() {
        return $this->prixMini;
    }

    /**
     * Set the prix mini.
     *
     * @param float $prixMini The prix mini.
     */
    public function setPrixMini($prixMini) {
        $this->prixMini = $prixMini;
        return $this;
    }
}
