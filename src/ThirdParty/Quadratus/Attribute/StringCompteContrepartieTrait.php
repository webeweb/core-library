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
 * Compte contrepartie trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCompteContrepartieTrait {

    /**
     * Compte contrepartie.
     *
     * @var string
     */
    private $compteContrepartie;

    /**
     * Get the compte contrepartie.
     *
     * @return string Returns the compte contrepartie.
     */
    public function getCompteContrepartie() {
        return $this->compteContrepartie;
    }

    /**
     * Set the compte contrepartie.
     *
     * @param string $compteContrepartie The compte contrepartie.
     */
    public function setCompteContrepartie($compteContrepartie) {
        $this->compteContrepartie = $compteContrepartie;
        return $this;
    }
}
