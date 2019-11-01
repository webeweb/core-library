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
 * Code convention trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeConventionTrait {

    /**
     * Code convention.
     *
     * @var string
     */
    private $codeConvention;

    /**
     * Get the code convention.
     *
     * @return string Returns the code convention.
     */
    public function getCodeConvention() {
        return $this->codeConvention;
    }

    /**
     * Set the code convention.
     *
     * @param string $codeConvention The code convention.
     */
    public function setCodeConvention($codeConvention) {
        $this->codeConvention = $codeConvention;
        return $this;
    }
}
