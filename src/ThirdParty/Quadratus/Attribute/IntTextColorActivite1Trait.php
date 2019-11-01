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
 * Text color activite1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntTextColorActivite1Trait {

    /**
     * Text color activite1.
     *
     * @var int
     */
    private $textColorActivite1;

    /**
     * Get the text color activite1.
     *
     * @return int Returns the text color activite1.
     */
    public function getTextColorActivite1() {
        return $this->textColorActivite1;
    }

    /**
     * Set the text color activite1.
     *
     * @param int $textColorActivite1 The text color activite1.
     */
    public function setTextColorActivite1($textColorActivite1) {
        $this->textColorActivite1 = $textColorActivite1;
        return $this;
    }
}
