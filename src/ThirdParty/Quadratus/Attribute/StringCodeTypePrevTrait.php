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
 * Code type prev trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeTypePrevTrait {

    /**
     * Code type prev.
     *
     * @var string
     */
    private $codeTypePrev;

    /**
     * Get the code type prev.
     *
     * @return string Returns the code type prev.
     */
    public function getCodeTypePrev() {
        return $this->codeTypePrev;
    }

    /**
     * Set the code type prev.
     *
     * @param string $codeTypePrev The code type prev.
     */
    public function setCodeTypePrev($codeTypePrev) {
        $this->codeTypePrev = $codeTypePrev;
        return $this;
    }
}
