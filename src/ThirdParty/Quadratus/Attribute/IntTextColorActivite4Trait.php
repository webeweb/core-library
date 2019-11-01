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
 * Text color activite4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntTextColorActivite4Trait {

    /**
     * Text color activite4.
     *
     * @var int
     */
    private $textColorActivite4;

    /**
     * Get the text color activite4.
     *
     * @return int Returns the text color activite4.
     */
    public function getTextColorActivite4() {
        return $this->textColorActivite4;
    }

    /**
     * Set the text color activite4.
     *
     * @param int $textColorActivite4 The text color activite4.
     */
    public function setTextColorActivite4($textColorActivite4) {
        $this->textColorActivite4 = $textColorActivite4;
        return $this;
    }
}
