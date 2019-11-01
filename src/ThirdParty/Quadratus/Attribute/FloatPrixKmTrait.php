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
 * Prix km trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPrixKmTrait {

    /**
     * Prix km.
     *
     * @var float
     */
    private $prixKm;

    /**
     * Get the prix km.
     *
     * @return float Returns the prix km.
     */
    public function getPrixKm() {
        return $this->prixKm;
    }

    /**
     * Set the prix km.
     *
     * @param float $prixKm The prix km.
     */
    public function setPrixKm($prixKm) {
        $this->prixKm = $prixKm;
        return $this;
    }
}
