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
 * Code abs def jf trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeAbsDefJfTrait {

    /**
     * Code abs def jf.
     *
     * @var string
     */
    private $codeAbsDefJf;

    /**
     * Get the code abs def jf.
     *
     * @return string Returns the code abs def jf.
     */
    public function getCodeAbsDefJf() {
        return $this->codeAbsDefJf;
    }

    /**
     * Set the code abs def jf.
     *
     * @param string $codeAbsDefJf The code abs def jf.
     */
    public function setCodeAbsDefJf($codeAbsDefJf) {
        $this->codeAbsDefJf = $codeAbsDefJf;
        return $this;
    }
}
