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
 * Code duree trav trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeDureeTravTrait {

    /**
     * Code duree trav.
     *
     * @var string
     */
    private $codeDureeTrav;

    /**
     * Get the code duree trav.
     *
     * @return string Returns the code duree trav.
     */
    public function getCodeDureeTrav() {
        return $this->codeDureeTrav;
    }

    /**
     * Set the code duree trav.
     *
     * @param string $codeDureeTrav The code duree trav.
     */
    public function setCodeDureeTrav($codeDureeTrav) {
        $this->codeDureeTrav = $codeDureeTrav;
        return $this;
    }
}
