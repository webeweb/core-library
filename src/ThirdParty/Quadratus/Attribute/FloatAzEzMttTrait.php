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
 * Az ez mtt trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAzEzMttTrait {

    /**
     * Az ez mtt.
     *
     * @var float
     */
    private $azEzMtt;

    /**
     * Get the az ez mtt.
     *
     * @return float Returns the az ez mtt.
     */
    public function getAzEzMtt() {
        return $this->azEzMtt;
    }

    /**
     * Set the az ez mtt.
     *
     * @param float $azEzMtt The az ez mtt.
     */
    public function setAzEzMtt($azEzMtt) {
        $this->azEzMtt = $azEzMtt;
        return $this;
    }
}
