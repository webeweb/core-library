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
 * Sortie mois trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolSortieMoisTrait {

    /**
     * Sortie mois.
     *
     * @var bool
     */
    private $sortieMois;

    /**
     * Get the sortie mois.
     *
     * @return bool Returns the sortie mois.
     */
    public function getSortieMois() {
        return $this->sortieMois;
    }

    /**
     * Set the sortie mois.
     *
     * @param bool $sortieMois The sortie mois.
     */
    public function setSortieMois($sortieMois) {
        $this->sortieMois = $sortieMois;
        return $this;
    }
}
