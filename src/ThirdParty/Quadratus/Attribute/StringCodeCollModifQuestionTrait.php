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
 * Code coll modif question trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeCollModifQuestionTrait {

    /**
     * Code coll modif question.
     *
     * @var string
     */
    private $codeCollModifQuestion;

    /**
     * Get the code coll modif question.
     *
     * @return string Returns the code coll modif question.
     */
    public function getCodeCollModifQuestion() {
        return $this->codeCollModifQuestion;
    }

    /**
     * Set the code coll modif question.
     *
     * @param string $codeCollModifQuestion The code coll modif question.
     */
    public function setCodeCollModifQuestion($codeCollModifQuestion) {
        $this->codeCollModifQuestion = $codeCollModifQuestion;
        return $this;
    }
}
