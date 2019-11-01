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
 * Code postal mt trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodePostalMtTrait {

    /**
     * Code postal mt.
     *
     * @var string
     */
    private $codePostalMt;

    /**
     * Get the code postal mt.
     *
     * @return string Returns the code postal mt.
     */
    public function getCodePostalMt() {
        return $this->codePostalMt;
    }

    /**
     * Set the code postal mt.
     *
     * @param string $codePostalMt The code postal mt.
     */
    public function setCodePostalMt($codePostalMt) {
        $this->codePostalMt = $codePostalMt;
        return $this;
    }
}
