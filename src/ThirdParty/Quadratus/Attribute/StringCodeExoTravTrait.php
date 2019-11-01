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
 * Code exo trav trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeExoTravTrait {

    /**
     * Code exo trav.
     *
     * @var string
     */
    private $codeExoTrav;

    /**
     * Get the code exo trav.
     *
     * @return string Returns the code exo trav.
     */
    public function getCodeExoTrav() {
        return $this->codeExoTrav;
    }

    /**
     * Set the code exo trav.
     *
     * @param string $codeExoTrav The code exo trav.
     */
    public function setCodeExoTrav($codeExoTrav) {
        $this->codeExoTrav = $codeExoTrav;
        return $this;
    }
}
