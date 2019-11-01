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
 * Index du pere no3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntIndexDuPereNo3Trait {

    /**
     * Index du pere no3.
     *
     * @var int
     */
    private $indexDuPereNo3;

    /**
     * Get the index du pere no3.
     *
     * @return int Returns the index du pere no3.
     */
    public function getIndexDuPereNo3() {
        return $this->indexDuPereNo3;
    }

    /**
     * Set the index du pere no3.
     *
     * @param int $indexDuPereNo3 The index du pere no3.
     */
    public function setIndexDuPereNo3($indexDuPereNo3) {
        $this->indexDuPereNo3 = $indexDuPereNo3;
        return $this;
    }
}
