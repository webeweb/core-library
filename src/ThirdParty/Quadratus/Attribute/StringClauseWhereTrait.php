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
 * Clause where trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringClauseWhereTrait {

    /**
     * Clause where.
     *
     * @var string
     */
    private $clauseWhere;

    /**
     * Get the clause where.
     *
     * @return string Returns the clause where.
     */
    public function getClauseWhere() {
        return $this->clauseWhere;
    }

    /**
     * Set the clause where.
     *
     * @param string $clauseWhere The clause where.
     */
    public function setClauseWhere($clauseWhere) {
        $this->clauseWhere = $clauseWhere;
        return $this;
    }
}
