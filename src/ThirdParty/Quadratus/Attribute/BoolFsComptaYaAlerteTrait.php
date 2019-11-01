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
 * Fs compta ya alerte trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolFsComptaYaAlerteTrait {

    /**
     * Fs compta ya alerte.
     *
     * @var bool
     */
    private $fsComptaYaAlerte;

    /**
     * Get the fs compta ya alerte.
     *
     * @return bool Returns the fs compta ya alerte.
     */
    public function getFsComptaYaAlerte() {
        return $this->fsComptaYaAlerte;
    }

    /**
     * Set the fs compta ya alerte.
     *
     * @param bool $fsComptaYaAlerte The fs compta ya alerte.
     */
    public function setFsComptaYaAlerte($fsComptaYaAlerte) {
        $this->fsComptaYaAlerte = $fsComptaYaAlerte;
        return $this;
    }
}
