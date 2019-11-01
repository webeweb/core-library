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
 * X fer mission principale trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolXFerMissionPrincipaleTrait {

    /**
     * X fer mission principale.
     *
     * @var bool
     */
    private $xFerMissionPrincipale;

    /**
     * Get the x fer mission principale.
     *
     * @return bool Returns the x fer mission principale.
     */
    public function getXFerMissionPrincipale() {
        return $this->xFerMissionPrincipale;
    }

    /**
     * Set the x fer mission principale.
     *
     * @param bool $xFerMissionPrincipale The x fer mission principale.
     */
    public function setXFerMissionPrincipale($xFerMissionPrincipale) {
        $this->xFerMissionPrincipale = $xFerMissionPrincipale;
        return $this;
    }
}
