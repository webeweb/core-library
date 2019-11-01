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
 * Repartition auto trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolRepartitionAutoTrait {

    /**
     * Repartition auto.
     *
     * @var bool
     */
    private $repartitionAuto;

    /**
     * Get the repartition auto.
     *
     * @return bool Returns the repartition auto.
     */
    public function getRepartitionAuto() {
        return $this->repartitionAuto;
    }

    /**
     * Set the repartition auto.
     *
     * @param bool $repartitionAuto The repartition auto.
     */
    public function setRepartitionAuto($repartitionAuto) {
        $this->repartitionAuto = $repartitionAuto;
        return $this;
    }
}
