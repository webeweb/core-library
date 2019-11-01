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
 * Clausespeciale trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringClausespecialeTrait {

    /**
     * Clausespeciale.
     *
     * @var string
     */
    private $clausespeciale;

    /**
     * Get the clausespeciale.
     *
     * @return string Returns the clausespeciale.
     */
    public function getClausespeciale() {
        return $this->clausespeciale;
    }

    /**
     * Set the clausespeciale.
     *
     * @param string $clausespeciale The clausespeciale.
     */
    public function setClausespeciale($clausespeciale) {
        $this->clausespeciale = $clausespeciale;
        return $this;
    }
}
