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
 * Viseur conventionne trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolViseurConventionneTrait {

    /**
     * Viseur conventionne.
     *
     * @var bool
     */
    private $viseurConventionne;

    /**
     * Get the viseur conventionne.
     *
     * @return bool Returns the viseur conventionne.
     */
    public function getViseurConventionne() {
        return $this->viseurConventionne;
    }

    /**
     * Set the viseur conventionne.
     *
     * @param bool $viseurConventionne The viseur conventionne.
     */
    public function setViseurConventionne($viseurConventionne) {
        $this->viseurConventionne = $viseurConventionne;
        return $this;
    }
}
