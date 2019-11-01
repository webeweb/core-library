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
 * Part patron prev forfait social8 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPartPatronPrevForfaitSocial8Trait {

    /**
     * Part patron prev forfait social8.
     *
     * @var float
     */
    private $partPatronPrevForfaitSocial8;

    /**
     * Get the part patron prev forfait social8.
     *
     * @return float Returns the part patron prev forfait social8.
     */
    public function getPartPatronPrevForfaitSocial8() {
        return $this->partPatronPrevForfaitSocial8;
    }

    /**
     * Set the part patron prev forfait social8.
     *
     * @param float $partPatronPrevForfaitSocial8 The part patron prev forfait social8.
     */
    public function setPartPatronPrevForfaitSocial8($partPatronPrevForfaitSocial8) {
        $this->partPatronPrevForfaitSocial8 = $partPatronPrevForfaitSocial8;
        return $this;
    }
}
