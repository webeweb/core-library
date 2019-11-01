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
 * Code jv negoce trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeJvNegoceTrait {

    /**
     * Code jv negoce.
     *
     * @var string
     */
    private $codeJvNegoce;

    /**
     * Get the code jv negoce.
     *
     * @return string Returns the code jv negoce.
     */
    public function getCodeJvNegoce() {
        return $this->codeJvNegoce;
    }

    /**
     * Set the code jv negoce.
     *
     * @param string $codeJvNegoce The code jv negoce.
     */
    public function setCodeJvNegoce($codeJvNegoce) {
        $this->codeJvNegoce = $codeJvNegoce;
        return $this;
    }
}
