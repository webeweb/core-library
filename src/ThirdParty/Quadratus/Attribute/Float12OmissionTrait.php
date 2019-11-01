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
 * 12 omission trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait Float12OmissionTrait {

    /**
     * 12 omission.
     *
     * @var float
     */
    private $_12Omission;

    /**
     * Get the 12 omission.
     *
     * @return float Returns the 12 omission.
     */
    public function get12Omission() {
        return $this->_12Omission;
    }

    /**
     * Set the 12 omission.
     *
     * @param float $_12Omission The 12 omission.
     */
    public function set12Omission($_12Omission) {
        $this->_12Omission = $_12Omission;
        return $this;
    }
}
