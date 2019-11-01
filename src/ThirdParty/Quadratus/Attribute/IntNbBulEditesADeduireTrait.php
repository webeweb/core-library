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
 * Nb bul edites a deduire trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbBulEditesADeduireTrait {

    /**
     * Nb bul edites a deduire.
     *
     * @var int
     */
    private $nbBulEditesADeduire;

    /**
     * Get the nb bul edites a deduire.
     *
     * @return int Returns the nb bul edites a deduire.
     */
    public function getNbBulEditesADeduire() {
        return $this->nbBulEditesADeduire;
    }

    /**
     * Set the nb bul edites a deduire.
     *
     * @param int $nbBulEditesADeduire The nb bul edites a deduire.
     */
    public function setNbBulEditesADeduire($nbBulEditesADeduire) {
        $this->nbBulEditesADeduire = $nbBulEditesADeduire;
        return $this;
    }
}
