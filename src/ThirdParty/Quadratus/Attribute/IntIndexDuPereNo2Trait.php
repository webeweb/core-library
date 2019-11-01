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
 * Index du pere no2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntIndexDuPereNo2Trait {

    /**
     * Index du pere no2.
     *
     * @var int
     */
    private $indexDuPereNo2;

    /**
     * Get the index du pere no2.
     *
     * @return int Returns the index du pere no2.
     */
    public function getIndexDuPereNo2() {
        return $this->indexDuPereNo2;
    }

    /**
     * Set the index du pere no2.
     *
     * @param int $indexDuPereNo2 The index du pere no2.
     */
    public function setIndexDuPereNo2($indexDuPereNo2) {
        $this->indexDuPereNo2 = $indexDuPereNo2;
        return $this;
    }
}
