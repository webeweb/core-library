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
 * Valeur cotis trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatValeurCotisTrait {

    /**
     * Valeur cotis.
     *
     * @var float
     */
    private $valeurCotis;

    /**
     * Get the valeur cotis.
     *
     * @return float Returns the valeur cotis.
     */
    public function getValeurCotis() {
        return $this->valeurCotis;
    }

    /**
     * Set the valeur cotis.
     *
     * @param float $valeurCotis The valeur cotis.
     */
    public function setValeurCotis($valeurCotis) {
        $this->valeurCotis = $valeurCotis;
        return $this;
    }
}
