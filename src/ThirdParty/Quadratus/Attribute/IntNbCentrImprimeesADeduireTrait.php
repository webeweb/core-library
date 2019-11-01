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
 * Nb centr imprimees a deduire trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbCentrImprimeesADeduireTrait {

    /**
     * Nb centr imprimees a deduire.
     *
     * @var int
     */
    private $nbCentrImprimeesADeduire;

    /**
     * Get the nb centr imprimees a deduire.
     *
     * @return int Returns the nb centr imprimees a deduire.
     */
    public function getNbCentrImprimeesADeduire() {
        return $this->nbCentrImprimeesADeduire;
    }

    /**
     * Set the nb centr imprimees a deduire.
     *
     * @param int $nbCentrImprimeesADeduire The nb centr imprimees a deduire.
     */
    public function setNbCentrImprimeesADeduire($nbCentrImprimeesADeduire) {
        $this->nbCentrImprimeesADeduire = $nbCentrImprimeesADeduire;
        return $this;
    }
}
