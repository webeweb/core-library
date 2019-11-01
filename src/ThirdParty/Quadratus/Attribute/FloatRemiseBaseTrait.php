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
 * Remise base trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatRemiseBaseTrait {

    /**
     * Remise base.
     *
     * @var float
     */
    private $remiseBase;

    /**
     * Get the remise base.
     *
     * @return float Returns the remise base.
     */
    public function getRemiseBase() {
        return $this->remiseBase;
    }

    /**
     * Set the remise base.
     *
     * @param float $remiseBase The remise base.
     */
    public function setRemiseBase($remiseBase) {
        $this->remiseBase = $remiseBase;
        return $this;
    }
}
