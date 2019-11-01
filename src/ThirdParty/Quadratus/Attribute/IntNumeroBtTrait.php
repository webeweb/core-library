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
 * Numero bt trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNumeroBtTrait {

    /**
     * Numero bt.
     *
     * @var int
     */
    private $numeroBt;

    /**
     * Get the numero bt.
     *
     * @return int Returns the numero bt.
     */
    public function getNumeroBt() {
        return $this->numeroBt;
    }

    /**
     * Set the numero bt.
     *
     * @param int $numeroBt The numero bt.
     */
    public function setNumeroBt($numeroBt) {
        $this->numeroBt = $numeroBt;
        return $this;
    }
}
