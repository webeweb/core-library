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
 * Avec mise en somm trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAvecMiseEnSommTrait {

    /**
     * Avec mise en somm.
     *
     * @var bool
     */
    private $avecMiseEnSomm;

    /**
     * Get the avec mise en somm.
     *
     * @return bool Returns the avec mise en somm.
     */
    public function getAvecMiseEnSomm() {
        return $this->avecMiseEnSomm;
    }

    /**
     * Set the avec mise en somm.
     *
     * @param bool $avecMiseEnSomm The avec mise en somm.
     */
    public function setAvecMiseEnSomm($avecMiseEnSomm) {
        $this->avecMiseEnSomm = $avecMiseEnSomm;
        return $this;
    }
}
