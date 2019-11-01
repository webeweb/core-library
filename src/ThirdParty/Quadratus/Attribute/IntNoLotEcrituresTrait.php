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
 * No lot ecritures trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNoLotEcrituresTrait {

    /**
     * No lot ecritures.
     *
     * @var int
     */
    private $noLotEcritures;

    /**
     * Get the no lot ecritures.
     *
     * @return int Returns the no lot ecritures.
     */
    public function getNoLotEcritures() {
        return $this->noLotEcritures;
    }

    /**
     * Set the no lot ecritures.
     *
     * @param int $noLotEcritures The no lot ecritures.
     */
    public function setNoLotEcritures($noLotEcritures) {
        $this->noLotEcritures = $noLotEcritures;
        return $this;
    }
}
