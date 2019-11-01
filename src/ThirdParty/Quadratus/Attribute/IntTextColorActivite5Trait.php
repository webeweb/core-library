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
 * Text color activite5 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntTextColorActivite5Trait {

    /**
     * Text color activite5.
     *
     * @var int
     */
    private $textColorActivite5;

    /**
     * Get the text color activite5.
     *
     * @return int Returns the text color activite5.
     */
    public function getTextColorActivite5() {
        return $this->textColorActivite5;
    }

    /**
     * Set the text color activite5.
     *
     * @param int $textColorActivite5 The text color activite5.
     */
    public function setTextColorActivite5($textColorActivite5) {
        $this->textColorActivite5 = $textColorActivite5;
        return $this;
    }
}
