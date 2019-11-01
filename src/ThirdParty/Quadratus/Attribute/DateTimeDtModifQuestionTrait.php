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
 * Dt modif question trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDtModifQuestionTrait {

    /**
     * Dt modif question.
     *
     * @var DateTime|null
     */
    private $dtModifQuestion;

    /**
     * Get the dt modif question.
     *
     * @return DateTime|null Returns the dt modif question.
     */
    public function getDtModifQuestion() {
        return $this->dtModifQuestion;
    }

    /**
     * Set the dt modif question.
     *
     * @param DateTime|null $dtModifQuestion The dt modif question.
     */
    public function setDtModifQuestion(DateTime $dtModifQuestion = null) {
        $this->dtModifQuestion = $dtModifQuestion;
        return $this;
    }
}
