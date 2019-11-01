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
 * Anciennete trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAncienneteTrait {

    /**
     * Anciennete.
     *
     * @var float
     */
    private $anciennete;

    /**
     * Get the anciennete.
     *
     * @return float Returns the anciennete.
     */
    public function getAnciennete() {
        return $this->anciennete;
    }

    /**
     * Set the anciennete.
     *
     * @param float $anciennete The anciennete.
     */
    public function setAnciennete($anciennete) {
        $this->anciennete = $anciennete;
        return $this;
    }
}
