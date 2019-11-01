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
 * 10 biens immos trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait Float10BiensImmosTrait {

    /**
     * 10 biens immos.
     *
     * @var float
     */
    private $_10BiensImmos;

    /**
     * Get the 10 biens immos.
     *
     * @return float Returns the 10 biens immos.
     */
    public function get10BiensImmos() {
        return $this->_10BiensImmos;
    }

    /**
     * Set the 10 biens immos.
     *
     * @param float $_10BiensImmos The 10 biens immos.
     */
    public function set10BiensImmos($_10BiensImmos) {
        $this->_10BiensImmos = $_10BiensImmos;
        return $this;
    }
}
