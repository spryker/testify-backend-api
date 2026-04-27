<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Glue\TestifyBackendApi\Dependency\Facade;

use Symfony\Component\Console\Output\OutputInterface;

interface TestifyBackendApiToQueueFacadeInterface
{
    /**
     * @param array<string, mixed> $options
     */
    public function startWorker(string $command, OutputInterface $output, array $options = []): void;

    public function areQueuesEmpty(): bool;
}
