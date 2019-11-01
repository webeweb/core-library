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
 * Setp fillon trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatSetpFillonTrait {

    /**
     * Setp fillon.
     *
     * @var float
     */
    private $setpFillon;

    /**
     * Get the setp fillon.
     *
     * @return float Returns the setp fillon.
     */
    public function getSetpFillon() {
        return $this->setpFillon;
    }

    /**
     * Set the setp fillon.
     *
     * @param float $setpFillon The setp fillon.
     */
    public function setSetpFillon($setpFillon) {
        $this->setpFillon = $setpFillon;
        return $this;
    }
}
