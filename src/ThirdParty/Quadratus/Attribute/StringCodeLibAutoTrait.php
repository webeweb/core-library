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
 * Code lib auto trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeLibAutoTrait {

    /**
     * Code lib auto.
     *
     * @var string
     */
    private $codeLibAuto;

    /**
     * Get the code lib auto.
     *
     * @return string Returns the code lib auto.
     */
    public function getCodeLibAuto() {
        return $this->codeLibAuto;
    }

    /**
     * Set the code lib auto.
     *
     * @param string $codeLibAuto The code lib auto.
     */
    public function setCodeLibAuto($codeLibAuto) {
        $this->codeLibAuto = $codeLibAuto;
        return $this;
    }
}
