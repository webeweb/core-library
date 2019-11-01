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
 * Num lot int extournes trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNumLotIntExtournesTrait {

    /**
     * Num lot int extournes.
     *
     * @var int
     */
    private $numLotIntExtournes;

    /**
     * Get the num lot int extournes.
     *
     * @return int Returns the num lot int extournes.
     */
    public function getNumLotIntExtournes() {
        return $this->numLotIntExtournes;
    }

    /**
     * Set the num lot int extournes.
     *
     * @param int $numLotIntExtournes The num lot int extournes.
     */
    public function setNumLotIntExtournes($numLotIntExtournes) {
        $this->numLotIntExtournes = $numLotIntExtournes;
        return $this;
    }
}
