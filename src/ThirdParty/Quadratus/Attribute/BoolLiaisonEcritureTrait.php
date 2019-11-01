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
 * Liaison ecriture trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolLiaisonEcritureTrait {

    /**
     * Liaison ecriture.
     *
     * @var bool
     */
    private $liaisonEcriture;

    /**
     * Get the liaison ecriture.
     *
     * @return bool Returns the liaison ecriture.
     */
    public function getLiaisonEcriture() {
        return $this->liaisonEcriture;
    }

    /**
     * Set the liaison ecriture.
     *
     * @param bool $liaisonEcriture The liaison ecriture.
     */
    public function setLiaisonEcriture($liaisonEcriture) {
        $this->liaisonEcriture = $liaisonEcriture;
        return $this;
    }
}
