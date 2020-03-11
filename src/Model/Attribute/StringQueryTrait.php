<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Model\Attribute;

/**
 * String query trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Model\Attribute
 */
trait StringQueryTrait {

    /**
     * Query.
     *
     * @var string
     */
    protected $query;

    /**
     * Get the query.
     *
     * @return string Returns the query.
     */
    public function getQuery() {
        return $this->query;
    }

    /**
     * Set the query.
     *
     * @param string $query The query.
     */
    public function setQuery($query) {
        $this->query = $query;
        return $this;
    }
}
