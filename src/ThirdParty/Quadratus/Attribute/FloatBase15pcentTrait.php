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
 * Base15pcent trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatBase15pcentTrait {

    /**
     * Base15pcent.
     *
     * @var float
     */
    private $base15pcent;

    /**
     * Get the base15pcent.
     *
     * @return float Returns the base15pcent.
     */
    public function getBase15pcent() {
        return $this->base15pcent;
    }

    /**
     * Set the base15pcent.
     *
     * @param float $base15pcent The base15pcent.
     */
    public function setBase15pcent($base15pcent) {
        $this->base15pcent = $base15pcent;
        return $this;
    }
}
