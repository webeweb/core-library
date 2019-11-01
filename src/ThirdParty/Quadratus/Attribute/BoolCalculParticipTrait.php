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
 * Calcul particip trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCalculParticipTrait {

    /**
     * Calcul particip.
     *
     * @var bool
     */
    private $calculParticip;

    /**
     * Get the calcul particip.
     *
     * @return bool Returns the calcul particip.
     */
    public function getCalculParticip() {
        return $this->calculParticip;
    }

    /**
     * Set the calcul particip.
     *
     * @param bool $calculParticip The calcul particip.
     */
    public function setCalculParticip($calculParticip) {
        $this->calculParticip = $calculParticip;
        return $this;
    }
}
