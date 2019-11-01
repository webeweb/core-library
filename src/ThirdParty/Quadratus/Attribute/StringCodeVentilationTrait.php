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
 * Code ventilation trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeVentilationTrait {

    /**
     * Code ventilation.
     *
     * @var string
     */
    private $codeVentilation;

    /**
     * Get the code ventilation.
     *
     * @return string Returns the code ventilation.
     */
    public function getCodeVentilation() {
        return $this->codeVentilation;
    }

    /**
     * Set the code ventilation.
     *
     * @param string $codeVentilation The code ventilation.
     */
    public function setCodeVentilation($codeVentilation) {
        $this->codeVentilation = $codeVentilation;
        return $this;
    }
}
