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
 * Code lib h nuit trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeLibHNuitTrait {

    /**
     * Code lib h nuit.
     *
     * @var string
     */
    private $codeLibHNuit;

    /**
     * Get the code lib h nuit.
     *
     * @return string Returns the code lib h nuit.
     */
    public function getCodeLibHNuit() {
        return $this->codeLibHNuit;
    }

    /**
     * Set the code lib h nuit.
     *
     * @param string $codeLibHNuit The code lib h nuit.
     */
    public function setCodeLibHNuit($codeLibHNuit) {
        $this->codeLibHNuit = $codeLibHNuit;
        return $this;
    }
}
