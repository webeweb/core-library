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
 * H rempl trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatHRemplTrait {

    /**
     * H rempl.
     *
     * @var float
     */
    private $hRempl;

    /**
     * Get the h rempl.
     *
     * @return float Returns the h rempl.
     */
    public function getHRempl() {
        return $this->hRempl;
    }

    /**
     * Set the h rempl.
     *
     * @param float $hRempl The h rempl.
     */
    public function setHRempl($hRempl) {
        $this->hRempl = $hRempl;
        return $this;
    }
}
