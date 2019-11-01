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
 * Num agrement cga trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNumAgrementCgaTrait {

    /**
     * Num agrement cga.
     *
     * @var string
     */
    private $numAgrementCga;

    /**
     * Get the num agrement cga.
     *
     * @return string Returns the num agrement cga.
     */
    public function getNumAgrementCga() {
        return $this->numAgrementCga;
    }

    /**
     * Set the num agrement cga.
     *
     * @param string $numAgrementCga The num agrement cga.
     */
    public function setNumAgrementCga($numAgrementCga) {
        $this->numAgrementCga = $numAgrementCga;
        return $this;
    }
}
