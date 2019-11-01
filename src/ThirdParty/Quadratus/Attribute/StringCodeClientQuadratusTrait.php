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
 * Code client quadratus trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeClientQuadratusTrait {

    /**
     * Code client quadratus.
     *
     * @var string
     */
    private $codeClientQuadratus;

    /**
     * Get the code client quadratus.
     *
     * @return string Returns the code client quadratus.
     */
    public function getCodeClientQuadratus() {
        return $this->codeClientQuadratus;
    }

    /**
     * Set the code client quadratus.
     *
     * @param string $codeClientQuadratus The code client quadratus.
     */
    public function setCodeClientQuadratus($codeClientQuadratus) {
        $this->codeClientQuadratus = $codeClientQuadratus;
        return $this;
    }
}
