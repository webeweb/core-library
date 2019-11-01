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
 * Modele apercu trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringModeleApercuTrait {

    /**
     * Modele apercu.
     *
     * @var string
     */
    private $modeleApercu;

    /**
     * Get the modele apercu.
     *
     * @return string Returns the modele apercu.
     */
    public function getModeleApercu() {
        return $this->modeleApercu;
    }

    /**
     * Set the modele apercu.
     *
     * @param string $modeleApercu The modele apercu.
     */
    public function setModeleApercu($modeleApercu) {
        $this->modeleApercu = $modeleApercu;
        return $this;
    }
}
