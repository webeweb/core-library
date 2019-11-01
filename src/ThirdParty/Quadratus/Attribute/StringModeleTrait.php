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
 * Modele trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringModeleTrait {

    /**
     * Modele.
     *
     * @var string
     */
    private $modele;

    /**
     * Get the modele.
     *
     * @return string Returns the modele.
     */
    public function getModele() {
        return $this->modele;
    }

    /**
     * Set the modele.
     *
     * @param string $modele The modele.
     */
    public function setModele($modele) {
        $this->modele = $modele;
        return $this;
    }
}
