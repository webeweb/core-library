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
 * Az gc mtt trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAzGcMttTrait {

    /**
     * Az gc mtt.
     *
     * @var float
     */
    private $azGcMtt;

    /**
     * Get the az gc mtt.
     *
     * @return float Returns the az gc mtt.
     */
    public function getAzGcMtt() {
        return $this->azGcMtt;
    }

    /**
     * Set the az gc mtt.
     *
     * @param float $azGcMtt The az gc mtt.
     */
    public function setAzGcMtt($azGcMtt) {
        $this->azGcMtt = $azGcMtt;
        return $this;
    }
}
