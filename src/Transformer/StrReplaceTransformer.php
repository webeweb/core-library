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
 * str_replace transformer.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Transformer
 */
class StrReplaceTransformer implements TransformerInterface {

    /**
     * Replaces.
     *
     * @var array
     */
    private $replaces;

    /**
     * Searches.
     *
     * @var array
     */
    private $searches;

    /**
     * Constructor.
     *
     * @param array $searches The searches.
     * @param array $replaces The replaces.
     */
    public function __construct(array $searches, array $replaces) {
        $this->setReplaces($replaces);
        $this->setSearches($searches);
    }

    /**
     * Get the replaces.
     *
     * @return array Returns the replaces.
     */
    public function getReplaces() {
        return $this->replaces;
    }

    /**
     * Get the searches.
     *
     * @return array Returns the searches.
     */
    public function getSearches() {
        return $this->searches;
    }

    /**
     * Set the replaces.
     *
     * @param array $replaces The replaces.
     * @return TransformerInterface Returns this str_replace transformer.
     */
    public function setReplaces(array $replaces) {
        $this->replaces = $replaces;
        return $this;
    }

    /**
     * Set the searches.
     *
     * @param array $searches The seaches.
     * @return TransformerInterface Returns this str_replace transformer.
     */
    public function setSearches(array $searches) {
        $this->searches = $searches;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function transform($value) {
        if (null === $value || false === is_string($value)) {
            return null;
        }
        return str_replace($this->getSearches(), $this->getReplaces(), $value);
    }
}
