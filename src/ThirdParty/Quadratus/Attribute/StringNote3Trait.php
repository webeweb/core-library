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
 * Note3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNote3Trait {

    /**
     * Note3.
     *
     * @var string
     */
    private $note3;

    /**
     * Get the note3.
     *
     * @return string Returns the note3.
     */
    public function getNote3() {
        return $this->note3;
    }

    /**
     * Set the note3.
     *
     * @param string $note3 The note3.
     */
    public function setNote3($note3) {
        $this->note3 = $note3;
        return $this;
    }
}
