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
 * Note1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNote1Trait {

    /**
     * Note1.
     *
     * @var string
     */
    private $note1;

    /**
     * Get the note1.
     *
     * @return string Returns the note1.
     */
    public function getNote1() {
        return $this->note1;
    }

    /**
     * Set the note1.
     *
     * @param string $note1 The note1.
     */
    public function setNote1($note1) {
        $this->note1 = $note1;
        return $this;
    }
}
