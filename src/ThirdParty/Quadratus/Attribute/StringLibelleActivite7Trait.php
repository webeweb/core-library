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
 * Libelle activite7 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLibelleActivite7Trait {

    /**
     * Libelle activite7.
     *
     * @var string
     */
    private $libelleActivite7;

    /**
     * Get the libelle activite7.
     *
     * @return string Returns the libelle activite7.
     */
    public function getLibelleActivite7() {
        return $this->libelleActivite7;
    }

    /**
     * Set the libelle activite7.
     *
     * @param string $libelleActivite7 The libelle activite7.
     */
    public function setLibelleActivite7($libelleActivite7) {
        $this->libelleActivite7 = $libelleActivite7;
        return $this;
    }
}
