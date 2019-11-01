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
 * Text color activite7 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntTextColorActivite7Trait {

    /**
     * Text color activite7.
     *
     * @var int
     */
    private $textColorActivite7;

    /**
     * Get the text color activite7.
     *
     * @return int Returns the text color activite7.
     */
    public function getTextColorActivite7() {
        return $this->textColorActivite7;
    }

    /**
     * Set the text color activite7.
     *
     * @param int $textColorActivite7 The text color activite7.
     */
    public function setTextColorActivite7($textColorActivite7) {
        $this->textColorActivite7 = $textColorActivite7;
        return $this;
    }
}
