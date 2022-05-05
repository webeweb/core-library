<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Provider\Tests\Fixtures;

use Psr\Log\LoggerInterface;
use WBW\Library\Provider\AbstractProvider;
use WBW\Library\Provider\Request\AbstractRequest;

/**
 * Test provider.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Provider\Tests\Fixtures
 */
class TestProvider extends AbstractProvider {

    /**
     * Constructor.
     *
     * @param LoggerInterface|null $logger The logger.
     */
    public function __construct(LoggerInterface $logger = null) {
        parent::__construct($logger);
    }

    /**
     * {@inheritdoc}
     */
    public function buildResourcePath(AbstractRequest $request): string {
        return parent::buildResourcePath($request);
    }

    /**
     * {@inheritdDoc}
     */
    public function logInfo(string $message, array $context): AbstractProvider {
        return parent::logInfo($message, $context);
    }
}
