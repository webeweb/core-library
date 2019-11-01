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
 * Tds85 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTds85Trait {

    /**
     * Tds85.
     *
     * @var float
     */
    private $tds85;

    /**
     * Get the tds85.
     *
     * @return float Returns the tds85.
     */
    public function getTds85() {
        return $this->tds85;
    }

    /**
     * Set the tds85.
     *
     * @param float $tds85 The tds85.
     */
    public function setTds85($tds85) {
        $this->tds85 = $tds85;
        return $this;
    }
}
