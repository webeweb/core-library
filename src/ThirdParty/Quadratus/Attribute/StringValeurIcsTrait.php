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
 * Valeur ics trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringValeurIcsTrait {

    /**
     * Valeur ics.
     *
     * @var string
     */
    private $valeurIcs;

    /**
     * Get the valeur ics.
     *
     * @return string Returns the valeur ics.
     */
    public function getValeurIcs() {
        return $this->valeurIcs;
    }

    /**
     * Set the valeur ics.
     *
     * @param string $valeurIcs The valeur ics.
     */
    public function setValeurIcs($valeurIcs) {
        $this->valeurIcs = $valeurIcs;
        return $this;
    }
}
