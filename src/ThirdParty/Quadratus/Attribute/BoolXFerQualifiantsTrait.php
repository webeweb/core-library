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
 * X fer qualifiants trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolXFerQualifiantsTrait {

    /**
     * X fer qualifiants.
     *
     * @var bool
     */
    private $xFerQualifiants;

    /**
     * Get the x fer qualifiants.
     *
     * @return bool Returns the x fer qualifiants.
     */
    public function getXFerQualifiants() {
        return $this->xFerQualifiants;
    }

    /**
     * Set the x fer qualifiants.
     *
     * @param bool $xFerQualifiants The x fer qualifiants.
     */
    public function setXFerQualifiants($xFerQualifiants) {
        $this->xFerQualifiants = $xFerQualifiants;
        return $this;
    }
}
