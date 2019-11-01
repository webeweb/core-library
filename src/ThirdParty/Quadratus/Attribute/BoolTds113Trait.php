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
 * Tds113 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolTds113Trait {

    /**
     * Tds113.
     *
     * @var bool
     */
    private $tds113;

    /**
     * Get the tds113.
     *
     * @return bool Returns the tds113.
     */
    public function getTds113() {
        return $this->tds113;
    }

    /**
     * Set the tds113.
     *
     * @param bool $tds113 The tds113.
     */
    public function setTds113($tds113) {
        $this->tds113 = $tds113;
        return $this;
    }
}
