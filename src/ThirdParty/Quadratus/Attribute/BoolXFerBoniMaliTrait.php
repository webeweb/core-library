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
 * X fer boni mali trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolXFerBoniMaliTrait {

    /**
     * X fer boni mali.
     *
     * @var bool
     */
    private $xFerBoniMali;

    /**
     * Get the x fer boni mali.
     *
     * @return bool Returns the x fer boni mali.
     */
    public function getXFerBoniMali() {
        return $this->xFerBoniMali;
    }

    /**
     * Set the x fer boni mali.
     *
     * @param bool $xFerBoniMali The x fer boni mali.
     */
    public function setXFerBoniMali($xFerBoniMali) {
        $this->xFerBoniMali = $xFerBoniMali;
        return $this;
    }
}
