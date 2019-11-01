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
 * Annee utilisation trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntAnneeUtilisationTrait {

    /**
     * Annee utilisation.
     *
     * @var int
     */
    private $anneeUtilisation;

    /**
     * Get the annee utilisation.
     *
     * @return int Returns the annee utilisation.
     */
    public function getAnneeUtilisation() {
        return $this->anneeUtilisation;
    }

    /**
     * Set the annee utilisation.
     *
     * @param int $anneeUtilisation The annee utilisation.
     */
    public function setAnneeUtilisation($anneeUtilisation) {
        $this->anneeUtilisation = $anneeUtilisation;
        return $this;
    }
}
