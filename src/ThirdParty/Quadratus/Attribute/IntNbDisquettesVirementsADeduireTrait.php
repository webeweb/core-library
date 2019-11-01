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
 * Nb disquettes virements a deduire trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbDisquettesVirementsADeduireTrait {

    /**
     * Nb disquettes virements a deduire.
     *
     * @var int
     */
    private $nbDisquettesVirementsADeduire;

    /**
     * Get the nb disquettes virements a deduire.
     *
     * @return int Returns the nb disquettes virements a deduire.
     */
    public function getNbDisquettesVirementsADeduire() {
        return $this->nbDisquettesVirementsADeduire;
    }

    /**
     * Set the nb disquettes virements a deduire.
     *
     * @param int $nbDisquettesVirementsADeduire The nb disquettes virements a deduire.
     */
    public function setNbDisquettesVirementsADeduire($nbDisquettesVirementsADeduire) {
        $this->nbDisquettesVirementsADeduire = $nbDisquettesVirementsADeduire;
        return $this;
    }
}
