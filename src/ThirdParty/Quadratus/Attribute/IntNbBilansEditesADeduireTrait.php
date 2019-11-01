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
 * Nb bilans edites a deduire trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbBilansEditesADeduireTrait {

    /**
     * Nb bilans edites a deduire.
     *
     * @var int
     */
    private $nbBilansEditesADeduire;

    /**
     * Get the nb bilans edites a deduire.
     *
     * @return int Returns the nb bilans edites a deduire.
     */
    public function getNbBilansEditesADeduire() {
        return $this->nbBilansEditesADeduire;
    }

    /**
     * Set the nb bilans edites a deduire.
     *
     * @param int $nbBilansEditesADeduire The nb bilans edites a deduire.
     */
    public function setNbBilansEditesADeduire($nbBilansEditesADeduire) {
        $this->nbBilansEditesADeduire = $nbBilansEditesADeduire;
        return $this;
    }
}
