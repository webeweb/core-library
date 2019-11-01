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
 * Increm auto aff trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolIncremAutoAffTrait {

    /**
     * Increm auto aff.
     *
     * @var bool
     */
    private $incremAutoAff;

    /**
     * Get the increm auto aff.
     *
     * @return bool Returns the increm auto aff.
     */
    public function getIncremAutoAff() {
        return $this->incremAutoAff;
    }

    /**
     * Set the increm auto aff.
     *
     * @param bool $incremAutoAff The increm auto aff.
     */
    public function setIncremAutoAff($incremAutoAff) {
        $this->incremAutoAff = $incremAutoAff;
        return $this;
    }
}
