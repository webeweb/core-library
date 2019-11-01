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
 * Immo transfert forfait vers reel trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolImmoTransfertForfaitVersReelTrait {

    /**
     * Immo transfert forfait vers reel.
     *
     * @var bool
     */
    private $immoTransfertForfaitVersReel;

    /**
     * Get the immo transfert forfait vers reel.
     *
     * @return bool Returns the immo transfert forfait vers reel.
     */
    public function getImmoTransfertForfaitVersReel() {
        return $this->immoTransfertForfaitVersReel;
    }

    /**
     * Set the immo transfert forfait vers reel.
     *
     * @param bool $immoTransfertForfaitVersReel The immo transfert forfait vers reel.
     */
    public function setImmoTransfertForfaitVersReel($immoTransfertForfaitVersReel) {
        $this->immoTransfertForfaitVersReel = $immoTransfertForfaitVersReel;
        return $this;
    }
}
