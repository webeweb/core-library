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
 * Code exc trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeExcTrait {

    /**
     * Code exc.
     *
     * @var string
     */
    private $codeExc;

    /**
     * Get the code exc.
     *
     * @return string Returns the code exc.
     */
    public function getCodeExc() {
        return $this->codeExc;
    }

    /**
     * Set the code exc.
     *
     * @param string $codeExc The code exc.
     */
    public function setCodeExc($codeExc) {
        $this->codeExc = $codeExc;
        return $this;
    }
}
