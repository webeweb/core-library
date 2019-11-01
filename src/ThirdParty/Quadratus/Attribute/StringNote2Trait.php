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
 * Note2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNote2Trait {

    /**
     * Note2.
     *
     * @var string
     */
    private $note2;

    /**
     * Get the note2.
     *
     * @return string Returns the note2.
     */
    public function getNote2() {
        return $this->note2;
    }

    /**
     * Set the note2.
     *
     * @param string $note2 The note2.
     */
    public function setNote2($note2) {
        $this->note2 = $note2;
        return $this;
    }
}
