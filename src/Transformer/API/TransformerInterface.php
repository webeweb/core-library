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
 * Transformer interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Transformer\API
 */
interface TransformerInterface {

    /**
     * Transform a value.
     *
     * @param mixed $value The value.
     * @return mixed Return the transformed value.
     */
    public function transform($value);
}
