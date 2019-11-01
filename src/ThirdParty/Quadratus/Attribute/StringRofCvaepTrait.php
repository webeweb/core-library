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
 * Rof cvaep trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringRofCvaepTrait {

    /**
     * Rof cvaep.
     *
     * @var string
     */
    private $rofCvaep;

    /**
     * Get the rof cvaep.
     *
     * @return string Returns the rof cvaep.
     */
    public function getRofCvaep() {
        return $this->rofCvaep;
    }

    /**
     * Set the rof cvaep.
     *
     * @param string $rofCvaep The rof cvaep.
     */
    public function setRofCvaep($rofCvaep) {
        $this->rofCvaep = $rofCvaep;
        return $this;
    }
}
