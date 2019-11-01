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
 * Couleur calendrier trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntCouleurCalendrierTrait {

    /**
     * Couleur calendrier.
     *
     * @var int
     */
    private $couleurCalendrier;

    /**
     * Get the couleur calendrier.
     *
     * @return int Returns the couleur calendrier.
     */
    public function getCouleurCalendrier() {
        return $this->couleurCalendrier;
    }

    /**
     * Set the couleur calendrier.
     *
     * @param int $couleurCalendrier The couleur calendrier.
     */
    public function setCouleurCalendrier($couleurCalendrier) {
        $this->couleurCalendrier = $couleurCalendrier;
        return $this;
    }
}
