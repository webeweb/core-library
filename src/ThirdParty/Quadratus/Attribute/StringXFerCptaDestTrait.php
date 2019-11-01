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
 * X fer cpta dest trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringXFerCptaDestTrait {

    /**
     * X fer cpta dest.
     *
     * @var string
     */
    private $xFerCptaDest;

    /**
     * Get the x fer cpta dest.
     *
     * @return string Returns the x fer cpta dest.
     */
    public function getXFerCptaDest() {
        return $this->xFerCptaDest;
    }

    /**
     * Set the x fer cpta dest.
     *
     * @param string $xFerCptaDest The x fer cpta dest.
     */
    public function setXFerCptaDest($xFerCptaDest) {
        $this->xFerCptaDest = $xFerCptaDest;
        return $this;
    }
}
