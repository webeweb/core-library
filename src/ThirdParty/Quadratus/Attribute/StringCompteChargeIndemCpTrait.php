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
 * Compte charge indem cp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCompteChargeIndemCpTrait {

    /**
     * Compte charge indem cp.
     *
     * @var string
     */
    private $compteChargeIndemCp;

    /**
     * Get the compte charge indem cp.
     *
     * @return string Returns the compte charge indem cp.
     */
    public function getCompteChargeIndemCp() {
        return $this->compteChargeIndemCp;
    }

    /**
     * Set the compte charge indem cp.
     *
     * @param string $compteChargeIndemCp The compte charge indem cp.
     */
    public function setCompteChargeIndemCp($compteChargeIndemCp) {
        $this->compteChargeIndemCp = $compteChargeIndemCp;
        return $this;
    }
}
