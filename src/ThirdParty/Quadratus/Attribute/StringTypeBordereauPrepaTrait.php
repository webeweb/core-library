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
 * Type bordereau prepa trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeBordereauPrepaTrait {

    /**
     * Type bordereau prepa.
     *
     * @var string
     */
    private $typeBordereauPrepa;

    /**
     * Get the type bordereau prepa.
     *
     * @return string Returns the type bordereau prepa.
     */
    public function getTypeBordereauPrepa() {
        return $this->typeBordereauPrepa;
    }

    /**
     * Set the type bordereau prepa.
     *
     * @param string $typeBordereauPrepa The type bordereau prepa.
     */
    public function setTypeBordereauPrepa($typeBordereauPrepa) {
        $this->typeBordereauPrepa = $typeBordereauPrepa;
        return $this;
    }
}
