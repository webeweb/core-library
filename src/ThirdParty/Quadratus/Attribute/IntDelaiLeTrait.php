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
 * Delai le trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntDelaiLeTrait {

    /**
     * Delai le.
     *
     * @var int
     */
    private $delaiLe;

    /**
     * Get the delai le.
     *
     * @return int Returns the delai le.
     */
    public function getDelaiLe() {
        return $this->delaiLe;
    }

    /**
     * Set the delai le.
     *
     * @param int $delaiLe The delai le.
     */
    public function setDelaiLe($delaiLe) {
        $this->delaiLe = $delaiLe;
        return $this;
    }
}
