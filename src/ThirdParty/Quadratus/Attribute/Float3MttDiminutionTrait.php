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
 * 3 mtt diminution trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait Float3MttDiminutionTrait {

    /**
     * 3 mtt diminution.
     *
     * @var float
     */
    private $_3MttDiminution;

    /**
     * Get the 3 mtt diminution.
     *
     * @return float Returns the 3 mtt diminution.
     */
    public function get3MttDiminution() {
        return $this->_3MttDiminution;
    }

    /**
     * Set the 3 mtt diminution.
     *
     * @param float $_3MttDiminution The 3 mtt diminution.
     */
    public function set3MttDiminution($_3MttDiminution) {
        $this->_3MttDiminution = $_3MttDiminution;
        return $this;
    }
}
