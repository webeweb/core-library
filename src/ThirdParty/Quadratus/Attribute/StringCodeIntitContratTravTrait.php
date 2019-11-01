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
 * Code intit contrat trav trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeIntitContratTravTrait {

    /**
     * Code intit contrat trav.
     *
     * @var string
     */
    private $codeIntitContratTrav;

    /**
     * Get the code intit contrat trav.
     *
     * @return string Returns the code intit contrat trav.
     */
    public function getCodeIntitContratTrav() {
        return $this->codeIntitContratTrav;
    }

    /**
     * Set the code intit contrat trav.
     *
     * @param string $codeIntitContratTrav The code intit contrat trav.
     */
    public function setCodeIntitContratTrav($codeIntitContratTrav) {
        $this->codeIntitContratTrav = $codeIntitContratTrav;
        return $this;
    }
}
