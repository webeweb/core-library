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
 * 11 autres biens trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait Float11AutresBiensTrait {

    /**
     * 11 autres biens.
     *
     * @var float
     */
    private $_11AutresBiens;

    /**
     * Get the 11 autres biens.
     *
     * @return float Returns the 11 autres biens.
     */
    public function get11AutresBiens() {
        return $this->_11AutresBiens;
    }

    /**
     * Set the 11 autres biens.
     *
     * @param float $_11AutresBiens The 11 autres biens.
     */
    public function set11AutresBiens($_11AutresBiens) {
        $this->_11AutresBiens = $_11AutresBiens;
        return $this;
    }
}
