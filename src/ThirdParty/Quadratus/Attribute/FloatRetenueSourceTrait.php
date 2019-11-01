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
 * Retenue source trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatRetenueSourceTrait {

    /**
     * Retenue source.
     *
     * @var float
     */
    private $retenueSource;

    /**
     * Get the retenue source.
     *
     * @return float Returns the retenue source.
     */
    public function getRetenueSource() {
        return $this->retenueSource;
    }

    /**
     * Set the retenue source.
     *
     * @param float $retenueSource The retenue source.
     */
    public function setRetenueSource($retenueSource) {
        $this->retenueSource = $retenueSource;
        return $this;
    }
}
