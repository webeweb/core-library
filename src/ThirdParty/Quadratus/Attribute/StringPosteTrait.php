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
 * Poste trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringPosteTrait {

    /**
     * Poste.
     *
     * @var string
     */
    private $poste;

    /**
     * Get the poste.
     *
     * @return string Returns the poste.
     */
    public function getPoste() {
        return $this->poste;
    }

    /**
     * Set the poste.
     *
     * @param string $poste The poste.
     */
    public function setPoste($poste) {
        $this->poste = $poste;
        return $this;
    }
}
