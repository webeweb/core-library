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
 * Forma pro base trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatFormaProBaseTrait {

    /**
     * Forma pro base.
     *
     * @var float
     */
    private $formaProBase;

    /**
     * Get the forma pro base.
     *
     * @return float Returns the forma pro base.
     */
    public function getFormaProBase() {
        return $this->formaProBase;
    }

    /**
     * Set the forma pro base.
     *
     * @param float $formaProBase The forma pro base.
     */
    public function setFormaProBase($formaProBase) {
        $this->formaProBase = $formaProBase;
        return $this;
    }
}
