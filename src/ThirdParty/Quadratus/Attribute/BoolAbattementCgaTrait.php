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
 * Abattement cga trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAbattementCgaTrait {

    /**
     * Abattement cga.
     *
     * @var bool
     */
    private $abattementCga;

    /**
     * Get the abattement cga.
     *
     * @return bool Returns the abattement cga.
     */
    public function getAbattementCga() {
        return $this->abattementCga;
    }

    /**
     * Set the abattement cga.
     *
     * @param bool $abattementCga The abattement cga.
     */
    public function setAbattementCga($abattementCga) {
        $this->abattementCga = $abattementCga;
        return $this;
    }
}
