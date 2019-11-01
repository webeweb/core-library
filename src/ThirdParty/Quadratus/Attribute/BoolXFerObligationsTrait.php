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
 * X fer obligations trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolXFerObligationsTrait {

    /**
     * X fer obligations.
     *
     * @var bool
     */
    private $xFerObligations;

    /**
     * Get the x fer obligations.
     *
     * @return bool Returns the x fer obligations.
     */
    public function getXFerObligations() {
        return $this->xFerObligations;
    }

    /**
     * Set the x fer obligations.
     *
     * @param bool $xFerObligations The x fer obligations.
     */
    public function setXFerObligations($xFerObligations) {
        $this->xFerObligations = $xFerObligations;
        return $this;
    }
}
