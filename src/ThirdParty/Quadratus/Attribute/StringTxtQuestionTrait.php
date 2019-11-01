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
 * Txt question trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTxtQuestionTrait {

    /**
     * Txt question.
     *
     * @var string
     */
    private $txtQuestion;

    /**
     * Get the txt question.
     *
     * @return string Returns the txt question.
     */
    public function getTxtQuestion() {
        return $this->txtQuestion;
    }

    /**
     * Set the txt question.
     *
     * @param string $txtQuestion The txt question.
     */
    public function setTxtQuestion($txtQuestion) {
        $this->txtQuestion = $txtQuestion;
        return $this;
    }
}
