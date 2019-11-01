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
 * Code filtre trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeFiltreTrait {

    /**
     * Code filtre.
     *
     * @var string
     */
    private $codeFiltre;

    /**
     * Get the code filtre.
     *
     * @return string Returns the code filtre.
     */
    public function getCodeFiltre() {
        return $this->codeFiltre;
    }

    /**
     * Set the code filtre.
     *
     * @param string $codeFiltre The code filtre.
     */
    public function setCodeFiltre($codeFiltre) {
        $this->codeFiltre = $codeFiltre;
        return $this;
    }
}
