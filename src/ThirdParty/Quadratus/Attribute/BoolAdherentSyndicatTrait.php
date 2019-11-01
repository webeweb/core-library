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
 * Adherent syndicat trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAdherentSyndicatTrait {

    /**
     * Adherent syndicat.
     *
     * @var bool
     */
    private $adherentSyndicat;

    /**
     * Get the adherent syndicat.
     *
     * @return bool Returns the adherent syndicat.
     */
    public function getAdherentSyndicat() {
        return $this->adherentSyndicat;
    }

    /**
     * Set the adherent syndicat.
     *
     * @param bool $adherentSyndicat The adherent syndicat.
     */
    public function setAdherentSyndicat($adherentSyndicat) {
        $this->adherentSyndicat = $adherentSyndicat;
        return $this;
    }
}
