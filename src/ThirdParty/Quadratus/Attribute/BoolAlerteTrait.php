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
 * Alerte trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAlerteTrait {

    /**
     * Alerte.
     *
     * @var bool
     */
    private $alerte;

    /**
     * Get the alerte.
     *
     * @return bool Returns the alerte.
     */
    public function getAlerte() {
        return $this->alerte;
    }

    /**
     * Set the alerte.
     *
     * @param bool $alerte The alerte.
     */
    public function setAlerte($alerte) {
        $this->alerte = $alerte;
        return $this;
    }
}
