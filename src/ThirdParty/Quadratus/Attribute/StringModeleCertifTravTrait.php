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
 * Modele certif trav trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringModeleCertifTravTrait {

    /**
     * Modele certif trav.
     *
     * @var string
     */
    private $modeleCertifTrav;

    /**
     * Get the modele certif trav.
     *
     * @return string Returns the modele certif trav.
     */
    public function getModeleCertifTrav() {
        return $this->modeleCertifTrav;
    }

    /**
     * Set the modele certif trav.
     *
     * @param string $modeleCertifTrav The modele certif trav.
     */
    public function setModeleCertifTrav($modeleCertifTrav) {
        $this->modeleCertifTrav = $modeleCertifTrav;
        return $this;
    }
}
