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
 * Decalage fermeture auto jours trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntDecalageFermetureAutoJoursTrait {

    /**
     * Decalage fermeture auto jours.
     *
     * @var int
     */
    private $decalageFermetureAutoJours;

    /**
     * Get the decalage fermeture auto jours.
     *
     * @return int Returns the decalage fermeture auto jours.
     */
    public function getDecalageFermetureAutoJours() {
        return $this->decalageFermetureAutoJours;
    }

    /**
     * Set the decalage fermeture auto jours.
     *
     * @param int $decalageFermetureAutoJours The decalage fermeture auto jours.
     */
    public function setDecalageFermetureAutoJours($decalageFermetureAutoJours) {
        $this->decalageFermetureAutoJours = $decalageFermetureAutoJours;
        return $this;
    }
}
