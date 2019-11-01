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
 * Libelle activite8 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLibelleActivite8Trait {

    /**
     * Libelle activite8.
     *
     * @var string
     */
    private $libelleActivite8;

    /**
     * Get the libelle activite8.
     *
     * @return string Returns the libelle activite8.
     */
    public function getLibelleActivite8() {
        return $this->libelleActivite8;
    }

    /**
     * Set the libelle activite8.
     *
     * @param string $libelleActivite8 The libelle activite8.
     */
    public function setLibelleActivite8($libelleActivite8) {
        $this->libelleActivite8 = $libelleActivite8;
        return $this;
    }
}
