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
 * Compte contrepartie aamm trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCompteContrepartieAammTrait {

    /**
     * Compte contrepartie aamm.
     *
     * @var string
     */
    private $compteContrepartieAamm;

    /**
     * Get the compte contrepartie aamm.
     *
     * @return string Returns the compte contrepartie aamm.
     */
    public function getCompteContrepartieAamm() {
        return $this->compteContrepartieAamm;
    }

    /**
     * Set the compte contrepartie aamm.
     *
     * @param string $compteContrepartieAamm The compte contrepartie aamm.
     */
    public function setCompteContrepartieAamm($compteContrepartieAamm) {
        $this->compteContrepartieAamm = $compteContrepartieAamm;
        return $this;
    }
}
