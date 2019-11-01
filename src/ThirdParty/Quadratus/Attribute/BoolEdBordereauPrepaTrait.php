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
 * Ed bordereau prepa trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolEdBordereauPrepaTrait {

    /**
     * Ed bordereau prepa.
     *
     * @var bool
     */
    private $edBordereauPrepa;

    /**
     * Get the ed bordereau prepa.
     *
     * @return bool Returns the ed bordereau prepa.
     */
    public function getEdBordereauPrepa() {
        return $this->edBordereauPrepa;
    }

    /**
     * Set the ed bordereau prepa.
     *
     * @param bool $edBordereauPrepa The ed bordereau prepa.
     */
    public function setEdBordereauPrepa($edBordereauPrepa) {
        $this->edBordereauPrepa = $edBordereauPrepa;
        return $this;
    }
}
