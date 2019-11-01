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
 * Az50 mtt trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAz50MttTrait {

    /**
     * Az50 mtt.
     *
     * @var float
     */
    private $az50Mtt;

    /**
     * Get the az50 mtt.
     *
     * @return float Returns the az50 mtt.
     */
    public function getAz50Mtt() {
        return $this->az50Mtt;
    }

    /**
     * Set the az50 mtt.
     *
     * @param float $az50Mtt The az50 mtt.
     */
    public function setAz50Mtt($az50Mtt) {
        $this->az50Mtt = $az50Mtt;
        return $this;
    }
}
