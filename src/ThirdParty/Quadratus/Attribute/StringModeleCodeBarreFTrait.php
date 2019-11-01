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
 * Modele code barre f trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringModeleCodeBarreFTrait {

    /**
     * Modele code barre f.
     *
     * @var string
     */
    private $modeleCodeBarreF;

    /**
     * Get the modele code barre f.
     *
     * @return string Returns the modele code barre f.
     */
    public function getModeleCodeBarreF() {
        return $this->modeleCodeBarreF;
    }

    /**
     * Set the modele code barre f.
     *
     * @param string $modeleCodeBarreF The modele code barre f.
     */
    public function setModeleCodeBarreF($modeleCodeBarreF) {
        $this->modeleCodeBarreF = $modeleCodeBarreF;
        return $this;
    }
}
