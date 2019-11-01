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
 * 4 mtt diminution trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait Float4MttDiminutionTrait {

    /**
     * 4 mtt diminution.
     *
     * @var float
     */
    private $_4MttDiminution;

    /**
     * Get the 4 mtt diminution.
     *
     * @return float Returns the 4 mtt diminution.
     */
    public function get4MttDiminution() {
        return $this->_4MttDiminution;
    }

    /**
     * Set the 4 mtt diminution.
     *
     * @param float $_4MttDiminution The 4 mtt diminution.
     */
    public function set4MttDiminution($_4MttDiminution) {
        $this->_4MttDiminution = $_4MttDiminution;
        return $this;
    }
}
