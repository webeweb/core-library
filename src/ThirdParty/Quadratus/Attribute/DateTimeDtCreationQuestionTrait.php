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

use DateTime;

/**
 * Dt creation question trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDtCreationQuestionTrait {

    /**
     * Dt creation question.
     *
     * @var DateTime|null
     */
    private $dtCreationQuestion;

    /**
     * Get the dt creation question.
     *
     * @return DateTime|null Returns the dt creation question.
     */
    public function getDtCreationQuestion() {
        return $this->dtCreationQuestion;
    }

    /**
     * Set the dt creation question.
     *
     * @param DateTime|null $dtCreationQuestion The dt creation question.
     */
    public function setDtCreationQuestion(DateTime $dtCreationQuestion = null) {
        $this->dtCreationQuestion = $dtCreationQuestion;
        return $this;
    }
}
