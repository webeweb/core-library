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
 * Combi lettrage auto trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntCombiLettrageAutoTrait {

    /**
     * Combi lettrage auto.
     *
     * @var int
     */
    private $combiLettrageAuto;

    /**
     * Get the combi lettrage auto.
     *
     * @return int Returns the combi lettrage auto.
     */
    public function getCombiLettrageAuto() {
        return $this->combiLettrageAuto;
    }

    /**
     * Set the combi lettrage auto.
     *
     * @param int $combiLettrageAuto The combi lettrage auto.
     */
    public function setCombiLettrageAuto($combiLettrageAuto) {
        $this->combiLettrageAuto = $combiLettrageAuto;
        return $this;
    }
}
