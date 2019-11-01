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
 * Min garanti trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMinGarantiTrait {

    /**
     * Min garanti.
     *
     * @var float
     */
    private $minGaranti;

    /**
     * Get the min garanti.
     *
     * @return float Returns the min garanti.
     */
    public function getMinGaranti() {
        return $this->minGaranti;
    }

    /**
     * Set the min garanti.
     *
     * @param float $minGaranti The min garanti.
     */
    public function setMinGaranti($minGaranti) {
        $this->minGaranti = $minGaranti;
        return $this;
    }
}
