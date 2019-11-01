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
 * Rof ts trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringRofTsTrait {

    /**
     * Rof ts.
     *
     * @var string
     */
    private $rofTs;

    /**
     * Get the rof ts.
     *
     * @return string Returns the rof ts.
     */
    public function getRofTs() {
        return $this->rofTs;
    }

    /**
     * Set the rof ts.
     *
     * @param string $rofTs The rof ts.
     */
    public function setRofTs($rofTs) {
        $this->rofTs = $rofTs;
        return $this;
    }
}
