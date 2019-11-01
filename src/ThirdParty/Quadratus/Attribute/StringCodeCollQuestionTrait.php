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
 * Code coll question trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeCollQuestionTrait {

    /**
     * Code coll question.
     *
     * @var string
     */
    private $codeCollQuestion;

    /**
     * Get the code coll question.
     *
     * @return string Returns the code coll question.
     */
    public function getCodeCollQuestion() {
        return $this->codeCollQuestion;
    }

    /**
     * Set the code coll question.
     *
     * @param string $codeCollQuestion The code coll question.
     */
    public function setCodeCollQuestion($codeCollQuestion) {
        $this->codeCollQuestion = $codeCollQuestion;
        return $this;
    }
}
