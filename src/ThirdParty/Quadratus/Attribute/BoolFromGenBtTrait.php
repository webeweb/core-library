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
 * From gen bt trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolFromGenBtTrait {

    /**
     * From gen bt.
     *
     * @var bool
     */
    private $fromGenBt;

    /**
     * Get the from gen bt.
     *
     * @return bool Returns the from gen bt.
     */
    public function getFromGenBt() {
        return $this->fromGenBt;
    }

    /**
     * Set the from gen bt.
     *
     * @param bool $fromGenBt The from gen bt.
     */
    public function setFromGenBt($fromGenBt) {
        $this->fromGenBt = $fromGenBt;
        return $this;
    }
}
