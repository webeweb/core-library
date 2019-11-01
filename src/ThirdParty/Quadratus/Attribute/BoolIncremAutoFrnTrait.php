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
 * Increm auto frn trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolIncremAutoFrnTrait {

    /**
     * Increm auto frn.
     *
     * @var bool
     */
    private $incremAutoFrn;

    /**
     * Get the increm auto frn.
     *
     * @return bool Returns the increm auto frn.
     */
    public function getIncremAutoFrn() {
        return $this->incremAutoFrn;
    }

    /**
     * Set the increm auto frn.
     *
     * @param bool $incremAutoFrn The increm auto frn.
     */
    public function setIncremAutoFrn($incremAutoFrn) {
        $this->incremAutoFrn = $incremAutoFrn;
        return $this;
    }
}
