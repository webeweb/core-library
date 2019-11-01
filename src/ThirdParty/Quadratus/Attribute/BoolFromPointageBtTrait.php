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
 * From pointage bt trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolFromPointageBtTrait {

    /**
     * From pointage bt.
     *
     * @var bool
     */
    private $fromPointageBt;

    /**
     * Get the from pointage bt.
     *
     * @return bool Returns the from pointage bt.
     */
    public function getFromPointageBt() {
        return $this->fromPointageBt;
    }

    /**
     * Set the from pointage bt.
     *
     * @param bool $fromPointageBt The from pointage bt.
     */
    public function setFromPointageBt($fromPointageBt) {
        $this->fromPointageBt = $fromPointageBt;
        return $this;
    }
}
