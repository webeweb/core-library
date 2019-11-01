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
 * 16 rembours tva trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait Float16RemboursTvaTrait {

    /**
     * 16 rembours tva.
     *
     * @var float
     */
    private $_16RemboursTva;

    /**
     * Get the 16 rembours tva.
     *
     * @return float Returns the 16 rembours tva.
     */
    public function get16RemboursTva() {
        return $this->_16RemboursTva;
    }

    /**
     * Set the 16 rembours tva.
     *
     * @param float $_16RemboursTva The 16 rembours tva.
     */
    public function set16RemboursTva($_16RemboursTva) {
        $this->_16RemboursTva = $_16RemboursTva;
        return $this;
    }
}
