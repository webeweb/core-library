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
 * Statut particulier trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntStatutParticulierTrait {

    /**
     * Statut particulier.
     *
     * @var int
     */
    private $statutParticulier;

    /**
     * Get the statut particulier.
     *
     * @return int Returns the statut particulier.
     */
    public function getStatutParticulier() {
        return $this->statutParticulier;
    }

    /**
     * Set the statut particulier.
     *
     * @param int $statutParticulier The statut particulier.
     */
    public function setStatutParticulier($statutParticulier) {
        $this->statutParticulier = $statutParticulier;
        return $this;
    }
}
