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
 * 13 total tva deduc trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait Float13TotalTvaDeducTrait {

    /**
     * 13 total tva deduc.
     *
     * @var float
     */
    private $_13TotalTvaDeduc;

    /**
     * Get the 13 total tva deduc.
     *
     * @return float Returns the 13 total tva deduc.
     */
    public function get13TotalTvaDeduc() {
        return $this->_13TotalTvaDeduc;
    }

    /**
     * Set the 13 total tva deduc.
     *
     * @param float $_13TotalTvaDeduc The 13 total tva deduc.
     */
    public function set13TotalTvaDeduc($_13TotalTvaDeduc) {
        $this->_13TotalTvaDeduc = $_13TotalTvaDeduc;
        return $this;
    }
}
