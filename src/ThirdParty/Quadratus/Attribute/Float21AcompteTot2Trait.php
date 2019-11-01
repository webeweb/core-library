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
 * 21 acompte tot2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait Float21AcompteTot2Trait {

    /**
     * 21 acompte tot2.
     *
     * @var float
     */
    private $_21AcompteTot2;

    /**
     * Get the 21 acompte tot2.
     *
     * @return float Returns the 21 acompte tot2.
     */
    public function get21AcompteTot2() {
        return $this->_21AcompteTot2;
    }

    /**
     * Set the 21 acompte tot2.
     *
     * @param float $_21AcompteTot2 The 21 acompte tot2.
     */
    public function set21AcompteTot2($_21AcompteTot2) {
        $this->_21AcompteTot2 = $_21AcompteTot2;
        return $this;
    }
}
