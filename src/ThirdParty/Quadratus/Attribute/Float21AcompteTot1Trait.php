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
 * 21 acompte tot1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait Float21AcompteTot1Trait {

    /**
     * 21 acompte tot1.
     *
     * @var float
     */
    private $_21AcompteTot1;

    /**
     * Get the 21 acompte tot1.
     *
     * @return float Returns the 21 acompte tot1.
     */
    public function get21AcompteTot1() {
        return $this->_21AcompteTot1;
    }

    /**
     * Set the 21 acompte tot1.
     *
     * @param float $_21AcompteTot1 The 21 acompte tot1.
     */
    public function set21AcompteTot1($_21AcompteTot1) {
        $this->_21AcompteTot1 = $_21AcompteTot1;
        return $this;
    }
}
