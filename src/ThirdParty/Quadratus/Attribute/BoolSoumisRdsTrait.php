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
 * Soumis rds trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolSoumisRdsTrait {

    /**
     * Soumis rds.
     *
     * @var bool
     */
    private $soumisRds;

    /**
     * Get the soumis rds.
     *
     * @return bool Returns the soumis rds.
     */
    public function getSoumisRds() {
        return $this->soumisRds;
    }

    /**
     * Set the soumis rds.
     *
     * @param bool $soumisRds The soumis rds.
     */
    public function setSoumisRds($soumisRds) {
        $this->soumisRds = $soumisRds;
        return $this;
    }
}
