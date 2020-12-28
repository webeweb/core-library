<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Transformer;

use WBW\Library\Core\Transformer\API\TransformerInterface;

/**
 * html_entity_decode transformer.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Transformer
 */
class HTMLEntityDecodeTransformer implements TransformerInterface {

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * {@inheritDoc}
     */
    public function transform($value) {
        if (null === $value || false === is_string($value)) {
            return null;
        }
        return html_entity_decode($value);
    }
}
