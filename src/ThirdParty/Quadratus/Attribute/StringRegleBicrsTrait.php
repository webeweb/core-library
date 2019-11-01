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
 * Regle bicrs trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringRegleBicrsTrait {

    /**
     * Regle bicrs.
     *
     * @var string
     */
    private $regleBicrs;

    /**
     * Get the regle bicrs.
     *
     * @return string Returns the regle bicrs.
     */
    public function getRegleBicrs() {
        return $this->regleBicrs;
    }

    /**
     * Set the regle bicrs.
     *
     * @param string $regleBicrs The regle bicrs.
     */
    public function setRegleBicrs($regleBicrs) {
        $this->regleBicrs = $regleBicrs;
        return $this;
    }
}
