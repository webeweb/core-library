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
 * Compte charge int vers trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCompteChargeIntVersTrait {

    /**
     * Compte charge int vers.
     *
     * @var string
     */
    private $compteChargeIntVers;

    /**
     * Get the compte charge int vers.
     *
     * @return string Returns the compte charge int vers.
     */
    public function getCompteChargeIntVers() {
        return $this->compteChargeIntVers;
    }

    /**
     * Set the compte charge int vers.
     *
     * @param string $compteChargeIntVers The compte charge int vers.
     */
    public function setCompteChargeIntVers($compteChargeIntVers) {
        $this->compteChargeIntVers = $compteChargeIntVers;
        return $this;
    }
}
