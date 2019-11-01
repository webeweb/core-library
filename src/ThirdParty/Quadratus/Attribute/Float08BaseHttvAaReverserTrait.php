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
 * 08 base httv aa reverser trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait Float08BaseHttvAaReverserTrait {

    /**
     * 08 base httv aa reverser.
     *
     * @var float
     */
    private $_08BaseHttvAaReverser;

    /**
     * Get the 08 base httv aa reverser.
     *
     * @return float Returns the 08 base httv aa reverser.
     */
    public function get08BaseHttvAaReverser() {
        return $this->_08BaseHttvAaReverser;
    }

    /**
     * Set the 08 base httv aa reverser.
     *
     * @param float $_08BaseHttvAaReverser The 08 base httv aa reverser.
     */
    public function set08BaseHttvAaReverser($_08BaseHttvAaReverser) {
        $this->_08BaseHttvAaReverser = $_08BaseHttvAaReverser;
        return $this;
    }
}
