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
 * Fs social ya alerte trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolFsSocialYaAlerteTrait {

    /**
     * Fs social ya alerte.
     *
     * @var bool
     */
    private $fsSocialYaAlerte;

    /**
     * Get the fs social ya alerte.
     *
     * @return bool Returns the fs social ya alerte.
     */
    public function getFsSocialYaAlerte() {
        return $this->fsSocialYaAlerte;
    }

    /**
     * Set the fs social ya alerte.
     *
     * @param bool $fsSocialYaAlerte The fs social ya alerte.
     */
    public function setFsSocialYaAlerte($fsSocialYaAlerte) {
        $this->fsSocialYaAlerte = $fsSocialYaAlerte;
        return $this;
    }
}
