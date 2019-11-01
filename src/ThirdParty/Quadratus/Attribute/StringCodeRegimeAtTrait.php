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
 * Code regime at trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeRegimeAtTrait {

    /**
     * Code regime at.
     *
     * @var string
     */
    private $codeRegimeAt;

    /**
     * Get the code regime at.
     *
     * @return string Returns the code regime at.
     */
    public function getCodeRegimeAt() {
        return $this->codeRegimeAt;
    }

    /**
     * Set the code regime at.
     *
     * @param string $codeRegimeAt The code regime at.
     */
    public function setCodeRegimeAt($codeRegimeAt) {
        $this->codeRegimeAt = $codeRegimeAt;
        return $this;
    }
}
