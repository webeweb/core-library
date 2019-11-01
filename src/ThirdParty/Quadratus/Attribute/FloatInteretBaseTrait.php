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
 * Interet base trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatInteretBaseTrait {

    /**
     * Interet base.
     *
     * @var float
     */
    private $interetBase;

    /**
     * Get the interet base.
     *
     * @return float Returns the interet base.
     */
    public function getInteretBase() {
        return $this->interetBase;
    }

    /**
     * Set the interet base.
     *
     * @param float $interetBase The interet base.
     */
    public function setInteretBase($interetBase) {
        $this->interetBase = $interetBase;
        return $this;
    }
}
