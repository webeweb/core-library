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
 * Code option trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeOptionTrait {

    /**
     * Code option.
     *
     * @var string
     */
    private $codeOption;

    /**
     * Get the code option.
     *
     * @return string Returns the code option.
     */
    public function getCodeOption() {
        return $this->codeOption;
    }

    /**
     * Set the code option.
     *
     * @param string $codeOption The code option.
     */
    public function setCodeOption($codeOption) {
        $this->codeOption = $codeOption;
        return $this;
    }
}
