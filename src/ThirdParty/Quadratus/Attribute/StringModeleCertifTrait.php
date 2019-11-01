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
 * Modele certif trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringModeleCertifTrait {

    /**
     * Modele certif.
     *
     * @var string
     */
    private $modeleCertif;

    /**
     * Get the modele certif.
     *
     * @return string Returns the modele certif.
     */
    public function getModeleCertif() {
        return $this->modeleCertif;
    }

    /**
     * Set the modele certif.
     *
     * @param string $modeleCertif The modele certif.
     */
    public function setModeleCertif($modeleCertif) {
        $this->modeleCertif = $modeleCertif;
        return $this;
    }
}
