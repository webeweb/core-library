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
 * Index du pere no4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntIndexDuPereNo4Trait {

    /**
     * Index du pere no4.
     *
     * @var int
     */
    private $indexDuPereNo4;

    /**
     * Get the index du pere no4.
     *
     * @return int Returns the index du pere no4.
     */
    public function getIndexDuPereNo4() {
        return $this->indexDuPereNo4;
    }

    /**
     * Set the index du pere no4.
     *
     * @param int $indexDuPereNo4 The index du pere no4.
     */
    public function setIndexDuPereNo4($indexDuPereNo4) {
        $this->indexDuPereNo4 = $indexDuPereNo4;
        return $this;
    }
}
