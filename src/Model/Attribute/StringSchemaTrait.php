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
 * String schema trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Model\Attribute
 */
trait StringSchemaTrait {

    /**
     * Schema.
     *
     * @var string
     */
    protected $schema;

    /**
     * Get the schema.
     *
     * @return string Returns the schema.
     */
    public function getSchema() {
        return $this->schema;
    }

    /**
     * Set the schema.
     *
     * @param string $schema The schema.
     */
    public function setSchema($schema) {
        $this->schema = $schema;
        return $this;
    }
}
