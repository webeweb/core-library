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
 * Identifiant tva trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringIdentifiantTvaTrait {

    /**
     * Identifiant tva.
     *
     * @var string
     */
    private $identifiantTva;

    /**
     * Get the identifiant tva.
     *
     * @return string Returns the identifiant tva.
     */
    public function getIdentifiantTva() {
        return $this->identifiantTva;
    }

    /**
     * Set the identifiant tva.
     *
     * @param string $identifiantTva The identifiant tva.
     */
    public function setIdentifiantTva($identifiantTva) {
        $this->identifiantTva = $identifiantTva;
        return $this;
    }
}
