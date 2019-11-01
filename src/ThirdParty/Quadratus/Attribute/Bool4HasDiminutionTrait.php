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
 * 4 has diminution trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait Bool4HasDiminutionTrait {

    /**
     * 4 has diminution.
     *
     * @var bool
     */
    private $_4HasDiminution;

    /**
     * Get the 4 has diminution.
     *
     * @return bool Returns the 4 has diminution.
     */
    public function get4HasDiminution() {
        return $this->_4HasDiminution;
    }

    /**
     * Set the 4 has diminution.
     *
     * @param bool $_4HasDiminution The 4 has diminution.
     */
    public function set4HasDiminution($_4HasDiminution) {
        $this->_4HasDiminution = $_4HasDiminution;
        return $this;
    }
}
