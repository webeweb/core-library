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
 * Text color activite9 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntTextColorActivite9Trait {

    /**
     * Text color activite9.
     *
     * @var int
     */
    private $textColorActivite9;

    /**
     * Get the text color activite9.
     *
     * @return int Returns the text color activite9.
     */
    public function getTextColorActivite9() {
        return $this->textColorActivite9;
    }

    /**
     * Set the text color activite9.
     *
     * @param int $textColorActivite9 The text color activite9.
     */
    public function setTextColorActivite9($textColorActivite9) {
        $this->textColorActivite9 = $textColorActivite9;
        return $this;
    }
}
