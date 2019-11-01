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
 * Nb liasses fisc editees a deduire trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbLiassesFiscEditeesADeduireTrait {

    /**
     * Nb liasses fisc editees a deduire.
     *
     * @var int
     */
    private $nbLiassesFiscEditeesADeduire;

    /**
     * Get the nb liasses fisc editees a deduire.
     *
     * @return int Returns the nb liasses fisc editees a deduire.
     */
    public function getNbLiassesFiscEditeesADeduire() {
        return $this->nbLiassesFiscEditeesADeduire;
    }

    /**
     * Set the nb liasses fisc editees a deduire.
     *
     * @param int $nbLiassesFiscEditeesADeduire The nb liasses fisc editees a deduire.
     */
    public function setNbLiassesFiscEditeesADeduire($nbLiassesFiscEditeesADeduire) {
        $this->nbLiassesFiscEditeesADeduire = $nbLiassesFiscEditeesADeduire;
        return $this;
    }
}
