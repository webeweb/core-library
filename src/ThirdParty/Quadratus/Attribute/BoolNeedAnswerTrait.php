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
 * Need answer trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolNeedAnswerTrait {

    /**
     * Need answer.
     *
     * @var bool
     */
    private $needAnswer;

    /**
     * Get the need answer.
     *
     * @return bool Returns the need answer.
     */
    public function getNeedAnswer() {
        return $this->needAnswer;
    }

    /**
     * Set the need answer.
     *
     * @param bool $needAnswer The need answer.
     */
    public function setNeedAnswer($needAnswer) {
        $this->needAnswer = $needAnswer;
        return $this;
    }
}
