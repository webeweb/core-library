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
 * Index du pere no1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntIndexDuPereNo1Trait {

    /**
     * Index du pere no1.
     *
     * @var int
     */
    private $indexDuPereNo1;

    /**
     * Get the index du pere no1.
     *
     * @return int Returns the index du pere no1.
     */
    public function getIndexDuPereNo1() {
        return $this->indexDuPereNo1;
    }

    /**
     * Set the index du pere no1.
     *
     * @param int $indexDuPereNo1 The index du pere no1.
     */
    public function setIndexDuPereNo1($indexDuPereNo1) {
        $this->indexDuPereNo1 = $indexDuPereNo1;
        return $this;
    }
}
