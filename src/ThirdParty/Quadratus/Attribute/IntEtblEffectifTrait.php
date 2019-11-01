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
 * Etbl effectif trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntEtblEffectifTrait {

    /**
     * Etbl effectif.
     *
     * @var int
     */
    private $etblEffectif;

    /**
     * Get the etbl effectif.
     *
     * @return int Returns the etbl effectif.
     */
    public function getEtblEffectif() {
        return $this->etblEffectif;
    }

    /**
     * Set the etbl effectif.
     *
     * @param int $etblEffectif The etbl effectif.
     */
    public function setEtblEffectif($etblEffectif) {
        $this->etblEffectif = $etblEffectif;
        return $this;
    }
}
