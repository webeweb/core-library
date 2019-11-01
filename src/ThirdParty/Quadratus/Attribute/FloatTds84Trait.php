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
 * Tds84 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTds84Trait {

    /**
     * Tds84.
     *
     * @var float
     */
    private $tds84;

    /**
     * Get the tds84.
     *
     * @return float Returns the tds84.
     */
    public function getTds84() {
        return $this->tds84;
    }

    /**
     * Set the tds84.
     *
     * @param float $tds84 The tds84.
     */
    public function setTds84($tds84) {
        $this->tds84 = $tds84;
        return $this;
    }
}
