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
 * Tva e4 dbs trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTvaE4DbsTrait {

    /**
     * Tva e4 dbs.
     *
     * @var string
     */
    private $tvaE4Dbs;

    /**
     * Get the tva e4 dbs.
     *
     * @return string Returns the tva e4 dbs.
     */
    public function getTvaE4Dbs() {
        return $this->tvaE4Dbs;
    }

    /**
     * Set the tva e4 dbs.
     *
     * @param string $tvaE4Dbs The tva e4 dbs.
     */
    public function setTvaE4Dbs($tvaE4Dbs) {
        $this->tvaE4Dbs = $tvaE4Dbs;
        return $this;
    }
}
