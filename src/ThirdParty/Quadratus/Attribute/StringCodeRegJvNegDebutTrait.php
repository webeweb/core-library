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
 * Code reg jv neg debut trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeRegJvNegDebutTrait {

    /**
     * Code reg jv neg debut.
     *
     * @var string
     */
    private $codeRegJvNegDebut;

    /**
     * Get the code reg jv neg debut.
     *
     * @return string Returns the code reg jv neg debut.
     */
    public function getCodeRegJvNegDebut() {
        return $this->codeRegJvNegDebut;
    }

    /**
     * Set the code reg jv neg debut.
     *
     * @param string $codeRegJvNegDebut The code reg jv neg debut.
     */
    public function setCodeRegJvNegDebut($codeRegJvNegDebut) {
        $this->codeRegJvNegDebut = $codeRegJvNegDebut;
        return $this;
    }
}
