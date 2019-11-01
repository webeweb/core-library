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
 * Modele code barre trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringModeleCodeBarreTrait {

    /**
     * Modele code barre.
     *
     * @var string
     */
    private $modeleCodeBarre;

    /**
     * Get the modele code barre.
     *
     * @return string Returns the modele code barre.
     */
    public function getModeleCodeBarre() {
        return $this->modeleCodeBarre;
    }

    /**
     * Set the modele code barre.
     *
     * @param string $modeleCodeBarre The modele code barre.
     */
    public function setModeleCodeBarre($modeleCodeBarre) {
        $this->modeleCodeBarre = $modeleCodeBarre;
        return $this;
    }
}
