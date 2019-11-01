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
 * Caution trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCautionTrait {

    /**
     * Caution.
     *
     * @var float
     */
    private $caution;

    /**
     * Get the caution.
     *
     * @return float Returns the caution.
     */
    public function getCaution() {
        return $this->caution;
    }

    /**
     * Set the caution.
     *
     * @param float $caution The caution.
     */
    public function setCaution($caution) {
        $this->caution = $caution;
        return $this;
    }
}
