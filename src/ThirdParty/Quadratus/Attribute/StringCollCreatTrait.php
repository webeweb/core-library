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
 * Coll creat trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCollCreatTrait {

    /**
     * Coll creat.
     *
     * @var string
     */
    private $collCreat;

    /**
     * Get the coll creat.
     *
     * @return string Returns the coll creat.
     */
    public function getCollCreat() {
        return $this->collCreat;
    }

    /**
     * Set the coll creat.
     *
     * @param string $collCreat The coll creat.
     */
    public function setCollCreat($collCreat) {
        $this->collCreat = $collCreat;
        return $this;
    }
}
