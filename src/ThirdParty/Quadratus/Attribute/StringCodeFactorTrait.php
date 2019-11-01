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
 * Code factor trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeFactorTrait {

    /**
     * Code factor.
     *
     * @var string
     */
    private $codeFactor;

    /**
     * Get the code factor.
     *
     * @return string Returns the code factor.
     */
    public function getCodeFactor() {
        return $this->codeFactor;
    }

    /**
     * Set the code factor.
     *
     * @param string $codeFactor The code factor.
     */
    public function setCodeFactor($codeFactor) {
        $this->codeFactor = $codeFactor;
        return $this;
    }
}
