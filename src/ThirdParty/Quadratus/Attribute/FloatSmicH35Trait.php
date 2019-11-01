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
 * Smic h35 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatSmicH35Trait {

    /**
     * Smic h35.
     *
     * @var float
     */
    private $smicH35;

    /**
     * Get the smic h35.
     *
     * @return float Returns the smic h35.
     */
    public function getSmicH35() {
        return $this->smicH35;
    }

    /**
     * Set the smic h35.
     *
     * @param float $smicH35 The smic h35.
     */
    public function setSmicH35($smicH35) {
        $this->smicH35 = $smicH35;
        return $this;
    }
}
