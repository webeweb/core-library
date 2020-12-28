<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Transformer\Set;

use WBW\Library\Core\Transformer\API\TransformerInterface;
use WBW\Library\Core\Transformer\API\TransformerSetInterface;

/**
 * Abstract transformer set.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Transformer\Set
 */
abstract class AbstractTransformerSet implements TransformerSetInterface {

    /**
     * Transformers.
     *
     * @var TransformerInterface[]
     */
    private $transformers;

    /**
     * Constructor.
     */
    public function __construct() {
        $this->setTransformers([]);
    }

    /**
     * {@inheritDoc}
     */
    public function addTransformer(TransformerInterface $transformer): TransformerSetInterface {
        $this->transformers[] = $transformer;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function getTransformers(): array {
        return $this->transformers;
    }

    /**
     * {@inheritDoc}
     */
    public function removeTransformer(TransformerInterface $transformer): TransformerSetInterface {

        $count = count($this->transformers);
        for ($i = $count - 1; 0 <= $i; --$i) {

            if ($transformer !== $this->transformers[$i]) {
                continue;
            }

            unset($this->transformers[$i]);
        }

        return $this;
    }

    /**
     * Set the transformers.
     *
     * @param TransformerInterface[] $transformers The transformers.
     * @return TransformerSetInterface Returns this transformer set.
     */
    protected function setTransformers(array $transformers): TransformerSetInterface {
        $this->transformers = $transformers;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function transform($value) {

        $result = $value;
        foreach ($this->getTransformers() as $current) {
            $result = $current->transform($result);
        }

        return $result;
    }
}
