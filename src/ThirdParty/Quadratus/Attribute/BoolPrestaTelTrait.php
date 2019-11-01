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
 * Presta tel trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolPrestaTelTrait {

    /**
     * Presta tel.
     *
     * @var bool
     */
    private $prestaTel;

    /**
     * Get the presta tel.
     *
     * @return bool Returns the presta tel.
     */
    public function getPrestaTel() {
        return $this->prestaTel;
    }

    /**
     * Set the presta tel.
     *
     * @param bool $prestaTel The presta tel.
     */
    public function setPrestaTel($prestaTel) {
        $this->prestaTel = $prestaTel;
        return $this;
    }
}
