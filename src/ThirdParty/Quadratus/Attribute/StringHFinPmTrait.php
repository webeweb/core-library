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
 * H fin pm trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringHFinPmTrait {

    /**
     * H fin pm.
     *
     * @var string
     */
    private $hFinPm;

    /**
     * Get the h fin pm.
     *
     * @return string Returns the h fin pm.
     */
    public function getHFinPm() {
        return $this->hFinPm;
    }

    /**
     * Set the h fin pm.
     *
     * @param string $hFinPm The h fin pm.
     */
    public function setHFinPm($hFinPm) {
        $this->hFinPm = $hFinPm;
        return $this;
    }
}
