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
 * X fer msg trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolXFerMsgTrait {

    /**
     * X fer msg.
     *
     * @var bool
     */
    private $xFerMsg;

    /**
     * Get the x fer msg.
     *
     * @return bool Returns the x fer msg.
     */
    public function getXFerMsg() {
        return $this->xFerMsg;
    }

    /**
     * Set the x fer msg.
     *
     * @param bool $xFerMsg The x fer msg.
     */
    public function setXFerMsg($xFerMsg) {
        $this->xFerMsg = $xFerMsg;
        return $this;
    }
}
