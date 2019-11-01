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
 * Gest juri trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolGestJuriTrait {

    /**
     * Gest juri.
     *
     * @var bool
     */
    private $gestJuri;

    /**
     * Get the gest juri.
     *
     * @return bool Returns the gest juri.
     */
    public function getGestJuri() {
        return $this->gestJuri;
    }

    /**
     * Set the gest juri.
     *
     * @param bool $gestJuri The gest juri.
     */
    public function setGestJuri($gestJuri) {
        $this->gestJuri = $gestJuri;
        return $this;
    }
}
