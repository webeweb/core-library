<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Common\Tests\Fixtures\Serializer;

use WBW\Library\Common\Serializer\CsvSerializable;

/**
 * Test CSV serializable.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Fixtures\Serializer
 */
class TestCsvSerializable implements CsvSerializable {

    /**
     * {@inheritDoc}
     */
    public function csvSerialize(): ?string {
        return "";
    }
}
