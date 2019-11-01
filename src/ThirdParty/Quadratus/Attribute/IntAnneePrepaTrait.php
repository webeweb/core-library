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
 * Annee prepa trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntAnneePrepaTrait {

    /**
     * Annee prepa.
     *
     * @var int
     */
    private $anneePrepa;

    /**
     * Get the annee prepa.
     *
     * @return int Returns the annee prepa.
     */
    public function getAnneePrepa() {
        return $this->anneePrepa;
    }

    /**
     * Set the annee prepa.
     *
     * @param int $anneePrepa The annee prepa.
     */
    public function setAnneePrepa($anneePrepa) {
        $this->anneePrepa = $anneePrepa;
        return $this;
    }
}
