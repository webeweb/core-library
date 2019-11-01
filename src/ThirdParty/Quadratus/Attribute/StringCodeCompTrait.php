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
 * Code comp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeCompTrait {

    /**
     * Code comp.
     *
     * @var string
     */
    private $codeComp;

    /**
     * Get the code comp.
     *
     * @return string Returns the code comp.
     */
    public function getCodeComp() {
        return $this->codeComp;
    }

    /**
     * Set the code comp.
     *
     * @param string $codeComp The code comp.
     */
    public function setCodeComp($codeComp) {
        $this->codeComp = $codeComp;
        return $this;
    }
}
