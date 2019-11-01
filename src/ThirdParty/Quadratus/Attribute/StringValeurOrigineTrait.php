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
 * Valeur origine trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringValeurOrigineTrait {

    /**
     * Valeur origine.
     *
     * @var string
     */
    private $valeurOrigine;

    /**
     * Get the valeur origine.
     *
     * @return string Returns the valeur origine.
     */
    public function getValeurOrigine() {
        return $this->valeurOrigine;
    }

    /**
     * Set the valeur origine.
     *
     * @param string $valeurOrigine The valeur origine.
     */
    public function setValeurOrigine($valeurOrigine) {
        $this->valeurOrigine = $valeurOrigine;
        return $this;
    }
}
