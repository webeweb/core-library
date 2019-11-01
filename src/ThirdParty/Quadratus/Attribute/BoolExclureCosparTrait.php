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
 * Exclure cospar trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolExclureCosparTrait {

    /**
     * Exclure cospar.
     *
     * @var bool
     */
    private $exclureCospar;

    /**
     * Get the exclure cospar.
     *
     * @return bool Returns the exclure cospar.
     */
    public function getExclureCospar() {
        return $this->exclureCospar;
    }

    /**
     * Set the exclure cospar.
     *
     * @param bool $exclureCospar The exclure cospar.
     */
    public function setExclureCospar($exclureCospar) {
        $this->exclureCospar = $exclureCospar;
        return $this;
    }
}
