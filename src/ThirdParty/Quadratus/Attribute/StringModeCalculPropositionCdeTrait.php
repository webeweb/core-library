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
 * Mode calcul proposition cde trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringModeCalculPropositionCdeTrait {

    /**
     * Mode calcul proposition cde.
     *
     * @var string
     */
    private $modeCalculPropositionCde;

    /**
     * Get the mode calcul proposition cde.
     *
     * @return string Returns the mode calcul proposition cde.
     */
    public function getModeCalculPropositionCde() {
        return $this->modeCalculPropositionCde;
    }

    /**
     * Set the mode calcul proposition cde.
     *
     * @param string $modeCalculPropositionCde The mode calcul proposition cde.
     */
    public function setModeCalculPropositionCde($modeCalculPropositionCde) {
        $this->modeCalculPropositionCde = $modeCalculPropositionCde;
        return $this;
    }
}
