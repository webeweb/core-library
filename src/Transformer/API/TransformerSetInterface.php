<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Transformer\API;

/**
 * Transformer set interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Transformer\API
 */
interface TransformerSetInterface {

    /**
     * Add a transformer.
     *
     * @param TransformerInterface $transformer The transformer.
     * @return TransformerSetInterface Returns this transformer set.
     */
    public function addTransformer(TransformerInterface $transformer): TransformerSetInterface;

    /**
     * Get the transformers.
     *
     * @return TransformerInterface[] Returns the transformers.
     */
    public function getTransformers(): array;

    /**
     * Remove a transformer.
     *
     * @param TransformerInterface $transformer The transformer.
     * @return TransformerSetInterface Returns this transformer set.
     */
    public function removeTransformer(TransformerInterface $transformer): TransformerSetInterface;

    /**
     * Transform a value.
     *
     * @param mixed $value The value.
     * @return mixed Return the transformed value.
     */
    public function transform($value);
}
