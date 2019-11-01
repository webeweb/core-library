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
 * Recurrente trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolRecurrenteTrait {

    /**
     * Recurrente.
     *
     * @var bool
     */
    private $recurrente;

    /**
     * Get the recurrente.
     *
     * @return bool Returns the recurrente.
     */
    public function getRecurrente() {
        return $this->recurrente;
    }

    /**
     * Set the recurrente.
     *
     * @param bool $recurrente The recurrente.
     */
    public function setRecurrente($recurrente) {
        $this->recurrente = $recurrente;
        return $this;
    }
}
