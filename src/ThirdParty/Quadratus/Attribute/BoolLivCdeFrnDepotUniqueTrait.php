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
 * Liv cde frn depot unique trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolLivCdeFrnDepotUniqueTrait {

    /**
     * Liv cde frn depot unique.
     *
     * @var bool
     */
    private $livCdeFrnDepotUnique;

    /**
     * Get the liv cde frn depot unique.
     *
     * @return bool Returns the liv cde frn depot unique.
     */
    public function getLivCdeFrnDepotUnique() {
        return $this->livCdeFrnDepotUnique;
    }

    /**
     * Set the liv cde frn depot unique.
     *
     * @param bool $livCdeFrnDepotUnique The liv cde frn depot unique.
     */
    public function setLivCdeFrnDepotUnique($livCdeFrnDepotUnique) {
        $this->livCdeFrnDepotUnique = $livCdeFrnDepotUnique;
        return $this;
    }
}
