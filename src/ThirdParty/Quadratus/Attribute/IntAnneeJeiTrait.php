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
 * Annee jei trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntAnneeJeiTrait {

    /**
     * Annee jei.
     *
     * @var int
     */
    private $anneeJei;

    /**
     * Get the annee jei.
     *
     * @return int Returns the annee jei.
     */
    public function getAnneeJei() {
        return $this->anneeJei;
    }

    /**
     * Set the annee jei.
     *
     * @param int $anneeJei The annee jei.
     */
    public function setAnneeJei($anneeJei) {
        $this->anneeJei = $anneeJei;
        return $this;
    }
}
