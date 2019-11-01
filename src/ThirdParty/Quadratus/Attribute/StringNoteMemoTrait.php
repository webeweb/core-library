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
 * Note memo trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNoteMemoTrait {

    /**
     * Note memo.
     *
     * @var string
     */
    private $noteMemo;

    /**
     * Get the note memo.
     *
     * @return string Returns the note memo.
     */
    public function getNoteMemo() {
        return $this->noteMemo;
    }

    /**
     * Set the note memo.
     *
     * @param string $noteMemo The note memo.
     */
    public function setNoteMemo($noteMemo) {
        $this->noteMemo = $noteMemo;
        return $this;
    }
}
