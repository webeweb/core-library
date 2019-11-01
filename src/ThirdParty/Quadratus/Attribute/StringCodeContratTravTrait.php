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
 * Code contrat trav trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeContratTravTrait {

    /**
     * Code contrat trav.
     *
     * @var string
     */
    private $codeContratTrav;

    /**
     * Get the code contrat trav.
     *
     * @return string Returns the code contrat trav.
     */
    public function getCodeContratTrav() {
        return $this->codeContratTrav;
    }

    /**
     * Set the code contrat trav.
     *
     * @param string $codeContratTrav The code contrat trav.
     */
    public function setCodeContratTrav($codeContratTrav) {
        $this->codeContratTrav = $codeContratTrav;
        return $this;
    }
}
