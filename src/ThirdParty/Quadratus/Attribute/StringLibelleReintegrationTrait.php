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
 * Libelle reintegration trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLibelleReintegrationTrait {

    /**
     * Libelle reintegration.
     *
     * @var string
     */
    private $libelleReintegration;

    /**
     * Get the libelle reintegration.
     *
     * @return string Returns the libelle reintegration.
     */
    public function getLibelleReintegration() {
        return $this->libelleReintegration;
    }

    /**
     * Set the libelle reintegration.
     *
     * @param string $libelleReintegration The libelle reintegration.
     */
    public function setLibelleReintegration($libelleReintegration) {
        $this->libelleReintegration = $libelleReintegration;
        return $this;
    }
}
