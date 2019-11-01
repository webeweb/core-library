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
 * Num uniq ecriture trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNumUniqEcritureTrait {

    /**
     * Num uniq ecriture.
     *
     * @var int
     */
    private $numUniqEcriture;

    /**
     * Get the num uniq ecriture.
     *
     * @return int Returns the num uniq ecriture.
     */
    public function getNumUniqEcriture() {
        return $this->numUniqEcriture;
    }

    /**
     * Set the num uniq ecriture.
     *
     * @param int $numUniqEcriture The num uniq ecriture.
     */
    public function setNumUniqEcriture($numUniqEcriture) {
        $this->numUniqEcriture = $numUniqEcriture;
        return $this;
    }
}
