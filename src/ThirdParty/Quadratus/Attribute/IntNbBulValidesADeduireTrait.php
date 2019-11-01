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
 * Nb bul valides a deduire trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbBulValidesADeduireTrait {

    /**
     * Nb bul valides a deduire.
     *
     * @var int
     */
    private $nbBulValidesADeduire;

    /**
     * Get the nb bul valides a deduire.
     *
     * @return int Returns the nb bul valides a deduire.
     */
    public function getNbBulValidesADeduire() {
        return $this->nbBulValidesADeduire;
    }

    /**
     * Set the nb bul valides a deduire.
     *
     * @param int $nbBulValidesADeduire The nb bul valides a deduire.
     */
    public function setNbBulValidesADeduire($nbBulValidesADeduire) {
        $this->nbBulValidesADeduire = $nbBulValidesADeduire;
        return $this;
    }
}
