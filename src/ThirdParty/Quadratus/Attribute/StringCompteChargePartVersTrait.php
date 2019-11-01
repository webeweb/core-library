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
 * Compte charge part vers trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCompteChargePartVersTrait {

    /**
     * Compte charge part vers.
     *
     * @var string
     */
    private $compteChargePartVers;

    /**
     * Get the compte charge part vers.
     *
     * @return string Returns the compte charge part vers.
     */
    public function getCompteChargePartVers() {
        return $this->compteChargePartVers;
    }

    /**
     * Set the compte charge part vers.
     *
     * @param string $compteChargePartVers The compte charge part vers.
     */
    public function setCompteChargePartVers($compteChargePartVers) {
        $this->compteChargePartVers = $compteChargePartVers;
        return $this;
    }
}
