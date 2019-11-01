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
 * Libelle activite9 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLibelleActivite9Trait {

    /**
     * Libelle activite9.
     *
     * @var string
     */
    private $libelleActivite9;

    /**
     * Get the libelle activite9.
     *
     * @return string Returns the libelle activite9.
     */
    public function getLibelleActivite9() {
        return $this->libelleActivite9;
    }

    /**
     * Set the libelle activite9.
     *
     * @param string $libelleActivite9 The libelle activite9.
     */
    public function setLibelleActivite9($libelleActivite9) {
        $this->libelleActivite9 = $libelleActivite9;
        return $this;
    }
}
