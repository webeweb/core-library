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
 * 2 mtt diminution trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait Float2MttDiminutionTrait {

    /**
     * 2 mtt diminution.
     *
     * @var float
     */
    private $_2MttDiminution;

    /**
     * Get the 2 mtt diminution.
     *
     * @return float Returns the 2 mtt diminution.
     */
    public function get2MttDiminution() {
        return $this->_2MttDiminution;
    }

    /**
     * Set the 2 mtt diminution.
     *
     * @param float $_2MttDiminution The 2 mtt diminution.
     */
    public function set2MttDiminution($_2MttDiminution) {
        $this->_2MttDiminution = $_2MttDiminution;
        return $this;
    }
}
