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
 * X fer int no cli only trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolXFerIntNoCliOnlyTrait {

    /**
     * X fer int no cli only.
     *
     * @var bool
     */
    private $xFerIntNoCliOnly;

    /**
     * Get the x fer int no cli only.
     *
     * @return bool Returns the x fer int no cli only.
     */
    public function getXFerIntNoCliOnly() {
        return $this->xFerIntNoCliOnly;
    }

    /**
     * Set the x fer int no cli only.
     *
     * @param bool $xFerIntNoCliOnly The x fer int no cli only.
     */
    public function setXFerIntNoCliOnly($xFerIntNoCliOnly) {
        $this->xFerIntNoCliOnly = $xFerIntNoCliOnly;
        return $this;
    }
}
